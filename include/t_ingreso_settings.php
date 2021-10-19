<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_ingreso = array();	
	$tdatat_ingreso[".truncateText"] = true;
	$tdatat_ingreso[".NumberOfChars"] = 80; 
	$tdatat_ingreso[".ShortName"] = "t_ingreso";
	$tdatat_ingreso[".OwnerID"] = "";
	$tdatat_ingreso[".OriginalTable"] = "t_ingreso";

//	field labels
$fieldLabelst_ingreso = array();
$fieldToolTipst_ingreso = array();
$pageTitlest_ingreso = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_ingreso["Spanish"] = array();
	$fieldToolTipst_ingreso["Spanish"] = array();
	$pageTitlest_ingreso["Spanish"] = array();
	$fieldLabelst_ingreso["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipst_ingreso["Spanish"]["id_func"] = "";
	$fieldLabelst_ingreso["Spanish"]["haber_basico"] = "Haber Basico :";
	$fieldToolTipst_ingreso["Spanish"]["haber_basico"] = "";
	$fieldLabelst_ingreso["Spanish"]["dias_trab"] = "Dias Trabajados :";
	$fieldToolTipst_ingreso["Spanish"]["dias_trab"] = "";
	$fieldLabelst_ingreso["Spanish"]["haber_percibido"] = "Haber Percibido :";
	$fieldToolTipst_ingreso["Spanish"]["haber_percibido"] = "";
	$fieldLabelst_ingreso["Spanish"]["reint"] = "Reintegro :";
	$fieldToolTipst_ingreso["Spanish"]["reint"] = "";
	$fieldLabelst_ingreso["Spanish"]["bono_ant"] = "Bono Antiguedad :";
	$fieldToolTipst_ingreso["Spanish"]["bono_ant"] = "";
	$fieldLabelst_ingreso["Spanish"]["total_ganado"] = "Total Ganado :";
	$fieldToolTipst_ingreso["Spanish"]["total_ganado"] = "";
	$fieldLabelst_ingreso["Spanish"]["devoluciones"] = "Devoluciones :";
	$fieldToolTipst_ingreso["Spanish"]["devoluciones"] = "";
	$fieldLabelst_ingreso["Spanish"]["asig_familiar"] = "Asig. Familiar :";
	$fieldToolTipst_ingreso["Spanish"]["asig_familiar"] = "";
	$fieldLabelst_ingreso["Spanish"]["mes"] = "Mes :";
	$fieldToolTipst_ingreso["Spanish"]["mes"] = "";
	$fieldLabelst_ingreso["Spanish"]["gestion"] = "Gestión :";
	$fieldToolTipst_ingreso["Spanish"]["gestion"] = "";
	$fieldLabelst_ingreso["Spanish"]["name"] = "Nombre :";
	$fieldToolTipst_ingreso["Spanish"]["name"] = "";
	$fieldLabelst_ingreso["Spanish"]["l_name1"] = "Ap.Paterno :";
	$fieldToolTipst_ingreso["Spanish"]["l_name1"] = "";
	$fieldLabelst_ingreso["Spanish"]["l_name2"] = "Ap.Materno :";
	$fieldToolTipst_ingreso["Spanish"]["l_name2"] = "";
	$fieldLabelst_ingreso["Spanish"]["id_adm"] = "Id Adm";
	$fieldToolTipst_ingreso["Spanish"]["id_adm"] = "";
	if (count($fieldToolTipst_ingreso["Spanish"]))
		$tdatat_ingreso[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_ingreso[""] = array();
	$fieldToolTipst_ingreso[""] = array();
	$pageTitlest_ingreso[""] = array();
	if (count($fieldToolTipst_ingreso[""]))
		$tdatat_ingreso[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_ingreso["English"] = array();
	$fieldToolTipst_ingreso["English"] = array();
	$pageTitlest_ingreso["English"] = array();
	if (count($fieldToolTipst_ingreso["English"]))
		$tdatat_ingreso[".isUseToolTips"] = true;
}
	
	
	$tdatat_ingreso[".NCSearch"] = true;



$tdatat_ingreso[".shortTableName"] = "t_ingreso";
$tdatat_ingreso[".nSecOptions"] = 0;
$tdatat_ingreso[".recsPerRowPrint"] = 1;
$tdatat_ingreso[".mainTableOwnerID"] = "";
$tdatat_ingreso[".moveNext"] = 1;
$tdatat_ingreso[".entityType"] = 0;

$tdatat_ingreso[".strOriginalTableName"] = "t_ingreso";




$tdatat_ingreso[".showAddInPopup"] = false;

$tdatat_ingreso[".showEditInPopup"] = false;

$tdatat_ingreso[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_ingreso[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_ingreso[".fieldsForRegister"] = array();

$tdatat_ingreso[".listAjax"] = false;

	$tdatat_ingreso[".audit"] = false;

	$tdatat_ingreso[".locking"] = false;

$tdatat_ingreso[".edit"] = true;
$tdatat_ingreso[".afterEditAction"] = 1;
$tdatat_ingreso[".closePopupAfterEdit"] = 1;
$tdatat_ingreso[".afterEditActionDetTable"] = "";

$tdatat_ingreso[".add"] = true;
$tdatat_ingreso[".afterAddAction"] = 1;
$tdatat_ingreso[".closePopupAfterAdd"] = 1;
$tdatat_ingreso[".afterAddActionDetTable"] = "";

$tdatat_ingreso[".list"] = true;

$tdatat_ingreso[".inlineEdit"] = true;
$tdatat_ingreso[".inlineAdd"] = true;





$tdatat_ingreso[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_ingreso[".searchSaving"] = false;
//

$tdatat_ingreso[".showSearchPanel"] = true;
		$tdatat_ingreso[".flexibleSearch"] = true;		

if (isMobile())
	$tdatat_ingreso[".isUseAjaxSuggest"] = false;
else 
	$tdatat_ingreso[".isUseAjaxSuggest"] = true;

$tdatat_ingreso[".rowHighlite"] = true;



$tdatat_ingreso[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_ingreso[".isUseTimeForSearch"] = false;





$tdatat_ingreso[".allSearchFields"] = array();
$tdatat_ingreso[".filterFields"] = array();
$tdatat_ingreso[".requiredSearchFields"] = array();

$tdatat_ingreso[".allSearchFields"][] = "id_adm";
	$tdatat_ingreso[".allSearchFields"][] = "id_func";
	$tdatat_ingreso[".allSearchFields"][] = "name";
	$tdatat_ingreso[".allSearchFields"][] = "l_name1";
	$tdatat_ingreso[".allSearchFields"][] = "l_name2";
	$tdatat_ingreso[".allSearchFields"][] = "haber_basico";
	$tdatat_ingreso[".allSearchFields"][] = "dias_trab";
	$tdatat_ingreso[".allSearchFields"][] = "haber_percibido";
	$tdatat_ingreso[".allSearchFields"][] = "reint";
	$tdatat_ingreso[".allSearchFields"][] = "bono_ant";
	$tdatat_ingreso[".allSearchFields"][] = "total_ganado";
	$tdatat_ingreso[".allSearchFields"][] = "devoluciones";
	$tdatat_ingreso[".allSearchFields"][] = "asig_familiar";
	$tdatat_ingreso[".allSearchFields"][] = "mes";
	$tdatat_ingreso[".allSearchFields"][] = "gestion";
	

$tdatat_ingreso[".googleLikeFields"] = array();
$tdatat_ingreso[".googleLikeFields"][] = "id_func";
$tdatat_ingreso[".googleLikeFields"][] = "haber_basico";
$tdatat_ingreso[".googleLikeFields"][] = "dias_trab";
$tdatat_ingreso[".googleLikeFields"][] = "haber_percibido";
$tdatat_ingreso[".googleLikeFields"][] = "reint";
$tdatat_ingreso[".googleLikeFields"][] = "bono_ant";
$tdatat_ingreso[".googleLikeFields"][] = "total_ganado";
$tdatat_ingreso[".googleLikeFields"][] = "devoluciones";
$tdatat_ingreso[".googleLikeFields"][] = "asig_familiar";
$tdatat_ingreso[".googleLikeFields"][] = "mes";
$tdatat_ingreso[".googleLikeFields"][] = "gestion";
$tdatat_ingreso[".googleLikeFields"][] = "name";
$tdatat_ingreso[".googleLikeFields"][] = "l_name1";
$tdatat_ingreso[".googleLikeFields"][] = "l_name2";
$tdatat_ingreso[".googleLikeFields"][] = "id_adm";


$tdatat_ingreso[".advSearchFields"] = array();
$tdatat_ingreso[".advSearchFields"][] = "id_adm";
$tdatat_ingreso[".advSearchFields"][] = "id_func";
$tdatat_ingreso[".advSearchFields"][] = "name";
$tdatat_ingreso[".advSearchFields"][] = "l_name1";
$tdatat_ingreso[".advSearchFields"][] = "l_name2";
$tdatat_ingreso[".advSearchFields"][] = "haber_basico";
$tdatat_ingreso[".advSearchFields"][] = "dias_trab";
$tdatat_ingreso[".advSearchFields"][] = "haber_percibido";
$tdatat_ingreso[".advSearchFields"][] = "reint";
$tdatat_ingreso[".advSearchFields"][] = "bono_ant";
$tdatat_ingreso[".advSearchFields"][] = "total_ganado";
$tdatat_ingreso[".advSearchFields"][] = "devoluciones";
$tdatat_ingreso[".advSearchFields"][] = "asig_familiar";
$tdatat_ingreso[".advSearchFields"][] = "mes";
$tdatat_ingreso[".advSearchFields"][] = "gestion";

$tdatat_ingreso[".tableType"] = "list";

$tdatat_ingreso[".printerPageOrientation"] = 0;
$tdatat_ingreso[".nPrinterPageScale"] = 100;

$tdatat_ingreso[".nPrinterSplitRecords"] = 40;

$tdatat_ingreso[".nPrinterPDFSplitRecords"] = 40;



$tdatat_ingreso[".geocodingEnabled"] = false;




	
$tdatat_ingreso[".listGridLayout"] = 2;





// view page pdf
$tdatat_ingreso[".isViewPagePDF"] = true;
$tdatat_ingreso[".isLandscapeViewPDFOrientation"] = 1;
$tdatat_ingreso[".nViewPagePDFScale"] = 100;

// print page pdf

$tdatat_ingreso[".totalsFields"] = array();
$tdatat_ingreso[".totalsFields"][] = array(
	"fName" => "haber_basico", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatat_ingreso[".totalsFields"][] = array(
	"fName" => "haber_percibido", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatat_ingreso[".totalsFields"][] = array(
	"fName" => "reint", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatat_ingreso[".totalsFields"][] = array(
	"fName" => "bono_ant", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatat_ingreso[".totalsFields"][] = array(
	"fName" => "total_ganado", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatat_ingreso[".totalsFields"][] = array(
	"fName" => "devoluciones", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatat_ingreso[".totalsFields"][] = array(
	"fName" => "asig_familiar", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatat_ingreso[".pageSize"] = 20;

$tdatat_ingreso[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_ingreso[".strOrderBy"] = $tstrOrderBy;

$tdatat_ingreso[".orderindexes"] = array();

$tdatat_ingreso[".sqlHead"] = "SELECT t_ingreso.id_func,  t_ingreso.haber_basico,  t_ingreso.dias_trab,  t_ingreso.haber_percibido,  t_ingreso.reint,  t_ingreso.bono_ant,  t_ingreso.total_ganado,  t_ingreso.devoluciones,  t_ingreso.asig_familiar,  t_ingreso.mes,  t_ingreso.gestion,  funcionario.name,  funcionario.l_name1,  funcionario.l_name2,  t_ingreso.id_adm";
$tdatat_ingreso[".sqlFrom"] = "FROM t_ingreso  INNER JOIN funcionario ON t_ingreso.id_func = funcionario.id_func";
$tdatat_ingreso[".sqlWhereExpr"] = "";
$tdatat_ingreso[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_ingreso[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_ingreso[".arrGroupsPerPage"] = $arrGPP;

$tdatat_ingreso[".highlightSearchResults"] = true;

$tableKeyst_ingreso = array();
$tableKeyst_ingreso[] = "id_func";
$tdatat_ingreso[".Keys"] = $tableKeyst_ingreso;

$tdatat_ingreso[".listFields"] = array();
$tdatat_ingreso[".listFields"][] = "id_func";
$tdatat_ingreso[".listFields"][] = "name";
$tdatat_ingreso[".listFields"][] = "l_name1";
$tdatat_ingreso[".listFields"][] = "l_name2";
$tdatat_ingreso[".listFields"][] = "haber_basico";
$tdatat_ingreso[".listFields"][] = "dias_trab";
$tdatat_ingreso[".listFields"][] = "haber_percibido";
$tdatat_ingreso[".listFields"][] = "reint";
$tdatat_ingreso[".listFields"][] = "bono_ant";
$tdatat_ingreso[".listFields"][] = "total_ganado";
$tdatat_ingreso[".listFields"][] = "devoluciones";
$tdatat_ingreso[".listFields"][] = "asig_familiar";
$tdatat_ingreso[".listFields"][] = "mes";
$tdatat_ingreso[".listFields"][] = "gestion";

$tdatat_ingreso[".hideMobileList"] = array();


$tdatat_ingreso[".viewFields"] = array();

$tdatat_ingreso[".addFields"] = array();
$tdatat_ingreso[".addFields"][] = "id_func";
$tdatat_ingreso[".addFields"][] = "haber_basico";
$tdatat_ingreso[".addFields"][] = "dias_trab";
$tdatat_ingreso[".addFields"][] = "haber_percibido";
$tdatat_ingreso[".addFields"][] = "reint";
$tdatat_ingreso[".addFields"][] = "bono_ant";
$tdatat_ingreso[".addFields"][] = "total_ganado";
$tdatat_ingreso[".addFields"][] = "devoluciones";
$tdatat_ingreso[".addFields"][] = "asig_familiar";
$tdatat_ingreso[".addFields"][] = "mes";
$tdatat_ingreso[".addFields"][] = "gestion";

$tdatat_ingreso[".masterListFields"] = array();
$tdatat_ingreso[".masterListFields"][] = "id_adm";
$tdatat_ingreso[".masterListFields"][] = "id_func";
$tdatat_ingreso[".masterListFields"][] = "name";
$tdatat_ingreso[".masterListFields"][] = "l_name1";
$tdatat_ingreso[".masterListFields"][] = "l_name2";
$tdatat_ingreso[".masterListFields"][] = "haber_basico";
$tdatat_ingreso[".masterListFields"][] = "dias_trab";
$tdatat_ingreso[".masterListFields"][] = "haber_percibido";
$tdatat_ingreso[".masterListFields"][] = "reint";
$tdatat_ingreso[".masterListFields"][] = "bono_ant";
$tdatat_ingreso[".masterListFields"][] = "total_ganado";
$tdatat_ingreso[".masterListFields"][] = "devoluciones";
$tdatat_ingreso[".masterListFields"][] = "asig_familiar";
$tdatat_ingreso[".masterListFields"][] = "mes";
$tdatat_ingreso[".masterListFields"][] = "gestion";

$tdatat_ingreso[".inlineAddFields"] = array();
$tdatat_ingreso[".inlineAddFields"][] = "id_func";
$tdatat_ingreso[".inlineAddFields"][] = "haber_basico";
$tdatat_ingreso[".inlineAddFields"][] = "dias_trab";
$tdatat_ingreso[".inlineAddFields"][] = "haber_percibido";
$tdatat_ingreso[".inlineAddFields"][] = "reint";
$tdatat_ingreso[".inlineAddFields"][] = "bono_ant";
$tdatat_ingreso[".inlineAddFields"][] = "total_ganado";
$tdatat_ingreso[".inlineAddFields"][] = "devoluciones";
$tdatat_ingreso[".inlineAddFields"][] = "asig_familiar";
$tdatat_ingreso[".inlineAddFields"][] = "mes";
$tdatat_ingreso[".inlineAddFields"][] = "gestion";

$tdatat_ingreso[".editFields"] = array();
$tdatat_ingreso[".editFields"][] = "id_func";
$tdatat_ingreso[".editFields"][] = "haber_basico";
$tdatat_ingreso[".editFields"][] = "dias_trab";
$tdatat_ingreso[".editFields"][] = "haber_percibido";
$tdatat_ingreso[".editFields"][] = "reint";
$tdatat_ingreso[".editFields"][] = "bono_ant";
$tdatat_ingreso[".editFields"][] = "total_ganado";
$tdatat_ingreso[".editFields"][] = "devoluciones";
$tdatat_ingreso[".editFields"][] = "asig_familiar";
$tdatat_ingreso[".editFields"][] = "mes";
$tdatat_ingreso[".editFields"][] = "gestion";

$tdatat_ingreso[".inlineEditFields"] = array();
$tdatat_ingreso[".inlineEditFields"][] = "id_func";
$tdatat_ingreso[".inlineEditFields"][] = "haber_basico";
$tdatat_ingreso[".inlineEditFields"][] = "dias_trab";
$tdatat_ingreso[".inlineEditFields"][] = "haber_percibido";
$tdatat_ingreso[".inlineEditFields"][] = "reint";
$tdatat_ingreso[".inlineEditFields"][] = "bono_ant";
$tdatat_ingreso[".inlineEditFields"][] = "total_ganado";
$tdatat_ingreso[".inlineEditFields"][] = "devoluciones";
$tdatat_ingreso[".inlineEditFields"][] = "asig_familiar";
$tdatat_ingreso[".inlineEditFields"][] = "mes";
$tdatat_ingreso[".inlineEditFields"][] = "gestion";

$tdatat_ingreso[".exportFields"] = array();

$tdatat_ingreso[".importFields"] = array();

$tdatat_ingreso[".printFields"] = array();

//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "t_ingreso";
	$fdata["Label"] = GetFieldLabel("t_ingreso","id_func"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id_func"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_ingreso.id_func";
	
		
		
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

	

	
	$tdatat_ingreso["id_func"] = $fdata;
//	haber_basico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "haber_basico";
	$fdata["GoodName"] = "haber_basico";
	$fdata["ownerTable"] = "t_ingreso";
	$fdata["Label"] = GetFieldLabel("t_ingreso","haber_basico"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "haber_basico"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_ingreso.haber_basico";
	
		
		
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

	

	
	$tdatat_ingreso["haber_basico"] = $fdata;
//	dias_trab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dias_trab";
	$fdata["GoodName"] = "dias_trab";
	$fdata["ownerTable"] = "t_ingreso";
	$fdata["Label"] = GetFieldLabel("t_ingreso","dias_trab"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "dias_trab"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_ingreso.dias_trab";
	
		
		
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

	

	
	$tdatat_ingreso["dias_trab"] = $fdata;
//	haber_percibido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "haber_percibido";
	$fdata["GoodName"] = "haber_percibido";
	$fdata["ownerTable"] = "t_ingreso";
	$fdata["Label"] = GetFieldLabel("t_ingreso","haber_percibido"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "haber_percibido"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_ingreso.haber_percibido";
	
		
		
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

	

	
	$tdatat_ingreso["haber_percibido"] = $fdata;
//	reint
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "reint";
	$fdata["GoodName"] = "reint";
	$fdata["ownerTable"] = "t_ingreso";
	$fdata["Label"] = GetFieldLabel("t_ingreso","reint"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "reint"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_ingreso.reint";
	
		
		
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

	

	
	$tdatat_ingreso["reint"] = $fdata;
//	bono_ant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "bono_ant";
	$fdata["GoodName"] = "bono_ant";
	$fdata["ownerTable"] = "t_ingreso";
	$fdata["Label"] = GetFieldLabel("t_ingreso","bono_ant"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "bono_ant"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_ingreso.bono_ant";
	
		
		
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

	

	
	$tdatat_ingreso["bono_ant"] = $fdata;
//	total_ganado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "total_ganado";
	$fdata["GoodName"] = "total_ganado";
	$fdata["ownerTable"] = "t_ingreso";
	$fdata["Label"] = GetFieldLabel("t_ingreso","total_ganado"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "total_ganado"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_ingreso.total_ganado";
	
		
		
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

	

	
	$tdatat_ingreso["total_ganado"] = $fdata;
//	devoluciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "devoluciones";
	$fdata["GoodName"] = "devoluciones";
	$fdata["ownerTable"] = "t_ingreso";
	$fdata["Label"] = GetFieldLabel("t_ingreso","devoluciones"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "devoluciones"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_ingreso.devoluciones";
	
		
		
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

	

	
	$tdatat_ingreso["devoluciones"] = $fdata;
//	asig_familiar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "asig_familiar";
	$fdata["GoodName"] = "asig_familiar";
	$fdata["ownerTable"] = "t_ingreso";
	$fdata["Label"] = GetFieldLabel("t_ingreso","asig_familiar"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "asig_familiar"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_ingreso.asig_familiar";
	
		
		
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

	

	
	$tdatat_ingreso["asig_familiar"] = $fdata;
//	mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "mes";
	$fdata["GoodName"] = "mes";
	$fdata["ownerTable"] = "t_ingreso";
	$fdata["Label"] = GetFieldLabel("t_ingreso","mes"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "mes"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_ingreso.mes";
	
		
		
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

	

	
	$tdatat_ingreso["mes"] = $fdata;
//	gestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "gestion";
	$fdata["GoodName"] = "gestion";
	$fdata["ownerTable"] = "t_ingreso";
	$fdata["Label"] = GetFieldLabel("t_ingreso","gestion"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "gestion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_ingreso.gestion";
	
		
		
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
			
		$edata["controlWidth"] = 80;
	
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

	

	
	$tdatat_ingreso["gestion"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("t_ingreso","name"); 
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

	

	
	$tdatat_ingreso["name"] = $fdata;
//	l_name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "l_name1";
	$fdata["GoodName"] = "l_name1";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("t_ingreso","l_name1"); 
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
			
		$edata["controlWidth"] = 150;
	
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

	

	
	$tdatat_ingreso["l_name1"] = $fdata;
//	l_name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "l_name2";
	$fdata["GoodName"] = "l_name2";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("t_ingreso","l_name2"); 
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
			
		$edata["controlWidth"] = 150;
	
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

	

	
	$tdatat_ingreso["l_name2"] = $fdata;
//	id_adm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "id_adm";
	$fdata["GoodName"] = "id_adm";
	$fdata["ownerTable"] = "t_ingreso";
	$fdata["Label"] = GetFieldLabel("t_ingreso","id_adm"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id_adm"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_ingreso.id_adm";
	
		
		
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

	

	
	$tdatat_ingreso["id_adm"] = $fdata;

	
$tables_data["t_ingreso"]=&$tdatat_ingreso;
$field_labels["t_ingreso"] = &$fieldLabelst_ingreso;
$fieldToolTips["t_ingreso"] = &$fieldToolTipst_ingreso;
$page_titles["t_ingreso"] = &$pageTitlest_ingreso;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_ingreso"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_ingreso"] = array();


	
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
					$masterTablesData["t_ingreso"][0] = $masterParams;	
				$masterTablesData["t_ingreso"][0]["masterKeys"] = array();
	$masterTablesData["t_ingreso"][0]["masterKeys"][]="id_func";
				$masterTablesData["t_ingreso"][0]["detailKeys"] = array();
	$masterTablesData["t_ingreso"][0]["detailKeys"][]="id_func";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_ingreso()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_ingreso.id_func,  t_ingreso.haber_basico,  t_ingreso.dias_trab,  t_ingreso.haber_percibido,  t_ingreso.reint,  t_ingreso.bono_ant,  t_ingreso.total_ganado,  t_ingreso.devoluciones,  t_ingreso.asig_familiar,  t_ingreso.mes,  t_ingreso.gestion,  funcionario.name,  funcionario.l_name1,  funcionario.l_name2,  t_ingreso.id_adm";
$proto0["m_strFrom"] = "FROM t_ingreso  INNER JOIN funcionario ON t_ingreso.id_func = funcionario.id_func";
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
	"m_strTable" => "t_ingreso",
	"m_srcTableName" => "t_ingreso"
));

$proto5["m_sql"] = "t_ingreso.id_func";
$proto5["m_srcTableName"] = "t_ingreso";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "haber_basico",
	"m_strTable" => "t_ingreso",
	"m_srcTableName" => "t_ingreso"
));

$proto7["m_sql"] = "t_ingreso.haber_basico";
$proto7["m_srcTableName"] = "t_ingreso";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "dias_trab",
	"m_strTable" => "t_ingreso",
	"m_srcTableName" => "t_ingreso"
));

$proto9["m_sql"] = "t_ingreso.dias_trab";
$proto9["m_srcTableName"] = "t_ingreso";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "haber_percibido",
	"m_strTable" => "t_ingreso",
	"m_srcTableName" => "t_ingreso"
));

$proto11["m_sql"] = "t_ingreso.haber_percibido";
$proto11["m_srcTableName"] = "t_ingreso";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "reint",
	"m_strTable" => "t_ingreso",
	"m_srcTableName" => "t_ingreso"
));

$proto13["m_sql"] = "t_ingreso.reint";
$proto13["m_srcTableName"] = "t_ingreso";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "bono_ant",
	"m_strTable" => "t_ingreso",
	"m_srcTableName" => "t_ingreso"
));

$proto15["m_sql"] = "t_ingreso.bono_ant";
$proto15["m_srcTableName"] = "t_ingreso";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "total_ganado",
	"m_strTable" => "t_ingreso",
	"m_srcTableName" => "t_ingreso"
));

$proto17["m_sql"] = "t_ingreso.total_ganado";
$proto17["m_srcTableName"] = "t_ingreso";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "devoluciones",
	"m_strTable" => "t_ingreso",
	"m_srcTableName" => "t_ingreso"
));

$proto19["m_sql"] = "t_ingreso.devoluciones";
$proto19["m_srcTableName"] = "t_ingreso";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "asig_familiar",
	"m_strTable" => "t_ingreso",
	"m_srcTableName" => "t_ingreso"
));

$proto21["m_sql"] = "t_ingreso.asig_familiar";
$proto21["m_srcTableName"] = "t_ingreso";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "mes",
	"m_strTable" => "t_ingreso",
	"m_srcTableName" => "t_ingreso"
));

$proto23["m_sql"] = "t_ingreso.mes";
$proto23["m_srcTableName"] = "t_ingreso";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "gestion",
	"m_strTable" => "t_ingreso",
	"m_srcTableName" => "t_ingreso"
));

$proto25["m_sql"] = "t_ingreso.gestion";
$proto25["m_srcTableName"] = "t_ingreso";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "t_ingreso"
));

$proto27["m_sql"] = "funcionario.name";
$proto27["m_srcTableName"] = "t_ingreso";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "l_name1",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "t_ingreso"
));

$proto29["m_sql"] = "funcionario.l_name1";
$proto29["m_srcTableName"] = "t_ingreso";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "l_name2",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "t_ingreso"
));

