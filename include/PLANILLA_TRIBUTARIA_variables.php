<?php
$strTableName="PLANILLA TRIBUTARIA";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="t_tributaria";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PLANILLA TRIBUTARIA");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PLANILLA TRIBUTARIA"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>