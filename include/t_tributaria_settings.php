<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_tributaria = array();	
	$tdatat_tributaria[".truncateText"] = true;
	$tdatat_tributaria[".NumberOfChars"] = 80; 
	$tdatat_tributaria[".ShortName"] = "t_tributaria";
	$tdatat_tributaria[".OwnerID"] = "";
	$tdatat_tributaria[".OriginalTable"] = "t_tributaria";

//	field labels
$fieldLabelst_tributaria = array();
$fieldToolTipst_tributaria = array();
$pageTitlest_tributaria = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_tributaria["Spanish"] = array();
	$fieldToolTipst_tributaria["Spanish"] = array();
	$pageTitlest_tributaria["Spanish"] = array();
	$fieldLabelst_tributaria["Spanish"]["id_func_trib"] = "Id Func Trib";
	$fieldToolTipst_tributaria["Spanish"]["id_func_trib"] = "";
	$fieldLabelst_tributaria["Spanish"]["gestion"] = "Gestion";
	$fieldToolTipst_tributaria["Spanish"]["gestion"] = "";
	$fieldLabelst_tributaria["Spanish"]["periodo"] = "Periodo";
	$fieldToolTipst_tributaria["Spanish"]["periodo"] = "";
	$fieldLabelst_tributaria["Spanish"]["nit"] = "NIT";
	$fieldToolTipst_tributaria["Spanish"]["nit"] = "";
	$fieldLabelst_tributaria["Spanish"]["novedades"] = "Novedades (I=Incorporación V=Vigente D=Desvinculado)";
	$fieldToolTipst_tributaria["Spanish"]["novedades"] = "";
	$fieldLabelst_tributaria["Spanish"]["liquido_pagable"] = "Monto de ingreso neto";
	$fieldToolTipst_tributaria["Spanish"]["liquido_pagable"] = "";
	$fieldLabelst_tributaria["Spanish"]["dos_salarios_min"] = "Dos (2) salarios mínimos nacionales no imponibles";
	$fieldToolTipst_tributaria["Spanish"]["dos_salarios_min"] = "";
	$fieldLabelst_tributaria["Spanish"]["base_imponible"] = "Importe sujeto a impuesto (base imponible)";
	$fieldToolTipst_tributaria["Spanish"]["base_imponible"] = "";
	$fieldLabelst_tributaria["Spanish"]["impuesto_rc_iva"] = "Impuesto RC-IVA";
	$fieldToolTipst_tributaria["Spanish"]["impuesto_rc_iva"] = "";
	$fieldLabelst_tributaria["Spanish"]["dos_salarios_13"] = "13% de dos (2) Salarios Mínimos Nacionales";
	$fieldToolTipst_tributaria["Spanish"]["dos_salarios_13"] = "";
	$fieldLabelst_tributaria["Spanish"]["impuesto_neto_rc_iva"] = "Impuesto Neto RC-IVA";
	$fieldToolTipst_tributaria["Spanish"]["impuesto_neto_rc_iva"] = "";
	$fieldLabelst_tributaria["Spanish"]["f_110_facturas"] = "F-110 13% de facturas presentadas";
	$fieldToolTipst_tributaria["Spanish"]["f_110_facturas"] = "";
	$fieldLabelst_tributaria["Spanish"]["saldo_favor_fisco"] = "Saldo a favor del Fisco";
	$fieldToolTipst_tributaria["Spanish"]["saldo_favor_fisco"] = "";
	$fieldLabelst_tributaria["Spanish"]["saldo_favor_dependiente"] = "Saldo a Favor del Dependiente";
	$fieldToolTipst_tributaria["Spanish"]["saldo_favor_dependiente"] = "";
	$fieldLabelst_tributaria["Spanish"]["saldo_favor_dependiente_per_anterior"] = "Saldo a favor del dependiente periodo anterior";
	$fieldToolTipst_tributaria["Spanish"]["saldo_favor_dependiente_per_anterior"] = "";
	$fieldLabelst_tributaria["Spanish"]["mantenimiento_periodo_anterior"] = "Mantenimiento de valor del saldo a  favor del  dependiente del periodo  anterior";
	$fieldToolTipst_tributaria["Spanish"]["mantenimiento_periodo_anterior"] = "";
	$fieldLabelst_tributaria["Spanish"]["saldo_periodo_anterior_actualizado"] = "Saldo del periodo anterior actualizado";
	$fieldToolTipst_tributaria["Spanish"]["saldo_periodo_anterior_actualizado"] = "";
	$fieldLabelst_tributaria["Spanish"]["saldo_utilizado"] = "Saldo Utilizado";
	$fieldToolTipst_tributaria["Spanish"]["saldo_utilizado"] = "";
	$fieldLabelst_tributaria["Spanish"]["impuesto_rc_iva_retenido"] = "Impuesto RC-IVA retenido";
	$fieldToolTipst_tributaria["Spanish"]["impuesto_rc_iva_retenido"] = "";
	$fieldLabelst_tributaria["Spanish"]["saldo_favor_dep_mes_siguiente"] = "Saldo de Crédito Fiscal a favor del dependiente para el mes siguiente";
	$fieldToolTipst_tributaria["Spanish"]["saldo_favor_dep_mes_siguiente"] = "";
	if (count($fieldToolTipst_tributaria["Spanish"]))
		$tdatat_tributaria[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_tributaria[""] = array();
	$fieldToolTipst_tributaria[""] = array();
	$pageTitlest_tributaria[""] = array();
	$fieldLabelst_tributaria[""]["id_func_trib"] = "Id Func Trib";
	$fieldToolTipst_tributaria[""]["id_func_trib"] = "";
	$fieldLabelst_tributaria[""]["gestion"] = "Gestion";
	$fieldToolTipst_tributaria[""]["gestion"] = "";
	$fieldLabelst_tributaria[""]["periodo"] = "Periodo";
	$fieldToolTipst_tributaria[""]["periodo"] = "";
	$fieldLabelst_tributaria[""]["nit"] = "Nit";
	$fieldToolTipst_tributaria[""]["nit"] = "";
	$fieldLabelst_tributaria[""]["novedades"] = "Novedades";
	$fieldToolTipst_tributaria[""]["novedades"] = "";
	$fieldLabelst_tributaria[""]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipst_tributaria[""]["liquido_pagable"] = "";
	$fieldLabelst_tributaria[""]["dos_salarios_min"] = "Dos Salarios Min";
	$fieldToolTipst_tributaria[""]["dos_salarios_min"] = "";
	$fieldLabelst_tributaria[""]["base_imponible"] = "Base Imponible";
	$fieldToolTipst_tributaria[""]["base_imponible"] = "";
	$fieldLabelst_tributaria[""]["impuesto_rc_iva"] = "Impuesto Rc Iva";
	$fieldToolTipst_tributaria[""]["impuesto_rc_iva"] = "";
	$fieldLabelst_tributaria[""]["dos_salarios_13"] = "Dos Salarios 13";
	$fieldToolTipst_tributaria[""]["dos_salarios_13"] = "";
	$fieldLabelst_tributaria[""]["impuesto_neto_rc_iva"] = "Impuesto Neto Rc Iva";
	$fieldToolTipst_tributaria[""]["impuesto_neto_rc_iva"] = "";
	$fieldLabelst_tributaria[""]["f_110_facturas"] = "F 110 Facturas";
	$fieldToolTipst_tributaria[""]["f_110_facturas"] = "";
	$fieldLabelst_tributaria[""]["saldo_favor_fisco"] = "Saldo Favor Fisco";
	$fieldToolTipst_tributaria[""]["saldo_favor_fisco"] = "";
	$fieldLabelst_tributaria[""]["saldo_favor_dependiente"] = "Saldo Favor Dependiente";
	$fieldToolTipst_tributaria[""]["saldo_favor_dependiente"] = "";
	$fieldLabelst_tributaria[""]["saldo_favor_dependiente_per_anterior"] = "Saldo Favor Dependiente Per Anterior";
	$fieldToolTipst_tributaria[""]["saldo_favor_dependiente_per_anterior"] = "";
	$fieldLabelst_tributaria[""]["mantenimiento_periodo_anterior"] = "Mantenimiento Periodo Anterior";
	$fieldToolTipst_tributaria[""]["mantenimiento_periodo_anterior"] = "";
	$fieldLabelst_tributaria[""]["saldo_periodo_anterior_actualizado"] = "Saldo Periodo Anterior Actualizado";
	$fieldToolTipst_tributaria[""]["saldo_periodo_anterior_actualizado"] = "";
	$fieldLabelst_tributaria[""]["saldo_utilizado"] = "Saldo Utilizado";
	$fieldToolTipst_tributaria[""]["saldo_utilizado"] = "";
	$fieldLabelst_tributaria[""]["impuesto_rc_iva_retenido"] = "Impuesto Rc Iva Retenido";
	$fieldToolTipst_tributaria[""]["impuesto_rc_iva_retenido"] = "";
	$fieldLabelst_tributaria[""]["saldo_favor_dep_mes_siguiente"] = "Saldo Favor Dep Mes Siguiente";
	$fieldToolTipst_tributaria[""]["saldo_favor_dep_mes_siguiente"] = "";
	if (count($fieldToolTipst_tributaria[""]))
		$tdatat_tributaria[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_tributaria["English"] = array();
	$fieldToolTipst_tributaria["English"] = array();
	$pageTitlest_tributaria["English"] = array();
	$fieldLabelst_tributaria["English"]["id_func_trib"] = "Id Func Trib";
	$fieldToolTipst_tributaria["English"]["id_func_trib"] = "";
	$fieldLabelst_tributaria["English"]["gestion"] = "Gestion";
	$fieldToolTipst_tributaria["English"]["gestion"] = "";
	$fieldLabelst_tributaria["English"]["periodo"] = "Periodo";
	$fieldToolTipst_tributaria["English"]["periodo"] = "";
	$fieldLabelst_tributaria["English"]["nit"] = "Nit";
	$fieldToolTipst_tributaria["English"]["nit"] = "";
	$fieldLabelst_tributaria["English"]["novedades"] = "Novedades";
	$fieldToolTipst_tributaria["English"]["novedades"] = "";
	$fieldLabelst_tributaria["English"]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipst_tributaria["English"]["liquido_pagable"] = "";
	$fieldLabelst_tributaria["English"]["dos_salarios_min"] = "Dos Salarios Min";
	$fieldToolTipst_tributaria["English"]["dos_salarios_min"] = "";
	$fieldLabelst_tributaria["English"]["base_imponible"] = "Base Imponible";
	$fieldToolTipst_tributaria["English"]["base_imponible"] = "";
	$fieldLabelst_tributaria["English"]["impuesto_rc_iva"] = "Impuesto Rc Iva";
	$fieldToolTipst_tributaria["English"]["impuesto_rc_iva"] = "";
	$fieldLabelst_tributaria["English"]["dos_salarios_13"] = "Dos Salarios 13";
	$fieldToolTipst_tributaria["English"]["dos_salarios_13"] = "";
	$fieldLabelst_tributaria["English"]["impuesto_neto_rc_iva"] = "Impuesto Neto Rc Iva";
	$fieldToolTipst_tributaria["English"]["impuesto_neto_rc_iva"] = "";
	$fieldLabelst_tributaria["English"]["f_110_facturas"] = "F 110 Facturas";
	$fieldToolTipst_tributaria["English"]["f_110_facturas"] = "";
	$fieldLabelst_tributaria["English"]["saldo_favor_fisco"] = "Saldo Favor Fisco";
	$fieldToolTipst_tributaria["English"]["saldo_favor_fisco"] = "";
	$fieldLabelst_tributaria["English"]["saldo_favor_dependiente"] = "Saldo Favor Dependiente";
	$fieldToolTipst_tributaria["English"]["saldo_favor_dependiente"] = "";
	$fieldLabelst_tributaria["English"]["saldo_favor_dependiente_per_anterior"] = "Saldo Favor Dependiente Per Anterior";
	$fieldToolTipst_tributaria["English"]["saldo_favor_dependiente_per_anterior"] = "";
	$fieldLabelst_tributaria["English"]["mantenimiento_periodo_anterior"] = "Mantenimiento Periodo Anterior";
	$fieldToolTipst_tributaria["English"]["mantenimiento_periodo_anterior"] = "";
	$fieldLabelst_tributaria["English"]["saldo_periodo_anterior_actualizado"] = "Saldo Periodo Anterior Actualizado";
	$fieldToolTipst_tributaria["English"]["saldo_periodo_anterior_actualizado"] = "";
	$fieldLabelst_tributaria["English"]["saldo_utilizado"] = "Saldo Utilizado";
	$fieldToolTipst_tributaria["English"]["saldo_utilizado"] = "";
	$fieldLabelst_tributaria["English"]["impuesto_rc_iva_retenido"] = "Impuesto Rc Iva Retenido";
	$fieldToolTipst_tributaria["English"]["impuesto_rc_iva_retenido"] = "";
	$fieldLabelst_tributaria["English"]["saldo_favor_dep_mes_siguiente"] = "Saldo Favor Dep Mes Siguiente";
	$fieldToolTipst_tributaria["English"]["saldo_favor_dep_mes_siguiente"] = "";
	if (count($fieldToolTipst_tributaria["English"]))
		$tdatat_tributaria[".isUseToolTips"] = true;
}
	
	
	$tdatat_tributaria[".NCSearch"] = true;



$tdatat_tributaria[".shortTableName"] = "t_tributaria";
$tdatat_tributaria[".nSecOptions"] = 0;
$tdatat_tributaria[".recsPerRowPrint"] = 1;
$tdatat_tributaria[".mainTableOwnerID"] = "";
$tdatat_tributaria[".moveNext"] = 1;
$tdatat_tributaria[".entityType"] = 0;

$tdatat_tributaria[".strOriginalTableName"] = "t_tributaria";




$tdatat_tributaria[".showAddInPopup"] = false;

$tdatat_tributaria[".showEditInPopup"] = false;

$tdatat_tributaria[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_tributaria[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_tributaria[".fieldsForRegister"] = array();

$tdatat_tributaria[".listAjax"] = false;

	$tdatat_tributaria[".audit"] = false;

	$tdatat_tributaria[".locking"] = false;

$tdatat_tributaria[".edit"] = true;
$tdatat_tributaria[".afterEditAction"] = 1;
$tdatat_tributaria[".closePopupAfterEdit"] = 1;
$tdatat_tributaria[".afterEditActionDetTable"] = "";

$tdatat_tributaria[".add"] = true;
$tdatat_tributaria[".afterAddAction"] = 1;
$tdatat_tributaria[".closePopupAfterAdd"] = 1;
$tdatat_tributaria[".afterAddActionDetTable"] = "";

$tdatat_tributaria[".list"] = true;

$tdatat_tributaria[".inlineEdit"] = true;
$tdatat_tributaria[".inlineAdd"] = true;


$tdatat_tributaria[".exportTo"] = true;



$tdatat_tributaria[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_tributaria[".searchSaving"] = false;
//

$tdatat_tributaria[".showSearchPanel"] = true;
		$tdatat_tributaria[".flexibleSearch"] = true;		

if (isMobile())
	$tdatat_tributaria[".isUseAjaxSuggest"] = false;
else 
	$tdatat_tributaria[".isUseAjaxSuggest"] = true;

$tdatat_tributaria[".rowHighlite"] = true;



$tdatat_tributaria[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_tributaria[".isUseTimeForSearch"] = false;





$tdatat_tributaria[".allSearchFields"] = array();
$tdatat_tributaria[".filterFields"] = array();
$tdatat_tributaria[".requiredSearchFields"] = array();

$tdatat_tributaria[".allSearchFields"][] = "id_func_trib";
	$tdatat_tributaria[".allSearchFields"][] = "gestion";
	$tdatat_tributaria[".allSearchFields"][] = "periodo";
	$tdatat_tributaria[".allSearchFields"][] = "nit";
	$tdatat_tributaria[".allSearchFields"][] = "novedades";
	$tdatat_tributaria[".allSearchFields"][] = "liquido_pagable";
	$tdatat_tributaria[".allSearchFields"][] = "dos_salarios_min";
	$tdatat_tributaria[".allSearchFields"][] = "base_imponible";
	$tdatat_tributaria[".allSearchFields"][] = "impuesto_rc_iva";
	$tdatat_tributaria[".allSearchFields"][] = "dos_salarios_13";
	$tdatat_tributaria[".allSearchFields"][] = "impuesto_neto_rc_iva";
	$tdatat_tributaria[".allSearchFields"][] = "f_110_facturas";
	$tdatat_tributaria[".allSearchFields"][] = "saldo_favor_fisco";
	$tdatat_tributaria[".allSearchFields"][] = "saldo_favor_dependiente";
	$tdatat_tributaria[".allSearchFields"][] = "saldo_favor_dependiente_per_anterior";
	$tdatat_tributaria[".allSearchFields"][] = "mantenimiento_periodo_anterior";
	$tdatat_tributaria[".allSearchFields"][] = "saldo_periodo_anterior_actualizado";
	$tdatat_tributaria[".allSearchFields"][] = "saldo_utilizado";
	$tdatat_tributaria[".allSearchFields"][] = "impuesto_rc_iva_retenido";
	$tdatat_tributaria[".allSearchFields"][] = "saldo_favor_dep_mes_siguiente";
	

$tdatat_tributaria[".googleLikeFields"] = array();
$tdatat_tributaria[".googleLikeFields"][] = "id_func_trib";
$tdatat_tributaria[".googleLikeFields"][] = "gestion";
$tdatat_tributaria[".googleLikeFields"][] = "periodo";
$tdatat_tributaria[".googleLikeFields"][] = "nit";
$tdatat_tributaria[".googleLikeFields"][] = "novedades";
$tdatat_tributaria[".googleLikeFields"][] = "liquido_pagable";
$tdatat_tributaria[".googleLikeFields"][] = "dos_salarios_min";
$tdatat_tributaria[".googleLikeFields"][] = "base_imponible";
$tdatat_tributaria[".googleLikeFields"][] = "impuesto_rc_iva";
$tdatat_tributaria[".googleLikeFields"][] = "dos_salarios_13";
$tdatat_tributaria[".googleLikeFields"][] = "impuesto_neto_rc_iva";
$tdatat_tributaria[".googleLikeFields"][] = "f_110_facturas";
$tdatat_tributaria[".googleLikeFields"][] = "saldo_favor_fisco";
$tdatat_tributaria[".googleLikeFields"][] = "saldo_favor_dependiente";
$tdatat_tributaria[".googleLikeFields"][] = "saldo_favor_dependiente_per_anterior";
$tdatat_tributaria[".googleLikeFields"][] = "mantenimiento_periodo_anterior";
$tdatat_tributaria[".googleLikeFields"][] = "saldo_periodo_anterior_actualizado";
$tdatat_tributaria[".googleLikeFields"][] = "saldo_utilizado";
$tdatat_tributaria[".googleLikeFields"][] = "impuesto_rc_iva_retenido";
$tdatat_tributaria[".googleLikeFields"][] = "saldo_favor_dep_mes_siguiente";


$tdatat_tributaria[".advSearchFields"] = array();
$tdatat_tributaria[".advSearchFields"][] = "id_func_trib";
$tdatat_tributaria[".advSearchFields"][] = "gestion";
$tdatat_tributaria[".advSearchFields"][] = "periodo";
$tdatat_tributaria[".advSearchFields"][] = "nit";
$tdatat_tributaria[".advSearchFields"][] = "novedades";
$tdatat_tributaria[".advSearchFields"][] = "liquido_pagable";
$tdatat_tributaria[".advSearchFields"][] = "dos_salarios_min";
$tdatat_tributaria[".advSearchFields"][] = "base_imponible";
$tdatat_tributaria[".advSearchFields"][] = "impuesto_rc_iva";
$tdatat_tributaria[".advSearchFields"][] = "dos_salarios_13";
$tdatat_tributaria[".advSearchFields"][] = "impuesto_neto_rc_iva";
$tdatat_tributaria[".advSearchFields"][] = "f_110_facturas";
$tdatat_tributaria[".advSearchFields"][] = "saldo_favor_fisco";
$tdatat_tributaria[".advSearchFields"][] = "saldo_favor_dependiente";
$tdatat_tributaria[".advSearchFields"][] = "saldo_favor_dependiente_per_anterior";
$tdatat_tributaria[".advSearchFields"][] = "mantenimiento_periodo_anterior";
$tdatat_tributaria[".advSearchFields"][] = "saldo_periodo_anterior_actualizado";
$tdatat_tributaria[".advSearchFields"][] = "saldo_utilizado";
$tdatat_tributaria[".advSearchFields"][] = "impuesto_rc_iva_retenido";
$tdatat_tributaria[".advSearchFields"][] = "saldo_favor_dep_mes_siguiente";

$tdatat_tributaria[".tableType"] = "list";

$tdatat_tributaria[".printerPageOrientation"] = 0;
$tdatat_tributaria[".nPrinterPageScale"] = 100;

$tdatat_tributaria[".nPrinterSplitRecords"] = 40;

$tdatat_tributaria[".nPrinterPDFSplitRecords"] = 40;



$tdatat_tributaria[".geocodingEnabled"] = false;




	
$tdatat_tributaria[".listGridLayout"] = 2;





// view page pdf

// print page pdf


$tdatat_tributaria[".pageSize"] = 20;

$tdatat_tributaria[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_tributaria[".strOrderBy"] = $tstrOrderBy;

$tdatat_tributaria[".orderindexes"] = array();

$tdatat_tributaria[".sqlHead"] = "SELECT id_func_trib,  	gestion,  	periodo,  	nit,  	novedades,  	liquido_pagable,  	dos_salarios_min,  	base_imponible,  	impuesto_rc_iva,  	dos_salarios_13,  	impuesto_neto_rc_iva,  	f_110_facturas,  	saldo_favor_fisco,  	saldo_favor_dependiente,  	saldo_favor_dependiente_per_anterior,  	mantenimiento_periodo_anterior,  	saldo_periodo_anterior_actualizado,  	saldo_utilizado,  	impuesto_rc_iva_retenido,  	saldo_favor_dep_mes_siguiente";
$tdatat_tributaria[".sqlFrom"] = "FROM t_tributaria";
$tdatat_tributaria[".sqlWhereExpr"] = "";
$tdatat_tributaria[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_tributaria[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_tributaria[".arrGroupsPerPage"] = $arrGPP;

$tdatat_tributaria[".highlightSearchResults"] = true;

$tableKeyst_tributaria = array();
$tableKeyst_tributaria[] = "id_func_trib";
$tdatat_tributaria[".Keys"] = $tableKeyst_tributaria;

$tdatat_tributaria[".listFields"] = array();
$tdatat_tributaria[".listFields"][] = "id_func_trib";
$tdatat_tributaria[".listFields"][] = "gestion";
$tdatat_tributaria[".listFields"][] = "periodo";
$tdatat_tributaria[".listFields"][] = "nit";
$tdatat_tributaria[".listFields"][] = "novedades";
$tdatat_tributaria[".listFields"][] = "liquido_pagable";
$tdatat_tributaria[".listFields"][] = "dos_salarios_min";
$tdatat_tributaria[".listFields"][] = "base_imponible";
$tdatat_tributaria[".listFields"][] = "impuesto_rc_iva";
$tdatat_tributaria[".listFields"][] = "dos_salarios_13";
$tdatat_tributaria[".listFields"][] = "impuesto_neto_rc_iva";
$tdatat_tributaria[".listFields"][] = "f_110_facturas";
$tdatat_tributaria[".listFields"][] = "saldo_favor_fisco";
$tdatat_tributaria[".listFields"][] = "saldo_favor_dependiente";
$tdatat_tributaria[".listFields"][] = "saldo_favor_dependiente_per_anterior";
$tdatat_tributaria[".listFields"][] = "mantenimiento_periodo_anterior";
$tdatat_tributaria[".listFields"][] = "saldo_periodo_anterior_actualizado";
$tdatat_tributaria[".listFields"][] = "saldo_utilizado";
$tdatat_tributaria[".listFields"][] = "impuesto_rc_iva_retenido";
$tdatat_tributaria[".listFields"][] = "saldo_favor_dep_mes_siguiente";

$tdatat_tributaria[".hideMobileList"] = array();


$tdatat_tributaria[".viewFields"] = array();

$tdatat_tributaria[".addFields"] = array();
$tdatat_tributaria[".addFields"][] = "id_func_trib";
$tdatat_tributaria[".addFields"][] = "gestion";
$tdatat_tributaria[".addFields"][] = "periodo";
$tdatat_tributaria[".addFields"][] = "nit";
$tdatat_tributaria[".addFields"][] = "novedades";
$tdatat_tributaria[".addFields"][] = "liquido_pagable";
$tdatat_tributaria[".addFields"][] = "dos_salarios_min";
$tdatat_tributaria[".addFields"][] = "base_imponible";
$tdatat_tributaria[".addFields"][] = "impuesto_rc_iva";
$tdatat_tributaria[".addFields"][] = "dos_salarios_13";
$tdatat_tributaria[".addFields"][] = "impuesto_neto_rc_iva";
$tdatat_tributaria[".addFields"][] = "f_110_facturas";
$tdatat_tributaria[".addFields"][] = "saldo_favor_fisco";
$tdatat_tributaria[".addFields"][] = "saldo_favor_dependiente";
$tdatat_tributaria[".addFields"][] = "saldo_favor_dependiente_per_anterior";
$tdatat_tributaria[".addFields"][] = "mantenimiento_periodo_anterior";
$tdatat_tributaria[".addFields"][] = "saldo_periodo_anterior_actualizado";
$tdatat_tributaria[".addFields"][] = "saldo_utilizado";
$tdatat_tributaria[".addFields"][] = "impuesto_rc_iva_retenido";
$tdatat_tributaria[".addFields"][] = "saldo_favor_dep_mes_siguiente";

$tdatat_tributaria[".masterListFields"] = array();
$tdatat_tributaria[".masterListFields"][] = "id_func_trib";
$tdatat_tributaria[".masterListFields"][] = "gestion";
$tdatat_tributaria[".masterListFields"][] = "periodo";
$tdatat_tributaria[".masterListFields"][] = "nit";
$tdatat_tributaria[".masterListFields"][] = "novedades";
$tdatat_tributaria[".masterListFields"][] = "liquido_pagable";
$tdatat_tributaria[".masterListFields"][] = "dos_salarios_min";
$tdatat_tributaria[".masterListFields"][] = "base_imponible";
$tdatat_tributaria[".masterListFields"][] = "impuesto_rc_iva";
$tdatat_tributaria[".masterListFields"][] = "dos_salarios_13";
$tdatat_tributaria[".masterListFields"][] = "impuesto_neto_rc_iva";
$tdatat_tributaria[".masterListFields"][] = "f_110_facturas";
$tdatat_tributaria[".masterListFields"][] = "saldo_favor_fisco";
$tdatat_tributaria[".masterListFields"][] = "saldo_favor_dependiente";
$tdatat_tributaria[".masterListFields"][] = "saldo_favor_dependiente_per_anterior";
$tdatat_tributaria[".masterListFields"][] = "mantenimiento_periodo_anterior";
$tdatat_tributaria[".masterListFields"][] = "saldo_periodo_anterior_actualizado";
$tdatat_tributaria[".masterListFields"][] = "saldo_utilizado";
$tdatat_tributaria[".masterListFields"][] = "impuesto_rc_iva_retenido";
$tdatat_tributaria[".masterListFields"][] = "saldo_favor_dep_mes_siguiente";

$tdatat_tributaria[".inlineAddFields"] = array();
$tdatat_tributaria[".inlineAddFields"][] = "id_func_trib";
$tdatat_tributaria[".inlineAddFields"][] = "gestion";
$tdatat_tributaria[".inlineAddFields"][] = "periodo";
$tdatat_tributaria[".inlineAddFields"][] = "nit";
$tdatat_tributaria[".inlineAddFields"][] = "novedades";
$tdatat_tributaria[".inlineAddFields"][] = "liquido_pagable";
$tdatat_tributaria[".inlineAddFields"][] = "dos_salarios_min";
$tdatat_tributaria[".inlineAddFields"][] = "base_imponible";
$tdatat_tributaria[".inlineAddFields"][] = "impuesto_rc_iva";
$tdatat_tributaria[".inlineAddFields"][] = "dos_salarios_13";
$tdatat_tributaria[".inlineAddFields"][] = "impuesto_neto_rc_iva";
$tdatat_tributaria[".inlineAddFields"][] = "f_110_facturas";
$tdatat_tributaria[".inlineAddFields"][] = "saldo_favor_fisco";
$tdatat_tributaria[".inlineAddFields"][] = "saldo_favor_dependiente";
$tdatat_tributaria[".inlineAddFields"][] = "saldo_favor_dependiente_per_anterior";
$tdatat_tributaria[".inlineAddFields"][] = "mantenimiento_periodo_anterior";
$tdatat_tributaria[".inlineAddFields"][] = "saldo_periodo_anterior_actualizado";
$tdatat_tributaria[".inlineAddFields"][] = "saldo_utilizado";
$tdatat_tributaria[".inlineAddFields"][] = "impuesto_rc_iva_retenido";
$tdatat_tributaria[".inlineAddFields"][] = "saldo_favor_dep_mes_siguiente";

$tdatat_tributaria[".editFields"] = array();
$tdatat_tributaria[".editFields"][] = "id_func_trib";
$tdatat_tributaria[".editFields"][] = "gestion";
$tdatat_tributaria[".editFields"][] = "periodo";
$tdatat_tributaria[".editFields"][] = "nit";
$tdatat_tributaria[".editFields"][] = "novedades";
$tdatat_tributaria[".editFields"][] = "liquido_pagable";
$tdatat_tributaria[".editFields"][] = "dos_salarios_min";
$tdatat_tributaria[".editFields"][] = "base_imponible";
$tdatat_tributaria[".editFields"][] = "impuesto_rc_iva";
$tdatat_tributaria[".editFields"][] = "dos_salarios_13";
$tdatat_tributaria[".editFields"][] = "impuesto_neto_rc_iva";
$tdatat_tributaria[".editFields"][] = "f_110_facturas";
$tdatat_tributaria[".editFields"][] = "saldo_favor_fisco";
$tdatat_tributaria[".editFields"][] = "saldo_favor_dependiente";
$tdatat_tributaria[".editFields"][] = "saldo_favor_dependiente_per_anterior";
$tdatat_tributaria[".editFields"][] = "mantenimiento_periodo_anterior";
$tdatat_tributaria[".editFields"][] = "saldo_periodo_anterior_actualizado";
$tdatat_tributaria[".editFields"][] = "saldo_utilizado";
$tdatat_tributaria[".editFields"][] = "impuesto_rc_iva_retenido";
$tdatat_tributaria[".editFields"][] = "saldo_favor_dep_mes_siguiente";

$tdatat_tributaria[".inlineEditFields"] = array();
$tdatat_tributaria[".inlineEditFields"][] = "id_func_trib";
$tdatat_tributaria[".inlineEditFields"][] = "gestion";
$tdatat_tributaria[".inlineEditFields"][] = "periodo";
$tdatat_tributaria[".inlineEditFields"][] = "nit";
$tdatat_tributaria[".inlineEditFields"][] = "novedades";
$tdatat_tributaria[".inlineEditFields"][] = "liquido_pagable";
$tdatat_tributaria[".inlineEditFields"][] = "dos_salarios_min";
$tdatat_tributaria[".inlineEditFields"][] = "base_imponible";
$tdatat_tributaria[".inlineEditFields"][] = "impuesto_rc_iva";
$tdatat_tributaria[".inlineEditFields"][] = "dos_salarios_13";
$tdatat_tributaria[".inlineEditFields"][] = "impuesto_neto_rc_iva";
$tdatat_tributaria[".inlineEditFields"][] = "f_110_facturas";
$tdatat_tributaria[".inlineEditFields"][] = "saldo_favor_fisco";
$tdatat_tributaria[".inlineEditFields"][] = "saldo_favor_dependiente";
$tdatat_tributaria[".inlineEditFields"][] = "saldo_favor_dependiente_per_anterior";
$tdatat_tributaria[".inlineEditFields"][] = "mantenimiento_periodo_anterior";
$tdatat_tributaria[".inlineEditFields"][] = "saldo_periodo_anterior_actualizado";
$tdatat_tributaria[".inlineEditFields"][] = "saldo_utilizado";
$tdatat_tributaria[".inlineEditFields"][] = "impuesto_rc_iva_retenido";
$tdatat_tributaria[".inlineEditFields"][] = "saldo_favor_dep_mes_siguiente";

$tdatat_tributaria[".exportFields"] = array();
$tdatat_tributaria[".exportFields"][] = "id_func_trib";
$tdatat_tributaria[".exportFields"][] = "gestion";
$tdatat_tributaria[".exportFields"][] = "periodo";
$tdatat_tributaria[".exportFields"][] = "nit";
$tdatat_tributaria[".exportFields"][] = "novedades";
$tdatat_tributaria[".exportFields"][] = "liquido_pagable";
$tdatat_tributaria[".exportFields"][] = "dos_salarios_min";
$tdatat_tributaria[".exportFields"][] = "base_imponible";
$tdatat_tributaria[".exportFields"][] = "impuesto_rc_iva";
$tdatat_tributaria[".exportFields"][] = "dos_salarios_13";
$tdatat_tributaria[".exportFields"][] = "impuesto_neto_rc_iva";
$tdatat_tributaria[".exportFields"][] = "f_110_facturas";
$tdatat_tributaria[".exportFields"][] = "saldo_favor_fisco";
$tdatat_tributaria[".exportFields"][] = "saldo_favor_dependiente";
$tdatat_tributaria[".exportFields"][] = "saldo_favor_dependiente_per_anterior";
$tdatat_tributaria[".exportFields"][] = "mantenimiento_periodo_anterior";
$tdatat_tributaria[".exportFields"][] = "saldo_periodo_anterior_actualizado";
$tdatat_tributaria[".exportFields"][] = "saldo_utilizado";
$tdatat_tributaria[".exportFields"][] = "impuesto_rc_iva_retenido";
$tdatat_tributaria[".exportFields"][] = "saldo_favor_dep_mes_siguiente";

$tdatat_tributaria[".importFields"] = array();

$tdatat_tributaria[".printFields"] = array();

//	id_func_trib
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_func_trib";
	$fdata["GoodName"] = "id_func_trib";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","id_func_trib"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id_func_trib"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_func_trib";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_tributaria["id_func_trib"] = $fdata;
//	gestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "gestion";
	$fdata["GoodName"] = "gestion";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","gestion"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_tributaria["gestion"] = $fdata;
//	periodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "periodo";
	$fdata["GoodName"] = "periodo";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","periodo"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "periodo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_tributaria["periodo"] = $fdata;
//	nit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nit";
	$fdata["GoodName"] = "nit";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","nit"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdatat_tributaria["nit"] = $fdata;
//	novedades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "novedades";
	$fdata["GoodName"] = "novedades";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","novedades"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "novedades"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "novedades";
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_tributaria["novedades"] = $fdata;
//	liquido_pagable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "liquido_pagable";
	$fdata["GoodName"] = "liquido_pagable";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","liquido_pagable"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdatat_tributaria["liquido_pagable"] = $fdata;
//	dos_salarios_min
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dos_salarios_min";
	$fdata["GoodName"] = "dos_salarios_min";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","dos_salarios_min"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "dos_salarios_min"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dos_salarios_min";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdatat_tributaria["dos_salarios_min"] = $fdata;
//	base_imponible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "base_imponible";
	$fdata["GoodName"] = "base_imponible";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","base_imponible"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "base_imponible"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "base_imponible";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdatat_tributaria["base_imponible"] = $fdata;
//	impuesto_rc_iva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "impuesto_rc_iva";
	$fdata["GoodName"] = "impuesto_rc_iva";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","impuesto_rc_iva"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "impuesto_rc_iva"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "impuesto_rc_iva";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdatat_tributaria["impuesto_rc_iva"] = $fdata;
//	dos_salarios_13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "dos_salarios_13";
	$fdata["GoodName"] = "dos_salarios_13";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","dos_salarios_13"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "dos_salarios_13"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dos_salarios_13";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdatat_tributaria["dos_salarios_13"] = $fdata;
//	impuesto_neto_rc_iva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "impuesto_neto_rc_iva";
	$fdata["GoodName"] = "impuesto_neto_rc_iva";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","impuesto_neto_rc_iva"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "impuesto_neto_rc_iva"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "impuesto_neto_rc_iva";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdatat_tributaria["impuesto_neto_rc_iva"] = $fdata;
//	f_110_facturas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "f_110_facturas";
	$fdata["GoodName"] = "f_110_facturas";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","f_110_facturas"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f_110_facturas"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "f_110_facturas";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 100;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_tributaria["f_110_facturas"] = $fdata;
//	saldo_favor_fisco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "saldo_favor_fisco";
	$fdata["GoodName"] = "saldo_favor_fisco";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","saldo_favor_fisco"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "saldo_favor_fisco"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "saldo_favor_fisco";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdatat_tributaria["saldo_favor_fisco"] = $fdata;
//	saldo_favor_dependiente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "saldo_favor_dependiente";
	$fdata["GoodName"] = "saldo_favor_dependiente";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","saldo_favor_dependiente"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "saldo_favor_dependiente"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "saldo_favor_dependiente";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdatat_tributaria["saldo_favor_dependiente"] = $fdata;
//	saldo_favor_dependiente_per_anterior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "saldo_favor_dependiente_per_anterior";
	$fdata["GoodName"] = "saldo_favor_dependiente_per_anterior";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","saldo_favor_dependiente_per_anterior"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "saldo_favor_dependiente_per_anterior"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "saldo_favor_dependiente_per_anterior";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 100;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_tributaria["saldo_favor_dependiente_per_anterior"] = $fdata;
//	mantenimiento_periodo_anterior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "mantenimiento_periodo_anterior";
	$fdata["GoodName"] = "mantenimiento_periodo_anterior";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","mantenimiento_periodo_anterior"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "mantenimiento_periodo_anterior"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mantenimiento_periodo_anterior";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdatat_tributaria["mantenimiento_periodo_anterior"] = $fdata;
//	saldo_periodo_anterior_actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "saldo_periodo_anterior_actualizado";
	$fdata["GoodName"] = "saldo_periodo_anterior_actualizado";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","saldo_periodo_anterior_actualizado"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "saldo_periodo_anterior_actualizado"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "saldo_periodo_anterior_actualizado";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdatat_tributaria["saldo_periodo_anterior_actualizado"] = $fdata;
//	saldo_utilizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "saldo_utilizado";
	$fdata["GoodName"] = "saldo_utilizado";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","saldo_utilizado"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "saldo_utilizado"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "saldo_utilizado";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdatat_tributaria["saldo_utilizado"] = $fdata;
//	impuesto_rc_iva_retenido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "impuesto_rc_iva_retenido";
	$fdata["GoodName"] = "impuesto_rc_iva_retenido";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","impuesto_rc_iva_retenido"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "impuesto_rc_iva_retenido"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "impuesto_rc_iva_retenido";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdatat_tributaria["impuesto_rc_iva_retenido"] = $fdata;
//	saldo_favor_dep_mes_siguiente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "saldo_favor_dep_mes_siguiente";
	$fdata["GoodName"] = "saldo_favor_dep_mes_siguiente";
	$fdata["ownerTable"] = "t_tributaria";
	$fdata["Label"] = GetFieldLabel("t_tributaria","saldo_favor_dep_mes_siguiente"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "saldo_favor_dep_mes_siguiente"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "saldo_favor_dep_mes_siguiente";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 100;
	
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

	

	
	$tdatat_tributaria["saldo_favor_dep_mes_siguiente"] = $fdata;

	
$tables_data["t_tributaria"]=&$tdatat_tributaria;
$field_labels["t_tributaria"] = &$fieldLabelst_tributaria;
$fieldToolTips["t_tributaria"] = &$fieldToolTipst_tributaria;
$page_titles["t_tributaria"] = &$pageTitlest_tributaria;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_tributaria"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_tributaria"] = array();


	
				$strOriginalDetailsTable="funcionario";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="funcionario";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "funcionario";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["t_tributaria"][0] = $masterParams;	
				$masterTablesData["t_tributaria"][0]["masterKeys"] = array();
	$masterTablesData["t_tributaria"][0]["masterKeys"][]="id_func";
				$masterTablesData["t_tributaria"][0]["detailKeys"] = array();
	$masterTablesData["t_tributaria"][0]["detailKeys"][]="id_func_trib";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_tributaria()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_func_trib,  	gestion,  	periodo,  	nit,  	novedades,  	liquido_pagable,  	dos_salarios_min,  	base_imponible,  	impuesto_rc_iva,  	dos_salarios_13,  	impuesto_neto_rc_iva,  	f_110_facturas,  	saldo_favor_fisco,  	saldo_favor_dependiente,  	saldo_favor_dependiente_per_anterior,  	mantenimiento_periodo_anterior,  	saldo_periodo_anterior_actualizado,  	saldo_utilizado,  	impuesto_rc_iva_retenido,  	saldo_favor_dep_mes_siguiente";
$proto0["m_strFrom"] = "FROM t_tributaria";
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
	"m_srcTableName" => "t_tributaria"
));

$proto5["m_sql"] = "id_func_trib";
$proto5["m_srcTableName"] = "t_tributaria";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "gestion",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "t_tributaria"
));

$proto7["m_sql"] = "gestion";
$proto7["m_srcTableName"] = "t_tributaria";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "t_tributaria"
));

$proto9["m_sql"] = "periodo";
$proto9["m_srcTableName"] = "t_tributaria";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nit",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "t_tributaria"
));

