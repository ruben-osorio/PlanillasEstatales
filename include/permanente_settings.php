<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapermanente = array();	
	$tdatapermanente[".truncateText"] = true;
	$tdatapermanente[".NumberOfChars"] = 80; 
	$tdatapermanente[".ShortName"] = "permanente";
	$tdatapermanente[".OwnerID"] = "";
	$tdatapermanente[".OriginalTable"] = "permanente";

//	field labels
$fieldLabelspermanente = array();
$fieldToolTipspermanente = array();
$pageTitlespermanente = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspermanente["Spanish"] = array();
	$fieldToolTipspermanente["Spanish"] = array();
	$pageTitlespermanente["Spanish"] = array();
	$fieldLabelspermanente["Spanish"]["id_per"] = "Id Per";
	$fieldToolTipspermanente["Spanish"]["id_per"] = "";
	$fieldLabelspermanente["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipspermanente["Spanish"]["id_func"] = "";
	$fieldLabelspermanente["Spanish"]["date_ent"] = "Date Ent";
	$fieldToolTipspermanente["Spanish"]["date_ent"] = "";
	$fieldLabelspermanente["Spanish"]["status"] = "Status";
	$fieldToolTipspermanente["Spanish"]["status"] = "";
	$fieldLabelspermanente["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipspermanente["Spanish"]["TIPO"] = "";
	$fieldLabelspermanente["Spanish"]["updated_at"] = "Updated At";
	$fieldToolTipspermanente["Spanish"]["updated_at"] = "";
	$fieldLabelspermanente["Spanish"]["created_at"] = "Created At";
	$fieldToolTipspermanente["Spanish"]["created_at"] = "";
	$fieldLabelspermanente["Spanish"]["item"] = "Item";
	$fieldToolTipspermanente["Spanish"]["item"] = "";
	if (count($fieldToolTipspermanente["Spanish"]))
		$tdatapermanente[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspermanente[""] = array();
	$fieldToolTipspermanente[""] = array();
	$pageTitlespermanente[""] = array();
	$fieldLabelspermanente[""]["id_per"] = "Id Per";
	$fieldToolTipspermanente[""]["id_per"] = "";
	$fieldLabelspermanente[""]["id_func"] = "Id Func";
	$fieldToolTipspermanente[""]["id_func"] = "";
	$fieldLabelspermanente[""]["date_ent"] = "Date Ent";
	$fieldToolTipspermanente[""]["date_ent"] = "";
	$fieldLabelspermanente[""]["status"] = "Status";
	$fieldToolTipspermanente[""]["status"] = "";
	$fieldLabelspermanente[""]["TIPO"] = "TIPO";
	$fieldToolTipspermanente[""]["TIPO"] = "";
	$fieldLabelspermanente[""]["updated_at"] = "Updated At";
	$fieldToolTipspermanente[""]["updated_at"] = "";
	$fieldLabelspermanente[""]["created_at"] = "Created At";
	$fieldToolTipspermanente[""]["created_at"] = "";
	$fieldLabelspermanente[""]["item"] = "Item";
	$fieldToolTipspermanente[""]["item"] = "";
	if (count($fieldToolTipspermanente[""]))
		$tdatapermanente[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspermanente["English"] = array();
	$fieldToolTipspermanente["English"] = array();
	$pageTitlespermanente["English"] = array();
	$fieldLabelspermanente["English"]["id_per"] = "Id Per";
	$fieldToolTipspermanente["English"]["id_per"] = "";
	$fieldLabelspermanente["English"]["id_func"] = "Id Func";
	$fieldToolTipspermanente["English"]["id_func"] = "";
	$fieldLabelspermanente["English"]["date_ent"] = "Date Ent";
	$fieldToolTipspermanente["English"]["date_ent"] = "";
	$fieldLabelspermanente["English"]["status"] = "Status";
	$fieldToolTipspermanente["English"]["status"] = "";
	$fieldLabelspermanente["English"]["TIPO"] = "TIPO";
	$fieldToolTipspermanente["English"]["TIPO"] = "";
	$fieldLabelspermanente["English"]["updated_at"] = "Updated At";
	$fieldToolTipspermanente["English"]["updated_at"] = "";
	$fieldLabelspermanente["English"]["created_at"] = "Created At";
	$fieldToolTipspermanente["English"]["created_at"] = "";
	$fieldLabelspermanente["English"]["item"] = "Item";
	$fieldToolTipspermanente["English"]["item"] = "";
	if (count($fieldToolTipspermanente["English"]))
		$tdatapermanente[".isUseToolTips"] = true;
}
	
	
	$tdatapermanente[".NCSearch"] = true;



$tdatapermanente[".shortTableName"] = "permanente";
$tdatapermanente[".nSecOptions"] = 0;
$tdatapermanente[".recsPerRowList"] = 1;
$tdatapermanente[".recsPerRowPrint"] = 1;
$tdatapermanente[".mainTableOwnerID"] = "";
$tdatapermanente[".moveNext"] = 1;
$tdatapermanente[".entityType"] = 0;

$tdatapermanente[".strOriginalTableName"] = "permanente";




$tdatapermanente[".showAddInPopup"] = false;

$tdatapermanente[".showEditInPopup"] = false;

$tdatapermanente[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapermanente[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapermanente[".fieldsForRegister"] = array();

$tdatapermanente[".listAjax"] = false;

	$tdatapermanente[".audit"] = false;

	$tdatapermanente[".locking"] = false;

$tdatapermanente[".edit"] = true;
$tdatapermanente[".afterEditAction"] = 1;
$tdatapermanente[".closePopupAfterEdit"] = 1;
$tdatapermanente[".afterEditActionDetTable"] = "";

$tdatapermanente[".add"] = true;
$tdatapermanente[".afterAddAction"] = 1;
$tdatapermanente[".closePopupAfterAdd"] = 1;
$tdatapermanente[".afterAddActionDetTable"] = "";

$tdatapermanente[".list"] = true;

$tdatapermanente[".inlineEdit"] = true;
$tdatapermanente[".inlineAdd"] = true;
$tdatapermanente[".view"] = true;

$tdatapermanente[".import"] = true;

$tdatapermanente[".exportTo"] = true;

$tdatapermanente[".printFriendly"] = true;

$tdatapermanente[".delete"] = true;

$tdatapermanente[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapermanente[".searchSaving"] = false;
//

$tdatapermanente[".showSearchPanel"] = true;
		$tdatapermanente[".flexibleSearch"] = true;		

if (isMobile())
	$tdatapermanente[".isUseAjaxSuggest"] = false;
else 
	$tdatapermanente[".isUseAjaxSuggest"] = true;

$tdatapermanente[".rowHighlite"] = true;



$tdatapermanente[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapermanente[".isUseTimeForSearch"] = false;





$tdatapermanente[".allSearchFields"] = array();
$tdatapermanente[".filterFields"] = array();
$tdatapermanente[".requiredSearchFields"] = array();

$tdatapermanente[".allSearchFields"][] = "id_per";
	$tdatapermanente[".allSearchFields"][] = "id_func";
	$tdatapermanente[".allSearchFields"][] = "date_ent";
	$tdatapermanente[".allSearchFields"][] = "status";
	$tdatapermanente[".allSearchFields"][] = "TIPO";
	$tdatapermanente[".allSearchFields"][] = "updated_at";
	$tdatapermanente[".allSearchFields"][] = "created_at";
	$tdatapermanente[".allSearchFields"][] = "item";
	

$tdatapermanente[".googleLikeFields"] = array();
$tdatapermanente[".googleLikeFields"][] = "id_per";
$tdatapermanente[".googleLikeFields"][] = "id_func";
$tdatapermanente[".googleLikeFields"][] = "date_ent";
$tdatapermanente[".googleLikeFields"][] = "status";
$tdatapermanente[".googleLikeFields"][] = "TIPO";
$tdatapermanente[".googleLikeFields"][] = "updated_at";
$tdatapermanente[".googleLikeFields"][] = "created_at";
$tdatapermanente[".googleLikeFields"][] = "item";


$tdatapermanente[".advSearchFields"] = array();
$tdatapermanente[".advSearchFields"][] = "id_per";
$tdatapermanente[".advSearchFields"][] = "id_func";
$tdatapermanente[".advSearchFields"][] = "date_ent";
$tdatapermanente[".advSearchFields"][] = "status";
$tdatapermanente[".advSearchFields"][] = "TIPO";
$tdatapermanente[".advSearchFields"][] = "updated_at";
$tdatapermanente[".advSearchFields"][] = "created_at";
$tdatapermanente[".advSearchFields"][] = "item";

$tdatapermanente[".tableType"] = "list";

$tdatapermanente[".printerPageOrientation"] = 0;
$tdatapermanente[".nPrinterPageScale"] = 100;

$tdatapermanente[".nPrinterSplitRecords"] = 40;

$tdatapermanente[".nPrinterPDFSplitRecords"] = 40;



$tdatapermanente[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatapermanente[".pageSize"] = 20;

$tdatapermanente[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapermanente[".strOrderBy"] = $tstrOrderBy;

$tdatapermanente[".orderindexes"] = array();

$tdatapermanente[".sqlHead"] = "SELECT id_per,  	id_func,  	date_ent,  	status,  	TIPO,  	updated_at,  	created_at,  	item";
$tdatapermanente[".sqlFrom"] = "FROM permanente";
$tdatapermanente[".sqlWhereExpr"] = "";
$tdatapermanente[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapermanente[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapermanente[".arrGroupsPerPage"] = $arrGPP;

$tdatapermanente[".highlightSearchResults"] = true;

$tableKeyspermanente = array();
$tableKeyspermanente[] = "id_per";
$tdatapermanente[".Keys"] = $tableKeyspermanente;

$tdatapermanente[".listFields"] = array();
$tdatapermanente[".listFields"][] = "id_per";
$tdatapermanente[".listFields"][] = "id_func";
$tdatapermanente[".listFields"][] = "date_ent";
$tdatapermanente[".listFields"][] = "status";
$tdatapermanente[".listFields"][] = "TIPO";
$tdatapermanente[".listFields"][] = "updated_at";
$tdatapermanente[".listFields"][] = "created_at";
$tdatapermanente[".listFields"][] = "item";

$tdatapermanente[".hideMobileList"] = array();


$tdatapermanente[".viewFields"] = array();
$tdatapermanente[".viewFields"][] = "id_per";
$tdatapermanente[".viewFields"][] = "id_func";
$tdatapermanente[".viewFields"][] = "date_ent";
$tdatapermanente[".viewFields"][] = "status";
$tdatapermanente[".viewFields"][] = "TIPO";
$tdatapermanente[".viewFields"][] = "updated_at";
$tdatapermanente[".viewFields"][] = "created_at";
$tdatapermanente[".viewFields"][] = "item";

$tdatapermanente[".addFields"] = array();
$tdatapermanente[".addFields"][] = "id_func";
$tdatapermanente[".addFields"][] = "date_ent";
$tdatapermanente[".addFields"][] = "status";
$tdatapermanente[".addFields"][] = "TIPO";
$tdatapermanente[".addFields"][] = "updated_at";
$tdatapermanente[".addFields"][] = "created_at";
$tdatapermanente[".addFields"][] = "item";

$tdatapermanente[".masterListFields"] = array();
$tdatapermanente[".masterListFields"][] = "id_per";
$tdatapermanente[".masterListFields"][] = "id_func";
$tdatapermanente[".masterListFields"][] = "date_ent";
$tdatapermanente[".masterListFields"][] = "status";
$tdatapermanente[".masterListFields"][] = "TIPO";
$tdatapermanente[".masterListFields"][] = "updated_at";
$tdatapermanente[".masterListFields"][] = "created_at";
$tdatapermanente[".masterListFields"][] = "item";

$tdatapermanente[".inlineAddFields"] = array();
$tdatapermanente[".inlineAddFields"][] = "id_func";
$tdatapermanente[".inlineAddFields"][] = "date_ent";
$tdatapermanente[".inlineAddFields"][] = "status";
$tdatapermanente[".inlineAddFields"][] = "TIPO";
$tdatapermanente[".inlineAddFields"][] = "updated_at";
$tdatapermanente[".inlineAddFields"][] = "created_at";
$tdatapermanente[".inlineAddFields"][] = "item";

$tdatapermanente[".editFields"] = array();
$tdatapermanente[".editFields"][] = "id_func";
$tdatapermanente[".editFields"][] = "date_ent";
$tdatapermanente[".editFields"][] = "status";
$tdatapermanente[".editFields"][] = "TIPO";
$tdatapermanente[".editFields"][] = "updated_at";
$tdatapermanente[".editFields"][] = "created_at";
$tdatapermanente[".editFields"][] = "item";

$tdatapermanente[".inlineEditFields"] = array();
$tdatapermanente[".inlineEditFields"][] = "id_func";
$tdatapermanente[".inlineEditFields"][] = "date_ent";
$tdatapermanente[".inlineEditFields"][] = "status";
$tdatapermanente[".inlineEditFields"][] = "TIPO";
$tdatapermanente[".inlineEditFields"][] = "updated_at";
$tdatapermanente[".inlineEditFields"][] = "created_at";
$tdatapermanente[".inlineEditFields"][] = "item";

$tdatapermanente[".exportFields"] = array();
$tdatapermanente[".exportFields"][] = "id_per";
$tdatapermanente[".exportFields"][] = "id_func";
$tdatapermanente[".exportFields"][] = "date_ent";
$tdatapermanente[".exportFields"][] = "status";
$tdatapermanente[".exportFields"][] = "TIPO";
$tdatapermanente[".exportFields"][] = "updated_at";
$tdatapermanente[".exportFields"][] = "created_at";
$tdatapermanente[".exportFields"][] = "item";

$tdatapermanente[".importFields"] = array();
$tdatapermanente[".importFields"][] = "id_per";
$tdatapermanente[".importFields"][] = "id_func";
$tdatapermanente[".importFields"][] = "date_ent";
$tdatapermanente[".importFields"][] = "status";
$tdatapermanente[".importFields"][] = "TIPO";
$tdatapermanente[".importFields"][] = "updated_at";
$tdatapermanente[".importFields"][] = "created_at";
$tdatapermanente[".importFields"][] = "item";

$tdatapermanente[".printFields"] = array();
$tdatapermanente[".printFields"][] = "id_per";
$tdatapermanente[".printFields"][] = "id_func";
$tdatapermanente[".printFields"][] = "date_ent";
$tdatapermanente[".printFields"][] = "status";
$tdatapermanente[".printFields"][] = "TIPO";
$tdatapermanente[".printFields"][] = "updated_at";
$tdatapermanente[".printFields"][] = "created_at";
$tdatapermanente[".printFields"][] = "item";

//	id_per
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_per";
	$fdata["GoodName"] = "id_per";
	$fdata["ownerTable"] = "permanente";
	$fdata["Label"] = GetFieldLabel("permanente","id_per"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatapermanente["id_per"] = $fdata;
//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "permanente";
	$fdata["Label"] = GetFieldLabel("permanente","id_func"); 
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

	

	
	$tdatapermanente["id_func"] = $fdata;
//	date_ent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "date_ent";
	$fdata["GoodName"] = "date_ent";
	$fdata["ownerTable"] = "permanente";
	$fdata["Label"] = GetFieldLabel("permanente","date_ent"); 
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
	
		$fdata["strField"] = "date_ent"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_ent";
	
		
		
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

	

	
	$tdatapermanente["date_ent"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "permanente";
	$fdata["Label"] = GetFieldLabel("permanente","status"); 
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
	
		$fdata["strField"] = "status"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";
	
		
		
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

	

	
	$tdatapermanente["status"] = $fdata;
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "permanente";
	$fdata["Label"] = GetFieldLabel("permanente","TIPO"); 
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
	
		$fdata["strField"] = "TIPO"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPO";
	
		
		
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
			$edata["EditParams"].= " maxlength=100";
	
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

	

	
	$tdatapermanente["TIPO"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "permanente";
	$fdata["Label"] = GetFieldLabel("permanente","updated_at"); 
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
	
		$fdata["strField"] = "updated_at"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_at";
	
		
		
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
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
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

	

	
	$tdatapermanente["updated_at"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "permanente";
	$fdata["Label"] = GetFieldLabel("permanente","created_at"); 
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
	
		$fdata["strField"] = "created_at"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";
	
		
		
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
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
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

	

	
	$tdatapermanente["created_at"] = $fdata;
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "permanente";
	$fdata["Label"] = GetFieldLabel("permanente","item"); 
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
	
		$fdata["strField"] = "item"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "item";
	
		
		
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

	

	
	$tdatapermanente["item"] = $fdata;

	
$tables_data["permanente"]=&$tdatapermanente;
$field_labels["permanente"] = &$fieldLabelspermanente;
$fieldToolTips["permanente"] = &$fieldToolTipspermanente;
$page_titles["permanente"] = &$pageTitlespermanente;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["permanente"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["permanente"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_permanente()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_per,  	id_func,  	date_ent,  	status,  	TIPO,  	updated_at,  	created_at,  	item";
$proto0["m_strFrom"] = "FROM permanente";
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
	"m_strName" => "id_per",
	"m_strTable" => "permanente",
	"m_srcTableName" => "permanente"
));

$proto5["m_sql"] = "id_per";
$proto5["m_srcTableName"] = "permanente";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "permanente",
	"m_srcTableName" => "permanente"
));

$proto7["m_sql"] = "id_func";
$proto7["m_srcTableName"] = "permanente";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "date_ent",
	"m_strTable" => "permanente",
	"m_srcTableName" => "permanente"
));

$proto9["m_sql"] = "date_ent";
$proto9["m_srcTableName"] = "permanente";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "permanente",
	"m_srcTableName" => "permanente"
));

$proto11["m_sql"] = "status";
$proto11["m_srcTableName"] = "permanente";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "permanente",
	"m_srcTableName" => "permanente"
));

$proto13["m_sql"] = "TIPO";
$proto13["m_srcTableName"] = "permanente";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "permanente",
	"m_srcTableName" => "permanente"
));

$proto15["m_sql"] = "updated_at";
$proto15["m_srcTableName"] = "permanente";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "permanente",
	"m_srcTableName" => "permanente"
));

$proto17["m_sql"] = "created_at";
$proto17["m_srcTableName"] = "permanente";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "permanente",
	"m_srcTableName" => "permanente"
));

$proto19["m_sql"] = "item";
$proto19["m_srcTableName"] = "permanente";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "permanente";
$proto22["m_srcTableName"] = "permanente";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id_per";
$proto22["m_columns"][] = "id_func";
$proto22["m_columns"][] = "date_ent";
$proto22["m_columns"][] = "status";
$proto22["m_columns"][] = "TIPO";
$proto22["m_columns"][] = "updated_at";
$proto22["m_columns"][] = "created_at";
$proto22["m_columns"][] = "item";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "permanente";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "permanente";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="permanente";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_permanente = createSqlQuery_permanente();


	
								
	
$tdatapermanente[".sqlquery"] = $queryData_permanente;

$tableEvents["permanente"] = new eventsBase;
$tdatapermanente[".hasEvents"] = false;

?>