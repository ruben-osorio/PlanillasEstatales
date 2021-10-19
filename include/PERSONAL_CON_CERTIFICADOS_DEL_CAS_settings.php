<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS = array();	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".truncateText"] = true;
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".NumberOfChars"] = 80; 
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".ShortName"] = "PERSONAL_CON_CERTIFICADOS_DEL_CAS";
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".OwnerID"] = "";
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".OriginalTable"] = "old_cas";

//	field labels
$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS = array();
$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS = array();
$pageTitlesPERSONAL_CON_CERTIFICADOS_DEL_CAS = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"] = array();
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"] = array();
	$pageTitlesPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"] = array();
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["fecha_registro_dato"] = "FECHA DE REGISTRO CAS";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["fecha_registro_dato"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["id_old_cas"] = "ID CAS";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["id_old_cas"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["id_per"] = "ID PER";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["id_per"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["date_start"] = "FECHA DE INICIO";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["date_start"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["date_last"] = "FECHA FINAL";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["date_last"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["date_cas"] = "FECHA DEL CERTIFICADO CAS";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["date_cas"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["year_rat"] = "AÑO CALIFICADO";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["year_rat"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["month_rat"] = "MES CALIFICADO";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["month_rat"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["day_rat"] = "DIÁS CALIFICADO";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["day_rat"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["paterno"] = "AP. PATERNO ";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["paterno"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["materno"] = "AP. MATERNO";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["materno"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["nombres"] = "NOMBRES";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["nombres"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["cargo"] = "CARGO";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["cargo"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["unidad"] = "UNIDAD";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["unidad"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["item_contrato"] = "ITEM/CONTRATO";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["item_contrato"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["ci"] = "CI";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["ci"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["exp"] = "EXP.";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]["exp"] = "";
	if (count($fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["Spanish"]))
		$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""] = array();
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""] = array();
	$pageTitlesPERSONAL_CON_CERTIFICADOS_DEL_CAS[""] = array();
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["fecha_registro_dato"] = "Fecha Registro Dato";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["fecha_registro_dato"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["id_old_cas"] = "Id Old Cas";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["id_old_cas"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["id_per"] = "Id Per";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["id_per"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["date_start"] = "Date Start";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["date_start"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["date_last"] = "Date Last";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["date_last"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["date_cas"] = "Date Cas";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["date_cas"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["year_rat"] = "Year Rat";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["year_rat"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["month_rat"] = "Month Rat";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["month_rat"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["day_rat"] = "Day Rat";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["day_rat"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["paterno"] = "Paterno";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["paterno"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["materno"] = "Materno";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["materno"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["nombres"] = "Nombres";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["nombres"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["cargo"] = "Cargo";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["cargo"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["unidad"] = "Unidad";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["unidad"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["item_contrato"] = "Item Contrato";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["item_contrato"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["ci"] = "Ci";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["ci"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["exp"] = "Exp";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]["exp"] = "";
	if (count($fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS[""]))
		$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"] = array();
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"] = array();
	$pageTitlesPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"] = array();
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["fecha_registro_dato"] = "Fecha Registro Dato";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["fecha_registro_dato"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["id_old_cas"] = "Id Old Cas";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["id_old_cas"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["id_per"] = "Id Per";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["id_per"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["date_start"] = "Date Start";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["date_start"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["date_last"] = "Date Last";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["date_last"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["date_cas"] = "Date Cas";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["date_cas"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["year_rat"] = "Year Rat";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["year_rat"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["month_rat"] = "Month Rat";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["month_rat"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["day_rat"] = "Day Rat";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["day_rat"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["paterno"] = "Paterno";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["paterno"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["materno"] = "Materno";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["materno"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["nombres"] = "Nombres";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["nombres"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["cargo"] = "Cargo";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["cargo"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["unidad"] = "Unidad";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["unidad"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["item_contrato"] = "Item Contrato";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["item_contrato"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["ci"] = "Ci";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["ci"] = "";
	$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["exp"] = "Exp";
	$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]["exp"] = "";
	if (count($fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS["English"]))
		$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".isUseToolTips"] = true;
}
	
	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".NCSearch"] = true;



$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".shortTableName"] = "PERSONAL_CON_CERTIFICADOS_DEL_CAS";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".nSecOptions"] = 0;
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".recsPerRowList"] = 1;
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".recsPerRowPrint"] = 1;
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".mainTableOwnerID"] = "";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".moveNext"] = 1;
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".entityType"] = 2;

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".strOriginalTableName"] = "old_cas";




$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".showAddInPopup"] = false;

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".showEditInPopup"] = false;

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".fieldsForRegister"] = array();

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".listAjax"] = false;

	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".audit"] = false;

	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".locking"] = false;

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".edit"] = true;
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".afterEditAction"] = 1;
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".closePopupAfterEdit"] = 1;
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".afterEditActionDetTable"] = "";

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".add"] = true;
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".afterAddAction"] = 1;
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".closePopupAfterAdd"] = 1;
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".afterAddActionDetTable"] = "";

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".list"] = true;

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineEdit"] = true;
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineAdd"] = true;
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".view"] = true;


$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".exportTo"] = true;

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printFriendly"] = true;

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".delete"] = true;

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".searchSaving"] = false;
//

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".showSearchPanel"] = true;
		$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".flexibleSearch"] = true;		

if (isMobile())
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".isUseAjaxSuggest"] = false;
else 
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".isUseAjaxSuggest"] = true;




$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".isUseTimeForSearch"] = false;





$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".allSearchFields"] = array();
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".filterFields"] = array();
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".requiredSearchFields"] = array();

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".allSearchFields"][] = "fecha_registro_dato";
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".allSearchFields"][] = "id_old_cas";
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".allSearchFields"][] = "id_per";
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".allSearchFields"][] = "date_start";
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".allSearchFields"][] = "date_last";
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".allSearchFields"][] = "date_cas";
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".allSearchFields"][] = "year_rat";
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".allSearchFields"][] = "month_rat";
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".allSearchFields"][] = "day_rat";
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".allSearchFields"][] = "paterno";
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".allSearchFields"][] = "materno";
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".allSearchFields"][] = "nombres";
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".allSearchFields"][] = "cargo";
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".allSearchFields"][] = "unidad";
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".allSearchFields"][] = "item_contrato";
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".allSearchFields"][] = "ci";
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".allSearchFields"][] = "exp";
	

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".googleLikeFields"] = array();
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".googleLikeFields"][] = "fecha_registro_dato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".googleLikeFields"][] = "id_old_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".googleLikeFields"][] = "id_per";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".googleLikeFields"][] = "date_start";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".googleLikeFields"][] = "date_last";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".googleLikeFields"][] = "date_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".googleLikeFields"][] = "year_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".googleLikeFields"][] = "month_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".googleLikeFields"][] = "day_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".googleLikeFields"][] = "paterno";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".googleLikeFields"][] = "materno";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".googleLikeFields"][] = "nombres";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".googleLikeFields"][] = "cargo";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".googleLikeFields"][] = "unidad";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".googleLikeFields"][] = "item_contrato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".googleLikeFields"][] = "ci";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".googleLikeFields"][] = "exp";


