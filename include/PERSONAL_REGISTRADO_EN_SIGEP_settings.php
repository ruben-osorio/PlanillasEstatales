<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPERSONAL_REGISTRADO_EN_SIGEP = array();	
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".truncateText"] = true;
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".NumberOfChars"] = 80; 
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".ShortName"] = "PERSONAL_REGISTRADO_EN_SIGEP";
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".OwnerID"] = "";
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".OriginalTable"] = "t_sigep";

//	field labels
$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP = array();
$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP = array();
$pageTitlesPERSONAL_REGISTRADO_EN_SIGEP = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"] = array();
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"] = array();
	$pageTitlesPERSONAL_REGISTRADO_EN_SIGEP["Spanish"] = array();
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["id_func"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["fecha_emision"] = "FECHA DE IMISIÓN SIGEP";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["fecha_emision"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["gestion"] = "GESTIÓN DE REGISTRO SIGEP";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["gestion"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["sexo"] = "GÉNERO";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["sexo"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["fecha_nac"] = "FECHA NACIMIENTO";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["fecha_nac"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["item_contrato"] = "ITEM/CONTRATO";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["item_contrato"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["unidad"] = "UNIDAD";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["unidad"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["cargo"] = "CARGO";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["cargo"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["paterno"] = "PATERNO";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["paterno"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["materno"] = "MATERNO";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["materno"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["nombres"] = "NOMBRES";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["nombres"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["ci"] = "CI";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["ci"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["exp"] = "EXP";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["exp"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["tipo_funcionario"] = "TIPO FUNCIONARIO";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]["tipo_funcionario"] = "";
	if (count($fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["Spanish"]))
		$tdataPERSONAL_REGISTRADO_EN_SIGEP[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP[""] = array();
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP[""] = array();
	$pageTitlesPERSONAL_REGISTRADO_EN_SIGEP[""] = array();
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP[""]["id_func"] = "Id Func";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP[""]["id_func"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP[""]["fecha_emision"] = "Fecha Emision";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP[""]["fecha_emision"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP[""]["gestion"] = "Gestion";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP[""]["gestion"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP[""]["sexo"] = "Sexo";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP[""]["sexo"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP[""]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP[""]["fecha_nac"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP[""]["item_contrato"] = "Item Contrato";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP[""]["item_contrato"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP[""]["unidad"] = "Unidad";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP[""]["unidad"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP[""]["cargo"] = "Cargo";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP[""]["cargo"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP[""]["paterno"] = "Paterno";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP[""]["paterno"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP[""]["materno"] = "Materno";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP[""]["materno"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP[""]["nombres"] = "Nombres";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP[""]["nombres"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP[""]["ci"] = "Ci";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP[""]["ci"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP[""]["exp"] = "Exp";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP[""]["exp"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP[""]["tipo_funcionario"] = "Tipo Funcionario";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP[""]["tipo_funcionario"] = "";
	if (count($fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP[""]))
		$tdataPERSONAL_REGISTRADO_EN_SIGEP[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["English"] = array();
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["English"] = array();
	$pageTitlesPERSONAL_REGISTRADO_EN_SIGEP["English"] = array();
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["English"]["id_func"] = "Id Func";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["English"]["id_func"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["English"]["fecha_emision"] = "Fecha Emision";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["English"]["fecha_emision"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["English"]["gestion"] = "Gestion";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["English"]["gestion"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["English"]["sexo"] = "Sexo";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["English"]["sexo"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["English"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["English"]["fecha_nac"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["English"]["item_contrato"] = "Item Contrato";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["English"]["item_contrato"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["English"]["unidad"] = "Unidad";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["English"]["unidad"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["English"]["cargo"] = "Cargo";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["English"]["cargo"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["English"]["paterno"] = "Paterno";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["English"]["paterno"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["English"]["materno"] = "Materno";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["English"]["materno"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["English"]["nombres"] = "Nombres";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["English"]["nombres"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["English"]["ci"] = "Ci";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["English"]["ci"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["English"]["exp"] = "Exp";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["English"]["exp"] = "";
	$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP["English"]["tipo_funcionario"] = "Tipo Funcionario";
	$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["English"]["tipo_funcionario"] = "";
	if (count($fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP["English"]))
		$tdataPERSONAL_REGISTRADO_EN_SIGEP[".isUseToolTips"] = true;
}
	
	
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".NCSearch"] = true;



$tdataPERSONAL_REGISTRADO_EN_SIGEP[".shortTableName"] = "PERSONAL_REGISTRADO_EN_SIGEP";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".nSecOptions"] = 0;
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".recsPerRowList"] = 1;
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".recsPerRowPrint"] = 1;
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".mainTableOwnerID"] = "";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".moveNext"] = 1;
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".entityType"] = 2;

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".strOriginalTableName"] = "t_sigep";




$tdataPERSONAL_REGISTRADO_EN_SIGEP[".showAddInPopup"] = false;

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".showEditInPopup"] = false;

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPERSONAL_REGISTRADO_EN_SIGEP[".fieldsForRegister"] = array();

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".listAjax"] = false;

	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".audit"] = false;

	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".locking"] = false;


$tdataPERSONAL_REGISTRADO_EN_SIGEP[".add"] = true;
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".afterAddAction"] = 1;
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".closePopupAfterAdd"] = 1;
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".afterAddActionDetTable"] = "";

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".list"] = true;

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".inlineAdd"] = true;


$tdataPERSONAL_REGISTRADO_EN_SIGEP[".exportTo"] = true;

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".printFriendly"] = true;


$tdataPERSONAL_REGISTRADO_EN_SIGEP[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".searchSaving"] = false;
//

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".showSearchPanel"] = true;
		$tdataPERSONAL_REGISTRADO_EN_SIGEP[".flexibleSearch"] = true;		

if (isMobile())
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".isUseAjaxSuggest"] = false;
else 
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".isUseAjaxSuggest"] = true;




$tdataPERSONAL_REGISTRADO_EN_SIGEP[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".isUseTimeForSearch"] = false;





$tdataPERSONAL_REGISTRADO_EN_SIGEP[".allSearchFields"] = array();
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".filterFields"] = array();
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".requiredSearchFields"] = array();

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".allSearchFields"][] = "id_func";
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".allSearchFields"][] = "item_contrato";
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".allSearchFields"][] = "unidad";
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".allSearchFields"][] = "cargo";
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".allSearchFields"][] = "paterno";
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".allSearchFields"][] = "materno";
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".allSearchFields"][] = "nombres";
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".allSearchFields"][] = "ci";
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".allSearchFields"][] = "exp";
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".allSearchFields"][] = "sexo";
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".allSearchFields"][] = "fecha_nac";
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".allSearchFields"][] = "tipo_funcionario";
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".allSearchFields"][] = "fecha_emision";
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".allSearchFields"][] = "gestion";
	

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".googleLikeFields"] = array();
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".googleLikeFields"][] = "fecha_emision";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".googleLikeFields"][] = "gestion";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".googleLikeFields"][] = "id_func";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".googleLikeFields"][] = "sexo";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".googleLikeFields"][] = "fecha_nac";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".googleLikeFields"][] = "item_contrato";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".googleLikeFields"][] = "unidad";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".googleLikeFields"][] = "cargo";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".googleLikeFields"][] = "paterno";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".googleLikeFields"][] = "materno";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".googleLikeFields"][] = "nombres";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".googleLikeFields"][] = "ci";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".googleLikeFields"][] = "exp";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".googleLikeFields"][] = "tipo_funcionario";


