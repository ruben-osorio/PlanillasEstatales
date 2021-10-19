<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAFP_PREVISION = array();	
	$tdataAFP_PREVISION[".truncateText"] = true;
	$tdataAFP_PREVISION[".NumberOfChars"] = 80; 
	$tdataAFP_PREVISION[".ShortName"] = "AFP_PREVISION";
	$tdataAFP_PREVISION[".OwnerID"] = "";
	$tdataAFP_PREVISION[".OriginalTable"] = "t_planilla";

//	field labels
$fieldLabelsAFP_PREVISION = array();
$fieldToolTipsAFP_PREVISION = array();
$pageTitlesAFP_PREVISION = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsAFP_PREVISION["Spanish"] = array();
	$fieldToolTipsAFP_PREVISION["Spanish"] = array();
	$pageTitlesAFP_PREVISION["Spanish"] = array();
	$fieldLabelsAFP_PREVISION["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipsAFP_PREVISION["Spanish"]["id_func"] = "";
	$fieldLabelsAFP_PREVISION["Spanish"]["paterno"] = "Paterno";
	$fieldToolTipsAFP_PREVISION["Spanish"]["paterno"] = "";
	$fieldLabelsAFP_PREVISION["Spanish"]["materno"] = "Materno";
	$fieldToolTipsAFP_PREVISION["Spanish"]["materno"] = "";
	$fieldLabelsAFP_PREVISION["Spanish"]["nombres"] = "Nombres";
	$fieldToolTipsAFP_PREVISION["Spanish"]["nombres"] = "";
	$fieldLabelsAFP_PREVISION["Spanish"]["ci"] = "CI";
	$fieldToolTipsAFP_PREVISION["Spanish"]["ci"] = "";
	$fieldLabelsAFP_PREVISION["Spanish"]["exp"] = "Exp.";
	$fieldToolTipsAFP_PREVISION["Spanish"]["exp"] = "";
	$fieldLabelsAFP_PREVISION["Spanish"]["total_ganado"] = "TOTAL GANADO";
	$fieldToolTipsAFP_PREVISION["Spanish"]["total_ganado"] = "";
	$fieldLabelsAFP_PREVISION["Spanish"]["afp_10"] = "AFP 10%";
	$fieldToolTipsAFP_PREVISION["Spanish"]["afp_10"] = "";
	$fieldLabelsAFP_PREVISION["Spanish"]["afp_riesgo_1_71"] = "AFP.RIESGO 1.71%";
	$fieldToolTipsAFP_PREVISION["Spanish"]["afp_riesgo_1_71"] = "";
	$fieldLabelsAFP_PREVISION["Spanish"]["afp_05"] = "AFP. COM.0.5%";
	$fieldToolTipsAFP_PREVISION["Spanish"]["afp_05"] = "";
	$fieldLabelsAFP_PREVISION["Spanish"]["afp_ap_sol_0_5"] = "AFP AP. SOL 0.5%";
	$fieldToolTipsAFP_PREVISION["Spanish"]["afp_ap_sol_0_5"] = "";
	$fieldLabelsAFP_PREVISION["Spanish"]["ans_1"] = "ANS 1%";
	$fieldToolTipsAFP_PREVISION["Spanish"]["ans_1"] = "";
	$fieldLabelsAFP_PREVISION["Spanish"]["seguro_pat_10"] = "SEGURO PAT. 10%";
	$fieldToolTipsAFP_PREVISION["Spanish"]["seguro_pat_10"] = "";
	$fieldLabelsAFP_PREVISION["Spanish"]["riesgo_pat_171"] = "RIESGO PAT. 1.71%";
	$fieldToolTipsAFP_PREVISION["Spanish"]["riesgo_pat_171"] = "";
	$fieldLabelsAFP_PREVISION["Spanish"]["pro_vivienda_pat_2"] = "PRO VIVIENDA PAT. 2%";
	$fieldToolTipsAFP_PREVISION["Spanish"]["pro_vivienda_pat_2"] = "";
	$fieldLabelsAFP_PREVISION["Spanish"]["ap_pat_sol_3"] = "AP.PAT.SOL 3%";
	$fieldToolTipsAFP_PREVISION["Spanish"]["ap_pat_sol_3"] = "";
	$fieldLabelsAFP_PREVISION["Spanish"]["sub_total"] = "SUB TOTAL";
	$fieldToolTipsAFP_PREVISION["Spanish"]["sub_total"] = "";
	$fieldLabelsAFP_PREVISION["Spanish"]["afp"] = "Afp";
	$fieldToolTipsAFP_PREVISION["Spanish"]["afp"] = "";
	if (count($fieldToolTipsAFP_PREVISION["Spanish"]))
		$tdataAFP_PREVISION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAFP_PREVISION[""] = array();
	$fieldToolTipsAFP_PREVISION[""] = array();
	$pageTitlesAFP_PREVISION[""] = array();
	$fieldLabelsAFP_PREVISION[""]["id_func"] = "Id Func";
	$fieldToolTipsAFP_PREVISION[""]["id_func"] = "";
	$fieldLabelsAFP_PREVISION[""]["paterno"] = "Paterno";
	$fieldToolTipsAFP_PREVISION[""]["paterno"] = "";
	$fieldLabelsAFP_PREVISION[""]["materno"] = "Materno";
	$fieldToolTipsAFP_PREVISION[""]["materno"] = "";
	$fieldLabelsAFP_PREVISION[""]["nombres"] = "Nombres";
	$fieldToolTipsAFP_PREVISION[""]["nombres"] = "";
	$fieldLabelsAFP_PREVISION[""]["ci"] = "Ci";
	$fieldToolTipsAFP_PREVISION[""]["ci"] = "";
	$fieldLabelsAFP_PREVISION[""]["exp"] = "Exp";
	$fieldToolTipsAFP_PREVISION[""]["exp"] = "";
	$fieldLabelsAFP_PREVISION[""]["total_ganado"] = "Total Ganado";
	$fieldToolTipsAFP_PREVISION[""]["total_ganado"] = "";
	$fieldLabelsAFP_PREVISION[""]["afp_10"] = "Afp 10";
	$fieldToolTipsAFP_PREVISION[""]["afp_10"] = "";
	$fieldLabelsAFP_PREVISION[""]["afp_riesgo_1_71"] = "Afp Riesgo 1 71";
	$fieldToolTipsAFP_PREVISION[""]["afp_riesgo_1_71"] = "";
	$fieldLabelsAFP_PREVISION[""]["afp_05"] = "Afp 05";
	$fieldToolTipsAFP_PREVISION[""]["afp_05"] = "";
	$fieldLabelsAFP_PREVISION[""]["afp_ap_sol_0_5"] = "Afp Ap Sol 0 5";
	$fieldToolTipsAFP_PREVISION[""]["afp_ap_sol_0_5"] = "";
	$fieldLabelsAFP_PREVISION[""]["ans_1"] = "Ans 1";
	$fieldToolTipsAFP_PREVISION[""]["ans_1"] = "";
	$fieldLabelsAFP_PREVISION[""]["seguro_pat_10"] = "Seguro Pat 10";
	$fieldToolTipsAFP_PREVISION[""]["seguro_pat_10"] = "";
	$fieldLabelsAFP_PREVISION[""]["riesgo_pat_171"] = "Riesgo Pat 171";
	$fieldToolTipsAFP_PREVISION[""]["riesgo_pat_171"] = "";
	$fieldLabelsAFP_PREVISION[""]["pro_vivienda_pat_2"] = "Pro Vivienda Pat 2";
	$fieldToolTipsAFP_PREVISION[""]["pro_vivienda_pat_2"] = "";
	$fieldLabelsAFP_PREVISION[""]["ap_pat_sol_3"] = "Ap Pat Sol 3";
	$fieldToolTipsAFP_PREVISION[""]["ap_pat_sol_3"] = "";
	$fieldLabelsAFP_PREVISION[""]["sub_total"] = "Sub Total";
	$fieldToolTipsAFP_PREVISION[""]["sub_total"] = "";
	$fieldLabelsAFP_PREVISION[""]["afp"] = "Afp";
	$fieldToolTipsAFP_PREVISION[""]["afp"] = "";
	if (count($fieldToolTipsAFP_PREVISION[""]))
		$tdataAFP_PREVISION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAFP_PREVISION["English"] = array();
	$fieldToolTipsAFP_PREVISION["English"] = array();
	$pageTitlesAFP_PREVISION["English"] = array();
	$fieldLabelsAFP_PREVISION["English"]["id_func"] = "Id Func";
	$fieldToolTipsAFP_PREVISION["English"]["id_func"] = "";
	$fieldLabelsAFP_PREVISION["English"]["paterno"] = "Paterno";
	$fieldToolTipsAFP_PREVISION["English"]["paterno"] = "";
	$fieldLabelsAFP_PREVISION["English"]["materno"] = "Materno";
	$fieldToolTipsAFP_PREVISION["English"]["materno"] = "";
	$fieldLabelsAFP_PREVISION["English"]["nombres"] = "Nombres";
	$fieldToolTipsAFP_PREVISION["English"]["nombres"] = "";
	$fieldLabelsAFP_PREVISION["English"]["ci"] = "Ci";
	$fieldToolTipsAFP_PREVISION["English"]["ci"] = "";
	$fieldLabelsAFP_PREVISION["English"]["exp"] = "Exp";
	$fieldToolTipsAFP_PREVISION["English"]["exp"] = "";
	$fieldLabelsAFP_PREVISION["English"]["total_ganado"] = "Total Ganado";
	$fieldToolTipsAFP_PREVISION["English"]["total_ganado"] = "";
	$fieldLabelsAFP_PREVISION["English"]["afp_10"] = "Afp 10";
	$fieldToolTipsAFP_PREVISION["English"]["afp_10"] = "";
	$fieldLabelsAFP_PREVISION["English"]["afp_riesgo_1_71"] = "Afp Riesgo 1 71";
	$fieldToolTipsAFP_PREVISION["English"]["afp_riesgo_1_71"] = "";
	$fieldLabelsAFP_PREVISION["English"]["afp_05"] = "Afp 05";
	$fieldToolTipsAFP_PREVISION["English"]["afp_05"] = "";
	$fieldLabelsAFP_PREVISION["English"]["afp_ap_sol_0_5"] = "Afp Ap Sol 0 5";
	$fieldToolTipsAFP_PREVISION["English"]["afp_ap_sol_0_5"] = "";
	$fieldLabelsAFP_PREVISION["English"]["ans_1"] = "Ans 1";
	$fieldToolTipsAFP_PREVISION["English"]["ans_1"] = "";
	$fieldLabelsAFP_PREVISION["English"]["seguro_pat_10"] = "Seguro Pat 10";
	$fieldToolTipsAFP_PREVISION["English"]["seguro_pat_10"] = "";
	$fieldLabelsAFP_PREVISION["English"]["riesgo_pat_171"] = "Riesgo Pat 171";
	$fieldToolTipsAFP_PREVISION["English"]["riesgo_pat_171"] = "";
	$fieldLabelsAFP_PREVISION["English"]["pro_vivienda_pat_2"] = "Pro Vivienda Pat 2";
	$fieldToolTipsAFP_PREVISION["English"]["pro_vivienda_pat_2"] = "";
	$fieldLabelsAFP_PREVISION["English"]["ap_pat_sol_3"] = "Ap Pat Sol 3";
	$fieldToolTipsAFP_PREVISION["English"]["ap_pat_sol_3"] = "";
	$fieldLabelsAFP_PREVISION["English"]["sub_total"] = "Sub Total";
	$fieldToolTipsAFP_PREVISION["English"]["sub_total"] = "";
	$fieldLabelsAFP_PREVISION["English"]["afp"] = "Afp";
	$fieldToolTipsAFP_PREVISION["English"]["afp"] = "";
	if (count($fieldToolTipsAFP_PREVISION["English"]))
		$tdataAFP_PREVISION[".isUseToolTips"] = true;
}
	
	
	$tdataAFP_PREVISION[".NCSearch"] = true;



