<?php
/**
 * Piwik - Open source web analytics
 * 
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html Gpl v3 or later
 * @version $Id: ExamplePlugin.php 169 2008-01-14 05:41:15Z matt $
 * 
 * @package Piwik_LanguageManager
 */

require_once "LanguagesManager/API.php";

class Piwik_LanguagesManager extends Piwik_Plugin
{
	public function getInformation()
	{
		return array(
			'name' => 'Languages Management',
			'description' => 'This plugin will display a list of the available languages for the Piwik interface. The language selected will be saved in the preferences for each user.',
			'author' => 'Piwik',
			'homepage' => 'http://piwik.org/',
			'version' => '0.1',
		);
	}

	public function getListHooksRegistered()
	{
		return array( 
			'template_js_import' => 'js',
			'template_css_import' => 'css',
			'template_topBar' => 'showLanguagesSelector',
			'Translate.getLanguageToLoad' => 'getLanguageToLoad',
		);
	}

	function js()
	{
		echo '<script type="text/javascript" src="plugins/LanguagesManager/templates/fdd2div-modified.js"></script>';
	}

	function css()
	{
		echo '<link rel="stylesheet" type="text/css" href="plugins/LanguagesManager/templates/styles.css" />';
	}
	
	function showLanguagesSelector()
	{
		$view = new Piwik_View("LanguagesManager/templates/languages.tpl");
		$view->languages = Piwik_LanguagesManager_API::getAvailableLanguageNames();
		$view->currentLanguageCode = self::getLanguageCodeForCurrentUser();
		$view->currentLanguageName = self::getLanguageNameForCurrentUser();
		echo $view ->render();
	}
	
	function getLanguageToLoad($notification)
	{
		$language =& $notification->getNotificationObject();
		$language = self::getLanguageCodeForCurrentUser();
	}
	
	public function install()
	{
		// we catch the exception
		try{
			$sql = "CREATE TABLE ". Piwik::prefixTable('user_language')." (
					login VARCHAR( 20 ) NOT NULL ,
					language VARCHAR( 10 ) NOT NULL ,
					PRIMARY KEY ( login )
					) " ;
			Piwik_Query($sql);
		} catch(Zend_Db_Statement_Exception $e){
			// mysql code error 1050:table already exists
			// see bug #153 http://dev.piwik.org/trac/ticket/153
			if(ereg('1050',$e->getMessage()))
			{
				return;
			}
			else
			{
				throw $e;
			}
		}
	}
	
	public function uninstall()
	{
		$sql = "DROP TABLE ". Piwik::prefixTable('user_language') ;
		Piwik_Query($sql);		
	}
	
	
	/**
	 * @return string Two letters language code, eg. "fr"
	 */
	static public function getLanguageCodeForCurrentUser()
	{
		$languageCode = self::getLanguageFromPreferences();
		if(!Piwik_LanguagesManager_API::isLanguageAvailable($languageCode))
		{
			$languageCode = Piwik_Common::extractLanguageCodeFromBrowserLanguage(Piwik_Common::getBrowserLanguage(), self::getAvailableLanguages());
		}
		if(!Piwik_LanguagesManager_API::isLanguageAvailable($languageCode))
		{
			$languageCode = 'en';
		}
		return $languageCode;
	}
	
	/**
	 * @return string Full english language string, eg. "French"
	 */
	static public function getLanguageNameForCurrentUser()
	{
		$languageCode = self::getLanguageCodeForCurrentUser();
		$languages = Piwik_LanguagesManager_API::getAvailableLanguageNames();
		foreach($languages as $language)
		{
			if($language['code'] === $languageCode) 
			{
				return $language['name'];
			}
		}
	}

	static protected function getLanguageFromPreferences()
	{
		$currentUser = Piwik::getCurrentUserLogin();
		if($currentUser == 'anonymous')
		{
			if(!isset($_SESSION['language']))
			{
				return false;
			}
			return $_SESSION['language'];
		}
		return Piwik_LanguagesManager_API::getLanguageForUser($currentUser);
	}
	
	
	
}

