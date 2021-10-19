<?php
require_once(getabspath("classes/cipherer.php"));




$tdataold_cas = array();	
	$tdataold_cas[".truncateText"] = true;
	$tdataold_cas[".NumberOfChars"] = 80; 
	$tdataold_cas[".ShortName"] = "old_cas";
	$tdataold_cas[".OwnerID"] = "";
	$tdataold_cas[".OriginalTable"] = "old_cas";

//	field labels
$fieldLabelsold_cas = array();
$fieldToolTipsold_cas = array();
$pageTitlesold_cas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsold_cas["Spanish"] = array();
	$fieldToolTipsold_cas["Spanish"] = array();
	$pageTitlesold_cas["Spanish"] = array();
	$fieldLabelsold_cas["Spanish"]["fecha_registro_dato"] = "Fecha Registro Dato";
	$fieldToolTipsold_cas["Spanish"]["fecha_registro_dato"] = "";
	$fieldLabelsold_cas["Spanish"]["id_old_cas"] = "Id Old Cas";
	$fieldToolTipsold_cas["Spanish"]["id_old_cas"] = "";
	$fieldLabelsold_cas["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipsold_cas["Spanish"]["id_func"] = "";
	$fieldLabelsold_cas["Spanish"]["id_per"] = "Personal Item";
	$fieldToolTipsold_cas["Spanish"]["id_per"] = "";
	$fieldLabelsold_cas["Spanish"]["date_start"] = "Fecha de inicio";
	$fieldToolTipsold_cas["Spanish"]["date_start"] = "";
	$fieldLabelsold_cas["Spanish"]["date_last"] = "Fecha Final";
	$fieldToolTipsold_cas["Spanish"]["date_last"] = "";
	$fieldLabelsold_cas["Spanish"]["date_cas"] = "Fecha de registro ";
	$fieldToolTipsold_cas["Spanish"]["date_cas"] = "";
	$fieldLabelsold_cas["Spanish"]["year_rat"] = "Años calificados";
	$fieldToolTipsold_cas["Spanish"]["year_rat"] = "";
	$fieldLabelsold_cas["Spanish"]["month_rat"] = "Meses calificados";
	$fieldToolTipsold_cas["Spanish"]["month_rat"] = "";
	$fieldLabelsold_cas["Spanish"]["day_rat"] = "Dias calificados";
	$fieldToolTipsold_cas["Spanish"]["day_rat"] = "";
	if (count($fieldToolTipsold_cas["Spanish"]))
		$tdataold_cas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsold_cas[""] = array();
	$fieldToolTipsold_cas[""] = array();
	$pageTitlesold_cas[""] = array();
	$fieldLabelsold_cas[""]["fecha_registro_dato"] = "Fecha Registro Dato";
	$fieldToolTipsold_cas[""]["fecha_registro_dato"] = "";
	$fieldLabelsold_cas[""]["id_old_cas"] = "Id Old Cas";
	$fieldToolTipsold_cas[""]["id_old_cas"] = "";
	$fieldLabelsold_cas[""]["id_func"] = "Id Func";
	$fieldToolTipsold_cas[""]["id_func"] = "";
	$fieldLabelsold_cas[""]["id_per"] = "Id Per";
	$fieldToolTipsold_cas[""]["id_per"] = "";
	$fieldLabelsold_cas[""]["date_start"] = "Date Start";
	$fieldToolTipsold_cas[""]["date_start"] = "";
	$fieldLabelsold_cas[""]["date_last"] = "Date Last";
	$fieldToolTipsold_cas[""]["date_last"] = "";
	$fieldLabelsold_cas[""]["date_cas"] = "Date Cas";
	$fieldToolTipsold_cas[""]["date_cas"] = "";
	$fieldLabelsold_cas[""]["year_rat"] = "Year Rat";
	$fieldToolTipsold_cas[""]["year_rat"] = "";
	$fieldLabelsold_cas[""]["month_rat"] = "Month Rat";
	$fieldToolTipsold_cas[""]["month_rat"] = "";
	$fieldLabelsold_cas[""]["day_rat"] = "Day Rat";
	$fieldToolTipsold_cas[""]["day_rat"] = "";
	if (count($fieldToolTipsold_cas[""]))
		$tdataold_cas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsold_cas["English"] = array();
	$fieldToolTipsold_cas["English"] = array();
	$pageTitlesold_cas["English"] = array();
	if (count($fieldToolTipsold_cas["English"]))
		$tdataold_cas[".isUseToolTips"] = true;
}
	
	
	$tdataold_cas[".NCSearch"] = true;