$tdataAFP_PREVISION[".shortTableName"] = "AFP_PREVISION";
$tdataAFP_PREVISION[".nSecOptions"] = 0;
$tdataAFP_PREVISION[".recsPerRowList"] = 1;
$tdataAFP_PREVISION[".recsPerRowPrint"] = 1;
$tdataAFP_PREVISION[".mainTableOwnerID"] = "";
$tdataAFP_PREVISION[".moveNext"] = 1;
$tdataAFP_PREVISION[".entityType"] = 2;

$tdataAFP_PREVISION[".strOriginalTableName"] = "t_planilla";




$tdataAFP_PREVISION[".showAddInPopup"] = false;

$tdataAFP_PREVISION[".showEditInPopup"] = false;

$tdataAFP_PREVISION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAFP_PREVISION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAFP_PREVISION[".fieldsForRegister"] = array();

$tdataAFP_PREVISION[".listAjax"] = false;

	$tdataAFP_PREVISION[".audit"] = false;

	$tdataAFP_PREVISION[".locking"] = false;



$tdataAFP_PREVISION[".list"] = true;



$tdataAFP_PREVISION[".exportTo"] = true;

$tdataAFP_PREVISION[".printFriendly"] = true;


$tdataAFP_PREVISION[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataAFP_PREVISION[".searchSaving"] = false;
//

$tdataAFP_PREVISION[".showSearchPanel"] = true;
		$tdataAFP_PREVISION[".flexibleSearch"] = true;		

if (isMobile())
	$tdataAFP_PREVISION[".isUseAjaxSuggest"] = false;
else 
	$tdataAFP_PREVISION[".isUseAjaxSuggest"] = true;




$tdataAFP_PREVISION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAFP_PREVISION[".isUseTimeForSearch"] = false;





$tdataAFP_PREVISION[".allSearchFields"] = array();
$tdataAFP_PREVISION[".filterFields"] = array();
$tdataAFP_PREVISION[".requiredSearchFields"] = array();

$tdataAFP_PREVISION[".allSearchFields"][] = "id_func";
	$tdataAFP_PREVISION[".allSearchFields"][] = "paterno";
	$tdataAFP_PREVISION[".allSearchFields"][] = "materno";
	$tdataAFP_PREVISION[".allSearchFields"][] = "nombres";
	$tdataAFP_PREVISION[".allSearchFields"][] = "ci";
	$tdataAFP_PREVISION[".allSearchFields"][] = "exp";
	$tdataAFP_PREVISION[".allSearchFields"][] = "total_ganado";
	$tdataAFP_PREVISION[".allSearchFields"][] = "afp_10";
	$tdataAFP_PREVISION[".allSearchFields"][] = "afp_riesgo_1_71";
	$tdataAFP_PREVISION[".allSearchFields"][] = "afp_05";
	$tdataAFP_PREVISION[".allSearchFields"][] = "afp_ap_sol_0_5";
	$tdataAFP_PREVISION[".allSearchFields"][] = "ans_1";
	$tdataAFP_PREVISION[".allSearchFields"][] = "seguro_pat_10";
	$tdataAFP_PREVISION[".allSearchFields"][] = "riesgo_pat_171";
	$tdataAFP_PREVISION[".allSearchFields"][] = "pro_vivienda_pat_2";
	$tdataAFP_PREVISION[".allSearchFields"][] = "ap_pat_sol_3";
	$tdataAFP_PREVISION[".allSearchFields"][] = "sub_total";
	$tdataAFP_PREVISION[".allSearchFields"][] = "afp";
	

$tdataAFP_PREVISION[".googleLikeFields"] = array();
$tdataAFP_PREVISION[".googleLikeFields"][] = "id_func";
$tdataAFP_PREVISION[".googleLikeFields"][] = "paterno";
$tdataAFP_PREVISION[".googleLikeFields"][] = "materno";
$tdataAFP_PREVISION[".googleLikeFields"][] = "nombres";
$tdataAFP_PREVISION[".googleLikeFields"][] = "ci";
$tdataAFP_PREVISION[".googleLikeFields"][] = "exp";
$tdataAFP_PREVISION[".googleLikeFields"][] = "total_ganado";
$tdataAFP_PREVISION[".googleLikeFields"][] = "afp_10";
$tdataAFP_PREVISION[".googleLikeFields"][] = "afp_riesgo_1_71";
$tdataAFP_PREVISION[".googleLikeFields"][] = "afp_05";
$tdataAFP_PREVISION[".googleLikeFields"][] = "afp_ap_sol_0_5";
$tdataAFP_PREVISION[".googleLikeFields"][] = "ans_1";
$tdataAFP_PREVISION[".googleLikeFields"][] = "seguro_pat_10";
$tdataAFP_PREVISION[".googleLikeFields"][] = "riesgo_pat_171";
$tdataAFP_PREVISION[".googleLikeFields"][] = "pro_vivienda_pat_2";
$tdataAFP_PREVISION[".googleLikeFields"][] = "ap_pat_sol_3";
$tdataAFP_PREVISION[".googleLikeFields"][] = "sub_total";
$tdataAFP_PREVISION[".googleLikeFields"][] = "afp";


$tdataAFP_PREVISION[".advSearchFields"] = array();
$tdataAFP_PREVISION[".advSearchFields"][] = "id_func";
$tdataAFP_PREVISION[".advSearchFields"][] = "paterno";
$tdataAFP_PREVISION[".advSearchFields"][] = "materno";
$tdataAFP_PREVISION[".advSearchFields"][] = "nombres";
$tdataAFP_PREVISION[".advSearchFields"][] = "ci";
$tdataAFP_PREVISION[".advSearchFields"][] = "exp";
$tdataAFP_PREVISION[".advSearchFields"][] = "total_ganado";
$tdataAFP_PREVISION[".advSearchFields"][] = "afp_10";
$tdataAFP_PREVISION[".advSearchFields"][] = "afp_riesgo_1_71";
$tdataAFP_PREVISION[".advSearchFields"][] = "afp_05";
$tdataAFP_PREVISION[".advSearchFields"][] = "afp_ap_sol_0_5";
$tdataAFP_PREVISION[".advSearchFields"][] = "ans_1";
$tdataAFP_PREVISION[".advSearchFields"][] = "seguro_pat_10";
$tdataAFP_PREVISION[".advSearchFields"][] = "riesgo_pat_171";
$tdataAFP_PREVISION[".advSearchFields"][] = "pro_vivienda_pat_2";
$tdataAFP_PREVISION[".advSearchFields"][] = "ap_pat_sol_3";
$tdataAFP_PREVISION[".advSearchFields"][] = "sub_total";
$tdataAFP_PREVISION[".advSearchFields"][] = "afp";

$tdataAFP_PREVISION[".tableType"] = "report";

$tdataAFP_PREVISION[".printerPageOrientation"] = 0;
$tdataAFP_PREVISION[".nPrinterPageScale"] = 100;

$tdataAFP_PREVISION[".nPrinterSplitRecords"] = 40;

$tdataAFP_PREVISION[".nPrinterPDFSplitRecords"] = 40;



$tdataAFP_PREVISION[".geocodingEnabled"] = false;

//report settings
$tdataAFP_PREVISION[".printReportLayout"] = 6;	

$tdataAFP_PREVISION[".reportPrintPartitionType"] = 1;	
$tdataAFP_PREVISION[".reportPrintGroupsPerPage"] = 40;	
	$tdataAFP_PREVISION[".reportPrintPDFGroupsPerPage"] = 40;
$tdataAFP_PREVISION[".lowGroup"] = 0;



$tdataAFP_PREVISION[".pageSize"] = 20;	


$tdataAFP_PREVISION[".isExistTotalFields"] = true;




$tdataAFP_PREVISION[".repShowDet"] = true;

$tdataAFP_PREVISION[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf
$tdataAFP_PREVISION[".isPrinterPagePDF"] = true;
$tdataAFP_PREVISION[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAFP_PREVISION[".strOrderBy"] = $tstrOrderBy;

$tdataAFP_PREVISION[".orderindexes"] = array();

$tdataAFP_PREVISION[".sqlHead"] = "SELECT t_planilla.id_func,  t_planilla.paterno,  t_planilla.materno,  t_planilla.nombres,  t_planilla.ci,  t_planilla.exp,  t_planilla.total_ganado,  t_planilla.afp_10,  t_planilla.afp_riesgo_1_71,  t_planilla.afp_05,  t_planilla.afp_ap_sol_0_5,  t_planilla.ans_1,  t_descuentos.seguro_pat_10,  t_descuentos.riesgo_pat_171,  t_descuentos.pro_vivienda_pat_2,  t_descuentos.ap_pat_sol_3,  t_descuentos.sub_total,  funcionario.afp";
$tdataAFP_PREVISION[".sqlFrom"] = "FROM t_planilla  INNER JOIN t_descuentos ON t_planilla.id_func = t_descuentos.id_func  INNER JOIN funcionario ON t_planilla.id_func = funcionario.id_func";
$tdataAFP_PREVISION[".sqlWhereExpr"] = "funcionario.afp =\"PREVISION\"";
$tdataAFP_PREVISION[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAFP_PREVISION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAFP_PREVISION[".arrGroupsPerPage"] = $arrGPP;

$tdataAFP_PREVISION[".highlightSearchResults"] = true;

$tableKeysAFP_PREVISION = array();
$tdataAFP_PREVISION[".Keys"] = $tableKeysAFP_PREVISION;

$tdataAFP_PREVISION[".listFields"] = array();
$tdataAFP_PREVISION[".listFields"][] = "id_func";
$tdataAFP_PREVISION[".listFields"][] = "paterno";
$tdataAFP_PREVISION[".listFields"][] = "materno";
$tdataAFP_PREVISION[".listFields"][] = "nombres";
$tdataAFP_PREVISION[".listFields"][] = "ci";
$tdataAFP_PREVISION[".listFields"][] = "exp";
$tdataAFP_PREVISION[".listFields"][] = "total_ganado";
$tdataAFP_PREVISION[".listFields"][] = "afp_10";
$tdataAFP_PREVISION[".listFields"][] = "afp_riesgo_1_71";
$tdataAFP_PREVISION[".listFields"][] = "afp_05";
$tdataAFP_PREVISION[".listFields"][] = "afp_ap_sol_0_5";
$tdataAFP_PREVISION[".listFields"][] = "ans_1";
$tdataAFP_PREVISION[".listFields"][] = "seguro_pat_10";
$tdataAFP_PREVISION[".listFields"][] = "riesgo_pat_171";
$tdataAFP_PREVISION[".listFields"][] = "pro_vivienda_pat_2";
$tdataAFP_PREVISION[".listFields"][] = "ap_pat_sol_3";
$tdataAFP_PREVISION[".listFields"][] = "sub_total";
$tdataAFP_PREVISION[".listFields"][] = "afp";

$tdataAFP_PREVISION[".hideMobileList"] = array();


$tdataAFP_PREVISION[".viewFields"] = array();
$tdataAFP_PREVISION[".viewFields"][] = "id_func";
$tdataAFP_PREVISION[".viewFields"][] = "paterno";
$tdataAFP_PREVISION[".viewFields"][] = "materno";
$tdataAFP_PREVISION[".viewFields"][] = "nombres";
$tdataAFP_PREVISION[".viewFields"][] = "ci";
$tdataAFP_PREVISION[".viewFields"][] = "exp";
$tdataAFP_PREVISION[".viewFields"][] = "total_ganado";
$tdataAFP_PREVISION[".viewFields"][] = "afp_10";
$tdataAFP_PREVISION[".viewFields"][] = "afp_riesgo_1_71";
$tdataAFP_PREVISION[".viewFields"][] = "afp_05";
$tdataAFP_PREVISION[".viewFields"][] = "afp_ap_sol_0_5";
$tdataAFP_PREVISION[".viewFields"][] = "ans_1";
$tdataAFP_PREVISION[".viewFields"][] = "seguro_pat_10";
$tdataAFP_PREVISION[".viewFields"][] = "riesgo_pat_171";
$tdataAFP_PREVISION[".viewFields"][] = "pro_vivienda_pat_2";
$tdataAFP_PREVISION[".viewFields"][] = "ap_pat_sol_3";
$tdataAFP_PREVISION[".viewFields"][] = "sub_total";
$tdataAFP_PREVISION[".viewFields"][] = "afp";

$tdataAFP_PREVISION[".addFields"] = array();
$tdataAFP_PREVISION[".addFields"][] = "id_func";
$tdataAFP_PREVISION[".addFields"][] = "paterno";
$tdataAFP_PREVISION[".addFields"][] = "materno";
$tdataAFP_PREVISION[".addFields"][] = "nombres";
$tdataAFP_PREVISION[".addFields"][] = "ci";
$tdataAFP_PREVISION[".addFields"][] = "exp";
$tdataAFP_PREVISION[".addFields"][] = "total_ganado";
$tdataAFP_PREVISION[".addFields"][] = "afp_10";
$tdataAFP_PREVISION[".addFields"][] = "afp_riesgo_1_71";
$tdataAFP_PREVISION[".addFields"][] = "afp_05";
$tdataAFP_PREVISION[".addFields"][] = "afp_ap_sol_0_5";
$tdataAFP_PREVISION[".addFields"][] = "ans_1";

$tdataAFP_PREVISION[".masterListFields"] = array();
$tdataAFP_PREVISION[".masterListFields"][] = "id_func";
$tdataAFP_PREVISION[".masterListFields"][] = "paterno";
$tdataAFP_PREVISION[".masterListFields"][] = "materno";
$tdataAFP_PREVISION[".masterListFields"][] = "nombres";
$tdataAFP_PREVISION[".masterListFields"][] = "ci";
$tdataAFP_PREVISION[".masterListFields"][] = "exp";
$tdataAFP_PREVISION[".masterListFields"][] = "total_ganado";
$tdataAFP_PREVISION[".masterListFields"][] = "afp_10";
$tdataAFP_PREVISION[".masterListFields"][] = "afp_riesgo_1_71";
$tdataAFP_PREVISION[".masterListFields"][] = "afp_05";
$tdataAFP_PREVISION[".masterListFields"][] = "afp_ap_sol_0_5";
$tdataAFP_PREVISION[".masterListFields"][] = "ans_1";
$tdataAFP_PREVISION[".masterListFields"][] = "seguro_pat_10";
$tdataAFP_PREVISION[".masterListFields"][] = "riesgo_pat_171";
$tdataAFP_PREVISION[".masterListFields"][] = "pro_vivienda_pat_2";
$tdataAFP_PREVISION[".masterListFields"][] = "ap_pat_sol_3";
$tdataAFP_PREVISION[".masterListFields"][] = "sub_total";
$tdataAFP_PREVISION[".masterListFields"][] = "afp";

$tdataAFP_PREVISION[".inlineAddFields"] = array();
$tdataAFP_PREVISION[".inlineAddFields"][] = "id_func";
$tdataAFP_PREVISION[".inlineAddFields"][] = "paterno";
$tdataAFP_PREVISION[".inlineAddFields"][] = "materno";
$tdataAFP_PREVISION[".inlineAddFields"][] = "nombres";
$tdataAFP_PREVISION[".inlineAddFields"][] = "ci";
$tdataAFP_PREVISION[".inlineAddFields"][] = "exp";
$tdataAFP_PREVISION[".inlineAddFields"][] = "total_ganado";
$tdataAFP_PREVISION[".inlineAddFields"][] = "afp_10";
$tdataAFP_PREVISION[".inlineAddFields"][] = "afp_riesgo_1_71";
$tdataAFP_PREVISION[".inlineAddFields"][] = "afp_05";
$tdataAFP_PREVISION[".inlineAddFields"][] = "afp_ap_sol_0_5";
$tdataAFP_PREVISION[".inlineAddFields"][] = "ans_1";

$tdataAFP_PREVISION[".editFields"] = array();
$tdataAFP_PREVISION[".editFields"][] = "id_func";
$tdataAFP_PREVISION[".editFields"][] = "paterno";
$tdataAFP_PREVISION[".editFields"][] = "materno";
$tdataAFP_PREVISION[".editFields"][] = "nombres";
$tdataAFP_PREVISION[".editFields"][] = "ci";
$tdataAFP_PREVISION[".editFields"][] = "exp";
$tdataAFP_PREVISION[".editFields"][] = "total_ganado";
$tdataAFP_PREVISION[".editFields"][] = "afp_10";
$tdataAFP_PREVISION[".editFields"][] = "afp_riesgo_1_71";
$tdataAFP_PREVISION[".editFields"][] = "afp_05";
$tdataAFP_PREVISION[".editFields"][] = "afp_ap_sol_0_5";
$tdataAFP_PREVISION[".editFields"][] = "ans_1";

$tdataAFP_PREVISION[".inlineEditFields"] = array();
$tdataAFP_PREVISION[".inlineEditFields"][] = "id_func";
$tdataAFP_PREVISION[".inlineEditFields"][] = "paterno";
$tdataAFP_PREVISION[".inlineEditFields"][] = "materno";
$tdataAFP_PREVISION[".inlineEditFields"][] = "nombres";
$tdataAFP_PREVISION[".inlineEditFields"][] = "ci";
$tdataAFP_PREVISION[".inlineEditFields"][] = "exp";
$tdataAFP_PREVISION[".inlineEditFields"][] = "total_ganado";
$tdataAFP_PREVISION[".inlineEditFields"][] = "afp_10";
$tdataAFP_PREVISION[".inlineEditFields"][] = "afp_riesgo_1_71";
$tdataAFP_PREVISION[".inlineEditFields"][] = "afp_05";
$tdataAFP_PREVISION[".inlineEditFields"][] = "afp_ap_sol_0_5";
$tdataAFP_PREVISION[".inlineEditFields"][] = "ans_1";

$tdataAFP_PREVISION[".exportFields"] = array();
$tdataAFP_PREVISION[".exportFields"][] = "id_func";
$tdataAFP_PREVISION[".exportFields"][] = "paterno";
$tdataAFP_PREVISION[".exportFields"][] = "materno";
$tdataAFP_PREVISION[".exportFields"][] = "nombres";
$tdataAFP_PREVISION[".exportFields"][] = "ci";
$tdataAFP_PREVISION[".exportFields"][] = "exp";
$tdataAFP_PREVISION[".exportFields"][] = "total_ganado";
$tdataAFP_PREVISION[".exportFields"][] = "afp_10";
$tdataAFP_PREVISION[".exportFields"][] = "afp_riesgo_1_71";
$tdataAFP_PREVISION[".exportFields"][] = "afp_05";
$tdataAFP_PREVISION[".exportFields"][] = "afp_ap_sol_0_5";
$tdataAFP_PREVISION[".exportFields"][] = "ans_1";
$tdataAFP_PREVISION[".exportFields"][] = "seguro_pat_10";
$tdataAFP_PREVISION[".exportFields"][] = "riesgo_pat_171";
$tdataAFP_PREVISION[".exportFields"][] = "pro_vivienda_pat_2";
$tdataAFP_PREVISION[".exportFields"][] = "ap_pat_sol_3";
$tdataAFP_PREVISION[".exportFields"][] = "sub_total";
$tdataAFP_PREVISION[".exportFields"][] = "afp";

$tdataAFP_PREVISION[".importFields"] = array();
$tdataAFP_PREVISION[".importFields"][] = "id_func";
$tdataAFP_PREVISION[".importFields"][] = "paterno";
$tdataAFP_PREVISION[".importFields"][] = "materno";
$tdataAFP_PREVISION[".importFields"][] = "nombres";
$tdataAFP_PREVISION[".importFields"][] = "ci";
$tdataAFP_PREVISION[".importFields"][] = "exp";
$tdataAFP_PREVISION[".importFields"][] = "total_ganado";
$tdataAFP_PREVISION[".importFields"][] = "afp_10";
$tdataAFP_PREVISION[".importFields"][] = "afp_riesgo_1_71";
$tdataAFP_PREVISION[".importFields"][] = "afp_05";
$tdataAFP_PREVISION[".importFields"][] = "afp_ap_sol_0_5";
$tdataAFP_PREVISION[".importFields"][] = "ans_1";
$tdataAFP_PREVISION[".importFields"][] = "seguro_pat_10";
$tdataAFP_PREVISION[".importFields"][] = "riesgo_pat_171";
$tdataAFP_PREVISION[".importFields"][] = "pro_vivienda_pat_2";
$tdataAFP_PREVISION[".importFields"][] = "ap_pat_sol_3";
$tdataAFP_PREVISION[".importFields"][] = "sub_total";
$tdataAFP_PREVISION[".importFields"][] = "afp";

$tdataAFP_PREVISION[".printFields"] = array();
$tdataAFP_PREVISION[".printFields"][] = "id_func";
$tdataAFP_PREVISION[".printFields"][] = "paterno";
$tdataAFP_PREVISION[".printFields"][] = "materno";
$tdataAFP_PREVISION[".printFields"][] = "nombres";
$tdataAFP_PREVISION[".printFields"][] = "ci";
$tdataAFP_PREVISION[".printFields"][] = "exp";
$tdataAFP_PREVISION[".printFields"][] = "total_ganado";
$tdataAFP_PREVISION[".printFields"][] = "afp_10";
$tdataAFP_PREVISION[".printFields"][] = "afp_riesgo_1_71";
$tdataAFP_PREVISION[".printFields"][] = "afp_05";
$tdataAFP_PREVISION[".printFields"][] = "afp_ap_sol_0_5";
$tdataAFP_PREVISION[".printFields"][] = "ans_1";
$tdataAFP_PREVISION[".printFields"][] = "seguro_pat_10";
$tdataAFP_PREVISION[".printFields"][] = "riesgo_pat_171";
$tdataAFP_PREVISION[".printFields"][] = "pro_vivienda_pat_2";
$tdataAFP_PREVISION[".printFields"][] = "ap_pat_sol_3";
$tdataAFP_PREVISION[".printFields"][] = "sub_total";
$tdataAFP_PREVISION[".printFields"][] = "afp";

//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_PREVISION","id_func"); 
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

	

	
	$tdataAFP_PREVISION["id_func"] = $fdata;
//	paterno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "paterno";
	$fdata["GoodName"] = "paterno";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_PREVISION","paterno"); 
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

	

	
	$tdataAFP_PREVISION["paterno"] = $fdata;
//	materno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "materno";
	$fdata["GoodName"] = "materno";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_PREVISION","materno"); 
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

	

	
	$tdataAFP_PREVISION["materno"] = $fdata;
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_PREVISION","nombres"); 
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

	

	
	$tdataAFP_PREVISION["nombres"] = $fdata;
//	ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ci";
	$fdata["GoodName"] = "ci";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_PREVISION","ci"); 
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

	

	
	$tdataAFP_PREVISION["ci"] = $fdata;
//	exp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "exp";
	$fdata["GoodName"] = "exp";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_PREVISION","exp"); 
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

	

	
	$tdataAFP_PREVISION["exp"] = $fdata;
//	total_ganado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "total_ganado";
	$fdata["GoodName"] = "total_ganado";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_PREVISION","total_ganado"); 
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

	

	
	$tdataAFP_PREVISION["total_ganado"] = $fdata;
//	afp_10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "afp_10";
	$fdata["GoodName"] = "afp_10";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_PREVISION","afp_10"); 
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

	

	
	$tdataAFP_PREVISION["afp_10"] = $fdata;
//	afp_riesgo_1_71
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "afp_riesgo_1_71";
	$fdata["GoodName"] = "afp_riesgo_1_71";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_PREVISION","afp_riesgo_1_71"); 
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

	

	
	$tdataAFP_PREVISION["afp_riesgo_1_71"] = $fdata;
//	afp_05
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "afp_05";
	$fdata["GoodName"] = "afp_05";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_PREVISION","afp_05"); 
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

	

	
	$tdataAFP_PREVISION["afp_05"] = $fdata;
//	afp_ap_sol_0_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "afp_ap_sol_0_5";
	$fdata["GoodName"] = "afp_ap_sol_0_5";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_PREVISION","afp_ap_sol_0_5"); 
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

	

	
	$tdataAFP_PREVISION["afp_ap_sol_0_5"] = $fdata;
//	ans_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ans_1";
	$fdata["GoodName"] = "ans_1";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("AFP_PREVISION","ans_1"); 
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

	

	
	$tdataAFP_PREVISION["ans_1"] = $fdata;
//	seguro_pat_10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "seguro_pat_10";
	$fdata["GoodName"] = "seguro_pat_10";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("AFP_PREVISION","seguro_pat_10"); 
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

	

	
	$tdataAFP_PREVISION["seguro_pat_10"] = $fdata;
//	riesgo_pat_171
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "riesgo_pat_171";
	$fdata["GoodName"] = "riesgo_pat_171";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("AFP_PREVISION","riesgo_pat_171"); 
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

	

	
	$tdataAFP_PREVISION["riesgo_pat_171"] = $fdata;
//	pro_vivienda_pat_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "pro_vivienda_pat_2";
	$fdata["GoodName"] = "pro_vivienda_pat_2";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("AFP_PREVISION","pro_vivienda_pat_2"); 
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

	

	
	$tdataAFP_PREVISION["pro_vivienda_pat_2"] = $fdata;
//	ap_pat_sol_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ap_pat_sol_3";
	$fdata["GoodName"] = "ap_pat_sol_3";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("AFP_PREVISION","ap_pat_sol_3"); 
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

	

	
	$tdataAFP_PREVISION["ap_pat_sol_3"] = $fdata;
//	sub_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "sub_total";
	$fdata["GoodName"] = "sub_total";
	$fdata["ownerTable"] = "t_descuentos";
	$fdata["Label"] = GetFieldLabel("AFP_PREVISION","sub_total"); 
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

	

	
	$tdataAFP_PREVISION["sub_total"] = $fdata;
//	afp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "afp";
	$fdata["GoodName"] = "afp";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("AFP_PREVISION","afp"); 
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

	

	
	$tdataAFP_PREVISION["afp"] = $fdata;

	
$tables_data["AFP-PREVISION"]=&$tdataAFP_PREVISION;
$field_labels["AFP_PREVISION"] = &$fieldLabelsAFP_PREVISION;
$fieldToolTips["AFP-PREVISION"] = &$fieldToolTipsAFP_PREVISION;
$page_titles["AFP_PREVISION"] = &$pageTitlesAFP_PREVISION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["AFP-PREVISION"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["AFP-PREVISION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_AFP_PREVISION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_planilla.id_func,  t_planilla.paterno,  t_planilla.materno,  t_planilla.nombres,  t_planilla.ci,  t_planilla.exp,  t_planilla.total_ganado,  t_planilla.afp_10,  t_planilla.afp_riesgo_1_71,  t_planilla.afp_05,  t_planilla.afp_ap_sol_0_5,  t_planilla.ans_1,  t_descuentos.seguro_pat_10,  t_descuentos.riesgo_pat_171,  t_descuentos.pro_vivienda_pat_2,  t_descuentos.ap_pat_sol_3,  t_descuentos.sub_total,  funcionario.afp";
$proto0["m_strFrom"] = "FROM t_planilla  INNER JOIN t_descuentos ON t_planilla.id_func = t_descuentos.id_func  INNER JOIN funcionario ON t_planilla.id_func = funcionario.id_func";
$proto0["m_strWhere"] = "funcionario.afp =\"PREVISION\"";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "funcionario.afp =\"PREVISION\"";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "afp",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "AFP-PREVISION"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=\"PREVISION\"";
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
	"m_srcTableName" => "AFP-PREVISION"
));

$proto5["m_sql"] = "t_planilla.id_func";
$proto5["m_srcTableName"] = "AFP-PREVISION";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "paterno",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-PREVISION"
));

$proto7["m_sql"] = "t_planilla.paterno";
$proto7["m_srcTableName"] = "AFP-PREVISION";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "materno",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-PREVISION"
));

