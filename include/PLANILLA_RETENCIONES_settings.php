<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPLANILLA_RETENCIONES = array();	
	$tdataPLANILLA_RETENCIONES[".truncateText"] = true;
	$tdataPLANILLA_RETENCIONES[".NumberOfChars"] = 80; 
	$tdataPLANILLA_RETENCIONES[".ShortName"] = "PLANILLA_RETENCIONES";
	$tdataPLANILLA_RETENCIONES[".OwnerID"] = "";
	$tdataPLANILLA_RETENCIONES[".OriginalTable"] = "t_planilla_c";

//	field labels
$fieldLabelsPLANILLA_RETENCIONES = array();
$fieldToolTipsPLANILLA_RETENCIONES = array();
$pageTitlesPLANILLA_RETENCIONES = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPLANILLA_RETENCIONES["Spanish"] = array();
	$fieldToolTipsPLANILLA_RETENCIONES["Spanish"] = array();
	$pageTitlesPLANILLA_RETENCIONES["Spanish"] = array();
	$fieldLabelsPLANILLA_RETENCIONES["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipsPLANILLA_RETENCIONES["Spanish"]["id_func"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["Spanish"]["sexo"] = "Sexo";
	$fieldToolTipsPLANILLA_RETENCIONES["Spanish"]["sexo"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["Spanish"]["item_contrato"] = "Item Contrato";
	$fieldToolTipsPLANILLA_RETENCIONES["Spanish"]["item_contrato"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["Spanish"]["unidad"] = "Unidad";
	$fieldToolTipsPLANILLA_RETENCIONES["Spanish"]["unidad"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["Spanish"]["cargo"] = "Cargo";
	$fieldToolTipsPLANILLA_RETENCIONES["Spanish"]["cargo"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["Spanish"]["paterno"] = "Paterno";
	$fieldToolTipsPLANILLA_RETENCIONES["Spanish"]["paterno"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["Spanish"]["materno"] = "Materno";
	$fieldToolTipsPLANILLA_RETENCIONES["Spanish"]["materno"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["Spanish"]["nombres"] = "Nombres";
	$fieldToolTipsPLANILLA_RETENCIONES["Spanish"]["nombres"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["Spanish"]["ci"] = "Ci";
	$fieldToolTipsPLANILLA_RETENCIONES["Spanish"]["ci"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["Spanish"]["exp"] = "Exp";
	$fieldToolTipsPLANILLA_RETENCIONES["Spanish"]["exp"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["Spanish"]["haber_basico"] = "Haber Basico";
	$fieldToolTipsPLANILLA_RETENCIONES["Spanish"]["haber_basico"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["Spanish"]["haber_percibido"] = "Haber Percibido";
	$fieldToolTipsPLANILLA_RETENCIONES["Spanish"]["haber_percibido"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["Spanish"]["bono_ant"] = "Bono Ant";
	$fieldToolTipsPLANILLA_RETENCIONES["Spanish"]["bono_ant"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["Spanish"]["total_ganado"] = "Total Ganado";
	$fieldToolTipsPLANILLA_RETENCIONES["Spanish"]["total_ganado"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["Spanish"]["retenciones"] = "Retenciones";
	$fieldToolTipsPLANILLA_RETENCIONES["Spanish"]["retenciones"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["Spanish"]["mes"] = "Mes";
	$fieldToolTipsPLANILLA_RETENCIONES["Spanish"]["mes"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["Spanish"]["gestion"] = "Gestion";
	$fieldToolTipsPLANILLA_RETENCIONES["Spanish"]["gestion"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["Spanish"]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipsPLANILLA_RETENCIONES["Spanish"]["liquido_pagable"] = "";
	if (count($fieldToolTipsPLANILLA_RETENCIONES["Spanish"]))
		$tdataPLANILLA_RETENCIONES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPLANILLA_RETENCIONES[""] = array();
	$fieldToolTipsPLANILLA_RETENCIONES[""] = array();
	$pageTitlesPLANILLA_RETENCIONES[""] = array();
	$fieldLabelsPLANILLA_RETENCIONES[""]["id_func"] = "Id Func";
	$fieldToolTipsPLANILLA_RETENCIONES[""]["id_func"] = "";
	$fieldLabelsPLANILLA_RETENCIONES[""]["sexo"] = "Sexo";
	$fieldToolTipsPLANILLA_RETENCIONES[""]["sexo"] = "";
	$fieldLabelsPLANILLA_RETENCIONES[""]["item_contrato"] = "Item Contrato";
	$fieldToolTipsPLANILLA_RETENCIONES[""]["item_contrato"] = "";
	$fieldLabelsPLANILLA_RETENCIONES[""]["unidad"] = "Unidad";
	$fieldToolTipsPLANILLA_RETENCIONES[""]["unidad"] = "";
	$fieldLabelsPLANILLA_RETENCIONES[""]["cargo"] = "Cargo";
	$fieldToolTipsPLANILLA_RETENCIONES[""]["cargo"] = "";
	$fieldLabelsPLANILLA_RETENCIONES[""]["paterno"] = "Paterno";
	$fieldToolTipsPLANILLA_RETENCIONES[""]["paterno"] = "";
	$fieldLabelsPLANILLA_RETENCIONES[""]["materno"] = "Materno";
	$fieldToolTipsPLANILLA_RETENCIONES[""]["materno"] = "";
	$fieldLabelsPLANILLA_RETENCIONES[""]["nombres"] = "Nombres";
	$fieldToolTipsPLANILLA_RETENCIONES[""]["nombres"] = "";
	$fieldLabelsPLANILLA_RETENCIONES[""]["ci"] = "Ci";
	$fieldToolTipsPLANILLA_RETENCIONES[""]["ci"] = "";
	$fieldLabelsPLANILLA_RETENCIONES[""]["exp"] = "Exp";
	$fieldToolTipsPLANILLA_RETENCIONES[""]["exp"] = "";
	$fieldLabelsPLANILLA_RETENCIONES[""]["haber_basico"] = "Haber Basico";
	$fieldToolTipsPLANILLA_RETENCIONES[""]["haber_basico"] = "";
	$fieldLabelsPLANILLA_RETENCIONES[""]["haber_percibido"] = "Haber Percibido";
	$fieldToolTipsPLANILLA_RETENCIONES[""]["haber_percibido"] = "";
	$fieldLabelsPLANILLA_RETENCIONES[""]["bono_ant"] = "Bono Ant";
	$fieldToolTipsPLANILLA_RETENCIONES[""]["bono_ant"] = "";
	$fieldLabelsPLANILLA_RETENCIONES[""]["total_ganado"] = "Total Ganado";
	$fieldToolTipsPLANILLA_RETENCIONES[""]["total_ganado"] = "";
	$fieldLabelsPLANILLA_RETENCIONES[""]["retenciones"] = "Retenciones";
	$fieldToolTipsPLANILLA_RETENCIONES[""]["retenciones"] = "";
	$fieldLabelsPLANILLA_RETENCIONES[""]["mes"] = "Mes";
	$fieldToolTipsPLANILLA_RETENCIONES[""]["mes"] = "";
	$fieldLabelsPLANILLA_RETENCIONES[""]["gestion"] = "Gestion";
	$fieldToolTipsPLANILLA_RETENCIONES[""]["gestion"] = "";
	$fieldLabelsPLANILLA_RETENCIONES[""]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipsPLANILLA_RETENCIONES[""]["liquido_pagable"] = "";
	if (count($fieldToolTipsPLANILLA_RETENCIONES[""]))
		$tdataPLANILLA_RETENCIONES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPLANILLA_RETENCIONES["English"] = array();
	$fieldToolTipsPLANILLA_RETENCIONES["English"] = array();
	$pageTitlesPLANILLA_RETENCIONES["English"] = array();
	$fieldLabelsPLANILLA_RETENCIONES["English"]["id_func"] = "Id Func";
	$fieldToolTipsPLANILLA_RETENCIONES["English"]["id_func"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["English"]["sexo"] = "Sexo";
	$fieldToolTipsPLANILLA_RETENCIONES["English"]["sexo"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["English"]["item_contrato"] = "Item Contrato";
	$fieldToolTipsPLANILLA_RETENCIONES["English"]["item_contrato"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["English"]["unidad"] = "Unidad";
	$fieldToolTipsPLANILLA_RETENCIONES["English"]["unidad"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["English"]["cargo"] = "Cargo";
	$fieldToolTipsPLANILLA_RETENCIONES["English"]["cargo"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["English"]["paterno"] = "Paterno";
	$fieldToolTipsPLANILLA_RETENCIONES["English"]["paterno"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["English"]["materno"] = "Materno";
	$fieldToolTipsPLANILLA_RETENCIONES["English"]["materno"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["English"]["nombres"] = "Nombres";
	$fieldToolTipsPLANILLA_RETENCIONES["English"]["nombres"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["English"]["ci"] = "Ci";
	$fieldToolTipsPLANILLA_RETENCIONES["English"]["ci"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["English"]["exp"] = "Exp";
	$fieldToolTipsPLANILLA_RETENCIONES["English"]["exp"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["English"]["haber_basico"] = "Haber Basico";
	$fieldToolTipsPLANILLA_RETENCIONES["English"]["haber_basico"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["English"]["haber_percibido"] = "Haber Percibido";
	$fieldToolTipsPLANILLA_RETENCIONES["English"]["haber_percibido"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["English"]["bono_ant"] = "Bono Ant";
	$fieldToolTipsPLANILLA_RETENCIONES["English"]["bono_ant"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["English"]["total_ganado"] = "Total Ganado";
	$fieldToolTipsPLANILLA_RETENCIONES["English"]["total_ganado"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["English"]["retenciones"] = "Retenciones";
	$fieldToolTipsPLANILLA_RETENCIONES["English"]["retenciones"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["English"]["mes"] = "Mes";
	$fieldToolTipsPLANILLA_RETENCIONES["English"]["mes"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["English"]["gestion"] = "Gestion";
	$fieldToolTipsPLANILLA_RETENCIONES["English"]["gestion"] = "";
	$fieldLabelsPLANILLA_RETENCIONES["English"]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipsPLANILLA_RETENCIONES["English"]["liquido_pagable"] = "";
	if (count($fieldToolTipsPLANILLA_RETENCIONES["English"]))
		$tdataPLANILLA_RETENCIONES[".isUseToolTips"] = true;
}
	
	
	$tdataPLANILLA_RETENCIONES[".NCSearch"] = true;



$tdataPLANILLA_RETENCIONES[".shortTableName"] = "PLANILLA_RETENCIONES";
$tdataPLANILLA_RETENCIONES[".nSecOptions"] = 0;
$tdataPLANILLA_RETENCIONES[".recsPerRowList"] = 1;
$tdataPLANILLA_RETENCIONES[".recsPerRowPrint"] = 1;
$tdataPLANILLA_RETENCIONES[".mainTableOwnerID"] = "";
$tdataPLANILLA_RETENCIONES[".moveNext"] = 1;
$tdataPLANILLA_RETENCIONES[".entityType"] = 2;

$tdataPLANILLA_RETENCIONES[".strOriginalTableName"] = "t_planilla_c";




$tdataPLANILLA_RETENCIONES[".showAddInPopup"] = false;

$tdataPLANILLA_RETENCIONES[".showEditInPopup"] = false;

$tdataPLANILLA_RETENCIONES[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPLANILLA_RETENCIONES[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPLANILLA_RETENCIONES[".fieldsForRegister"] = array();

$tdataPLANILLA_RETENCIONES[".listAjax"] = false;

	$tdataPLANILLA_RETENCIONES[".audit"] = false;

	$tdataPLANILLA_RETENCIONES[".locking"] = false;

$tdataPLANILLA_RETENCIONES[".edit"] = true;
$tdataPLANILLA_RETENCIONES[".afterEditAction"] = 1;
$tdataPLANILLA_RETENCIONES[".closePopupAfterEdit"] = 1;
$tdataPLANILLA_RETENCIONES[".afterEditActionDetTable"] = "";

$tdataPLANILLA_RETENCIONES[".add"] = true;
$tdataPLANILLA_RETENCIONES[".afterAddAction"] = 1;
$tdataPLANILLA_RETENCIONES[".closePopupAfterAdd"] = 1;
$tdataPLANILLA_RETENCIONES[".afterAddActionDetTable"] = "";

$tdataPLANILLA_RETENCIONES[".list"] = true;

$tdataPLANILLA_RETENCIONES[".inlineEdit"] = true;
$tdataPLANILLA_RETENCIONES[".inlineAdd"] = true;
$tdataPLANILLA_RETENCIONES[".view"] = true;


$tdataPLANILLA_RETENCIONES[".exportTo"] = true;

$tdataPLANILLA_RETENCIONES[".printFriendly"] = true;

$tdataPLANILLA_RETENCIONES[".delete"] = true;

$tdataPLANILLA_RETENCIONES[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataPLANILLA_RETENCIONES[".searchSaving"] = false;
//

$tdataPLANILLA_RETENCIONES[".showSearchPanel"] = true;
		$tdataPLANILLA_RETENCIONES[".flexibleSearch"] = true;		

if (isMobile())
	$tdataPLANILLA_RETENCIONES[".isUseAjaxSuggest"] = false;
else 
	$tdataPLANILLA_RETENCIONES[".isUseAjaxSuggest"] = true;




$tdataPLANILLA_RETENCIONES[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPLANILLA_RETENCIONES[".isUseTimeForSearch"] = false;





$tdataPLANILLA_RETENCIONES[".allSearchFields"] = array();
$tdataPLANILLA_RETENCIONES[".filterFields"] = array();
$tdataPLANILLA_RETENCIONES[".requiredSearchFields"] = array();

$tdataPLANILLA_RETENCIONES[".allSearchFields"][] = "unidad";
	$tdataPLANILLA_RETENCIONES[".allSearchFields"][] = "id_func";
	$tdataPLANILLA_RETENCIONES[".allSearchFields"][] = "sexo";
	$tdataPLANILLA_RETENCIONES[".allSearchFields"][] = "item_contrato";
	$tdataPLANILLA_RETENCIONES[".allSearchFields"][] = "cargo";
	$tdataPLANILLA_RETENCIONES[".allSearchFields"][] = "paterno";
	$tdataPLANILLA_RETENCIONES[".allSearchFields"][] = "materno";
	$tdataPLANILLA_RETENCIONES[".allSearchFields"][] = "nombres";
	$tdataPLANILLA_RETENCIONES[".allSearchFields"][] = "ci";
	$tdataPLANILLA_RETENCIONES[".allSearchFields"][] = "exp";
	$tdataPLANILLA_RETENCIONES[".allSearchFields"][] = "haber_basico";
	$tdataPLANILLA_RETENCIONES[".allSearchFields"][] = "haber_percibido";
	$tdataPLANILLA_RETENCIONES[".allSearchFields"][] = "bono_ant";
	$tdataPLANILLA_RETENCIONES[".allSearchFields"][] = "total_ganado";
	$tdataPLANILLA_RETENCIONES[".allSearchFields"][] = "mes";
	$tdataPLANILLA_RETENCIONES[".allSearchFields"][] = "gestion";
	$tdataPLANILLA_RETENCIONES[".allSearchFields"][] = "liquido_pagable";
	$tdataPLANILLA_RETENCIONES[".allSearchFields"][] = "retenciones";
	

$tdataPLANILLA_RETENCIONES[".googleLikeFields"] = array();
$tdataPLANILLA_RETENCIONES[".googleLikeFields"][] = "id_func";
$tdataPLANILLA_RETENCIONES[".googleLikeFields"][] = "sexo";
$tdataPLANILLA_RETENCIONES[".googleLikeFields"][] = "item_contrato";
$tdataPLANILLA_RETENCIONES[".googleLikeFields"][] = "unidad";
$tdataPLANILLA_RETENCIONES[".googleLikeFields"][] = "cargo";
$tdataPLANILLA_RETENCIONES[".googleLikeFields"][] = "paterno";
$tdataPLANILLA_RETENCIONES[".googleLikeFields"][] = "materno";
$tdataPLANILLA_RETENCIONES[".googleLikeFields"][] = "nombres";
$tdataPLANILLA_RETENCIONES[".googleLikeFields"][] = "ci";
$tdataPLANILLA_RETENCIONES[".googleLikeFields"][] = "exp";
$tdataPLANILLA_RETENCIONES[".googleLikeFields"][] = "haber_basico";
$tdataPLANILLA_RETENCIONES[".googleLikeFields"][] = "haber_percibido";
$tdataPLANILLA_RETENCIONES[".googleLikeFields"][] = "bono_ant";
$tdataPLANILLA_RETENCIONES[".googleLikeFields"][] = "total_ganado";
$tdataPLANILLA_RETENCIONES[".googleLikeFields"][] = "retenciones";
$tdataPLANILLA_RETENCIONES[".googleLikeFields"][] = "mes";
$tdataPLANILLA_RETENCIONES[".googleLikeFields"][] = "gestion";
$tdataPLANILLA_RETENCIONES[".googleLikeFields"][] = "liquido_pagable";


$tdataPLANILLA_RETENCIONES[".advSearchFields"] = array();
$tdataPLANILLA_RETENCIONES[".advSearchFields"][] = "unidad";
$tdataPLANILLA_RETENCIONES[".advSearchFields"][] = "id_func";
$tdataPLANILLA_RETENCIONES[".advSearchFields"][] = "sexo";
$tdataPLANILLA_RETENCIONES[".advSearchFields"][] = "item_contrato";
$tdataPLANILLA_RETENCIONES[".advSearchFields"][] = "cargo";
$tdataPLANILLA_RETENCIONES[".advSearchFields"][] = "paterno";
$tdataPLANILLA_RETENCIONES[".advSearchFields"][] = "materno";
$tdataPLANILLA_RETENCIONES[".advSearchFields"][] = "nombres";
$tdataPLANILLA_RETENCIONES[".advSearchFields"][] = "ci";
$tdataPLANILLA_RETENCIONES[".advSearchFields"][] = "exp";
$tdataPLANILLA_RETENCIONES[".advSearchFields"][] = "haber_basico";
$tdataPLANILLA_RETENCIONES[".advSearchFields"][] = "haber_percibido";
$tdataPLANILLA_RETENCIONES[".advSearchFields"][] = "bono_ant";
$tdataPLANILLA_RETENCIONES[".advSearchFields"][] = "total_ganado";
$tdataPLANILLA_RETENCIONES[".advSearchFields"][] = "mes";
$tdataPLANILLA_RETENCIONES[".advSearchFields"][] = "gestion";
$tdataPLANILLA_RETENCIONES[".advSearchFields"][] = "liquido_pagable";
$tdataPLANILLA_RETENCIONES[".advSearchFields"][] = "retenciones";

$tdataPLANILLA_RETENCIONES[".tableType"] = "report";

$tdataPLANILLA_RETENCIONES[".printerPageOrientation"] = 0;
$tdataPLANILLA_RETENCIONES[".nPrinterPageScale"] = 100;





$tdataPLANILLA_RETENCIONES[".geocodingEnabled"] = false;

//report settings
$tdataPLANILLA_RETENCIONES[".printReportLayout"] = 6;	

$tdataPLANILLA_RETENCIONES[".reportPrintPartitionType"] = 0;	
$tdataPLANILLA_RETENCIONES[".reportPrintGroupsPerPage"] = 40;	
	$tdataPLANILLA_RETENCIONES[".lowGroup"] = 0;



$tdataPLANILLA_RETENCIONES[".pageSize"] = 20;	


$tdataPLANILLA_RETENCIONES[".isExistTotalFields"] = true;


$tdataPLANILLA_RETENCIONES[".reportPageSummary"] = true;


$tdataPLANILLA_RETENCIONES[".repShowDet"] = true;

$tdataPLANILLA_RETENCIONES[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf
$tdataPLANILLA_RETENCIONES[".isPrinterPagePDF"] = true;
$tdataPLANILLA_RETENCIONES[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPLANILLA_RETENCIONES[".strOrderBy"] = $tstrOrderBy;

$tdataPLANILLA_RETENCIONES[".orderindexes"] = array();

$tdataPLANILLA_RETENCIONES[".sqlHead"] = "SELECT id_func,  sexo,  item_contrato,  unidad,  cargo,  paterno,  materno,  nombres,  ci,  exp,  haber_basico,  haber_percibido,  bono_ant,  total_ganado,  retenciones,  mes,  gestion,  liquido_pagable";
$tdataPLANILLA_RETENCIONES[".sqlFrom"] = "FROM t_planilla_c";
$tdataPLANILLA_RETENCIONES[".sqlWhereExpr"] = "";
$tdataPLANILLA_RETENCIONES[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPLANILLA_RETENCIONES[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPLANILLA_RETENCIONES[".arrGroupsPerPage"] = $arrGPP;

$tdataPLANILLA_RETENCIONES[".highlightSearchResults"] = true;

$tableKeysPLANILLA_RETENCIONES = array();
$tableKeysPLANILLA_RETENCIONES[] = "id_func";
$tdataPLANILLA_RETENCIONES[".Keys"] = $tableKeysPLANILLA_RETENCIONES;

$tdataPLANILLA_RETENCIONES[".listFields"] = array();
$tdataPLANILLA_RETENCIONES[".listFields"][] = "unidad";
$tdataPLANILLA_RETENCIONES[".listFields"][] = "id_func";
$tdataPLANILLA_RETENCIONES[".listFields"][] = "sexo";
$tdataPLANILLA_RETENCIONES[".listFields"][] = "item_contrato";
$tdataPLANILLA_RETENCIONES[".listFields"][] = "cargo";
$tdataPLANILLA_RETENCIONES[".listFields"][] = "paterno";
$tdataPLANILLA_RETENCIONES[".listFields"][] = "materno";
$tdataPLANILLA_RETENCIONES[".listFields"][] = "nombres";
$tdataPLANILLA_RETENCIONES[".listFields"][] = "ci";
$tdataPLANILLA_RETENCIONES[".listFields"][] = "exp";
$tdataPLANILLA_RETENCIONES[".listFields"][] = "haber_basico";
$tdataPLANILLA_RETENCIONES[".listFields"][] = "haber_percibido";
$tdataPLANILLA_RETENCIONES[".listFields"][] = "bono_ant";
$tdataPLANILLA_RETENCIONES[".listFields"][] = "total_ganado";
$tdataPLANILLA_RETENCIONES[".listFields"][] = "mes";
$tdataPLANILLA_RETENCIONES[".listFields"][] = "gestion";
$tdataPLANILLA_RETENCIONES[".listFields"][] = "liquido_pagable";
$tdataPLANILLA_RETENCIONES[".listFields"][] = "retenciones";

$tdataPLANILLA_RETENCIONES[".hideMobileList"] = array();


$tdataPLANILLA_RETENCIONES[".viewFields"] = array();
$tdataPLANILLA_RETENCIONES[".viewFields"][] = "unidad";
$tdataPLANILLA_RETENCIONES[".viewFields"][] = "id_func";
$tdataPLANILLA_RETENCIONES[".viewFields"][] = "sexo";
$tdataPLANILLA_RETENCIONES[".viewFields"][] = "item_contrato";
$tdataPLANILLA_RETENCIONES[".viewFields"][] = "cargo";
$tdataPLANILLA_RETENCIONES[".viewFields"][] = "paterno";
$tdataPLANILLA_RETENCIONES[".viewFields"][] = "materno";
$tdataPLANILLA_RETENCIONES[".viewFields"][] = "nombres";
$tdataPLANILLA_RETENCIONES[".viewFields"][] = "ci";
$tdataPLANILLA_RETENCIONES[".viewFields"][] = "exp";
$tdataPLANILLA_RETENCIONES[".viewFields"][] = "haber_basico";
$tdataPLANILLA_RETENCIONES[".viewFields"][] = "haber_percibido";
$tdataPLANILLA_RETENCIONES[".viewFields"][] = "bono_ant";
$tdataPLANILLA_RETENCIONES[".viewFields"][] = "total_ganado";
$tdataPLANILLA_RETENCIONES[".viewFields"][] = "mes";
$tdataPLANILLA_RETENCIONES[".viewFields"][] = "gestion";
$tdataPLANILLA_RETENCIONES[".viewFields"][] = "liquido_pagable";
$tdataPLANILLA_RETENCIONES[".viewFields"][] = "retenciones";

$tdataPLANILLA_RETENCIONES[".addFields"] = array();
$tdataPLANILLA_RETENCIONES[".addFields"][] = "unidad";
$tdataPLANILLA_RETENCIONES[".addFields"][] = "id_func";
$tdataPLANILLA_RETENCIONES[".addFields"][] = "sexo";
$tdataPLANILLA_RETENCIONES[".addFields"][] = "item_contrato";
$tdataPLANILLA_RETENCIONES[".addFields"][] = "cargo";
$tdataPLANILLA_RETENCIONES[".addFields"][] = "paterno";
$tdataPLANILLA_RETENCIONES[".addFields"][] = "materno";
$tdataPLANILLA_RETENCIONES[".addFields"][] = "nombres";
$tdataPLANILLA_RETENCIONES[".addFields"][] = "ci";
$tdataPLANILLA_RETENCIONES[".addFields"][] = "exp";
$tdataPLANILLA_RETENCIONES[".addFields"][] = "haber_basico";
$tdataPLANILLA_RETENCIONES[".addFields"][] = "haber_percibido";
$tdataPLANILLA_RETENCIONES[".addFields"][] = "bono_ant";
$tdataPLANILLA_RETENCIONES[".addFields"][] = "total_ganado";
$tdataPLANILLA_RETENCIONES[".addFields"][] = "mes";
$tdataPLANILLA_RETENCIONES[".addFields"][] = "gestion";
$tdataPLANILLA_RETENCIONES[".addFields"][] = "liquido_pagable";
$tdataPLANILLA_RETENCIONES[".addFields"][] = "retenciones";

$tdataPLANILLA_RETENCIONES[".masterListFields"] = array();
$tdataPLANILLA_RETENCIONES[".masterListFields"][] = "unidad";
$tdataPLANILLA_RETENCIONES[".masterListFields"][] = "id_func";
$tdataPLANILLA_RETENCIONES[".masterListFields"][] = "sexo";
$tdataPLANILLA_RETENCIONES[".masterListFields"][] = "item_contrato";
$tdataPLANILLA_RETENCIONES[".masterListFields"][] = "cargo";
$tdataPLANILLA_RETENCIONES[".masterListFields"][] = "paterno";
$tdataPLANILLA_RETENCIONES[".masterListFields"][] = "materno";
$tdataPLANILLA_RETENCIONES[".masterListFields"][] = "nombres";
$tdataPLANILLA_RETENCIONES[".masterListFields"][] = "ci";
$tdataPLANILLA_RETENCIONES[".masterListFields"][] = "exp";
$tdataPLANILLA_RETENCIONES[".masterListFields"][] = "haber_basico";
$tdataPLANILLA_RETENCIONES[".masterListFields"][] = "haber_percibido";
$tdataPLANILLA_RETENCIONES[".masterListFields"][] = "bono_ant";
$tdataPLANILLA_RETENCIONES[".masterListFields"][] = "total_ganado";
$tdataPLANILLA_RETENCIONES[".masterListFields"][] = "mes";
$tdataPLANILLA_RETENCIONES[".masterListFields"][] = "gestion";
$tdataPLANILLA_RETENCIONES[".masterListFields"][] = "liquido_pagable";
$tdataPLANILLA_RETENCIONES[".masterListFields"][] = "retenciones";

$tdataPLANILLA_RETENCIONES[".inlineAddFields"] = array();
$tdataPLANILLA_RETENCIONES[".inlineAddFields"][] = "unidad";
$tdataPLANILLA_RETENCIONES[".inlineAddFields"][] = "id_func";
$tdataPLANILLA_RETENCIONES[".inlineAddFields"][] = "sexo";
$tdataPLANILLA_RETENCIONES[".inlineAddFields"][] = "item_contrato";
$tdataPLANILLA_RETENCIONES[".inlineAddFields"][] = "cargo";
$tdataPLANILLA_RETENCIONES[".inlineAddFields"][] = "paterno";
$tdataPLANILLA_RETENCIONES[".inlineAddFields"][] = "materno";
$tdataPLANILLA_RETENCIONES[".inlineAddFields"][] = "nombres";
$tdataPLANILLA_RETENCIONES[".inlineAddFields"][] = "ci";
$tdataPLANILLA_RETENCIONES[".inlineAddFields"][] = "exp";
$tdataPLANILLA_RETENCIONES[".inlineAddFields"][] = "haber_basico";
$tdataPLANILLA_RETENCIONES[".inlineAddFields"][] = "haber_percibido";
$tdataPLANILLA_RETENCIONES[".inlineAddFields"][] = "bono_ant";
$tdataPLANILLA_RETENCIONES[".inlineAddFields"][] = "total_ganado";
$tdataPLANILLA_RETENCIONES[".inlineAddFields"][] = "mes";
$tdataPLANILLA_RETENCIONES[".inlineAddFields"][] = "gestion";
$tdataPLANILLA_RETENCIONES[".inlineAddFields"][] = "liquido_pagable";
$tdataPLANILLA_RETENCIONES[".inlineAddFields"][] = "retenciones";

$tdataPLANILLA_RETENCIONES[".editFields"] = array();
$tdataPLANILLA_RETENCIONES[".editFields"][] = "unidad";
$tdataPLANILLA_RETENCIONES[".editFields"][] = "id_func";
$tdataPLANILLA_RETENCIONES[".editFields"][] = "sexo";
$tdataPLANILLA_RETENCIONES[".editFields"][] = "item_contrato";
$tdataPLANILLA_RETENCIONES[".editFields"][] = "cargo";
$tdataPLANILLA_RETENCIONES[".editFields"][] = "paterno";
$tdataPLANILLA_RETENCIONES[".editFields"][] = "materno";
$tdataPLANILLA_RETENCIONES[".editFields"][] = "nombres";
$tdataPLANILLA_RETENCIONES[".editFields"][] = "ci";
$tdataPLANILLA_RETENCIONES[".editFields"][] = "exp";
$tdataPLANILLA_RETENCIONES[".editFields"][] = "haber_basico";
$tdataPLANILLA_RETENCIONES[".editFields"][] = "haber_percibido";
$tdataPLANILLA_RETENCIONES[".editFields"][] = "bono_ant";
$tdataPLANILLA_RETENCIONES[".editFields"][] = "total_ganado";
$tdataPLANILLA_RETENCIONES[".editFields"][] = "mes";
$tdataPLANILLA_RETENCIONES[".editFields"][] = "gestion";
$tdataPLANILLA_RETENCIONES[".editFields"][] = "liquido_pagable";
$tdataPLANILLA_RETENCIONES[".editFields"][] = "retenciones";

$tdataPLANILLA_RETENCIONES[".inlineEditFields"] = array();
$tdataPLANILLA_RETENCIONES[".inlineEditFields"][] = "unidad";
$tdataPLANILLA_RETENCIONES[".inlineEditFields"][] = "id_func";
$tdataPLANILLA_RETENCIONES[".inlineEditFields"][] = "sexo";
$tdataPLANILLA_RETENCIONES[".inlineEditFields"][] = "item_contrato";
$tdataPLANILLA_RETENCIONES[".inlineEditFields"][] = "cargo";
$tdataPLANILLA_RETENCIONES[".inlineEditFields"][] = "paterno";
$tdataPLANILLA_RETENCIONES[".inlineEditFields"][] = "materno";
$tdataPLANILLA_RETENCIONES[".inlineEditFields"][] = "nombres";
$tdataPLANILLA_RETENCIONES[".inlineEditFields"][] = "ci";
$tdataPLANILLA_RETENCIONES[".inlineEditFields"][] = "exp";
$tdataPLANILLA_RETENCIONES[".inlineEditFields"][] = "haber_basico";
$tdataPLANILLA_RETENCIONES[".inlineEditFields"][] = "haber_percibido";
$tdataPLANILLA_RETENCIONES[".inlineEditFields"][] = "bono_ant";
$tdataPLANILLA_RETENCIONES[".inlineEditFields"][] = "total_ganado";
$tdataPLANILLA_RETENCIONES[".inlineEditFields"][] = "mes";
$tdataPLANILLA_RETENCIONES[".inlineEditFields"][] = "gestion";
$tdataPLANILLA_RETENCIONES[".inlineEditFields"][] = "liquido_pagable";
$tdataPLANILLA_RETENCIONES[".inlineEditFields"][] = "retenciones";

$tdataPLANILLA_RETENCIONES[".exportFields"] = array();
$tdataPLANILLA_RETENCIONES[".exportFields"][] = "unidad";
$tdataPLANILLA_RETENCIONES[".exportFields"][] = "id_func";
$tdataPLANILLA_RETENCIONES[".exportFields"][] = "sexo";
$tdataPLANILLA_RETENCIONES[".exportFields"][] = "item_contrato";
$tdataPLANILLA_RETENCIONES[".exportFields"][] = "cargo";
$tdataPLANILLA_RETENCIONES[".exportFields"][] = "paterno";
$tdataPLANILLA_RETENCIONES[".exportFields"][] = "materno";
$tdataPLANILLA_RETENCIONES[".exportFields"][] = "nombres";
$tdataPLANILLA_RETENCIONES[".exportFields"][] = "ci";
$tdataPLANILLA_RETENCIONES[".exportFields"][] = "exp";
$tdataPLANILLA_RETENCIONES[".exportFields"][] = "haber_basico";
$tdataPLANILLA_RETENCIONES[".exportFields"][] = "haber_percibido";
$tdataPLANILLA_RETENCIONES[".exportFields"][] = "bono_ant";
$tdataPLANILLA_RETENCIONES[".exportFields"][] = "total_ganado";
$tdataPLANILLA_RETENCIONES[".exportFields"][] = "mes";
$tdataPLANILLA_RETENCIONES[".exportFields"][] = "gestion";
$tdataPLANILLA_RETENCIONES[".exportFields"][] = "liquido_pagable";
$tdataPLANILLA_RETENCIONES[".exportFields"][] = "retenciones";

$tdataPLANILLA_RETENCIONES[".importFields"] = array();
$tdataPLANILLA_RETENCIONES[".importFields"][] = "id_func";
$tdataPLANILLA_RETENCIONES[".importFields"][] = "sexo";
$tdataPLANILLA_RETENCIONES[".importFields"][] = "item_contrato";
$tdataPLANILLA_RETENCIONES[".importFields"][] = "unidad";
$tdataPLANILLA_RETENCIONES[".importFields"][] = "cargo";
$tdataPLANILLA_RETENCIONES[".importFields"][] = "paterno";
$tdataPLANILLA_RETENCIONES[".importFields"][] = "materno";
$tdataPLANILLA_RETENCIONES[".importFields"][] = "nombres";
$tdataPLANILLA_RETENCIONES[".importFields"][] = "ci";
$tdataPLANILLA_RETENCIONES[".importFields"][] = "exp";
$tdataPLANILLA_RETENCIONES[".importFields"][] = "haber_basico";
$tdataPLANILLA_RETENCIONES[".importFields"][] = "haber_percibido";
$tdataPLANILLA_RETENCIONES[".importFields"][] = "bono_ant";
$tdataPLANILLA_RETENCIONES[".importFields"][] = "total_ganado";
$tdataPLANILLA_RETENCIONES[".importFields"][] = "retenciones";
$tdataPLANILLA_RETENCIONES[".importFields"][] = "mes";
$tdataPLANILLA_RETENCIONES[".importFields"][] = "gestion";
$tdataPLANILLA_RETENCIONES[".importFields"][] = "liquido_pagable";

$tdataPLANILLA_RETENCIONES[".printFields"] = array();
$tdataPLANILLA_RETENCIONES[".printFields"][] = "unidad";
$tdataPLANILLA_RETENCIONES[".printFields"][] = "id_func";
$tdataPLANILLA_RETENCIONES[".printFields"][] = "sexo";
$tdataPLANILLA_RETENCIONES[".printFields"][] = "item_contrato";
$tdataPLANILLA_RETENCIONES[".printFields"][] = "cargo";
$tdataPLANILLA_RETENCIONES[".printFields"][] = "paterno";
$tdataPLANILLA_RETENCIONES[".printFields"][] = "materno";
$tdataPLANILLA_RETENCIONES[".printFields"][] = "nombres";
$tdataPLANILLA_RETENCIONES[".printFields"][] = "ci";
$tdataPLANILLA_RETENCIONES[".printFields"][] = "exp";
$tdataPLANILLA_RETENCIONES[".printFields"][] = "haber_basico";
$tdataPLANILLA_RETENCIONES[".printFields"][] = "haber_percibido";
$tdataPLANILLA_RETENCIONES[".printFields"][] = "bono_ant";
$tdataPLANILLA_RETENCIONES[".printFields"][] = "total_ganado";
$tdataPLANILLA_RETENCIONES[".printFields"][] = "mes";
$tdataPLANILLA_RETENCIONES[".printFields"][] = "gestion";
$tdataPLANILLA_RETENCIONES[".printFields"][] = "liquido_pagable";
$tdataPLANILLA_RETENCIONES[".printFields"][] = "retenciones";

//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PLANILLA_RETENCIONES","id_func"); 
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

	

	
	$tdataPLANILLA_RETENCIONES["id_func"] = $fdata;
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PLANILLA_RETENCIONES","sexo"); 
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

	

	
	$tdataPLANILLA_RETENCIONES["sexo"] = $fdata;
//	item_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "item_contrato";
	$fdata["GoodName"] = "item_contrato";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PLANILLA_RETENCIONES","item_contrato"); 
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

	

	
	$tdataPLANILLA_RETENCIONES["item_contrato"] = $fdata;
//	unidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "unidad";
	$fdata["GoodName"] = "unidad";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PLANILLA_RETENCIONES","unidad"); 
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

	

	
	$tdataPLANILLA_RETENCIONES["unidad"] = $fdata;
//	cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cargo";
	$fdata["GoodName"] = "cargo";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PLANILLA_RETENCIONES","cargo"); 
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

	

	
	$tdataPLANILLA_RETENCIONES["cargo"] = $fdata;
//	paterno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "paterno";
	$fdata["GoodName"] = "paterno";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PLANILLA_RETENCIONES","paterno"); 
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

	

	
	$tdataPLANILLA_RETENCIONES["paterno"] = $fdata;
//	materno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "materno";
	$fdata["GoodName"] = "materno";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PLANILLA_RETENCIONES","materno"); 
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

	

	
	$tdataPLANILLA_RETENCIONES["materno"] = $fdata;
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PLANILLA_RETENCIONES","nombres"); 
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

	

	
	$tdataPLANILLA_RETENCIONES["nombres"] = $fdata;
//	ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ci";
	$fdata["GoodName"] = "ci";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PLANILLA_RETENCIONES","ci"); 
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

	

	
	$tdataPLANILLA_RETENCIONES["ci"] = $fdata;
//	exp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "exp";
	$fdata["GoodName"] = "exp";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PLANILLA_RETENCIONES","exp"); 
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

	

	
	$tdataPLANILLA_RETENCIONES["exp"] = $fdata;
//	haber_basico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "haber_basico";
	$fdata["GoodName"] = "haber_basico";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PLANILLA_RETENCIONES","haber_basico"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
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
	
		$fdata["strField"] = "haber_basico"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "haber_basico";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataPLANILLA_RETENCIONES["haber_basico"] = $fdata;
//	haber_percibido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "haber_percibido";
	$fdata["GoodName"] = "haber_percibido";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PLANILLA_RETENCIONES","haber_percibido"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
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
	
		$fdata["strField"] = "haber_percibido"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "haber_percibido";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataPLANILLA_RETENCIONES["haber_percibido"] = $fdata;
//	bono_ant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "bono_ant";
	$fdata["GoodName"] = "bono_ant";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PLANILLA_RETENCIONES","bono_ant"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
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
	
		$fdata["strField"] = "bono_ant"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bono_ant";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataPLANILLA_RETENCIONES["bono_ant"] = $fdata;
//	total_ganado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "total_ganado";
	$fdata["GoodName"] = "total_ganado";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PLANILLA_RETENCIONES","total_ganado"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
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
	
		$fdata["strField"] = "total_ganado"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_ganado";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataPLANILLA_RETENCIONES["total_ganado"] = $fdata;
//	retenciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "retenciones";
	$fdata["GoodName"] = "retenciones";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PLANILLA_RETENCIONES","retenciones"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
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
	
		$fdata["strField"] = "retenciones"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "retenciones";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataPLANILLA_RETENCIONES["retenciones"] = $fdata;
//	mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "mes";
	$fdata["GoodName"] = "mes";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PLANILLA_RETENCIONES","mes"); 
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
	
		$fdata["strField"] = "mes"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mes";
	
		
		
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

	

	
	$tdataPLANILLA_RETENCIONES["mes"] = $fdata;
//	gestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "gestion";
	$fdata["GoodName"] = "gestion";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PLANILLA_RETENCIONES","gestion"); 
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
	
		$fdata["strField"] = "gestion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gestion";
	
		
		
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

	

	
	$tdataPLANILLA_RETENCIONES["gestion"] = $fdata;
//	liquido_pagable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "liquido_pagable";
	$fdata["GoodName"] = "liquido_pagable";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PLANILLA_RETENCIONES","liquido_pagable"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
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
	
		$fdata["strField"] = "liquido_pagable"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "liquido_pagable";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataPLANILLA_RETENCIONES["liquido_pagable"] = $fdata;

	
$tables_data["PLANILLA RETENCIONES"]=&$tdataPLANILLA_RETENCIONES;
$field_labels["PLANILLA_RETENCIONES"] = &$fieldLabelsPLANILLA_RETENCIONES;
$fieldToolTips["PLANILLA RETENCIONES"] = &$fieldToolTipsPLANILLA_RETENCIONES;
$page_titles["PLANILLA_RETENCIONES"] = &$pageTitlesPLANILLA_RETENCIONES;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PLANILLA RETENCIONES"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["PLANILLA RETENCIONES"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PLANILLA_RETENCIONES()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_func,  sexo,  item_contrato,  unidad,  cargo,  paterno,  materno,  nombres,  ci,  exp,  haber_basico,  haber_percibido,  bono_ant,  total_ganado,  retenciones,  mes,  gestion,  liquido_pagable";
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
	"m_srcTableName" => "PLANILLA RETENCIONES"
));

$proto5["m_sql"] = "id_func";
$proto5["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PLANILLA RETENCIONES"
));

$proto7["m_sql"] = "sexo";
$proto7["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "item_contrato",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PLANILLA RETENCIONES"
));

$proto9["m_sql"] = "item_contrato";
$proto9["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "unidad",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PLANILLA RETENCIONES"
));

$proto11["m_sql"] = "unidad";
$proto11["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PLANILLA RETENCIONES"
));

$proto13["m_sql"] = "cargo";
$proto13["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "paterno",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PLANILLA RETENCIONES"
));

$proto15["m_sql"] = "paterno";
$proto15["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "materno",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PLANILLA RETENCIONES"
));

$proto17["m_sql"] = "materno";
$proto17["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PLANILLA RETENCIONES"
));

$proto19["m_sql"] = "nombres";
$proto19["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "ci",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PLANILLA RETENCIONES"
));

$proto21["m_sql"] = "ci";
$proto21["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "exp",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PLANILLA RETENCIONES"
));

$proto23["m_sql"] = "exp";
$proto23["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "haber_basico",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PLANILLA RETENCIONES"
));

$proto25["m_sql"] = "haber_basico";
$proto25["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "haber_percibido",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PLANILLA RETENCIONES"
));

$proto27["m_sql"] = "haber_percibido";
$proto27["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "bono_ant",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PLANILLA RETENCIONES"
));

$proto29["m_sql"] = "bono_ant";
$proto29["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "total_ganado",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PLANILLA RETENCIONES"
));

$proto31["m_sql"] = "total_ganado";
$proto31["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "retenciones",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PLANILLA RETENCIONES"
));

$proto33["m_sql"] = "retenciones";
$proto33["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "mes",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PLANILLA RETENCIONES"
));

$proto35["m_sql"] = "mes";
$proto35["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "gestion",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PLANILLA RETENCIONES"
));

$proto37["m_sql"] = "gestion";
$proto37["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "liquido_pagable",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PLANILLA RETENCIONES"
));

$proto39["m_sql"] = "liquido_pagable";
$proto39["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto41=array();
$proto41["m_link"] = "SQLL_MAIN";
			$proto42=array();
$proto42["m_strName"] = "t_planilla_c";
$proto42["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "id_func";
$proto42["m_columns"][] = "fecha_nac";
$proto42["m_columns"][] = "sexo";
$proto42["m_columns"][] = "item_contrato";
$proto42["m_columns"][] = "unidad";
$proto42["m_columns"][] = "cargo";
$proto42["m_columns"][] = "paterno";
$proto42["m_columns"][] = "materno";
$proto42["m_columns"][] = "nombres";
$proto42["m_columns"][] = "ci";
$proto42["m_columns"][] = "exp";
$proto42["m_columns"][] = "nit";
$proto42["m_columns"][] = "fec_ingreso";
$proto42["m_columns"][] = "baja";
$proto42["m_columns"][] = "reasig";
$proto42["m_columns"][] = "haber_basico";
$proto42["m_columns"][] = "dias_trab";
$proto42["m_columns"][] = "haber_percibido";
$proto42["m_columns"][] = "reint";
$proto42["m_columns"][] = "bono_ant";
$proto42["m_columns"][] = "total_ganado";
$proto42["m_columns"][] = "devoluciones";
$proto42["m_columns"][] = "asig_familiar";
$proto42["m_columns"][] = "futuro_afp_10";
$proto42["m_columns"][] = "futuro_afp_riesgo_1_71";
$proto42["m_columns"][] = "futuro_afp_05";
$proto42["m_columns"][] = "futuro_afp_ap_sol_0_5";
$proto42["m_columns"][] = "futuro_ans_1";
$proto42["m_columns"][] = "prev_afp_10";
$proto42["m_columns"][] = "prev_afp_riesgo_1_71";
$proto42["m_columns"][] = "prev_afp_05";
$proto42["m_columns"][] = "prev_afp_ap_sol_0_5";
$proto42["m_columns"][] = "prev_ans_1";
$proto42["m_columns"][] = "rc_iva";
$proto42["m_columns"][] = "retenciones";
$proto42["m_columns"][] = "multa";
$proto42["m_columns"][] = "total_desc";
$proto42["m_columns"][] = "pre_natal";
$proto42["m_columns"][] = "natalidad";
$proto42["m_columns"][] = "lactancia";
$proto42["m_columns"][] = "sepelio";
$proto42["m_columns"][] = "seguro_pat_10";
$proto42["m_columns"][] = "riesgo_pat_171";
$proto42["m_columns"][] = "pro_vivienda_pat_2";
$proto42["m_columns"][] = "ap_pat_sol_3";
$proto42["m_columns"][] = "mes";
$proto42["m_columns"][] = "gestion";
$proto42["m_columns"][] = "liquido_pagable";
$proto42["m_columns"][] = "cod_afp";
$proto42["m_columns"][] = "cta_banco";
$proto42["m_columns"][] = "tipo_funcionario";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "t_planilla_c";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "PLANILLA RETENCIONES";
$proto43=array();
$proto43["m_sql"] = "";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PLANILLA RETENCIONES";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PLANILLA_RETENCIONES = createSqlQuery_PLANILLA_RETENCIONES();


	
																		
	
$tdataPLANILLA_RETENCIONES[".sqlquery"] = $queryData_PLANILLA_RETENCIONES;

$tableEvents["PLANILLA RETENCIONES"] = new eventsBase;
$tdataPLANILLA_RETENCIONES[".hasEvents"] = false;

?>