$tdataPERSONAL_REGISTRADO_EN_SIGEP[".advSearchFields"] = array();
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".advSearchFields"][] = "id_func";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".advSearchFields"][] = "item_contrato";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".advSearchFields"][] = "unidad";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".advSearchFields"][] = "cargo";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".advSearchFields"][] = "paterno";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".advSearchFields"][] = "materno";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".advSearchFields"][] = "nombres";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".advSearchFields"][] = "ci";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".advSearchFields"][] = "exp";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".advSearchFields"][] = "sexo";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".advSearchFields"][] = "fecha_nac";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".advSearchFields"][] = "tipo_funcionario";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".advSearchFields"][] = "fecha_emision";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".advSearchFields"][] = "gestion";

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".tableType"] = "report";

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".printerPageOrientation"] = 0;
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".nPrinterPageScale"] = 100;





$tdataPERSONAL_REGISTRADO_EN_SIGEP[".geocodingEnabled"] = false;

//report settings
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".printReportLayout"] = 6;	

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".reportPrintPartitionType"] = 0;	
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".reportPrintGroupsPerPage"] = 40;	
	$tdataPERSONAL_REGISTRADO_EN_SIGEP[".lowGroup"] = 0;



$tdataPERSONAL_REGISTRADO_EN_SIGEP[".pageSize"] = 20;	