$proto9["m_sql"] = "t_planilla.materno";
$proto9["m_srcTableName"] = "AFP-PREVISION";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-PREVISION"
));

$proto11["m_sql"] = "t_planilla.nombres";
$proto11["m_srcTableName"] = "AFP-PREVISION";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "ci",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-PREVISION"
));

$proto13["m_sql"] = "t_planilla.ci";
$proto13["m_srcTableName"] = "AFP-PREVISION";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "exp",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-PREVISION"
));

$proto15["m_sql"] = "t_planilla.exp";
$proto15["m_srcTableName"] = "AFP-PREVISION";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "total_ganado",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-PREVISION"
));

$proto17["m_sql"] = "t_planilla.total_ganado";
$proto17["m_srcTableName"] = "AFP-PREVISION";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "afp_10",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-PREVISION"
));

$proto19["m_sql"] = "t_planilla.afp_10";
$proto19["m_srcTableName"] = "AFP-PREVISION";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "afp_riesgo_1_71",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-PREVISION"
));

$proto21["m_sql"] = "t_planilla.afp_riesgo_1_71";
$proto21["m_srcTableName"] = "AFP-PREVISION";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "afp_05",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-PREVISION"
));

$proto23["m_sql"] = "t_planilla.afp_05";
$proto23["m_srcTableName"] = "AFP-PREVISION";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "afp_ap_sol_0_5",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-PREVISION"
));

