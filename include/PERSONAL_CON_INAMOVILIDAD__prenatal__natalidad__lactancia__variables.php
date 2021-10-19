<?php
$strTableName="PERSONAL CON INAMOVILIDAD (prenatal, natalidad, lactancia)";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="t_planilla_c";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PERSONAL CON INAMOVILIDAD (prenatal, natalidad, lactancia)");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PERSONAL CON INAMOVILIDAD (prenatal, natalidad, lactancia)"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>