$tdataPERSONAL_REGISTRADO_EN_SIGEP[".reportPageSummary"] = true;


$tdataPERSONAL_REGISTRADO_EN_SIGEP[".repShowDet"] = true;

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".isPrinterPagePDF"] = true;
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".strOrderBy"] = $tstrOrderBy;

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".orderindexes"] = array();

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".sqlHead"] = "SELECT t_sigep.fecha_emision,  t_sigep.gestion,  t_planilla_c.id_func,  t_planilla_c.sexo,  t_planilla_c.fecha_nac,  t_planilla_c.item_contrato,  t_planilla_c.unidad,  t_planilla_c.cargo,  t_planilla_c.paterno,  t_planilla_c.materno,  t_planilla_c.nombres,  t_planilla_c.ci,  t_planilla_c.exp,  t_planilla_c.tipo_funcionario";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".sqlFrom"] = "FROM t_sigep  INNER JOIN t_planilla_c ON t_sigep.id_func = t_planilla_c.id_func";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".sqlWhereExpr"] = "";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".arrGroupsPerPage"] = $arrGPP;

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".highlightSearchResults"] = true;

$tableKeysPERSONAL_REGISTRADO_EN_SIGEP = array();
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".Keys"] = $tableKeysPERSONAL_REGISTRADO_EN_SIGEP;

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".listFields"] = array();
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".listFields"][] = "id_func";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".listFields"][] = "item_contrato";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".listFields"][] = "unidad";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".listFields"][] = "cargo";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".listFields"][] = "paterno";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".listFields"][] = "materno";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".listFields"][] = "nombres";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".listFields"][] = "ci";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".listFields"][] = "exp";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".listFields"][] = "sexo";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".listFields"][] = "fecha_nac";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".listFields"][] = "tipo_funcionario";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".listFields"][] = "fecha_emision";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".listFields"][] = "gestion";

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".hideMobileList"] = array();


