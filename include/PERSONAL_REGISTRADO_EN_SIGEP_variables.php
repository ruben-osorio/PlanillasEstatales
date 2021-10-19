<?php
$strTableName="PERSONAL REGISTRADO EN SIGEP";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="t_sigep";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PERSONAL REGISTRADO EN SIGEP");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PERSONAL REGISTRADO EN SIGEP"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>