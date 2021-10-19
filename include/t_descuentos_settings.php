<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_descuentos = array();	
	$tdatat_descuentos[".truncateText"] = true;
	$tdatat_descuentos[".NumberOfChars"] = 80; 
	$tdatat_descuentos[".ShortName"] = "t_descuentos";
	$tdatat_descuentos[".OwnerID"] = "";
	$tdatat_descuentos[".OriginalTable"] = "t_descuentos";

//	field labels
$fieldLabelst_descuentos = array();
$fieldToolTipst_descuentos = array();
$pageTitlest_descuentos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_descuentos["Spanish"] = array();
	$fieldToolTipst_descuentos["Spanish"] = array();
	$pageTitlest_descuentos["Spanish"] = array();
	$fieldLabelst_descuentos["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipst_descuentos["Spanish"]["id_func"] = "";
	$fieldLabelst_descuentos["Spanish"]["afp_10"] = "Afp Cot.Mensual 10% :";
	$fieldToolTipst_descuentos["Spanish"]["afp_10"] = "";
	$fieldLabelst_descuentos["Spanish"]["afp_riesgo_1_71"] = "Afp Prima Riesgo comun 1.71% :";
	$fieldToolTipst_descuentos["Spanish"]["afp_riesgo_1_71"] = "";
	$fieldLabelst_descuentos["Spanish"]["afp_05"] = "Afp Comision 0.5% :";
	$fieldToolTipst_descuentos["Spanish"]["afp_05"] = "";
	$fieldLabelst_descuentos["Spanish"]["rc_iva"] = "RC IVA :";
	$fieldToolTipst_descuentos["Spanish"]["rc_iva"] = "";
	$fieldLabelst_descuentos["Spanish"]["retenciones"] = "Retenciones :";
	$fieldToolTipst_descuentos["Spanish"]["retenciones"] = "";
	$fieldLabelst_descuentos["Spanish"]["multa"] = "Multa :";
	$fieldToolTipst_descuentos["Spanish"]["multa"] = "";
	$fieldLabelst_descuentos["Spanish"]["total_desc"] = "Total Descuentos :";
	$fieldToolTipst_descuentos["Spanish"]["total_desc"] = "";
	$fieldLabelst_descuentos["Spanish"]["mes"] = "Mes :";
	$fieldToolTipst_descuentos["Spanish"]["mes"] = "";
	$fieldLabelst_descuentos["Spanish"]["gestion"] = "Gestión";
	$fieldToolTipst_descuentos["Spanish"]["gestion"] = "";
	$fieldLabelst_descuentos["Spanish"]["liquido_pagable"] = "Liquido Pagable :";
	$fieldToolTipst_descuentos["Spanish"]["liquido_pagable"] = "";
	$fieldLabelst_descuentos["Spanish"]["name"] = "Nombre :";
	$fieldToolTipst_descuentos["Spanish"]["name"] = "";
	$fieldLabelst_descuentos["Spanish"]["l_name1"] = "Ap. Paterno :";
	$fieldToolTipst_descuentos["Spanish"]["l_name1"] = "";
	$fieldLabelst_descuentos["Spanish"]["l_name2"] = "Ap. Materno :";
	$fieldToolTipst_descuentos["Spanish"]["l_name2"] = "";
	$fieldLabelst_descuentos["Spanish"]["afp_ap_sol_0_5"] = "Afp Ap. Sol 0.5% :";
	$fieldToolTipst_descuentos["Spanish"]["afp_ap_sol_0_5"] = "";
	$fieldLabelst_descuentos["Spanish"]["ans_1"] = "ANS 1% :";
	$fieldToolTipst_descuentos["Spanish"]["ans_1"] = "";
	$fieldLabelst_descuentos["Spanish"]["seguro_pat_10"] = "Seguro Patronal 10% :";
	$fieldToolTipst_descuentos["Spanish"]["seguro_pat_10"] = "";
	$fieldLabelst_descuentos["Spanish"]["riesgo_pat_171"] = "Riesgo Patronal 1.71% :";
	$fieldToolTipst_descuentos["Spanish"]["riesgo_pat_171"] = "";
	$fieldLabelst_descuentos["Spanish"]["pro_vivienda_pat_2"] = "Pro.Vivienda Patronal 2% :";
	$fieldToolTipst_descuentos["Spanish"]["pro_vivienda_pat_2"] = "";
	$fieldLabelst_descuentos["Spanish"]["ap_pat_sol_3"] = "Ap. Patronal Solidario 3% :";
	$fieldToolTipst_descuentos["Spanish"]["ap_pat_sol_3"] = "";
	$fieldLabelst_descuentos["Spanish"]["sub_total"] = "Sub Total :";
	$fieldToolTipst_descuentos["Spanish"]["sub_total"] = "";
	if (count($fieldToolTipst_descuentos["Spanish"]))
		$tdatat_descuentos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_descuentos[""] = array();
	$fieldToolTipst_descuentos[""] = array();
	$pageTitlest_descuentos[""] = array();
	$fieldLabelst_descuentos[""]["afp_ap_sol_0_5"] = "Afp Ap Sol 0 5";
	$fieldToolTipst_descuentos[""]["afp_ap_sol_0_5"] = "";
	$fieldLabelst_descuentos[""]["ans_1"] = "Ans 1";
	$fieldToolTipst_descuentos[""]["ans_1"] = "";
	$fieldLabelst_descuentos[""]["seguro_pat_10"] = "Seguro Pat 10";
	$fieldToolTipst_descuentos[""]["seguro_pat_10"] = "";
	$fieldLabelst_descuentos[""]["riesgo_pat_171"] = "Riesgo Pat 171";
	$fieldToolTipst_descuentos[""]["riesgo_pat_171"] = "";
	$fieldLabelst_descuentos[""]["pro_vivienda_pat_2"] = "Pro Vivienda Pat 2";
	$fieldToolTipst_descuentos[""]["pro_vivienda_pat_2"] = "";
	$fieldLabelst_descuentos[""]["ap_pat_sol_3"] = "Ap Pat Sol 3";
	$fieldToolTipst_descuentos[""]["ap_pat_sol_3"] = "";
	$fieldLabelst_descuentos[""]["sub_total"] = "Sub Total";
	$fieldToolTipst_descuentos[""]["sub_total"] = "";
	$fieldLabelst_descuentos[""]["id_func"] = "Id Func";
	$fieldToolTipst_descuentos[""]["id_func"] = "";
	if (count($fieldToolTipst_descuentos[""]))
		$tdatat_descuentos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_descuentos["English"] = array();
	$fieldToolTipst_descuentos["English"] = array();
	$pageTitlest_descuentos["English"] = array();
	if (count($fieldToolTipst_descuentos["English"]))
		$tdatat_descuentos[".isUseToolTips"] = true;
}
	
	
	$tdatat_descuentos[".NCSearch"] = true;