$tdataPERSONAL_REGISTRADO_EN_SIGEP[".viewFields"] = array();
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".viewFields"][] = "id_func";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".viewFields"][] = "item_contrato";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".viewFields"][] = "unidad";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".viewFields"][] = "cargo";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".viewFields"][] = "paterno";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".viewFields"][] = "materno";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".viewFields"][] = "nombres";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".viewFields"][] = "ci";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".viewFields"][] = "exp";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".viewFields"][] = "sexo";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".viewFields"][] = "fecha_nac";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".viewFields"][] = "tipo_funcionario";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".viewFields"][] = "fecha_emision";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".viewFields"][] = "gestion";

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".addFields"] = array();
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".addFields"][] = "id_func";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".addFields"][] = "fecha_emision";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".addFields"][] = "gestion";

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".masterListFields"] = array();
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".masterListFields"][] = "id_func";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".masterListFields"][] = "item_contrato";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".masterListFields"][] = "unidad";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".masterListFields"][] = "cargo";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".masterListFields"][] = "paterno";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".masterListFields"][] = "materno";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".masterListFields"][] = "nombres";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".masterListFields"][] = "ci";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".masterListFields"][] = "exp";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".masterListFields"][] = "sexo";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".masterListFields"][] = "fecha_nac";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".masterListFields"][] = "tipo_funcionario";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".masterListFields"][] = "fecha_emision";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".masterListFields"][] = "gestion";

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".inlineAddFields"] = array();
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".inlineAddFields"][] = "id_func";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".inlineAddFields"][] = "fecha_emision";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".inlineAddFields"][] = "gestion";

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".editFields"] = array();
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".editFields"][] = "id_func";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".editFields"][] = "fecha_emision";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".editFields"][] = "gestion";

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".inlineEditFields"] = array();
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".inlineEditFields"][] = "id_func";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".inlineEditFields"][] = "fecha_emision";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".inlineEditFields"][] = "gestion";

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".exportFields"] = array();
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".exportFields"][] = "id_func";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".exportFields"][] = "item_contrato";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".exportFields"][] = "unidad";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".exportFields"][] = "cargo";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".exportFields"][] = "paterno";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".exportFields"][] = "materno";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".exportFields"][] = "nombres";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".exportFields"][] = "ci";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".exportFields"][] = "exp";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".exportFields"][] = "sexo";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".exportFields"][] = "fecha_nac";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".exportFields"][] = "tipo_funcionario";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".exportFields"][] = "fecha_emision";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".exportFields"][] = "gestion";

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".importFields"] = array();
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".importFields"][] = "fecha_emision";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".importFields"][] = "gestion";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".importFields"][] = "id_func";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".importFields"][] = "sexo";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".importFields"][] = "fecha_nac";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".importFields"][] = "item_contrato";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".importFields"][] = "unidad";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".importFields"][] = "cargo";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".importFields"][] = "paterno";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".importFields"][] = "materno";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".importFields"][] = "nombres";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".importFields"][] = "ci";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".importFields"][] = "exp";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".importFields"][] = "tipo_funcionario";

$tdataPERSONAL_REGISTRADO_EN_SIGEP[".printFields"] = array();
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".printFields"][] = "id_func";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".printFields"][] = "item_contrato";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".printFields"][] = "unidad";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".printFields"][] = "cargo";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".printFields"][] = "paterno";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".printFields"][] = "materno";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".printFields"][] = "nombres";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".printFields"][] = "ci";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".printFields"][] = "exp";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".printFields"][] = "sexo";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".printFields"][] = "fecha_nac";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".printFields"][] = "tipo_funcionario";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".printFields"][] = "fecha_emision";
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".printFields"][] = "gestion";

//	fecha_emision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fecha_emision";
	$fdata["GoodName"] = "fecha_emision";
	$fdata["ownerTable"] = "t_sigep";
	$fdata["Label"] = GetFieldLabel("PERSONAL_REGISTRADO_EN_SIGEP","fecha_emision"); 
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
	
		$fdata["strField"] = "fecha_emision"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_sigep.fecha_emision";
	
		
		
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

	

	
	$tdataPERSONAL_REGISTRADO_EN_SIGEP["fecha_emision"] = $fdata;
//	gestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "gestion";
	$fdata["GoodName"] = "gestion";
	$fdata["ownerTable"] = "t_sigep";
	$fdata["Label"] = GetFieldLabel("PERSONAL_REGISTRADO_EN_SIGEP","gestion"); 
	$fdata["FieldType"] = 2;
	
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
	
		$fdata["strField"] = "gestion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_sigep.gestion";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataPERSONAL_REGISTRADO_EN_SIGEP["gestion"] = $fdata;
//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_REGISTRADO_EN_SIGEP","id_func"); 
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
	$fdata["FullName"] = "t_planilla_c.id_func";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "funcionario";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id_func";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(l_name1,'   ',l_name2, '  ',name)";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdataPERSONAL_REGISTRADO_EN_SIGEP["id_func"] = $fdata;
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_REGISTRADO_EN_SIGEP","sexo"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sexo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla_c.sexo";
	
		
		
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

	

	
	$tdataPERSONAL_REGISTRADO_EN_SIGEP["sexo"] = $fdata;
