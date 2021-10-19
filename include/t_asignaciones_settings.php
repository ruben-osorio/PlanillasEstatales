<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_asignaciones = array();	
	$tdatat_asignaciones[".truncateText"] = true;
	$tdatat_asignaciones[".NumberOfChars"] = 80; 
	$tdatat_asignaciones[".ShortName"] = "t_asignaciones";
	$tdatat_asignaciones[".OwnerID"] = "";
	$tdatat_asignaciones[".OriginalTable"] = "t_asignaciones";

//	field labels
$fieldLabelst_asignaciones = array();
$fieldToolTipst_asignaciones = array();
$pageTitlest_asignaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_asignaciones["Spanish"] = array();
	$fieldToolTipst_asignaciones["Spanish"] = array();
	$pageTitlest_asignaciones["Spanish"] = array();
	$fieldLabelst_asignaciones["Spanish"]["id_asig"] = "Id Asig";
	$fieldToolTipst_asignaciones["Spanish"]["id_asig"] = "";
	$fieldLabelst_asignaciones["Spanish"]["fecha_nac"] = "FECHA NAC.";
	$fieldToolTipst_asignaciones["Spanish"]["fecha_nac"] = "";
	$fieldLabelst_asignaciones["Spanish"]["fecha_pres"] = "FECHA PRES.";
	$fieldToolTipst_asignaciones["Spanish"]["fecha_pres"] = "";
	$fieldLabelst_asignaciones["Spanish"]["pre_num_paq"] = "PRENATAL N.PAQ.";
	$fieldToolTipst_asignaciones["Spanish"]["pre_num_paq"] = "";
	$fieldLabelst_asignaciones["Spanish"]["paq_monto"] = "PRENATAL MONTO PAQ.";
	$fieldToolTipst_asignaciones["Spanish"]["paq_monto"] = "";
	$fieldLabelst_asignaciones["Spanish"]["sub_natalidad"] = "SUBSIDIO NATALIDAD";
	$fieldToolTipst_asignaciones["Spanish"]["sub_natalidad"] = "";
	$fieldLabelst_asignaciones["Spanish"]["lac_num_paq"] = "LACTANCIA N.PAQ.";
	$fieldToolTipst_asignaciones["Spanish"]["lac_num_paq"] = "";
	$fieldLabelst_asignaciones["Spanish"]["lac_monto"] = "LACTANCIA MONTO";
	$fieldToolTipst_asignaciones["Spanish"]["lac_monto"] = "";
	$fieldLabelst_asignaciones["Spanish"]["sepelio"] = "SEPELIO";
	$fieldToolTipst_asignaciones["Spanish"]["sepelio"] = "";
	$fieldLabelst_asignaciones["Spanish"]["sub_total_pago_sedem"] = "SUB TOTAL-PAGO SEDEM";
	$fieldToolTipst_asignaciones["Spanish"]["sub_total_pago_sedem"] = "";
	$fieldLabelst_asignaciones["Spanish"]["fecha_registro"] = "Fecha Registro";
	$fieldToolTipst_asignaciones["Spanish"]["fecha_registro"] = "";
	$fieldLabelst_asignaciones["Spanish"]["id_adm"] = "Id Adm";
	$fieldToolTipst_asignaciones["Spanish"]["id_adm"] = "";
	if (count($fieldToolTipst_asignaciones["Spanish"]))
		$tdatat_asignaciones[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_asignaciones[""] = array();
	$fieldToolTipst_asignaciones[""] = array();
	$pageTitlest_asignaciones[""] = array();
	$fieldLabelst_asignaciones[""]["id_asig"] = "Id Asig";
	$fieldToolTipst_asignaciones[""]["id_asig"] = "";
	$fieldLabelst_asignaciones[""]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipst_asignaciones[""]["fecha_nac"] = "";
	$fieldLabelst_asignaciones[""]["fecha_pres"] = "Fecha Pres";
	$fieldToolTipst_asignaciones[""]["fecha_pres"] = "";
	$fieldLabelst_asignaciones[""]["pre_num_paq"] = "Pre Num Paq";
	$fieldToolTipst_asignaciones[""]["pre_num_paq"] = "";
	$fieldLabelst_asignaciones[""]["paq_monto"] = "Paq Monto";
	$fieldToolTipst_asignaciones[""]["paq_monto"] = "";
	$fieldLabelst_asignaciones[""]["sub_natalidad"] = "Sub Natalidad";
	$fieldToolTipst_asignaciones[""]["sub_natalidad"] = "";
	$fieldLabelst_asignaciones[""]["lac_num_paq"] = "Lac Num Paq";
	$fieldToolTipst_asignaciones[""]["lac_num_paq"] = "";
	$fieldLabelst_asignaciones[""]["lac_monto"] = "Lac Monto";
	$fieldToolTipst_asignaciones[""]["lac_monto"] = "";
	$fieldLabelst_asignaciones[""]["sepelio"] = "Sepelio";
	$fieldToolTipst_asignaciones[""]["sepelio"] = "";
	$fieldLabelst_asignaciones[""]["sub_total_pago_sedem"] = "Sub Total Pago Sedem";
	$fieldToolTipst_asignaciones[""]["sub_total_pago_sedem"] = "";
	$fieldLabelst_asignaciones[""]["fecha_registro"] = "Fecha Registro";
	$fieldToolTipst_asignaciones[""]["fecha_registro"] = "";
	$fieldLabelst_asignaciones[""]["id_adm"] = "Id Adm";
	$fieldToolTipst_asignaciones[""]["id_adm"] = "";
	if (count($fieldToolTipst_asignaciones[""]))
		$tdatat_asignaciones[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_asignaciones["English"] = array();
	$fieldToolTipst_asignaciones["English"] = array();
	$pageTitlest_asignaciones["English"] = array();
	$fieldLabelst_asignaciones["English"]["id_asig"] = "Id Asig";
	$fieldToolTipst_asignaciones["English"]["id_asig"] = "";
	$fieldLabelst_asignaciones["English"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipst_asignaciones["English"]["fecha_nac"] = "";
	$fieldLabelst_asignaciones["English"]["fecha_pres"] = "Fecha Pres";
	$fieldToolTipst_asignaciones["English"]["fecha_pres"] = "";
	$fieldLabelst_asignaciones["English"]["pre_num_paq"] = "Pre Num Paq";
	$fieldToolTipst_asignaciones["English"]["pre_num_paq"] = "";
	$fieldLabelst_asignaciones["English"]["paq_monto"] = "Paq Monto";
	$fieldToolTipst_asignaciones["English"]["paq_monto"] = "";
	$fieldLabelst_asignaciones["English"]["sub_natalidad"] = "Sub Natalidad";
	$fieldToolTipst_asignaciones["English"]["sub_natalidad"] = "";
	$fieldLabelst_asignaciones["English"]["lac_num_paq"] = "Lac Num Paq";
	$fieldToolTipst_asignaciones["English"]["lac_num_paq"] = "";
	$fieldLabelst_asignaciones["English"]["lac_monto"] = "Lac Monto";
	$fieldToolTipst_asignaciones["English"]["lac_monto"] = "";
	$fieldLabelst_asignaciones["English"]["sepelio"] = "Sepelio";
	$fieldToolTipst_asignaciones["English"]["sepelio"] = "";
	$fieldLabelst_asignaciones["English"]["sub_total_pago_sedem"] = "Sub Total Pago Sedem";
	$fieldToolTipst_asignaciones["English"]["sub_total_pago_sedem"] = "";
	$fieldLabelst_asignaciones["English"]["fecha_registro"] = "Fecha Registro";
	$fieldToolTipst_asignaciones["English"]["fecha_registro"] = "";
	$fieldLabelst_asignaciones["English"]["id_adm"] = "Id Adm";
	$fieldToolTipst_asignaciones["English"]["id_adm"] = "";
	if (count($fieldToolTipst_asignaciones["English"]))
		$tdatat_asignaciones[".isUseToolTips"] = true;
}
	
	
	$tdatat_asignaciones[".NCSearch"] = true;



$tdatat_asignaciones[".shortTableName"] = "t_asignaciones";
$tdatat_asignaciones[".nSecOptions"] = 0;
$tdatat_asignaciones[".recsPerRowList"] = 1;
$tdatat_asignaciones[".recsPerRowPrint"] = 1;
$tdatat_asignaciones[".mainTableOwnerID"] = "";
$tdatat_asignaciones[".moveNext"] = 1;
$tdatat_asignaciones[".entityType"] = 0;

$tdatat_asignaciones[".strOriginalTableName"] = "t_asignaciones";




$tdatat_asignaciones[".showAddInPopup"] = false;

$tdatat_asignaciones[".showEditInPopup"] = false;

$tdatat_asignaciones[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_asignaciones[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_asignaciones[".fieldsForRegister"] = array();

$tdatat_asignaciones[".listAjax"] = false;

	$tdatat_asignaciones[".audit"] = false;

	$tdatat_asignaciones[".locking"] = false;

$tdatat_asignaciones[".edit"] = true;
$tdatat_asignaciones[".afterEditAction"] = 1;
$tdatat_asignaciones[".closePopupAfterEdit"] = 1;
$tdatat_asignaciones[".afterEditActionDetTable"] = "";

$tdatat_asignaciones[".add"] = true;
$tdatat_asignaciones[".afterAddAction"] = 1;
$tdatat_asignaciones[".closePopupAfterAdd"] = 1;
$tdatat_asignaciones[".afterAddActionDetTable"] = "";

$tdatat_asignaciones[".list"] = true;

$tdatat_asignaciones[".inlineEdit"] = true;
$tdatat_asignaciones[".inlineAdd"] = true;
$tdatat_asignaciones[".view"] = true;

$tdatat_asignaciones[".import"] = true;

$tdatat_asignaciones[".exportTo"] = true;

$tdatat_asignaciones[".printFriendly"] = true;

$tdatat_asignaciones[".delete"] = true;

$tdatat_asignaciones[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_asignaciones[".searchSaving"] = false;
//

$tdatat_asignaciones[".showSearchPanel"] = true;
		$tdatat_asignaciones[".flexibleSearch"] = true;		

if (isMobile())
	$tdatat_asignaciones[".isUseAjaxSuggest"] = false;
else 
	$tdatat_asignaciones[".isUseAjaxSuggest"] = true;

$tdatat_asignaciones[".rowHighlite"] = true;



$tdatat_asignaciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_asignaciones[".isUseTimeForSearch"] = false;





$tdatat_asignaciones[".allSearchFields"] = array();
$tdatat_asignaciones[".filterFields"] = array();
$tdatat_asignaciones[".requiredSearchFields"] = array();

$tdatat_asignaciones[".allSearchFields"][] = "id_asig";
	$tdatat_asignaciones[".allSearchFields"][] = "fecha_nac";
	$tdatat_asignaciones[".allSearchFields"][] = "fecha_pres";
	$tdatat_asignaciones[".allSearchFields"][] = "pre_num_paq";
	$tdatat_asignaciones[".allSearchFields"][] = "paq_monto";
	$tdatat_asignaciones[".allSearchFields"][] = "sub_natalidad";
	$tdatat_asignaciones[".allSearchFields"][] = "lac_num_paq";
	$tdatat_asignaciones[".allSearchFields"][] = "lac_monto";
	$tdatat_asignaciones[".allSearchFields"][] = "sepelio";
	$tdatat_asignaciones[".allSearchFields"][] = "sub_total_pago_sedem";
	$tdatat_asignaciones[".allSearchFields"][] = "fecha_registro";
	$tdatat_asignaciones[".allSearchFields"][] = "id_adm";
	

$tdatat_asignaciones[".googleLikeFields"] = array();
$tdatat_asignaciones[".googleLikeFields"][] = "id_asig";
$tdatat_asignaciones[".googleLikeFields"][] = "fecha_nac";
$tdatat_asignaciones[".googleLikeFields"][] = "fecha_pres";
$tdatat_asignaciones[".googleLikeFields"][] = "pre_num_paq";
$tdatat_asignaciones[".googleLikeFields"][] = "paq_monto";
$tdatat_asignaciones[".googleLikeFields"][] = "sub_natalidad";
$tdatat_asignaciones[".googleLikeFields"][] = "lac_num_paq";
$tdatat_asignaciones[".googleLikeFields"][] = "lac_monto";
$tdatat_asignaciones[".googleLikeFields"][] = "sepelio";
$tdatat_asignaciones[".googleLikeFields"][] = "sub_total_pago_sedem";
$tdatat_asignaciones[".googleLikeFields"][] = "fecha_registro";
$tdatat_asignaciones[".googleLikeFields"][] = "id_adm";


$tdatat_asignaciones[".advSearchFields"] = array();
$tdatat_asignaciones[".advSearchFields"][] = "id_asig";
$tdatat_asignaciones[".advSearchFields"][] = "fecha_nac";
$tdatat_asignaciones[".advSearchFields"][] = "fecha_pres";
$tdatat_asignaciones[".advSearchFields"][] = "pre_num_paq";
$tdatat_asignaciones[".advSearchFields"][] = "paq_monto";
$tdatat_asignaciones[".advSearchFields"][] = "sub_natalidad";
$tdatat_asignaciones[".advSearchFields"][] = "lac_num_paq";
$tdatat_asignaciones[".advSearchFields"][] = "lac_monto";
$tdatat_asignaciones[".advSearchFields"][] = "sepelio";
$tdatat_asignaciones[".advSearchFields"][] = "sub_total_pago_sedem";
$tdatat_asignaciones[".advSearchFields"][] = "fecha_registro";
$tdatat_asignaciones[".advSearchFields"][] = "id_adm";

$tdatat_asignaciones[".tableType"] = "list";

$tdatat_asignaciones[".printerPageOrientation"] = 0;
$tdatat_asignaciones[".nPrinterPageScale"] = 100;

$tdatat_asignaciones[".nPrinterSplitRecords"] = 40;

$tdatat_asignaciones[".nPrinterPDFSplitRecords"] = 40;



$tdatat_asignaciones[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatat_asignaciones[".pageSize"] = 20;

$tdatat_asignaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_asignaciones[".strOrderBy"] = $tstrOrderBy;

$tdatat_asignaciones[".orderindexes"] = array();

$tdatat_asignaciones[".sqlHead"] = "SELECT id_asig,  	fecha_nac,  	fecha_pres,  	pre_num_paq,  	paq_monto,  	sub_natalidad,  	lac_num_paq,  	lac_monto,  	sepelio,  	sub_total_pago_sedem,  	fecha_registro,  	id_adm";
$tdatat_asignaciones[".sqlFrom"] = "FROM t_asignaciones";
$tdatat_asignaciones[".sqlWhereExpr"] = "";
$tdatat_asignaciones[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_asignaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_asignaciones[".arrGroupsPerPage"] = $arrGPP;

$tdatat_asignaciones[".highlightSearchResults"] = true;

$tableKeyst_asignaciones = array();
$tableKeyst_asignaciones[] = "id_asig";
$tdatat_asignaciones[".Keys"] = $tableKeyst_asignaciones;

$tdatat_asignaciones[".listFields"] = array();
$tdatat_asignaciones[".listFields"][] = "fecha_registro";
$tdatat_asignaciones[".listFields"][] = "id_adm";
$tdatat_asignaciones[".listFields"][] = "id_asig";
$tdatat_asignaciones[".listFields"][] = "fecha_nac";
$tdatat_asignaciones[".listFields"][] = "fecha_pres";
$tdatat_asignaciones[".listFields"][] = "pre_num_paq";
$tdatat_asignaciones[".listFields"][] = "paq_monto";
$tdatat_asignaciones[".listFields"][] = "sub_natalidad";
$tdatat_asignaciones[".listFields"][] = "lac_num_paq";
$tdatat_asignaciones[".listFields"][] = "lac_monto";
$tdatat_asignaciones[".listFields"][] = "sepelio";
$tdatat_asignaciones[".listFields"][] = "sub_total_pago_sedem";

$tdatat_asignaciones[".hideMobileList"] = array();


$tdatat_asignaciones[".viewFields"] = array();
$tdatat_asignaciones[".viewFields"][] = "id_asig";
$tdatat_asignaciones[".viewFields"][] = "fecha_nac";
$tdatat_asignaciones[".viewFields"][] = "fecha_pres";
$tdatat_asignaciones[".viewFields"][] = "pre_num_paq";
$tdatat_asignaciones[".viewFields"][] = "paq_monto";
$tdatat_asignaciones[".viewFields"][] = "sub_natalidad";
$tdatat_asignaciones[".viewFields"][] = "lac_num_paq";
$tdatat_asignaciones[".viewFields"][] = "lac_monto";
$tdatat_asignaciones[".viewFields"][] = "sepelio";
$tdatat_asignaciones[".viewFields"][] = "sub_total_pago_sedem";
$tdatat_asignaciones[".viewFields"][] = "fecha_registro";
$tdatat_asignaciones[".viewFields"][] = "id_adm";

$tdatat_asignaciones[".addFields"] = array();
$tdatat_asignaciones[".addFields"][] = "id_asig";
$tdatat_asignaciones[".addFields"][] = "fecha_nac";
$tdatat_asignaciones[".addFields"][] = "fecha_pres";
$tdatat_asignaciones[".addFields"][] = "pre_num_paq";
$tdatat_asignaciones[".addFields"][] = "paq_monto";
$tdatat_asignaciones[".addFields"][] = "sub_natalidad";
$tdatat_asignaciones[".addFields"][] = "lac_num_paq";
$tdatat_asignaciones[".addFields"][] = "lac_monto";
$tdatat_asignaciones[".addFields"][] = "sepelio";
$tdatat_asignaciones[".addFields"][] = "sub_total_pago_sedem";
$tdatat_asignaciones[".addFields"][] = "fecha_registro";
$tdatat_asignaciones[".addFields"][] = "id_adm";

$tdatat_asignaciones[".masterListFields"] = array();
$tdatat_asignaciones[".masterListFields"][] = "id_asig";
$tdatat_asignaciones[".masterListFields"][] = "fecha_nac";
$tdatat_asignaciones[".masterListFields"][] = "fecha_pres";
$tdatat_asignaciones[".masterListFields"][] = "pre_num_paq";
$tdatat_asignaciones[".masterListFields"][] = "paq_monto";
$tdatat_asignaciones[".masterListFields"][] = "sub_natalidad";
$tdatat_asignaciones[".masterListFields"][] = "lac_num_paq";
$tdatat_asignaciones[".masterListFields"][] = "lac_monto";
$tdatat_asignaciones[".masterListFields"][] = "sepelio";
$tdatat_asignaciones[".masterListFields"][] = "sub_total_pago_sedem";
$tdatat_asignaciones[".masterListFields"][] = "fecha_registro";
$tdatat_asignaciones[".masterListFields"][] = "id_adm";

$tdatat_asignaciones[".inlineAddFields"] = array();
$tdatat_asignaciones[".inlineAddFields"][] = "fecha_registro";
$tdatat_asignaciones[".inlineAddFields"][] = "id_adm";
$tdatat_asignaciones[".inlineAddFields"][] = "id_asig";
$tdatat_asignaciones[".inlineAddFields"][] = "fecha_nac";
$tdatat_asignaciones[".inlineAddFields"][] = "fecha_pres";
$tdatat_asignaciones[".inlineAddFields"][] = "pre_num_paq";
$tdatat_asignaciones[".inlineAddFields"][] = "paq_monto";
$tdatat_asignaciones[".inlineAddFields"][] = "sub_natalidad";
$tdatat_asignaciones[".inlineAddFields"][] = "lac_num_paq";
$tdatat_asignaciones[".inlineAddFields"][] = "lac_monto";
$tdatat_asignaciones[".inlineAddFields"][] = "sepelio";
$tdatat_asignaciones[".inlineAddFields"][] = "sub_total_pago_sedem";

$tdatat_asignaciones[".editFields"] = array();
$tdatat_asignaciones[".editFields"][] = "id_asig";
$tdatat_asignaciones[".editFields"][] = "fecha_nac";
$tdatat_asignaciones[".editFields"][] = "fecha_pres";
$tdatat_asignaciones[".editFields"][] = "pre_num_paq";
$tdatat_asignaciones[".editFields"][] = "paq_monto";
$tdatat_asignaciones[".editFields"][] = "sub_natalidad";
$tdatat_asignaciones[".editFields"][] = "lac_num_paq";
$tdatat_asignaciones[".editFields"][] = "lac_monto";
$tdatat_asignaciones[".editFields"][] = "sepelio";
$tdatat_asignaciones[".editFields"][] = "sub_total_pago_sedem";
$tdatat_asignaciones[".editFields"][] = "fecha_registro";
$tdatat_asignaciones[".editFields"][] = "id_adm";

$tdatat_asignaciones[".inlineEditFields"] = array();
$tdatat_asignaciones[".inlineEditFields"][] = "fecha_registro";
$tdatat_asignaciones[".inlineEditFields"][] = "id_adm";
$tdatat_asignaciones[".inlineEditFields"][] = "id_asig";
$tdatat_asignaciones[".inlineEditFields"][] = "fecha_nac";
$tdatat_asignaciones[".inlineEditFields"][] = "fecha_pres";
$tdatat_asignaciones[".inlineEditFields"][] = "pre_num_paq";
$tdatat_asignaciones[".inlineEditFields"][] = "paq_monto";
$tdatat_asignaciones[".inlineEditFields"][] = "sub_natalidad";
$tdatat_asignaciones[".inlineEditFields"][] = "lac_num_paq";
$tdatat_asignaciones[".inlineEditFields"][] = "lac_monto";
$tdatat_asignaciones[".inlineEditFields"][] = "sepelio";
$tdatat_asignaciones[".inlineEditFields"][] = "sub_total_pago_sedem";

$tdatat_asignaciones[".exportFields"] = array();
$tdatat_asignaciones[".exportFields"][] = "id_asig";
$tdatat_asignaciones[".exportFields"][] = "fecha_nac";
$tdatat_asignaciones[".exportFields"][] = "fecha_pres";
$tdatat_asignaciones[".exportFields"][] = "pre_num_paq";
$tdatat_asignaciones[".exportFields"][] = "paq_monto";
$tdatat_asignaciones[".exportFields"][] = "sub_natalidad";
$tdatat_asignaciones[".exportFields"][] = "lac_num_paq";
$tdatat_asignaciones[".exportFields"][] = "lac_monto";
$tdatat_asignaciones[".exportFields"][] = "sepelio";
$tdatat_asignaciones[".exportFields"][] = "sub_total_pago_sedem";
$tdatat_asignaciones[".exportFields"][] = "fecha_registro";
$tdatat_asignaciones[".exportFields"][] = "id_adm";

$tdatat_asignaciones[".importFields"] = array();
$tdatat_asignaciones[".importFields"][] = "id_asig";
$tdatat_asignaciones[".importFields"][] = "fecha_nac";
$tdatat_asignaciones[".importFields"][] = "fecha_pres";
$tdatat_asignaciones[".importFields"][] = "pre_num_paq";
$tdatat_asignaciones[".importFields"][] = "paq_monto";
$tdatat_asignaciones[".importFields"][] = "sub_natalidad";
$tdatat_asignaciones[".importFields"][] = "lac_num_paq";
$tdatat_asignaciones[".importFields"][] = "lac_monto";
$tdatat_asignaciones[".importFields"][] = "sepelio";
$tdatat_asignaciones[".importFields"][] = "sub_total_pago_sedem";
$tdatat_asignaciones[".importFields"][] = "fecha_registro";
$tdatat_asignaciones[".importFields"][] = "id_adm";

$tdatat_asignaciones[".printFields"] = array();
$tdatat_asignaciones[".printFields"][] = "id_asig";
$tdatat_asignaciones[".printFields"][] = "fecha_nac";
$tdatat_asignaciones[".printFields"][] = "fecha_pres";
$tdatat_asignaciones[".printFields"][] = "pre_num_paq";
$tdatat_asignaciones[".printFields"][] = "paq_monto";
$tdatat_asignaciones[".printFields"][] = "sub_natalidad";
$tdatat_asignaciones[".printFields"][] = "lac_num_paq";
$tdatat_asignaciones[".printFields"][] = "lac_monto";
$tdatat_asignaciones[".printFields"][] = "sepelio";
$tdatat_asignaciones[".printFields"][] = "sub_total_pago_sedem";
$tdatat_asignaciones[".printFields"][] = "fecha_registro";
$tdatat_asignaciones[".printFields"][] = "id_adm";

//	id_asig
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_asig";
	$fdata["GoodName"] = "id_asig";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("t_asignaciones","id_asig"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id_asig"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_asig";
	
		
		
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

	

	
	$tdatat_asignaciones["id_asig"] = $fdata;
//	fecha_nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha_nac";
	$fdata["GoodName"] = "fecha_nac";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("t_asignaciones","fecha_nac"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 2; 
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

	

	
	$tdatat_asignaciones["fecha_nac"] = $fdata;
//	fecha_pres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha_pres";
	$fdata["GoodName"] = "fecha_pres";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("t_asignaciones","fecha_pres"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fecha_pres"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_pres";
	
		
		
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
	
		
		
		$edata["DateEditType"] = 2; 
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

	

	
	$tdatat_asignaciones["fecha_pres"] = $fdata;
//	pre_num_paq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pre_num_paq";
	$fdata["GoodName"] = "pre_num_paq";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("t_asignaciones","pre_num_paq"); 
	$fdata["FieldType"] = 2;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pre_num_paq"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pre_num_paq";
	
		
		
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

	

	
	$tdatat_asignaciones["pre_num_paq"] = $fdata;
//	paq_monto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "paq_monto";
	$fdata["GoodName"] = "paq_monto";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("t_asignaciones","paq_monto"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "paq_monto"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paq_monto";
	
		
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_asignaciones["paq_monto"] = $fdata;
//	sub_natalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sub_natalidad";
	$fdata["GoodName"] = "sub_natalidad";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("t_asignaciones","sub_natalidad"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sub_natalidad"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sub_natalidad";
	
		
		
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

	

	
	$tdatat_asignaciones["sub_natalidad"] = $fdata;
//	lac_num_paq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "lac_num_paq";
	$fdata["GoodName"] = "lac_num_paq";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("t_asignaciones","lac_num_paq"); 
	$fdata["FieldType"] = 2;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "lac_num_paq"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lac_num_paq";
	
		
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_asignaciones["lac_num_paq"] = $fdata;
//	lac_monto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "lac_monto";
	$fdata["GoodName"] = "lac_monto";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("t_asignaciones","lac_monto"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "lac_monto"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lac_monto";
	
		
		
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

	

	
	$tdatat_asignaciones["lac_monto"] = $fdata;
//	sepelio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sepelio";
	$fdata["GoodName"] = "sepelio";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("t_asignaciones","sepelio"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sepelio"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sepelio";
	
		
		
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

	

	
	$tdatat_asignaciones["sepelio"] = $fdata;
//	sub_total_pago_sedem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sub_total_pago_sedem";
	$fdata["GoodName"] = "sub_total_pago_sedem";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("t_asignaciones","sub_total_pago_sedem"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sub_total_pago_sedem"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sub_total_pago_sedem";
	
		
		
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
			
		$edata["controlWidth"] = 150;
	
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

	

	
	$tdatat_asignaciones["sub_total_pago_sedem"] = $fdata;
//	fecha_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fecha_registro";
	$fdata["GoodName"] = "fecha_registro";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("t_asignaciones","fecha_registro"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fecha_registro"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_registro";
	
		
		
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

	

	
	$tdatat_asignaciones["fecha_registro"] = $fdata;
//	id_adm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "id_adm";
	$fdata["GoodName"] = "id_adm";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("t_asignaciones","id_adm"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id_adm"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_adm";
	
		
		
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

	

	
	$tdatat_asignaciones["id_adm"] = $fdata;

	
$tables_data["t_asignaciones"]=&$tdatat_asignaciones;
$field_labels["t_asignaciones"] = &$fieldLabelst_asignaciones;
$fieldToolTips["t_asignaciones"] = &$fieldToolTipst_asignaciones;
$page_titles["t_asignaciones"] = &$pageTitlest_asignaciones;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_asignaciones"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_asignaciones"] = array();


	
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
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["t_asignaciones"][0] = $masterParams;	
				$masterTablesData["t_asignaciones"][0]["masterKeys"] = array();
	$masterTablesData["t_asignaciones"][0]["masterKeys"][]="id_func";
				$masterTablesData["t_asignaciones"][0]["detailKeys"] = array();
	$masterTablesData["t_asignaciones"][0]["detailKeys"][]="id_asig";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_asignaciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_asig,  	fecha_nac,  	fecha_pres,  	pre_num_paq,  	paq_monto,  	sub_natalidad,  	lac_num_paq,  	lac_monto,  	sepelio,  	sub_total_pago_sedem,  	fecha_registro,  	id_adm";
$proto0["m_strFrom"] = "FROM t_asignaciones";
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
	"m_strName" => "id_asig",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "t_asignaciones"
));

$proto5["m_sql"] = "id_asig";
$proto5["m_srcTableName"] = "t_asignaciones";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_nac",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "t_asignaciones"
));

$proto7["m_sql"] = "fecha_nac";
$proto7["m_srcTableName"] = "t_asignaciones";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_pres",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "t_asignaciones"
));

$proto9["m_sql"] = "fecha_pres";
$proto9["m_srcTableName"] = "t_asignaciones";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "pre_num_paq",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "t_asignaciones"
));

$proto11["m_sql"] = "pre_num_paq";
$proto11["m_srcTableName"] = "t_asignaciones";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "paq_monto",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "t_asignaciones"
));

$proto13["m_sql"] = "paq_monto";
$proto13["m_srcTableName"] = "t_asignaciones";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_natalidad",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "t_asignaciones"
));

$proto15["m_sql"] = "sub_natalidad";
$proto15["m_srcTableName"] = "t_asignaciones";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "lac_num_paq",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "t_asignaciones"
));

$proto17["m_sql"] = "lac_num_paq";
$proto17["m_srcTableName"] = "t_asignaciones";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "lac_monto",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "t_asignaciones"
));