$tdatat_descuentos[".shortTableName"] = "t_descuentos";
$tdatat_descuentos[".nSecOptions"] = 0;
$tdatat_descuentos[".recsPerRowPrint"] = 1;
$tdatat_descuentos[".mainTableOwnerID"] = "";
$tdatat_descuentos[".moveNext"] = 1;
$tdatat_descuentos[".entityType"] = 0;

$tdatat_descuentos[".strOriginalTableName"] = "t_descuentos";




$tdatat_descuentos[".showAddInPopup"] = false;

$tdatat_descuentos[".showEditInPopup"] = false;

$tdatat_descuentos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_descuentos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_descuentos[".fieldsForRegister"] = array();

$tdatat_descuentos[".listAjax"] = false;

	$tdatat_descuentos[".audit"] = false;

	$tdatat_descuentos[".locking"] = false;

$tdatat_descuentos[".edit"] = true;
$tdatat_descuentos[".afterEditAction"] = 1;
$tdatat_descuentos[".closePopupAfterEdit"] = 1;
$tdatat_descuentos[".afterEditActionDetTable"] = "";

$tdatat_descuentos[".add"] = true;
$tdatat_descuentos[".afterAddAction"] = 1;
$tdatat_descuentos[".closePopupAfterAdd"] = 1;
$tdatat_descuentos[".afterAddActionDetTable"] = "";

$tdatat_descuentos[".list"] = true;

$tdatat_descuentos[".inlineEdit"] = true;
$tdatat_descuentos[".inlineAdd"] = true;