//	fecha_nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_nac";
	$fdata["GoodName"] = "fecha_nac";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_REGISTRADO_EN_SIGEP","fecha_nac"); 
	$fdata["FieldType"] = 7;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fecha_nac"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla_c.fecha_nac";
	
		
		
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataPERSONAL_REGISTRADO_EN_SIGEP["fecha_nac"] = $fdata;
//	item_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "item_contrato";
	$fdata["GoodName"] = "item_contrato";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_REGISTRADO_EN_SIGEP","item_contrato"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "item_contrato"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla_c.item_contrato";
	
		
		
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

	

	
	$tdataPERSONAL_REGISTRADO_EN_SIGEP["item_contrato"] = $fdata;
//	unidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "unidad";
	$fdata["GoodName"] = "unidad";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_REGISTRADO_EN_SIGEP","unidad"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "unidad"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla_c.unidad";
	
		
		
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

	

	
	$tdataPERSONAL_REGISTRADO_EN_SIGEP["unidad"] = $fdata;
//	cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cargo";
	$fdata["GoodName"] = "cargo";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_REGISTRADO_EN_SIGEP","cargo"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cargo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla_c.cargo";
	
		
		
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

	

	
	$tdataPERSONAL_REGISTRADO_EN_SIGEP["cargo"] = $fdata;
//	paterno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "paterno";
	$fdata["GoodName"] = "paterno";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_REGISTRADO_EN_SIGEP","paterno"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "paterno"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla_c.paterno";
	
		
		
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

	

	
	$tdataPERSONAL_REGISTRADO_EN_SIGEP["paterno"] = $fdata;
//	materno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "materno";
	$fdata["GoodName"] = "materno";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_REGISTRADO_EN_SIGEP","materno"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "materno"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla_c.materno";
	
		
		
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

	

	
	$tdataPERSONAL_REGISTRADO_EN_SIGEP["materno"] = $fdata;
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_REGISTRADO_EN_SIGEP","nombres"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nombres"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla_c.nombres";
	
		
		
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

	

	
	$tdataPERSONAL_REGISTRADO_EN_SIGEP["nombres"] = $fdata;
//	ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ci";
	$fdata["GoodName"] = "ci";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_REGISTRADO_EN_SIGEP","ci"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ci"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla_c.ci";
	
		
		
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

	

	
	$tdataPERSONAL_REGISTRADO_EN_SIGEP["ci"] = $fdata;
//	exp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "exp";
	$fdata["GoodName"] = "exp";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_REGISTRADO_EN_SIGEP","exp"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "exp"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla_c.exp";
	
		
		
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

	

	
	$tdataPERSONAL_REGISTRADO_EN_SIGEP["exp"] = $fdata;
//	tipo_funcionario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "tipo_funcionario";
	$fdata["GoodName"] = "tipo_funcionario";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_REGISTRADO_EN_SIGEP","tipo_funcionario"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "tipo_funcionario"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla_c.tipo_funcionario";
	
		
		
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

	

	
	$tdataPERSONAL_REGISTRADO_EN_SIGEP["tipo_funcionario"] = $fdata;

	
$tables_data["PERSONAL REGISTRADO EN SIGEP"]=&$tdataPERSONAL_REGISTRADO_EN_SIGEP;
$field_labels["PERSONAL_REGISTRADO_EN_SIGEP"] = &$fieldLabelsPERSONAL_REGISTRADO_EN_SIGEP;
$fieldToolTips["PERSONAL REGISTRADO EN SIGEP"] = &$fieldToolTipsPERSONAL_REGISTRADO_EN_SIGEP;
$page_titles["PERSONAL_REGISTRADO_EN_SIGEP"] = &$pageTitlesPERSONAL_REGISTRADO_EN_SIGEP;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PERSONAL REGISTRADO EN SIGEP"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["PERSONAL REGISTRADO EN SIGEP"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PERSONAL_REGISTRADO_EN_SIGEP()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_sigep.fecha_emision,  t_sigep.gestion,  t_planilla_c.id_func,  t_planilla_c.sexo,  t_planilla_c.fecha_nac,  t_planilla_c.item_contrato,  t_planilla_c.unidad,  t_planilla_c.cargo,  t_planilla_c.paterno,  t_planilla_c.materno,  t_planilla_c.nombres,  t_planilla_c.ci,  t_planilla_c.exp,  t_planilla_c.tipo_funcionario";
$proto0["m_strFrom"] = "FROM t_sigep  INNER JOIN t_planilla_c ON t_sigep.id_func = t_planilla_c.id_func";
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
	"m_strName" => "fecha_emision",
	"m_strTable" => "t_sigep",
	"m_srcTableName" => "PERSONAL REGISTRADO EN SIGEP"
));

