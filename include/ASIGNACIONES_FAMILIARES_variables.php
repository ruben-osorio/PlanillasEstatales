<?php
$strTableName="ASIGNACIONES FAMILIARES";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="t_asignaciones";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("ASIGNACIONES FAMILIARES");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["ASIGNACIONES FAMILIARES"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>