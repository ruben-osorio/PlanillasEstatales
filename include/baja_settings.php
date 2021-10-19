<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabaja = array();	
	$tdatabaja[".truncateText"] = true;
	$tdatabaja[".NumberOfChars"] = 80; 
	$tdatabaja[".ShortName"] = "baja";
	$tdatabaja[".OwnerID"] = "";
	$tdatabaja[".OriginalTable"] = "baja";

//	field labels
$fieldLabelsbaja = array();
$fieldToolTipsbaja = array();
$pageTitlesbaja = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbaja["Spanish"] = array();
	$fieldToolTipsbaja["Spanish"] = array();
	$pageTitlesbaja["Spanish"] = array();
	$fieldLabelsbaja["Spanish"]["id_baja"] = "Id Baja";
	$fieldToolTipsbaja["Spanish"]["id_baja"] = "";
	$fieldLabelsbaja["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipsbaja["Spanish"]["id_func"] = "";
	$fieldLabelsbaja["Spanish"]["id_per"] = "Id del personal";
	$fieldToolTipsbaja["Spanish"]["id_per"] = "";
	$fieldLabelsbaja["Spanish"]["date_pres"] = "Fecha de Presentación";
	$fieldToolTipsbaja["Spanish"]["date_pres"] = "";
	$fieldLabelsbaja["Spanish"]["date_efect"] = "Fecha que se hizo efecto";
	$fieldToolTipsbaja["Spanish"]["date_efect"] = "";
	$fieldLabelsbaja["Spanish"]["reasone"] = "Razones";
	$fieldToolTipsbaja["Spanish"]["reasone"] = "";
	$fieldLabelsbaja["Spanish"]["comment"] = "Comentario";
	$fieldToolTipsbaja["Spanish"]["comment"] = "";
	if (count($fieldToolTipsbaja["Spanish"]))
		$tdatabaja[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbaja[""] = array();
	$fieldToolTipsbaja[""] = array();
	$pageTitlesbaja[""] = array();
	if (count($fieldToolTipsbaja[""]))
		$tdatabaja[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbaja["English"] = array();
	$fieldToolTipsbaja["English"] = array();
	$pageTitlesbaja["English"] = array();
	if (count($fieldToolTipsbaja["English"]))
		$tdatabaja[".isUseToolTips"] = true;
}
	
	
	$tdatabaja[".NCSearch"] = true;



$tdatabaja[".shortTableName"] = "baja";
$tdatabaja[".nSecOptions"] = 0;
$tdatabaja[".recsPerRowList"] = 1;
$tdatabaja[".recsPerRowPrint"] = 1;
$tdatabaja[".mainTableOwnerID"] = "";
$tdatabaja[".moveNext"] = 1;
$tdatabaja[".entityType"] = 0;

$tdatabaja[".strOriginalTableName"] = "baja";




$tdatabaja[".showAddInPopup"] = false;

$tdatabaja[".showEditInPopup"] = false;

$tdatabaja[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabaja[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabaja[".fieldsForRegister"] = array();

$tdatabaja[".listAjax"] = false;

	$tdatabaja[".audit"] = false;

	$tdatabaja[".locking"] = false;

$tdatabaja[".edit"] = true;
$tdatabaja[".afterEditAction"] = 1;
$tdatabaja[".closePopupAfterEdit"] = 1;
$tdatabaja[".afterEditActionDetTable"] = "";

$tdatabaja[".add"] = true;
$tdatabaja[".afterAddAction"] = 1;
$tdatabaja[".closePopupAfterAdd"] = 1;
$tdatabaja[".afterAddActionDetTable"] = "";

$tdatabaja[".list"] = true;

$tdatabaja[".inlineEdit"] = true;
$tdatabaja[".inlineAdd"] = true;
$tdatabaja[".view"] = true;




$tdatabaja[".delete"] = true;

$tdatabaja[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatabaja[".searchSaving"] = false;
//

$tdatabaja[".showSearchPanel"] = true;
		$tdatabaja[".flexibleSearch"] = true;		

if (isMobile())
	$tdatabaja[".isUseAjaxSuggest"] = false;
else 
	$tdatabaja[".isUseAjaxSuggest"] = true;

$tdatabaja[".rowHighlite"] = true;



$tdatabaja[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabaja[".isUseTimeForSearch"] = false;





$tdatabaja[".allSearchFields"] = array();
$tdatabaja[".filterFields"] = array();
$tdatabaja[".requiredSearchFields"] = array();

$tdatabaja[".allSearchFields"][] = "id_baja";
	$tdatabaja[".allSearchFields"][] = "id_func";
	$tdatabaja[".allSearchFields"][] = "id_per";
	$tdatabaja[".allSearchFields"][] = "date_pres";
	$tdatabaja[".allSearchFields"][] = "date_efect";
	$tdatabaja[".allSearchFields"][] = "reasone";
	$tdatabaja[".allSearchFields"][] = "comment";
	

$tdatabaja[".googleLikeFields"] = array();
$tdatabaja[".googleLikeFields"][] = "id_baja";
$tdatabaja[".googleLikeFields"][] = "id_func";
$tdatabaja[".googleLikeFields"][] = "id_per";
$tdatabaja[".googleLikeFields"][] = "date_pres";
$tdatabaja[".googleLikeFields"][] = "date_efect";
$tdatabaja[".googleLikeFields"][] = "reasone";
$tdatabaja[".googleLikeFields"][] = "comment";


$tdatabaja[".advSearchFields"] = array();
$tdatabaja[".advSearchFields"][] = "id_baja";
$tdatabaja[".advSearchFields"][] = "id_func";
$tdatabaja[".advSearchFields"][] = "id_per";
$tdatabaja[".advSearchFields"][] = "date_pres";
$tdatabaja[".advSearchFields"][] = "date_efect";
$tdatabaja[".advSearchFields"][] = "reasone";
$tdatabaja[".advSearchFields"][] = "comment";

$tdatabaja[".tableType"] = "list";

$tdatabaja[".printerPageOrientation"] = 0;
$tdatabaja[".nPrinterPageScale"] = 100;

$tdatabaja[".nPrinterSplitRecords"] = 40;

$tdatabaja[".nPrinterPDFSplitRecords"] = 40;



$tdatabaja[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatabaja[".pageSize"] = 20;

$tdatabaja[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabaja[".strOrderBy"] = $tstrOrderBy;

$tdatabaja[".orderindexes"] = array();

$tdatabaja[".sqlHead"] = "SELECT id_baja,  	id_func,  	id_per,  	date_pres,  	date_efect,  	reasone,  	`comment`";
$tdatabaja[".sqlFrom"] = "FROM baja";
$tdatabaja[".sqlWhereExpr"] = "";
$tdatabaja[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabaja[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabaja[".arrGroupsPerPage"] = $arrGPP;

$tdatabaja[".highlightSearchResults"] = true;

$tableKeysbaja = array();
$tableKeysbaja[] = "id_baja";
$tdatabaja[".Keys"] = $tableKeysbaja;

$tdatabaja[".listFields"] = array();
$tdatabaja[".listFields"][] = "id_baja";
$tdatabaja[".listFields"][] = "id_func";
$tdatabaja[".listFields"][] = "id_per";
$tdatabaja[".listFields"][] = "date_pres";
$tdatabaja[".listFields"][] = "date_efect";
$tdatabaja[".listFields"][] = "reasone";
$tdatabaja[".listFields"][] = "comment";

$tdatabaja[".hideMobileList"] = array();


$tdatabaja[".viewFields"] = array();
$tdatabaja[".viewFields"][] = "id_func";
$tdatabaja[".viewFields"][] = "id_per";
$tdatabaja[".viewFields"][] = "date_pres";
$tdatabaja[".viewFields"][] = "date_efect";
$tdatabaja[".viewFields"][] = "reasone";
$tdatabaja[".viewFields"][] = "comment";

$tdatabaja[".addFields"] = array();
$tdatabaja[".addFields"][] = "id_func";
$tdatabaja[".addFields"][] = "id_per";
$tdatabaja[".addFields"][] = "date_pres";
$tdatabaja[".addFields"][] = "date_efect";
$tdatabaja[".addFields"][] = "reasone";
$tdatabaja[".addFields"][] = "comment";

$tdatabaja[".masterListFields"] = array();
$tdatabaja[".masterListFields"][] = "id_baja";
$tdatabaja[".masterListFields"][] = "id_func";
$tdatabaja[".masterListFields"][] = "id_per";
$tdatabaja[".masterListFields"][] = "date_pres";
$tdatabaja[".masterListFields"][] = "date_efect";
$tdatabaja[".masterListFields"][] = "reasone";
$tdatabaja[".masterListFields"][] = "comment";

$tdatabaja[".inlineAddFields"] = array();
$tdatabaja[".inlineAddFields"][] = "id_func";
$tdatabaja[".inlineAddFields"][] = "id_per";
$tdatabaja[".inlineAddFields"][] = "date_pres";
$tdatabaja[".inlineAddFields"][] = "date_efect";
$tdatabaja[".inlineAddFields"][] = "reasone";
$tdatabaja[".inlineAddFields"][] = "comment";

$tdatabaja[".editFields"] = array();
$tdatabaja[".editFields"][] = "id_func";
$tdatabaja[".editFields"][] = "id_per";
$tdatabaja[".editFields"][] = "date_pres";
$tdatabaja[".editFields"][] = "date_efect";
$tdatabaja[".editFields"][] = "reasone";
$tdatabaja[".editFields"][] = "comment";

$tdatabaja[".inlineEditFields"] = array();
$tdatabaja[".inlineEditFields"][] = "id_func";
$tdatabaja[".inlineEditFields"][] = "id_per";
$tdatabaja[".inlineEditFields"][] = "date_pres";
$tdatabaja[".inlineEditFields"][] = "date_efect";
$tdatabaja[".inlineEditFields"][] = "reasone";
$tdatabaja[".inlineEditFields"][] = "comment";

$tdatabaja[".exportFields"] = array();

$tdatabaja[".importFields"] = array();

$tdatabaja[".printFields"] = array();

//	id_baja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_baja";
	$fdata["GoodName"] = "id_baja";
	$fdata["ownerTable"] = "baja";
	$fdata["Label"] = GetFieldLabel("baja","id_baja"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id_baja"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_baja";
	
		
		
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

	

	
	$tdatabaja["id_baja"] = $fdata;
//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "baja";
	$fdata["Label"] = GetFieldLabel("baja","id_func"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "funcionario";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id_func";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(name,'  ',l_name1,'  ',l_name2)";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupOrderBy"] = "id_func";
	
		
			
		
				
	
	
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatabaja["id_func"] = $fdata;
//	id_per
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_per";
	$fdata["GoodName"] = "id_per";
	$fdata["ownerTable"] = "baja";
	$fdata["Label"] = GetFieldLabel("baja","id_per"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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

	

	
	$tdatabaja["id_per"] = $fdata;
//	date_pres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "date_pres";
	$fdata["GoodName"] = "date_pres";
	$fdata["ownerTable"] = "baja";
	$fdata["Label"] = GetFieldLabel("baja","date_pres"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "date_pres"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_pres";
	
		
		
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatabaja["date_pres"] = $fdata;
//	date_efect
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "date_efect";
	$fdata["GoodName"] = "date_efect";
	$fdata["ownerTable"] = "baja";
	$fdata["Label"] = GetFieldLabel("baja","date_efect"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "date_efect"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_efect";
	
		
		
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatabaja["date_efect"] = $fdata;
//	reasone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "reasone";
	$fdata["GoodName"] = "reasone";
	$fdata["ownerTable"] = "baja";
	$fdata["Label"] = GetFieldLabel("baja","reasone"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "reasone"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reasone";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
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

	

	
	$tdatabaja["reasone"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "baja";
	$fdata["Label"] = GetFieldLabel("baja","comment"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "comment"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`comment`";
	
		
		
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
			$edata["EditParams"].= " maxlength=550";
	
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

	

	
	$tdatabaja["comment"] = $fdata;

	
$tables_data["baja"]=&$tdatabaja;
$field_labels["baja"] = &$fieldLabelsbaja;
$fieldToolTips["baja"] = &$fieldToolTipsbaja;
$page_titles["baja"] = &$pageTitlesbaja;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["baja"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["baja"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_baja()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_baja,  	id_func,  	id_per,  	date_pres,  	date_efect,  	reasone,  	`comment`";
$proto0["m_strFrom"] = "FROM baja";
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
	"m_strName" => "id_baja",
	"m_strTable" => "baja",
	"m_srcTableName" => "baja"
));

$proto5["m_sql"] = "id_baja";
$proto5["m_srcTableName"] = "baja";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "baja",
	"m_srcTableName" => "baja"
));

$proto7["m_sql"] = "id_func";
$proto7["m_srcTableName"] = "baja";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "id_per",
	"m_strTable" => "baja",
	"m_srcTableName" => "baja"
));

$proto9["m_sql"] = "id_per";
$proto9["m_srcTableName"] = "baja";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "date_pres",
	"m_strTable" => "baja",
	"m_srcTableName" => "baja"
));

$proto11["m_sql"] = "date_pres";
$proto11["m_srcTableName"] = "baja";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "date_efect",
	"m_strTable" => "baja",
	"m_srcTableName" => "baja"
));

$proto13["m_sql"] = "date_efect";
$proto13["m_srcTableName"] = "baja";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "reasone",
	"m_strTable" => "baja",
	"m_srcTableName" => "baja"
));

$proto15["m_sql"] = "reasone";
$proto15["m_srcTableName"] = "baja";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "baja",
	"m_srcTableName" => "baja"
));

$proto17["m_sql"] = "`comment`";
$proto17["m_srcTableName"] = "baja";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "baja";
$proto20["m_srcTableName"] = "baja";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id_baja";
$proto20["m_columns"][] = "id_func";
$proto20["m_columns"][] = "id_per";
$proto20["m_columns"][] = "date_pres";
$proto20["m_columns"][] = "date_efect";
$proto20["m_columns"][] = "reasone";
$proto20["m_columns"][] = "comment";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "baja";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "baja";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="baja";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_baja = createSqlQuery_baja();


	
							
	
$tdatabaja[".sqlquery"] = $queryData_baja;

$tableEvents["baja"] = new eventsBase;
$tdatabaja[".hasEvents"] = false;

?>