<script type="text/javascript">
	{* define some global constants for the following javascript includes *}
	var piwik = new Object;
	
	{if !empty($layout) }
		piwik.dashboardLayout = '{$layout}';
	{else}
		//Load default layout...
		piwik.dashboardLayout = 'Actions.getActions~Actions.getDownloads|UserCountry.getCountry~UserSettings.getPlugin|Referers.getSearchEngines~Referers.getKeywords';
	{/if}
	
	piwik.availableWidgets = {$availableWidgets};
	piwik.idSite = {$idSite};
	piwik.period = "{$period}";
	piwik.currentDateStr = "{$date}";
</script>

<script type="text/javascript" src="libs/jquery/jquery.blockUI.js"></script>

<script type="text/javascript" src="libs/jquery/ui.mouse.js"></script>
<script type="text/javascript" src="libs/jquery/ui.sortable_modif.js"></script>

<script type="text/javascript" src="plugins/Dashboard/templates/Dashboard.js"></script>



<div class="sortDiv" id="dashboard">
 
	<div class="dialog" id="confirm"> 
	        <h2>Are you sure you want to delete this widget from your dashboard ?</h2> 
	        <input type="button" id="yes" value="Yes" /> 
	        <input type="button" id="no" value="No" /> 
	</div> 

	<div class="button" id="addWidget">
		Add a widget...
	</div>
	
	<div class="menu" id="widgetChooser">
		<div class="subMenu1">
		</div>
		
		<div class="subMenu2">
		</div>
		
		<div class="subMenu3">
		</div>
	</div>

	<div class="col" id="1">
	</div>
  
	<div class="col" id="2">
	</div>
	
	<div class="col" id="3">
	</div>
</div>
