<?php
$USAGE = "
Usage: /path/to/cli/php ".@$_SERVER['argv'][0]." <hostname> [<current_periods_timeout>]
<hostname>: Piwik hostname eg. localhost, localhost/piwik
<current_periods_timeout>: Current week/month/year will be processed at most every <current_periods_timeout> seconds. Defaults to 3600.

This script should be executed every hour, or as a deamon.

For more help and documentation, try $ /path/to/cli/php ".@$_SERVER['argv'][0]." help
";


$HELP = "
= Description =
This script will automatically process all reports for websites tracked in Piwik. 
See for more information http://piwik.org/docs/setup-auto-archiving/
 
= Example usage =
$ /usr/bin/php /path/to/piwik/misc/cron/archive.php localhost/piwik 6200
This call will archive all websites reports calling the API on http://localhost/piwik/index.php?...
It will only process the current week / current month / current year more if the existing reports are older than 2 hours (6200s).
Setting a large timeout for periods ensures best performance when Piwik tracks thousands of websites or a few very high traffic sites.

$ /usr/bin/php /path/to/piwik/misc/cron/archive.php localhost/piwik 1
Setting <current_periods_timeout> to 1 ensures that whenever today's reports are processed, the current week/month/year will 
also be reprocessed. This is less efficient than setting a timeout, but ensures that all reports are kept up to date as often as possible.

= Sample output =
See this link for a sample output:  

= Requirements =
 * Requires PHP CLI and Curl php extension
 * It is recommended to disable browser based archiving as per documentation in: http://piwik.org/docs/setup-auto-archiving/

= More information =
This script is an optimized rewrite of archive.sh in PHP, allowing for more flexibility 
and better near real-time performance when Piwik tracks thousands of websites.

When executed, this script does the following:
- Fetches Super User token_auth from config file
- Calls API to get the list of all websites Ids with new visits since the last archive.php succesful run
- Calls API to get the list of segments to pre-process
The script then loops over these websites & segments and calls the API to pre-process these reports.
At the end, some basic metrics and processing time are logged on screen.

Notes about the algorithm:
- To improve performance, API is called with date=last1 whenever possible, instead of last52.
  To do so, the script logs the last time it executed correctly.
- The script tries to achieve Near real time for \"today\" reports, processing \"period=day\" as frequently as possible.
- The script will only process (or re-process) reports for Current week / Current month  
	 or Current year at most once per hour. To do so, the script logs last execution time for each website.
  You can change this <current_periods_timeout> timeout as a parameter when calling archive.php script.
  The concept is to archive daily report as often as possible, to stay near real time on \"daily\" reports,
  while allowing more stale data for the current week/month/year reports. 
  
= Ideas for improvements =
 TODO 
 - Deploy
 - Error handling: check run as cron will email errors.
   Test memory error in php response is caught and reported and flag success not set
 - Once an hour max: run archiving for previousN for websites which days have just 
   finished in the last 2 hours in their timezones
 - Continuously: Process first all period=day, then process all other periods 
 - On request: option to do a full run, previous 52, of all sites.
   If no visit for previous52 days, don't run period archiving.	
 - Ensure script can only run once at a time, for hourly crons, using DB lock, named piwik_archive.php
 - Check also: http://dev.piwik.org/trac/ticket/1938
 
 - Core: check that on first day of month, if request last month from UI, 
   it returns last temporary monthly report generated, if the last month haven't yet been processed / finalized
 - FAQ for using this archive.php instead of archive.sh/.ps1 to deprecate + doc update
 - FAQ for daemon like process. Run 2 separate for days and week/month/year? 
 - Optimization: Run first most often requested websites, weighted by visits in the site (and/or time to generate the report)
   to run more often websites that are faster to process while processing often for power users using frequently piwik.
 - UI: Add 'report last processed X s ago' in UI grey box 'About'
";
define('PIWIK_INCLUDE_PATH', realpath('../../'));
define('PIWIK_USER_PATH', PIWIK_INCLUDE_PATH);
define('PIWIK_ENABLE_DISPATCH', false);
define('PIWIK_ENABLE_ERROR_HANDLER', false);
define('PIWIK_ENABLE_SESSION_START', false);
require_once PIWIK_INCLUDE_PATH . "/index.php";
require_once PIWIK_INCLUDE_PATH . "/core/API/Request.php";

