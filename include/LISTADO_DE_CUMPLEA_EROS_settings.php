<?php
require_once(getabspath("classes/cipherer.php"));




$tdataLISTADO_DE_CUMPLEA_EROS = array();	
	$tdataLISTADO_DE_CUMPLEA_EROS[".truncateText"] = true;
	$tdataLISTADO_DE_CUMPLEA_EROS[".NumberOfChars"] = 80; 
	$tdataLISTADO_DE_CUMPLEA_EROS[".ShortName"] = "LISTADO_DE_CUMPLEA_EROS";
	$tdataLISTADO_DE_CUMPLEA_EROS[".OwnerID"] = "";
	$tdataLISTADO_DE_CUMPLEA_EROS[".OriginalTable"] = "t_planilla_c";

//	field labels
$fieldLabelsLISTADO_DE_CUMPLEA_EROS = array();
$fieldToolTipsLISTADO_DE_CUMPLEA_EROS = array();
$pageTitlesLISTADO_DE_CUMPLEA_EROS = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["Spanish"] = array();
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["Spanish"] = array();
	$pageTitlesLISTADO_DE_CUMPLEA_EROS["Spanish"] = array();
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["Spanish"]["id_func"] = "Id";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["Spanish"]["id_func"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["Spanish"]["fecha_nac"] = "Fecha Nacimiento";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["Spanish"]["fecha_nac"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["Spanish"]["sexo"] = "Sexo";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["Spanish"]["sexo"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["Spanish"]["item_contrato"] = "Item/Contrato";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["Spanish"]["item_contrato"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["Spanish"]["unidad"] = "Unidad";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["Spanish"]["unidad"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["Spanish"]["cargo"] = "Cargo";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["Spanish"]["cargo"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["Spanish"]["paterno"] = "Apellido Paterno";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["Spanish"]["paterno"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["Spanish"]["materno"] = "Apellido Materno";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["Spanish"]["materno"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["Spanish"]["nombres"] = "Nombres";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["Spanish"]["nombres"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["Spanish"]["ci"] = "CI";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["Spanish"]["ci"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["Spanish"]["exp"] = "Exp";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["Spanish"]["exp"] = "";
	$pageTitlesLISTADO_DE_CUMPLEA_EROS["Spanish"]["rprint"] = "LISTADO DE CUMPLEAÑEROS DE LA GESTIÓN ACTUAL";
	if (count($fieldToolTipsLISTADO_DE_CUMPLEA_EROS["Spanish"]))
		$tdataLISTADO_DE_CUMPLEA_EROS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS[""] = array();
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS[""] = array();
	$pageTitlesLISTADO_DE_CUMPLEA_EROS[""] = array();
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS[""]["id_func"] = "Id Func";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS[""]["id_func"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS[""]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS[""]["fecha_nac"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS[""]["sexo"] = "Sexo";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS[""]["sexo"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS[""]["item_contrato"] = "Item Contrato";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS[""]["item_contrato"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS[""]["unidad"] = "Unidad";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS[""]["unidad"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS[""]["cargo"] = "Cargo";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS[""]["cargo"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS[""]["paterno"] = "Paterno";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS[""]["paterno"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS[""]["materno"] = "Materno";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS[""]["materno"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS[""]["nombres"] = "Nombres";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS[""]["nombres"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS[""]["ci"] = "Ci";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS[""]["ci"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS[""]["exp"] = "Exp";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS[""]["exp"] = "";
	if (count($fieldToolTipsLISTADO_DE_CUMPLEA_EROS[""]))
		$tdataLISTADO_DE_CUMPLEA_EROS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["English"] = array();
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["English"] = array();
	$pageTitlesLISTADO_DE_CUMPLEA_EROS["English"] = array();
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["English"]["id_func"] = "Id Func";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["English"]["id_func"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["English"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["English"]["fecha_nac"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["English"]["sexo"] = "Sexo";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["English"]["sexo"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["English"]["item_contrato"] = "Item Contrato";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["English"]["item_contrato"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["English"]["unidad"] = "Unidad";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["English"]["unidad"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["English"]["cargo"] = "Cargo";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["English"]["cargo"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["English"]["paterno"] = "Paterno";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["English"]["paterno"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["English"]["materno"] = "Materno";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["English"]["materno"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["English"]["nombres"] = "Nombres";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["English"]["nombres"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["English"]["ci"] = "Ci";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["English"]["ci"] = "";
	$fieldLabelsLISTADO_DE_CUMPLEA_EROS["English"]["exp"] = "Exp";
	$fieldToolTipsLISTADO_DE_CUMPLEA_EROS["English"]["exp"] = "";
	if (count($fieldToolTipsLISTADO_DE_CUMPLEA_EROS["English"]))
		$tdataLISTADO_DE_CUMPLEA_EROS[".isUseToolTips"] = true;
}
	
	
	$tdataLISTADO_DE_CUMPLEA_EROS[".NCSearch"] = true;



$tdataLISTADO_DE_CUMPLEA_EROS[".shortTableName"] = "LISTADO_DE_CUMPLEA_EROS";
$tdataLISTADO_DE_CUMPLEA_EROS[".nSecOptions"] = 0;
$tdataLISTADO_DE_CUMPLEA_EROS[".recsPerRowList"] = 1;
$tdataLISTADO_DE_CUMPLEA_EROS[".recsPerRowPrint"] = 1;
$tdataLISTADO_DE_CUMPLEA_EROS[".mainTableOwnerID"] = "";
$tdataLISTADO_DE_CUMPLEA_EROS[".moveNext"] = 1;
$tdataLISTADO_DE_CUMPLEA_EROS[".entityType"] = 2;

$tdataLISTADO_DE_CUMPLEA_EROS[".strOriginalTableName"] = "t_planilla_c";




$tdataLISTADO_DE_CUMPLEA_EROS[".showAddInPopup"] = false;

$tdataLISTADO_DE_CUMPLEA_EROS[".showEditInPopup"] = false;

$tdataLISTADO_DE_CUMPLEA_EROS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataLISTADO_DE_CUMPLEA_EROS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataLISTADO_DE_CUMPLEA_EROS[".fieldsForRegister"] = array();

$tdataLISTADO_DE_CUMPLEA_EROS[".listAjax"] = false;

	$tdataLISTADO_DE_CUMPLEA_EROS[".audit"] = false;

	$tdataLISTADO_DE_CUMPLEA_EROS[".locking"] = false;

$tdataLISTADO_DE_CUMPLEA_EROS[".edit"] = true;
$tdataLISTADO_DE_CUMPLEA_EROS[".afterEditAction"] = 1;
$tdataLISTADO_DE_CUMPLEA_EROS[".closePopupAfterEdit"] = 1;
$tdataLISTADO_DE_CUMPLEA_EROS[".afterEditActionDetTable"] = "";

$tdataLISTADO_DE_CUMPLEA_EROS[".add"] = true;
$tdataLISTADO_DE_CUMPLEA_EROS[".afterAddAction"] = 1;
$tdataLISTADO_DE_CUMPLEA_EROS[".closePopupAfterAdd"] = 1;
$tdataLISTADO_DE_CUMPLEA_EROS[".afterAddActionDetTable"] = "";

$tdataLISTADO_DE_CUMPLEA_EROS[".list"] = true;

$tdataLISTADO_DE_CUMPLEA_EROS[".inlineEdit"] = true;
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineAdd"] = true;
$tdataLISTADO_DE_CUMPLEA_EROS[".view"] = true;


$tdataLISTADO_DE_CUMPLEA_EROS[".exportTo"] = true;

$tdataLISTADO_DE_CUMPLEA_EROS[".printFriendly"] = true;

$tdataLISTADO_DE_CUMPLEA_EROS[".delete"] = true;

$tdataLISTADO_DE_CUMPLEA_EROS[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataLISTADO_DE_CUMPLEA_EROS[".searchSaving"] = false;
//

$tdataLISTADO_DE_CUMPLEA_EROS[".showSearchPanel"] = true;
		$tdataLISTADO_DE_CUMPLEA_EROS[".flexibleSearch"] = true;		

if (isMobile())
	$tdataLISTADO_DE_CUMPLEA_EROS[".isUseAjaxSuggest"] = false;
else 
	$tdataLISTADO_DE_CUMPLEA_EROS[".isUseAjaxSuggest"] = true;




$tdataLISTADO_DE_CUMPLEA_EROS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataLISTADO_DE_CUMPLEA_EROS[".isUseTimeForSearch"] = false;





$tdataLISTADO_DE_CUMPLEA_EROS[".allSearchFields"] = array();
$tdataLISTADO_DE_CUMPLEA_EROS[".filterFields"] = array();
$tdataLISTADO_DE_CUMPLEA_EROS[".requiredSearchFields"] = array();

$tdataLISTADO_DE_CUMPLEA_EROS[".allSearchFields"][] = "id_func";
	$tdataLISTADO_DE_CUMPLEA_EROS[".allSearchFields"][] = "fecha_nac";
	$tdataLISTADO_DE_CUMPLEA_EROS[".allSearchFields"][] = "sexo";
	$tdataLISTADO_DE_CUMPLEA_EROS[".allSearchFields"][] = "item_contrato";
	$tdataLISTADO_DE_CUMPLEA_EROS[".allSearchFields"][] = "paterno";
	$tdataLISTADO_DE_CUMPLEA_EROS[".allSearchFields"][] = "materno";
	$tdataLISTADO_DE_CUMPLEA_EROS[".allSearchFields"][] = "nombres";
	$tdataLISTADO_DE_CUMPLEA_EROS[".allSearchFields"][] = "ci";
	$tdataLISTADO_DE_CUMPLEA_EROS[".allSearchFields"][] = "exp";
	$tdataLISTADO_DE_CUMPLEA_EROS[".allSearchFields"][] = "unidad";
	$tdataLISTADO_DE_CUMPLEA_EROS[".allSearchFields"][] = "cargo";
	

$tdataLISTADO_DE_CUMPLEA_EROS[".googleLikeFields"] = array();
$tdataLISTADO_DE_CUMPLEA_EROS[".googleLikeFields"][] = "id_func";
$tdataLISTADO_DE_CUMPLEA_EROS[".googleLikeFields"][] = "fecha_nac";
$tdataLISTADO_DE_CUMPLEA_EROS[".googleLikeFields"][] = "sexo";
$tdataLISTADO_DE_CUMPLEA_EROS[".googleLikeFields"][] = "item_contrato";
$tdataLISTADO_DE_CUMPLEA_EROS[".googleLikeFields"][] = "unidad";
$tdataLISTADO_DE_CUMPLEA_EROS[".googleLikeFields"][] = "cargo";
$tdataLISTADO_DE_CUMPLEA_EROS[".googleLikeFields"][] = "paterno";
$tdataLISTADO_DE_CUMPLEA_EROS[".googleLikeFields"][] = "materno";
$tdataLISTADO_DE_CUMPLEA_EROS[".googleLikeFields"][] = "nombres";
$tdataLISTADO_DE_CUMPLEA_EROS[".googleLikeFields"][] = "ci";
$tdataLISTADO_DE_CUMPLEA_EROS[".googleLikeFields"][] = "exp";


$tdataLISTADO_DE_CUMPLEA_EROS[".advSearchFields"] = array();
$tdataLISTADO_DE_CUMPLEA_EROS[".advSearchFields"][] = "id_func";
$tdataLISTADO_DE_CUMPLEA_EROS[".advSearchFields"][] = "fecha_nac";
$tdataLISTADO_DE_CUMPLEA_EROS[".advSearchFields"][] = "sexo";
$tdataLISTADO_DE_CUMPLEA_EROS[".advSearchFields"][] = "item_contrato";
$tdataLISTADO_DE_CUMPLEA_EROS[".advSearchFields"][] = "paterno";
$tdataLISTADO_DE_CUMPLEA_EROS[".advSearchFields"][] = "materno";
$tdataLISTADO_DE_CUMPLEA_EROS[".advSearchFields"][] = "nombres";
$tdataLISTADO_DE_CUMPLEA_EROS[".advSearchFields"][] = "ci";
$tdataLISTADO_DE_CUMPLEA_EROS[".advSearchFields"][] = "exp";
$tdataLISTADO_DE_CUMPLEA_EROS[".advSearchFields"][] = "unidad";
$tdataLISTADO_DE_CUMPLEA_EROS[".advSearchFields"][] = "cargo";

$tdataLISTADO_DE_CUMPLEA_EROS[".tableType"] = "report";

$tdataLISTADO_DE_CUMPLEA_EROS[".printerPageOrientation"] = 0;
$tdataLISTADO_DE_CUMPLEA_EROS[".nPrinterPageScale"] = 100;





$tdataLISTADO_DE_CUMPLEA_EROS[".geocodingEnabled"] = false;

//report settings
$tdataLISTADO_DE_CUMPLEA_EROS[".printReportLayout"] = 6;	

$tdataLISTADO_DE_CUMPLEA_EROS[".reportPrintPartitionType"] = 0;	
$tdataLISTADO_DE_CUMPLEA_EROS[".reportPrintGroupsPerPage"] = 40;	
	$tdataLISTADO_DE_CUMPLEA_EROS[".lowGroup"] = 0;



$tdataLISTADO_DE_CUMPLEA_EROS[".pageSize"] = 20;	






$tdataLISTADO_DE_CUMPLEA_EROS[".repShowDet"] = true;

$tdataLISTADO_DE_CUMPLEA_EROS[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf
$tdataLISTADO_DE_CUMPLEA_EROS[".isPrinterPagePDF"] = true;
$tdataLISTADO_DE_CUMPLEA_EROS[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataLISTADO_DE_CUMPLEA_EROS[".strOrderBy"] = $tstrOrderBy;

$tdataLISTADO_DE_CUMPLEA_EROS[".orderindexes"] = array();

$tdataLISTADO_DE_CUMPLEA_EROS[".sqlHead"] = "SELECT id_func,  fecha_nac,  sexo,  item_contrato,  unidad,  cargo,  paterno,  materno,  nombres,  ci,  exp";
$tdataLISTADO_DE_CUMPLEA_EROS[".sqlFrom"] = "FROM t_planilla_c";
$tdataLISTADO_DE_CUMPLEA_EROS[".sqlWhereExpr"] = "";
$tdataLISTADO_DE_CUMPLEA_EROS[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLISTADO_DE_CUMPLEA_EROS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLISTADO_DE_CUMPLEA_EROS[".arrGroupsPerPage"] = $arrGPP;

$tdataLISTADO_DE_CUMPLEA_EROS[".highlightSearchResults"] = true;

$tableKeysLISTADO_DE_CUMPLEA_EROS = array();
$tableKeysLISTADO_DE_CUMPLEA_EROS[] = "id_func";
$tdataLISTADO_DE_CUMPLEA_EROS[".Keys"] = $tableKeysLISTADO_DE_CUMPLEA_EROS;

$tdataLISTADO_DE_CUMPLEA_EROS[".listFields"] = array();
$tdataLISTADO_DE_CUMPLEA_EROS[".listFields"][] = "id_func";
$tdataLISTADO_DE_CUMPLEA_EROS[".listFields"][] = "fecha_nac";
$tdataLISTADO_DE_CUMPLEA_EROS[".listFields"][] = "sexo";
$tdataLISTADO_DE_CUMPLEA_EROS[".listFields"][] = "item_contrato";
$tdataLISTADO_DE_CUMPLEA_EROS[".listFields"][] = "paterno";
$tdataLISTADO_DE_CUMPLEA_EROS[".listFields"][] = "materno";
$tdataLISTADO_DE_CUMPLEA_EROS[".listFields"][] = "nombres";
$tdataLISTADO_DE_CUMPLEA_EROS[".listFields"][] = "ci";
$tdataLISTADO_DE_CUMPLEA_EROS[".listFields"][] = "exp";
$tdataLISTADO_DE_CUMPLEA_EROS[".listFields"][] = "unidad";
$tdataLISTADO_DE_CUMPLEA_EROS[".listFields"][] = "cargo";

$tdataLISTADO_DE_CUMPLEA_EROS[".hideMobileList"] = array();


$tdataLISTADO_DE_CUMPLEA_EROS[".viewFields"] = array();
$tdataLISTADO_DE_CUMPLEA_EROS[".viewFields"][] = "id_func";
$tdataLISTADO_DE_CUMPLEA_EROS[".viewFields"][] = "fecha_nac";
$tdataLISTADO_DE_CUMPLEA_EROS[".viewFields"][] = "sexo";
$tdataLISTADO_DE_CUMPLEA_EROS[".viewFields"][] = "item_contrato";
$tdataLISTADO_DE_CUMPLEA_EROS[".viewFields"][] = "paterno";
$tdataLISTADO_DE_CUMPLEA_EROS[".viewFields"][] = "materno";
$tdataLISTADO_DE_CUMPLEA_EROS[".viewFields"][] = "nombres";
$tdataLISTADO_DE_CUMPLEA_EROS[".viewFields"][] = "ci";
$tdataLISTADO_DE_CUMPLEA_EROS[".viewFields"][] = "exp";
$tdataLISTADO_DE_CUMPLEA_EROS[".viewFields"][] = "unidad";
$tdataLISTADO_DE_CUMPLEA_EROS[".viewFields"][] = "cargo";

$tdataLISTADO_DE_CUMPLEA_EROS[".addFields"] = array();
$tdataLISTADO_DE_CUMPLEA_EROS[".addFields"][] = "id_func";
$tdataLISTADO_DE_CUMPLEA_EROS[".addFields"][] = "fecha_nac";
$tdataLISTADO_DE_CUMPLEA_EROS[".addFields"][] = "sexo";
$tdataLISTADO_DE_CUMPLEA_EROS[".addFields"][] = "item_contrato";
$tdataLISTADO_DE_CUMPLEA_EROS[".addFields"][] = "paterno";
$tdataLISTADO_DE_CUMPLEA_EROS[".addFields"][] = "materno";
$tdataLISTADO_DE_CUMPLEA_EROS[".addFields"][] = "nombres";
$tdataLISTADO_DE_CUMPLEA_EROS[".addFields"][] = "ci";
$tdataLISTADO_DE_CUMPLEA_EROS[".addFields"][] = "exp";
$tdataLISTADO_DE_CUMPLEA_EROS[".addFields"][] = "unidad";
$tdataLISTADO_DE_CUMPLEA_EROS[".addFields"][] = "cargo";

$tdataLISTADO_DE_CUMPLEA_EROS[".masterListFields"] = array();
$tdataLISTADO_DE_CUMPLEA_EROS[".masterListFields"][] = "id_func";
$tdataLISTADO_DE_CUMPLEA_EROS[".masterListFields"][] = "fecha_nac";
$tdataLISTADO_DE_CUMPLEA_EROS[".masterListFields"][] = "sexo";
$tdataLISTADO_DE_CUMPLEA_EROS[".masterListFields"][] = "item_contrato";
$tdataLISTADO_DE_CUMPLEA_EROS[".masterListFields"][] = "paterno";
$tdataLISTADO_DE_CUMPLEA_EROS[".masterListFields"][] = "materno";
$tdataLISTADO_DE_CUMPLEA_EROS[".masterListFields"][] = "nombres";
$tdataLISTADO_DE_CUMPLEA_EROS[".masterListFields"][] = "ci";
$tdataLISTADO_DE_CUMPLEA_EROS[".masterListFields"][] = "exp";
$tdataLISTADO_DE_CUMPLEA_EROS[".masterListFields"][] = "unidad";
$tdataLISTADO_DE_CUMPLEA_EROS[".masterListFields"][] = "cargo";

$tdataLISTADO_DE_CUMPLEA_EROS[".inlineAddFields"] = array();
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineAddFields"][] = "id_func";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineAddFields"][] = "fecha_nac";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineAddFields"][] = "sexo";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineAddFields"][] = "item_contrato";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineAddFields"][] = "paterno";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineAddFields"][] = "materno";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineAddFields"][] = "nombres";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineAddFields"][] = "ci";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineAddFields"][] = "exp";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineAddFields"][] = "unidad";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineAddFields"][] = "cargo";

$tdataLISTADO_DE_CUMPLEA_EROS[".editFields"] = array();
$tdataLISTADO_DE_CUMPLEA_EROS[".editFields"][] = "id_func";
$tdataLISTADO_DE_CUMPLEA_EROS[".editFields"][] = "fecha_nac";
$tdataLISTADO_DE_CUMPLEA_EROS[".editFields"][] = "sexo";
$tdataLISTADO_DE_CUMPLEA_EROS[".editFields"][] = "item_contrato";
$tdataLISTADO_DE_CUMPLEA_EROS[".editFields"][] = "paterno";
$tdataLISTADO_DE_CUMPLEA_EROS[".editFields"][] = "materno";
$tdataLISTADO_DE_CUMPLEA_EROS[".editFields"][] = "nombres";
$tdataLISTADO_DE_CUMPLEA_EROS[".editFields"][] = "ci";
$tdataLISTADO_DE_CUMPLEA_EROS[".editFields"][] = "exp";
$tdataLISTADO_DE_CUMPLEA_EROS[".editFields"][] = "unidad";
$tdataLISTADO_DE_CUMPLEA_EROS[".editFields"][] = "cargo";

$tdataLISTADO_DE_CUMPLEA_EROS[".inlineEditFields"] = array();
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineEditFields"][] = "id_func";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineEditFields"][] = "fecha_nac";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineEditFields"][] = "sexo";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineEditFields"][] = "item_contrato";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineEditFields"][] = "paterno";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineEditFields"][] = "materno";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineEditFields"][] = "nombres";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineEditFields"][] = "ci";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineEditFields"][] = "exp";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineEditFields"][] = "unidad";
$tdataLISTADO_DE_CUMPLEA_EROS[".inlineEditFields"][] = "cargo";

$tdataLISTADO_DE_CUMPLEA_EROS[".exportFields"] = array();
$tdataLISTADO_DE_CUMPLEA_EROS[".exportFields"][] = "id_func";
$tdataLISTADO_DE_CUMPLEA_EROS[".exportFields"][] = "fecha_nac";
$tdataLISTADO_DE_CUMPLEA_EROS[".exportFields"][] = "sexo";
$tdataLISTADO_DE_CUMPLEA_EROS[".exportFields"][] = "item_contrato";
$tdataLISTADO_DE_CUMPLEA_EROS[".exportFields"][] = "paterno";
$tdataLISTADO_DE_CUMPLEA_EROS[".exportFields"][] = "materno";
$tdataLISTADO_DE_CUMPLEA_EROS[".exportFields"][] = "nombres";
$tdataLISTADO_DE_CUMPLEA_EROS[".exportFields"][] = "ci";
$tdataLISTADO_DE_CUMPLEA_EROS[".exportFields"][] = "exp";
$tdataLISTADO_DE_CUMPLEA_EROS[".exportFields"][] = "unidad";
$tdataLISTADO_DE_CUMPLEA_EROS[".exportFields"][] = "cargo";

$tdataLISTADO_DE_CUMPLEA_EROS[".importFields"] = array();
$tdataLISTADO_DE_CUMPLEA_EROS[".importFields"][] = "id_func";
$tdataLISTADO_DE_CUMPLEA_EROS[".importFields"][] = "fecha_nac";
$tdataLISTADO_DE_CUMPLEA_EROS[".importFields"][] = "sexo";
$tdataLISTADO_DE_CUMPLEA_EROS[".importFields"][] = "item_contrato";
$tdataLISTADO_DE_CUMPLEA_EROS[".importFields"][] = "unidad";
$tdataLISTADO_DE_CUMPLEA_EROS[".importFields"][] = "cargo";
$tdataLISTADO_DE_CUMPLEA_EROS[".importFields"][] = "paterno";
$tdataLISTADO_DE_CUMPLEA_EROS[".importFields"][] = "materno";
$tdataLISTADO_DE_CUMPLEA_EROS[".importFields"][] = "nombres";
$tdataLISTADO_DE_CUMPLEA_EROS[".importFields"][] = "ci";
$tdataLISTADO_DE_CUMPLEA_EROS[".importFields"][] = "exp";

$tdataLISTADO_DE_CUMPLEA_EROS[".printFields"] = array();
$tdataLISTADO_DE_CUMPLEA_EROS[".printFields"][] = "id_func";
$tdataLISTADO_DE_CUMPLEA_EROS[".printFields"][] = "fecha_nac";
$tdataLISTADO_DE_CUMPLEA_EROS[".printFields"][] = "sexo";
$tdataLISTADO_DE_CUMPLEA_EROS[".printFields"][] = "item_contrato";
$tdataLISTADO_DE_CUMPLEA_EROS[".printFields"][] = "paterno";
$tdataLISTADO_DE_CUMPLEA_EROS[".printFields"][] = "materno";
$tdataLISTADO_DE_CUMPLEA_EROS[".printFields"][] = "nombres";
$tdataLISTADO_DE_CUMPLEA_EROS[".printFields"][] = "ci";
$tdataLISTADO_DE_CUMPLEA_EROS[".printFields"][] = "exp";
$tdataLISTADO_DE_CUMPLEA_EROS[".printFields"][] = "unidad";
$tdataLISTADO_DE_CUMPLEA_EROS[".printFields"][] = "cargo";

//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("LISTADO_DE_CUMPLEA_EROS","id_func"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id_func"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_func";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataLISTADO_DE_CUMPLEA_EROS["id_func"] = $fdata;
//	fecha_nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha_nac";
	$fdata["GoodName"] = "fecha_nac";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("LISTADO_DE_CUMPLEA_EROS","fecha_nac"); 
	$fdata["FieldType"] = 7;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fecha_nac"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_nac";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataLISTADO_DE_CUMPLEA_EROS["fecha_nac"] = $fdata;
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("LISTADO_DE_CUMPLEA_EROS","sexo"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sexo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sexo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataLISTADO_DE_CUMPLEA_EROS["sexo"] = $fdata;
//	item_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "item_contrato";
	$fdata["GoodName"] = "item_contrato";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("LISTADO_DE_CUMPLEA_EROS","item_contrato"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "item_contrato"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "item_contrato";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataLISTADO_DE_CUMPLEA_EROS["item_contrato"] = $fdata;
//	unidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "unidad";
	$fdata["GoodName"] = "unidad";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("LISTADO_DE_CUMPLEA_EROS","unidad"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "unidad"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unidad";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataLISTADO_DE_CUMPLEA_EROS["unidad"] = $fdata;
//	cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cargo";
	$fdata["GoodName"] = "cargo";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("LISTADO_DE_CUMPLEA_EROS","cargo"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cargo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cargo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataLISTADO_DE_CUMPLEA_EROS["cargo"] = $fdata;
//	paterno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "paterno";
	$fdata["GoodName"] = "paterno";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("LISTADO_DE_CUMPLEA_EROS","paterno"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "paterno"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paterno";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataLISTADO_DE_CUMPLEA_EROS["paterno"] = $fdata;
//	materno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "materno";
	$fdata["GoodName"] = "materno";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("LISTADO_DE_CUMPLEA_EROS","materno"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "materno"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "materno";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataLISTADO_DE_CUMPLEA_EROS["materno"] = $fdata;
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("LISTADO_DE_CUMPLEA_EROS","nombres"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nombres"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombres";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataLISTADO_DE_CUMPLEA_EROS["nombres"] = $fdata;
//	ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ci";
	$fdata["GoodName"] = "ci";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("LISTADO_DE_CUMPLEA_EROS","ci"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ci"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ci";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataLISTADO_DE_CUMPLEA_EROS["ci"] = $fdata;
//	exp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "exp";
	$fdata["GoodName"] = "exp";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("LISTADO_DE_CUMPLEA_EROS","exp"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "exp"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exp";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataLISTADO_DE_CUMPLEA_EROS["exp"] = $fdata;

	
$tables_data["LISTADO DE CUMPLEAÑEROS"]=&$tdataLISTADO_DE_CUMPLEA_EROS;
$field_labels["LISTADO_DE_CUMPLEA_EROS"] = &$fieldLabelsLISTADO_DE_CUMPLEA_EROS;
$fieldToolTips["LISTADO DE CUMPLEAÑEROS"] = &$fieldToolTipsLISTADO_DE_CUMPLEA_EROS;
$page_titles["LISTADO_DE_CUMPLEA_EROS"] = &$pageTitlesLISTADO_DE_CUMPLEA_EROS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["LISTADO DE CUMPLEAÑEROS"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["LISTADO DE CUMPLEAÑEROS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LISTADO_DE_CUMPLEA_EROS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_func,  fecha_nac,  sexo,  item_contrato,  unidad,  cargo,  paterno,  materno,  nombres,  ci,  exp";
$proto0["m_strFrom"] = "FROM t_planilla_c";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "LISTADO DE CUMPLEAÑEROS"
));

$proto5["m_sql"] = "id_func";
$proto5["m_srcTableName"] = "LISTADO DE CUMPLEAÑEROS";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_nac",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "LISTADO DE CUMPLEAÑEROS"
));

$proto7["m_sql"] = "fecha_nac";
$proto7["m_srcTableName"] = "LISTADO DE CUMPLEAÑEROS";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "LISTADO DE CUMPLEAÑEROS"
));

$proto9["m_sql"] = "sexo";
$proto9["m_srcTableName"] = "LISTADO DE CUMPLEAÑEROS";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "item_contrato",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "LISTADO DE CUMPLEAÑEROS"
));

$proto11["m_sql"] = "item_contrato";
$proto11["m_srcTableName"] = "LISTADO DE CUMPLEAÑEROS";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "unidad",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "LISTADO DE CUMPLEAÑEROS"
));

$proto13["m_sql"] = "unidad";
$proto13["m_srcTableName"] = "LISTADO DE CUMPLEAÑEROS";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "LISTADO DE CUMPLEAÑEROS"
));

$proto15["m_sql"] = "cargo";
$proto15["m_srcTableName"] = "LISTADO DE CUMPLEAÑEROS";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "paterno",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "LISTADO DE CUMPLEAÑEROS"
));

$proto17["m_sql"] = "paterno";
$proto17["m_srcTableName"] = "LISTADO DE CUMPLEAÑEROS";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "materno",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "LISTADO DE CUMPLEAÑEROS"
));

$proto19["m_sql"] = "materno";
$proto19["m_srcTableName"] = "LISTADO DE CUMPLEAÑEROS";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "LISTADO DE CUMPLEAÑEROS"
));

$proto21["m_sql"] = "nombres";
$proto21["m_srcTableName"] = "LISTADO DE CUMPLEAÑEROS";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "ci",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "LISTADO DE CUMPLEAÑEROS"
));

$proto23["m_sql"] = "ci";
$proto23["m_srcTableName"] = "LISTADO DE CUMPLEAÑEROS";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "exp",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "LISTADO DE CUMPLEAÑEROS"
));

$proto25["m_sql"] = "exp";
$proto25["m_srcTableName"] = "LISTADO DE CUMPLEAÑEROS";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "t_planilla_c";
$proto28["m_srcTableName"] = "LISTADO DE CUMPLEAÑEROS";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "id_func";
$proto28["m_columns"][] = "fecha_nac";
$proto28["m_columns"][] = "sexo";
$proto28["m_columns"][] = "item_contrato";
$proto28["m_columns"][] = "unidad";
$proto28["m_columns"][] = "cargo";
$proto28["m_columns"][] = "paterno";
$proto28["m_columns"][] = "materno";
$proto28["m_columns"][] = "nombres";
$proto28["m_columns"][] = "ci";
$proto28["m_columns"][] = "exp";
$proto28["m_columns"][] = "nit";
$proto28["m_columns"][] = "fec_ingreso";
$proto28["m_columns"][] = "baja";
$proto28["m_columns"][] = "reasig";
$proto28["m_columns"][] = "haber_basico";
$proto28["m_columns"][] = "dias_trab";
$proto28["m_columns"][] = "haber_percibido";
$proto28["m_columns"][] = "reint";
$proto28["m_columns"][] = "bono_ant";
$proto28["m_columns"][] = "total_ganado";
$proto28["m_columns"][] = "devoluciones";
$proto28["m_columns"][] = "asig_familiar";
$proto28["m_columns"][] = "futuro_afp_10";
$proto28["m_columns"][] = "futuro_afp_riesgo_1_71";
$proto28["m_columns"][] = "futuro_afp_05";
$proto28["m_columns"][] = "futuro_afp_ap_sol_0_5";
$proto28["m_columns"][] = "futuro_ans_1";
$proto28["m_columns"][] = "prev_afp_10";
$proto28["m_columns"][] = "prev_afp_riesgo_1_71";
$proto28["m_columns"][] = "prev_afp_05";
$proto28["m_columns"][] = "prev_afp_ap_sol_0_5";
$proto28["m_columns"][] = "prev_ans_1";
$proto28["m_columns"][] = "rc_iva";
$proto28["m_columns"][] = "retenciones";
$proto28["m_columns"][] = "multa";
$proto28["m_columns"][] = "total_desc";
$proto28["m_columns"][] = "pre_natal";
$proto28["m_columns"][] = "natalidad";
$proto28["m_columns"][] = "lactancia";
$proto28["m_columns"][] = "sepelio";
$proto28["m_columns"][] = "seguro_pat_10";
$proto28["m_columns"][] = "riesgo_pat_171";
$proto28["m_columns"][] = "pro_vivienda_pat_2";
$proto28["m_columns"][] = "ap_pat_sol_3";
$proto28["m_columns"][] = "mes";
$proto28["m_columns"][] = "gestion";
$proto28["m_columns"][] = "liquido_pagable";
$proto28["m_columns"][] = "cod_afp";
$proto28["m_columns"][] = "cta_banco";
$proto28["m_columns"][] = "tipo_funcionario";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "t_planilla_c";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "LISTADO DE CUMPLEAÑEROS";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="LISTADO DE CUMPLEAÑEROS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_LISTADO_DE_CUMPLEA_EROS = createSqlQuery_LISTADO_DE_CUMPLEA_EROS();


	
											
	
$tdataLISTADO_DE_CUMPLEA_EROS[".sqlquery"] = $queryData_LISTADO_DE_CUMPLEA_EROS;

$tableEvents["LISTADO DE CUMPLEAÑEROS"] = new eventsBase;
$tdataLISTADO_DE_CUMPLEA_EROS[".hasEvents"] = false;

?>