$tdatat_descuentos[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_descuentos[".searchSaving"] = false;
//

$tdatat_descuentos[".showSearchPanel"] = true;
		$tdatat_descuentos[".flexibleSearch"] = true;		

if (isMobile())
	$tdatat_descuentos[".isUseAjaxSuggest"] = false;
else 
	$tdatat_descuentos[".isUseAjaxSuggest"] = true;

$tdatat_descuentos[".rowHighlite"] = true;



$tdatat_descuentos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_descuentos[".isUseTimeForSearch"] = false;





$tdatat_descuentos[".allSearchFields"] = array();
$tdatat_descuentos[".filterFields"] = array();
$tdatat_descuentos[".requiredSearchFields"] = array();

$tdatat_descuentos[".allSearchFields"][] = "id_func";
	$tdatat_descuentos[".allSearchFields"][] = "name";
	$tdatat_descuentos[".allSearchFields"][] = "l_name1";
	$tdatat_descuentos[".allSearchFields"][] = "l_name2";
	$tdatat_descuentos[".allSearchFields"][] = "afp_10";
	$tdatat_descuentos[".allSearchFields"][] = "afp_riesgo_1_71";
	$tdatat_descuentos[".allSearchFields"][] = "afp_05";
	$tdatat_descuentos[".allSearchFields"][] = "rc_iva";
	$tdatat_descuentos[".allSearchFields"][] = "retenciones";
	$tdatat_descuentos[".allSearchFields"][] = "multa";
	$tdatat_descuentos[".allSearchFields"][] = "total_desc";
	$tdatat_descuentos[".allSearchFields"][] = "liquido_pagable";
	$tdatat_descuentos[".allSearchFields"][] = "afp_ap_sol_0_5";
	$tdatat_descuentos[".allSearchFields"][] = "ans_1";
	$tdatat_descuentos[".allSearchFields"][] = "seguro_pat_10";
	$tdatat_descuentos[".allSearchFields"][] = "riesgo_pat_171";
	$tdatat_descuentos[".allSearchFields"][] = "pro_vivienda_pat_2";
	$tdatat_descuentos[".allSearchFields"][] = "ap_pat_sol_3";
	$tdatat_descuentos[".allSearchFields"][] = "sub_total";
	

$tdatat_descuentos[".googleLikeFields"] = array();
$tdatat_descuentos[".googleLikeFields"][] = "id_func";
$tdatat_descuentos[".googleLikeFields"][] = "afp_10";
$tdatat_descuentos[".googleLikeFields"][] = "afp_riesgo_1_71";
$tdatat_descuentos[".googleLikeFields"][] = "afp_05";
$tdatat_descuentos[".googleLikeFields"][] = "afp_ap_sol_0_5";
$tdatat_descuentos[".googleLikeFields"][] = "ans_1";
$tdatat_descuentos[".googleLikeFields"][] = "rc_iva";
$tdatat_descuentos[".googleLikeFields"][] = "retenciones";
$tdatat_descuentos[".googleLikeFields"][] = "multa";
$tdatat_descuentos[".googleLikeFields"][] = "total_desc";
$tdatat_descuentos[".googleLikeFields"][] = "mes";
$tdatat_descuentos[".googleLikeFields"][] = "gestion";
$tdatat_descuentos[".googleLikeFields"][] = "liquido_pagable";
$tdatat_descuentos[".googleLikeFields"][] = "name";
$tdatat_descuentos[".googleLikeFields"][] = "l_name1";
$tdatat_descuentos[".googleLikeFields"][] = "l_name2";
$tdatat_descuentos[".googleLikeFields"][] = "seguro_pat_10";
$tdatat_descuentos[".googleLikeFields"][] = "riesgo_pat_171";
$tdatat_descuentos[".googleLikeFields"][] = "pro_vivienda_pat_2";
$tdatat_descuentos[".googleLikeFields"][] = "ap_pat_sol_3";
$tdatat_descuentos[".googleLikeFields"][] = "sub_total";


$tdatat_descuentos[".advSearchFields"] = array();
$tdatat_descuentos[".advSearchFields"][] = "id_func";
$tdatat_descuentos[".advSearchFields"][] = "name";
$tdatat_descuentos[".advSearchFields"][] = "l_name1";
$tdatat_descuentos[".advSearchFields"][] = "l_name2";
$tdatat_descuentos[".advSearchFields"][] = "afp_10";
$tdatat_descuentos[".advSearchFields"][] = "afp_riesgo_1_71";
$tdatat_descuentos[".advSearchFields"][] = "afp_05";
$tdatat_descuentos[".advSearchFields"][] = "rc_iva";
$tdatat_descuentos[".advSearchFields"][] = "retenciones";
$tdatat_descuentos[".advSearchFields"][] = "multa";
$tdatat_descuentos[".advSearchFields"][] = "total_desc";
$tdatat_descuentos[".advSearchFields"][] = "liquido_pagable";
$tdatat_descuentos[".advSearchFields"][] = "afp_ap_sol_0_5";
$tdatat_descuentos[".advSearchFields"][] = "ans_1";
$tdatat_descuentos[".advSearchFields"][] = "seguro_pat_10";
$tdatat_descuentos[".advSearchFields"][] = "riesgo_pat_171";
$tdatat_descuentos[".advSearchFields"][] = "pro_vivienda_pat_2";
$tdatat_descuentos[".advSearchFields"][] = "ap_pat_sol_3";
$tdatat_descuentos[".advSearchFields"][] = "sub_total";

$tdatat_descuentos[".tableType"] = "list";

$tdatat_descuentos[".printerPageOrientation"] = 0;
$tdatat_descuentos[".nPrinterPageScale"] = 100;

$tdatat_descuentos[".nPrinterSplitRecords"] = 40;

$tdatat_descuentos[".nPrinterPDFSplitRecords"] = 40;



$tdatat_descuentos[".geocodingEnabled"] = false;




	
$tdatat_descuentos[".listGridLayout"] = 2;





// view page pdf
$tdatat_descuentos[".isViewPagePDF"] = true;
$tdatat_descuentos[".isLandscapeViewPDFOrientation"] = 1;
$tdatat_descuentos[".nViewPagePDFScale"] = 100;

// print page pdf


$tdatat_descuentos[".pageSize"] = 20;

$tdatat_descuentos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_descuentos[".strOrderBy"] = $tstrOrderBy;

$tdatat_descuentos[".orderindexes"] = array();

$tdatat_descuentos[".sqlHead"] = "SELECT t_descuentos.id_func,  t_descuentos.afp_10,  t_descuentos.afp_riesgo_1_71,  t_descuentos.afp_05,  t_descuentos.afp_ap_sol_0_5,  t_descuentos.ans_1,  t_descuentos.rc_iva,  t_descuentos.retenciones,  t_descuentos.multa,  t_descuentos.total_desc,  t_descuentos.mes,  t_descuentos.gestion,  t_descuentos.liquido_pagable,  funcionario.name,  funcionario.l_name1,  funcionario.l_name2,  t_descuentos.seguro_pat_10,  t_descuentos.riesgo_pat_171,  t_descuentos.pro_vivienda_pat_2,  t_descuentos.ap_pat_sol_3,  t_descuentos.sub_total";
$tdatat_descuentos[".sqlFrom"] = "FROM t_descuentos  INNER JOIN funcionario ON t_descuentos.id_func = funcionario.id_func";
$tdatat_descuentos[".sqlWhereExpr"] = "";
$tdatat_descuentos[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_descuentos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_descuentos[".arrGroupsPerPage"] = $arrGPP;

$tdatat_descuentos[".highlightSearchResults"] = true;

$tableKeyst_descuentos = array();
$tableKeyst_descuentos[] = "id_func";
$tdatat_descuentos[".Keys"] = $tableKeyst_descuentos;

$tdatat_descuentos[".listFields"] = array();
$tdatat_descuentos[".listFields"][] = "id_func";
$tdatat_descuentos[".listFields"][] = "name";
$tdatat_descuentos[".listFields"][] = "l_name1";
$tdatat_descuentos[".listFields"][] = "l_name2";
$tdatat_descuentos[".listFields"][] = "afp_10";
$tdatat_descuentos[".listFields"][] = "afp_riesgo_1_71";
$tdatat_descuentos[".listFields"][] = "afp_05";
$tdatat_descuentos[".listFields"][] = "rc_iva";
$tdatat_descuentos[".listFields"][] = "retenciones";
$tdatat_descuentos[".listFields"][] = "multa";
$tdatat_descuentos[".listFields"][] = "total_desc";
$tdatat_descuentos[".listFields"][] = "liquido_pagable";
$tdatat_descuentos[".listFields"][] = "afp_ap_sol_0_5";
$tdatat_descuentos[".listFields"][] = "ans_1";
$tdatat_descuentos[".listFields"][] = "seguro_pat_10";
$tdatat_descuentos[".listFields"][] = "riesgo_pat_171";
$tdatat_descuentos[".listFields"][] = "pro_vivienda_pat_2";
$tdatat_descuentos[".listFields"][] = "ap_pat_sol_3";
$tdatat_descuentos[".listFields"][] = "sub_total";

$tdatat_descuentos[".hideMobileList"] = array();


$tdatat_descuentos[".viewFields"] = array();

$tdatat_descuentos[".addFields"] = array();
$tdatat_descuentos[".addFields"][] = "id_func";
$tdatat_descuentos[".addFields"][] = "afp_10";
$tdatat_descuentos[".addFields"][] = "afp_riesgo_1_71";
$tdatat_descuentos[".addFields"][] = "afp_05";
$tdatat_descuentos[".addFields"][] = "rc_iva";
$tdatat_descuentos[".addFields"][] = "retenciones";
$tdatat_descuentos[".addFields"][] = "multa";
$tdatat_descuentos[".addFields"][] = "total_desc";
$tdatat_descuentos[".addFields"][] = "liquido_pagable";
$tdatat_descuentos[".addFields"][] = "afp_ap_sol_0_5";
$tdatat_descuentos[".addFields"][] = "ans_1";
$tdatat_descuentos[".addFields"][] = "seguro_pat_10";
$tdatat_descuentos[".addFields"][] = "riesgo_pat_171";
$tdatat_descuentos[".addFields"][] = "pro_vivienda_pat_2";
$tdatat_descuentos[".addFields"][] = "ap_pat_sol_3";
$tdatat_descuentos[".addFields"][] = "sub_total";

$tdatat_descuentos[".masterListFields"] = array();
$tdatat_descuentos[".masterListFields"][] = "id_func";
$tdatat_descuentos[".masterListFields"][] = "name";
$tdatat_descuentos[".masterListFields"][] = "l_name1";
$tdatat_descuentos[".masterListFields"][] = "l_name2";
$tdatat_descuentos[".masterListFields"][] = "afp_10";
$tdatat_descuentos[".masterListFields"][] = "afp_riesgo_1_71";
$tdatat_descuentos[".masterListFields"][] = "afp_05";
$tdatat_descuentos[".masterListFields"][] = "rc_iva";
$tdatat_descuentos[".masterListFields"][] = "retenciones";
$tdatat_descuentos[".masterListFields"][] = "multa";
$tdatat_descuentos[".masterListFields"][] = "total_desc";
$tdatat_descuentos[".masterListFields"][] = "mes";
$tdatat_descuentos[".masterListFields"][] = "liquido_pagable";
$tdatat_descuentos[".masterListFields"][] = "afp_ap_sol_0_5";
$tdatat_descuentos[".masterListFields"][] = "gestion";
$tdatat_descuentos[".masterListFields"][] = "ans_1";
$tdatat_descuentos[".masterListFields"][] = "seguro_pat_10";
$tdatat_descuentos[".masterListFields"][] = "riesgo_pat_171";
$tdatat_descuentos[".masterListFields"][] = "pro_vivienda_pat_2";
$tdatat_descuentos[".masterListFields"][] = "ap_pat_sol_3";
$tdatat_descuentos[".masterListFields"][] = "sub_total";

$tdatat_descuentos[".inlineAddFields"] = array();
$tdatat_descuentos[".inlineAddFields"][] = "id_func";
$tdatat_descuentos[".inlineAddFields"][] = "afp_10";
$tdatat_descuentos[".inlineAddFields"][] = "afp_riesgo_1_71";
$tdatat_descuentos[".inlineAddFields"][] = "afp_05";
$tdatat_descuentos[".inlineAddFields"][] = "rc_iva";
$tdatat_descuentos[".inlineAddFields"][] = "retenciones";
$tdatat_descuentos[".inlineAddFields"][] = "multa";
$tdatat_descuentos[".inlineAddFields"][] = "total_desc";
$tdatat_descuentos[".inlineAddFields"][] = "liquido_pagable";
$tdatat_descuentos[".inlineAddFields"][] = "afp_ap_sol_0_5";
$tdatat_descuentos[".inlineAddFields"][] = "ans_1";
$tdatat_descuentos[".inlineAddFields"][] = "seguro_pat_10";
$tdatat_descuentos[".inlineAddFields"][] = "riesgo_pat_171";
$tdatat_descuentos[".inlineAddFields"][] = "pro_vivienda_pat_2";
$tdatat_descuentos[".inlineAddFields"][] = "ap_pat_sol_3";
$tdatat_descuentos[".inlineAddFields"][] = "sub_total";

$tdatat_descuentos[".editFields"] = array();
$tdatat_descuentos[".editFields"][] = "id_func";
$tdatat_descuentos[".editFields"][] = "afp_10";
$tdatat_descuentos[".editFields"][] = "afp_riesgo_1_71";
$tdatat_descuentos[".editFields"][] = "afp_05";
$tdatat_descuentos[".editFields"][] = "rc_iva";
$tdatat_descuentos[".editFields"][] = "retenciones";
$tdatat_descuentos[".editFields"][] = "multa";
$tdatat_descuentos[".editFields"][] = "total_desc";
$tdatat_descuentos[".editFields"][] = "liquido_pagable";
$tdatat_descuentos[".editFields"][] = "afp_ap_sol_0_5";
$tdatat_descuentos[".editFields"][] = "ans_1";
$tdatat_descuentos[".editFields"][] = "seguro_pat_10";
$tdatat_descuentos[".editFields"][] = "riesgo_pat_171";
$tdatat_descuentos[".editFields"][] = "pro_vivienda_pat_2";
$tdatat_descuentos[".editFields"][] = "ap_pat_sol_3";
$tdatat_descuentos[".editFields"][] = "sub_total";

$tdatat_descuentos[".inlineEditFields"] = array();
$tdatat_descuentos[".inlineEditFields"][] = "id_func";
$tdatat_descuentos[".inlineEditFields"][] = "afp_10";
$tdatat_descuentos[".inlineEditFields"][] = "afp_riesgo_1_71";
$tdatat_descuentos[".inlineEditFields"][] = "afp_05";
$tdatat_descuentos[".inlineEditFields"][] = "rc_iva";
$tdatat_descuentos[".inlineEditFields"][] = "retenciones";
$tdatat_descuentos[".inlineEditFields"][] = "multa";
$tdatat_descuentos[".inlineEditFields"][] = "total_desc";
$tdatat_descuentos[".inlineEditFields"][] = "liquido_pagable";
$tdatat_descuentos[".inlineEditFields"][] = "afp_ap_sol_0_5";
$tdatat_descuentos[".inlineEditFields"][] = "ans_1";
$tdatat_descuentos[".inlineEditFields"][] = "seguro_pat_10";
$tdatat_descuentos[".inlineEditFields"][] = "riesgo_pat_171";
$tdatat_descuentos[".inlineEditFields"][] = "pro_vivienda_pat_2";
$tdatat_descuentos[".inlineEditFields"][] = "ap_pat_sol_3";
$tdatat_descuentos[".inlineEditFields"][] = "sub_total";

$tdatat_descuentos[".exportFields"] = array();

$tdatat_descuentos[".importFields"] = array();

$tdatat_descuentos[".printFields"] = array();

//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("t_descuentos","id_func"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id_func"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_descuentos.id_func";
	
		
		
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

	

	
	$tdatat_descuentos["id_func"] = $fdata;
//	afp_10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "afp_10";
	$fdata["GoodName"] = "afp_10";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("t_descuentos","afp_10"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "afp_10"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_descuentos.afp_10";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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

	

	
	$tdatat_descuentos["afp_10"] = $fdata;
//	afp_riesgo_1_71
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "afp_riesgo_1_71";
	$fdata["GoodName"] = "afp_riesgo_1_71";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("t_descuentos","afp_riesgo_1_71"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "afp_riesgo_1_71"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_descuentos.afp_riesgo_1_71";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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

	

	
	$tdatat_descuentos["afp_riesgo_1_71"] = $fdata;
//	afp_05
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "afp_05";
	$fdata["GoodName"] = "afp_05";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("t_descuentos","afp_05"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "afp_05"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_descuentos.afp_05";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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

	

	
	$tdatat_descuentos["afp_05"] = $fdata;
//	afp_ap_sol_0_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "afp_ap_sol_0_5";
	$fdata["GoodName"] = "afp_ap_sol_0_5";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("t_descuentos","afp_ap_sol_0_5"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "afp_ap_sol_0_5"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_descuentos.afp_ap_sol_0_5";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_descuentos["afp_ap_sol_0_5"] = $fdata;
//	ans_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ans_1";
	$fdata["GoodName"] = "ans_1";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("t_descuentos","ans_1"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ans_1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_descuentos.ans_1";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_descuentos["ans_1"] = $fdata;
//	rc_iva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "rc_iva";
	$fdata["GoodName"] = "rc_iva";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("t_descuentos","rc_iva"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "rc_iva"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_descuentos.rc_iva";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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

	

	
	$tdatat_descuentos["rc_iva"] = $fdata;
//	retenciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "retenciones";
	$fdata["GoodName"] = "retenciones";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("t_descuentos","retenciones"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "retenciones"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_descuentos.retenciones";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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

	

	
	$tdatat_descuentos["retenciones"] = $fdata;
//	multa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "multa";
	$fdata["GoodName"] = "multa";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("t_descuentos","multa"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "multa"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_descuentos.multa";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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

	

	
	$tdatat_descuentos["multa"] = $fdata;
//	total_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "total_desc";
	$fdata["GoodName"] = "total_desc";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("t_descuentos","total_desc"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "total_desc"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_descuentos.total_desc";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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

	

	
	$tdatat_descuentos["total_desc"] = $fdata;
//	mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "mes";
	$fdata["GoodName"] = "mes";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("t_descuentos","mes"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "mes"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_descuentos.mes";
	
		
		
				
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
			
		$edata["controlWidth"] = 40;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatat_descuentos["mes"] = $fdata;
//	gestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "gestion";
	$fdata["GoodName"] = "gestion";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("t_descuentos","gestion"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "gestion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_descuentos.gestion";
	
		
		
				
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
			
		$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatat_descuentos["gestion"] = $fdata;
//	liquido_pagable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "liquido_pagable";
	$fdata["GoodName"] = "liquido_pagable";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("t_descuentos","liquido_pagable"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "liquido_pagable"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_descuentos.liquido_pagable";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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

	

	
	$tdatat_descuentos["liquido_pagable"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("t_descuentos","name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "funcionario.name";
	
		
		
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

	

	
	$tdatat_descuentos["name"] = $fdata;
//	l_name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "l_name1";
	$fdata["GoodName"] = "l_name1";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("t_descuentos","l_name1"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "l_name1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "funcionario.l_name1";
	
		
		
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

	

	
	$tdatat_descuentos["l_name1"] = $fdata;
//	l_name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "l_name2";
	$fdata["GoodName"] = "l_name2";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("t_descuentos","l_name2"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "l_name2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "funcionario.l_name2";
	
		
		
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

	

	
	$tdatat_descuentos["l_name2"] = $fdata;
//	seguro_pat_10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "seguro_pat_10";
	$fdata["GoodName"] = "seguro_pat_10";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("t_descuentos","seguro_pat_10"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "seguro_pat_10"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_descuentos.seguro_pat_10";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_descuentos["seguro_pat_10"] = $fdata;
//	riesgo_pat_171
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "riesgo_pat_171";
	$fdata["GoodName"] = "riesgo_pat_171";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("t_descuentos","riesgo_pat_171"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "riesgo_pat_171"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_descuentos.riesgo_pat_171";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_descuentos["riesgo_pat_171"] = $fdata;
//	pro_vivienda_pat_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "pro_vivienda_pat_2";
	$fdata["GoodName"] = "pro_vivienda_pat_2";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("t_descuentos","pro_vivienda_pat_2"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "pro_vivienda_pat_2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_descuentos.pro_vivienda_pat_2";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_descuentos["pro_vivienda_pat_2"] = $fdata;
//	ap_pat_sol_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ap_pat_sol_3";
	$fdata["GoodName"] = "ap_pat_sol_3";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("t_descuentos","ap_pat_sol_3"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ap_pat_sol_3"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_descuentos.ap_pat_sol_3";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_descuentos["ap_pat_sol_3"] = $fdata;
//	sub_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "sub_total";
	$fdata["GoodName"] = "sub_total";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("t_descuentos","sub_total"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "sub_total"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_descuentos.sub_total";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_descuentos["sub_total"] = $fdata;

	
$tables_data["t_descuentos"]=&$tdatat_descuentos;
$field_labels["t_descuentos"] = &$fieldLabelst_descuentos;
$fieldToolTips["t_descuentos"] = &$fieldToolTipst_descuentos;
$page_titles["t_descuentos"] = &$pageTitlest_descuentos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_descuentos"] = array();
//	t_multas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="t_multas";
		$detailsParam["dOriginalTable"] = "t_multas";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "t_multas";
	$detailsParam["dCaptionTable"] = GetTableCaption("t_multas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["t_descuentos"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["t_descuentos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["t_descuentos"][$dIndex]["masterKeys"][]="id_func";

				$detailsTablesData["t_descuentos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["t_descuentos"][$dIndex]["detailKeys"][]="id_func";
	
// tables which are master tables for current table (detail)
$masterTablesData["t_descuentos"] = array();


	
				$strOriginalDetailsTable="funcionario";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="funcionario";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "funcionario";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["t_descuentos"][0] = $masterParams;	
				$masterTablesData["t_descuentos"][0]["masterKeys"] = array();
	$masterTablesData["t_descuentos"][0]["masterKeys"][]="id_func";
				$masterTablesData["t_descuentos"][0]["detailKeys"] = array();
	$masterTablesData["t_descuentos"][0]["detailKeys"][]="id_func";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_descuentos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_descuentos.id_func,  t_descuentos.afp_10,  t_descuentos.afp_riesgo_1_71,  t_descuentos.afp_05,  t_descuentos.afp_ap_sol_0_5,  t_descuentos.ans_1,  t_descuentos.rc_iva,  t_descuentos.retenciones,  t_descuentos.multa,  t_descuentos.total_desc,  t_descuentos.mes,  t_descuentos.gestion,  t_descuentos.liquido_pagable,  funcionario.name,  funcionario.l_name1,  funcionario.l_name2,  t_descuentos.seguro_pat_10,  t_descuentos.riesgo_pat_171,  t_descuentos.pro_vivienda_pat_2,  t_descuentos.ap_pat_sol_3,  t_descuentos.sub_total";
$proto0["m_strFrom"] = "FROM t_descuentos  INNER JOIN funcionario ON t_descuentos.id_func = funcionario.id_func";
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
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "t_descuentos"
));

$proto5["m_sql"] = "t_descuentos.id_func";
$proto5["m_srcTableName"] = "t_descuentos";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "afp_10",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "t_descuentos"
));

$proto7["m_sql"] = "t_descuentos.afp_10";
$proto7["m_srcTableName"] = "t_descuentos";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "afp_riesgo_1_71",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "t_descuentos"
));

$proto9["m_sql"] = "t_descuentos.afp_riesgo_1_71";
$proto9["m_srcTableName"] = "t_descuentos";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "afp_05",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "t_descuentos"
));

$proto11["m_sql"] = "t_descuentos.afp_05";
$proto11["m_srcTableName"] = "t_descuentos";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "afp_ap_sol_0_5",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "t_descuentos"
));

$proto13["m_sql"] = "t_descuentos.afp_ap_sol_0_5";
$proto13["m_srcTableName"] = "t_descuentos";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "ans_1",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "t_descuentos"
));

$proto15["m_sql"] = "t_descuentos.ans_1";
$proto15["m_srcTableName"] = "t_descuentos";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "rc_iva",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "t_descuentos"
));

$proto17["m_sql"] = "t_descuentos.rc_iva";
$proto17["m_srcTableName"] = "t_descuentos";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "retenciones",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "t_descuentos"
));

$proto19["m_sql"] = "t_descuentos.retenciones";
$proto19["m_srcTableName"] = "t_descuentos";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "multa",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "t_descuentos"
));

$proto21["m_sql"] = "t_descuentos.multa";
$proto21["m_srcTableName"] = "t_descuentos";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "total_desc",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "t_descuentos"
));

$proto23["m_sql"] = "t_descuentos.total_desc";
$proto23["m_srcTableName"] = "t_descuentos";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "mes",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "t_descuentos"
));

$proto25["m_sql"] = "t_descuentos.mes";
$proto25["m_srcTableName"] = "t_descuentos";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "gestion",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "t_descuentos"
));

$proto27["m_sql"] = "t_descuentos.gestion";
$proto27["m_srcTableName"] = "t_descuentos";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "liquido_pagable",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "t_descuentos"
));

