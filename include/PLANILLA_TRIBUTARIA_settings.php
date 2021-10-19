<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPLANILLA_TRIBUTARIA = array();	
	$tdataPLANILLA_TRIBUTARIA[".truncateText"] = true;
	$tdataPLANILLA_TRIBUTARIA[".NumberOfChars"] = 80; 
	$tdataPLANILLA_TRIBUTARIA[".ShortName"] = "PLANILLA_TRIBUTARIA";
	$tdataPLANILLA_TRIBUTARIA[".OwnerID"] = "";
	$tdataPLANILLA_TRIBUTARIA[".OriginalTable"] = "t_tributaria";

//	field labels
$fieldLabelsPLANILLA_TRIBUTARIA = array();
$fieldToolTipsPLANILLA_TRIBUTARIA = array();
$pageTitlesPLANILLA_TRIBUTARIA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"] = array();
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"] = array();
	$pageTitlesPLANILLA_TRIBUTARIA["Spanish"] = array();
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["id_func_trib"] = "Id Func Trib";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["id_func_trib"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["gestion"] = "Gestion";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["gestion"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["periodo"] = "Periodo";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["periodo"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["nit"] = "Nit";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["nit"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["novedades"] = "Novedades";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["novedades"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["liquido_pagable"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["dos_salarios_min"] = "Dos Salarios Min";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["dos_salarios_min"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["base_imponible"] = "Base Imponible";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["base_imponible"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["impuesto_rc_iva"] = "Impuesto Rc Iva";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["impuesto_rc_iva"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["dos_salarios_13"] = "Dos Salarios 13";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["dos_salarios_13"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["impuesto_neto_rc_iva"] = "Impuesto Neto Rc Iva";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["impuesto_neto_rc_iva"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["f_110_facturas"] = "F 110 Facturas";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["f_110_facturas"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["saldo_favor_fisco"] = "Saldo Favor Fisco";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["saldo_favor_fisco"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["saldo_favor_dependiente"] = "Saldo Favor Dependiente";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["saldo_favor_dependiente"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["saldo_favor_dependiente_per_anterior"] = "Saldo Favor Dependiente Per Anterior";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["saldo_favor_dependiente_per_anterior"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["mantenimiento_periodo_anterior"] = "Mantenimiento Periodo Anterior";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["mantenimiento_periodo_anterior"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["saldo_periodo_anterior_actualizado"] = "Saldo Periodo Anterior Actualizado";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["saldo_periodo_anterior_actualizado"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["saldo_utilizado"] = "Saldo Utilizado";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["saldo_utilizado"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["impuesto_rc_iva_retenido"] = "Impuesto Rc Iva Retenido";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["impuesto_rc_iva_retenido"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["saldo_favor_dep_mes_siguiente"] = "Saldo Favor Dep Mes Siguiente";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["saldo_favor_dep_mes_siguiente"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["name"] = "Nombres";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["name"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["l_name1"] = "Paterno";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["l_name1"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["l_name2"] = "Materno";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["l_name2"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["ci"] = "CI";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["ci"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["Spanish"]["expe"] = "Exp.";
	$fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]["expe"] = "";
	if (count($fieldToolTipsPLANILLA_TRIBUTARIA["Spanish"]))
		$tdataPLANILLA_TRIBUTARIA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPLANILLA_TRIBUTARIA[""] = array();
	$fieldToolTipsPLANILLA_TRIBUTARIA[""] = array();
	$pageTitlesPLANILLA_TRIBUTARIA[""] = array();
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["id_func_trib"] = "Id Func Trib";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["id_func_trib"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["gestion"] = "Gestion";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["gestion"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["periodo"] = "Periodo";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["periodo"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["nit"] = "Nit";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["nit"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["novedades"] = "Novedades";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["novedades"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["liquido_pagable"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["dos_salarios_min"] = "Dos Salarios Min";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["dos_salarios_min"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["base_imponible"] = "Base Imponible";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["base_imponible"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["impuesto_rc_iva"] = "Impuesto Rc Iva";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["impuesto_rc_iva"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["dos_salarios_13"] = "Dos Salarios 13";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["dos_salarios_13"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["impuesto_neto_rc_iva"] = "Impuesto Neto Rc Iva";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["impuesto_neto_rc_iva"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["f_110_facturas"] = "F 110 Facturas";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["f_110_facturas"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["saldo_favor_fisco"] = "Saldo Favor Fisco";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["saldo_favor_fisco"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["saldo_favor_dependiente"] = "Saldo Favor Dependiente";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["saldo_favor_dependiente"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["saldo_favor_dependiente_per_anterior"] = "Saldo Favor Dependiente Per Anterior";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["saldo_favor_dependiente_per_anterior"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["mantenimiento_periodo_anterior"] = "Mantenimiento Periodo Anterior";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["mantenimiento_periodo_anterior"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["saldo_periodo_anterior_actualizado"] = "Saldo Periodo Anterior Actualizado";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["saldo_periodo_anterior_actualizado"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["saldo_utilizado"] = "Saldo Utilizado";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["saldo_utilizado"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["impuesto_rc_iva_retenido"] = "Impuesto Rc Iva Retenido";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["impuesto_rc_iva_retenido"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["saldo_favor_dep_mes_siguiente"] = "Saldo Favor Dep Mes Siguiente";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["saldo_favor_dep_mes_siguiente"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["name"] = "Name";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["name"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["l_name1"] = "L Name1";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["l_name1"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["l_name2"] = "L Name2";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["l_name2"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["ci"] = "Ci";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["ci"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA[""]["expe"] = "Expe";
	$fieldToolTipsPLANILLA_TRIBUTARIA[""]["expe"] = "";
	if (count($fieldToolTipsPLANILLA_TRIBUTARIA[""]))
		$tdataPLANILLA_TRIBUTARIA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPLANILLA_TRIBUTARIA["English"] = array();
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"] = array();
	$pageTitlesPLANILLA_TRIBUTARIA["English"] = array();
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["id_func_trib"] = "Id Func Trib";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["id_func_trib"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["gestion"] = "Gestion";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["gestion"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["periodo"] = "Periodo";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["periodo"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["nit"] = "Nit";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["nit"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["novedades"] = "Novedades";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["novedades"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["liquido_pagable"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["dos_salarios_min"] = "Dos Salarios Min";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["dos_salarios_min"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["base_imponible"] = "Base Imponible";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["base_imponible"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["impuesto_rc_iva"] = "Impuesto Rc Iva";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["impuesto_rc_iva"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["dos_salarios_13"] = "Dos Salarios 13";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["dos_salarios_13"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["impuesto_neto_rc_iva"] = "Impuesto Neto Rc Iva";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["impuesto_neto_rc_iva"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["f_110_facturas"] = "F 110 Facturas";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["f_110_facturas"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["saldo_favor_fisco"] = "Saldo Favor Fisco";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["saldo_favor_fisco"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["saldo_favor_dependiente"] = "Saldo Favor Dependiente";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["saldo_favor_dependiente"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["saldo_favor_dependiente_per_anterior"] = "Saldo Favor Dependiente Per Anterior";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["saldo_favor_dependiente_per_anterior"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["mantenimiento_periodo_anterior"] = "Mantenimiento Periodo Anterior";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["mantenimiento_periodo_anterior"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["saldo_periodo_anterior_actualizado"] = "Saldo Periodo Anterior Actualizado";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["saldo_periodo_anterior_actualizado"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["saldo_utilizado"] = "Saldo Utilizado";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["saldo_utilizado"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["impuesto_rc_iva_retenido"] = "Impuesto Rc Iva Retenido";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["impuesto_rc_iva_retenido"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["saldo_favor_dep_mes_siguiente"] = "Saldo Favor Dep Mes Siguiente";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["saldo_favor_dep_mes_siguiente"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["name"] = "Name";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["name"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["l_name1"] = "L Name1";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["l_name1"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["l_name2"] = "L Name2";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["l_name2"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["ci"] = "Ci";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["ci"] = "";
	$fieldLabelsPLANILLA_TRIBUTARIA["English"]["expe"] = "Expe";
	$fieldToolTipsPLANILLA_TRIBUTARIA["English"]["expe"] = "";
	if (count($fieldToolTipsPLANILLA_TRIBUTARIA["English"]))
		$tdataPLANILLA_TRIBUTARIA[".isUseToolTips"] = true;
}
	
	
	$tdataPLANILLA_TRIBUTARIA[".NCSearch"] = true;



$tdataPLANILLA_TRIBUTARIA[".shortTableName"] = "PLANILLA_TRIBUTARIA";
$tdataPLANILLA_TRIBUTARIA[".nSecOptions"] = 0;
$tdataPLANILLA_TRIBUTARIA[".recsPerRowList"] = 1;
$tdataPLANILLA_TRIBUTARIA[".recsPerRowPrint"] = 1;
$tdataPLANILLA_TRIBUTARIA[".mainTableOwnerID"] = "";
$tdataPLANILLA_TRIBUTARIA[".moveNext"] = 1;
$tdataPLANILLA_TRIBUTARIA[".entityType"] = 2;

$tdataPLANILLA_TRIBUTARIA[".strOriginalTableName"] = "t_tributaria";




$tdataPLANILLA_TRIBUTARIA[".showAddInPopup"] = false;

$tdataPLANILLA_TRIBUTARIA[".showEditInPopup"] = false;

$tdataPLANILLA_TRIBUTARIA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPLANILLA_TRIBUTARIA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPLANILLA_TRIBUTARIA[".fieldsForRegister"] = array();

$tdataPLANILLA_TRIBUTARIA[".listAjax"] = false;

	$tdataPLANILLA_TRIBUTARIA[".audit"] = false;

	$tdataPLANILLA_TRIBUTARIA[".locking"] = false;

$tdataPLANILLA_TRIBUTARIA[".edit"] = true;
$tdataPLANILLA_TRIBUTARIA[".afterEditAction"] = 1;
$tdataPLANILLA_TRIBUTARIA[".closePopupAfterEdit"] = 1;
$tdataPLANILLA_TRIBUTARIA[".afterEditActionDetTable"] = "";

$tdataPLANILLA_TRIBUTARIA[".add"] = true;
$tdataPLANILLA_TRIBUTARIA[".afterAddAction"] = 1;
$tdataPLANILLA_TRIBUTARIA[".closePopupAfterAdd"] = 1;
$tdataPLANILLA_TRIBUTARIA[".afterAddActionDetTable"] = "";

$tdataPLANILLA_TRIBUTARIA[".list"] = true;

$tdataPLANILLA_TRIBUTARIA[".inlineEdit"] = true;
$tdataPLANILLA_TRIBUTARIA[".inlineAdd"] = true;
$tdataPLANILLA_TRIBUTARIA[".view"] = true;


$tdataPLANILLA_TRIBUTARIA[".exportTo"] = true;

$tdataPLANILLA_TRIBUTARIA[".printFriendly"] = true;

$tdataPLANILLA_TRIBUTARIA[".delete"] = true;

$tdataPLANILLA_TRIBUTARIA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataPLANILLA_TRIBUTARIA[".searchSaving"] = false;
//

$tdataPLANILLA_TRIBUTARIA[".showSearchPanel"] = true;
		$tdataPLANILLA_TRIBUTARIA[".flexibleSearch"] = true;		

if (isMobile())
	$tdataPLANILLA_TRIBUTARIA[".isUseAjaxSuggest"] = false;
else 
	$tdataPLANILLA_TRIBUTARIA[".isUseAjaxSuggest"] = true;




$tdataPLANILLA_TRIBUTARIA[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPLANILLA_TRIBUTARIA[".isUseTimeForSearch"] = false;





$tdataPLANILLA_TRIBUTARIA[".allSearchFields"] = array();
$tdataPLANILLA_TRIBUTARIA[".filterFields"] = array();
$tdataPLANILLA_TRIBUTARIA[".requiredSearchFields"] = array();

$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "id_func_trib";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "gestion";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "periodo";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "nit";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "name";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "l_name1";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "l_name2";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "ci";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "expe";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "novedades";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "liquido_pagable";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "dos_salarios_min";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "base_imponible";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "impuesto_rc_iva";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "dos_salarios_13";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "impuesto_neto_rc_iva";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "f_110_facturas";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "saldo_favor_fisco";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "saldo_favor_dependiente";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "saldo_favor_dependiente_per_anterior";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "mantenimiento_periodo_anterior";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "saldo_periodo_anterior_actualizado";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "saldo_utilizado";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "impuesto_rc_iva_retenido";
	$tdataPLANILLA_TRIBUTARIA[".allSearchFields"][] = "saldo_favor_dep_mes_siguiente";
	

$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"] = array();
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "id_func_trib";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "gestion";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "periodo";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "nit";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "name";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "l_name1";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "l_name2";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "ci";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "expe";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "novedades";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "liquido_pagable";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "dos_salarios_min";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "base_imponible";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "impuesto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "dos_salarios_13";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "impuesto_neto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "f_110_facturas";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "saldo_favor_fisco";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "saldo_favor_dependiente";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "saldo_favor_dependiente_per_anterior";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "mantenimiento_periodo_anterior";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "saldo_periodo_anterior_actualizado";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "saldo_utilizado";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "impuesto_rc_iva_retenido";
$tdataPLANILLA_TRIBUTARIA[".googleLikeFields"][] = "saldo_favor_dep_mes_siguiente";


$tdataPLANILLA_TRIBUTARIA[".advSearchFields"] = array();
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "id_func_trib";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "gestion";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "periodo";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "nit";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "name";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "l_name1";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "l_name2";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "ci";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "expe";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "novedades";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "liquido_pagable";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "dos_salarios_min";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "base_imponible";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "impuesto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "dos_salarios_13";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "impuesto_neto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "f_110_facturas";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "saldo_favor_fisco";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "saldo_favor_dependiente";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "saldo_favor_dependiente_per_anterior";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "mantenimiento_periodo_anterior";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "saldo_periodo_anterior_actualizado";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "saldo_utilizado";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "impuesto_rc_iva_retenido";
$tdataPLANILLA_TRIBUTARIA[".advSearchFields"][] = "saldo_favor_dep_mes_siguiente";

$tdataPLANILLA_TRIBUTARIA[".tableType"] = "report";

$tdataPLANILLA_TRIBUTARIA[".printerPageOrientation"] = 0;
$tdataPLANILLA_TRIBUTARIA[".nPrinterPageScale"] = 100;

$tdataPLANILLA_TRIBUTARIA[".nPrinterSplitRecords"] = 40;

$tdataPLANILLA_TRIBUTARIA[".nPrinterPDFSplitRecords"] = 40;



$tdataPLANILLA_TRIBUTARIA[".geocodingEnabled"] = false;

//report settings
$tdataPLANILLA_TRIBUTARIA[".printReportLayout"] = 6;	

$tdataPLANILLA_TRIBUTARIA[".reportPrintPartitionType"] = 1;	
$tdataPLANILLA_TRIBUTARIA[".reportPrintGroupsPerPage"] = 40;	
	$tdataPLANILLA_TRIBUTARIA[".reportPrintPDFGroupsPerPage"] = 40;
$tdataPLANILLA_TRIBUTARIA[".lowGroup"] = 0;



$tdataPLANILLA_TRIBUTARIA[".pageSize"] = 20;	






$tdataPLANILLA_TRIBUTARIA[".repShowDet"] = true;

$tdataPLANILLA_TRIBUTARIA[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf
$tdataPLANILLA_TRIBUTARIA[".isPrinterPagePDF"] = true;
$tdataPLANILLA_TRIBUTARIA[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPLANILLA_TRIBUTARIA[".strOrderBy"] = $tstrOrderBy;

$tdataPLANILLA_TRIBUTARIA[".orderindexes"] = array();

$tdataPLANILLA_TRIBUTARIA[".sqlHead"] = "SELECT t_tributaria.id_func_trib,  t_tributaria.gestion,  t_tributaria.periodo,  t_tributaria.nit,  funcionario.name,  funcionario.l_name1,  funcionario.l_name2,  funcionario.ci,  funcionario.expe,  t_tributaria.novedades,  t_tributaria.liquido_pagable,  t_tributaria.dos_salarios_min,  t_tributaria.base_imponible,  t_tributaria.impuesto_rc_iva,  t_tributaria.dos_salarios_13,  t_tributaria.impuesto_neto_rc_iva,  t_tributaria.f_110_facturas,  t_tributaria.saldo_favor_fisco,  t_tributaria.saldo_favor_dependiente,  t_tributaria.saldo_favor_dependiente_per_anterior,  t_tributaria.mantenimiento_periodo_anterior,  t_tributaria.saldo_periodo_anterior_actualizado,  t_tributaria.saldo_utilizado,  t_tributaria.impuesto_rc_iva_retenido,  t_tributaria.saldo_favor_dep_mes_siguiente";
$tdataPLANILLA_TRIBUTARIA[".sqlFrom"] = "FROM t_tributaria  INNER JOIN funcionario ON t_tributaria.id_func_trib = funcionario.id_func";
$tdataPLANILLA_TRIBUTARIA[".sqlWhereExpr"] = "";
$tdataPLANILLA_TRIBUTARIA[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPLANILLA_TRIBUTARIA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPLANILLA_TRIBUTARIA[".arrGroupsPerPage"] = $arrGPP;

$tdataPLANILLA_TRIBUTARIA[".highlightSearchResults"] = true;

$tableKeysPLANILLA_TRIBUTARIA = array();
$tableKeysPLANILLA_TRIBUTARIA[] = "id_func_trib";
$tdataPLANILLA_TRIBUTARIA[".Keys"] = $tableKeysPLANILLA_TRIBUTARIA;

$tdataPLANILLA_TRIBUTARIA[".listFields"] = array();
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "id_func_trib";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "gestion";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "periodo";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "nit";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "name";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "l_name1";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "l_name2";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "ci";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "expe";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "novedades";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "liquido_pagable";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "dos_salarios_min";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "base_imponible";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "impuesto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "dos_salarios_13";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "impuesto_neto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "f_110_facturas";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "saldo_favor_fisco";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "saldo_favor_dependiente";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "saldo_favor_dependiente_per_anterior";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "mantenimiento_periodo_anterior";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "saldo_periodo_anterior_actualizado";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "saldo_utilizado";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "impuesto_rc_iva_retenido";
$tdataPLANILLA_TRIBUTARIA[".listFields"][] = "saldo_favor_dep_mes_siguiente";

$tdataPLANILLA_TRIBUTARIA[".hideMobileList"] = array();


$tdataPLANILLA_TRIBUTARIA[".viewFields"] = array();
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "id_func_trib";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "gestion";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "periodo";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "nit";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "name";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "l_name1";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "l_name2";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "ci";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "expe";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "novedades";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "liquido_pagable";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "dos_salarios_min";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "base_imponible";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "impuesto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "dos_salarios_13";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "impuesto_neto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "f_110_facturas";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "saldo_favor_fisco";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "saldo_favor_dependiente";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "saldo_favor_dependiente_per_anterior";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "mantenimiento_periodo_anterior";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "saldo_periodo_anterior_actualizado";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "saldo_utilizado";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "impuesto_rc_iva_retenido";
$tdataPLANILLA_TRIBUTARIA[".viewFields"][] = "saldo_favor_dep_mes_siguiente";

$tdataPLANILLA_TRIBUTARIA[".addFields"] = array();
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "id_func_trib";
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "gestion";
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "periodo";
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "nit";
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "novedades";
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "liquido_pagable";
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "dos_salarios_min";
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "base_imponible";
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "impuesto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "dos_salarios_13";
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "impuesto_neto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "f_110_facturas";
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "saldo_favor_fisco";
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "saldo_favor_dependiente";
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "saldo_favor_dependiente_per_anterior";
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "mantenimiento_periodo_anterior";
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "saldo_periodo_anterior_actualizado";
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "saldo_utilizado";
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "impuesto_rc_iva_retenido";
$tdataPLANILLA_TRIBUTARIA[".addFields"][] = "saldo_favor_dep_mes_siguiente";

$tdataPLANILLA_TRIBUTARIA[".masterListFields"] = array();
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "id_func_trib";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "gestion";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "periodo";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "nit";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "name";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "l_name1";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "l_name2";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "ci";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "expe";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "novedades";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "liquido_pagable";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "dos_salarios_min";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "base_imponible";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "impuesto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "dos_salarios_13";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "impuesto_neto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "f_110_facturas";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "saldo_favor_fisco";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "saldo_favor_dependiente";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "saldo_favor_dependiente_per_anterior";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "mantenimiento_periodo_anterior";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "saldo_periodo_anterior_actualizado";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "saldo_utilizado";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "impuesto_rc_iva_retenido";
$tdataPLANILLA_TRIBUTARIA[".masterListFields"][] = "saldo_favor_dep_mes_siguiente";

$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"] = array();
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "id_func_trib";
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "gestion";
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "periodo";
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "nit";
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "novedades";
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "liquido_pagable";
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "dos_salarios_min";
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "base_imponible";
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "impuesto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "dos_salarios_13";
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "impuesto_neto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "f_110_facturas";
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "saldo_favor_fisco";
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "saldo_favor_dependiente";
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "saldo_favor_dependiente_per_anterior";
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "mantenimiento_periodo_anterior";
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "saldo_periodo_anterior_actualizado";
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "saldo_utilizado";
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "impuesto_rc_iva_retenido";
$tdataPLANILLA_TRIBUTARIA[".inlineAddFields"][] = "saldo_favor_dep_mes_siguiente";

$tdataPLANILLA_TRIBUTARIA[".editFields"] = array();
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "id_func_trib";
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "gestion";
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "periodo";
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "nit";
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "novedades";
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "liquido_pagable";
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "dos_salarios_min";
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "base_imponible";
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "impuesto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "dos_salarios_13";
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "impuesto_neto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "f_110_facturas";
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "saldo_favor_fisco";
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "saldo_favor_dependiente";
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "saldo_favor_dependiente_per_anterior";
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "mantenimiento_periodo_anterior";
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "saldo_periodo_anterior_actualizado";
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "saldo_utilizado";
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "impuesto_rc_iva_retenido";
$tdataPLANILLA_TRIBUTARIA[".editFields"][] = "saldo_favor_dep_mes_siguiente";

$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"] = array();
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "id_func_trib";
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "gestion";
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "periodo";
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "nit";
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "novedades";
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "liquido_pagable";
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "dos_salarios_min";
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "base_imponible";
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "impuesto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "dos_salarios_13";
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "impuesto_neto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "f_110_facturas";
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "saldo_favor_fisco";
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "saldo_favor_dependiente";
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "saldo_favor_dependiente_per_anterior";
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "mantenimiento_periodo_anterior";
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "saldo_periodo_anterior_actualizado";
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "saldo_utilizado";
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "impuesto_rc_iva_retenido";
$tdataPLANILLA_TRIBUTARIA[".inlineEditFields"][] = "saldo_favor_dep_mes_siguiente";

$tdataPLANILLA_TRIBUTARIA[".exportFields"] = array();
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "id_func_trib";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "gestion";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "periodo";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "nit";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "name";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "l_name1";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "l_name2";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "ci";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "expe";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "novedades";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "liquido_pagable";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "dos_salarios_min";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "base_imponible";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "impuesto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "dos_salarios_13";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "impuesto_neto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "f_110_facturas";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "saldo_favor_fisco";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "saldo_favor_dependiente";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "saldo_favor_dependiente_per_anterior";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "mantenimiento_periodo_anterior";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "saldo_periodo_anterior_actualizado";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "saldo_utilizado";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "impuesto_rc_iva_retenido";
$tdataPLANILLA_TRIBUTARIA[".exportFields"][] = "saldo_favor_dep_mes_siguiente";

$tdataPLANILLA_TRIBUTARIA[".importFields"] = array();
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "id_func_trib";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "gestion";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "periodo";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "nit";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "name";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "l_name1";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "l_name2";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "ci";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "expe";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "novedades";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "liquido_pagable";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "dos_salarios_min";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "base_imponible";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "impuesto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "dos_salarios_13";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "impuesto_neto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "f_110_facturas";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "saldo_favor_fisco";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "saldo_favor_dependiente";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "saldo_favor_dependiente_per_anterior";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "mantenimiento_periodo_anterior";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "saldo_periodo_anterior_actualizado";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "saldo_utilizado";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "impuesto_rc_iva_retenido";
$tdataPLANILLA_TRIBUTARIA[".importFields"][] = "saldo_favor_dep_mes_siguiente";

$tdataPLANILLA_TRIBUTARIA[".printFields"] = array();
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "id_func_trib";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "gestion";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "periodo";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "nit";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "name";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "l_name1";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "l_name2";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "ci";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "expe";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "novedades";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "liquido_pagable";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "dos_salarios_min";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "base_imponible";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "impuesto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "dos_salarios_13";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "impuesto_neto_rc_iva";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "f_110_facturas";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "saldo_favor_fisco";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "saldo_favor_dependiente";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "saldo_favor_dependiente_per_anterior";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "mantenimiento_periodo_anterior";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "saldo_periodo_anterior_actualizado";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "saldo_utilizado";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "impuesto_rc_iva_retenido";
$tdataPLANILLA_TRIBUTARIA[".printFields"][] = "saldo_favor_dep_mes_siguiente";

//	id_func_trib
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_func_trib";
	$fdata["GoodName"] = "id_func_trib";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","id_func_trib"); 
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
	
		$fdata["strField"] = "id_func_trib"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.id_func_trib";
	
		
		
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

	

	
	$tdataPLANILLA_TRIBUTARIA["id_func_trib"] = $fdata;
//	gestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "gestion";
	$fdata["GoodName"] = "gestion";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","gestion"); 
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
	
		$fdata["strField"] = "gestion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.gestion";
	
		
		
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "2019";
	$edata["LookupValues"][] = "2020";
	$edata["LookupValues"][] = "2021";
	$edata["LookupValues"][] = "2022";
	$edata["LookupValues"][] = "2023";
	$edata["LookupValues"][] = "2024";
	$edata["LookupValues"][] = "2025";
	$edata["LookupValues"][] = "2026";
	$edata["LookupValues"][] = "2027";

		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataPLANILLA_TRIBUTARIA["gestion"] = $fdata;
//	periodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "periodo";
	$fdata["GoodName"] = "periodo";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","periodo"); 
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
	
		$fdata["strField"] = "periodo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.periodo";
	
		
		
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "7";
	$edata["LookupValues"][] = "8";
	$edata["LookupValues"][] = "9";
	$edata["LookupValues"][] = "10";
	$edata["LookupValues"][] = "11";
	$edata["LookupValues"][] = "12";

		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataPLANILLA_TRIBUTARIA["periodo"] = $fdata;
//	nit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nit";
	$fdata["GoodName"] = "nit";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","nit"); 
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
	
		$fdata["strField"] = "nit"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.nit";
	
		
		
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
	
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdataPLANILLA_TRIBUTARIA["nit"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","name"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "funcionario.name";
	
		
		
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

	

	
	$tdataPLANILLA_TRIBUTARIA["name"] = $fdata;
//	l_name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "l_name1";
	$fdata["GoodName"] = "l_name1";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","l_name1"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "l_name1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "funcionario.l_name1";
	
		
		
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

	

	
	$tdataPLANILLA_TRIBUTARIA["l_name1"] = $fdata;
//	l_name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "l_name2";
	$fdata["GoodName"] = "l_name2";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","l_name2"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "l_name2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "funcionario.l_name2";
	
		
		
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

	

	
	$tdataPLANILLA_TRIBUTARIA["l_name2"] = $fdata;
//	ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ci";
	$fdata["GoodName"] = "ci";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","ci"); 
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
	$fdata["FullName"] = "funcionario.ci";
	
		
		
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

	

	
	$tdataPLANILLA_TRIBUTARIA["ci"] = $fdata;
//	expe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "expe";
	$fdata["GoodName"] = "expe";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","expe"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "expe"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "funcionario.expe";
	
		
		
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

	

	
	$tdataPLANILLA_TRIBUTARIA["expe"] = $fdata;
//	novedades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "novedades";
	$fdata["GoodName"] = "novedades";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","novedades"); 
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
	
		$fdata["strField"] = "novedades"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.novedades";
	
		
		
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "I";
	$edata["LookupValues"][] = "V";
	$edata["LookupValues"][] = "D";

		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataPLANILLA_TRIBUTARIA["novedades"] = $fdata;
//	liquido_pagable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "liquido_pagable";
	$fdata["GoodName"] = "liquido_pagable";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","liquido_pagable"); 
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
	
		$fdata["strField"] = "liquido_pagable"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.liquido_pagable";
	
		
		
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
			
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdataPLANILLA_TRIBUTARIA["liquido_pagable"] = $fdata;
//	dos_salarios_min
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "dos_salarios_min";
	$fdata["GoodName"] = "dos_salarios_min";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","dos_salarios_min"); 
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
	
		$fdata["strField"] = "dos_salarios_min"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.dos_salarios_min";
	
		
		
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
			
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdataPLANILLA_TRIBUTARIA["dos_salarios_min"] = $fdata;
//	base_imponible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "base_imponible";
	$fdata["GoodName"] = "base_imponible";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","base_imponible"); 
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
	
		$fdata["strField"] = "base_imponible"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.base_imponible";
	
		
		
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
			
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdataPLANILLA_TRIBUTARIA["base_imponible"] = $fdata;
//	impuesto_rc_iva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "impuesto_rc_iva";
	$fdata["GoodName"] = "impuesto_rc_iva";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","impuesto_rc_iva"); 
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
	
		$fdata["strField"] = "impuesto_rc_iva"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.impuesto_rc_iva";
	
		
		
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
			
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdataPLANILLA_TRIBUTARIA["impuesto_rc_iva"] = $fdata;
//	dos_salarios_13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "dos_salarios_13";
	$fdata["GoodName"] = "dos_salarios_13";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","dos_salarios_13"); 
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
	
		$fdata["strField"] = "dos_salarios_13"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.dos_salarios_13";
	
		
		
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
			
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdataPLANILLA_TRIBUTARIA["dos_salarios_13"] = $fdata;
//	impuesto_neto_rc_iva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "impuesto_neto_rc_iva";
	$fdata["GoodName"] = "impuesto_neto_rc_iva";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","impuesto_neto_rc_iva"); 
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
	
		$fdata["strField"] = "impuesto_neto_rc_iva"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.impuesto_neto_rc_iva";
	
		
		
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
			
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdataPLANILLA_TRIBUTARIA["impuesto_neto_rc_iva"] = $fdata;
//	f_110_facturas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "f_110_facturas";
	$fdata["GoodName"] = "f_110_facturas";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","f_110_facturas"); 
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
	
		$fdata["strField"] = "f_110_facturas"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.f_110_facturas";
	
		
		
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
			
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdataPLANILLA_TRIBUTARIA["f_110_facturas"] = $fdata;
//	saldo_favor_fisco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "saldo_favor_fisco";
	$fdata["GoodName"] = "saldo_favor_fisco";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","saldo_favor_fisco"); 
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
	
		$fdata["strField"] = "saldo_favor_fisco"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.saldo_favor_fisco";
	
		
		
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
			
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdataPLANILLA_TRIBUTARIA["saldo_favor_fisco"] = $fdata;
//	saldo_favor_dependiente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "saldo_favor_dependiente";
	$fdata["GoodName"] = "saldo_favor_dependiente";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","saldo_favor_dependiente"); 
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
	
		$fdata["strField"] = "saldo_favor_dependiente"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.saldo_favor_dependiente";
	
		
		
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
			
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdataPLANILLA_TRIBUTARIA["saldo_favor_dependiente"] = $fdata;
//	saldo_favor_dependiente_per_anterior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "saldo_favor_dependiente_per_anterior";
	$fdata["GoodName"] = "saldo_favor_dependiente_per_anterior";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","saldo_favor_dependiente_per_anterior"); 
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
	
		$fdata["strField"] = "saldo_favor_dependiente_per_anterior"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.saldo_favor_dependiente_per_anterior";
	
		
		
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
			
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdataPLANILLA_TRIBUTARIA["saldo_favor_dependiente_per_anterior"] = $fdata;
//	mantenimiento_periodo_anterior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "mantenimiento_periodo_anterior";
	$fdata["GoodName"] = "mantenimiento_periodo_anterior";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","mantenimiento_periodo_anterior"); 
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
	
		$fdata["strField"] = "mantenimiento_periodo_anterior"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.mantenimiento_periodo_anterior";
	
		
		
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
			
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdataPLANILLA_TRIBUTARIA["mantenimiento_periodo_anterior"] = $fdata;
//	saldo_periodo_anterior_actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "saldo_periodo_anterior_actualizado";
	$fdata["GoodName"] = "saldo_periodo_anterior_actualizado";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","saldo_periodo_anterior_actualizado"); 
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
	
		$fdata["strField"] = "saldo_periodo_anterior_actualizado"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.saldo_periodo_anterior_actualizado";
	
		
		
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
			
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdataPLANILLA_TRIBUTARIA["saldo_periodo_anterior_actualizado"] = $fdata;
//	saldo_utilizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "saldo_utilizado";
	$fdata["GoodName"] = "saldo_utilizado";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","saldo_utilizado"); 
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
	
		$fdata["strField"] = "saldo_utilizado"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.saldo_utilizado";
	
		
		
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
			
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdataPLANILLA_TRIBUTARIA["saldo_utilizado"] = $fdata;
//	impuesto_rc_iva_retenido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "impuesto_rc_iva_retenido";
	$fdata["GoodName"] = "impuesto_rc_iva_retenido";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","impuesto_rc_iva_retenido"); 
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
	
		$fdata["strField"] = "impuesto_rc_iva_retenido"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.impuesto_rc_iva_retenido";
	
		
		
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
			
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdataPLANILLA_TRIBUTARIA["impuesto_rc_iva_retenido"] = $fdata;
//	saldo_favor_dep_mes_siguiente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "saldo_favor_dep_mes_siguiente";
	$fdata["GoodName"] = "saldo_favor_dep_mes_siguiente";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("PLANILLA_TRIBUTARIA","saldo_favor_dep_mes_siguiente"); 
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
	
		$fdata["strField"] = "saldo_favor_dep_mes_siguiente"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_tributaria.saldo_favor_dep_mes_siguiente";
	
		
		
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
			
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdataPLANILLA_TRIBUTARIA["saldo_favor_dep_mes_siguiente"] = $fdata;

	
$tables_data["PLANILLA TRIBUTARIA"]=&$tdataPLANILLA_TRIBUTARIA;
$field_labels["PLANILLA_TRIBUTARIA"] = &$fieldLabelsPLANILLA_TRIBUTARIA;
$fieldToolTips["PLANILLA TRIBUTARIA"] = &$fieldToolTipsPLANILLA_TRIBUTARIA;
$page_titles["PLANILLA_TRIBUTARIA"] = &$pageTitlesPLANILLA_TRIBUTARIA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PLANILLA TRIBUTARIA"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["PLANILLA TRIBUTARIA"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PLANILLA_TRIBUTARIA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_tributaria.id_func_trib,  t_tributaria.gestion,  t_tributaria.periodo,  t_tributaria.nit,  funcionario.name,  funcionario.l_name1,  funcionario.l_name2,  funcionario.ci,  funcionario.expe,  t_tributaria.novedades,  t_tributaria.liquido_pagable,  t_tributaria.dos_salarios_min,  t_tributaria.base_imponible,  t_tributaria.impuesto_rc_iva,  t_tributaria.dos_salarios_13,  t_tributaria.impuesto_neto_rc_iva,  t_tributaria.f_110_facturas,  t_tributaria.saldo_favor_fisco,  t_tributaria.saldo_favor_dependiente,  t_tributaria.saldo_favor_dependiente_per_anterior,  t_tributaria.mantenimiento_periodo_anterior,  t_tributaria.saldo_periodo_anterior_actualizado,  t_tributaria.saldo_utilizado,  t_tributaria.impuesto_rc_iva_retenido,  t_tributaria.saldo_favor_dep_mes_siguiente";
$proto0["m_strFrom"] = "FROM t_tributaria  INNER JOIN funcionario ON t_tributaria.id_func_trib = funcionario.id_func";
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
	"m_strName" => "id_func_trib",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto5["m_sql"] = "t_tributaria.id_func_trib";
$proto5["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "gestion",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto7["m_sql"] = "t_tributaria.gestion";
$proto7["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto9["m_sql"] = "t_tributaria.periodo";
$proto9["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nit",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto11["m_sql"] = "t_tributaria.nit";
$proto11["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto13["m_sql"] = "funcionario.name";
$proto13["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "l_name1",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto15["m_sql"] = "funcionario.l_name1";
$proto15["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "l_name2",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto17["m_sql"] = "funcionario.l_name2";
$proto17["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "ci",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto19["m_sql"] = "funcionario.ci";
$proto19["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "expe",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto21["m_sql"] = "funcionario.expe";
$proto21["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "novedades",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto23["m_sql"] = "t_tributaria.novedades";
$proto23["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "liquido_pagable",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto25["m_sql"] = "t_tributaria.liquido_pagable";
$proto25["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "dos_salarios_min",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto27["m_sql"] = "t_tributaria.dos_salarios_min";
$proto27["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "base_imponible",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto29["m_sql"] = "t_tributaria.base_imponible";
$proto29["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "impuesto_rc_iva",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto31["m_sql"] = "t_tributaria.impuesto_rc_iva";
$proto31["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "dos_salarios_13",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto33["m_sql"] = "t_tributaria.dos_salarios_13";
$proto33["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "impuesto_neto_rc_iva",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto35["m_sql"] = "t_tributaria.impuesto_neto_rc_iva";
$proto35["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "f_110_facturas",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto37["m_sql"] = "t_tributaria.f_110_facturas";
$proto37["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "saldo_favor_fisco",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto39["m_sql"] = "t_tributaria.saldo_favor_fisco";
$proto39["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "saldo_favor_dependiente",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto41["m_sql"] = "t_tributaria.saldo_favor_dependiente";
$proto41["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "saldo_favor_dependiente_per_anterior",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto43["m_sql"] = "t_tributaria.saldo_favor_dependiente_per_anterior";
$proto43["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "mantenimiento_periodo_anterior",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto45["m_sql"] = "t_tributaria.mantenimiento_periodo_anterior";
$proto45["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "saldo_periodo_anterior_actualizado",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto47["m_sql"] = "t_tributaria.saldo_periodo_anterior_actualizado";
$proto47["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "saldo_utilizado",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto49["m_sql"] = "t_tributaria.saldo_utilizado";
$proto49["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "impuesto_rc_iva_retenido",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto51["m_sql"] = "t_tributaria.impuesto_rc_iva_retenido";
$proto51["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "saldo_favor_dep_mes_siguiente",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto53["m_sql"] = "t_tributaria.saldo_favor_dep_mes_siguiente";
$proto53["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto55=array();
$proto55["m_link"] = "SQLL_MAIN";
			$proto56=array();
$proto56["m_strName"] = "t_tributaria";
$proto56["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto56["m_columns"] = array();
$proto56["m_columns"][] = "id_func_trib";
$proto56["m_columns"][] = "gestion";
$proto56["m_columns"][] = "periodo";
$proto56["m_columns"][] = "nit";
$proto56["m_columns"][] = "novedades";
$proto56["m_columns"][] = "liquido_pagable";
$proto56["m_columns"][] = "dos_salarios_min";
$proto56["m_columns"][] = "base_imponible";
$proto56["m_columns"][] = "impuesto_rc_iva";
$proto56["m_columns"][] = "dos_salarios_13";
$proto56["m_columns"][] = "impuesto_neto_rc_iva";
$proto56["m_columns"][] = "f_110_facturas";
$proto56["m_columns"][] = "saldo_favor_fisco";
$proto56["m_columns"][] = "saldo_favor_dependiente";
$proto56["m_columns"][] = "saldo_favor_dependiente_per_anterior";
$proto56["m_columns"][] = "mantenimiento_periodo_anterior";
$proto56["m_columns"][] = "saldo_periodo_anterior_actualizado";
$proto56["m_columns"][] = "saldo_utilizado";
$proto56["m_columns"][] = "impuesto_rc_iva_retenido";
$proto56["m_columns"][] = "saldo_favor_dep_mes_siguiente";
$obj = new SQLTable($proto56);

$proto55["m_table"] = $obj;
$proto55["m_sql"] = "t_tributaria";
$proto55["m_alias"] = "";
$proto55["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto57=array();
$proto57["m_sql"] = "";
$proto57["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto57["m_column"]=$obj;
$proto57["m_contained"] = array();
$proto57["m_strCase"] = "";
$proto57["m_havingmode"] = false;
$proto57["m_inBrackets"] = false;
$proto57["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto57);

$proto55["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto55);

$proto0["m_fromlist"][]=$obj;
												$proto59=array();
$proto59["m_link"] = "SQLL_INNERJOIN";
			$proto60=array();
$proto60["m_strName"] = "funcionario";
$proto60["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto60["m_columns"] = array();
$proto60["m_columns"][] = "id_func";
$proto60["m_columns"][] = "estado";
$proto60["m_columns"][] = "name";
$proto60["m_columns"][] = "l_name1";
$proto60["m_columns"][] = "l_name2";
$proto60["m_columns"][] = "l_name_es";
$proto60["m_columns"][] = "nationality";
$proto60["m_columns"][] = "nati";
$proto60["m_columns"][] = "ci";
$proto60["m_columns"][] = "expe";
$proto60["m_columns"][] = "afp";
$proto60["m_columns"][] = "nua";
$proto60["m_columns"][] = "c_status";
$proto60["m_columns"][] = "sex";
$proto60["m_columns"][] = "g_blood";
$proto60["m_columns"][] = "p_email";
$proto60["m_columns"][] = "job_email";
$proto60["m_columns"][] = "adress";
$proto60["m_columns"][] = "place_res";
$proto60["m_columns"][] = "phone_num";
$proto60["m_columns"][] = "cel_num";
$proto60["m_columns"][] = "phone_job";
$proto60["m_columns"][] = "p1_born";
$proto60["m_columns"][] = "p2_born";
$proto60["m_columns"][] = "p3_born";
$proto60["m_columns"][] = "date_born";
$proto60["m_columns"][] = "lic_driv";
$proto60["m_columns"][] = "type_lic";
$proto60["m_columns"][] = "prof";
$proto60["m_columns"][] = "col_prof";
$proto60["m_columns"][] = "num_prof";
$proto60["m_columns"][] = "nit";
$proto60["m_columns"][] = "on_off";
$proto60["m_columns"][] = "last_gra";
$proto60["m_columns"][] = "cole";
$proto60["m_columns"][] = "ciudad_de";
$proto60["m_columns"][] = "anyo_de";
$proto60["m_columns"][] = "title";
$proto60["m_columns"][] = "nro_libreta";
$proto60["m_columns"][] = "matricula";
$proto60["m_columns"][] = "anyo";
$proto60["m_columns"][] = "tipo_libreta";
$proto60["m_columns"][] = "nro_referencia1";
$proto60["m_columns"][] = "nro_referencia2";
$proto60["m_columns"][] = "es_estudiante";
$proto60["m_columns"][] = "nombre_carrera";
$proto60["m_columns"][] = "especialidad";
$proto60["m_columns"][] = "ultimo_anyo";
$proto60["m_columns"][] = "foto";
$proto60["m_columns"][] = "updated_at";
$proto60["m_columns"][] = "created_at";
$obj = new SQLTable($proto60);

$proto59["m_table"] = $obj;
$proto59["m_sql"] = "INNER JOIN funcionario ON t_tributaria.id_func_trib = funcionario.id_func";
$proto59["m_alias"] = "";
$proto59["m_srcTableName"] = "PLANILLA TRIBUTARIA";
$proto61=array();
$proto61["m_sql"] = "t_tributaria.id_func_trib = funcionario.id_func";
$proto61["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_func_trib",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "PLANILLA TRIBUTARIA"
));

$proto61["m_column"]=$obj;
$proto61["m_contained"] = array();
$proto61["m_strCase"] = "= funcionario.id_func";
$proto61["m_havingmode"] = false;
$proto61["m_inBrackets"] = false;
$proto61["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto61);

$proto59["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto59);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PLANILLA TRIBUTARIA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PLANILLA_TRIBUTARIA = createSqlQuery_PLANILLA_TRIBUTARIA();


	
																									
	
$tdataPLANILLA_TRIBUTARIA[".sqlquery"] = $queryData_PLANILLA_TRIBUTARIA;

$tableEvents["PLANILLA TRIBUTARIA"] = new eventsBase;
$tdataPLANILLA_TRIBUTARIA[".hasEvents"] = false;

?>