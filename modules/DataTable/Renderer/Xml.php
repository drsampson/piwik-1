<?php

/**
 * XML export. Using the excellent Pear::XML_Serializer.
 * We had to fix the PEAR library so that it works under PHP5 STRICT mode.
 * 
 * @package Piwik_DataTable
 * @subpackage Piwik_DataTable_Renderer
 */
require_once "DataTable/Renderer/Php.php";
class Piwik_DataTable_Renderer_Xml extends Piwik_DataTable_Renderer
{
	function __construct($table = null)
	{
		parent::__construct($table);
	}
	
	function render()
	{
		return $this->renderTable($this->table);
	}
	
	protected function renderTable($table)
	{
//		echo $table;exit;
		$renderer = new Piwik_DataTable_Renderer_Php($table, $serialize = false);
		$array = $renderer->flatRender();
		
//		var_dump($array); exit;

		require_once 'XML/Serializer.php';
		
		$options = array(
            XML_SERIALIZER_OPTION_INDENT       => '	',
            XML_SERIALIZER_OPTION_LINEBREAKS   => "\n",
			XML_SERIALIZER_OPTION_ROOT_NAME    => 'row',
            XML_SERIALIZER_OPTION_MODE         => XML_SERIALIZER_MODE_SIMPLEXML
        );
		    
		$serializer = new XML_Serializer($options);
		
		if($table instanceof Piwik_DataTable_Simple)
		{
			$serializer->setOption(XML_SERIALIZER_OPTION_ROOT_NAME, 'result');
		}
		
		$result = $serializer->serialize($array);

		$xmlStr = $serializer->getSerializedData();
		
		if(get_class($table) == 'Piwik_DataTable')
		{
			$xmlStr = "<result>\n".$xmlStr."\n</result>";
			$xmlStr = str_replace(">\n", ">\n\t",$xmlStr);
			$xmlStr = str_replace("\t</result>", "</result>",$xmlStr);
		}
		header('Content-type: text/xml');		
		return $xmlStr;
	}
}