$proto5["m_sql"] = "t_sigep.fecha_emision";
$proto5["m_srcTableName"] = "PERSONAL REGISTRADO EN SIGEP";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "gestion",
	"m_strTable" => "t_sigep",
	"m_srcTableName" => "PERSONAL REGISTRADO EN SIGEP"
));

$proto7["m_sql"] = "t_sigep.gestion";
$proto7["m_srcTableName"] = "PERSONAL REGISTRADO EN SIGEP";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL REGISTRADO EN SIGEP"
));

$proto9["m_sql"] = "t_planilla_c.id_func";
$proto9["m_srcTableName"] = "PERSONAL REGISTRADO EN SIGEP";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL REGISTRADO EN SIGEP"
));

$proto11["m_sql"] = "t_planilla_c.sexo";
$proto11["m_srcTableName"] = "PERSONAL REGISTRADO EN SIGEP";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_nac",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL REGISTRADO EN SIGEP"
));

$proto13["m_sql"] = "t_planilla_c.fecha_nac";
$proto13["m_srcTableName"] = "PERSONAL REGISTRADO EN SIGEP";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "item_contrato",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL REGISTRADO EN SIGEP"
));

$proto15["m_sql"] = "t_planilla_c.item_contrato";
$proto15["m_srcTableName"] = "PERSONAL REGISTRADO EN SIGEP";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "unidad",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL REGISTRADO EN SIGEP"
));

$proto17["m_sql"] = "t_planilla_c.unidad";
$proto17["m_srcTableName"] = "PERSONAL REGISTRADO EN SIGEP";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL REGISTRADO EN SIGEP"
));

$proto19["m_sql"] = "t_planilla_c.cargo";
$proto19["m_srcTableName"] = "PERSONAL REGISTRADO EN SIGEP";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "paterno",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL REGISTRADO EN SIGEP"
));

$proto21["m_sql"] = "t_planilla_c.paterno";
$proto21["m_srcTableName"] = "PERSONAL REGISTRADO EN SIGEP";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "materno",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL REGISTRADO EN SIGEP"
));

$proto23["m_sql"] = "t_planilla_c.materno";
$proto23["m_srcTableName"] = "PERSONAL REGISTRADO EN SIGEP";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL REGISTRADO EN SIGEP"
));

$proto25["m_sql"] = "t_planilla_c.nombres";
$proto25["m_srcTableName"] = "PERSONAL REGISTRADO EN SIGEP";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "ci",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL REGISTRADO EN SIGEP"
));

$proto27["m_sql"] = "t_planilla_c.ci";
$proto27["m_srcTableName"] = "PERSONAL REGISTRADO EN SIGEP";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "exp",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL REGISTRADO EN SIGEP"
));

$proto29["m_sql"] = "t_planilla_c.exp";
$proto29["m_srcTableName"] = "PERSONAL REGISTRADO EN SIGEP";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_funcionario",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL REGISTRADO EN SIGEP"
));

$proto31["m_sql"] = "t_planilla_c.tipo_funcionario";
$proto31["m_srcTableName"] = "PERSONAL REGISTRADO EN SIGEP";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "t_sigep";
$proto34["m_srcTableName"] = "PERSONAL REGISTRADO EN SIGEP";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "idsigep";
$proto34["m_columns"][] = "id_func";
$proto34["m_columns"][] = "fecha_emision";
$proto34["m_columns"][] = "gestion";
$proto34["m_columns"][] = "image";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "t_sigep";
$proto33["m_alias"] = "";
$proto33["m_srcTableName"] = "PERSONAL REGISTRADO EN SIGEP";
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
												$proto37=array();
