<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabaja_con = array();	
	$tdatabaja_con[".truncateText"] = true;
	$tdatabaja_con[".NumberOfChars"] = 80; 
	$tdatabaja_con[".ShortName"] = "baja_con";
	$tdatabaja_con[".OwnerID"] = "";
	$tdatabaja_con[".OriginalTable"] = "baja_con";

//	field labels
$fieldLabelsbaja_con = array();
$fieldToolTipsbaja_con = array();
$pageTitlesbaja_con = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbaja_con["Spanish"] = array();
	$fieldToolTipsbaja_con["Spanish"] = array();
	$pageTitlesbaja_con["Spanish"] = array();
	$fieldLabelsbaja_con["Spanish"]["id_ren"] = "Id Ren";
	$fieldToolTipsbaja_con["Spanish"]["id_ren"] = "";
	$fieldLabelsbaja_con["Spanish"]["id_con"] = "Id Con";
	$fieldToolTipsbaja_con["Spanish"]["id_con"] = "";
	$fieldLabelsbaja_con["Spanish"]["date_pres"] = "Fecha de presentación";
	$fieldToolTipsbaja_con["Spanish"]["date_pres"] = "";
	$fieldLabelsbaja_con["Spanish"]["date_efec"] = "Fecha que se hizo efecto";
	$fieldToolTipsbaja_con["Spanish"]["date_efec"] = "";
	$fieldLabelsbaja_con["Spanish"]["reasone"] = "Razones";
	$fieldToolTipsbaja_con["Spanish"]["reasone"] = "";
	$fieldLabelsbaja_con["Spanish"]["comment"] = "Comentario";
	$fieldToolTipsbaja_con["Spanish"]["comment"] = "";
	if (count($fieldToolTipsbaja_con["Spanish"]))
		$tdatabaja_con[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbaja_con[""] = array();
	$fieldToolTipsbaja_con[""] = array();
	$pageTitlesbaja_con[""] = array();
	if (count($fieldToolTipsbaja_con[""]))
		$tdatabaja_con[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbaja_con["English"] = array();
	$fieldToolTipsbaja_con["English"] = array();
	$pageTitlesbaja_con["English"] = array();
	if (count($fieldToolTipsbaja_con["English"]))
		$tdatabaja_con[".isUseToolTips"] = true;
}
	
	
	$tdatabaja_con[".NCSearch"] = true;



$tdatabaja_con[".shortTableName"] = "baja_con";
$tdatabaja_con[".nSecOptions"] = 0;
$tdatabaja_con[".recsPerRowList"] = 1;
$tdatabaja_con[".recsPerRowPrint"] = 1;
$tdatabaja_con[".mainTableOwnerID"] = "";
$tdatabaja_con[".moveNext"] = 1;
$tdatabaja_con[".entityType"] = 0;

$tdatabaja_con[".strOriginalTableName"] = "baja_con";




$tdatabaja_con[".showAddInPopup"] = false;

$tdatabaja_con[".showEditInPopup"] = false;

$tdatabaja_con[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabaja_con[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabaja_con[".fieldsForRegister"] = array();

$tdatabaja_con[".listAjax"] = false;

	$tdatabaja_con[".audit"] = false;

	$tdatabaja_con[".locking"] = false;

$tdatabaja_con[".edit"] = true;
$tdatabaja_con[".afterEditAction"] = 1;
$tdatabaja_con[".closePopupAfterEdit"] = 1;
$tdatabaja_con[".afterEditActionDetTable"] = "";

$tdatabaja_con[".add"] = true;
$tdatabaja_con[".afterAddAction"] = 1;
$tdatabaja_con[".closePopupAfterAdd"] = 1;
$tdatabaja_con[".afterAddActionDetTable"] = "";

$tdatabaja_con[".list"] = true;

$tdatabaja_con[".inlineEdit"] = true;
$tdatabaja_con[".inlineAdd"] = true;
$tdatabaja_con[".view"] = true;

$tdatabaja_con[".import"] = true;

$tdatabaja_con[".exportTo"] = true;

$tdatabaja_con[".printFriendly"] = true;

$tdatabaja_con[".delete"] = true;

$tdatabaja_con[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatabaja_con[".searchSaving"] = false;
//

$tdatabaja_con[".showSearchPanel"] = true;
		$tdatabaja_con[".flexibleSearch"] = true;		

if (isMobile())
	$tdatabaja_con[".isUseAjaxSuggest"] = false;
else 
	$tdatabaja_con[".isUseAjaxSuggest"] = true;

$tdatabaja_con[".rowHighlite"] = true;



$tdatabaja_con[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabaja_con[".isUseTimeForSearch"] = false;





$tdatabaja_con[".allSearchFields"] = array();
$tdatabaja_con[".filterFields"] = array();
$tdatabaja_con[".requiredSearchFields"] = array();

$tdatabaja_con[".allSearchFields"][] = "id_ren";
	$tdatabaja_con[".allSearchFields"][] = "id_con";
	$tdatabaja_con[".allSearchFields"][] = "date_pres";
	$tdatabaja_con[".allSearchFields"][] = "date_efec";
	$tdatabaja_con[".allSearchFields"][] = "reasone";
	$tdatabaja_con[".allSearchFields"][] = "comment";
	

$tdatabaja_con[".googleLikeFields"] = array();
$tdatabaja_con[".googleLikeFields"][] = "id_ren";
$tdatabaja_con[".googleLikeFields"][] = "id_con";
$tdatabaja_con[".googleLikeFields"][] = "date_pres";
$tdatabaja_con[".googleLikeFields"][] = "date_efec";
$tdatabaja_con[".googleLikeFields"][] = "reasone";
$tdatabaja_con[".googleLikeFields"][] = "comment";


$tdatabaja_con[".advSearchFields"] = array();
$tdatabaja_con[".advSearchFields"][] = "id_ren";
$tdatabaja_con[".advSearchFields"][] = "id_con";
$tdatabaja_con[".advSearchFields"][] = "date_pres";
$tdatabaja_con[".advSearchFields"][] = "date_efec";
$tdatabaja_con[".advSearchFields"][] = "reasone";
$tdatabaja_con[".advSearchFields"][] = "comment";

$tdatabaja_con[".tableType"] = "list";

$tdatabaja_con[".printerPageOrientation"] = 0;
$tdatabaja_con[".nPrinterPageScale"] = 100;

$tdatabaja_con[".nPrinterSplitRecords"] = 40;

$tdatabaja_con[".nPrinterPDFSplitRecords"] = 40;



$tdatabaja_con[".geocodingEnabled"] = false;




	





// view page pdf
$tdatabaja_con[".isViewPagePDF"] = true;
$tdatabaja_con[".isLandscapeViewPDFOrientation"] = 1;
$tdatabaja_con[".nViewPagePDFScale"] = 100;

// print page pdf


$tdatabaja_con[".pageSize"] = 20;

$tdatabaja_con[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabaja_con[".strOrderBy"] = $tstrOrderBy;

$tdatabaja_con[".orderindexes"] = array();

$tdatabaja_con[".sqlHead"] = "SELECT id_ren,  	id_con,  	date_pres,  	date_efec,  	reasone,  	`comment`";
$tdatabaja_con[".sqlFrom"] = "FROM baja_con";
$tdatabaja_con[".sqlWhereExpr"] = "";
$tdatabaja_con[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabaja_con[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabaja_con[".arrGroupsPerPage"] = $arrGPP;

$tdatabaja_con[".highlightSearchResults"] = true;

$tableKeysbaja_con = array();
$tableKeysbaja_con[] = "id_ren";
$tdatabaja_con[".Keys"] = $tableKeysbaja_con;

$tdatabaja_con[".listFields"] = array();
$tdatabaja_con[".listFields"][] = "id_ren";
$tdatabaja_con[".listFields"][] = "id_con";
$tdatabaja_con[".listFields"][] = "date_pres";
$tdatabaja_con[".listFields"][] = "date_efec";
$tdatabaja_con[".listFields"][] = "reasone";
$tdatabaja_con[".listFields"][] = "comment";

$tdatabaja_con[".hideMobileList"] = array();


$tdatabaja_con[".viewFields"] = array();
$tdatabaja_con[".viewFields"][] = "id_ren";
$tdatabaja_con[".viewFields"][] = "id_con";
$tdatabaja_con[".viewFields"][] = "date_pres";
$tdatabaja_con[".viewFields"][] = "date_efec";
$tdatabaja_con[".viewFields"][] = "reasone";
$tdatabaja_con[".viewFields"][] = "comment";

$tdatabaja_con[".addFields"] = array();
$tdatabaja_con[".addFields"][] = "id_con";
$tdatabaja_con[".addFields"][] = "date_pres";
$tdatabaja_con[".addFields"][] = "date_efec";
$tdatabaja_con[".addFields"][] = "reasone";
$tdatabaja_con[".addFields"][] = "comment";

$tdatabaja_con[".masterListFields"] = array();
$tdatabaja_con[".masterListFields"][] = "id_ren";
$tdatabaja_con[".masterListFields"][] = "id_con";
$tdatabaja_con[".masterListFields"][] = "date_pres";
$tdatabaja_con[".masterListFields"][] = "date_efec";
$tdatabaja_con[".masterListFields"][] = "reasone";
$tdatabaja_con[".masterListFields"][] = "comment";

$tdatabaja_con[".inlineAddFields"] = array();
$tdatabaja_con[".inlineAddFields"][] = "id_con";
$tdatabaja_con[".inlineAddFields"][] = "date_pres";
$tdatabaja_con[".inlineAddFields"][] = "date_efec";
$tdatabaja_con[".inlineAddFields"][] = "reasone";
$tdatabaja_con[".inlineAddFields"][] = "comment";

$tdatabaja_con[".editFields"] = array();
$tdatabaja_con[".editFields"][] = "id_con";
$tdatabaja_con[".editFields"][] = "date_pres";
$tdatabaja_con[".editFields"][] = "date_efec";
$tdatabaja_con[".editFields"][] = "reasone";
$tdatabaja_con[".editFields"][] = "comment";

$tdatabaja_con[".inlineEditFields"] = array();
$tdatabaja_con[".inlineEditFields"][] = "id_con";
$tdatabaja_con[".inlineEditFields"][] = "date_pres";
$tdatabaja_con[".inlineEditFields"][] = "date_efec";
$tdatabaja_con[".inlineEditFields"][] = "reasone";
$tdatabaja_con[".inlineEditFields"][] = "comment";

$tdatabaja_con[".exportFields"] = array();
$tdatabaja_con[".exportFields"][] = "id_ren";
$tdatabaja_con[".exportFields"][] = "id_con";
$tdatabaja_con[".exportFields"][] = "date_pres";
$tdatabaja_con[".exportFields"][] = "date_efec";
$tdatabaja_con[".exportFields"][] = "reasone";
$tdatabaja_con[".exportFields"][] = "comment";

$tdatabaja_con[".importFields"] = array();
$tdatabaja_con[".importFields"][] = "id_ren";
$tdatabaja_con[".importFields"][] = "id_con";
$tdatabaja_con[".importFields"][] = "date_pres";
$tdatabaja_con[".importFields"][] = "date_efec";
$tdatabaja_con[".importFields"][] = "reasone";
$tdatabaja_con[".importFields"][] = "comment";

$tdatabaja_con[".printFields"] = array();
$tdatabaja_con[".printFields"][] = "id_ren";
$tdatabaja_con[".printFields"][] = "id_con";
$tdatabaja_con[".printFields"][] = "date_pres";
$tdatabaja_con[".printFields"][] = "date_efec";
$tdatabaja_con[".printFields"][] = "reasone";
$tdatabaja_con[".printFields"][] = "comment";

//	id_ren
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_ren";
	$fdata["GoodName"] = "id_ren";
	$fdata["ownerTable"] = "baja_con";
	$fdata["Label"] = GetFieldLabel("baja_con","id_ren"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id_ren"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_ren";
	
		
		
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

	

	
	$tdatabaja_con["id_ren"] = $fdata;
//	id_con
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_con";
	$fdata["GoodName"] = "id_con";
	$fdata["ownerTable"] = "baja_con";
	$fdata["Label"] = GetFieldLabel("baja_con","id_con"); 
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
	
		$fdata["strField"] = "id_con"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_con";
	
		
		
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

	

	
	$tdatabaja_con["id_con"] = $fdata;
//	date_pres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "date_pres";
	$fdata["GoodName"] = "date_pres";
	$fdata["ownerTable"] = "baja_con";
	$fdata["Label"] = GetFieldLabel("baja_con","date_pres"); 
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

	

	
	$tdatabaja_con["date_pres"] = $fdata;
//	date_efec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "date_efec";
	$fdata["GoodName"] = "date_efec";
	$fdata["ownerTable"] = "baja_con";
	$fdata["Label"] = GetFieldLabel("baja_con","date_efec"); 
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
	
		$fdata["strField"] = "date_efec"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_efec";
	
		
		
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

	

	
	$tdatabaja_con["date_efec"] = $fdata;
//	reasone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "reasone";
	$fdata["GoodName"] = "reasone";
	$fdata["ownerTable"] = "baja_con";
	$fdata["Label"] = GetFieldLabel("baja_con","reasone"); 
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

	

	
	$tdatabaja_con["reasone"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "baja_con";
	$fdata["Label"] = GetFieldLabel("baja_con","comment"); 
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
			$edata["EditParams"].= " maxlength=250";
	
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

	

	
	$tdatabaja_con["comment"] = $fdata;

	
$tables_data["baja_con"]=&$tdatabaja_con;
$field_labels["baja_con"] = &$fieldLabelsbaja_con;
$fieldToolTips["baja_con"] = &$fieldToolTipsbaja_con;
$page_titles["baja_con"] = &$pageTitlesbaja_con;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["baja_con"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["baja_con"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_baja_con()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_ren,  	id_con,  	date_pres,  	date_efec,  	reasone,  	`comment`";
$proto0["m_strFrom"] = "FROM baja_con";
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
	"m_strName" => "id_ren",
	"m_strTable" => "baja_con",
	"m_srcTableName" => "baja_con"
));

$proto5["m_sql"] = "id_ren";
$proto5["m_srcTableName"] = "baja_con";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_con",
	"m_strTable" => "baja_con",
	"m_srcTableName" => "baja_con"
));

$proto7["m_sql"] = "id_con";
$proto7["m_srcTableName"] = "baja_con";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "date_pres",
	"m_strTable" => "baja_con",
	"m_srcTableName" => "baja_con"
));

$proto9["m_sql"] = "date_pres";
$proto9["m_srcTableName"] = "baja_con";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "date_efec",
	"m_strTable" => "baja_con",
	"m_srcTableName" => "baja_con"
));

$proto11["m_sql"] = "date_efec";
$proto11["m_srcTableName"] = "baja_con";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "reasone",
	"m_strTable" => "baja_con",
	"m_srcTableName" => "baja_con"
));

$proto13["m_sql"] = "reasone";
$proto13["m_srcTableName"] = "baja_con";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "baja_con",
	"m_srcTableName" => "baja_con"
));

$proto15["m_sql"] = "`comment`";
$proto15["m_srcTableName"] = "baja_con";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "baja_con";
$proto18["m_srcTableName"] = "baja_con";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id_ren";
$proto18["m_columns"][] = "id_con";
$proto18["m_columns"][] = "date_pres";
$proto18["m_columns"][] = "date_efec";
$proto18["m_columns"][] = "reasone";
$proto18["m_columns"][] = "comment";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "baja_con";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "baja_con";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="baja_con";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_baja_con = createSqlQuery_baja_con();


	
						
	
$tdatabaja_con[".sqlquery"] = $queryData_baja_con;

$tableEvents["baja_con"] = new eventsBase;
$tdatabaja_con[".hasEvents"] = false;

?>