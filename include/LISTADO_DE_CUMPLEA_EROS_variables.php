<?php
$strTableName="LISTADO DE CUMPLEAÑEROS";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="t_planilla_c";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("LISTADO DE CUMPLEAÑEROS");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["LISTADO DE CUMPLEAÑEROS"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>