$tdataold_cas[".shortTableName"] = "old_cas";
$tdataold_cas[".nSecOptions"] = 0;
$tdataold_cas[".recsPerRowList"] = 1;
$tdataold_cas[".recsPerRowPrint"] = 1;
$tdataold_cas[".mainTableOwnerID"] = "";
$tdataold_cas[".moveNext"] = 1;
$tdataold_cas[".entityType"] = 0;

$tdataold_cas[".strOriginalTableName"] = "old_cas";




$tdataold_cas[".showAddInPopup"] = false;

$tdataold_cas[".showEditInPopup"] = false;

$tdataold_cas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataold_cas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataold_cas[".fieldsForRegister"] = array();

$tdataold_cas[".listAjax"] = false;

	$tdataold_cas[".audit"] = false;

	$tdataold_cas[".locking"] = false;

$tdataold_cas[".edit"] = true;
$tdataold_cas[".afterEditAction"] = 1;
$tdataold_cas[".closePopupAfterEdit"] = 1;
$tdataold_cas[".afterEditActionDetTable"] = "";

$tdataold_cas[".add"] = true;
$tdataold_cas[".afterAddAction"] = 1;
$tdataold_cas[".closePopupAfterAdd"] = 1;
$tdataold_cas[".afterAddActionDetTable"] = "";

$tdataold_cas[".list"] = true;

$tdataold_cas[".inlineEdit"] = true;
$tdataold_cas[".inlineAdd"] = true;
$tdataold_cas[".view"] = true;

$tdataold_cas[".import"] = true;

$tdataold_cas[".exportTo"] = true;

$tdataold_cas[".printFriendly"] = true;

$tdataold_cas[".delete"] = true;

