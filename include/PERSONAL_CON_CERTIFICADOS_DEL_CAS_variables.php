<?php
$strTableName="PERSONAL CON CERTIFICADOS DEL CAS";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="old_cas";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PERSONAL CON CERTIFICADOS DEL CAS");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PERSONAL CON CERTIFICADOS DEL CAS"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>