$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".advSearchFields"] = array();
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".advSearchFields"][] = "fecha_registro_dato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".advSearchFields"][] = "id_old_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".advSearchFields"][] = "id_per";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".advSearchFields"][] = "date_start";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".advSearchFields"][] = "date_last";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".advSearchFields"][] = "date_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".advSearchFields"][] = "year_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".advSearchFields"][] = "month_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".advSearchFields"][] = "day_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".advSearchFields"][] = "paterno";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".advSearchFields"][] = "materno";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".advSearchFields"][] = "nombres";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".advSearchFields"][] = "cargo";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".advSearchFields"][] = "unidad";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".advSearchFields"][] = "item_contrato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".advSearchFields"][] = "ci";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".advSearchFields"][] = "exp";

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".tableType"] = "report";

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printerPageOrientation"] = 0;
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".nPrinterPageScale"] = 100;

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".nPrinterSplitRecords"] = 40;

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".nPrinterPDFSplitRecords"] = 40;



$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".geocodingEnabled"] = false;

//report settings
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printReportLayout"] = 6;	

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".reportPrintPartitionType"] = 1;	
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".reportPrintGroupsPerPage"] = 40;	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".reportPrintPDFGroupsPerPage"] = 40;
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".lowGroup"] = 0;



$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".pageSize"] = 20;	