$proto11["m_sql"] = "nit";
$proto11["m_srcTableName"] = "t_tributaria";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "novedades",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "t_tributaria"
));

$proto13["m_sql"] = "novedades";
$proto13["m_srcTableName"] = "t_tributaria";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "liquido_pagable",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "t_tributaria"
));

$proto15["m_sql"] = "liquido_pagable";
$proto15["m_srcTableName"] = "t_tributaria";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "dos_salarios_min",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "t_tributaria"
));

$proto17["m_sql"] = "dos_salarios_min";
$proto17["m_srcTableName"] = "t_tributaria";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "base_imponible",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "t_tributaria"
));

$proto19["m_sql"] = "base_imponible";
$proto19["m_srcTableName"] = "t_tributaria";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "impuesto_rc_iva",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "t_tributaria"
));

$proto21["m_sql"] = "impuesto_rc_iva";
$proto21["m_srcTableName"] = "t_tributaria";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "dos_salarios_13",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "t_tributaria"
));

$proto23["m_sql"] = "dos_salarios_13";
$proto23["m_srcTableName"] = "t_tributaria";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "impuesto_neto_rc_iva",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "t_tributaria"
));

$proto25["m_sql"] = "impuesto_neto_rc_iva";
$proto25["m_srcTableName"] = "t_tributaria";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "f_110_facturas",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "t_tributaria"
));

