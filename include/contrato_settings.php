<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacontrato = array();	
	$tdatacontrato[".truncateText"] = true;
	$tdatacontrato[".NumberOfChars"] = 80; 
	$tdatacontrato[".ShortName"] = "contrato";
	$tdatacontrato[".OwnerID"] = "";
	$tdatacontrato[".OriginalTable"] = "contrato";

//	field labels
$fieldLabelscontrato = array();
$fieldToolTipscontrato = array();
$pageTitlescontrato = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato["Spanish"] = array();
	$fieldToolTipscontrato["Spanish"] = array();
	$pageTitlescontrato["Spanish"] = array();
	$fieldLabelscontrato["Spanish"]["id_con"] = "Id Con";
	$fieldToolTipscontrato["Spanish"]["id_con"] = "";
	$fieldLabelscontrato["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipscontrato["Spanish"]["id_func"] = "";
	$fieldLabelscontrato["Spanish"]["date_ent"] = "Date Ent";
	$fieldToolTipscontrato["Spanish"]["date_ent"] = "";
	$fieldLabelscontrato["Spanish"]["date_end"] = "Date End";
	$fieldToolTipscontrato["Spanish"]["date_end"] = "";
	$fieldLabelscontrato["Spanish"]["status"] = "Status";
	$fieldToolTipscontrato["Spanish"]["status"] = "";
	$fieldLabelscontrato["Spanish"]["name_con"] = "Name Con";
	$fieldToolTipscontrato["Spanish"]["name_con"] = "";
	$fieldLabelscontrato["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipscontrato["Spanish"]["TIPO"] = "";
	if (count($fieldToolTipscontrato["Spanish"]))
		$tdatacontrato[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscontrato[""] = array();
	$fieldToolTipscontrato[""] = array();
	$pageTitlescontrato[""] = array();
	$fieldLabelscontrato[""]["id_con"] = "Id Con";
	$fieldToolTipscontrato[""]["id_con"] = "";
	$fieldLabelscontrato[""]["id_func"] = "Id Func";
	$fieldToolTipscontrato[""]["id_func"] = "";
	$fieldLabelscontrato[""]["date_ent"] = "Date Ent";
	$fieldToolTipscontrato[""]["date_ent"] = "";
	$fieldLabelscontrato[""]["date_end"] = "Date End";
	$fieldToolTipscontrato[""]["date_end"] = "";
	$fieldLabelscontrato[""]["status"] = "Status";
	$fieldToolTipscontrato[""]["status"] = "";
	$fieldLabelscontrato[""]["name_con"] = "Name Con";
	$fieldToolTipscontrato[""]["name_con"] = "";
	$fieldLabelscontrato[""]["TIPO"] = "TIPO";
	$fieldToolTipscontrato[""]["TIPO"] = "";
	if (count($fieldToolTipscontrato[""]))
		$tdatacontrato[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscontrato["English"] = array();
	$fieldToolTipscontrato["English"] = array();
	$pageTitlescontrato["English"] = array();
	$fieldLabelscontrato["English"]["id_con"] = "Id Con";
	$fieldToolTipscontrato["English"]["id_con"] = "";
	$fieldLabelscontrato["English"]["id_func"] = "Id Func";
	$fieldToolTipscontrato["English"]["id_func"] = "";
	$fieldLabelscontrato["English"]["date_ent"] = "Date Ent";
	$fieldToolTipscontrato["English"]["date_ent"] = "";
	$fieldLabelscontrato["English"]["date_end"] = "Date End";
	$fieldToolTipscontrato["English"]["date_end"] = "";
	$fieldLabelscontrato["English"]["status"] = "Status";
	$fieldToolTipscontrato["English"]["status"] = "";
	$fieldLabelscontrato["English"]["name_con"] = "Name Con";
	$fieldToolTipscontrato["English"]["name_con"] = "";
	$fieldLabelscontrato["English"]["TIPO"] = "TIPO";
	$fieldToolTipscontrato["English"]["TIPO"] = "";
	if (count($fieldToolTipscontrato["English"]))
		$tdatacontrato[".isUseToolTips"] = true;
}
	
	
	$tdatacontrato[".NCSearch"] = true;



$tdatacontrato[".shortTableName"] = "contrato";
$tdatacontrato[".nSecOptions"] = 0;
$tdatacontrato[".recsPerRowList"] = 1;
$tdatacontrato[".recsPerRowPrint"] = 1;
$tdatacontrato[".mainTableOwnerID"] = "";
$tdatacontrato[".moveNext"] = 1;
$tdatacontrato[".entityType"] = 0;

$tdatacontrato[".strOriginalTableName"] = "contrato";




$tdatacontrato[".showAddInPopup"] = false;

$tdatacontrato[".showEditInPopup"] = false;

$tdatacontrato[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontrato[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrato[".fieldsForRegister"] = array();

$tdatacontrato[".listAjax"] = false;

	$tdatacontrato[".audit"] = false;

	$tdatacontrato[".locking"] = false;

$tdatacontrato[".edit"] = true;
$tdatacontrato[".afterEditAction"] = 1;
$tdatacontrato[".closePopupAfterEdit"] = 1;
$tdatacontrato[".afterEditActionDetTable"] = "";

$tdatacontrato[".add"] = true;
$tdatacontrato[".afterAddAction"] = 1;
$tdatacontrato[".closePopupAfterAdd"] = 1;
$tdatacontrato[".afterAddActionDetTable"] = "";

$tdatacontrato[".list"] = true;

$tdatacontrato[".inlineEdit"] = true;
$tdatacontrato[".inlineAdd"] = true;
$tdatacontrato[".view"] = true;

$tdatacontrato[".import"] = true;

$tdatacontrato[".exportTo"] = true;

$tdatacontrato[".printFriendly"] = true;

$tdatacontrato[".delete"] = true;

$tdatacontrato[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacontrato[".searchSaving"] = false;
//

$tdatacontrato[".showSearchPanel"] = true;
		$tdatacontrato[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacontrato[".isUseAjaxSuggest"] = false;
else 
	$tdatacontrato[".isUseAjaxSuggest"] = true;

$tdatacontrato[".rowHighlite"] = true;



$tdatacontrato[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato[".isUseTimeForSearch"] = false;





$tdatacontrato[".allSearchFields"] = array();
$tdatacontrato[".filterFields"] = array();
$tdatacontrato[".requiredSearchFields"] = array();

$tdatacontrato[".allSearchFields"][] = "id_con";
	$tdatacontrato[".allSearchFields"][] = "id_func";
	$tdatacontrato[".allSearchFields"][] = "date_ent";
	$tdatacontrato[".allSearchFields"][] = "date_end";
	$tdatacontrato[".allSearchFields"][] = "status";
	$tdatacontrato[".allSearchFields"][] = "name_con";
	$tdatacontrato[".allSearchFields"][] = "TIPO";
	

$tdatacontrato[".googleLikeFields"] = array();
$tdatacontrato[".googleLikeFields"][] = "id_con";
$tdatacontrato[".googleLikeFields"][] = "id_func";
$tdatacontrato[".googleLikeFields"][] = "date_ent";
$tdatacontrato[".googleLikeFields"][] = "date_end";
$tdatacontrato[".googleLikeFields"][] = "status";
$tdatacontrato[".googleLikeFields"][] = "name_con";
$tdatacontrato[".googleLikeFields"][] = "TIPO";


$tdatacontrato[".advSearchFields"] = array();
$tdatacontrato[".advSearchFields"][] = "id_con";
$tdatacontrato[".advSearchFields"][] = "id_func";
$tdatacontrato[".advSearchFields"][] = "date_ent";
$tdatacontrato[".advSearchFields"][] = "date_end";
$tdatacontrato[".advSearchFields"][] = "status";
$tdatacontrato[".advSearchFields"][] = "name_con";
$tdatacontrato[".advSearchFields"][] = "TIPO";

$tdatacontrato[".tableType"] = "list";

$tdatacontrato[".printerPageOrientation"] = 0;
$tdatacontrato[".nPrinterPageScale"] = 100;

$tdatacontrato[".nPrinterSplitRecords"] = 40;

$tdatacontrato[".nPrinterPDFSplitRecords"] = 40;



$tdatacontrato[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacontrato[".pageSize"] = 20;

$tdatacontrato[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrato[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato[".orderindexes"] = array();

$tdatacontrato[".sqlHead"] = "SELECT id_con,  	id_func,  	date_ent,  	date_end,  	status,  	name_con,  	TIPO";
$tdatacontrato[".sqlFrom"] = "FROM contrato";
$tdatacontrato[".sqlWhereExpr"] = "";
$tdatacontrato[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato[".highlightSearchResults"] = true;

$tableKeyscontrato = array();
$tableKeyscontrato[] = "id_con";
$tdatacontrato[".Keys"] = $tableKeyscontrato;

$tdatacontrato[".listFields"] = array();
$tdatacontrato[".listFields"][] = "id_con";
$tdatacontrato[".listFields"][] = "id_func";
$tdatacontrato[".listFields"][] = "date_ent";
$tdatacontrato[".listFields"][] = "date_end";
$tdatacontrato[".listFields"][] = "status";
$tdatacontrato[".listFields"][] = "name_con";
$tdatacontrato[".listFields"][] = "TIPO";

$tdatacontrato[".hideMobileList"] = array();


$tdatacontrato[".viewFields"] = array();
$tdatacontrato[".viewFields"][] = "id_con";
$tdatacontrato[".viewFields"][] = "id_func";
$tdatacontrato[".viewFields"][] = "date_ent";
$tdatacontrato[".viewFields"][] = "date_end";
$tdatacontrato[".viewFields"][] = "status";
$tdatacontrato[".viewFields"][] = "name_con";
$tdatacontrato[".viewFields"][] = "TIPO";

$tdatacontrato[".addFields"] = array();
$tdatacontrato[".addFields"][] = "id_func";
$tdatacontrato[".addFields"][] = "date_ent";
$tdatacontrato[".addFields"][] = "date_end";
$tdatacontrato[".addFields"][] = "status";
$tdatacontrato[".addFields"][] = "name_con";
$tdatacontrato[".addFields"][] = "TIPO";

$tdatacontrato[".masterListFields"] = array();
$tdatacontrato[".masterListFields"][] = "id_con";
$tdatacontrato[".masterListFields"][] = "id_func";
$tdatacontrato[".masterListFields"][] = "date_ent";
$tdatacontrato[".masterListFields"][] = "date_end";
$tdatacontrato[".masterListFields"][] = "status";
$tdatacontrato[".masterListFields"][] = "name_con";
$tdatacontrato[".masterListFields"][] = "TIPO";

$tdatacontrato[".inlineAddFields"] = array();
$tdatacontrato[".inlineAddFields"][] = "id_func";
$tdatacontrato[".inlineAddFields"][] = "date_ent";
$tdatacontrato[".inlineAddFields"][] = "date_end";
$tdatacontrato[".inlineAddFields"][] = "status";
$tdatacontrato[".inlineAddFields"][] = "name_con";
$tdatacontrato[".inlineAddFields"][] = "TIPO";

$tdatacontrato[".editFields"] = array();
$tdatacontrato[".editFields"][] = "id_func";
$tdatacontrato[".editFields"][] = "date_ent";
$tdatacontrato[".editFields"][] = "date_end";
$tdatacontrato[".editFields"][] = "status";
$tdatacontrato[".editFields"][] = "name_con";
$tdatacontrato[".editFields"][] = "TIPO";

$tdatacontrato[".inlineEditFields"] = array();
$tdatacontrato[".inlineEditFields"][] = "id_func";
$tdatacontrato[".inlineEditFields"][] = "date_ent";
$tdatacontrato[".inlineEditFields"][] = "date_end";
$tdatacontrato[".inlineEditFields"][] = "status";
$tdatacontrato[".inlineEditFields"][] = "name_con";
$tdatacontrato[".inlineEditFields"][] = "TIPO";

$tdatacontrato[".exportFields"] = array();
$tdatacontrato[".exportFields"][] = "id_con";
$tdatacontrato[".exportFields"][] = "id_func";
$tdatacontrato[".exportFields"][] = "date_ent";
$tdatacontrato[".exportFields"][] = "date_end";
$tdatacontrato[".exportFields"][] = "status";
$tdatacontrato[".exportFields"][] = "name_con";
$tdatacontrato[".exportFields"][] = "TIPO";

$tdatacontrato[".importFields"] = array();
$tdatacontrato[".importFields"][] = "id_con";
$tdatacontrato[".importFields"][] = "id_func";
$tdatacontrato[".importFields"][] = "date_ent";
$tdatacontrato[".importFields"][] = "date_end";
$tdatacontrato[".importFields"][] = "status";
$tdatacontrato[".importFields"][] = "name_con";
$tdatacontrato[".importFields"][] = "TIPO";

$tdatacontrato[".printFields"] = array();
$tdatacontrato[".printFields"][] = "id_con";
$tdatacontrato[".printFields"][] = "id_func";
$tdatacontrato[".printFields"][] = "date_ent";
$tdatacontrato[".printFields"][] = "date_end";
$tdatacontrato[".printFields"][] = "status";
$tdatacontrato[".printFields"][] = "name_con";
$tdatacontrato[".printFields"][] = "TIPO";

//	id_con
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_con";
	$fdata["GoodName"] = "id_con";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","id_con"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatacontrato["id_con"] = $fdata;
//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","id_func"); 
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

	

	
	$tdatacontrato["id_func"] = $fdata;
//	date_ent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "date_ent";
	$fdata["GoodName"] = "date_ent";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","date_ent"); 
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

	

	
	$tdatacontrato["date_ent"] = $fdata;
//	date_end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "date_end";
	$fdata["GoodName"] = "date_end";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","date_end"); 
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
	
		$fdata["strField"] = "date_end"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_end";
	
		
		
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

	

	
	$tdatacontrato["date_end"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","status"); 
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

	

	
	$tdatacontrato["status"] = $fdata;
//	name_con
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "name_con";
	$fdata["GoodName"] = "name_con";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","name_con"); 
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
	
		$fdata["strField"] = "name_con"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name_con";
	
		
		
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

	

	
	$tdatacontrato["name_con"] = $fdata;
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","TIPO"); 
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

	

	
	$tdatacontrato["TIPO"] = $fdata;

	
$tables_data["contrato"]=&$tdatacontrato;
$field_labels["contrato"] = &$fieldLabelscontrato;
$fieldToolTips["contrato"] = &$fieldToolTipscontrato;
$page_titles["contrato"] = &$pageTitlescontrato;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contrato"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["contrato"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_contrato()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_con,  	id_func,  	date_ent,  	date_end,  	status,  	name_con,  	TIPO";
$proto0["m_strFrom"] = "FROM contrato";
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
	"m_strName" => "id_con",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto5["m_sql"] = "id_con";
$proto5["m_srcTableName"] = "contrato";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto7["m_sql"] = "id_func";
$proto7["m_srcTableName"] = "contrato";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "date_ent",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto9["m_sql"] = "date_ent";
$proto9["m_srcTableName"] = "contrato";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "date_end",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto11["m_sql"] = "date_end";
$proto11["m_srcTableName"] = "contrato";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto13["m_sql"] = "status";
$proto13["m_srcTableName"] = "contrato";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "name_con",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto15["m_sql"] = "name_con";
$proto15["m_srcTableName"] = "contrato";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto17["m_sql"] = "TIPO";
$proto17["m_srcTableName"] = "contrato";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "contrato";
$proto20["m_srcTableName"] = "contrato";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id_con";
$proto20["m_columns"][] = "id_func";
$proto20["m_columns"][] = "date_ent";
$proto20["m_columns"][] = "date_end";
$proto20["m_columns"][] = "status";
$proto20["m_columns"][] = "name_con";
$proto20["m_columns"][] = "TIPO";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "contrato";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "contrato";
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
$proto0["m_srcTableName"]="contrato";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato = createSqlQuery_contrato();


	
							
	
$tdatacontrato[".sqlquery"] = $queryData_contrato;

$tableEvents["contrato"] = new eventsBase;
$tdatacontrato[".hasEvents"] = false;

?>