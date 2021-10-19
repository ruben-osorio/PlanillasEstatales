<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAFP_FUTURO = array();	
	$tdataAFP_FUTURO[".truncateText"] = true;
	$tdataAFP_FUTURO[".NumberOfChars"] = 80; 
	$tdataAFP_FUTURO[".ShortName"] = "AFP_FUTURO";
	$tdataAFP_FUTURO[".OwnerID"] = "";
	$tdataAFP_FUTURO[".OriginalTable"] = "t_planilla";

//	field labels
$fieldLabelsAFP_FUTURO = array();
$fieldToolTipsAFP_FUTURO = array();
$pageTitlesAFP_FUTURO = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsAFP_FUTURO["Spanish"] = array();
	$fieldToolTipsAFP_FUTURO["Spanish"] = array();
	$pageTitlesAFP_FUTURO["Spanish"] = array();
	$fieldLabelsAFP_FUTURO["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipsAFP_FUTURO["Spanish"]["id_func"] = "";
	$fieldLabelsAFP_FUTURO["Spanish"]["paterno"] = "Paterno";
	$fieldToolTipsAFP_FUTURO["Spanish"]["paterno"] = "";
	$fieldLabelsAFP_FUTURO["Spanish"]["materno"] = "Materno";
	$fieldToolTipsAFP_FUTURO["Spanish"]["materno"] = "";
	$fieldLabelsAFP_FUTURO["Spanish"]["nombres"] = "Nombres";
	$fieldToolTipsAFP_FUTURO["Spanish"]["nombres"] = "";
	$fieldLabelsAFP_FUTURO["Spanish"]["ci"] = "Ci";
	$fieldToolTipsAFP_FUTURO["Spanish"]["ci"] = "";
	$fieldLabelsAFP_FUTURO["Spanish"]["exp"] = "Exp";
	$fieldToolTipsAFP_FUTURO["Spanish"]["exp"] = "";
	$fieldLabelsAFP_FUTURO["Spanish"]["total_ganado"] = "Total Ganado";
	$fieldToolTipsAFP_FUTURO["Spanish"]["total_ganado"] = "";
	$fieldLabelsAFP_FUTURO["Spanish"]["afp_10"] = "AFP 10%";
	$fieldToolTipsAFP_FUTURO["Spanish"]["afp_10"] = "";
	$fieldLabelsAFP_FUTURO["Spanish"]["afp_riesgo_1_71"] = "AFP RIESGO 1.71%";
	$fieldToolTipsAFP_FUTURO["Spanish"]["afp_riesgo_1_71"] = "";
	$fieldLabelsAFP_FUTURO["Spanish"]["afp_05"] = "AFP 0.5%";
	$fieldToolTipsAFP_FUTURO["Spanish"]["afp_05"] = "";
	$fieldLabelsAFP_FUTURO["Spanish"]["afp_ap_sol_0_5"] = "AFP AP. SOL. 0.5%";
	$fieldToolTipsAFP_FUTURO["Spanish"]["afp_ap_sol_0_5"] = "";
	$fieldLabelsAFP_FUTURO["Spanish"]["ans_1"] = "ANS 1%";
	$fieldToolTipsAFP_FUTURO["Spanish"]["ans_1"] = "";
	$fieldLabelsAFP_FUTURO["Spanish"]["seguro_pat_10"] = "SEGURO PAT. 10%";
	$fieldToolTipsAFP_FUTURO["Spanish"]["seguro_pat_10"] = "";
	$fieldLabelsAFP_FUTURO["Spanish"]["riesgo_pat_171"] = "RIESGO PAT. 1.71%";
	$fieldToolTipsAFP_FUTURO["Spanish"]["riesgo_pat_171"] = "";
	$fieldLabelsAFP_FUTURO["Spanish"]["pro_vivienda_pat_2"] = "PRO VIVIENDA PAT. 2%";
	$fieldToolTipsAFP_FUTURO["Spanish"]["pro_vivienda_pat_2"] = "";
	$fieldLabelsAFP_FUTURO["Spanish"]["ap_pat_sol_3"] = "AP. PAT. SOL. 3%";
	$fieldToolTipsAFP_FUTURO["Spanish"]["ap_pat_sol_3"] = "";
	$fieldLabelsAFP_FUTURO["Spanish"]["sub_total"] = "SUB TOTAL";
	$fieldToolTipsAFP_FUTURO["Spanish"]["sub_total"] = "";
	$fieldLabelsAFP_FUTURO["Spanish"]["afp"] = "Afp";
	$fieldToolTipsAFP_FUTURO["Spanish"]["afp"] = "";
	if (count($fieldToolTipsAFP_FUTURO["Spanish"]))
		$tdataAFP_FUTURO[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAFP_FUTURO[""] = array();
	$fieldToolTipsAFP_FUTURO[""] = array();
	$pageTitlesAFP_FUTURO[""] = array();
	$fieldLabelsAFP_FUTURO[""]["id_func"] = "Id Func";
	$fieldToolTipsAFP_FUTURO[""]["id_func"] = "";
	$fieldLabelsAFP_FUTURO[""]["paterno"] = "Paterno";
	$fieldToolTipsAFP_FUTURO[""]["paterno"] = "";
	$fieldLabelsAFP_FUTURO[""]["materno"] = "Materno";
	$fieldToolTipsAFP_FUTURO[""]["materno"] = "";
	$fieldLabelsAFP_FUTURO[""]["nombres"] = "Nombres";
	$fieldToolTipsAFP_FUTURO[""]["nombres"] = "";
	$fieldLabelsAFP_FUTURO[""]["ci"] = "Ci";
	$fieldToolTipsAFP_FUTURO[""]["ci"] = "";
	$fieldLabelsAFP_FUTURO[""]["exp"] = "Exp";
	$fieldToolTipsAFP_FUTURO[""]["exp"] = "";
	$fieldLabelsAFP_FUTURO[""]["total_ganado"] = "Total Ganado";
	$fieldToolTipsAFP_FUTURO[""]["total_ganado"] = "";
	$fieldLabelsAFP_FUTURO[""]["afp_10"] = "Afp 10";
	$fieldToolTipsAFP_FUTURO[""]["afp_10"] = "";
	$fieldLabelsAFP_FUTURO[""]["afp_riesgo_1_71"] = "Afp Riesgo 1 71";
	$fieldToolTipsAFP_FUTURO[""]["afp_riesgo_1_71"] = "";
	$fieldLabelsAFP_FUTURO[""]["afp_05"] = "Afp 05";
	$fieldToolTipsAFP_FUTURO[""]["afp_05"] = "";
	$fieldLabelsAFP_FUTURO[""]["afp_ap_sol_0_5"] = "Afp Ap Sol 0 5";
	$fieldToolTipsAFP_FUTURO[""]["afp_ap_sol_0_5"] = "";
	$fieldLabelsAFP_FUTURO[""]["ans_1"] = "Ans 1";
	$fieldToolTipsAFP_FUTURO[""]["ans_1"] = "";
	$fieldLabelsAFP_FUTURO[""]["seguro_pat_10"] = "Seguro Pat 10";
	$fieldToolTipsAFP_FUTURO[""]["seguro_pat_10"] = "";
	$fieldLabelsAFP_FUTURO[""]["riesgo_pat_171"] = "Riesgo Pat 171";
	$fieldToolTipsAFP_FUTURO[""]["riesgo_pat_171"] = "";
	$fieldLabelsAFP_FUTURO[""]["pro_vivienda_pat_2"] = "Pro Vivienda Pat 2";
	$fieldToolTipsAFP_FUTURO[""]["pro_vivienda_pat_2"] = "";
	$fieldLabelsAFP_FUTURO[""]["ap_pat_sol_3"] = "Ap Pat Sol 3";
	$fieldToolTipsAFP_FUTURO[""]["ap_pat_sol_3"] = "";
	$fieldLabelsAFP_FUTURO[""]["sub_total"] = "Sub Total";
	$fieldToolTipsAFP_FUTURO[""]["sub_total"] = "";
	$fieldLabelsAFP_FUTURO[""]["afp"] = "Afp";
	$fieldToolTipsAFP_FUTURO[""]["afp"] = "";
	if (count($fieldToolTipsAFP_FUTURO[""]))
		$tdataAFP_FUTURO[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAFP_FUTURO["English"] = array();
	$fieldToolTipsAFP_FUTURO["English"] = array();
	$pageTitlesAFP_FUTURO["English"] = array();
	$fieldLabelsAFP_FUTURO["English"]["id_func"] = "Id Func";
	$fieldToolTipsAFP_FUTURO["English"]["id_func"] = "";
	$fieldLabelsAFP_FUTURO["English"]["paterno"] = "Paterno";
	$fieldToolTipsAFP_FUTURO["English"]["paterno"] = "";
	$fieldLabelsAFP_FUTURO["English"]["materno"] = "Materno";
	$fieldToolTipsAFP_FUTURO["English"]["materno"] = "";
	$fieldLabelsAFP_FUTURO["English"]["nombres"] = "Nombres";
	$fieldToolTipsAFP_FUTURO["English"]["nombres"] = "";
	$fieldLabelsAFP_FUTURO["English"]["ci"] = "Ci";
	$fieldToolTipsAFP_FUTURO["English"]["ci"] = "";
	$fieldLabelsAFP_FUTURO["English"]["exp"] = "Exp";
	$fieldToolTipsAFP_FUTURO["English"]["exp"] = "";
	$fieldLabelsAFP_FUTURO["English"]["total_ganado"] = "Total Ganado";
	$fieldToolTipsAFP_FUTURO["English"]["total_ganado"] = "";
	$fieldLabelsAFP_FUTURO["English"]["afp_10"] = "Afp 10";
	$fieldToolTipsAFP_FUTURO["English"]["afp_10"] = "";
	$fieldLabelsAFP_FUTURO["English"]["afp_riesgo_1_71"] = "Afp Riesgo 1 71";
	$fieldToolTipsAFP_FUTURO["English"]["afp_riesgo_1_71"] = "";
	$fieldLabelsAFP_FUTURO["English"]["afp_05"] = "Afp 05";
	$fieldToolTipsAFP_FUTURO["English"]["afp_05"] = "";
	$fieldLabelsAFP_FUTURO["English"]["afp_ap_sol_0_5"] = "Afp Ap Sol 0 5";
	$fieldToolTipsAFP_FUTURO["English"]["afp_ap_sol_0_5"] = "";
	$fieldLabelsAFP_FUTURO["English"]["ans_1"] = "Ans 1";
	$fieldToolTipsAFP_FUTURO["English"]["ans_1"] = "";
	$fieldLabelsAFP_FUTURO["English"]["seguro_pat_10"] = "Seguro Pat 10";
	$fieldToolTipsAFP_FUTURO["English"]["seguro_pat_10"] = "";
	$fieldLabelsAFP_FUTURO["English"]["riesgo_pat_171"] = "Riesgo Pat 171";
	$fieldToolTipsAFP_FUTURO["English"]["riesgo_pat_171"] = "";
	$fieldLabelsAFP_FUTURO["English"]["pro_vivienda_pat_2"] = "Pro Vivienda Pat 2";
	$fieldToolTipsAFP_FUTURO["English"]["pro_vivienda_pat_2"] = "";
	$fieldLabelsAFP_FUTURO["English"]["ap_pat_sol_3"] = "Ap Pat Sol 3";
	$fieldToolTipsAFP_FUTURO["English"]["ap_pat_sol_3"] = "";
	$fieldLabelsAFP_FUTURO["English"]["sub_total"] = "Sub Total";
	$fieldToolTipsAFP_FUTURO["English"]["sub_total"] = "";
	$fieldLabelsAFP_FUTURO["English"]["afp"] = "Afp";
	$fieldToolTipsAFP_FUTURO["English"]["afp"] = "";
	if (count($fieldToolTipsAFP_FUTURO["English"]))
		$tdataAFP_FUTURO[".isUseToolTips"] = true;
}
	
	
	$tdataAFP_FUTURO[".NCSearch"] = true;



$tdataAFP_FUTURO[".shortTableName"] = "AFP_FUTURO";
$tdataAFP_FUTURO[".nSecOptions"] = 0;
$tdataAFP_FUTURO[".recsPerRowList"] = 1;
$tdataAFP_FUTURO[".recsPerRowPrint"] = 1;
$tdataAFP_FUTURO[".mainTableOwnerID"] = "";
$tdataAFP_FUTURO[".moveNext"] = 1;
$tdataAFP_FUTURO[".entityType"] = 2;

$tdataAFP_FUTURO[".strOriginalTableName"] = "t_planilla";




$tdataAFP_FUTURO[".showAddInPopup"] = false;

$tdataAFP_FUTURO[".showEditInPopup"] = false;

$tdataAFP_FUTURO[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAFP_FUTURO[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAFP_FUTURO[".fieldsForRegister"] = array();

$tdataAFP_FUTURO[".listAjax"] = false;

	$tdataAFP_FUTURO[".audit"] = false;

	$tdataAFP_FUTURO[".locking"] = false;



$tdataAFP_FUTURO[".list"] = true;



$tdataAFP_FUTURO[".exportTo"] = true;

$tdataAFP_FUTURO[".printFriendly"] = true;


$tdataAFP_FUTURO[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataAFP_FUTURO[".searchSaving"] = false;
//

$tdataAFP_FUTURO[".showSearchPanel"] = true;
		$tdataAFP_FUTURO[".flexibleSearch"] = true;		

if (isMobile())
	$tdataAFP_FUTURO[".isUseAjaxSuggest"] = false;
else 
	$tdataAFP_FUTURO[".isUseAjaxSuggest"] = true;




$tdataAFP_FUTURO[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAFP_FUTURO[".isUseTimeForSearch"] = false;





$tdataAFP_FUTURO[".allSearchFields"] = array();
$tdataAFP_FUTURO[".filterFields"] = array();
$tdataAFP_FUTURO[".requiredSearchFields"] = array();

$tdataAFP_FUTURO[".allSearchFields"][] = "id_func";
	$tdataAFP_FUTURO[".allSearchFields"][] = "paterno";
	$tdataAFP_FUTURO[".allSearchFields"][] = "materno";
	$tdataAFP_FUTURO[".allSearchFields"][] = "nombres";
	$tdataAFP_FUTURO[".allSearchFields"][] = "ci";
	$tdataAFP_FUTURO[".allSearchFields"][] = "exp";
	$tdataAFP_FUTURO[".allSearchFields"][] = "total_ganado";
	$tdataAFP_FUTURO[".allSearchFields"][] = "afp_10";
	$tdataAFP_FUTURO[".allSearchFields"][] = "afp_riesgo_1_71";
	$tdataAFP_FUTURO[".allSearchFields"][] = "afp_05";
	$tdataAFP_FUTURO[".allSearchFields"][] = "afp_ap_sol_0_5";
	$tdataAFP_FUTURO[".allSearchFields"][] = "ans_1";
	$tdataAFP_FUTURO[".allSearchFields"][] = "seguro_pat_10";
	$tdataAFP_FUTURO[".allSearchFields"][] = "riesgo_pat_171";
	$tdataAFP_FUTURO[".allSearchFields"][] = "pro_vivienda_pat_2";
	$tdataAFP_FUTURO[".allSearchFields"][] = "ap_pat_sol_3";
	$tdataAFP_FUTURO[".allSearchFields"][] = "sub_total";
	$tdataAFP_FUTURO[".allSearchFields"][] = "afp";
	

$tdataAFP_FUTURO[".googleLikeFields"] = array();
$tdataAFP_FUTURO[".googleLikeFields"][] = "id_func";
$tdataAFP_FUTURO[".googleLikeFields"][] = "paterno";
$tdataAFP_FUTURO[".googleLikeFields"][] = "materno";
$tdataAFP_FUTURO[".googleLikeFields"][] = "nombres";
$tdataAFP_FUTURO[".googleLikeFields"][] = "ci";
$tdataAFP_FUTURO[".googleLikeFields"][] = "exp";
$tdataAFP_FUTURO[".googleLikeFields"][] = "total_ganado";
$tdataAFP_FUTURO[".googleLikeFields"][] = "afp_10";
$tdataAFP_FUTURO[".googleLikeFields"][] = "afp_riesgo_1_71";
$tdataAFP_FUTURO[".googleLikeFields"][] = "afp_05";
$tdataAFP_FUTURO[".googleLikeFields"][] = "afp_ap_sol_0_5";
$tdataAFP_FUTURO[".googleLikeFields"][] = "ans_1";
$tdataAFP_FUTURO[".googleLikeFields"][] = "seguro_pat_10";
$tdataAFP_FUTURO[".googleLikeFields"][] = "riesgo_pat_171";
$tdataAFP_FUTURO[".googleLikeFields"][] = "pro_vivienda_pat_2";
$tdataAFP_FUTURO[".googleLikeFields"][] = "ap_pat_sol_3";
$tdataAFP_FUTURO[".googleLikeFields"][] = "sub_total";
$tdataAFP_FUTURO[".googleLikeFields"][] = "afp";


$tdataAFP_FUTURO[".advSearchFields"] = array();
$tdataAFP_FUTURO[".advSearchFields"][] = "id_func";
$tdataAFP_FUTURO[".advSearchFields"][] = "paterno";
$tdataAFP_FUTURO[".advSearchFields"][] = "materno";
$tdataAFP_FUTURO[".advSearchFields"][] = "nombres";
$tdataAFP_FUTURO[".advSearchFields"][] = "ci";
$tdataAFP_FUTURO[".advSearchFields"][] = "exp";
$tdataAFP_FUTURO[".advSearchFields"][] = "total_ganado";
$tdataAFP_FUTURO[".advSearchFields"][] = "afp_10";
$tdataAFP_FUTURO[".advSearchFields"][] = "afp_riesgo_1_71";
$tdataAFP_FUTURO[".advSearchFields"][] = "afp_05";
$tdataAFP_FUTURO[".advSearchFields"][] = "afp_ap_sol_0_5";
$tdataAFP_FUTURO[".advSearchFields"][] = "ans_1";
$tdataAFP_FUTURO[".advSearchFields"][] = "seguro_pat_10";
$tdataAFP_FUTURO[".advSearchFields"][] = "riesgo_pat_171";
$tdataAFP_FUTURO[".advSearchFields"][] = "pro_vivienda_pat_2";
$tdataAFP_FUTURO[".advSearchFields"][] = "ap_pat_sol_3";
$tdataAFP_FUTURO[".advSearchFields"][] = "sub_total";
$tdataAFP_FUTURO[".advSearchFields"][] = "afp";

$tdataAFP_FUTURO[".tableType"] = "report";

$tdataAFP_FUTURO[".printerPageOrientation"] = 0;
$tdataAFP_FUTURO[".nPrinterPageScale"] = 100;

$tdataAFP_FUTURO[".nPrinterSplitRecords"] = 40;

$tdataAFP_FUTURO[".nPrinterPDFSplitRecords"] = 40;



$tdataAFP_FUTURO[".geocodingEnabled"] = false;

//report settings
$tdataAFP_FUTURO[".printReportLayout"] = 6;	

$tdataAFP_FUTURO[".reportPrintPartitionType"] = 1;	
$tdataAFP_FUTURO[".reportPrintGroupsPerPage"] = 40;	
	$tdataAFP_FUTURO[".reportPrintPDFGroupsPerPage"] = 40;
$tdataAFP_FUTURO[".lowGroup"] = 0;



$tdataAFP_FUTURO[".pageSize"] = 20;	


$tdataAFP_FUTURO[".isExistTotalFields"] = true;




$tdataAFP_FUTURO[".repShowDet"] = true;

$tdataAFP_FUTURO[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAFP_FUTURO[".strOrderBy"] = $tstrOrderBy;

$tdataAFP_FUTURO[".orderindexes"] = array();

$tdataAFP_FUTURO[".sqlHead"] = "SELECT t_planilla.id_func,  t_planilla.paterno,  t_planilla.materno,  t_planilla.nombres,  t_planilla.ci,  t_planilla.exp,  t_planilla.total_ganado,  t_planilla.afp_10,  t_planilla.afp_riesgo_1_71,  t_planilla.afp_05,  t_planilla.afp_ap_sol_0_5,  t_planilla.ans_1,  t_descuentos.seguro_pat_10,  t_descuentos.riesgo_pat_171,  t_descuentos.pro_vivienda_pat_2,  t_descuentos.ap_pat_sol_3,  t_descuentos.sub_total,  funcionario.afp";
$tdataAFP_FUTURO[".sqlFrom"] = "FROM t_planilla  INNER JOIN t_descuentos ON t_planilla.id_func = t_descuentos.id_func  INNER JOIN funcionario ON t_planilla.id_func = funcionario.id_func";
$tdataAFP_FUTURO[".sqlWhereExpr"] = "funcionario.afp LIKE \"FUTURO%\"";
$tdataAFP_FUTURO[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAFP_FUTURO[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAFP_FUTURO[".arrGroupsPerPage"] = $arrGPP;

$tdataAFP_FUTURO[".highlightSearchResults"] = true;

$tableKeysAFP_FUTURO = array();
$tdataAFP_FUTURO[".Keys"] = $tableKeysAFP_FUTURO;

$tdataAFP_FUTURO[".listFields"] = array();
$tdataAFP_FUTURO[".listFields"][] = "id_func";
$tdataAFP_FUTURO[".listFields"][] = "paterno";
$tdataAFP_FUTURO[".listFields"][] = "materno";
$tdataAFP_FUTURO[".listFields"][] = "nombres";
$tdataAFP_FUTURO[".listFields"][] = "ci";
$tdataAFP_FUTURO[".listFields"][] = "exp";
$tdataAFP_FUTURO[".listFields"][] = "total_ganado";
$tdataAFP_FUTURO[".listFields"][] = "afp_10";
$tdataAFP_FUTURO[".listFields"][] = "afp_riesgo_1_71";
$tdataAFP_FUTURO[".listFields"][] = "afp_05";
$tdataAFP_FUTURO[".listFields"][] = "afp_ap_sol_0_5";
$tdataAFP_FUTURO[".listFields"][] = "ans_1";
$tdataAFP_FUTURO[".listFields"][] = "seguro_pat_10";
$tdataAFP_FUTURO[".listFields"][] = "riesgo_pat_171";
$tdataAFP_FUTURO[".listFields"][] = "pro_vivienda_pat_2";
$tdataAFP_FUTURO[".listFields"][] = "ap_pat_sol_3";
$tdataAFP_FUTURO[".listFields"][] = "sub_total";
$tdataAFP_FUTURO[".listFields"][] = "afp";

$tdataAFP_FUTURO[".hideMobileList"] = array();


$tdataAFP_FUTURO[".viewFields"] = array();
$tdataAFP_FUTURO[".viewFields"][] = "id_func";
$tdataAFP_FUTURO[".viewFields"][] = "paterno";
$tdataAFP_FUTURO[".viewFields"][] = "materno";
$tdataAFP_FUTURO[".viewFields"][] = "nombres";
$tdataAFP_FUTURO[".viewFields"][] = "ci";
$tdataAFP_FUTURO[".viewFields"][] = "exp";
$tdataAFP_FUTURO[".viewFields"][] = "total_ganado";
$tdataAFP_FUTURO[".viewFields"][] = "afp_10";
$tdataAFP_FUTURO[".viewFields"][] = "afp_riesgo_1_71";
$tdataAFP_FUTURO[".viewFields"][] = "afp_05";
$tdataAFP_FUTURO[".viewFields"][] = "afp_ap_sol_0_5";
$tdataAFP_FUTURO[".viewFields"][] = "ans_1";
$tdataAFP_FUTURO[".viewFields"][] = "seguro_pat_10";
$tdataAFP_FUTURO[".viewFields"][] = "riesgo_pat_171";
$tdataAFP_FUTURO[".viewFields"][] = "pro_vivienda_pat_2";
$tdataAFP_FUTURO[".viewFields"][] = "ap_pat_sol_3";
$tdataAFP_FUTURO[".viewFields"][] = "sub_total";
$tdataAFP_FUTURO[".viewFields"][] = "afp";

$tdataAFP_FUTURO[".addFields"] = array();
$tdataAFP_FUTURO[".addFields"][] = "id_func";
$tdataAFP_FUTURO[".addFields"][] = "paterno";
$tdataAFP_FUTURO[".addFields"][] = "materno";
$tdataAFP_FUTURO[".addFields"][] = "nombres";
$tdataAFP_FUTURO[".addFields"][] = "ci";
$tdataAFP_FUTURO[".addFields"][] = "exp";
$tdataAFP_FUTURO[".addFields"][] = "total_ganado";
$tdataAFP_FUTURO[".addFields"][] = "afp_10";
$tdataAFP_FUTURO[".addFields"][] = "afp_riesgo_1_71";
$tdataAFP_FUTURO[".addFields"][] = "afp_05";
$tdataAFP_FUTURO[".addFields"][] = "afp_ap_sol_0_5";
$tdataAFP_FUTURO[".addFields"][] = "ans_1";

$tdataAFP_FUTURO[".masterListFields"] = array();
$tdataAFP_FUTURO[".masterListFields"][] = "id_func";
$tdataAFP_FUTURO[".masterListFields"][] = "paterno";
$tdataAFP_FUTURO[".masterListFields"][] = "materno";
$tdataAFP_FUTURO[".masterListFields"][] = "nombres";
$tdataAFP_FUTURO[".masterListFields"][] = "ci";
$tdataAFP_FUTURO[".masterListFields"][] = "exp";
$tdataAFP_FUTURO[".masterListFields"][] = "total_ganado";
$tdataAFP_FUTURO[".masterListFields"][] = "afp_10";
$tdataAFP_FUTURO[".masterListFields"][] = "afp_riesgo_1_71";
$tdataAFP_FUTURO[".masterListFields"][] = "afp_05";
$tdataAFP_FUTURO[".masterListFields"][] = "afp_ap_sol_0_5";
$tdataAFP_FUTURO[".masterListFields"][] = "ans_1";
$tdataAFP_FUTURO[".masterListFields"][] = "seguro_pat_10";
$tdataAFP_FUTURO[".masterListFields"][] = "riesgo_pat_171";
$tdataAFP_FUTURO[".masterListFields"][] = "pro_vivienda_pat_2";
$tdataAFP_FUTURO[".masterListFields"][] = "ap_pat_sol_3";
$tdataAFP_FUTURO[".masterListFields"][] = "sub_total";
$tdataAFP_FUTURO[".masterListFields"][] = "afp";

$tdataAFP_FUTURO[".inlineAddFields"] = array();
$tdataAFP_FUTURO[".inlineAddFields"][] = "id_func";
$tdataAFP_FUTURO[".inlineAddFields"][] = "paterno";
$tdataAFP_FUTURO[".inlineAddFields"][] = "materno";
$tdataAFP_FUTURO[".inlineAddFields"][] = "nombres";
$tdataAFP_FUTURO[".inlineAddFields"][] = "ci";
$tdataAFP_FUTURO[".inlineAddFields"][] = "exp";
$tdataAFP_FUTURO[".inlineAddFields"][] = "total_ganado";
$tdataAFP_FUTURO[".inlineAddFields"][] = "afp_10";
$tdataAFP_FUTURO[".inlineAddFields"][] = "afp_riesgo_1_71";
$tdataAFP_FUTURO[".inlineAddFields"][] = "afp_05";
$tdataAFP_FUTURO[".inlineAddFields"][] = "afp_ap_sol_0_5";
$tdataAFP_FUTURO[".inlineAddFields"][] = "ans_1";

$tdataAFP_FUTURO[".editFields"] = array();
$tdataAFP_FUTURO[".editFields"][] = "id_func";
$tdataAFP_FUTURO[".editFields"][] = "paterno";
$tdataAFP_FUTURO[".editFields"][] = "materno";
$tdataAFP_FUTURO[".editFields"][] = "nombres";
$tdataAFP_FUTURO[".editFields"][] = "ci";
$tdataAFP_FUTURO[".editFields"][] = "exp";
$tdataAFP_FUTURO[".editFields"][] = "total_ganado";
$tdataAFP_FUTURO[".editFields"][] = "afp_10";
$tdataAFP_FUTURO[".editFields"][] = "afp_riesgo_1_71";
$tdataAFP_FUTURO[".editFields"][] = "afp_05";
$tdataAFP_FUTURO[".editFields"][] = "afp_ap_sol_0_5";
$tdataAFP_FUTURO[".editFields"][] = "ans_1";

$tdataAFP_FUTURO[".inlineEditFields"] = array();
$tdataAFP_FUTURO[".inlineEditFields"][] = "id_func";
$tdataAFP_FUTURO[".inlineEditFields"][] = "paterno";
$tdataAFP_FUTURO[".inlineEditFields"][] = "materno";
$tdataAFP_FUTURO[".inlineEditFields"][] = "nombres";
$tdataAFP_FUTURO[".inlineEditFields"][] = "ci";
$tdataAFP_FUTURO[".inlineEditFields"][] = "exp";
$tdataAFP_FUTURO[".inlineEditFields"][] = "total_ganado";
$tdataAFP_FUTURO[".inlineEditFields"][] = "afp_10";
$tdataAFP_FUTURO[".inlineEditFields"][] = "afp_riesgo_1_71";
$tdataAFP_FUTURO[".inlineEditFields"][] = "afp_05";
$tdataAFP_FUTURO[".inlineEditFields"][] = "afp_ap_sol_0_5";
$tdataAFP_FUTURO[".inlineEditFields"][] = "ans_1";

$tdataAFP_FUTURO[".exportFields"] = array();
$tdataAFP_FUTURO[".exportFields"][] = "id_func";
$tdataAFP_FUTURO[".exportFields"][] = "paterno";
$tdataAFP_FUTURO[".exportFields"][] = "materno";
$tdataAFP_FUTURO[".exportFields"][] = "nombres";
$tdataAFP_FUTURO[".exportFields"][] = "ci";
$tdataAFP_FUTURO[".exportFields"][] = "exp";
$tdataAFP_FUTURO[".exportFields"][] = "total_ganado";
$tdataAFP_FUTURO[".exportFields"][] = "afp_10";
$tdataAFP_FUTURO[".exportFields"][] = "afp_riesgo_1_71";
$tdataAFP_FUTURO[".exportFields"][] = "afp_05";
$tdataAFP_FUTURO[".exportFields"][] = "afp_ap_sol_0_5";
$tdataAFP_FUTURO[".exportFields"][] = "ans_1";
$tdataAFP_FUTURO[".exportFields"][] = "seguro_pat_10";
$tdataAFP_FUTURO[".exportFields"][] = "riesgo_pat_171";
$tdataAFP_FUTURO[".exportFields"][] = "pro_vivienda_pat_2";
$tdataAFP_FUTURO[".exportFields"][] = "ap_pat_sol_3";
$tdataAFP_FUTURO[".exportFields"][] = "sub_total";
$tdataAFP_FUTURO[".exportFields"][] = "afp";

$tdataAFP_FUTURO[".importFields"] = array();
$tdataAFP_FUTURO[".importFields"][] = "id_func";
$tdataAFP_FUTURO[".importFields"][] = "paterno";
$tdataAFP_FUTURO[".importFields"][] = "materno";
$tdataAFP_FUTURO[".importFields"][] = "nombres";
$tdataAFP_FUTURO[".importFields"][] = "ci";
$tdataAFP_FUTURO[".importFields"][] = "exp";
$tdataAFP_FUTURO[".importFields"][] = "total_ganado";
$tdataAFP_FUTURO[".importFields"][] = "afp_10";
$tdataAFP_FUTURO[".importFields"][] = "afp_riesgo_1_71";
$tdataAFP_FUTURO[".importFields"][] = "afp_05";
$tdataAFP_FUTURO[".importFields"][] = "afp_ap_sol_0_5";
$tdataAFP_FUTURO[".importFields"][] = "ans_1";
$tdataAFP_FUTURO[".importFields"][] = "seguro_pat_10";
$tdataAFP_FUTURO[".importFields"][] = "riesgo_pat_171";
$tdataAFP_FUTURO[".importFields"][] = "pro_vivienda_pat_2";
$tdataAFP_FUTURO[".importFields"][] = "ap_pat_sol_3";
$tdataAFP_FUTURO[".importFields"][] = "sub_total";
$tdataAFP_FUTURO[".importFields"][] = "afp";

$tdataAFP_FUTURO[".printFields"] = array();
$tdataAFP_FUTURO[".printFields"][] = "id_func";
$tdataAFP_FUTURO[".printFields"][] = "paterno";
$tdataAFP_FUTURO[".printFields"][] = "materno";
$tdataAFP_FUTURO[".printFields"][] = "nombres";
$tdataAFP_FUTURO[".printFields"][] = "ci";
$tdataAFP_FUTURO[".printFields"][] = "exp";
$tdataAFP_FUTURO[".printFields"][] = "total_ganado";
$tdataAFP_FUTURO[".printFields"][] = "afp_10";
$tdataAFP_FUTURO[".printFields"][] = "afp_riesgo_1_71";
$tdataAFP_FUTURO[".printFields"][] = "afp_05";
$tdataAFP_FUTURO[".printFields"][] = "afp_ap_sol_0_5";
$tdataAFP_FUTURO[".printFields"][] = "ans_1";
$tdataAFP_FUTURO[".printFields"][] = "seguro_pat_10";
$tdataAFP_FUTURO[".printFields"][] = "riesgo_pat_171";
$tdataAFP_FUTURO[".printFields"][] = "pro_vivienda_pat_2";
$tdataAFP_FUTURO[".printFields"][] = "ap_pat_sol_3";
$tdataAFP_FUTURO[".printFields"][] = "sub_total";
$tdataAFP_FUTURO[".printFields"][] = "afp";

//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_FUTURO","id_func"); 
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
	$fdata["FullName"] = "t_planilla.id_func";
	
		
		
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

	

	
	$tdataAFP_FUTURO["id_func"] = $fdata;
//	paterno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "paterno";
	$fdata["GoodName"] = "paterno";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_FUTURO","paterno"); 
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
	$fdata["FullName"] = "t_planilla.paterno";
	
		
		
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

	

	
	$tdataAFP_FUTURO["paterno"] = $fdata;
//	materno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "materno";
	$fdata["GoodName"] = "materno";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_FUTURO","materno"); 
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
	$fdata["FullName"] = "t_planilla.materno";
	
		
		
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

	

	
	$tdataAFP_FUTURO["materno"] = $fdata;
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_FUTURO","nombres"); 
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
	$fdata["FullName"] = "t_planilla.nombres";
	
		
		
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

	

	
	$tdataAFP_FUTURO["nombres"] = $fdata;
//	ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ci";
	$fdata["GoodName"] = "ci";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_FUTURO","ci"); 
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
	$fdata["FullName"] = "t_planilla.ci";
	
		
		
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

	

	
	$tdataAFP_FUTURO["ci"] = $fdata;
//	exp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "exp";
	$fdata["GoodName"] = "exp";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_FUTURO","exp"); 
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
	$fdata["FullName"] = "t_planilla.exp";
	
		
		
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

	

	
	$tdataAFP_FUTURO["exp"] = $fdata;
//	total_ganado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "total_ganado";
	$fdata["GoodName"] = "total_ganado";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_FUTURO","total_ganado"); 
	$fdata["FieldType"] = 200;
	
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
	$fdata["FullName"] = "t_planilla.total_ganado";
	
		
		
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

	

	
	$tdataAFP_FUTURO["total_ganado"] = $fdata;
//	afp_10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "afp_10";
	$fdata["GoodName"] = "afp_10";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_FUTURO","afp_10"); 
	$fdata["FieldType"] = 200;
	
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
	
		$fdata["strField"] = "afp_10"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla.afp_10";
	
		
		
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

	

	
	$tdataAFP_FUTURO["afp_10"] = $fdata;
//	afp_riesgo_1_71
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "afp_riesgo_1_71";
	$fdata["GoodName"] = "afp_riesgo_1_71";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_FUTURO","afp_riesgo_1_71"); 
	$fdata["FieldType"] = 200;
	
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
	
		$fdata["strField"] = "afp_riesgo_1_71"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla.afp_riesgo_1_71";
	
		
		
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

	

	
	$tdataAFP_FUTURO["afp_riesgo_1_71"] = $fdata;
//	afp_05
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "afp_05";
	$fdata["GoodName"] = "afp_05";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_FUTURO","afp_05"); 
	$fdata["FieldType"] = 200;
	
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
	
		$fdata["strField"] = "afp_05"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla.afp_05";
	
		
		
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

	

	
	$tdataAFP_FUTURO["afp_05"] = $fdata;
//	afp_ap_sol_0_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "afp_ap_sol_0_5";
	$fdata["GoodName"] = "afp_ap_sol_0_5";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_FUTURO","afp_ap_sol_0_5"); 
	$fdata["FieldType"] = 200;
	
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
	
		$fdata["strField"] = "afp_ap_sol_0_5"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla.afp_ap_sol_0_5";
	
		
		
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

	

	
	$tdataAFP_FUTURO["afp_ap_sol_0_5"] = $fdata;
//	ans_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ans_1";
	$fdata["GoodName"] = "ans_1";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_FUTURO","ans_1"); 
	$fdata["FieldType"] = 200;
	
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
	
		$fdata["strField"] = "ans_1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla.ans_1";
	
		
		
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

	

	
	$tdataAFP_FUTURO["ans_1"] = $fdata;
//	seguro_pat_10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "seguro_pat_10";
	$fdata["GoodName"] = "seguro_pat_10";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("AFP_FUTURO","seguro_pat_10"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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

	

	
	$tdataAFP_FUTURO["seguro_pat_10"] = $fdata;
//	riesgo_pat_171
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "riesgo_pat_171";
	$fdata["GoodName"] = "riesgo_pat_171";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("AFP_FUTURO","riesgo_pat_171"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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

	

	
	$tdataAFP_FUTURO["riesgo_pat_171"] = $fdata;
//	pro_vivienda_pat_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "pro_vivienda_pat_2";
	$fdata["GoodName"] = "pro_vivienda_pat_2";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("AFP_FUTURO","pro_vivienda_pat_2"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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

	

	
	$tdataAFP_FUTURO["pro_vivienda_pat_2"] = $fdata;
//	ap_pat_sol_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ap_pat_sol_3";
	$fdata["GoodName"] = "ap_pat_sol_3";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("AFP_FUTURO","ap_pat_sol_3"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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

	

	
	$tdataAFP_FUTURO["ap_pat_sol_3"] = $fdata;
//	sub_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "sub_total";
	$fdata["GoodName"] = "sub_total";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("AFP_FUTURO","sub_total"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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

	

	
	$tdataAFP_FUTURO["sub_total"] = $fdata;
//	afp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "afp";
	$fdata["GoodName"] = "afp";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("AFP_FUTURO","afp"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "afp"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "funcionario.afp";
	
		
		
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

	

	
	$tdataAFP_FUTURO["afp"] = $fdata;

	
$tables_data["AFP-FUTURO"]=&$tdataAFP_FUTURO;
$field_labels["AFP_FUTURO"] = &$fieldLabelsAFP_FUTURO;
$fieldToolTips["AFP-FUTURO"] = &$fieldToolTipsAFP_FUTURO;
$page_titles["AFP_FUTURO"] = &$pageTitlesAFP_FUTURO;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["AFP-FUTURO"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["AFP-FUTURO"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_AFP_FUTURO()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_planilla.id_func,  t_planilla.paterno,  t_planilla.materno,  t_planilla.nombres,  t_planilla.ci,  t_planilla.exp,  t_planilla.total_ganado,  t_planilla.afp_10,  t_planilla.afp_riesgo_1_71,  t_planilla.afp_05,  t_planilla.afp_ap_sol_0_5,  t_planilla.ans_1,  t_descuentos.seguro_pat_10,  t_descuentos.riesgo_pat_171,  t_descuentos.pro_vivienda_pat_2,  t_descuentos.ap_pat_sol_3,  t_descuentos.sub_total,  funcionario.afp";
$proto0["m_strFrom"] = "FROM t_planilla  INNER JOIN t_descuentos ON t_planilla.id_func = t_descuentos.id_func  INNER JOIN funcionario ON t_planilla.id_func = funcionario.id_func";
$proto0["m_strWhere"] = "funcionario.afp LIKE \"FUTURO%\"";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "funcionario.afp LIKE \"FUTURO%\"";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "afp",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "LIKE \"FUTURO%\"";
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
	"m_srcTableName" => "AFP-FUTURO"
));

$proto5["m_sql"] = "t_planilla.id_func";
$proto5["m_srcTableName"] = "AFP-FUTURO";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "paterno",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto7["m_sql"] = "t_planilla.paterno";
$proto7["m_srcTableName"] = "AFP-FUTURO";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "materno",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto9["m_sql"] = "t_planilla.materno";
$proto9["m_srcTableName"] = "AFP-FUTURO";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto11["m_sql"] = "t_planilla.nombres";
$proto11["m_srcTableName"] = "AFP-FUTURO";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "ci",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto13["m_sql"] = "t_planilla.ci";
$proto13["m_srcTableName"] = "AFP-FUTURO";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "exp",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto15["m_sql"] = "t_planilla.exp";
$proto15["m_srcTableName"] = "AFP-FUTURO";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "total_ganado",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto17["m_sql"] = "t_planilla.total_ganado";
$proto17["m_srcTableName"] = "AFP-FUTURO";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "afp_10",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto19["m_sql"] = "t_planilla.afp_10";
$proto19["m_srcTableName"] = "AFP-FUTURO";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "afp_riesgo_1_71",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto21["m_sql"] = "t_planilla.afp_riesgo_1_71";
$proto21["m_srcTableName"] = "AFP-FUTURO";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "afp_05",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto23["m_sql"] = "t_planilla.afp_05";
$proto23["m_srcTableName"] = "AFP-FUTURO";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "afp_ap_sol_0_5",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto25["m_sql"] = "t_planilla.afp_ap_sol_0_5";
$proto25["m_srcTableName"] = "AFP-FUTURO";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "ans_1",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto27["m_sql"] = "t_planilla.ans_1";
$proto27["m_srcTableName"] = "AFP-FUTURO";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "seguro_pat_10",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto29["m_sql"] = "t_descuentos.seguro_pat_10";
$proto29["m_srcTableName"] = "AFP-FUTURO";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "riesgo_pat_171",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto31["m_sql"] = "t_descuentos.riesgo_pat_171";
$proto31["m_srcTableName"] = "AFP-FUTURO";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "pro_vivienda_pat_2",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto33["m_sql"] = "t_descuentos.pro_vivienda_pat_2";
$proto33["m_srcTableName"] = "AFP-FUTURO";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "ap_pat_sol_3",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto35["m_sql"] = "t_descuentos.ap_pat_sol_3";
$proto35["m_srcTableName"] = "AFP-FUTURO";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_total",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto37["m_sql"] = "t_descuentos.sub_total";
$proto37["m_srcTableName"] = "AFP-FUTURO";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "afp",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto39["m_sql"] = "funcionario.afp";
$proto39["m_srcTableName"] = "AFP-FUTURO";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto41=array();
$proto41["m_link"] = "SQLL_MAIN";
			$proto42=array();
$proto42["m_strName"] = "t_planilla";
$proto42["m_srcTableName"] = "AFP-FUTURO";
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
$proto42["m_columns"][] = "afp_10";
$proto42["m_columns"][] = "afp_riesgo_1_71";
$proto42["m_columns"][] = "afp_05";
$proto42["m_columns"][] = "afp_ap_sol_0_5";
$proto42["m_columns"][] = "ans_1";
$proto42["m_columns"][] = "rc_iva";
$proto42["m_columns"][] = "retenciones";
$proto42["m_columns"][] = "multa";
$proto42["m_columns"][] = "total_desc";
$proto42["m_columns"][] = "mes";
$proto42["m_columns"][] = "gestion";
$proto42["m_columns"][] = "liquido_pagable";
$proto42["m_columns"][] = "cod_afp";
$proto42["m_columns"][] = "cta_banco";
$proto42["m_columns"][] = "tipo_funcionario";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "t_planilla";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "AFP-FUTURO";
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
												$proto45=array();
$proto45["m_link"] = "SQLL_INNERJOIN";
			$proto46=array();
$proto46["m_strName"] = "t_descuentos";
$proto46["m_srcTableName"] = "AFP-FUTURO";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "id_func";
$proto46["m_columns"][] = "afp_10";
$proto46["m_columns"][] = "afp_riesgo_1_71";
$proto46["m_columns"][] = "afp_05";
$proto46["m_columns"][] = "afp_ap_sol_0_5";
$proto46["m_columns"][] = "ans_1";
$proto46["m_columns"][] = "rc_iva";
$proto46["m_columns"][] = "retenciones";
$proto46["m_columns"][] = "multa";
$proto46["m_columns"][] = "total_desc";
$proto46["m_columns"][] = "mes";
$proto46["m_columns"][] = "gestion";
$proto46["m_columns"][] = "liquido_pagable";
$proto46["m_columns"][] = "seguro_pat_10";
$proto46["m_columns"][] = "riesgo_pat_171";
$proto46["m_columns"][] = "pro_vivienda_pat_2";
$proto46["m_columns"][] = "ap_pat_sol_3";
$proto46["m_columns"][] = "sub_total";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "INNER JOIN t_descuentos ON t_planilla.id_func = t_descuentos.id_func";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "AFP-FUTURO";
$proto47=array();
$proto47["m_sql"] = "t_planilla.id_func = t_descuentos.id_func";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "= t_descuentos.id_func";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
												$proto49=array();
$proto49["m_link"] = "SQLL_INNERJOIN";
			$proto50=array();
$proto50["m_strName"] = "funcionario";
$proto50["m_srcTableName"] = "AFP-FUTURO";
$proto50["m_columns"] = array();
$proto50["m_columns"][] = "id_func";
$proto50["m_columns"][] = "estado";
$proto50["m_columns"][] = "name";
$proto50["m_columns"][] = "l_name1";
$proto50["m_columns"][] = "l_name2";
$proto50["m_columns"][] = "l_name_es";
$proto50["m_columns"][] = "nationality";
$proto50["m_columns"][] = "nati";
$proto50["m_columns"][] = "ci";
$proto50["m_columns"][] = "expe";
$proto50["m_columns"][] = "afp";
$proto50["m_columns"][] = "nua";
$proto50["m_columns"][] = "c_status";
$proto50["m_columns"][] = "sex";
$proto50["m_columns"][] = "g_blood";
$proto50["m_columns"][] = "p_email";
$proto50["m_columns"][] = "job_email";
$proto50["m_columns"][] = "adress";
$proto50["m_columns"][] = "place_res";
$proto50["m_columns"][] = "phone_num";
$proto50["m_columns"][] = "cel_num";
$proto50["m_columns"][] = "phone_job";
$proto50["m_columns"][] = "p1_born";
$proto50["m_columns"][] = "p2_born";
$proto50["m_columns"][] = "p3_born";
$proto50["m_columns"][] = "date_born";
$proto50["m_columns"][] = "lic_driv";
$proto50["m_columns"][] = "type_lic";
$proto50["m_columns"][] = "prof";
$proto50["m_columns"][] = "col_prof";
$proto50["m_columns"][] = "num_prof";
$proto50["m_columns"][] = "nit";
$proto50["m_columns"][] = "on_off";
$proto50["m_columns"][] = "last_gra";
$proto50["m_columns"][] = "cole";
$proto50["m_columns"][] = "ciudad_de";
$proto50["m_columns"][] = "anyo_de";
$proto50["m_columns"][] = "title";
$proto50["m_columns"][] = "nro_libreta";
$proto50["m_columns"][] = "matricula";
$proto50["m_columns"][] = "anyo";
$proto50["m_columns"][] = "tipo_libreta";
$proto50["m_columns"][] = "nro_referencia1";
$proto50["m_columns"][] = "nro_referencia2";
$proto50["m_columns"][] = "es_estudiante";
$proto50["m_columns"][] = "nombre_carrera";
$proto50["m_columns"][] = "especialidad";
$proto50["m_columns"][] = "ultimo_anyo";
$proto50["m_columns"][] = "foto";
$proto50["m_columns"][] = "updated_at";
$proto50["m_columns"][] = "created_at";
$obj = new SQLTable($proto50);

$proto49["m_table"] = $obj;
$proto49["m_sql"] = "INNER JOIN funcionario ON t_planilla.id_func = funcionario.id_func";
$proto49["m_alias"] = "";
$proto49["m_srcTableName"] = "AFP-FUTURO";
$proto51=array();
$proto51["m_sql"] = "t_planilla.id_func = funcionario.id_func";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-FUTURO"
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "= funcionario.id_func";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

$proto49["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto49);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="AFP-FUTURO";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_AFP_FUTURO = createSqlQuery_AFP_FUTURO();


	
																		
	
$tdataAFP_FUTURO[".sqlquery"] = $queryData_AFP_FUTURO;

$tableEvents["AFP-FUTURO"] = new eventsBase;
$tdataAFP_FUTURO[".hasEvents"] = false;

?>