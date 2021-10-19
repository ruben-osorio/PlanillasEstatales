<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_planilla = array();	
	$tdatat_planilla[".truncateText"] = true;
	$tdatat_planilla[".NumberOfChars"] = 80; 
	$tdatat_planilla[".ShortName"] = "t_planilla";
	$tdatat_planilla[".OwnerID"] = "";
	$tdatat_planilla[".OriginalTable"] = "t_planilla";

//	field labels
$fieldLabelst_planilla = array();
$fieldToolTipst_planilla = array();
$pageTitlest_planilla = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_planilla["Spanish"] = array();
	$fieldToolTipst_planilla["Spanish"] = array();
	$pageTitlest_planilla["Spanish"] = array();
	$fieldLabelst_planilla["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipst_planilla["Spanish"]["id_func"] = "";
	$fieldLabelst_planilla["Spanish"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipst_planilla["Spanish"]["fecha_nac"] = "";
	$fieldLabelst_planilla["Spanish"]["sexo"] = "Sexo";
	$fieldToolTipst_planilla["Spanish"]["sexo"] = "";
	$fieldLabelst_planilla["Spanish"]["item_contrato"] = "Item Contrato";
	$fieldToolTipst_planilla["Spanish"]["item_contrato"] = "";
	$fieldLabelst_planilla["Spanish"]["unidad"] = "Unidad";
	$fieldToolTipst_planilla["Spanish"]["unidad"] = "";
	$fieldLabelst_planilla["Spanish"]["cargo"] = "Cargo";
	$fieldToolTipst_planilla["Spanish"]["cargo"] = "";
	$fieldLabelst_planilla["Spanish"]["paterno"] = "Paterno";
	$fieldToolTipst_planilla["Spanish"]["paterno"] = "";
	$fieldLabelst_planilla["Spanish"]["materno"] = "Materno";
	$fieldToolTipst_planilla["Spanish"]["materno"] = "";
	$fieldLabelst_planilla["Spanish"]["nombres"] = "Nombres";
	$fieldToolTipst_planilla["Spanish"]["nombres"] = "";
	$fieldLabelst_planilla["Spanish"]["ci"] = "Ci";
	$fieldToolTipst_planilla["Spanish"]["ci"] = "";
	$fieldLabelst_planilla["Spanish"]["exp"] = "Exp";
	$fieldToolTipst_planilla["Spanish"]["exp"] = "";
	$fieldLabelst_planilla["Spanish"]["nit"] = "Nit";
	$fieldToolTipst_planilla["Spanish"]["nit"] = "";
	$fieldLabelst_planilla["Spanish"]["fec_ingreso"] = "Fec Ingreso";
	$fieldToolTipst_planilla["Spanish"]["fec_ingreso"] = "";
	$fieldLabelst_planilla["Spanish"]["baja"] = "Baja";
	$fieldToolTipst_planilla["Spanish"]["baja"] = "";
	$fieldLabelst_planilla["Spanish"]["reasig"] = "Reasig";
	$fieldToolTipst_planilla["Spanish"]["reasig"] = "";
	$fieldLabelst_planilla["Spanish"]["haber_basico"] = "Haber Basico";
	$fieldToolTipst_planilla["Spanish"]["haber_basico"] = "";
	$fieldLabelst_planilla["Spanish"]["dias_trab"] = "Dias Trab";
	$fieldToolTipst_planilla["Spanish"]["dias_trab"] = "";
	$fieldLabelst_planilla["Spanish"]["haber_percibido"] = "Haber Percibido";
	$fieldToolTipst_planilla["Spanish"]["haber_percibido"] = "";
	$fieldLabelst_planilla["Spanish"]["reint"] = "Reint";
	$fieldToolTipst_planilla["Spanish"]["reint"] = "";
	$fieldLabelst_planilla["Spanish"]["bono_ant"] = "Bono Ant";
	$fieldToolTipst_planilla["Spanish"]["bono_ant"] = "";
	$fieldLabelst_planilla["Spanish"]["total_ganado"] = "Total Ganado";
	$fieldToolTipst_planilla["Spanish"]["total_ganado"] = "";
	$fieldLabelst_planilla["Spanish"]["devoluciones"] = "Devoluciones";
	$fieldToolTipst_planilla["Spanish"]["devoluciones"] = "";
	$fieldLabelst_planilla["Spanish"]["asig_familiar"] = "Asig Familiar";
	$fieldToolTipst_planilla["Spanish"]["asig_familiar"] = "";
	$fieldLabelst_planilla["Spanish"]["afp_10"] = "Afp 10";
	$fieldToolTipst_planilla["Spanish"]["afp_10"] = "";
	$fieldLabelst_planilla["Spanish"]["afp_riesgo_1_71"] = "Afp Riesgo 1 71";
	$fieldToolTipst_planilla["Spanish"]["afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla["Spanish"]["afp_05"] = "Afp 05";
	$fieldToolTipst_planilla["Spanish"]["afp_05"] = "";
	$fieldLabelst_planilla["Spanish"]["rc_iva"] = "Rc Iva";
	$fieldToolTipst_planilla["Spanish"]["rc_iva"] = "";
	$fieldLabelst_planilla["Spanish"]["retenciones"] = "Retenciones";
	$fieldToolTipst_planilla["Spanish"]["retenciones"] = "";
	$fieldLabelst_planilla["Spanish"]["multa"] = "Multa";
	$fieldToolTipst_planilla["Spanish"]["multa"] = "";
	$fieldLabelst_planilla["Spanish"]["total_desc"] = "Total Desc";
	$fieldToolTipst_planilla["Spanish"]["total_desc"] = "";
	$fieldLabelst_planilla["Spanish"]["mes"] = "Mes";
	$fieldToolTipst_planilla["Spanish"]["mes"] = "";
	$fieldLabelst_planilla["Spanish"]["gestion"] = "Gestion";
	$fieldToolTipst_planilla["Spanish"]["gestion"] = "";
	$fieldLabelst_planilla["Spanish"]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipst_planilla["Spanish"]["liquido_pagable"] = "";
	$fieldLabelst_planilla["Spanish"]["afp_ap_sol_0_5"] = "Afp Ap Sol 0 5";
	$fieldToolTipst_planilla["Spanish"]["afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla["Spanish"]["ans_1"] = "Ans 1";
	$fieldToolTipst_planilla["Spanish"]["ans_1"] = "";
	$fieldLabelst_planilla["Spanish"]["cod_afp"] = "Nombre AFP";
	$fieldToolTipst_planilla["Spanish"]["cod_afp"] = "";
	$fieldLabelst_planilla["Spanish"]["cta_banco"] = "Cuenta del Banco";
	$fieldToolTipst_planilla["Spanish"]["cta_banco"] = "";
	$fieldLabelst_planilla["Spanish"]["tipo_funcionario"] = "Tipo de Funcionario";
	$fieldToolTipst_planilla["Spanish"]["tipo_funcionario"] = "";
	if (count($fieldToolTipst_planilla["Spanish"]))
		$tdatat_planilla[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_planilla[""] = array();
	$fieldToolTipst_planilla[""] = array();
	$pageTitlest_planilla[""] = array();
	$fieldLabelst_planilla[""]["id_func"] = "Id Func";
	$fieldToolTipst_planilla[""]["id_func"] = "";
	$fieldLabelst_planilla[""]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipst_planilla[""]["fecha_nac"] = "";
	$fieldLabelst_planilla[""]["sexo"] = "Sexo";
	$fieldToolTipst_planilla[""]["sexo"] = "";
	$fieldLabelst_planilla[""]["item_contrato"] = "Item Contrato";
	$fieldToolTipst_planilla[""]["item_contrato"] = "";
	$fieldLabelst_planilla[""]["unidad"] = "Unidad";
	$fieldToolTipst_planilla[""]["unidad"] = "";
	$fieldLabelst_planilla[""]["cargo"] = "Cargo";
	$fieldToolTipst_planilla[""]["cargo"] = "";
	$fieldLabelst_planilla[""]["paterno"] = "Paterno";
	$fieldToolTipst_planilla[""]["paterno"] = "";
	$fieldLabelst_planilla[""]["materno"] = "Materno";
	$fieldToolTipst_planilla[""]["materno"] = "";
	$fieldLabelst_planilla[""]["nombres"] = "Nombres";
	$fieldToolTipst_planilla[""]["nombres"] = "";
	$fieldLabelst_planilla[""]["ci"] = "Ci";
	$fieldToolTipst_planilla[""]["ci"] = "";
	$fieldLabelst_planilla[""]["exp"] = "Exp";
	$fieldToolTipst_planilla[""]["exp"] = "";
	$fieldLabelst_planilla[""]["nit"] = "Nit";
	$fieldToolTipst_planilla[""]["nit"] = "";
	$fieldLabelst_planilla[""]["fec_ingreso"] = "Fec Ingreso";
	$fieldToolTipst_planilla[""]["fec_ingreso"] = "";
	$fieldLabelst_planilla[""]["baja"] = "Baja";
	$fieldToolTipst_planilla[""]["baja"] = "";
	$fieldLabelst_planilla[""]["reasig"] = "Reasig";
	$fieldToolTipst_planilla[""]["reasig"] = "";
	$fieldLabelst_planilla[""]["haber_basico"] = "Haber Basico";
	$fieldToolTipst_planilla[""]["haber_basico"] = "";
	$fieldLabelst_planilla[""]["dias_trab"] = "Dias Trab";
	$fieldToolTipst_planilla[""]["dias_trab"] = "";
	$fieldLabelst_planilla[""]["haber_percibido"] = "Haber Percibido";
	$fieldToolTipst_planilla[""]["haber_percibido"] = "";
	$fieldLabelst_planilla[""]["reint"] = "Reint";
	$fieldToolTipst_planilla[""]["reint"] = "";
	$fieldLabelst_planilla[""]["bono_ant"] = "Bono Ant";
	$fieldToolTipst_planilla[""]["bono_ant"] = "";
	$fieldLabelst_planilla[""]["total_ganado"] = "Total Ganado";
	$fieldToolTipst_planilla[""]["total_ganado"] = "";
	$fieldLabelst_planilla[""]["devoluciones"] = "Devoluciones";
	$fieldToolTipst_planilla[""]["devoluciones"] = "";
	$fieldLabelst_planilla[""]["asig_familiar"] = "Asig Familiar";
	$fieldToolTipst_planilla[""]["asig_familiar"] = "";
	$fieldLabelst_planilla[""]["afp_10"] = "Afp 10";
	$fieldToolTipst_planilla[""]["afp_10"] = "";
	$fieldLabelst_planilla[""]["afp_riesgo_1_71"] = "Afp Riesgo 1 71";
	$fieldToolTipst_planilla[""]["afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla[""]["afp_05"] = "Afp 05";
	$fieldToolTipst_planilla[""]["afp_05"] = "";
	$fieldLabelst_planilla[""]["rc_iva"] = "Rc Iva";
	$fieldToolTipst_planilla[""]["rc_iva"] = "";
	$fieldLabelst_planilla[""]["retenciones"] = "Retenciones";
	$fieldToolTipst_planilla[""]["retenciones"] = "";
	$fieldLabelst_planilla[""]["multa"] = "Multa";
	$fieldToolTipst_planilla[""]["multa"] = "";
	$fieldLabelst_planilla[""]["total_desc"] = "Total Desc";
	$fieldToolTipst_planilla[""]["total_desc"] = "";
	$fieldLabelst_planilla[""]["mes"] = "Mes";
	$fieldToolTipst_planilla[""]["mes"] = "";
	$fieldLabelst_planilla[""]["gestion"] = "Gestion";
	$fieldToolTipst_planilla[""]["gestion"] = "";
	$fieldLabelst_planilla[""]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipst_planilla[""]["liquido_pagable"] = "";
	$fieldLabelst_planilla[""]["afp_ap_sol_0_5"] = "Afp Ap Sol 0 5";
	$fieldToolTipst_planilla[""]["afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla[""]["ans_1"] = "Ans 1";
	$fieldToolTipst_planilla[""]["ans_1"] = "";
	$fieldLabelst_planilla[""]["cod_afp"] = "Cod Afp";
	$fieldToolTipst_planilla[""]["cod_afp"] = "";
	$fieldLabelst_planilla[""]["cta_banco"] = "Cta Banco";
	$fieldToolTipst_planilla[""]["cta_banco"] = "";
	$fieldLabelst_planilla[""]["tipo_funcionario"] = "Tipo Funcionario";
	$fieldToolTipst_planilla[""]["tipo_funcionario"] = "";
	if (count($fieldToolTipst_planilla[""]))
		$tdatat_planilla[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_planilla["English"] = array();
	$fieldToolTipst_planilla["English"] = array();
	$pageTitlest_planilla["English"] = array();
	if (count($fieldToolTipst_planilla["English"]))
		$tdatat_planilla[".isUseToolTips"] = true;
}
	
	
	$tdatat_planilla[".NCSearch"] = true;



$tdatat_planilla[".shortTableName"] = "t_planilla";
$tdatat_planilla[".nSecOptions"] = 0;
$tdatat_planilla[".recsPerRowList"] = 1;
$tdatat_planilla[".recsPerRowPrint"] = 1;
$tdatat_planilla[".mainTableOwnerID"] = "";
$tdatat_planilla[".moveNext"] = 1;
$tdatat_planilla[".entityType"] = 0;

$tdatat_planilla[".strOriginalTableName"] = "t_planilla";




$tdatat_planilla[".showAddInPopup"] = false;

$tdatat_planilla[".showEditInPopup"] = false;

$tdatat_planilla[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_planilla[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_planilla[".fieldsForRegister"] = array();

$tdatat_planilla[".listAjax"] = false;

	$tdatat_planilla[".audit"] = false;

	$tdatat_planilla[".locking"] = false;



$tdatat_planilla[".list"] = true;

$tdatat_planilla[".view"] = true;


$tdatat_planilla[".exportTo"] = true;

$tdatat_planilla[".printFriendly"] = true;


$tdatat_planilla[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_planilla[".searchSaving"] = false;
//

$tdatat_planilla[".showSearchPanel"] = true;
		$tdatat_planilla[".flexibleSearch"] = true;		

if (isMobile())
	$tdatat_planilla[".isUseAjaxSuggest"] = false;
else 
	$tdatat_planilla[".isUseAjaxSuggest"] = true;

$tdatat_planilla[".rowHighlite"] = true;



$tdatat_planilla[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_planilla[".isUseTimeForSearch"] = false;





$tdatat_planilla[".allSearchFields"] = array();
$tdatat_planilla[".filterFields"] = array();
$tdatat_planilla[".requiredSearchFields"] = array();

$tdatat_planilla[".allSearchFields"][] = "id_func";
	$tdatat_planilla[".allSearchFields"][] = "fecha_nac";
	$tdatat_planilla[".allSearchFields"][] = "sexo";
	$tdatat_planilla[".allSearchFields"][] = "item_contrato";
	$tdatat_planilla[".allSearchFields"][] = "unidad";
	$tdatat_planilla[".allSearchFields"][] = "cargo";
	$tdatat_planilla[".allSearchFields"][] = "paterno";
	$tdatat_planilla[".allSearchFields"][] = "materno";
	$tdatat_planilla[".allSearchFields"][] = "nombres";
	$tdatat_planilla[".allSearchFields"][] = "ci";
	$tdatat_planilla[".allSearchFields"][] = "exp";
	$tdatat_planilla[".allSearchFields"][] = "nit";
	$tdatat_planilla[".allSearchFields"][] = "fec_ingreso";
	$tdatat_planilla[".allSearchFields"][] = "baja";
	$tdatat_planilla[".allSearchFields"][] = "reasig";
	$tdatat_planilla[".allSearchFields"][] = "haber_basico";
	$tdatat_planilla[".allSearchFields"][] = "dias_trab";
	$tdatat_planilla[".allSearchFields"][] = "haber_percibido";
	$tdatat_planilla[".allSearchFields"][] = "reint";
	$tdatat_planilla[".allSearchFields"][] = "bono_ant";
	$tdatat_planilla[".allSearchFields"][] = "total_ganado";
	$tdatat_planilla[".allSearchFields"][] = "devoluciones";
	$tdatat_planilla[".allSearchFields"][] = "asig_familiar";
	$tdatat_planilla[".allSearchFields"][] = "afp_10";
	$tdatat_planilla[".allSearchFields"][] = "afp_riesgo_1_71";
	$tdatat_planilla[".allSearchFields"][] = "afp_05";
	$tdatat_planilla[".allSearchFields"][] = "afp_ap_sol_0_5";
	$tdatat_planilla[".allSearchFields"][] = "ans_1";
	$tdatat_planilla[".allSearchFields"][] = "rc_iva";
	$tdatat_planilla[".allSearchFields"][] = "retenciones";
	$tdatat_planilla[".allSearchFields"][] = "multa";
	$tdatat_planilla[".allSearchFields"][] = "total_desc";
	$tdatat_planilla[".allSearchFields"][] = "liquido_pagable";
	$tdatat_planilla[".allSearchFields"][] = "mes";
	$tdatat_planilla[".allSearchFields"][] = "gestion";
	$tdatat_planilla[".allSearchFields"][] = "cod_afp";
	$tdatat_planilla[".allSearchFields"][] = "cta_banco";
	$tdatat_planilla[".allSearchFields"][] = "tipo_funcionario";
	

$tdatat_planilla[".googleLikeFields"] = array();
$tdatat_planilla[".googleLikeFields"][] = "id_func";
$tdatat_planilla[".googleLikeFields"][] = "fecha_nac";
$tdatat_planilla[".googleLikeFields"][] = "sexo";
$tdatat_planilla[".googleLikeFields"][] = "item_contrato";
$tdatat_planilla[".googleLikeFields"][] = "unidad";
$tdatat_planilla[".googleLikeFields"][] = "cargo";
$tdatat_planilla[".googleLikeFields"][] = "paterno";
$tdatat_planilla[".googleLikeFields"][] = "materno";
$tdatat_planilla[".googleLikeFields"][] = "nombres";
$tdatat_planilla[".googleLikeFields"][] = "ci";
$tdatat_planilla[".googleLikeFields"][] = "exp";
$tdatat_planilla[".googleLikeFields"][] = "nit";
$tdatat_planilla[".googleLikeFields"][] = "fec_ingreso";
$tdatat_planilla[".googleLikeFields"][] = "baja";
$tdatat_planilla[".googleLikeFields"][] = "reasig";
$tdatat_planilla[".googleLikeFields"][] = "haber_basico";
$tdatat_planilla[".googleLikeFields"][] = "dias_trab";
$tdatat_planilla[".googleLikeFields"][] = "haber_percibido";
$tdatat_planilla[".googleLikeFields"][] = "reint";
$tdatat_planilla[".googleLikeFields"][] = "bono_ant";
$tdatat_planilla[".googleLikeFields"][] = "total_ganado";
$tdatat_planilla[".googleLikeFields"][] = "devoluciones";
$tdatat_planilla[".googleLikeFields"][] = "asig_familiar";
$tdatat_planilla[".googleLikeFields"][] = "afp_10";
$tdatat_planilla[".googleLikeFields"][] = "afp_riesgo_1_71";
$tdatat_planilla[".googleLikeFields"][] = "afp_05";
$tdatat_planilla[".googleLikeFields"][] = "afp_ap_sol_0_5";
$tdatat_planilla[".googleLikeFields"][] = "ans_1";
$tdatat_planilla[".googleLikeFields"][] = "rc_iva";
$tdatat_planilla[".googleLikeFields"][] = "retenciones";
$tdatat_planilla[".googleLikeFields"][] = "multa";
$tdatat_planilla[".googleLikeFields"][] = "total_desc";
$tdatat_planilla[".googleLikeFields"][] = "mes";
$tdatat_planilla[".googleLikeFields"][] = "gestion";
$tdatat_planilla[".googleLikeFields"][] = "liquido_pagable";
$tdatat_planilla[".googleLikeFields"][] = "cod_afp";
$tdatat_planilla[".googleLikeFields"][] = "cta_banco";
$tdatat_planilla[".googleLikeFields"][] = "tipo_funcionario";


$tdatat_planilla[".advSearchFields"] = array();
$tdatat_planilla[".advSearchFields"][] = "id_func";
$tdatat_planilla[".advSearchFields"][] = "fecha_nac";
$tdatat_planilla[".advSearchFields"][] = "sexo";
$tdatat_planilla[".advSearchFields"][] = "item_contrato";
$tdatat_planilla[".advSearchFields"][] = "unidad";
$tdatat_planilla[".advSearchFields"][] = "cargo";
$tdatat_planilla[".advSearchFields"][] = "paterno";
$tdatat_planilla[".advSearchFields"][] = "materno";
$tdatat_planilla[".advSearchFields"][] = "nombres";
$tdatat_planilla[".advSearchFields"][] = "ci";
$tdatat_planilla[".advSearchFields"][] = "exp";
$tdatat_planilla[".advSearchFields"][] = "nit";
$tdatat_planilla[".advSearchFields"][] = "fec_ingreso";
$tdatat_planilla[".advSearchFields"][] = "baja";
$tdatat_planilla[".advSearchFields"][] = "reasig";
$tdatat_planilla[".advSearchFields"][] = "haber_basico";
$tdatat_planilla[".advSearchFields"][] = "dias_trab";
$tdatat_planilla[".advSearchFields"][] = "haber_percibido";
$tdatat_planilla[".advSearchFields"][] = "reint";
$tdatat_planilla[".advSearchFields"][] = "bono_ant";
$tdatat_planilla[".advSearchFields"][] = "total_ganado";
$tdatat_planilla[".advSearchFields"][] = "devoluciones";
$tdatat_planilla[".advSearchFields"][] = "asig_familiar";
$tdatat_planilla[".advSearchFields"][] = "afp_10";
$tdatat_planilla[".advSearchFields"][] = "afp_riesgo_1_71";
$tdatat_planilla[".advSearchFields"][] = "afp_05";
$tdatat_planilla[".advSearchFields"][] = "afp_ap_sol_0_5";
$tdatat_planilla[".advSearchFields"][] = "ans_1";
$tdatat_planilla[".advSearchFields"][] = "rc_iva";
$tdatat_planilla[".advSearchFields"][] = "retenciones";
$tdatat_planilla[".advSearchFields"][] = "multa";
$tdatat_planilla[".advSearchFields"][] = "total_desc";
$tdatat_planilla[".advSearchFields"][] = "liquido_pagable";
$tdatat_planilla[".advSearchFields"][] = "mes";
$tdatat_planilla[".advSearchFields"][] = "gestion";
$tdatat_planilla[".advSearchFields"][] = "cod_afp";
$tdatat_planilla[".advSearchFields"][] = "cta_banco";
$tdatat_planilla[".advSearchFields"][] = "tipo_funcionario";

$tdatat_planilla[".tableType"] = "list";

$tdatat_planilla[".printerPageOrientation"] = 0;
$tdatat_planilla[".nPrinterPageScale"] = 100;

$tdatat_planilla[".nPrinterSplitRecords"] = 40;

$tdatat_planilla[".nPrinterPDFSplitRecords"] = 40;



$tdatat_planilla[".geocodingEnabled"] = false;




	





// view page pdf
$tdatat_planilla[".isViewPagePDF"] = true;
$tdatat_planilla[".isLandscapeViewPDFOrientation"] = 1;
$tdatat_planilla[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatat_planilla[".isPrinterPagePDF"] = true;
$tdatat_planilla[".isLandscapePrinterPagePDFOrientation"] = 1;
$tdatat_planilla[".isPrinterPagePDFFitToPage"] = 0;
$tdatat_planilla[".nPrinterPagePDFScale"] = 100;

$tdatat_planilla[".totalsFields"] = array();
$tdatat_planilla[".totalsFields"][] = array(
	"fName" => "haber_basico", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla[".totalsFields"][] = array(
	"fName" => "haber_percibido", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla[".totalsFields"][] = array(
	"fName" => "reint", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla[".totalsFields"][] = array(
	"fName" => "bono_ant", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla[".totalsFields"][] = array(
	"fName" => "total_ganado", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla[".totalsFields"][] = array(
	"fName" => "devoluciones", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla[".totalsFields"][] = array(
	"fName" => "asig_familiar", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla[".totalsFields"][] = array(
	"fName" => "afp_10", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla[".totalsFields"][] = array(
	"fName" => "afp_riesgo_1_71", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla[".totalsFields"][] = array(
	"fName" => "afp_05", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla[".totalsFields"][] = array(
	"fName" => "afp_ap_sol_0_5", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla[".totalsFields"][] = array(
	"fName" => "ans_1", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla[".totalsFields"][] = array(
	"fName" => "rc_iva", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla[".totalsFields"][] = array(
	"fName" => "retenciones", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla[".totalsFields"][] = array(
	"fName" => "multa", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla[".totalsFields"][] = array(
	"fName" => "total_desc", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla[".totalsFields"][] = array(
	"fName" => "liquido_pagable", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');

$tdatat_planilla[".pageSize"] = 20;

$tdatat_planilla[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_planilla[".strOrderBy"] = $tstrOrderBy;

$tdatat_planilla[".orderindexes"] = array();

$tdatat_planilla[".sqlHead"] = "SELECT id_func,  	fecha_nac,  	sexo,  	item_contrato,  	unidad,  	cargo,  	paterno,  	materno,  	nombres,  	ci,  	exp,  	nit,  	fec_ingreso,  	baja,  	reasig,  	haber_basico,  	dias_trab,  	haber_percibido,  	reint,  	bono_ant,  	total_ganado,  	devoluciones,  	asig_familiar,  	afp_10,  	afp_riesgo_1_71,  	afp_05,  	afp_ap_sol_0_5,  	ans_1,  	rc_iva,  	retenciones,  	multa,  	total_desc,  	mes,  	gestion,  	liquido_pagable,  	cod_afp,  	cta_banco,  	tipo_funcionario";
$tdatat_planilla[".sqlFrom"] = "FROM t_planilla";
$tdatat_planilla[".sqlWhereExpr"] = "";
$tdatat_planilla[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_planilla[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_planilla[".arrGroupsPerPage"] = $arrGPP;

$tdatat_planilla[".highlightSearchResults"] = true;

$tableKeyst_planilla = array();
$tableKeyst_planilla[] = "id_func";
$tdatat_planilla[".Keys"] = $tableKeyst_planilla;

$tdatat_planilla[".listFields"] = array();
$tdatat_planilla[".listFields"][] = "id_func";
$tdatat_planilla[".listFields"][] = "fecha_nac";
$tdatat_planilla[".listFields"][] = "sexo";
$tdatat_planilla[".listFields"][] = "item_contrato";
$tdatat_planilla[".listFields"][] = "unidad";
$tdatat_planilla[".listFields"][] = "cargo";
$tdatat_planilla[".listFields"][] = "paterno";
$tdatat_planilla[".listFields"][] = "materno";
$tdatat_planilla[".listFields"][] = "nombres";
$tdatat_planilla[".listFields"][] = "ci";
$tdatat_planilla[".listFields"][] = "exp";
$tdatat_planilla[".listFields"][] = "nit";
$tdatat_planilla[".listFields"][] = "fec_ingreso";
$tdatat_planilla[".listFields"][] = "baja";
$tdatat_planilla[".listFields"][] = "reasig";
$tdatat_planilla[".listFields"][] = "haber_basico";
$tdatat_planilla[".listFields"][] = "dias_trab";
$tdatat_planilla[".listFields"][] = "haber_percibido";
$tdatat_planilla[".listFields"][] = "reint";
$tdatat_planilla[".listFields"][] = "bono_ant";
$tdatat_planilla[".listFields"][] = "total_ganado";
$tdatat_planilla[".listFields"][] = "devoluciones";
$tdatat_planilla[".listFields"][] = "asig_familiar";
$tdatat_planilla[".listFields"][] = "afp_10";
$tdatat_planilla[".listFields"][] = "afp_riesgo_1_71";
$tdatat_planilla[".listFields"][] = "afp_05";
$tdatat_planilla[".listFields"][] = "afp_ap_sol_0_5";
$tdatat_planilla[".listFields"][] = "ans_1";
$tdatat_planilla[".listFields"][] = "rc_iva";
$tdatat_planilla[".listFields"][] = "retenciones";
$tdatat_planilla[".listFields"][] = "multa";
$tdatat_planilla[".listFields"][] = "total_desc";
$tdatat_planilla[".listFields"][] = "liquido_pagable";
$tdatat_planilla[".listFields"][] = "mes";
$tdatat_planilla[".listFields"][] = "gestion";
$tdatat_planilla[".listFields"][] = "cod_afp";
$tdatat_planilla[".listFields"][] = "cta_banco";
$tdatat_planilla[".listFields"][] = "tipo_funcionario";

$tdatat_planilla[".hideMobileList"] = array();


$tdatat_planilla[".viewFields"] = array();
$tdatat_planilla[".viewFields"][] = "id_func";
$tdatat_planilla[".viewFields"][] = "fecha_nac";
$tdatat_planilla[".viewFields"][] = "sexo";
$tdatat_planilla[".viewFields"][] = "item_contrato";
$tdatat_planilla[".viewFields"][] = "unidad";
$tdatat_planilla[".viewFields"][] = "cargo";
$tdatat_planilla[".viewFields"][] = "paterno";
$tdatat_planilla[".viewFields"][] = "materno";
$tdatat_planilla[".viewFields"][] = "nombres";
$tdatat_planilla[".viewFields"][] = "ci";
$tdatat_planilla[".viewFields"][] = "exp";
$tdatat_planilla[".viewFields"][] = "nit";
$tdatat_planilla[".viewFields"][] = "fec_ingreso";
$tdatat_planilla[".viewFields"][] = "baja";
$tdatat_planilla[".viewFields"][] = "reasig";
$tdatat_planilla[".viewFields"][] = "haber_basico";
$tdatat_planilla[".viewFields"][] = "dias_trab";
$tdatat_planilla[".viewFields"][] = "haber_percibido";
$tdatat_planilla[".viewFields"][] = "reint";
$tdatat_planilla[".viewFields"][] = "bono_ant";
$tdatat_planilla[".viewFields"][] = "total_ganado";
$tdatat_planilla[".viewFields"][] = "devoluciones";
$tdatat_planilla[".viewFields"][] = "asig_familiar";
$tdatat_planilla[".viewFields"][] = "afp_10";
$tdatat_planilla[".viewFields"][] = "afp_riesgo_1_71";
$tdatat_planilla[".viewFields"][] = "afp_05";
$tdatat_planilla[".viewFields"][] = "afp_ap_sol_0_5";
$tdatat_planilla[".viewFields"][] = "ans_1";
$tdatat_planilla[".viewFields"][] = "rc_iva";
$tdatat_planilla[".viewFields"][] = "retenciones";
$tdatat_planilla[".viewFields"][] = "multa";
$tdatat_planilla[".viewFields"][] = "total_desc";
$tdatat_planilla[".viewFields"][] = "liquido_pagable";
$tdatat_planilla[".viewFields"][] = "mes";
$tdatat_planilla[".viewFields"][] = "gestion";
$tdatat_planilla[".viewFields"][] = "cod_afp";
$tdatat_planilla[".viewFields"][] = "cta_banco";
$tdatat_planilla[".viewFields"][] = "tipo_funcionario";

$tdatat_planilla[".addFields"] = array();

$tdatat_planilla[".masterListFields"] = array();
$tdatat_planilla[".masterListFields"][] = "id_func";
$tdatat_planilla[".masterListFields"][] = "fecha_nac";
$tdatat_planilla[".masterListFields"][] = "sexo";
$tdatat_planilla[".masterListFields"][] = "item_contrato";
$tdatat_planilla[".masterListFields"][] = "unidad";
$tdatat_planilla[".masterListFields"][] = "cargo";
$tdatat_planilla[".masterListFields"][] = "paterno";
$tdatat_planilla[".masterListFields"][] = "materno";
$tdatat_planilla[".masterListFields"][] = "nombres";
$tdatat_planilla[".masterListFields"][] = "ci";
$tdatat_planilla[".masterListFields"][] = "exp";
$tdatat_planilla[".masterListFields"][] = "nit";
$tdatat_planilla[".masterListFields"][] = "fec_ingreso";
$tdatat_planilla[".masterListFields"][] = "baja";
$tdatat_planilla[".masterListFields"][] = "reasig";
$tdatat_planilla[".masterListFields"][] = "haber_basico";
$tdatat_planilla[".masterListFields"][] = "dias_trab";
$tdatat_planilla[".masterListFields"][] = "haber_percibido";
$tdatat_planilla[".masterListFields"][] = "reint";
$tdatat_planilla[".masterListFields"][] = "bono_ant";
$tdatat_planilla[".masterListFields"][] = "total_ganado";
$tdatat_planilla[".masterListFields"][] = "devoluciones";
$tdatat_planilla[".masterListFields"][] = "asig_familiar";
$tdatat_planilla[".masterListFields"][] = "afp_10";
$tdatat_planilla[".masterListFields"][] = "afp_riesgo_1_71";
$tdatat_planilla[".masterListFields"][] = "afp_05";
$tdatat_planilla[".masterListFields"][] = "afp_ap_sol_0_5";
$tdatat_planilla[".masterListFields"][] = "ans_1";
$tdatat_planilla[".masterListFields"][] = "rc_iva";
$tdatat_planilla[".masterListFields"][] = "retenciones";
$tdatat_planilla[".masterListFields"][] = "multa";
$tdatat_planilla[".masterListFields"][] = "total_desc";
$tdatat_planilla[".masterListFields"][] = "liquido_pagable";
$tdatat_planilla[".masterListFields"][] = "mes";
$tdatat_planilla[".masterListFields"][] = "gestion";
$tdatat_planilla[".masterListFields"][] = "cod_afp";
$tdatat_planilla[".masterListFields"][] = "cta_banco";
$tdatat_planilla[".masterListFields"][] = "tipo_funcionario";

$tdatat_planilla[".inlineAddFields"] = array();

$tdatat_planilla[".editFields"] = array();

$tdatat_planilla[".inlineEditFields"] = array();

$tdatat_planilla[".exportFields"] = array();
$tdatat_planilla[".exportFields"][] = "id_func";
$tdatat_planilla[".exportFields"][] = "fecha_nac";
$tdatat_planilla[".exportFields"][] = "sexo";
$tdatat_planilla[".exportFields"][] = "item_contrato";
$tdatat_planilla[".exportFields"][] = "unidad";
$tdatat_planilla[".exportFields"][] = "cargo";
$tdatat_planilla[".exportFields"][] = "paterno";
$tdatat_planilla[".exportFields"][] = "materno";
$tdatat_planilla[".exportFields"][] = "nombres";
$tdatat_planilla[".exportFields"][] = "ci";
$tdatat_planilla[".exportFields"][] = "exp";
$tdatat_planilla[".exportFields"][] = "nit";
$tdatat_planilla[".exportFields"][] = "fec_ingreso";
$tdatat_planilla[".exportFields"][] = "baja";
$tdatat_planilla[".exportFields"][] = "reasig";
$tdatat_planilla[".exportFields"][] = "haber_basico";
$tdatat_planilla[".exportFields"][] = "dias_trab";
$tdatat_planilla[".exportFields"][] = "haber_percibido";
$tdatat_planilla[".exportFields"][] = "reint";
$tdatat_planilla[".exportFields"][] = "bono_ant";
$tdatat_planilla[".exportFields"][] = "total_ganado";
$tdatat_planilla[".exportFields"][] = "devoluciones";
$tdatat_planilla[".exportFields"][] = "asig_familiar";
$tdatat_planilla[".exportFields"][] = "afp_10";
$tdatat_planilla[".exportFields"][] = "afp_riesgo_1_71";
$tdatat_planilla[".exportFields"][] = "afp_05";
$tdatat_planilla[".exportFields"][] = "afp_ap_sol_0_5";
$tdatat_planilla[".exportFields"][] = "ans_1";
$tdatat_planilla[".exportFields"][] = "rc_iva";
$tdatat_planilla[".exportFields"][] = "retenciones";
$tdatat_planilla[".exportFields"][] = "multa";
$tdatat_planilla[".exportFields"][] = "total_desc";
$tdatat_planilla[".exportFields"][] = "liquido_pagable";
$tdatat_planilla[".exportFields"][] = "mes";
$tdatat_planilla[".exportFields"][] = "gestion";
$tdatat_planilla[".exportFields"][] = "cod_afp";
$tdatat_planilla[".exportFields"][] = "cta_banco";
$tdatat_planilla[".exportFields"][] = "tipo_funcionario";

$tdatat_planilla[".importFields"] = array();

$tdatat_planilla[".printFields"] = array();
$tdatat_planilla[".printFields"][] = "id_func";
$tdatat_planilla[".printFields"][] = "fecha_nac";
$tdatat_planilla[".printFields"][] = "sexo";
$tdatat_planilla[".printFields"][] = "item_contrato";
$tdatat_planilla[".printFields"][] = "unidad";
$tdatat_planilla[".printFields"][] = "cargo";
$tdatat_planilla[".printFields"][] = "paterno";
$tdatat_planilla[".printFields"][] = "materno";
$tdatat_planilla[".printFields"][] = "nombres";
$tdatat_planilla[".printFields"][] = "ci";
$tdatat_planilla[".printFields"][] = "exp";
$tdatat_planilla[".printFields"][] = "nit";
$tdatat_planilla[".printFields"][] = "fec_ingreso";
$tdatat_planilla[".printFields"][] = "baja";
$tdatat_planilla[".printFields"][] = "reasig";
$tdatat_planilla[".printFields"][] = "haber_basico";
$tdatat_planilla[".printFields"][] = "dias_trab";
$tdatat_planilla[".printFields"][] = "haber_percibido";
$tdatat_planilla[".printFields"][] = "reint";
$tdatat_planilla[".printFields"][] = "bono_ant";
$tdatat_planilla[".printFields"][] = "total_ganado";
$tdatat_planilla[".printFields"][] = "devoluciones";
$tdatat_planilla[".printFields"][] = "asig_familiar";
$tdatat_planilla[".printFields"][] = "afp_10";
$tdatat_planilla[".printFields"][] = "afp_riesgo_1_71";
$tdatat_planilla[".printFields"][] = "afp_05";
$tdatat_planilla[".printFields"][] = "afp_ap_sol_0_5";
$tdatat_planilla[".printFields"][] = "ans_1";
$tdatat_planilla[".printFields"][] = "rc_iva";
$tdatat_planilla[".printFields"][] = "retenciones";
$tdatat_planilla[".printFields"][] = "multa";
$tdatat_planilla[".printFields"][] = "total_desc";
$tdatat_planilla[".printFields"][] = "liquido_pagable";
$tdatat_planilla[".printFields"][] = "mes";
$tdatat_planilla[".printFields"][] = "gestion";
$tdatat_planilla[".printFields"][] = "cod_afp";
$tdatat_planilla[".printFields"][] = "cta_banco";
$tdatat_planilla[".printFields"][] = "tipo_funcionario";

//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","id_func"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla["id_func"] = $fdata;
//	fecha_nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha_nac";
	$fdata["GoodName"] = "fecha_nac";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","fecha_nac"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla["fecha_nac"] = $fdata;
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","sexo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["sexo"] = $fdata;
//	item_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "item_contrato";
	$fdata["GoodName"] = "item_contrato";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","item_contrato"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["item_contrato"] = $fdata;
//	unidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "unidad";
	$fdata["GoodName"] = "unidad";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","unidad"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["unidad"] = $fdata;
//	cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cargo";
	$fdata["GoodName"] = "cargo";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","cargo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["cargo"] = $fdata;
//	paterno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "paterno";
	$fdata["GoodName"] = "paterno";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","paterno"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["paterno"] = $fdata;
//	materno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "materno";
	$fdata["GoodName"] = "materno";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","materno"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["materno"] = $fdata;
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","nombres"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["nombres"] = $fdata;
//	ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ci";
	$fdata["GoodName"] = "ci";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","ci"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["ci"] = $fdata;
//	exp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "exp";
	$fdata["GoodName"] = "exp";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","exp"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["exp"] = $fdata;
//	nit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "nit";
	$fdata["GoodName"] = "nit";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","nit"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nit"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nit";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["nit"] = $fdata;
//	fec_ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "fec_ingreso";
	$fdata["GoodName"] = "fec_ingreso";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","fec_ingreso"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fec_ingreso"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fec_ingreso";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["fec_ingreso"] = $fdata;
//	baja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "baja";
	$fdata["GoodName"] = "baja";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","baja"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "baja"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "baja";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["baja"] = $fdata;
//	reasig
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "reasig";
	$fdata["GoodName"] = "reasig";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","reasig"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reasig"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reasig";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["reasig"] = $fdata;
//	haber_basico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "haber_basico";
	$fdata["GoodName"] = "haber_basico";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","haber_basico"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["haber_basico"] = $fdata;
//	dias_trab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "dias_trab";
	$fdata["GoodName"] = "dias_trab";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","dias_trab"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "dias_trab"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dias_trab";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["dias_trab"] = $fdata;
//	haber_percibido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "haber_percibido";
	$fdata["GoodName"] = "haber_percibido";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","haber_percibido"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["haber_percibido"] = $fdata;
//	reint
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "reint";
	$fdata["GoodName"] = "reint";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","reint"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reint"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reint";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["reint"] = $fdata;
//	bono_ant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "bono_ant";
	$fdata["GoodName"] = "bono_ant";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","bono_ant"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["bono_ant"] = $fdata;
//	total_ganado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "total_ganado";
	$fdata["GoodName"] = "total_ganado";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","total_ganado"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["total_ganado"] = $fdata;
//	devoluciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "devoluciones";
	$fdata["GoodName"] = "devoluciones";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","devoluciones"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "devoluciones"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "devoluciones";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["devoluciones"] = $fdata;
//	asig_familiar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "asig_familiar";
	$fdata["GoodName"] = "asig_familiar";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","asig_familiar"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "asig_familiar"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "asig_familiar";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["asig_familiar"] = $fdata;
//	afp_10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "afp_10";
	$fdata["GoodName"] = "afp_10";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","afp_10"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "afp_10"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "afp_10";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["afp_10"] = $fdata;
//	afp_riesgo_1_71
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "afp_riesgo_1_71";
	$fdata["GoodName"] = "afp_riesgo_1_71";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","afp_riesgo_1_71"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "afp_riesgo_1_71"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "afp_riesgo_1_71";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["afp_riesgo_1_71"] = $fdata;
//	afp_05
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "afp_05";
	$fdata["GoodName"] = "afp_05";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","afp_05"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "afp_05"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "afp_05";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["afp_05"] = $fdata;
//	afp_ap_sol_0_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "afp_ap_sol_0_5";
	$fdata["GoodName"] = "afp_ap_sol_0_5";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","afp_ap_sol_0_5"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "afp_ap_sol_0_5"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "afp_ap_sol_0_5";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["afp_ap_sol_0_5"] = $fdata;
//	ans_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ans_1";
	$fdata["GoodName"] = "ans_1";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","ans_1"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ans_1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ans_1";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["ans_1"] = $fdata;
//	rc_iva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "rc_iva";
	$fdata["GoodName"] = "rc_iva";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","rc_iva"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rc_iva"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rc_iva";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["rc_iva"] = $fdata;
//	retenciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "retenciones";
	$fdata["GoodName"] = "retenciones";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","retenciones"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["retenciones"] = $fdata;
//	multa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "multa";
	$fdata["GoodName"] = "multa";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","multa"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "multa"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "multa";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["multa"] = $fdata;
//	total_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "total_desc";
	$fdata["GoodName"] = "total_desc";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","total_desc"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_desc"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_desc";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["total_desc"] = $fdata;
//	mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "mes";
	$fdata["GoodName"] = "mes";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","mes"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["mes"] = $fdata;
//	gestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "gestion";
	$fdata["GoodName"] = "gestion";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","gestion"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["gestion"] = $fdata;
//	liquido_pagable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "liquido_pagable";
	$fdata["GoodName"] = "liquido_pagable";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","liquido_pagable"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["liquido_pagable"] = $fdata;
//	cod_afp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "cod_afp";
	$fdata["GoodName"] = "cod_afp";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","cod_afp"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cod_afp"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cod_afp";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["cod_afp"] = $fdata;
//	cta_banco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "cta_banco";
	$fdata["GoodName"] = "cta_banco";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","cta_banco"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cta_banco"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cta_banco";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["cta_banco"] = $fdata;
//	tipo_funcionario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "tipo_funcionario";
	$fdata["GoodName"] = "tipo_funcionario";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("t_planilla","tipo_funcionario"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "tipo_funcionario"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_funcionario";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_planilla["tipo_funcionario"] = $fdata;

	
$tables_data["t_planilla"]=&$tdatat_planilla;
$field_labels["t_planilla"] = &$fieldLabelst_planilla;
$fieldToolTips["t_planilla"] = &$fieldToolTipst_planilla;
$page_titles["t_planilla"] = &$pageTitlest_planilla;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_planilla"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_planilla"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_planilla()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_func,  	fecha_nac,  	sexo,  	item_contrato,  	unidad,  	cargo,  	paterno,  	materno,  	nombres,  	ci,  	exp,  	nit,  	fec_ingreso,  	baja,  	reasig,  	haber_basico,  	dias_trab,  	haber_percibido,  	reint,  	bono_ant,  	total_ganado,  	devoluciones,  	asig_familiar,  	afp_10,  	afp_riesgo_1_71,  	afp_05,  	afp_ap_sol_0_5,  	ans_1,  	rc_iva,  	retenciones,  	multa,  	total_desc,  	mes,  	gestion,  	liquido_pagable,  	cod_afp,  	cta_banco,  	tipo_funcionario";
$proto0["m_strFrom"] = "FROM t_planilla";
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
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto5["m_sql"] = "id_func";
$proto5["m_srcTableName"] = "t_planilla";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_nac",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto7["m_sql"] = "fecha_nac";
$proto7["m_srcTableName"] = "t_planilla";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto9["m_sql"] = "sexo";
$proto9["m_srcTableName"] = "t_planilla";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "item_contrato",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto11["m_sql"] = "item_contrato";
$proto11["m_srcTableName"] = "t_planilla";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "unidad",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto13["m_sql"] = "unidad";
$proto13["m_srcTableName"] = "t_planilla";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto15["m_sql"] = "cargo";
$proto15["m_srcTableName"] = "t_planilla";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "paterno",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto17["m_sql"] = "paterno";
$proto17["m_srcTableName"] = "t_planilla";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "materno",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto19["m_sql"] = "materno";
$proto19["m_srcTableName"] = "t_planilla";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto21["m_sql"] = "nombres";
$proto21["m_srcTableName"] = "t_planilla";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "ci",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto23["m_sql"] = "ci";
$proto23["m_srcTableName"] = "t_planilla";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "exp",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto25["m_sql"] = "exp";
$proto25["m_srcTableName"] = "t_planilla";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "nit",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto27["m_sql"] = "nit";
$proto27["m_srcTableName"] = "t_planilla";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "fec_ingreso",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto29["m_sql"] = "fec_ingreso";
$proto29["m_srcTableName"] = "t_planilla";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "baja",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto31["m_sql"] = "baja";
$proto31["m_srcTableName"] = "t_planilla";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "reasig",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto33["m_sql"] = "reasig";
$proto33["m_srcTableName"] = "t_planilla";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "haber_basico",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto35["m_sql"] = "haber_basico";
$proto35["m_srcTableName"] = "t_planilla";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "dias_trab",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto37["m_sql"] = "dias_trab";
$proto37["m_srcTableName"] = "t_planilla";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "haber_percibido",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto39["m_sql"] = "haber_percibido";
$proto39["m_srcTableName"] = "t_planilla";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "reint",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto41["m_sql"] = "reint";
$proto41["m_srcTableName"] = "t_planilla";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "bono_ant",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto43["m_sql"] = "bono_ant";
$proto43["m_srcTableName"] = "t_planilla";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "total_ganado",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto45["m_sql"] = "total_ganado";
$proto45["m_srcTableName"] = "t_planilla";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "devoluciones",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto47["m_sql"] = "devoluciones";
$proto47["m_srcTableName"] = "t_planilla";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "asig_familiar",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto49["m_sql"] = "asig_familiar";
$proto49["m_srcTableName"] = "t_planilla";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "afp_10",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto51["m_sql"] = "afp_10";
$proto51["m_srcTableName"] = "t_planilla";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "afp_riesgo_1_71",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto53["m_sql"] = "afp_riesgo_1_71";
$proto53["m_srcTableName"] = "t_planilla";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "afp_05",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto55["m_sql"] = "afp_05";
$proto55["m_srcTableName"] = "t_planilla";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "afp_ap_sol_0_5",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto57["m_sql"] = "afp_ap_sol_0_5";
$proto57["m_srcTableName"] = "t_planilla";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "ans_1",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto59["m_sql"] = "ans_1";
$proto59["m_srcTableName"] = "t_planilla";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "rc_iva",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto61["m_sql"] = "rc_iva";
$proto61["m_srcTableName"] = "t_planilla";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "retenciones",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto63["m_sql"] = "retenciones";
$proto63["m_srcTableName"] = "t_planilla";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "multa",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto65["m_sql"] = "multa";
$proto65["m_srcTableName"] = "t_planilla";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "total_desc",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto67["m_sql"] = "total_desc";
$proto67["m_srcTableName"] = "t_planilla";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "mes",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto69["m_sql"] = "mes";
$proto69["m_srcTableName"] = "t_planilla";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "gestion",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto71["m_sql"] = "gestion";
$proto71["m_srcTableName"] = "t_planilla";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "liquido_pagable",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto73["m_sql"] = "liquido_pagable";
$proto73["m_srcTableName"] = "t_planilla";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "cod_afp",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto75["m_sql"] = "cod_afp";
$proto75["m_srcTableName"] = "t_planilla";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "cta_banco",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto77["m_sql"] = "cta_banco";
$proto77["m_srcTableName"] = "t_planilla";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_funcionario",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "t_planilla"
));

$proto79["m_sql"] = "tipo_funcionario";
$proto79["m_srcTableName"] = "t_planilla";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto81=array();
$proto81["m_link"] = "SQLL_MAIN";
			$proto82=array();
$proto82["m_strName"] = "t_planilla";
$proto82["m_srcTableName"] = "t_planilla";
$proto82["m_columns"] = array();
$proto82["m_columns"][] = "id_func";
$proto82["m_columns"][] = "fecha_nac";
$proto82["m_columns"][] = "sexo";
$proto82["m_columns"][] = "item_contrato";
$proto82["m_columns"][] = "unidad";
$proto82["m_columns"][] = "cargo";
$proto82["m_columns"][] = "paterno";
$proto82["m_columns"][] = "materno";
$proto82["m_columns"][] = "nombres";
$proto82["m_columns"][] = "ci";
$proto82["m_columns"][] = "exp";
$proto82["m_columns"][] = "nit";
$proto82["m_columns"][] = "fec_ingreso";
$proto82["m_columns"][] = "baja";
$proto82["m_columns"][] = "reasig";
$proto82["m_columns"][] = "haber_basico";
$proto82["m_columns"][] = "dias_trab";
$proto82["m_columns"][] = "haber_percibido";
$proto82["m_columns"][] = "reint";
$proto82["m_columns"][] = "bono_ant";
$proto82["m_columns"][] = "total_ganado";
$proto82["m_columns"][] = "devoluciones";
$proto82["m_columns"][] = "asig_familiar";
$proto82["m_columns"][] = "afp_10";
$proto82["m_columns"][] = "afp_riesgo_1_71";
$proto82["m_columns"][] = "afp_05";
$proto82["m_columns"][] = "afp_ap_sol_0_5";
$proto82["m_columns"][] = "ans_1";
$proto82["m_columns"][] = "rc_iva";
$proto82["m_columns"][] = "retenciones";
$proto82["m_columns"][] = "multa";
$proto82["m_columns"][] = "total_desc";
$proto82["m_columns"][] = "mes";
$proto82["m_columns"][] = "gestion";
$proto82["m_columns"][] = "liquido_pagable";
$proto82["m_columns"][] = "cod_afp";
$proto82["m_columns"][] = "cta_banco";
$proto82["m_columns"][] = "tipo_funcionario";
$obj = new SQLTable($proto82);

$proto81["m_table"] = $obj;
$proto81["m_sql"] = "t_planilla";
$proto81["m_alias"] = "";
$proto81["m_srcTableName"] = "t_planilla";
$proto83=array();
$proto83["m_sql"] = "";
$proto83["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto83["m_column"]=$obj;
$proto83["m_contained"] = array();
$proto83["m_strCase"] = "";
$proto83["m_havingmode"] = false;
$proto83["m_inBrackets"] = false;
$proto83["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto83);

$proto81["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto81);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_planilla";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_planilla = createSqlQuery_t_planilla();


	
																																						
	
$tdatat_planilla[".sqlquery"] = $queryData_t_planilla;

$tableEvents["t_planilla"] = new eventsBase;
$tdatat_planilla[".hasEvents"] = false;

?>