$tdataold_cas[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataold_cas[".searchSaving"] = false;
//

$tdataold_cas[".showSearchPanel"] = true;
		$tdataold_cas[".flexibleSearch"] = true;		

if (isMobile())
	$tdataold_cas[".isUseAjaxSuggest"] = false;
else 
	$tdataold_cas[".isUseAjaxSuggest"] = true;

$tdataold_cas[".rowHighlite"] = true;



$tdataold_cas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataold_cas[".isUseTimeForSearch"] = false;





$tdataold_cas[".allSearchFields"] = array();
$tdataold_cas[".filterFields"] = array();
$tdataold_cas[".requiredSearchFields"] = array();

$tdataold_cas[".allSearchFields"][] = "id_old_cas";
	$tdataold_cas[".allSearchFields"][] = "id_func";
	$tdataold_cas[".allSearchFields"][] = "id_per";
	$tdataold_cas[".allSearchFields"][] = "fecha_registro_dato";
	$tdataold_cas[".allSearchFields"][] = "date_start";
	$tdataold_cas[".allSearchFields"][] = "date_last";
	$tdataold_cas[".allSearchFields"][] = "date_cas";
	$tdataold_cas[".allSearchFields"][] = "year_rat";
	$tdataold_cas[".allSearchFields"][] = "month_rat";
	$tdataold_cas[".allSearchFields"][] = "day_rat";
	

$tdataold_cas[".googleLikeFields"] = array();
$tdataold_cas[".googleLikeFields"][] = "fecha_registro_dato";
$tdataold_cas[".googleLikeFields"][] = "id_old_cas";
$tdataold_cas[".googleLikeFields"][] = "id_func";
$tdataold_cas[".googleLikeFields"][] = "id_per";
$tdataold_cas[".googleLikeFields"][] = "date_start";
$tdataold_cas[".googleLikeFields"][] = "date_last";
$tdataold_cas[".googleLikeFields"][] = "date_cas";
$tdataold_cas[".googleLikeFields"][] = "year_rat";
$tdataold_cas[".googleLikeFields"][] = "month_rat";
$tdataold_cas[".googleLikeFields"][] = "day_rat";


$tdataold_cas[".advSearchFields"] = array();
$tdataold_cas[".advSearchFields"][] = "id_old_cas";
$tdataold_cas[".advSearchFields"][] = "id_func";
$tdataold_cas[".advSearchFields"][] = "id_per";
$tdataold_cas[".advSearchFields"][] = "fecha_registro_dato";
$tdataold_cas[".advSearchFields"][] = "date_start";
$tdataold_cas[".advSearchFields"][] = "date_last";
$tdataold_cas[".advSearchFields"][] = "date_cas";
$tdataold_cas[".advSearchFields"][] = "year_rat";
$tdataold_cas[".advSearchFields"][] = "month_rat";
$tdataold_cas[".advSearchFields"][] = "day_rat";

$tdataold_cas[".tableType"] = "list";

$tdataold_cas[".printerPageOrientation"] = 0;
$tdataold_cas[".nPrinterPageScale"] = 100;

$tdataold_cas[".nPrinterSplitRecords"] = 40;

$tdataold_cas[".nPrinterPDFSplitRecords"] = 40;



$tdataold_cas[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataold_cas[".pageSize"] = 20;

$tdataold_cas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataold_cas[".strOrderBy"] = $tstrOrderBy;

$tdataold_cas[".orderindexes"] = array();

$tdataold_cas[".sqlHead"] = "SELECT fecha_registro_dato,  	id_old_cas,  	id_func,  	id_per,  	date_start,  	date_last,  	date_cas,  	year_rat,  	month_rat,  	day_rat";
$tdataold_cas[".sqlFrom"] = "FROM old_cas";
$tdataold_cas[".sqlWhereExpr"] = "";
$tdataold_cas[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataold_cas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataold_cas[".arrGroupsPerPage"] = $arrGPP;

$tdataold_cas[".highlightSearchResults"] = true;

$tableKeysold_cas = array();
$tableKeysold_cas[] = "id_old_cas";
$tdataold_cas[".Keys"] = $tableKeysold_cas;

$tdataold_cas[".listFields"] = array();
$tdataold_cas[".listFields"][] = "id_old_cas";
$tdataold_cas[".listFields"][] = "id_func";
$tdataold_cas[".listFields"][] = "id_per";
$tdataold_cas[".listFields"][] = "fecha_registro_dato";
$tdataold_cas[".listFields"][] = "date_start";
$tdataold_cas[".listFields"][] = "date_last";
$tdataold_cas[".listFields"][] = "date_cas";
$tdataold_cas[".listFields"][] = "year_rat";
$tdataold_cas[".listFields"][] = "month_rat";
$tdataold_cas[".listFields"][] = "day_rat";

$tdataold_cas[".hideMobileList"] = array();


$tdataold_cas[".viewFields"] = array();
$tdataold_cas[".viewFields"][] = "id_old_cas";
$tdataold_cas[".viewFields"][] = "id_func";
$tdataold_cas[".viewFields"][] = "id_per";
$tdataold_cas[".viewFields"][] = "fecha_registro_dato";
$tdataold_cas[".viewFields"][] = "date_start";
$tdataold_cas[".viewFields"][] = "date_last";
$tdataold_cas[".viewFields"][] = "date_cas";
$tdataold_cas[".viewFields"][] = "year_rat";
$tdataold_cas[".viewFields"][] = "month_rat";
$tdataold_cas[".viewFields"][] = "day_rat";

$tdataold_cas[".addFields"] = array();
$tdataold_cas[".addFields"][] = "id_func";
$tdataold_cas[".addFields"][] = "id_per";
$tdataold_cas[".addFields"][] = "fecha_registro_dato";
$tdataold_cas[".addFields"][] = "date_start";
$tdataold_cas[".addFields"][] = "date_last";
$tdataold_cas[".addFields"][] = "date_cas";
$tdataold_cas[".addFields"][] = "year_rat";
$tdataold_cas[".addFields"][] = "month_rat";
$tdataold_cas[".addFields"][] = "day_rat";

$tdataold_cas[".masterListFields"] = array();
$tdataold_cas[".masterListFields"][] = "id_old_cas";
$tdataold_cas[".masterListFields"][] = "id_func";
$tdataold_cas[".masterListFields"][] = "id_per";
$tdataold_cas[".masterListFields"][] = "fecha_registro_dato";
$tdataold_cas[".masterListFields"][] = "date_start";
$tdataold_cas[".masterListFields"][] = "date_last";
$tdataold_cas[".masterListFields"][] = "date_cas";
$tdataold_cas[".masterListFields"][] = "year_rat";
$tdataold_cas[".masterListFields"][] = "month_rat";
$tdataold_cas[".masterListFields"][] = "day_rat";

$tdataold_cas[".inlineAddFields"] = array();
$tdataold_cas[".inlineAddFields"][] = "id_func";
$tdataold_cas[".inlineAddFields"][] = "id_per";
$tdataold_cas[".inlineAddFields"][] = "fecha_registro_dato";
$tdataold_cas[".inlineAddFields"][] = "date_start";
$tdataold_cas[".inlineAddFields"][] = "date_last";
$tdataold_cas[".inlineAddFields"][] = "date_cas";
$tdataold_cas[".inlineAddFields"][] = "year_rat";
$tdataold_cas[".inlineAddFields"][] = "month_rat";
$tdataold_cas[".inlineAddFields"][] = "day_rat";

$tdataold_cas[".editFields"] = array();
$tdataold_cas[".editFields"][] = "id_func";
$tdataold_cas[".editFields"][] = "id_per";
$tdataold_cas[".editFields"][] = "fecha_registro_dato";
$tdataold_cas[".editFields"][] = "date_start";
$tdataold_cas[".editFields"][] = "date_last";
$tdataold_cas[".editFields"][] = "date_cas";
$tdataold_cas[".editFields"][] = "year_rat";
$tdataold_cas[".editFields"][] = "month_rat";
$tdataold_cas[".editFields"][] = "day_rat";

$tdataold_cas[".inlineEditFields"] = array();
$tdataold_cas[".inlineEditFields"][] = "id_func";
$tdataold_cas[".inlineEditFields"][] = "id_per";
$tdataold_cas[".inlineEditFields"][] = "fecha_registro_dato";
$tdataold_cas[".inlineEditFields"][] = "date_start";
$tdataold_cas[".inlineEditFields"][] = "date_last";
$tdataold_cas[".inlineEditFields"][] = "date_cas";
$tdataold_cas[".inlineEditFields"][] = "year_rat";
$tdataold_cas[".inlineEditFields"][] = "month_rat";
$tdataold_cas[".inlineEditFields"][] = "day_rat";

$tdataold_cas[".exportFields"] = array();
$tdataold_cas[".exportFields"][] = "id_old_cas";
$tdataold_cas[".exportFields"][] = "id_func";
$tdataold_cas[".exportFields"][] = "id_per";
$tdataold_cas[".exportFields"][] = "fecha_registro_dato";
$tdataold_cas[".exportFields"][] = "date_start";
$tdataold_cas[".exportFields"][] = "date_last";
$tdataold_cas[".exportFields"][] = "date_cas";
$tdataold_cas[".exportFields"][] = "year_rat";
$tdataold_cas[".exportFields"][] = "month_rat";
$tdataold_cas[".exportFields"][] = "day_rat";

$tdataold_cas[".importFields"] = array();
$tdataold_cas[".importFields"][] = "fecha_registro_dato";
$tdataold_cas[".importFields"][] = "id_old_cas";
$tdataold_cas[".importFields"][] = "id_func";
$tdataold_cas[".importFields"][] = "id_per";
$tdataold_cas[".importFields"][] = "date_start";
$tdataold_cas[".importFields"][] = "date_last";
$tdataold_cas[".importFields"][] = "date_cas";
$tdataold_cas[".importFields"][] = "year_rat";
$tdataold_cas[".importFields"][] = "month_rat";
$tdataold_cas[".importFields"][] = "day_rat";

$tdataold_cas[".printFields"] = array();
$tdataold_cas[".printFields"][] = "id_old_cas";
$tdataold_cas[".printFields"][] = "id_func";
$tdataold_cas[".printFields"][] = "id_per";
$tdataold_cas[".printFields"][] = "fecha_registro_dato";
$tdataold_cas[".printFields"][] = "date_start";
$tdataold_cas[".printFields"][] = "date_last";
$tdataold_cas[".printFields"][] = "date_cas";
$tdataold_cas[".printFields"][] = "year_rat";
$tdataold_cas[".printFields"][] = "month_rat";
$tdataold_cas[".printFields"][] = "day_rat";

//	fecha_registro_dato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fecha_registro_dato";
	$fdata["GoodName"] = "fecha_registro_dato";
	$fdata["ownerTable"] = "old_cas";
	$fdata["Label"] = GetFieldLabel("old_cas","fecha_registro_dato"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
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
	$fdata["FullName"] = "fecha_registro_dato";
	
		
		
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

	

	
	$tdataold_cas["fecha_registro_dato"] = $fdata;
//	id_old_cas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_old_cas";
	$fdata["GoodName"] = "id_old_cas";
	$fdata["ownerTable"] = "old_cas";
	$fdata["Label"] = GetFieldLabel("old_cas","id_old_cas"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id_old_cas"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_old_cas";
	
		
		
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

	

	
	$tdataold_cas["id_old_cas"] = $fdata;
//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "old_cas";
	$fdata["Label"] = GetFieldLabel("old_cas","id_func"); 
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

	

	
	$tdataold_cas["id_func"] = $fdata;
//	id_per
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_per";
	$fdata["GoodName"] = "id_per";
	$fdata["ownerTable"] = "old_cas";
	$fdata["Label"] = GetFieldLabel("old_cas","id_per"); 
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
	
		$fdata["strField"] = "id_per"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_per";
	
		
		
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

	

	
	$tdataold_cas["id_per"] = $fdata;
//	date_start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "date_start";
	$fdata["GoodName"] = "date_start";
	$fdata["ownerTable"] = "old_cas";
	$fdata["Label"] = GetFieldLabel("old_cas","date_start"); 
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
	
		$fdata["strField"] = "date_start"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_start";
	
		
		
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

	

	
	$tdataold_cas["date_start"] = $fdata;
//	date_last
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "date_last";
	$fdata["GoodName"] = "date_last";
	$fdata["ownerTable"] = "old_cas";
	$fdata["Label"] = GetFieldLabel("old_cas","date_last"); 
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
	
		$fdata["strField"] = "date_last"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_last";
	
		
		
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

	

	
	$tdataold_cas["date_last"] = $fdata;
//	date_cas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "date_cas";
	$fdata["GoodName"] = "date_cas";
	$fdata["ownerTable"] = "old_cas";
	$fdata["Label"] = GetFieldLabel("old_cas","date_cas"); 
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
	
		$fdata["strField"] = "date_cas"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_cas";
	
		
		
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

	

	
	$tdataold_cas["date_cas"] = $fdata;
//	year_rat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "year_rat";
	$fdata["GoodName"] = "year_rat";
	$fdata["ownerTable"] = "old_cas";
	$fdata["Label"] = GetFieldLabel("old_cas","year_rat"); 
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
	
		$fdata["strField"] = "year_rat"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "year_rat";
	
		
		
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

	

	
	$tdataold_cas["year_rat"] = $fdata;
//	month_rat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "month_rat";
	$fdata["GoodName"] = "month_rat";
	$fdata["ownerTable"] = "old_cas";
	$fdata["Label"] = GetFieldLabel("old_cas","month_rat"); 
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
	
		$fdata["strField"] = "month_rat"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "month_rat";
	
		
		
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

	

	
	$tdataold_cas["month_rat"] = $fdata;
//	day_rat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "day_rat";
	$fdata["GoodName"] = "day_rat";
	$fdata["ownerTable"] = "old_cas";
	$fdata["Label"] = GetFieldLabel("old_cas","day_rat"); 
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
	
		$fdata["strField"] = "day_rat"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "day_rat";
	
		
		
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

	

	
	$tdataold_cas["day_rat"] = $fdata;

	
$tables_data["old_cas"]=&$tdataold_cas;
$field_labels["old_cas"] = &$fieldLabelsold_cas;
$fieldToolTips["old_cas"] = &$fieldToolTipsold_cas;
$page_titles["old_cas"] = &$pageTitlesold_cas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["old_cas"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["old_cas"] = array();


	
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
					$masterTablesData["old_cas"][0] = $masterParams;	
				$masterTablesData["old_cas"][0]["masterKeys"] = array();
	$masterTablesData["old_cas"][0]["masterKeys"][]="id_func";
				$masterTablesData["old_cas"][0]["detailKeys"] = array();
	$masterTablesData["old_cas"][0]["detailKeys"][]="id_per";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_old_cas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "fecha_registro_dato,  	id_old_cas,  	id_func,  	id_per,  	date_start,  	date_last,  	date_cas,  	year_rat,  	month_rat,  	day_rat";
$proto0["m_strFrom"] = "FROM old_cas";
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
	"m_srcTableName" => "old_cas"
));

$proto5["m_sql"] = "fecha_registro_dato";
$proto5["m_srcTableName"] = "old_cas";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_old_cas",
	"m_strTable" => "old_cas",
	"m_srcTableName" => "old_cas"
));

$proto7["m_sql"] = "id_old_cas";
$proto7["m_srcTableName"] = "old_cas";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "old_cas",
	"m_srcTableName" => "old_cas"
));