$proto29["m_sql"] = "t_descuentos.liquido_pagable";
$proto29["m_srcTableName"] = "t_descuentos";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "t_descuentos"
));

$proto31["m_sql"] = "funcionario.name";
$proto31["m_srcTableName"] = "t_descuentos";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "l_name1",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "t_descuentos"
));

$proto33["m_sql"] = "funcionario.l_name1";
$proto33["m_srcTableName"] = "t_descuentos";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "l_name2",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "t_descuentos"
));

$proto35["m_sql"] = "funcionario.l_name2";
$proto35["m_srcTableName"] = "t_descuentos";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "seguro_pat_10",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "t_descuentos"
));

$proto37["m_sql"] = "t_descuentos.seguro_pat_10";
$proto37["m_srcTableName"] = "t_descuentos";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "riesgo_pat_171",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "t_descuentos"
));

$proto39["m_sql"] = "t_descuentos.riesgo_pat_171";
$proto39["m_srcTableName"] = "t_descuentos";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "pro_vivienda_pat_2",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "t_descuentos"
));

$proto41["m_sql"] = "t_descuentos.pro_vivienda_pat_2";
$proto41["m_srcTableName"] = "t_descuentos";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "ap_pat_sol_3",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "t_descuentos"
));

$proto43["m_sql"] = "t_descuentos.ap_pat_sol_3";
$proto43["m_srcTableName"] = "t_descuentos";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_total",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "t_descuentos"
));