$archiving = new Archiving;
$archiving->init();
$archiving->run();
$archiving->end();

class Archiving
{
	protected $piwikUrl = false;
	protected $token_auth = false;
	protected $processPeriodsMaximumEverySeconds = 3600;
	const OPTION_ARCHIVING_FINISHED_TS = "LastCompletedFullArchiving";
	
	protected $visits = 0;
	protected $requests = 0;

	/**
	 * By default, will process last 52 days/weeks/months/year.
	 * It will be overwritten by the number of days since last archiving ran until completion.
	 */
	protected $dateLast = 52; 
	
	private function log($m)
	{
//		echo $m . "\n";
		Piwik::log($m);
	}
	
	/**
	 * Issues a request to $url
	 */
	protected function request($url)
	{
		$url = $this->piwikUrl.$url . '&trigger=archivephp';
//		$this->log($url);
		$response = trim(@file_get_contents($url));
		
		if(empty($response)
			|| stripos($response, 'error')) {
			$this->logError("Got invalid response from $url. Response was '$response'");
		}
		return $response;
	}
	
	//TODO: should report error on stderr
	private function logError($m)
	{
		$this->log("ERROR: $m");
		exit;
	}
	
	/**
	 * Displays script usage
	 */
	protected function usage()
	{
		global $USAGE;
		$this->logLines($USAGE);
	}
	
	/**
	 * Displays script help
	 */
	protected function help()
	{
		global $HELP;
		$this->logLines($HELP);
	}
	
	private function logLines($t)
	{
		foreach(explode(PHP_EOL, $t) as $line) {
			$this->log($line);
		}
	}
	