$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".repShowDet"] = true;

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".strOrderBy"] = $tstrOrderBy;

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".orderindexes"] = array();

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".sqlHead"] = "SELECT old_cas.fecha_registro_dato,  old_cas.id_old_cas,  old_cas.id_per,  old_cas.date_start,  old_cas.date_last,  old_cas.date_cas,  old_cas.year_rat,  old_cas.month_rat,  old_cas.day_rat,  t_planilla_c.paterno,  t_planilla_c.materno,  t_planilla_c.nombres,  t_planilla_c.cargo,  t_planilla_c.unidad,  t_planilla_c.item_contrato,  t_planilla_c.ci,  t_planilla_c.exp";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".sqlFrom"] = "FROM old_cas  INNER JOIN t_planilla_c ON old_cas.id_per = t_planilla_c.id_func";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".sqlWhereExpr"] = "";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".arrGroupsPerPage"] = $arrGPP;

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".highlightSearchResults"] = true;

$tableKeysPERSONAL_CON_CERTIFICADOS_DEL_CAS = array();
$tableKeysPERSONAL_CON_CERTIFICADOS_DEL_CAS[] = "id_old_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".Keys"] = $tableKeysPERSONAL_CON_CERTIFICADOS_DEL_CAS;

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".listFields"] = array();
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".listFields"][] = "fecha_registro_dato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".listFields"][] = "id_old_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".listFields"][] = "id_per";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".listFields"][] = "date_start";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".listFields"][] = "date_last";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".listFields"][] = "date_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".listFields"][] = "year_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".listFields"][] = "month_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".listFields"][] = "day_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".listFields"][] = "paterno";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".listFields"][] = "materno";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".listFields"][] = "nombres";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".listFields"][] = "cargo";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".listFields"][] = "unidad";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".listFields"][] = "item_contrato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".listFields"][] = "ci";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".listFields"][] = "exp";

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".hideMobileList"] = array();


$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".viewFields"] = array();
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".viewFields"][] = "fecha_registro_dato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".viewFields"][] = "id_old_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".viewFields"][] = "id_per";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".viewFields"][] = "date_start";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".viewFields"][] = "date_last";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".viewFields"][] = "date_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".viewFields"][] = "year_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".viewFields"][] = "month_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".viewFields"][] = "day_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".viewFields"][] = "paterno";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".viewFields"][] = "materno";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".viewFields"][] = "nombres";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".viewFields"][] = "cargo";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".viewFields"][] = "unidad";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".viewFields"][] = "item_contrato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".viewFields"][] = "ci";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".viewFields"][] = "exp";

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".addFields"] = array();
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".addFields"][] = "fecha_registro_dato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".addFields"][] = "id_per";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".addFields"][] = "date_start";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".addFields"][] = "date_last";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".addFields"][] = "date_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".addFields"][] = "year_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".addFields"][] = "month_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".addFields"][] = "day_rat";

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".masterListFields"] = array();
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".masterListFields"][] = "fecha_registro_dato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".masterListFields"][] = "id_old_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".masterListFields"][] = "id_per";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".masterListFields"][] = "date_start";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".masterListFields"][] = "date_last";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".masterListFields"][] = "date_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".masterListFields"][] = "year_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".masterListFields"][] = "month_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".masterListFields"][] = "day_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".masterListFields"][] = "paterno";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".masterListFields"][] = "materno";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".masterListFields"][] = "nombres";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".masterListFields"][] = "cargo";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".masterListFields"][] = "unidad";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".masterListFields"][] = "item_contrato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".masterListFields"][] = "ci";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".masterListFields"][] = "exp";

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineAddFields"] = array();
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineAddFields"][] = "fecha_registro_dato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineAddFields"][] = "id_per";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineAddFields"][] = "date_start";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineAddFields"][] = "date_last";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineAddFields"][] = "date_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineAddFields"][] = "year_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineAddFields"][] = "month_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineAddFields"][] = "day_rat";

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".editFields"] = array();
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".editFields"][] = "fecha_registro_dato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".editFields"][] = "id_per";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".editFields"][] = "date_start";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".editFields"][] = "date_last";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".editFields"][] = "date_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".editFields"][] = "year_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".editFields"][] = "month_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".editFields"][] = "day_rat";

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineEditFields"] = array();
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineEditFields"][] = "fecha_registro_dato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineEditFields"][] = "id_per";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineEditFields"][] = "date_start";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineEditFields"][] = "date_last";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineEditFields"][] = "date_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineEditFields"][] = "year_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineEditFields"][] = "month_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".inlineEditFields"][] = "day_rat";

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".exportFields"] = array();
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".exportFields"][] = "fecha_registro_dato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".exportFields"][] = "id_old_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".exportFields"][] = "id_per";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".exportFields"][] = "date_start";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".exportFields"][] = "date_last";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".exportFields"][] = "date_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".exportFields"][] = "year_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".exportFields"][] = "month_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".exportFields"][] = "day_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".exportFields"][] = "paterno";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".exportFields"][] = "materno";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".exportFields"][] = "nombres";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".exportFields"][] = "cargo";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".exportFields"][] = "unidad";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".exportFields"][] = "item_contrato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".exportFields"][] = "ci";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".exportFields"][] = "exp";

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".importFields"] = array();
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".importFields"][] = "fecha_registro_dato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".importFields"][] = "id_old_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".importFields"][] = "id_per";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".importFields"][] = "date_start";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".importFields"][] = "date_last";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".importFields"][] = "date_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".importFields"][] = "year_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".importFields"][] = "month_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".importFields"][] = "day_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".importFields"][] = "paterno";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".importFields"][] = "materno";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".importFields"][] = "nombres";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".importFields"][] = "cargo";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".importFields"][] = "unidad";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".importFields"][] = "item_contrato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".importFields"][] = "ci";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".importFields"][] = "exp";