$proto45["m_sql"] = "t_descuentos.sub_total";
$proto45["m_srcTableName"] = "t_descuentos";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto47=array();
$proto47["m_link"] = "SQLL_MAIN";
			$proto48=array();
$proto48["m_strName"] = "t_descuentos";
$proto48["m_srcTableName"] = "t_descuentos";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "id_func";
$proto48["m_columns"][] = "afp_10";
$proto48["m_columns"][] = "afp_riesgo_1_71";
$proto48["m_columns"][] = "afp_05";
$proto48["m_columns"][] = "afp_ap_sol_0_5";
$proto48["m_columns"][] = "ans_1";
$proto48["m_columns"][] = "rc_iva";
$proto48["m_columns"][] = "retenciones";
$proto48["m_columns"][] = "multa";
$proto48["m_columns"][] = "total_desc";
$proto48["m_columns"][] = "mes";
$proto48["m_columns"][] = "gestion";
$proto48["m_columns"][] = "liquido_pagable";
$proto48["m_columns"][] = "seguro_pat_10";
$proto48["m_columns"][] = "riesgo_pat_171";
$proto48["m_columns"][] = "pro_vivienda_pat_2";
$proto48["m_columns"][] = "ap_pat_sol_3";
$proto48["m_columns"][] = "sub_total";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_sql"] = "t_descuentos";
$proto47["m_alias"] = "";
$proto47["m_srcTableName"] = "t_descuentos";
$proto49=array();
$proto49["m_sql"] = "";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
												$proto51=array();