	public function init()
	{
		// Init Piwik, connect DB, create log & config objects, etc.
		try {
			Piwik_FrontController::getInstance()->init();
		} catch(Exception $e) {
			echo "ERROR: During Piwik init, Message: ".$e->getMessage();
			exit;
		}
		
		// Make sure this is executed in CLI only (no web access)
		if(!Piwik_Common::isPhpCliMode())
		{
			die("This script archive.php must only be executed only in command line CLI mode. <br/>
			In a shell, execute for example the following to trigger archiving on the local Piwik server available at 'localhost/piwik'<br/>
			<code>$ /path/to/php /path/to/piwik/misc/cron/archive.php localhost/piwik</code>");
		}
		
		// Setting up Logging configuration: log on screen all messages for the script run
		Zend_Registry::get('config')->disableSavingConfigurationFileUpdates();
		Zend_Registry::get('config')->log->log_only_when_debug_parameter = 0;
		Zend_Registry::get('config')->log->logger_message = array("logger_message" => "screen");
		Piwik::createLogObject();
		
		// Verify requirements
		if(!function_exists("curl_multi_init")) {
			$this->log("ERROR: this script requires curl extension php_curl enabled in your CLI php.ini");
			$this->usage();
			exit;
		}
		
		// Verify script is called with server URL
		if ($_SERVER['argc'] != 2
			&& $_SERVER['argc'] != 3) {
			$this->usage();
		    exit;
		}
		
		// Display usage & help
		if ($_SERVER['argc'] == 2
			&& in_array($_SERVER['argv'][1], array("help", "-h", "h")))
		{
			$this->usage();
			$this->help();
			exit;
		}
		
		// Testing timeout parameter
		if ($_SERVER['argc'] == 3) {
			$_SERVER['argv'][2] = trim($_SERVER['argv'][2]);
			if(!is_numeric($_SERVER['argv'][2]))
			{
				$this->log("Expecting <current_periods_timeout> to be a number of seconds, got {$_SERVER['argv'][2]}");
				$this->usage();
				exit;
			}
			$this->processPeriodsMaximumEverySeconds = (int)$_SERVER['argv'][2];
			
			// Ensure the cache for periods is at least as high as cache for today
			$this->processPeriodsMaximumEverySeconds = max($this->processPeriodsMaximumEverySeconds, Piwik_ArchiveProcessing::getTodayArchiveTimeToLive());
			if($this->processPeriodsMaximumEverySeconds != $_SERVER['argv'][2])
			{
				$this->log("WARNING: Automatically increasing <current_periods_timeout> from {$_SERVER['argv'][2]} to {$this->processPeriodsMaximumEverySeconds} to match the cache timeout for Today's report specified in Piwik UI > Settings > General Settings");
			}
		}
		// Recommend to disable browser archiving when using this script
		if( Piwik_ArchiveProcessing::isBrowserTriggerArchivingEnabled() )
		{
			$this->log("WARNING: you should probably disable Browser archiving in Piwik UI > Settings > General Settings. See doc at: http://piwik.org/docs/setup-auto-archiving/");
		}
		$this->timeLastCompleted = Piwik_GetOption(self::OPTION_ARCHIVING_FINISHED_TS);
		
		$this->logSection("INIT");
		$this->piwikUrl ="http://{$_SERVER['argv'][1]}/index.php";
		$this->log("Querying Piwik API at: {$this->piwikUrl}");		
		
		// Fetching super user token_auth
		$login = Zend_Registry::get('config')->superuser->login;
		$password = Zend_Registry::get('config')->superuser->password;
		$this->token_auth = $this->request("?module=API&method=UsersManager.getTokenAuth&userLogin=$login&md5Password=$password&format=php&serialize=0");
		if(strlen($this->token_auth) != 32 ) {
			$this->logError("token_auth is expected to be 32 characters long. Got a different response: ". substr($this->token_auth,0,100)."...");
		}
		$this->log("Running as Super User: $login");
		
		// Fetching websites to process
		Piwik::setUserIsSuperUser(true);
		$this->allWebsites = Piwik_SitesManager_API::getInstance()->getAllSitesId();
		
		// - If archive.php already ran at least once, we only re-archive 
		$result = $this->request("?module=API&method=SitesManager.getSitesIdWithVisits&token_auth=".$this->token_auth."&format=csv&convertToUnicode=0" . ($this->timeLastCompleted !== false ? "&timestamp=".$this->timeLastCompleted : ""));
		$this->websites = explode("\n", $result);
		if(!is_array($this->websites)
			|| $this->websites[0] == "No data available" ) {
			$this->websites = array();
		}
		$this->log(count($this->websites). " Websites with traffic since last run ". (!empty($this->websites) ? ": ".implode(", ", $this->websites) : ""));
		
		// Fetching segments to process
		$result = $this->request("?module=API&method=CoreAdminHome.getKnownSegmentsToArchive&token_auth=".$this->token_auth."&format=csv&convertToUnicode=0");
		$this->segments  = explode("\n", $result);
		// Remove value from segments
		unset($this->segments[array_search('value', $this->segments)]);
		$this->log("Segments to pre-process: ". implode(", ", $this->segments));
		
		$this->log("Notes");
		// Try and not request older data we know is already archived
		if($this->timeLastCompleted !== false)
		{
			$dateLast = time() - $this->timeLastCompleted;
			if($dateLast > 0)
			{
				$this->dateLast = floor($dateLast / 86400) + 1;
				$this->log("- Full archiving last executed ".Piwik::getPrettyTimeFromSeconds($dateLast, true, $isHtml = false)." ago, only requesting API with date=last".$this->dateLast);
			}
		}
		// Information about timeout
		$this->log("- Reports for today will be processed at most every ".Piwik_ArchiveProcessing::getTodayArchiveTimeToLive()." seconds. You can change this value in Piwik UI > Settings > General Settings");
		$this->log("- Reports for the current week/month/year will be refreshed at most every ".$this->processPeriodsMaximumEverySeconds." seconds");
	}

	/**
	 * Returns URL to process reports for the $idsite on a given period with no segment
	 */
	protected function getVisitsRequestUrl($idsite, $period)
	{
		return "?module=API&method=VisitsSummary.getVisits&idSite=$idsite&period=$period&date=last".$this->dateLast."&format=php&token_auth=".$this->token_auth;
	}
	
	protected function lastRunKey($idsite)
	{
		return "lastRunArchive_$idsite";
	}
	/**
	 * Main function, runs archiving on all websites with new activity
	 */
	public function run()
	{
		$websitesWithVisitsSinceLastRun = 
			$skippedPeriodsArchivesWebsite = 
			$archivedPeriodsArchivesWebsite = 0;
		$timer = new Piwik_Timer;
		
		$this->logSection("START");
		$this->log("Starting Piwik reports archiving...");
		foreach ($this->websites as $idsite) 
		{
		    if ($idsite > 0) 
		    {
	            $url = $this->getVisitsRequestUrl($idsite, "day");
	            $response = $this->request($url);
	            $response = unserialize($response);
	            $visitsToday = end($response);
	            $this->requests++;
	            
		        $timerWebsite = new $timer;
	            if($visitsToday <= 0)
	            {
	            	$this->log("Skipped website $idsite, no visit today.");
	            	break;
	            }
	            
	            $this->visits += $visitsToday;
	            $websitesWithVisitsSinceLastRun++;
	            $this->archiveVisitsAndSegments($idsite, "day");
	            
	            //TODO QUEUE THIS
	            
	            $lastRunForWebsite = Piwik_GetOption( $this->lastRunKey($idsite) );
	            $shouldArchivePeriods = (time() - $lastRunForWebsite) > $this->processPeriodsMaximumEverySeconds;
//	            $this->log("Archiving idsite = $idsite...");
        		// For period other than days, we only re-process the reports at most
	        	if(
	        		// 1) every $processPeriodsMaximumEverySeconds
	        		$shouldArchivePeriods
	        		// 2) OR always if script never executed for this website before
	        		|| $lastRunForWebsite === false)
        		{
			        foreach (array('week', 'month', 'year') as $period) 
			        {
	        			$this->archiveVisitsAndSegments($idsite, $period);
	        			
	        		}
        			// Record succesful run of this website archiving
        			Piwik_SetOption( $this->lastRunKey($idsite), time() );
        			$archivedPeriodsArchivesWebsite++;
		        }
		        else
		        {
		        	$skippedPeriodsArchivesWebsite++;
		        }
		        
		        Piwik::log("Archived idsite = $idsite, today = $visitsToday visits, ". $timerWebsite);
		    }
		}
		
		$this->log("Done archiving!");
		
		$this->logSection("SUMMARY");
		$this->log("Total daily visits archived: ". $this->visits);
		$this->log("Archived today's report for $websitesWithVisitsSinceLastRun websites");

		$totalWebsites = count($this->allWebsites);
		$skipped = $totalWebsites - $websitesWithVisitsSinceLastRun;
		$this->log("Archived week/month/year for $archivedPeriodsArchivesWebsite websites. ");
		$this->log("Skipped $skippedPeriodsArchivesWebsite websites week/month/year archiving: existing reports are less than {$this->processPeriodsMaximumEverySeconds} seconds old");
		$this->log("Skipped $skipped websites: no new visit since the last script execution");
		$this->log("Total API requests: $this->requests");
		$this->log($timer);
		$this->logSection("SCHEDULED TASKS");
		$this->log("Starting Scheduled tasks... ");
		
		$this->request("?module=API&method=CoreAdminHome.runScheduledTasks&format=csv&convertToUnicode=0&token_auth=".$this->token_auth);
		$this->log("done");
	}
	
	private function archiveVisitsAndSegments($idsite, $period)
	{
		$this->log("Archiving idsite = $idsite, period = $period...");
	    $aCurl = array();
		$mh = curl_multi_init();
		$url = $this->piwikUrl . $this->getVisitsRequestUrl($idsite, $period);
	    // already processed above for "day"
	    if($period != "day")
	    {
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_multi_add_handle($mh, $ch);
			$aCurl[] = $ch;
			$this->requests++;
	    }
	    
	    foreach ($this->segments as $segment) {
			$ch = curl_init($url.'&segment='.urlencode($segment));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_multi_add_handle($mh, $ch);
			$aCurl[] = $ch;
			$this->requests++;
	    }
	    $running=null;
	    do {
			usleep(10000);
			curl_multi_exec($mh,$running);
	    } while ($running > 0);
	
	    foreach ($aCurl as $ch) {
	    	curl_multi_remove_handle($mh, $ch);
	    }
	    curl_multi_close($mh);
	}
	
	
	/**
	 * Logs a section in the output
	 */
	private function logSection($title="")
	{
		$this->log("---------------------------");
		$this->log($title);
	}
	
	/**
	 * End of the script
	 */
	public function end()
	{
		// Logs the succesful script execution until completion
		Piwik_SetOption(self::OPTION_ARCHIVING_FINISHED_TS, time());
	}
}