$proto27["m_sql"] = "f_110_facturas";
$proto27["m_srcTableName"] = "t_tributaria";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "saldo_favor_fisco",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "t_tributaria"
));

$proto29["m_sql"] = "saldo_favor_fisco";
$proto29["m_srcTableName"] = "t_tributaria";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "saldo_favor_dependiente",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "t_tributaria"
));

$proto31["m_sql"] = "saldo_favor_dependiente";
$proto31["m_srcTableName"] = "t_tributaria";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "saldo_favor_dependiente_per_anterior",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "t_tributaria"
));

$proto33["m_sql"] = "saldo_favor_dependiente_per_anterior";
$proto33["m_srcTableName"] = "t_tributaria";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "mantenimiento_periodo_anterior",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "t_tributaria"
));

$proto35["m_sql"] = "mantenimiento_periodo_anterior";
$proto35["m_srcTableName"] = "t_tributaria";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "saldo_periodo_anterior_actualizado",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "t_tributaria"
));

$proto37["m_sql"] = "saldo_periodo_anterior_actualizado";
$proto37["m_srcTableName"] = "t_tributaria";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "saldo_utilizado",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "t_tributaria"
));

$proto39["m_sql"] = "saldo_utilizado";
$proto39["m_srcTableName"] = "t_tributaria";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "impuesto_rc_iva_retenido",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "t_tributaria"
));