$proto37["m_link"] = "SQLL_INNERJOIN";
			$proto38=array();
$proto38["m_strName"] = "t_planilla_c";
$proto38["m_srcTableName"] = "PERSONAL REGISTRADO EN SIGEP";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "id_func";
$proto38["m_columns"][] = "fecha_nac";
$proto38["m_columns"][] = "sexo";
$proto38["m_columns"][] = "item_contrato";
$proto38["m_columns"][] = "unidad";
$proto38["m_columns"][] = "cargo";
$proto38["m_columns"][] = "paterno";
$proto38["m_columns"][] = "materno";
$proto38["m_columns"][] = "nombres";
$proto38["m_columns"][] = "ci";
$proto38["m_columns"][] = "exp";
$proto38["m_columns"][] = "nit";
$proto38["m_columns"][] = "fec_ingreso";
$proto38["m_columns"][] = "baja";
$proto38["m_columns"][] = "reasig";
$proto38["m_columns"][] = "haber_basico";
$proto38["m_columns"][] = "dias_trab";
$proto38["m_columns"][] = "haber_percibido";
$proto38["m_columns"][] = "reint";
$proto38["m_columns"][] = "bono_ant";
$proto38["m_columns"][] = "total_ganado";
$proto38["m_columns"][] = "devoluciones";
$proto38["m_columns"][] = "asig_familiar";
$proto38["m_columns"][] = "futuro_afp_10";
$proto38["m_columns"][] = "futuro_afp_riesgo_1_71";
$proto38["m_columns"][] = "futuro_afp_05";
$proto38["m_columns"][] = "futuro_afp_ap_sol_0_5";
$proto38["m_columns"][] = "futuro_ans_1";
$proto38["m_columns"][] = "prev_afp_10";
$proto38["m_columns"][] = "prev_afp_riesgo_1_71";
$proto38["m_columns"][] = "prev_afp_05";
$proto38["m_columns"][] = "prev_afp_ap_sol_0_5";
$proto38["m_columns"][] = "prev_ans_1";
$proto38["m_columns"][] = "rc_iva";
$proto38["m_columns"][] = "retenciones";
$proto38["m_columns"][] = "multa";
$proto38["m_columns"][] = "total_desc";
$proto38["m_columns"][] = "pre_natal";
$proto38["m_columns"][] = "natalidad";
$proto38["m_columns"][] = "lactancia";
$proto38["m_columns"][] = "sepelio";
$proto38["m_columns"][] = "seguro_pat_10";
$proto38["m_columns"][] = "riesgo_pat_171";
$proto38["m_columns"][] = "pro_vivienda_pat_2";
$proto38["m_columns"][] = "ap_pat_sol_3";
$proto38["m_columns"][] = "mes";
$proto38["m_columns"][] = "gestion";
$proto38["m_columns"][] = "liquido_pagable";
$proto38["m_columns"][] = "cod_afp";
$proto38["m_columns"][] = "cta_banco";
$proto38["m_columns"][] = "tipo_funcionario";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "INNER JOIN t_planilla_c ON t_sigep.id_func = t_planilla_c.id_func";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "PERSONAL REGISTRADO EN SIGEP";
$proto39=array();
$proto39["m_sql"] = "t_sigep.id_func = t_planilla_c.id_func";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "t_sigep",
	"m_srcTableName" => "PERSONAL REGISTRADO EN SIGEP"
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "= t_planilla_c.id_func";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PERSONAL REGISTRADO EN SIGEP";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PERSONAL_REGISTRADO_EN_SIGEP = createSqlQuery_PERSONAL_REGISTRADO_EN_SIGEP();


	
														
	
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".sqlquery"] = $queryData_PERSONAL_REGISTRADO_EN_SIGEP;

$tableEvents["PERSONAL REGISTRADO EN SIGEP"] = new eventsBase;
$tdataPERSONAL_REGISTRADO_EN_SIGEP[".hasEvents"] = false;

?>