$proto9["m_sql"] = "id_func";
$proto9["m_srcTableName"] = "old_cas";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "id_per",
	"m_strTable" => "old_cas",
	"m_srcTableName" => "old_cas"
));

$proto11["m_sql"] = "id_per";
$proto11["m_srcTableName"] = "old_cas";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "date_start",
	"m_strTable" => "old_cas",
	"m_srcTableName" => "old_cas"
));

$proto13["m_sql"] = "date_start";
$proto13["m_srcTableName"] = "old_cas";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "date_last",
	"m_strTable" => "old_cas",
	"m_srcTableName" => "old_cas"
));

$proto15["m_sql"] = "date_last";
$proto15["m_srcTableName"] = "old_cas";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "date_cas",
	"m_strTable" => "old_cas",
	"m_srcTableName" => "old_cas"
));

$proto17["m_sql"] = "date_cas";
$proto17["m_srcTableName"] = "old_cas";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "year_rat",
	"m_strTable" => "old_cas",
	"m_srcTableName" => "old_cas"
));

$proto19["m_sql"] = "year_rat";
$proto19["m_srcTableName"] = "old_cas";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "month_rat",
	"m_strTable" => "old_cas",
	"m_srcTableName" => "old_cas"
));

$proto21["m_sql"] = "month_rat";
$proto21["m_srcTableName"] = "old_cas";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "day_rat",
	"m_strTable" => "old_cas",
	"m_srcTableName" => "old_cas"
));

$proto23["m_sql"] = "day_rat";
$proto23["m_srcTableName"] = "old_cas";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "old_cas";
$proto26["m_srcTableName"] = "old_cas";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "fecha_registro_dato";
$proto26["m_columns"][] = "id_old_cas";
$proto26["m_columns"][] = "id_func";
$proto26["m_columns"][] = "id_per";
$proto26["m_columns"][] = "date_start";
$proto26["m_columns"][] = "date_last";
$proto26["m_columns"][] = "date_cas";
$proto26["m_columns"][] = "year_rat";
$proto26["m_columns"][] = "month_rat";
$proto26["m_columns"][] = "day_rat";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "old_cas";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "old_cas";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="old_cas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_old_cas = createSqlQuery_old_cas();


	
										
	
$tdataold_cas[".sqlquery"] = $queryData_old_cas;

$tableEvents["old_cas"] = new eventsBase;
$tdataold_cas[".hasEvents"] = false;

?>