$proto25["m_sql"] = "t_planilla.afp_ap_sol_0_5";
$proto25["m_srcTableName"] = "AFP-PREVISION";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "ans_1",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-PREVISION"
));

$proto27["m_sql"] = "t_planilla.ans_1";
$proto27["m_srcTableName"] = "AFP-PREVISION";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "seguro_pat_10",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "AFP-PREVISION"
));

$proto29["m_sql"] = "t_descuentos.seguro_pat_10";
$proto29["m_srcTableName"] = "AFP-PREVISION";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "riesgo_pat_171",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "AFP-PREVISION"
));

$proto31["m_sql"] = "t_descuentos.riesgo_pat_171";
$proto31["m_srcTableName"] = "AFP-PREVISION";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "pro_vivienda_pat_2",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "AFP-PREVISION"
));

$proto33["m_sql"] = "t_descuentos.pro_vivienda_pat_2";
$proto33["m_srcTableName"] = "AFP-PREVISION";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "ap_pat_sol_3",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "AFP-PREVISION"
));

$proto35["m_sql"] = "t_descuentos.ap_pat_sol_3";
$proto35["m_srcTableName"] = "AFP-PREVISION";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_total",
	"m_strTable" => "t_descuentos",
	"m_srcTableName" => "AFP-PREVISION"
));

