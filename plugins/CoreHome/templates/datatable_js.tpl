
<script type="text/javascript" defer="defer">
$(document).ready(function(){literal}{{/literal} 
	dataTables['{$properties.uniqueId}'] = new dataTable();
	dataTables['{$properties.uniqueId}'].param = {literal}{{/literal} 
	{foreach from=$javascriptVariablesToSet key=name item=value name=loop}
		{$name}: {if is_array($value)}{','|implode:$value}{else}'{$value}'{/if} {if !$smarty.foreach.loop.last},{/if}
	{/foreach}
	{literal}};{/literal}
	dataTables['{$properties.uniqueId}'].init('{$properties.uniqueId}');
{literal}}{/literal});
</script>