$proto51["m_link"] = "SQLL_INNERJOIN";
			$proto52=array();
$proto52["m_strName"] = "funcionario";
$proto52["m_srcTableName"] = "t_descuentos";
$proto52["m_columns"] = array();
$proto52["m_columns"][] = "id_func";
$proto52["m_columns"][] = "estado";
$proto52["m_columns"][] = "name";
$proto52["m_columns"][] = "l_name1";
$proto52["m_columns"][] = "l_name2";
$proto52["m_columns"][] = "l_name_es";
$proto52["m_columns"][] = "nationality";
$proto52["m_columns"][] = "nati";
$proto52["m_columns"][] = "ci";
$proto52["m_columns"][] = "expe";
$proto52["m_columns"][] = "afp";
$proto52["m_columns"][] = "nua";
$proto52["m_columns"][] = "c_status";
$proto52["m_columns"][] = "sex";
$proto52["m_columns"][] = "g_blood";
$proto52["m_columns"][] = "p_email";
$proto52["m_columns"][] = "job_email";
$proto52["m_columns"][] = "adress";
$proto52["m_columns"][] = "place_res";
$proto52["m_columns"][] = "phone_num";
$proto52["m_columns"][] = "cel_num";
$proto52["m_columns"][] = "phone_job";
$proto52["m_columns"][] = "p1_born";
$proto52["m_columns"][] = "p2_born";
$proto52["m_columns"][] = "p3_born";
$proto52["m_columns"][] = "date_born";
$proto52["m_columns"][] = "lic_driv";
$proto52["m_columns"][] = "type_lic";
$proto52["m_columns"][] = "prof";
$proto52["m_columns"][] = "col_prof";
$proto52["m_columns"][] = "num_prof";
$proto52["m_columns"][] = "nit";
$proto52["m_columns"][] = "on_off";
$proto52["m_columns"][] = "last_gra";
$proto52["m_columns"][] = "cole";
$proto52["m_columns"][] = "ciudad_de";
$proto52["m_columns"][] = "anyo_de";
$proto52["m_columns"][] = "title";
$proto52["m_columns"][] = "nro_libreta";
$proto52["m_columns"][] = "matricula";
$proto52["m_columns"][] = "anyo";
$proto52["m_columns"][] = "tipo_libreta";
$proto52["m_columns"][] = "nro_referencia1";
$proto52["m_columns"][] = "nro_referencia2";
$proto52["m_columns"][] = "es_estudiante";
$proto52["m_columns"][] = "nombre_carrera";
$proto52["m_columns"][] = "especialidad";
$proto52["m_columns"][] = "ultimo_anyo";
$proto52["m_columns"][] = "foto";
$proto52["m_columns"][] = "updated_at";
$proto52["m_columns"][] = "created_at";
$obj = new SQLTable($proto52);

$proto51["m_table"] = $obj;
$proto51["m_sql"] = "INNER JOIN funcionario ON t_descuentos.id_func = funcionario.id_func";
$proto51["m_alias"] = "";
$proto51["m_srcTableName"] = "t_descuentos";
$proto53=array();
$proto53["m_sql"] = "t_descuentos.id_func = funcionario.id_func";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "t_descuentos"
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "= funcionario.id_func";
$proto53["m_havingmode"] = false;
$proto53["m_inBrackets"] = false;
$proto53["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto53);

$proto51["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto51);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_descuentos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_descuentos = createSqlQuery_t_descuentos();


	
																					
	
$tdatat_descuentos[".sqlquery"] = $queryData_t_descuentos;

include_once(getabspath("include/t_descuentos_events.php"));
$tableEvents["t_descuentos"] = new eventclass_t_descuentos;
$tdatat_descuentos[".hasEvents"] = true;

?>