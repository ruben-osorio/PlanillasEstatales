<?php
require_once(getabspath("classes/cipherer.php"));




$tdataASIGNACIONES_FAMILIARES = array();	
	$tdataASIGNACIONES_FAMILIARES[".truncateText"] = true;
	$tdataASIGNACIONES_FAMILIARES[".NumberOfChars"] = 80; 
	$tdataASIGNACIONES_FAMILIARES[".ShortName"] = "ASIGNACIONES_FAMILIARES";
	$tdataASIGNACIONES_FAMILIARES[".OwnerID"] = "";
	$tdataASIGNACIONES_FAMILIARES[".OriginalTable"] = "t_asignaciones";

//	field labels
$fieldLabelsASIGNACIONES_FAMILIARES = array();
$fieldToolTipsASIGNACIONES_FAMILIARES = array();
$pageTitlesASIGNACIONES_FAMILIARES = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsASIGNACIONES_FAMILIARES["Spanish"] = array();
	$fieldToolTipsASIGNACIONES_FAMILIARES["Spanish"] = array();
	$pageTitlesASIGNACIONES_FAMILIARES["Spanish"] = array();
	$fieldLabelsASIGNACIONES_FAMILIARES["Spanish"]["id_asig"] = "NUM.";
	$fieldToolTipsASIGNACIONES_FAMILIARES["Spanish"]["id_asig"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["Spanish"]["fecha_nac"] = "FECHA DE NACIMIENTO NIÑO(A)";
	$fieldToolTipsASIGNACIONES_FAMILIARES["Spanish"]["fecha_nac"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["Spanish"]["fecha_pres"] = "FECHA DE PRESENTACIÓN";
	$fieldToolTipsASIGNACIONES_FAMILIARES["Spanish"]["fecha_pres"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["Spanish"]["pre_num_paq"] = "PRENATAL NUM. PAQUETE";
	$fieldToolTipsASIGNACIONES_FAMILIARES["Spanish"]["pre_num_paq"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["Spanish"]["paq_monto"] = "PRENATAL MONTO Bs.";
	$fieldToolTipsASIGNACIONES_FAMILIARES["Spanish"]["paq_monto"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["Spanish"]["sub_natalidad"] = "NATALIDAD";
	$fieldToolTipsASIGNACIONES_FAMILIARES["Spanish"]["sub_natalidad"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["Spanish"]["lac_num_paq"] = "LACTANCIA NUM.  PAQUETE";
	$fieldToolTipsASIGNACIONES_FAMILIARES["Spanish"]["lac_num_paq"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["Spanish"]["lac_monto"] = "LACTANCIA MONTO Bs.";
	$fieldToolTipsASIGNACIONES_FAMILIARES["Spanish"]["lac_monto"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["Spanish"]["sepelio"] = "SEPELIO";
	$fieldToolTipsASIGNACIONES_FAMILIARES["Spanish"]["sepelio"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["Spanish"]["sub_total_pago_sedem"] = "SUB TOTAL (PAGO SEDEM)";
	$fieldToolTipsASIGNACIONES_FAMILIARES["Spanish"]["sub_total_pago_sedem"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["Spanish"]["fecha_registro"] = "Fecha Registro";
	$fieldToolTipsASIGNACIONES_FAMILIARES["Spanish"]["fecha_registro"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["Spanish"]["name"] = "NOMBRES";
	$fieldToolTipsASIGNACIONES_FAMILIARES["Spanish"]["name"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["Spanish"]["l_name1"] = "PATERNO";
	$fieldToolTipsASIGNACIONES_FAMILIARES["Spanish"]["l_name1"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["Spanish"]["l_name2"] = "MATERNO";
	$fieldToolTipsASIGNACIONES_FAMILIARES["Spanish"]["l_name2"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["Spanish"]["ci"] = "CI";
	$fieldToolTipsASIGNACIONES_FAMILIARES["Spanish"]["ci"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["Spanish"]["expe"] = "Exp.";
	$fieldToolTipsASIGNACIONES_FAMILIARES["Spanish"]["expe"] = "";
	if (count($fieldToolTipsASIGNACIONES_FAMILIARES["Spanish"]))
		$tdataASIGNACIONES_FAMILIARES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsASIGNACIONES_FAMILIARES[""] = array();
	$fieldToolTipsASIGNACIONES_FAMILIARES[""] = array();
	$pageTitlesASIGNACIONES_FAMILIARES[""] = array();
	$fieldLabelsASIGNACIONES_FAMILIARES[""]["id_asig"] = "Id Asig";
	$fieldToolTipsASIGNACIONES_FAMILIARES[""]["id_asig"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES[""]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipsASIGNACIONES_FAMILIARES[""]["fecha_nac"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES[""]["fecha_pres"] = "Fecha Pres";
	$fieldToolTipsASIGNACIONES_FAMILIARES[""]["fecha_pres"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES[""]["pre_num_paq"] = "Pre Num Paq";
	$fieldToolTipsASIGNACIONES_FAMILIARES[""]["pre_num_paq"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES[""]["paq_monto"] = "Paq Monto";
	$fieldToolTipsASIGNACIONES_FAMILIARES[""]["paq_monto"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES[""]["sub_natalidad"] = "Sub Natalidad";
	$fieldToolTipsASIGNACIONES_FAMILIARES[""]["sub_natalidad"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES[""]["lac_num_paq"] = "Lac Num Paq";
	$fieldToolTipsASIGNACIONES_FAMILIARES[""]["lac_num_paq"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES[""]["lac_monto"] = "Lac Monto";
	$fieldToolTipsASIGNACIONES_FAMILIARES[""]["lac_monto"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES[""]["sepelio"] = "Sepelio";
	$fieldToolTipsASIGNACIONES_FAMILIARES[""]["sepelio"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES[""]["sub_total_pago_sedem"] = "Sub Total Pago Sedem";
	$fieldToolTipsASIGNACIONES_FAMILIARES[""]["sub_total_pago_sedem"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES[""]["fecha_registro"] = "Fecha Registro";
	$fieldToolTipsASIGNACIONES_FAMILIARES[""]["fecha_registro"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES[""]["name"] = "Name";
	$fieldToolTipsASIGNACIONES_FAMILIARES[""]["name"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES[""]["l_name1"] = "L Name1";
	$fieldToolTipsASIGNACIONES_FAMILIARES[""]["l_name1"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES[""]["l_name2"] = "L Name2";
	$fieldToolTipsASIGNACIONES_FAMILIARES[""]["l_name2"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES[""]["ci"] = "Ci";
	$fieldToolTipsASIGNACIONES_FAMILIARES[""]["ci"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES[""]["expe"] = "Expe";
	$fieldToolTipsASIGNACIONES_FAMILIARES[""]["expe"] = "";
	if (count($fieldToolTipsASIGNACIONES_FAMILIARES[""]))
		$tdataASIGNACIONES_FAMILIARES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsASIGNACIONES_FAMILIARES["English"] = array();
	$fieldToolTipsASIGNACIONES_FAMILIARES["English"] = array();
	$pageTitlesASIGNACIONES_FAMILIARES["English"] = array();
	$fieldLabelsASIGNACIONES_FAMILIARES["English"]["id_asig"] = "Id Asig";
	$fieldToolTipsASIGNACIONES_FAMILIARES["English"]["id_asig"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["English"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipsASIGNACIONES_FAMILIARES["English"]["fecha_nac"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["English"]["fecha_pres"] = "Fecha Pres";
	$fieldToolTipsASIGNACIONES_FAMILIARES["English"]["fecha_pres"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["English"]["pre_num_paq"] = "Pre Num Paq";
	$fieldToolTipsASIGNACIONES_FAMILIARES["English"]["pre_num_paq"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["English"]["paq_monto"] = "Paq Monto";
	$fieldToolTipsASIGNACIONES_FAMILIARES["English"]["paq_monto"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["English"]["sub_natalidad"] = "Sub Natalidad";
	$fieldToolTipsASIGNACIONES_FAMILIARES["English"]["sub_natalidad"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["English"]["lac_num_paq"] = "Lac Num Paq";
	$fieldToolTipsASIGNACIONES_FAMILIARES["English"]["lac_num_paq"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["English"]["lac_monto"] = "Lac Monto";
	$fieldToolTipsASIGNACIONES_FAMILIARES["English"]["lac_monto"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["English"]["sepelio"] = "Sepelio";
	$fieldToolTipsASIGNACIONES_FAMILIARES["English"]["sepelio"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["English"]["sub_total_pago_sedem"] = "Sub Total Pago Sedem";
	$fieldToolTipsASIGNACIONES_FAMILIARES["English"]["sub_total_pago_sedem"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["English"]["fecha_registro"] = "Fecha Registro";
	$fieldToolTipsASIGNACIONES_FAMILIARES["English"]["fecha_registro"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["English"]["name"] = "Name";
	$fieldToolTipsASIGNACIONES_FAMILIARES["English"]["name"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["English"]["l_name1"] = "L Name1";
	$fieldToolTipsASIGNACIONES_FAMILIARES["English"]["l_name1"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["English"]["l_name2"] = "L Name2";
	$fieldToolTipsASIGNACIONES_FAMILIARES["English"]["l_name2"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["English"]["ci"] = "Ci";
	$fieldToolTipsASIGNACIONES_FAMILIARES["English"]["ci"] = "";
	$fieldLabelsASIGNACIONES_FAMILIARES["English"]["expe"] = "Expe";
	$fieldToolTipsASIGNACIONES_FAMILIARES["English"]["expe"] = "";
	if (count($fieldToolTipsASIGNACIONES_FAMILIARES["English"]))
		$tdataASIGNACIONES_FAMILIARES[".isUseToolTips"] = true;
}
	
	
	$tdataASIGNACIONES_FAMILIARES[".NCSearch"] = true;



$tdataASIGNACIONES_FAMILIARES[".shortTableName"] = "ASIGNACIONES_FAMILIARES";
$tdataASIGNACIONES_FAMILIARES[".nSecOptions"] = 0;
$tdataASIGNACIONES_FAMILIARES[".recsPerRowList"] = 1;
$tdataASIGNACIONES_FAMILIARES[".recsPerRowPrint"] = 1;
$tdataASIGNACIONES_FAMILIARES[".mainTableOwnerID"] = "";
$tdataASIGNACIONES_FAMILIARES[".moveNext"] = 1;
$tdataASIGNACIONES_FAMILIARES[".entityType"] = 2;

$tdataASIGNACIONES_FAMILIARES[".strOriginalTableName"] = "t_asignaciones";




$tdataASIGNACIONES_FAMILIARES[".showAddInPopup"] = false;

$tdataASIGNACIONES_FAMILIARES[".showEditInPopup"] = false;

$tdataASIGNACIONES_FAMILIARES[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataASIGNACIONES_FAMILIARES[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataASIGNACIONES_FAMILIARES[".fieldsForRegister"] = array();

$tdataASIGNACIONES_FAMILIARES[".listAjax"] = false;

	$tdataASIGNACIONES_FAMILIARES[".audit"] = false;

	$tdataASIGNACIONES_FAMILIARES[".locking"] = false;

$tdataASIGNACIONES_FAMILIARES[".edit"] = true;
$tdataASIGNACIONES_FAMILIARES[".afterEditAction"] = 1;
$tdataASIGNACIONES_FAMILIARES[".closePopupAfterEdit"] = 1;
$tdataASIGNACIONES_FAMILIARES[".afterEditActionDetTable"] = "";

$tdataASIGNACIONES_FAMILIARES[".add"] = true;
$tdataASIGNACIONES_FAMILIARES[".afterAddAction"] = 1;
$tdataASIGNACIONES_FAMILIARES[".closePopupAfterAdd"] = 1;
$tdataASIGNACIONES_FAMILIARES[".afterAddActionDetTable"] = "";

$tdataASIGNACIONES_FAMILIARES[".list"] = true;

$tdataASIGNACIONES_FAMILIARES[".inlineEdit"] = true;
$tdataASIGNACIONES_FAMILIARES[".inlineAdd"] = true;
$tdataASIGNACIONES_FAMILIARES[".view"] = true;


$tdataASIGNACIONES_FAMILIARES[".exportTo"] = true;

$tdataASIGNACIONES_FAMILIARES[".printFriendly"] = true;

$tdataASIGNACIONES_FAMILIARES[".delete"] = true;

$tdataASIGNACIONES_FAMILIARES[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataASIGNACIONES_FAMILIARES[".searchSaving"] = false;
//

$tdataASIGNACIONES_FAMILIARES[".showSearchPanel"] = true;
		$tdataASIGNACIONES_FAMILIARES[".flexibleSearch"] = true;		

if (isMobile())
	$tdataASIGNACIONES_FAMILIARES[".isUseAjaxSuggest"] = false;
else 
	$tdataASIGNACIONES_FAMILIARES[".isUseAjaxSuggest"] = true;




$tdataASIGNACIONES_FAMILIARES[".addPageEvents"] = false;

// use timepicker for search panel
$tdataASIGNACIONES_FAMILIARES[".isUseTimeForSearch"] = false;





$tdataASIGNACIONES_FAMILIARES[".allSearchFields"] = array();
$tdataASIGNACIONES_FAMILIARES[".filterFields"] = array();
$tdataASIGNACIONES_FAMILIARES[".requiredSearchFields"] = array();

$tdataASIGNACIONES_FAMILIARES[".allSearchFields"][] = "id_asig";
	$tdataASIGNACIONES_FAMILIARES[".allSearchFields"][] = "fecha_nac";
	$tdataASIGNACIONES_FAMILIARES[".allSearchFields"][] = "fecha_pres";
	$tdataASIGNACIONES_FAMILIARES[".allSearchFields"][] = "pre_num_paq";
	$tdataASIGNACIONES_FAMILIARES[".allSearchFields"][] = "paq_monto";
	$tdataASIGNACIONES_FAMILIARES[".allSearchFields"][] = "sub_natalidad";
	$tdataASIGNACIONES_FAMILIARES[".allSearchFields"][] = "lac_num_paq";
	$tdataASIGNACIONES_FAMILIARES[".allSearchFields"][] = "lac_monto";
	$tdataASIGNACIONES_FAMILIARES[".allSearchFields"][] = "sepelio";
	$tdataASIGNACIONES_FAMILIARES[".allSearchFields"][] = "sub_total_pago_sedem";
	$tdataASIGNACIONES_FAMILIARES[".allSearchFields"][] = "fecha_registro";
	$tdataASIGNACIONES_FAMILIARES[".allSearchFields"][] = "name";
	$tdataASIGNACIONES_FAMILIARES[".allSearchFields"][] = "l_name1";
	$tdataASIGNACIONES_FAMILIARES[".allSearchFields"][] = "l_name2";
	$tdataASIGNACIONES_FAMILIARES[".allSearchFields"][] = "ci";
	$tdataASIGNACIONES_FAMILIARES[".allSearchFields"][] = "expe";
	

$tdataASIGNACIONES_FAMILIARES[".googleLikeFields"] = array();
$tdataASIGNACIONES_FAMILIARES[".googleLikeFields"][] = "id_asig";
$tdataASIGNACIONES_FAMILIARES[".googleLikeFields"][] = "fecha_nac";
$tdataASIGNACIONES_FAMILIARES[".googleLikeFields"][] = "fecha_pres";
$tdataASIGNACIONES_FAMILIARES[".googleLikeFields"][] = "pre_num_paq";
$tdataASIGNACIONES_FAMILIARES[".googleLikeFields"][] = "paq_monto";
$tdataASIGNACIONES_FAMILIARES[".googleLikeFields"][] = "sub_natalidad";
$tdataASIGNACIONES_FAMILIARES[".googleLikeFields"][] = "lac_num_paq";
$tdataASIGNACIONES_FAMILIARES[".googleLikeFields"][] = "lac_monto";
$tdataASIGNACIONES_FAMILIARES[".googleLikeFields"][] = "sepelio";
$tdataASIGNACIONES_FAMILIARES[".googleLikeFields"][] = "sub_total_pago_sedem";
$tdataASIGNACIONES_FAMILIARES[".googleLikeFields"][] = "fecha_registro";
$tdataASIGNACIONES_FAMILIARES[".googleLikeFields"][] = "name";
$tdataASIGNACIONES_FAMILIARES[".googleLikeFields"][] = "l_name1";
$tdataASIGNACIONES_FAMILIARES[".googleLikeFields"][] = "l_name2";
$tdataASIGNACIONES_FAMILIARES[".googleLikeFields"][] = "ci";
$tdataASIGNACIONES_FAMILIARES[".googleLikeFields"][] = "expe";


$tdataASIGNACIONES_FAMILIARES[".advSearchFields"] = array();
$tdataASIGNACIONES_FAMILIARES[".advSearchFields"][] = "id_asig";
$tdataASIGNACIONES_FAMILIARES[".advSearchFields"][] = "fecha_nac";
$tdataASIGNACIONES_FAMILIARES[".advSearchFields"][] = "fecha_pres";
$tdataASIGNACIONES_FAMILIARES[".advSearchFields"][] = "pre_num_paq";
$tdataASIGNACIONES_FAMILIARES[".advSearchFields"][] = "paq_monto";
$tdataASIGNACIONES_FAMILIARES[".advSearchFields"][] = "sub_natalidad";
$tdataASIGNACIONES_FAMILIARES[".advSearchFields"][] = "lac_num_paq";
$tdataASIGNACIONES_FAMILIARES[".advSearchFields"][] = "lac_monto";
$tdataASIGNACIONES_FAMILIARES[".advSearchFields"][] = "sepelio";
$tdataASIGNACIONES_FAMILIARES[".advSearchFields"][] = "sub_total_pago_sedem";
$tdataASIGNACIONES_FAMILIARES[".advSearchFields"][] = "fecha_registro";
$tdataASIGNACIONES_FAMILIARES[".advSearchFields"][] = "name";
$tdataASIGNACIONES_FAMILIARES[".advSearchFields"][] = "l_name1";
$tdataASIGNACIONES_FAMILIARES[".advSearchFields"][] = "l_name2";
$tdataASIGNACIONES_FAMILIARES[".advSearchFields"][] = "ci";
$tdataASIGNACIONES_FAMILIARES[".advSearchFields"][] = "expe";

$tdataASIGNACIONES_FAMILIARES[".tableType"] = "report";

$tdataASIGNACIONES_FAMILIARES[".printerPageOrientation"] = 0;
$tdataASIGNACIONES_FAMILIARES[".nPrinterPageScale"] = 100;

$tdataASIGNACIONES_FAMILIARES[".nPrinterSplitRecords"] = 40;

$tdataASIGNACIONES_FAMILIARES[".nPrinterPDFSplitRecords"] = 40;



$tdataASIGNACIONES_FAMILIARES[".geocodingEnabled"] = false;

//report settings
$tdataASIGNACIONES_FAMILIARES[".printReportLayout"] = 6;	

$tdataASIGNACIONES_FAMILIARES[".reportPrintPartitionType"] = 1;	
$tdataASIGNACIONES_FAMILIARES[".reportPrintGroupsPerPage"] = 40;	
	$tdataASIGNACIONES_FAMILIARES[".reportPrintPDFGroupsPerPage"] = 40;
$tdataASIGNACIONES_FAMILIARES[".lowGroup"] = 0;



$tdataASIGNACIONES_FAMILIARES[".pageSize"] = 20;	


$tdataASIGNACIONES_FAMILIARES[".isExistTotalFields"] = true;




$tdataASIGNACIONES_FAMILIARES[".repShowDet"] = true;

$tdataASIGNACIONES_FAMILIARES[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf
$tdataASIGNACIONES_FAMILIARES[".isPrinterPagePDF"] = true;
$tdataASIGNACIONES_FAMILIARES[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataASIGNACIONES_FAMILIARES[".strOrderBy"] = $tstrOrderBy;

$tdataASIGNACIONES_FAMILIARES[".orderindexes"] = array();

$tdataASIGNACIONES_FAMILIARES[".sqlHead"] = "SELECT t_asignaciones.id_asig,  t_asignaciones.fecha_nac,  t_asignaciones.fecha_pres,  t_asignaciones.pre_num_paq,  t_asignaciones.paq_monto,  t_asignaciones.sub_natalidad,  t_asignaciones.lac_num_paq,  t_asignaciones.lac_monto,  t_asignaciones.sepelio,  t_asignaciones.sub_total_pago_sedem,  t_asignaciones.fecha_registro,  funcionario.name,  funcionario.l_name1,  funcionario.l_name2,  funcionario.ci,  funcionario.expe";
$tdataASIGNACIONES_FAMILIARES[".sqlFrom"] = "FROM t_asignaciones  INNER JOIN funcionario ON t_asignaciones.id_asig = funcionario.id_func";
$tdataASIGNACIONES_FAMILIARES[".sqlWhereExpr"] = "";
$tdataASIGNACIONES_FAMILIARES[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataASIGNACIONES_FAMILIARES[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataASIGNACIONES_FAMILIARES[".arrGroupsPerPage"] = $arrGPP;

$tdataASIGNACIONES_FAMILIARES[".highlightSearchResults"] = true;

$tableKeysASIGNACIONES_FAMILIARES = array();
$tableKeysASIGNACIONES_FAMILIARES[] = "id_asig";
$tdataASIGNACIONES_FAMILIARES[".Keys"] = $tableKeysASIGNACIONES_FAMILIARES;

$tdataASIGNACIONES_FAMILIARES[".listFields"] = array();
$tdataASIGNACIONES_FAMILIARES[".listFields"][] = "id_asig";
$tdataASIGNACIONES_FAMILIARES[".listFields"][] = "fecha_nac";
$tdataASIGNACIONES_FAMILIARES[".listFields"][] = "fecha_pres";
$tdataASIGNACIONES_FAMILIARES[".listFields"][] = "pre_num_paq";
$tdataASIGNACIONES_FAMILIARES[".listFields"][] = "paq_monto";
$tdataASIGNACIONES_FAMILIARES[".listFields"][] = "sub_natalidad";
$tdataASIGNACIONES_FAMILIARES[".listFields"][] = "lac_num_paq";
$tdataASIGNACIONES_FAMILIARES[".listFields"][] = "lac_monto";
$tdataASIGNACIONES_FAMILIARES[".listFields"][] = "sepelio";
$tdataASIGNACIONES_FAMILIARES[".listFields"][] = "sub_total_pago_sedem";
$tdataASIGNACIONES_FAMILIARES[".listFields"][] = "fecha_registro";
$tdataASIGNACIONES_FAMILIARES[".listFields"][] = "name";
$tdataASIGNACIONES_FAMILIARES[".listFields"][] = "l_name1";
$tdataASIGNACIONES_FAMILIARES[".listFields"][] = "l_name2";
$tdataASIGNACIONES_FAMILIARES[".listFields"][] = "ci";
$tdataASIGNACIONES_FAMILIARES[".listFields"][] = "expe";

$tdataASIGNACIONES_FAMILIARES[".hideMobileList"] = array();


$tdataASIGNACIONES_FAMILIARES[".viewFields"] = array();
$tdataASIGNACIONES_FAMILIARES[".viewFields"][] = "id_asig";
$tdataASIGNACIONES_FAMILIARES[".viewFields"][] = "fecha_nac";
$tdataASIGNACIONES_FAMILIARES[".viewFields"][] = "fecha_pres";
$tdataASIGNACIONES_FAMILIARES[".viewFields"][] = "pre_num_paq";
$tdataASIGNACIONES_FAMILIARES[".viewFields"][] = "paq_monto";
$tdataASIGNACIONES_FAMILIARES[".viewFields"][] = "sub_natalidad";
$tdataASIGNACIONES_FAMILIARES[".viewFields"][] = "lac_num_paq";
$tdataASIGNACIONES_FAMILIARES[".viewFields"][] = "lac_monto";
$tdataASIGNACIONES_FAMILIARES[".viewFields"][] = "sepelio";
$tdataASIGNACIONES_FAMILIARES[".viewFields"][] = "sub_total_pago_sedem";
$tdataASIGNACIONES_FAMILIARES[".viewFields"][] = "fecha_registro";
$tdataASIGNACIONES_FAMILIARES[".viewFields"][] = "name";
$tdataASIGNACIONES_FAMILIARES[".viewFields"][] = "l_name1";
$tdataASIGNACIONES_FAMILIARES[".viewFields"][] = "l_name2";
$tdataASIGNACIONES_FAMILIARES[".viewFields"][] = "ci";
$tdataASIGNACIONES_FAMILIARES[".viewFields"][] = "expe";

$tdataASIGNACIONES_FAMILIARES[".addFields"] = array();
$tdataASIGNACIONES_FAMILIARES[".addFields"][] = "id_asig";
$tdataASIGNACIONES_FAMILIARES[".addFields"][] = "fecha_nac";
$tdataASIGNACIONES_FAMILIARES[".addFields"][] = "fecha_pres";
$tdataASIGNACIONES_FAMILIARES[".addFields"][] = "pre_num_paq";
$tdataASIGNACIONES_FAMILIARES[".addFields"][] = "paq_monto";
$tdataASIGNACIONES_FAMILIARES[".addFields"][] = "sub_natalidad";
$tdataASIGNACIONES_FAMILIARES[".addFields"][] = "lac_num_paq";
$tdataASIGNACIONES_FAMILIARES[".addFields"][] = "lac_monto";
$tdataASIGNACIONES_FAMILIARES[".addFields"][] = "sepelio";
$tdataASIGNACIONES_FAMILIARES[".addFields"][] = "sub_total_pago_sedem";
$tdataASIGNACIONES_FAMILIARES[".addFields"][] = "fecha_registro";

$tdataASIGNACIONES_FAMILIARES[".masterListFields"] = array();
$tdataASIGNACIONES_FAMILIARES[".masterListFields"][] = "id_asig";
$tdataASIGNACIONES_FAMILIARES[".masterListFields"][] = "fecha_nac";
$tdataASIGNACIONES_FAMILIARES[".masterListFields"][] = "fecha_pres";
$tdataASIGNACIONES_FAMILIARES[".masterListFields"][] = "pre_num_paq";
$tdataASIGNACIONES_FAMILIARES[".masterListFields"][] = "paq_monto";
$tdataASIGNACIONES_FAMILIARES[".masterListFields"][] = "sub_natalidad";
$tdataASIGNACIONES_FAMILIARES[".masterListFields"][] = "lac_num_paq";
$tdataASIGNACIONES_FAMILIARES[".masterListFields"][] = "lac_monto";
$tdataASIGNACIONES_FAMILIARES[".masterListFields"][] = "sepelio";
$tdataASIGNACIONES_FAMILIARES[".masterListFields"][] = "sub_total_pago_sedem";
$tdataASIGNACIONES_FAMILIARES[".masterListFields"][] = "fecha_registro";
$tdataASIGNACIONES_FAMILIARES[".masterListFields"][] = "name";
$tdataASIGNACIONES_FAMILIARES[".masterListFields"][] = "l_name1";
$tdataASIGNACIONES_FAMILIARES[".masterListFields"][] = "l_name2";
$tdataASIGNACIONES_FAMILIARES[".masterListFields"][] = "ci";
$tdataASIGNACIONES_FAMILIARES[".masterListFields"][] = "expe";

$tdataASIGNACIONES_FAMILIARES[".inlineAddFields"] = array();
$tdataASIGNACIONES_FAMILIARES[".inlineAddFields"][] = "id_asig";
$tdataASIGNACIONES_FAMILIARES[".inlineAddFields"][] = "fecha_nac";
$tdataASIGNACIONES_FAMILIARES[".inlineAddFields"][] = "fecha_pres";
$tdataASIGNACIONES_FAMILIARES[".inlineAddFields"][] = "pre_num_paq";
$tdataASIGNACIONES_FAMILIARES[".inlineAddFields"][] = "paq_monto";
$tdataASIGNACIONES_FAMILIARES[".inlineAddFields"][] = "sub_natalidad";
$tdataASIGNACIONES_FAMILIARES[".inlineAddFields"][] = "lac_num_paq";
$tdataASIGNACIONES_FAMILIARES[".inlineAddFields"][] = "lac_monto";
$tdataASIGNACIONES_FAMILIARES[".inlineAddFields"][] = "sepelio";
$tdataASIGNACIONES_FAMILIARES[".inlineAddFields"][] = "sub_total_pago_sedem";
$tdataASIGNACIONES_FAMILIARES[".inlineAddFields"][] = "fecha_registro";

$tdataASIGNACIONES_FAMILIARES[".editFields"] = array();
$tdataASIGNACIONES_FAMILIARES[".editFields"][] = "id_asig";
$tdataASIGNACIONES_FAMILIARES[".editFields"][] = "fecha_nac";
$tdataASIGNACIONES_FAMILIARES[".editFields"][] = "fecha_pres";
$tdataASIGNACIONES_FAMILIARES[".editFields"][] = "pre_num_paq";
$tdataASIGNACIONES_FAMILIARES[".editFields"][] = "paq_monto";
$tdataASIGNACIONES_FAMILIARES[".editFields"][] = "sub_natalidad";
$tdataASIGNACIONES_FAMILIARES[".editFields"][] = "lac_num_paq";
$tdataASIGNACIONES_FAMILIARES[".editFields"][] = "lac_monto";
$tdataASIGNACIONES_FAMILIARES[".editFields"][] = "sepelio";
$tdataASIGNACIONES_FAMILIARES[".editFields"][] = "sub_total_pago_sedem";
$tdataASIGNACIONES_FAMILIARES[".editFields"][] = "fecha_registro";

$tdataASIGNACIONES_FAMILIARES[".inlineEditFields"] = array();
$tdataASIGNACIONES_FAMILIARES[".inlineEditFields"][] = "id_asig";
$tdataASIGNACIONES_FAMILIARES[".inlineEditFields"][] = "fecha_nac";
$tdataASIGNACIONES_FAMILIARES[".inlineEditFields"][] = "fecha_pres";
$tdataASIGNACIONES_FAMILIARES[".inlineEditFields"][] = "pre_num_paq";
$tdataASIGNACIONES_FAMILIARES[".inlineEditFields"][] = "paq_monto";
$tdataASIGNACIONES_FAMILIARES[".inlineEditFields"][] = "sub_natalidad";
$tdataASIGNACIONES_FAMILIARES[".inlineEditFields"][] = "lac_num_paq";
$tdataASIGNACIONES_FAMILIARES[".inlineEditFields"][] = "lac_monto";
$tdataASIGNACIONES_FAMILIARES[".inlineEditFields"][] = "sepelio";
$tdataASIGNACIONES_FAMILIARES[".inlineEditFields"][] = "sub_total_pago_sedem";
$tdataASIGNACIONES_FAMILIARES[".inlineEditFields"][] = "fecha_registro";

$tdataASIGNACIONES_FAMILIARES[".exportFields"] = array();
$tdataASIGNACIONES_FAMILIARES[".exportFields"][] = "id_asig";
$tdataASIGNACIONES_FAMILIARES[".exportFields"][] = "fecha_nac";
$tdataASIGNACIONES_FAMILIARES[".exportFields"][] = "fecha_pres";
$tdataASIGNACIONES_FAMILIARES[".exportFields"][] = "pre_num_paq";
$tdataASIGNACIONES_FAMILIARES[".exportFields"][] = "paq_monto";
$tdataASIGNACIONES_FAMILIARES[".exportFields"][] = "sub_natalidad";
$tdataASIGNACIONES_FAMILIARES[".exportFields"][] = "lac_num_paq";
$tdataASIGNACIONES_FAMILIARES[".exportFields"][] = "lac_monto";
$tdataASIGNACIONES_FAMILIARES[".exportFields"][] = "sepelio";
$tdataASIGNACIONES_FAMILIARES[".exportFields"][] = "sub_total_pago_sedem";
$tdataASIGNACIONES_FAMILIARES[".exportFields"][] = "fecha_registro";
$tdataASIGNACIONES_FAMILIARES[".exportFields"][] = "name";
$tdataASIGNACIONES_FAMILIARES[".exportFields"][] = "l_name1";
$tdataASIGNACIONES_FAMILIARES[".exportFields"][] = "l_name2";
$tdataASIGNACIONES_FAMILIARES[".exportFields"][] = "ci";
$tdataASIGNACIONES_FAMILIARES[".exportFields"][] = "expe";

$tdataASIGNACIONES_FAMILIARES[".importFields"] = array();
$tdataASIGNACIONES_FAMILIARES[".importFields"][] = "id_asig";
$tdataASIGNACIONES_FAMILIARES[".importFields"][] = "fecha_nac";
$tdataASIGNACIONES_FAMILIARES[".importFields"][] = "fecha_pres";
$tdataASIGNACIONES_FAMILIARES[".importFields"][] = "pre_num_paq";
$tdataASIGNACIONES_FAMILIARES[".importFields"][] = "paq_monto";
$tdataASIGNACIONES_FAMILIARES[".importFields"][] = "sub_natalidad";
$tdataASIGNACIONES_FAMILIARES[".importFields"][] = "lac_num_paq";
$tdataASIGNACIONES_FAMILIARES[".importFields"][] = "lac_monto";
$tdataASIGNACIONES_FAMILIARES[".importFields"][] = "sepelio";
$tdataASIGNACIONES_FAMILIARES[".importFields"][] = "sub_total_pago_sedem";
$tdataASIGNACIONES_FAMILIARES[".importFields"][] = "fecha_registro";
$tdataASIGNACIONES_FAMILIARES[".importFields"][] = "name";
$tdataASIGNACIONES_FAMILIARES[".importFields"][] = "l_name1";
$tdataASIGNACIONES_FAMILIARES[".importFields"][] = "l_name2";
$tdataASIGNACIONES_FAMILIARES[".importFields"][] = "ci";
$tdataASIGNACIONES_FAMILIARES[".importFields"][] = "expe";

$tdataASIGNACIONES_FAMILIARES[".printFields"] = array();
$tdataASIGNACIONES_FAMILIARES[".printFields"][] = "id_asig";
$tdataASIGNACIONES_FAMILIARES[".printFields"][] = "fecha_nac";
$tdataASIGNACIONES_FAMILIARES[".printFields"][] = "fecha_pres";
$tdataASIGNACIONES_FAMILIARES[".printFields"][] = "pre_num_paq";
$tdataASIGNACIONES_FAMILIARES[".printFields"][] = "paq_monto";
$tdataASIGNACIONES_FAMILIARES[".printFields"][] = "sub_natalidad";
$tdataASIGNACIONES_FAMILIARES[".printFields"][] = "lac_num_paq";
$tdataASIGNACIONES_FAMILIARES[".printFields"][] = "lac_monto";
$tdataASIGNACIONES_FAMILIARES[".printFields"][] = "sepelio";
$tdataASIGNACIONES_FAMILIARES[".printFields"][] = "sub_total_pago_sedem";
$tdataASIGNACIONES_FAMILIARES[".printFields"][] = "fecha_registro";
$tdataASIGNACIONES_FAMILIARES[".printFields"][] = "name";
$tdataASIGNACIONES_FAMILIARES[".printFields"][] = "l_name1";
$tdataASIGNACIONES_FAMILIARES[".printFields"][] = "l_name2";
$tdataASIGNACIONES_FAMILIARES[".printFields"][] = "ci";
$tdataASIGNACIONES_FAMILIARES[".printFields"][] = "expe";

//	id_asig
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_asig";
	$fdata["GoodName"] = "id_asig";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("ASIGNACIONES_FAMILIARES","id_asig"); 
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
	
		$fdata["strField"] = "id_asig"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_asignaciones.id_asig";
	
		
		
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

	

	
	$tdataASIGNACIONES_FAMILIARES["id_asig"] = $fdata;
//	fecha_nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha_nac";
	$fdata["GoodName"] = "fecha_nac";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("ASIGNACIONES_FAMILIARES","fecha_nac"); 
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
	$fdata["FullName"] = "t_asignaciones.fecha_nac";
	
		
		
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
	
		
		
		$edata["DateEditType"] = 2; 
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

	

	
	$tdataASIGNACIONES_FAMILIARES["fecha_nac"] = $fdata;
//	fecha_pres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha_pres";
	$fdata["GoodName"] = "fecha_pres";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("ASIGNACIONES_FAMILIARES","fecha_pres"); 
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
	
		$fdata["strField"] = "fecha_pres"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_asignaciones.fecha_pres";
	
		
		
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
	
		
		
		$edata["DateEditType"] = 2; 
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

	

	
	$tdataASIGNACIONES_FAMILIARES["fecha_pres"] = $fdata;
//	pre_num_paq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pre_num_paq";
	$fdata["GoodName"] = "pre_num_paq";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("ASIGNACIONES_FAMILIARES","pre_num_paq"); 
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
	
		$fdata["strField"] = "pre_num_paq"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_asignaciones.pre_num_paq";
	
		
		
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

	

	
	$tdataASIGNACIONES_FAMILIARES["pre_num_paq"] = $fdata;
//	paq_monto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "paq_monto";
	$fdata["GoodName"] = "paq_monto";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("ASIGNACIONES_FAMILIARES","paq_monto"); 
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
	
		$fdata["strField"] = "paq_monto"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_asignaciones.paq_monto";
	
		
		
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataASIGNACIONES_FAMILIARES["paq_monto"] = $fdata;
//	sub_natalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sub_natalidad";
	$fdata["GoodName"] = "sub_natalidad";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("ASIGNACIONES_FAMILIARES","sub_natalidad"); 
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
	
		$fdata["strField"] = "sub_natalidad"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_asignaciones.sub_natalidad";
	
		
		
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

	

	
	$tdataASIGNACIONES_FAMILIARES["sub_natalidad"] = $fdata;
//	lac_num_paq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "lac_num_paq";
	$fdata["GoodName"] = "lac_num_paq";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("ASIGNACIONES_FAMILIARES","lac_num_paq"); 
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
	
		$fdata["strField"] = "lac_num_paq"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_asignaciones.lac_num_paq";
	
		
		
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
			
		$edata["controlWidth"] = 50;
	
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

	

	
	$tdataASIGNACIONES_FAMILIARES["lac_num_paq"] = $fdata;
//	lac_monto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "lac_monto";
	$fdata["GoodName"] = "lac_monto";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("ASIGNACIONES_FAMILIARES","lac_monto"); 
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
	
		$fdata["strField"] = "lac_monto"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_asignaciones.lac_monto";
	
		
		
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

	

	
	$tdataASIGNACIONES_FAMILIARES["lac_monto"] = $fdata;
//	sepelio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sepelio";
	$fdata["GoodName"] = "sepelio";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("ASIGNACIONES_FAMILIARES","sepelio"); 
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
	
		$fdata["strField"] = "sepelio"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_asignaciones.sepelio";
	
		
		
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

	

	
	$tdataASIGNACIONES_FAMILIARES["sepelio"] = $fdata;
//	sub_total_pago_sedem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sub_total_pago_sedem";
	$fdata["GoodName"] = "sub_total_pago_sedem";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("ASIGNACIONES_FAMILIARES","sub_total_pago_sedem"); 
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
	
		$fdata["strField"] = "sub_total_pago_sedem"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_asignaciones.sub_total_pago_sedem";
	
		
		
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataASIGNACIONES_FAMILIARES["sub_total_pago_sedem"] = $fdata;
//	fecha_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fecha_registro";
	$fdata["GoodName"] = "fecha_registro";
	$fdata["ownerTable"] = "t_asignaciones";
	$fdata["Label"] = GetFieldLabel("ASIGNACIONES_FAMILIARES","fecha_registro"); 
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
	
		$fdata["strField"] = "fecha_registro"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_asignaciones.fecha_registro";
	
		
		
				
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

	

	
	$tdataASIGNACIONES_FAMILIARES["fecha_registro"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("ASIGNACIONES_FAMILIARES","name"); 
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

	

	
	$tdataASIGNACIONES_FAMILIARES["name"] = $fdata;
//	l_name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "l_name1";
	$fdata["GoodName"] = "l_name1";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("ASIGNACIONES_FAMILIARES","l_name1"); 
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

	

	
	$tdataASIGNACIONES_FAMILIARES["l_name1"] = $fdata;
//	l_name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "l_name2";
	$fdata["GoodName"] = "l_name2";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("ASIGNACIONES_FAMILIARES","l_name2"); 
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

	

	
	$tdataASIGNACIONES_FAMILIARES["l_name2"] = $fdata;
//	ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ci";
	$fdata["GoodName"] = "ci";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("ASIGNACIONES_FAMILIARES","ci"); 
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

	

	
	$tdataASIGNACIONES_FAMILIARES["ci"] = $fdata;
//	expe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "expe";
	$fdata["GoodName"] = "expe";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("ASIGNACIONES_FAMILIARES","expe"); 
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

	

	
	$tdataASIGNACIONES_FAMILIARES["expe"] = $fdata;

	
$tables_data["ASIGNACIONES FAMILIARES"]=&$tdataASIGNACIONES_FAMILIARES;
$field_labels["ASIGNACIONES_FAMILIARES"] = &$fieldLabelsASIGNACIONES_FAMILIARES;
$fieldToolTips["ASIGNACIONES FAMILIARES"] = &$fieldToolTipsASIGNACIONES_FAMILIARES;
$page_titles["ASIGNACIONES_FAMILIARES"] = &$pageTitlesASIGNACIONES_FAMILIARES;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ASIGNACIONES FAMILIARES"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["ASIGNACIONES FAMILIARES"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ASIGNACIONES_FAMILIARES()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_asignaciones.id_asig,  t_asignaciones.fecha_nac,  t_asignaciones.fecha_pres,  t_asignaciones.pre_num_paq,  t_asignaciones.paq_monto,  t_asignaciones.sub_natalidad,  t_asignaciones.lac_num_paq,  t_asignaciones.lac_monto,  t_asignaciones.sepelio,  t_asignaciones.sub_total_pago_sedem,  t_asignaciones.fecha_registro,  funcionario.name,  funcionario.l_name1,  funcionario.l_name2,  funcionario.ci,  funcionario.expe";
$proto0["m_strFrom"] = "FROM t_asignaciones  INNER JOIN funcionario ON t_asignaciones.id_asig = funcionario.id_func";
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
	"m_srcTableName" => "ASIGNACIONES FAMILIARES"
));

$proto5["m_sql"] = "t_asignaciones.id_asig";
$proto5["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_nac",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "ASIGNACIONES FAMILIARES"
));

$proto7["m_sql"] = "t_asignaciones.fecha_nac";
$proto7["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_pres",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "ASIGNACIONES FAMILIARES"
));

$proto9["m_sql"] = "t_asignaciones.fecha_pres";
$proto9["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "pre_num_paq",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "ASIGNACIONES FAMILIARES"
));

$proto11["m_sql"] = "t_asignaciones.pre_num_paq";
$proto11["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "paq_monto",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "ASIGNACIONES FAMILIARES"
));

$proto13["m_sql"] = "t_asignaciones.paq_monto";
$proto13["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_natalidad",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "ASIGNACIONES FAMILIARES"
));

$proto15["m_sql"] = "t_asignaciones.sub_natalidad";
$proto15["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "lac_num_paq",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "ASIGNACIONES FAMILIARES"
));

$proto17["m_sql"] = "t_asignaciones.lac_num_paq";
$proto17["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "lac_monto",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "ASIGNACIONES FAMILIARES"
));

$proto19["m_sql"] = "t_asignaciones.lac_monto";
$proto19["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "sepelio",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "ASIGNACIONES FAMILIARES"
));

$proto21["m_sql"] = "t_asignaciones.sepelio";
$proto21["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_total_pago_sedem",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "ASIGNACIONES FAMILIARES"
));

$proto23["m_sql"] = "t_asignaciones.sub_total_pago_sedem";
$proto23["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_registro",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "ASIGNACIONES FAMILIARES"
));

$proto25["m_sql"] = "t_asignaciones.fecha_registro";
$proto25["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "ASIGNACIONES FAMILIARES"
));

$proto27["m_sql"] = "funcionario.name";
$proto27["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "l_name1",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "ASIGNACIONES FAMILIARES"
));

$proto29["m_sql"] = "funcionario.l_name1";
$proto29["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "l_name2",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "ASIGNACIONES FAMILIARES"
));

$proto31["m_sql"] = "funcionario.l_name2";
$proto31["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "ci",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "ASIGNACIONES FAMILIARES"
));

$proto33["m_sql"] = "funcionario.ci";
$proto33["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "expe",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "ASIGNACIONES FAMILIARES"
));

$proto35["m_sql"] = "funcionario.expe";
$proto35["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "t_asignaciones";
$proto38["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "id_asig";
$proto38["m_columns"][] = "fecha_nac";
$proto38["m_columns"][] = "fecha_pres";
$proto38["m_columns"][] = "pre_num_paq";
$proto38["m_columns"][] = "paq_monto";
$proto38["m_columns"][] = "sub_natalidad";
$proto38["m_columns"][] = "lac_num_paq";
$proto38["m_columns"][] = "lac_monto";
$proto38["m_columns"][] = "sepelio";
$proto38["m_columns"][] = "sub_total_pago_sedem";
$proto38["m_columns"][] = "fecha_registro";
$proto38["m_columns"][] = "id_adm";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "t_asignaciones";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
												$proto41=array();
$proto41["m_link"] = "SQLL_INNERJOIN";
			$proto42=array();
$proto42["m_strName"] = "funcionario";
$proto42["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "id_func";
$proto42["m_columns"][] = "estado";
$proto42["m_columns"][] = "name";
$proto42["m_columns"][] = "l_name1";
$proto42["m_columns"][] = "l_name2";
$proto42["m_columns"][] = "l_name_es";
$proto42["m_columns"][] = "nationality";
$proto42["m_columns"][] = "nati";
$proto42["m_columns"][] = "ci";
$proto42["m_columns"][] = "expe";
$proto42["m_columns"][] = "afp";
$proto42["m_columns"][] = "nua";
$proto42["m_columns"][] = "c_status";
$proto42["m_columns"][] = "sex";
$proto42["m_columns"][] = "g_blood";
$proto42["m_columns"][] = "p_email";
$proto42["m_columns"][] = "job_email";
$proto42["m_columns"][] = "adress";
$proto42["m_columns"][] = "place_res";
$proto42["m_columns"][] = "phone_num";
$proto42["m_columns"][] = "cel_num";
$proto42["m_columns"][] = "phone_job";
$proto42["m_columns"][] = "p1_born";
$proto42["m_columns"][] = "p2_born";
$proto42["m_columns"][] = "p3_born";
$proto42["m_columns"][] = "date_born";
$proto42["m_columns"][] = "lic_driv";
$proto42["m_columns"][] = "type_lic";
$proto42["m_columns"][] = "prof";
$proto42["m_columns"][] = "col_prof";
$proto42["m_columns"][] = "num_prof";
$proto42["m_columns"][] = "nit";
$proto42["m_columns"][] = "on_off";
$proto42["m_columns"][] = "last_gra";
$proto42["m_columns"][] = "cole";
$proto42["m_columns"][] = "ciudad_de";
$proto42["m_columns"][] = "anyo_de";
$proto42["m_columns"][] = "title";
$proto42["m_columns"][] = "nro_libreta";
$proto42["m_columns"][] = "matricula";
$proto42["m_columns"][] = "anyo";
$proto42["m_columns"][] = "tipo_libreta";
$proto42["m_columns"][] = "nro_referencia1";
$proto42["m_columns"][] = "nro_referencia2";
$proto42["m_columns"][] = "es_estudiante";
$proto42["m_columns"][] = "nombre_carrera";
$proto42["m_columns"][] = "especialidad";
$proto42["m_columns"][] = "ultimo_anyo";
$proto42["m_columns"][] = "foto";
$proto42["m_columns"][] = "updated_at";
$proto42["m_columns"][] = "created_at";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "INNER JOIN funcionario ON t_asignaciones.id_asig = funcionario.id_func";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "ASIGNACIONES FAMILIARES";
$proto43=array();
$proto43["m_sql"] = "t_asignaciones.id_asig = funcionario.id_func";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_asig",
	"m_strTable" => "t_asignaciones",
	"m_srcTableName" => "ASIGNACIONES FAMILIARES"
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "= funcionario.id_func";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ASIGNACIONES FAMILIARES";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ASIGNACIONES_FAMILIARES = createSqlQuery_ASIGNACIONES_FAMILIARES();


	
																
	
$tdataASIGNACIONES_FAMILIARES[".sqlquery"] = $queryData_ASIGNACIONES_FAMILIARES;

$tableEvents["ASIGNACIONES FAMILIARES"] = new eventsBase;
$tdataASIGNACIONES_FAMILIARES[".hasEvents"] = false;

?>