$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printFields"] = array();
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printFields"][] = "fecha_registro_dato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printFields"][] = "id_old_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printFields"][] = "id_per";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printFields"][] = "date_start";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printFields"][] = "date_last";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printFields"][] = "date_cas";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printFields"][] = "year_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printFields"][] = "month_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printFields"][] = "day_rat";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printFields"][] = "paterno";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printFields"][] = "materno";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printFields"][] = "nombres";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printFields"][] = "cargo";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printFields"][] = "unidad";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printFields"][] = "item_contrato";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printFields"][] = "ci";
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".printFields"][] = "exp";

//	fecha_registro_dato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fecha_registro_dato";
	$fdata["GoodName"] = "fecha_registro_dato";
	$fdata["ownerTable"] = "old_cas";
	$fdata["Label"] = GetFieldLabel("PERSONAL_CON_CERTIFICADOS_DEL_CAS","fecha_registro_dato"); 
	$fdata["FieldType"] = 135;
	
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
	
		$fdata["strField"] = "fecha_registro_dato"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "old_cas.fecha_registro_dato";
	
		
		
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

	

	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS["fecha_registro_dato"] = $fdata;
//	id_old_cas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_old_cas";
	$fdata["GoodName"] = "id_old_cas";
	$fdata["ownerTable"] = "old_cas";
	$fdata["Label"] = GetFieldLabel("PERSONAL_CON_CERTIFICADOS_DEL_CAS","id_old_cas"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id_old_cas"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "old_cas.id_old_cas";
	
		
		
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

	

	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS["id_old_cas"] = $fdata;
//	id_per
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_per";
	$fdata["GoodName"] = "id_per";
	$fdata["ownerTable"] = "old_cas";
	$fdata["Label"] = GetFieldLabel("PERSONAL_CON_CERTIFICADOS_DEL_CAS","id_per"); 
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
	
		$fdata["strField"] = "id_per"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "old_cas.id_per";
	
		
		
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

	

	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS["id_per"] = $fdata;
//	date_start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "date_start";
	$fdata["GoodName"] = "date_start";
	$fdata["ownerTable"] = "old_cas";
	$fdata["Label"] = GetFieldLabel("PERSONAL_CON_CERTIFICADOS_DEL_CAS","date_start"); 
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
	
		$fdata["strField"] = "date_start"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "old_cas.date_start";
	
		
		
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

	

	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS["date_start"] = $fdata;
//	date_last
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "date_last";
	$fdata["GoodName"] = "date_last";
	$fdata["ownerTable"] = "old_cas";
	$fdata["Label"] = GetFieldLabel("PERSONAL_CON_CERTIFICADOS_DEL_CAS","date_last"); 
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
	
		$fdata["strField"] = "date_last"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "old_cas.date_last";
	
		
		
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

	

	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS["date_last"] = $fdata;
//	date_cas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "date_cas";
	$fdata["GoodName"] = "date_cas";
	$fdata["ownerTable"] = "old_cas";
	$fdata["Label"] = GetFieldLabel("PERSONAL_CON_CERTIFICADOS_DEL_CAS","date_cas"); 
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
	
		$fdata["strField"] = "date_cas"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "old_cas.date_cas";
	
		
		
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

	

	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS["date_cas"] = $fdata;
//	year_rat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "year_rat";
	$fdata["GoodName"] = "year_rat";
	$fdata["ownerTable"] = "old_cas";
	$fdata["Label"] = GetFieldLabel("PERSONAL_CON_CERTIFICADOS_DEL_CAS","year_rat"); 
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
	
		$fdata["strField"] = "year_rat"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "old_cas.year_rat";
	
		
		
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

	

	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS["year_rat"] = $fdata;
//	month_rat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "month_rat";
	$fdata["GoodName"] = "month_rat";
	$fdata["ownerTable"] = "old_cas";
	$fdata["Label"] = GetFieldLabel("PERSONAL_CON_CERTIFICADOS_DEL_CAS","month_rat"); 
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
	
		$fdata["strField"] = "month_rat"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "old_cas.month_rat";
	
		
		
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

	

	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS["month_rat"] = $fdata;
//	day_rat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "day_rat";
	$fdata["GoodName"] = "day_rat";
	$fdata["ownerTable"] = "old_cas";
	$fdata["Label"] = GetFieldLabel("PERSONAL_CON_CERTIFICADOS_DEL_CAS","day_rat"); 
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
	
		$fdata["strField"] = "day_rat"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "old_cas.day_rat";
	
		
		
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

	

	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS["day_rat"] = $fdata;
//	paterno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "paterno";
	$fdata["GoodName"] = "paterno";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_CON_CERTIFICADOS_DEL_CAS","paterno"); 
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

	

	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS["paterno"] = $fdata;
//	materno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "materno";
	$fdata["GoodName"] = "materno";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_CON_CERTIFICADOS_DEL_CAS","materno"); 
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

	

	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS["materno"] = $fdata;
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_CON_CERTIFICADOS_DEL_CAS","nombres"); 
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

	

	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS["nombres"] = $fdata;
//	cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cargo";
	$fdata["GoodName"] = "cargo";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_CON_CERTIFICADOS_DEL_CAS","cargo"); 
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

	

	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS["cargo"] = $fdata;
//	unidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "unidad";
	$fdata["GoodName"] = "unidad";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_CON_CERTIFICADOS_DEL_CAS","unidad"); 
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

	

	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS["unidad"] = $fdata;
//	item_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "item_contrato";
	$fdata["GoodName"] = "item_contrato";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_CON_CERTIFICADOS_DEL_CAS","item_contrato"); 
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

	

	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS["item_contrato"] = $fdata;
//	ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ci";
	$fdata["GoodName"] = "ci";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_CON_CERTIFICADOS_DEL_CAS","ci"); 
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

	

	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS["ci"] = $fdata;
//	exp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "exp";
	$fdata["GoodName"] = "exp";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("PERSONAL_CON_CERTIFICADOS_DEL_CAS","exp"); 
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

	

	
	$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS["exp"] = $fdata;

	
$tables_data["PERSONAL CON CERTIFICADOS DEL CAS"]=&$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS;
$field_labels["PERSONAL_CON_CERTIFICADOS_DEL_CAS"] = &$fieldLabelsPERSONAL_CON_CERTIFICADOS_DEL_CAS;
$fieldToolTips["PERSONAL CON CERTIFICADOS DEL CAS"] = &$fieldToolTipsPERSONAL_CON_CERTIFICADOS_DEL_CAS;
$page_titles["PERSONAL_CON_CERTIFICADOS_DEL_CAS"] = &$pageTitlesPERSONAL_CON_CERTIFICADOS_DEL_CAS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PERSONAL CON CERTIFICADOS DEL CAS"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["PERSONAL CON CERTIFICADOS DEL CAS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PERSONAL_CON_CERTIFICADOS_DEL_CAS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "old_cas.fecha_registro_dato,  old_cas.id_old_cas,  old_cas.id_per,  old_cas.date_start,  old_cas.date_last,  old_cas.date_cas,  old_cas.year_rat,  old_cas.month_rat,  old_cas.day_rat,  t_planilla_c.paterno,  t_planilla_c.materno,  t_planilla_c.nombres,  t_planilla_c.cargo,  t_planilla_c.unidad,  t_planilla_c.item_contrato,  t_planilla_c.ci,  t_planilla_c.exp";
$proto0["m_strFrom"] = "FROM old_cas  INNER JOIN t_planilla_c ON old_cas.id_per = t_planilla_c.id_func";
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
	"m_strName" => "fecha_registro_dato",
	"m_strTable" => "old_cas",
	"m_srcTableName" => "PERSONAL CON CERTIFICADOS DEL CAS"
));