$proto19["m_sql"] = "lac_monto";
$proto19["m_srcTableName"] = "t_asignaciones";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "sepelio",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "t_asignaciones"
));

$proto21["m_sql"] = "sepelio";
$proto21["m_srcTableName"] = "t_asignaciones";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_total_pago_sedem",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "t_asignaciones"
));

$proto23["m_sql"] = "sub_total_pago_sedem";
$proto23["m_srcTableName"] = "t_asignaciones";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_registro",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "t_asignaciones"
));

$proto25["m_sql"] = "fecha_registro";
$proto25["m_srcTableName"] = "t_asignaciones";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "id_adm",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "t_asignaciones"
));

$proto27["m_sql"] = "id_adm";
$proto27["m_srcTableName"] = "t_asignaciones";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "t_asignaciones";
$proto30["m_srcTableName"] = "t_asignaciones";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id_asig";
$proto30["m_columns"][] = "fecha_nac";
$proto30["m_columns"][] = "fecha_pres";
$proto30["m_columns"][] = "pre_num_paq";
$proto30["m_columns"][] = "paq_monto";
$proto30["m_columns"][] = "sub_natalidad";
$proto30["m_columns"][] = "lac_num_paq";
$proto30["m_columns"][] = "lac_monto";
$proto30["m_columns"][] = "sepelio";
$proto30["m_columns"][] = "sub_total_pago_sedem";
$proto30["m_columns"][] = "fecha_registro";
$proto30["m_columns"][] = "id_adm";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "t_asignaciones";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "t_asignaciones";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_asignaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_asignaciones = createSqlQuery_t_asignaciones();


	
												
	
$tdatat_asignaciones[".sqlquery"] = $queryData_t_asignaciones;

$tableEvents["t_asignaciones"] = new eventsBase;
$tdatat_asignaciones[".hasEvents"] = false;

?>