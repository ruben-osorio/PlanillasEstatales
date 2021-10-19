<?php
$strTableName="ABONOS BANCARIOS";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="t_planilla";

$gstrOrderBy="ORDER BY t_planilla.id_func";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("ABONOS BANCARIOS");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["ABONOS BANCARIOS"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>