$proto5["m_sql"] = "old_cas.fecha_registro_dato";
$proto5["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_old_cas",
	"m_strTable" => "old_cas",
	"m_srcTableName" => "PERSONAL CON CERTIFICADOS DEL CAS"
));

$proto7["m_sql"] = "old_cas.id_old_cas";
$proto7["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "id_per",
	"m_strTable" => "old_cas",
	"m_srcTableName" => "PERSONAL CON CERTIFICADOS DEL CAS"
));

$proto9["m_sql"] = "old_cas.id_per";
$proto9["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "date_start",
	"m_strTable" => "old_cas",
	"m_srcTableName" => "PERSONAL CON CERTIFICADOS DEL CAS"
));

$proto11["m_sql"] = "old_cas.date_start";
$proto11["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "date_last",
	"m_strTable" => "old_cas",
	"m_srcTableName" => "PERSONAL CON CERTIFICADOS DEL CAS"
));

$proto13["m_sql"] = "old_cas.date_last";
$proto13["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "date_cas",
	"m_strTable" => "old_cas",
	"m_srcTableName" => "PERSONAL CON CERTIFICADOS DEL CAS"
));

$proto15["m_sql"] = "old_cas.date_cas";
$proto15["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "year_rat",
	"m_strTable" => "old_cas",
	"m_srcTableName" => "PERSONAL CON CERTIFICADOS DEL CAS"
));