$proto41["m_sql"] = "impuesto_rc_iva_retenido";
$proto41["m_srcTableName"] = "t_tributaria";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "saldo_favor_dep_mes_siguiente",
	"m_strTable" => "t_tributaria",
	"m_srcTableName" => "t_tributaria"
));

$proto43["m_sql"] = "saldo_favor_dep_mes_siguiente";
$proto43["m_srcTableName"] = "t_tributaria";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto45=array();
$proto45["m_link"] = "SQLL_MAIN";
			$proto46=array();
$proto46["m_strName"] = "t_tributaria";
$proto46["m_srcTableName"] = "t_tributaria";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "id_func_trib";
$proto46["m_columns"][] = "gestion";
$proto46["m_columns"][] = "periodo";
$proto46["m_columns"][] = "nit";
$proto46["m_columns"][] = "novedades";
$proto46["m_columns"][] = "liquido_pagable";
$proto46["m_columns"][] = "dos_salarios_min";
$proto46["m_columns"][] = "base_imponible";
$proto46["m_columns"][] = "impuesto_rc_iva";
$proto46["m_columns"][] = "dos_salarios_13";
$proto46["m_columns"][] = "impuesto_neto_rc_iva";
$proto46["m_columns"][] = "f_110_facturas";
$proto46["m_columns"][] = "saldo_favor_fisco";
$proto46["m_columns"][] = "saldo_favor_dependiente";
$proto46["m_columns"][] = "saldo_favor_dependiente_per_anterior";
$proto46["m_columns"][] = "mantenimiento_periodo_anterior";
$proto46["m_columns"][] = "saldo_periodo_anterior_actualizado";
$proto46["m_columns"][] = "saldo_utilizado";
$proto46["m_columns"][] = "impuesto_rc_iva_retenido";
$proto46["m_columns"][] = "saldo_favor_dep_mes_siguiente";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "t_tributaria";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "t_tributaria";
$proto47=array();
$proto47["m_sql"] = "";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_tributaria";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_tributaria = createSqlQuery_t_tributaria();


	
																				
	
$tdatat_tributaria[".sqlquery"] = $queryData_t_tributaria;

include_once(getabspath("include/t_tributaria_events.php"));
$tableEvents["t_tributaria"] = new eventclass_t_tributaria;
$tdatat_tributaria[".hasEvents"] = true;

?>