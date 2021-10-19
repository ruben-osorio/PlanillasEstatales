<?php
$strTableName="GENERACIÓN DEL PERSONAL QUE PRESENTA FACTURAS PARA LA RETENCIÓN IMPOSITIVA";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="t_facturas110";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("GENERACIÓN DEL PERSONAL QUE PRESENTA FACTURAS PARA LA RETENCIÓN IMPOSITIVA");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["GENERACIÓN DEL PERSONAL QUE PRESENTA FACTURAS PARA LA RETENCIÓN IMPOSITIVA"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>