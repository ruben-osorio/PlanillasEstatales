<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["funcionario"]["baja.id_func"]["edit"] = array("table" => "baja", "field" => "id_func", "page" => "edit");
	$lookupTableLinks["t_caja"]["soc_secu.name_sec"]["edit"] = array("table" => "soc_secu", "field" => "name_sec", "page" => "edit");
	$lookupTableLinks["t_tipo_documento"]["t_documentos.tipo_documento"]["edit"] = array("table" => "t_documentos", "field" => "tipo_documento", "page" => "edit");
	$lookupTableLinks["funcionario"]["t_sigep.id_func"]["edit"] = array("table" => "t_sigep", "field" => "id_func", "page" => "edit");
	$lookupTableLinks["funcionario"]["PERSONAL_REGISTRADO_EN_SIGEP.id_func"]["search"] = array("table" => "PERSONAL REGISTRADO EN SIGEP", "field" => "id_func", "page" => "search");
	$lookupTableLinks["t_tipo_multa"]["t_multas.tipo_multa"]["edit"] = array("table" => "t_multas", "field" => "tipo_multa", "page" => "edit");
}

?>