$proto31["m_sql"] = "funcionario.l_name2";
$proto31["m_srcTableName"] = "t_ingreso";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "id_adm",
	"m_strTable" => "t_ingreso",
	"m_srcTableName" => "t_ingreso"
));

$proto33["m_sql"] = "t_ingreso.id_adm";
$proto33["m_srcTableName"] = "t_ingreso";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "t_ingreso";
$proto36["m_srcTableName"] = "t_ingreso";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "id_func";
$proto36["m_columns"][] = "haber_basico";
$proto36["m_columns"][] = "dias_trab";
$proto36["m_columns"][] = "haber_percibido";
$proto36["m_columns"][] = "reint";
$proto36["m_columns"][] = "bono_ant";
$proto36["m_columns"][] = "total_ganado";
$proto36["m_columns"][] = "devoluciones";
$proto36["m_columns"][] = "asig_familiar";
$proto36["m_columns"][] = "mes";
$proto36["m_columns"][] = "gestion";
$proto36["m_columns"][] = "id_adm";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "t_ingreso";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "t_ingreso";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
												$proto39=array();
$proto39["m_link"] = "SQLL_INNERJOIN";
			$proto40=array();
$proto40["m_strName"] = "funcionario";
$proto40["m_srcTableName"] = "t_ingreso";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "id_func";
$proto40["m_columns"][] = "estado";
$proto40["m_columns"][] = "name";
$proto40["m_columns"][] = "l_name1";
$proto40["m_columns"][] = "l_name2";
$proto40["m_columns"][] = "l_name_es";
$proto40["m_columns"][] = "nationality";
$proto40["m_columns"][] = "nati";
$proto40["m_columns"][] = "ci";
$proto40["m_columns"][] = "expe";
$proto40["m_columns"][] = "afp";
$proto40["m_columns"][] = "nua";
$proto40["m_columns"][] = "c_status";
$proto40["m_columns"][] = "sex";
$proto40["m_columns"][] = "g_blood";
$proto40["m_columns"][] = "p_email";
$proto40["m_columns"][] = "job_email";
$proto40["m_columns"][] = "adress";
$proto40["m_columns"][] = "place_res";
$proto40["m_columns"][] = "phone_num";
$proto40["m_columns"][] = "cel_num";
$proto40["m_columns"][] = "phone_job";
$proto40["m_columns"][] = "p1_born";
$proto40["m_columns"][] = "p2_born";
$proto40["m_columns"][] = "p3_born";
$proto40["m_columns"][] = "date_born";
$proto40["m_columns"][] = "lic_driv";
$proto40["m_columns"][] = "type_lic";
$proto40["m_columns"][] = "prof";
$proto40["m_columns"][] = "col_prof";
$proto40["m_columns"][] = "num_prof";
$proto40["m_columns"][] = "nit";
$proto40["m_columns"][] = "on_off";
$proto40["m_columns"][] = "last_gra";
$proto40["m_columns"][] = "cole";
$proto40["m_columns"][] = "ciudad_de";
$proto40["m_columns"][] = "anyo_de";
$proto40["m_columns"][] = "title";
$proto40["m_columns"][] = "nro_libreta";
$proto40["m_columns"][] = "matricula";
$proto40["m_columns"][] = "anyo";
$proto40["m_columns"][] = "tipo_libreta";
$proto40["m_columns"][] = "nro_referencia1";
$proto40["m_columns"][] = "nro_referencia2";
$proto40["m_columns"][] = "es_estudiante";
$proto40["m_columns"][] = "nombre_carrera";
$proto40["m_columns"][] = "especialidad";
$proto40["m_columns"][] = "ultimo_anyo";
$proto40["m_columns"][] = "foto";
$proto40["m_columns"][] = "updated_at";
$proto40["m_columns"][] = "created_at";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "INNER JOIN funcionario ON t_ingreso.id_func = funcionario.id_func";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "t_ingreso";
$proto41=array();
$proto41["m_sql"] = "t_ingreso.id_func = funcionario.id_func";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "t_ingreso",
	"m_srcTableName" => "t_ingreso"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "= funcionario.id_func";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_ingreso";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_ingreso = createSqlQuery_t_ingreso();


	
															
	
$tdatat_ingreso[".sqlquery"] = $queryData_t_ingreso;

include_once(getabspath("include/t_ingreso_events.php"));
$tableEvents["t_ingreso"] = new eventclass_t_ingreso;
$tdatat_ingreso[".hasEvents"] = true;

?>