$proto17["m_sql"] = "old_cas.year_rat";
$proto17["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "month_rat",
	"m_strTable" => "old_cas",
	"m_srcTableName" => "PERSONAL CON CERTIFICADOS DEL CAS"
));

$proto19["m_sql"] = "old_cas.month_rat";
$proto19["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "day_rat",
	"m_strTable" => "old_cas",
	"m_srcTableName" => "PERSONAL CON CERTIFICADOS DEL CAS"
));

$proto21["m_sql"] = "old_cas.day_rat";
$proto21["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "paterno",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL CON CERTIFICADOS DEL CAS"
));

$proto23["m_sql"] = "t_planilla_c.paterno";
$proto23["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "materno",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL CON CERTIFICADOS DEL CAS"
));

$proto25["m_sql"] = "t_planilla_c.materno";
$proto25["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL CON CERTIFICADOS DEL CAS"
));

$proto27["m_sql"] = "t_planilla_c.nombres";
$proto27["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL CON CERTIFICADOS DEL CAS"
));

$proto29["m_sql"] = "t_planilla_c.cargo";
$proto29["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "unidad",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL CON CERTIFICADOS DEL CAS"
));

$proto31["m_sql"] = "t_planilla_c.unidad";
$proto31["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "item_contrato",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL CON CERTIFICADOS DEL CAS"
));

$proto33["m_sql"] = "t_planilla_c.item_contrato";
$proto33["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "ci",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL CON CERTIFICADOS DEL CAS"
));

$proto35["m_sql"] = "t_planilla_c.ci";
$proto35["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "exp",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "PERSONAL CON CERTIFICADOS DEL CAS"
));