$proto37["m_sql"] = "t_descuentos.sub_total";
$proto37["m_srcTableName"] = "AFP-PREVISION";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "afp",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "AFP-PREVISION"
));

$proto39["m_sql"] = "funcionario.afp";
$proto39["m_srcTableName"] = "AFP-PREVISION";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto41=array();
$proto41["m_link"] = "SQLL_MAIN";
			$proto42=array();
$proto42["m_strName"] = "t_planilla";
$proto42["m_srcTableName"] = "AFP-PREVISION";
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
$proto41["m_srcTableName"] = "AFP-PREVISION";
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
$proto46["m_srcTableName"] = "AFP-PREVISION";
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
$proto45["m_srcTableName"] = "AFP-PREVISION";
$proto47=array();
$proto47["m_sql"] = "t_planilla.id_func = t_descuentos.id_func";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-PREVISION"
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
$proto50["m_srcTableName"] = "AFP-PREVISION";
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
$proto49["m_srcTableName"] = "AFP-PREVISION";
$proto51=array();
$proto51["m_sql"] = "t_planilla.id_func = funcionario.id_func";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "AFP-PREVISION"
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
$proto0["m_srcTableName"]="AFP-PREVISION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_AFP_PREVISION = createSqlQuery_AFP_PREVISION();


	
																		
	
$tdataAFP_PREVISION[".sqlquery"] = $queryData_AFP_PREVISION;

$tableEvents["AFP-PREVISION"] = new eventsBase;
$tdataAFP_PREVISION[".hasEvents"] = false;

?>