$proto37["m_sql"] = "t_planilla_c.exp";
$proto37["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto39=array();
$proto39["m_link"] = "SQLL_MAIN";
			$proto40=array();
$proto40["m_strName"] = "old_cas";
$proto40["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "fecha_registro_dato";
$proto40["m_columns"][] = "id_old_cas";
$proto40["m_columns"][] = "id_func";
$proto40["m_columns"][] = "id_per";
$proto40["m_columns"][] = "date_start";
$proto40["m_columns"][] = "date_last";
$proto40["m_columns"][] = "date_cas";
$proto40["m_columns"][] = "year_rat";
$proto40["m_columns"][] = "month_rat";
$proto40["m_columns"][] = "day_rat";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "old_cas";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto41=array();
$proto41["m_sql"] = "";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
												$proto43=array();
$proto43["m_link"] = "SQLL_INNERJOIN";
			$proto44=array();
$proto44["m_strName"] = "t_planilla_c";
$proto44["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "id_func";
$proto44["m_columns"][] = "fecha_nac";
$proto44["m_columns"][] = "sexo";
$proto44["m_columns"][] = "item_contrato";
$proto44["m_columns"][] = "unidad";
$proto44["m_columns"][] = "cargo";
$proto44["m_columns"][] = "paterno";
$proto44["m_columns"][] = "materno";
$proto44["m_columns"][] = "nombres";
$proto44["m_columns"][] = "ci";
$proto44["m_columns"][] = "exp";
$proto44["m_columns"][] = "nit";
$proto44["m_columns"][] = "fec_ingreso";
$proto44["m_columns"][] = "baja";
$proto44["m_columns"][] = "reasig";
$proto44["m_columns"][] = "haber_basico";
$proto44["m_columns"][] = "dias_trab";
$proto44["m_columns"][] = "haber_percibido";
$proto44["m_columns"][] = "reint";
$proto44["m_columns"][] = "bono_ant";
$proto44["m_columns"][] = "total_ganado";
$proto44["m_columns"][] = "devoluciones";
$proto44["m_columns"][] = "asig_familiar";
$proto44["m_columns"][] = "futuro_afp_10";
$proto44["m_columns"][] = "futuro_afp_riesgo_1_71";
$proto44["m_columns"][] = "futuro_afp_05";
$proto44["m_columns"][] = "futuro_afp_ap_sol_0_5";
$proto44["m_columns"][] = "futuro_ans_1";
$proto44["m_columns"][] = "prev_afp_10";
$proto44["m_columns"][] = "prev_afp_riesgo_1_71";
$proto44["m_columns"][] = "prev_afp_05";
$proto44["m_columns"][] = "prev_afp_ap_sol_0_5";
$proto44["m_columns"][] = "prev_ans_1";
$proto44["m_columns"][] = "rc_iva";
$proto44["m_columns"][] = "retenciones";
$proto44["m_columns"][] = "multa";
$proto44["m_columns"][] = "total_desc";
$proto44["m_columns"][] = "pre_natal";
$proto44["m_columns"][] = "natalidad";
$proto44["m_columns"][] = "lactancia";
$proto44["m_columns"][] = "sepelio";
$proto44["m_columns"][] = "seguro_pat_10";
$proto44["m_columns"][] = "riesgo_pat_171";
$proto44["m_columns"][] = "pro_vivienda_pat_2";
$proto44["m_columns"][] = "ap_pat_sol_3";
$proto44["m_columns"][] = "mes";
$proto44["m_columns"][] = "gestion";
$proto44["m_columns"][] = "liquido_pagable";
$proto44["m_columns"][] = "cod_afp";
$proto44["m_columns"][] = "cta_banco";
$proto44["m_columns"][] = "tipo_funcionario";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "INNER JOIN t_planilla_c ON old_cas.id_per = t_planilla_c.id_func";
$proto43["m_alias"] = "";
$proto43["m_srcTableName"] = "PERSONAL CON CERTIFICADOS DEL CAS";
$proto45=array();
$proto45["m_sql"] = "old_cas.id_per = t_planilla_c.id_func";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_per",
	"m_strTable" => "old_cas",
	"m_srcTableName" => "PERSONAL CON CERTIFICADOS DEL CAS"
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "= t_planilla_c.id_func";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PERSONAL CON CERTIFICADOS DEL CAS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PERSONAL_CON_CERTIFICADOS_DEL_CAS = createSqlQuery_PERSONAL_CON_CERTIFICADOS_DEL_CAS();


	
																	
	
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".sqlquery"] = $queryData_PERSONAL_CON_CERTIFICADOS_DEL_CAS;

$tableEvents["PERSONAL CON CERTIFICADOS DEL CAS"] = new eventsBase;
$tdataPERSONAL_CON_CERTIFICADOS_DEL_CAS[".hasEvents"] = false;

?>