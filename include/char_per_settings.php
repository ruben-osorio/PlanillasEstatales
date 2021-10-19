<?php
require_once(getabspath("classes/cipherer.php"));




$tdatachar_per = array();	
	$tdatachar_per[".truncateText"] = true;
	$tdatachar_per[".NumberOfChars"] = 80; 
	$tdatachar_per[".ShortName"] = "char_per";
	$tdatachar_per[".OwnerID"] = "";
	$tdatachar_per[".OriginalTable"] = "char_per";

//	field labels
$fieldLabelschar_per = array();
$fieldToolTipschar_per = array();
$pageTitleschar_per = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelschar_per["Spanish"] = array();
	$fieldToolTipschar_per["Spanish"] = array();
	$pageTitleschar_per["Spanish"] = array();
	$fieldLabelschar_per["Spanish"]["id_char_per"] = "Id Char Per";
	$fieldToolTipschar_per["Spanish"]["id_char_per"] = "";
	$fieldLabelschar_per["Spanish"]["id_per"] = "Id Per";
	$fieldToolTipschar_per["Spanish"]["id_per"] = "";
	$fieldLabelschar_per["Spanish"]["dir_g"] = "Dirección";
	$fieldToolTipschar_per["Spanish"]["dir_g"] = "";
	$fieldLabelschar_per["Spanish"]["unit"] = "Unidad";
	$fieldToolTipschar_per["Spanish"]["unit"] = "";
	$fieldLabelschar_per["Spanish"]["area"] = "Area";
	$fieldToolTipschar_per["Spanish"]["area"] = "";
	$fieldLabelschar_per["Spanish"]["boss_is"] = "Funcionario";
	$fieldToolTipschar_per["Spanish"]["boss_is"] = "";
	$fieldLabelschar_per["Spanish"]["boss_ij"] = "Inmediato superior";
	$fieldToolTipschar_per["Spanish"]["boss_ij"] = "";
	$fieldLabelschar_per["Spanish"]["charge"] = "Cargo";
	$fieldToolTipschar_per["Spanish"]["charge"] = "";
	$fieldLabelschar_per["Spanish"]["date_des"] = "Fecha de designación";
	$fieldToolTipschar_per["Spanish"]["date_des"] = "";
	$fieldLabelschar_per["Spanish"]["date_end"] = "Fecha final";
	$fieldToolTipschar_per["Spanish"]["date_end"] = "";
	$fieldLabelschar_per["Spanish"]["num_memo"] = "N. Memorandum";
	$fieldToolTipschar_per["Spanish"]["num_memo"] = "";
	$fieldLabelschar_per["Spanish"]["date_des_ini"] = "Fecha de designación inicial";
	$fieldToolTipschar_per["Spanish"]["date_des_ini"] = "";
	if (count($fieldToolTipschar_per["Spanish"]))
		$tdatachar_per[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelschar_per[""] = array();
	$fieldToolTipschar_per[""] = array();
	$pageTitleschar_per[""] = array();
	$fieldLabelschar_per[""]["id_char_per"] = "Id Char Per";
	$fieldToolTipschar_per[""]["id_char_per"] = "";
	$fieldLabelschar_per[""]["id_per"] = "Id Per";
	$fieldToolTipschar_per[""]["id_per"] = "";
	$fieldLabelschar_per[""]["dir_g"] = "Dir G";
	$fieldToolTipschar_per[""]["dir_g"] = "";
	$fieldLabelschar_per[""]["unit"] = "Unit";
	$fieldToolTipschar_per[""]["unit"] = "";
	$fieldLabelschar_per[""]["area"] = "Area";
	$fieldToolTipschar_per[""]["area"] = "";
	$fieldLabelschar_per[""]["boss_is"] = "Boss Is";
	$fieldToolTipschar_per[""]["boss_is"] = "";
	$fieldLabelschar_per[""]["boss_ij"] = "Boss Ij";
	$fieldToolTipschar_per[""]["boss_ij"] = "";
	$fieldLabelschar_per[""]["charge"] = "Charge";
	$fieldToolTipschar_per[""]["charge"] = "";
	$fieldLabelschar_per[""]["date_des"] = "Date Des";
	$fieldToolTipschar_per[""]["date_des"] = "";
	$fieldLabelschar_per[""]["date_end"] = "Date End";
	$fieldToolTipschar_per[""]["date_end"] = "";
	$fieldLabelschar_per[""]["num_memo"] = "Num Memo";
	$fieldToolTipschar_per[""]["num_memo"] = "";
	$fieldLabelschar_per[""]["date_des_ini"] = "Date Des Ini";
	$fieldToolTipschar_per[""]["date_des_ini"] = "";
	if (count($fieldToolTipschar_per[""]))
		$tdatachar_per[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelschar_per["English"] = array();
	$fieldToolTipschar_per["English"] = array();
	$pageTitleschar_per["English"] = array();
	$fieldLabelschar_per["English"]["id_char_per"] = "Id Char Per";
	$fieldToolTipschar_per["English"]["id_char_per"] = "";
	$fieldLabelschar_per["English"]["id_per"] = "Id Per";
	$fieldToolTipschar_per["English"]["id_per"] = "";
	$fieldLabelschar_per["English"]["dir_g"] = "Dir G";
	$fieldToolTipschar_per["English"]["dir_g"] = "";
	$fieldLabelschar_per["English"]["unit"] = "Unit";
	$fieldToolTipschar_per["English"]["unit"] = "";
	$fieldLabelschar_per["English"]["area"] = "Area";
	$fieldToolTipschar_per["English"]["area"] = "";
	$fieldLabelschar_per["English"]["boss_is"] = "Boss Is";
	$fieldToolTipschar_per["English"]["boss_is"] = "";
	$fieldLabelschar_per["English"]["boss_ij"] = "Boss Ij";
	$fieldToolTipschar_per["English"]["boss_ij"] = "";
	$fieldLabelschar_per["English"]["charge"] = "Charge";
	$fieldToolTipschar_per["English"]["charge"] = "";
	$fieldLabelschar_per["English"]["date_des"] = "Date Des";
	$fieldToolTipschar_per["English"]["date_des"] = "";
	$fieldLabelschar_per["English"]["date_end"] = "Date End";
	$fieldToolTipschar_per["English"]["date_end"] = "";
	$fieldLabelschar_per["English"]["num_memo"] = "Num Memo";
	$fieldToolTipschar_per["English"]["num_memo"] = "";
	$fieldLabelschar_per["English"]["date_des_ini"] = "Date Des Ini";
	$fieldToolTipschar_per["English"]["date_des_ini"] = "";
	if (count($fieldToolTipschar_per["English"]))
		$tdatachar_per[".isUseToolTips"] = true;
}
	
	
	$tdatachar_per[".NCSearch"] = true;



$tdatachar_per[".shortTableName"] = "char_per";
$tdatachar_per[".nSecOptions"] = 0;
$tdatachar_per[".recsPerRowList"] = 1;
$tdatachar_per[".recsPerRowPrint"] = 1;
$tdatachar_per[".mainTableOwnerID"] = "";
$tdatachar_per[".moveNext"] = 1;
$tdatachar_per[".entityType"] = 0;

$tdatachar_per[".strOriginalTableName"] = "char_per";




$tdatachar_per[".showAddInPopup"] = false;

$tdatachar_per[".showEditInPopup"] = false;

$tdatachar_per[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatachar_per[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatachar_per[".fieldsForRegister"] = array();

$tdatachar_per[".listAjax"] = false;

	$tdatachar_per[".audit"] = false;

	$tdatachar_per[".locking"] = false;

$tdatachar_per[".edit"] = true;
$tdatachar_per[".afterEditAction"] = 1;
$tdatachar_per[".closePopupAfterEdit"] = 1;
$tdatachar_per[".afterEditActionDetTable"] = "";

$tdatachar_per[".add"] = true;
$tdatachar_per[".afterAddAction"] = 1;
$tdatachar_per[".closePopupAfterAdd"] = 1;
$tdatachar_per[".afterAddActionDetTable"] = "";

$tdatachar_per[".list"] = true;

$tdatachar_per[".inlineEdit"] = true;
$tdatachar_per[".inlineAdd"] = true;




$tdatachar_per[".delete"] = true;

$tdatachar_per[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatachar_per[".searchSaving"] = false;
//

$tdatachar_per[".showSearchPanel"] = true;
		$tdatachar_per[".flexibleSearch"] = true;		

if (isMobile())
	$tdatachar_per[".isUseAjaxSuggest"] = false;
else 
	$tdatachar_per[".isUseAjaxSuggest"] = true;

$tdatachar_per[".rowHighlite"] = true;



$tdatachar_per[".addPageEvents"] = false;

// use timepicker for search panel
$tdatachar_per[".isUseTimeForSearch"] = false;





$tdatachar_per[".allSearchFields"] = array();
$tdatachar_per[".filterFields"] = array();
$tdatachar_per[".requiredSearchFields"] = array();

$tdatachar_per[".allSearchFields"][] = "id_char_per";
	$tdatachar_per[".allSearchFields"][] = "id_per";
	$tdatachar_per[".allSearchFields"][] = "dir_g";
	$tdatachar_per[".allSearchFields"][] = "unit";
	$tdatachar_per[".allSearchFields"][] = "area";
	$tdatachar_per[".allSearchFields"][] = "boss_is";
	$tdatachar_per[".allSearchFields"][] = "boss_ij";
	$tdatachar_per[".allSearchFields"][] = "charge";
	$tdatachar_per[".allSearchFields"][] = "date_des";
	$tdatachar_per[".allSearchFields"][] = "date_end";
	$tdatachar_per[".allSearchFields"][] = "num_memo";
	$tdatachar_per[".allSearchFields"][] = "date_des_ini";
	

$tdatachar_per[".googleLikeFields"] = array();
$tdatachar_per[".googleLikeFields"][] = "id_char_per";
$tdatachar_per[".googleLikeFields"][] = "id_per";
$tdatachar_per[".googleLikeFields"][] = "dir_g";
$tdatachar_per[".googleLikeFields"][] = "unit";
$tdatachar_per[".googleLikeFields"][] = "area";
$tdatachar_per[".googleLikeFields"][] = "boss_is";
$tdatachar_per[".googleLikeFields"][] = "boss_ij";
$tdatachar_per[".googleLikeFields"][] = "charge";
$tdatachar_per[".googleLikeFields"][] = "date_des";
$tdatachar_per[".googleLikeFields"][] = "date_end";
$tdatachar_per[".googleLikeFields"][] = "num_memo";
$tdatachar_per[".googleLikeFields"][] = "date_des_ini";


$tdatachar_per[".advSearchFields"] = array();
$tdatachar_per[".advSearchFields"][] = "id_char_per";
$tdatachar_per[".advSearchFields"][] = "id_per";
$tdatachar_per[".advSearchFields"][] = "dir_g";
$tdatachar_per[".advSearchFields"][] = "unit";
$tdatachar_per[".advSearchFields"][] = "area";
$tdatachar_per[".advSearchFields"][] = "boss_is";
$tdatachar_per[".advSearchFields"][] = "boss_ij";
$tdatachar_per[".advSearchFields"][] = "charge";
$tdatachar_per[".advSearchFields"][] = "date_des";
$tdatachar_per[".advSearchFields"][] = "date_end";
$tdatachar_per[".advSearchFields"][] = "num_memo";
$tdatachar_per[".advSearchFields"][] = "date_des_ini";

$tdatachar_per[".tableType"] = "list";

$tdatachar_per[".printerPageOrientation"] = 0;
$tdatachar_per[".nPrinterPageScale"] = 100;

$tdatachar_per[".nPrinterSplitRecords"] = 40;

$tdatachar_per[".nPrinterPDFSplitRecords"] = 40;



$tdatachar_per[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatachar_per[".pageSize"] = 20;

$tdatachar_per[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatachar_per[".strOrderBy"] = $tstrOrderBy;

$tdatachar_per[".orderindexes"] = array();

$tdatachar_per[".sqlHead"] = "SELECT id_char_per,  	id_per,  	dir_g,  	unit,  	area,  	boss_is,  	boss_ij,  	charge,  	date_des,  	date_end,  	num_memo,  	date_des_ini";
$tdatachar_per[".sqlFrom"] = "FROM char_per";
$tdatachar_per[".sqlWhereExpr"] = "";
$tdatachar_per[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachar_per[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachar_per[".arrGroupsPerPage"] = $arrGPP;

$tdatachar_per[".highlightSearchResults"] = true;

$tableKeyschar_per = array();
$tableKeyschar_per[] = "id_char_per";
$tdatachar_per[".Keys"] = $tableKeyschar_per;

$tdatachar_per[".listFields"] = array();
$tdatachar_per[".listFields"][] = "id_char_per";
$tdatachar_per[".listFields"][] = "id_per";
$tdatachar_per[".listFields"][] = "dir_g";
$tdatachar_per[".listFields"][] = "unit";
$tdatachar_per[".listFields"][] = "area";
$tdatachar_per[".listFields"][] = "boss_is";
$tdatachar_per[".listFields"][] = "boss_ij";
$tdatachar_per[".listFields"][] = "charge";
$tdatachar_per[".listFields"][] = "date_des";
$tdatachar_per[".listFields"][] = "date_end";
$tdatachar_per[".listFields"][] = "num_memo";
$tdatachar_per[".listFields"][] = "date_des_ini";

$tdatachar_per[".hideMobileList"] = array();


$tdatachar_per[".viewFields"] = array();

$tdatachar_per[".addFields"] = array();
$tdatachar_per[".addFields"][] = "id_per";
$tdatachar_per[".addFields"][] = "dir_g";
$tdatachar_per[".addFields"][] = "unit";
$tdatachar_per[".addFields"][] = "area";
$tdatachar_per[".addFields"][] = "boss_is";
$tdatachar_per[".addFields"][] = "boss_ij";
$tdatachar_per[".addFields"][] = "charge";
$tdatachar_per[".addFields"][] = "date_des";
$tdatachar_per[".addFields"][] = "date_end";
$tdatachar_per[".addFields"][] = "num_memo";
$tdatachar_per[".addFields"][] = "date_des_ini";

$tdatachar_per[".masterListFields"] = array();
$tdatachar_per[".masterListFields"][] = "id_char_per";
$tdatachar_per[".masterListFields"][] = "id_per";
$tdatachar_per[".masterListFields"][] = "dir_g";
$tdatachar_per[".masterListFields"][] = "unit";
$tdatachar_per[".masterListFields"][] = "area";
$tdatachar_per[".masterListFields"][] = "boss_is";
$tdatachar_per[".masterListFields"][] = "boss_ij";
$tdatachar_per[".masterListFields"][] = "charge";
$tdatachar_per[".masterListFields"][] = "date_des";
$tdatachar_per[".masterListFields"][] = "date_end";
$tdatachar_per[".masterListFields"][] = "num_memo";
$tdatachar_per[".masterListFields"][] = "date_des_ini";

$tdatachar_per[".inlineAddFields"] = array();
$tdatachar_per[".inlineAddFields"][] = "id_per";
$tdatachar_per[".inlineAddFields"][] = "dir_g";
$tdatachar_per[".inlineAddFields"][] = "unit";
$tdatachar_per[".inlineAddFields"][] = "area";
$tdatachar_per[".inlineAddFields"][] = "boss_is";
$tdatachar_per[".inlineAddFields"][] = "boss_ij";
$tdatachar_per[".inlineAddFields"][] = "charge";
$tdatachar_per[".inlineAddFields"][] = "date_des";
$tdatachar_per[".inlineAddFields"][] = "date_end";
$tdatachar_per[".inlineAddFields"][] = "num_memo";
$tdatachar_per[".inlineAddFields"][] = "date_des_ini";

$tdatachar_per[".editFields"] = array();
$tdatachar_per[".editFields"][] = "id_per";
$tdatachar_per[".editFields"][] = "dir_g";
$tdatachar_per[".editFields"][] = "unit";
$tdatachar_per[".editFields"][] = "area";
$tdatachar_per[".editFields"][] = "boss_is";
$tdatachar_per[".editFields"][] = "boss_ij";
$tdatachar_per[".editFields"][] = "charge";
$tdatachar_per[".editFields"][] = "date_des";
$tdatachar_per[".editFields"][] = "date_end";
$tdatachar_per[".editFields"][] = "num_memo";
$tdatachar_per[".editFields"][] = "date_des_ini";

$tdatachar_per[".inlineEditFields"] = array();
$tdatachar_per[".inlineEditFields"][] = "id_per";
$tdatachar_per[".inlineEditFields"][] = "dir_g";
$tdatachar_per[".inlineEditFields"][] = "unit";
$tdatachar_per[".inlineEditFields"][] = "area";
$tdatachar_per[".inlineEditFields"][] = "boss_is";
$tdatachar_per[".inlineEditFields"][] = "boss_ij";
$tdatachar_per[".inlineEditFields"][] = "charge";
$tdatachar_per[".inlineEditFields"][] = "date_des";
$tdatachar_per[".inlineEditFields"][] = "date_end";
$tdatachar_per[".inlineEditFields"][] = "num_memo";
$tdatachar_per[".inlineEditFields"][] = "date_des_ini";

$tdatachar_per[".exportFields"] = array();

$tdatachar_per[".importFields"] = array();

$tdatachar_per[".printFields"] = array();

//	id_char_per
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_char_per";
	$fdata["GoodName"] = "id_char_per";
	$fdata["ownerTable"] = "char_per";
	$fdata["Label"] = GetFieldLabel("char_per","id_char_per"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id_char_per"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_char_per";
	
		
		
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

	

	
	$tdatachar_per["id_char_per"] = $fdata;
//	id_per
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_per";
	$fdata["GoodName"] = "id_per";
	$fdata["ownerTable"] = "char_per";
	$fdata["Label"] = GetFieldLabel("char_per","id_per"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
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

	

	
	$tdatachar_per["id_per"] = $fdata;
//	dir_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dir_g";
	$fdata["GoodName"] = "dir_g";
	$fdata["ownerTable"] = "char_per";
	$fdata["Label"] = GetFieldLabel("char_per","dir_g"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "dir_g"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dir_g";
	
		
		
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
			$edata["EditParams"].= " maxlength=500";
	
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

	

	
	$tdatachar_per["dir_g"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "char_per";
	$fdata["Label"] = GetFieldLabel("char_per","unit"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "unit"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unit";
	
		
		
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
			$edata["EditParams"].= " maxlength=500";
	
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

	

	
	$tdatachar_per["unit"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "char_per";
	$fdata["Label"] = GetFieldLabel("char_per","area"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "area"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "area";
	
		
		
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
			$edata["EditParams"].= " maxlength=500";
	
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

	

	
	$tdatachar_per["area"] = $fdata;
//	boss_is
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "boss_is";
	$fdata["GoodName"] = "boss_is";
	$fdata["ownerTable"] = "char_per";
	$fdata["Label"] = GetFieldLabel("char_per","boss_is"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "boss_is"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "boss_is";
	
		
		
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
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdatachar_per["boss_is"] = $fdata;
//	boss_ij
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "boss_ij";
	$fdata["GoodName"] = "boss_ij";
	$fdata["ownerTable"] = "char_per";
	$fdata["Label"] = GetFieldLabel("char_per","boss_ij"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "boss_ij"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "boss_ij";
	
		
		
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
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdatachar_per["boss_ij"] = $fdata;
//	charge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "charge";
	$fdata["GoodName"] = "charge";
	$fdata["ownerTable"] = "char_per";
	$fdata["Label"] = GetFieldLabel("char_per","charge"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "charge"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "charge";
	
		
		
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
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdatachar_per["charge"] = $fdata;
//	date_des
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "date_des";
	$fdata["GoodName"] = "date_des";
	$fdata["ownerTable"] = "char_per";
	$fdata["Label"] = GetFieldLabel("char_per","date_des"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "date_des"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_des";
	
		
		
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

	

	
	$tdatachar_per["date_des"] = $fdata;
//	date_end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "date_end";
	$fdata["GoodName"] = "date_end";
	$fdata["ownerTable"] = "char_per";
	$fdata["Label"] = GetFieldLabel("char_per","date_end"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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

	

	
	$tdatachar_per["date_end"] = $fdata;
//	num_memo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "num_memo";
	$fdata["GoodName"] = "num_memo";
	$fdata["ownerTable"] = "char_per";
	$fdata["Label"] = GetFieldLabel("char_per","num_memo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "num_memo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "num_memo";
	
		
		
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

	

	
	$tdatachar_per["num_memo"] = $fdata;
//	date_des_ini
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "date_des_ini";
	$fdata["GoodName"] = "date_des_ini";
	$fdata["ownerTable"] = "char_per";
	$fdata["Label"] = GetFieldLabel("char_per","date_des_ini"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "date_des_ini"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_des_ini";
	
		
		
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

	

	
	$tdatachar_per["date_des_ini"] = $fdata;

	
$tables_data["char_per"]=&$tdatachar_per;
$field_labels["char_per"] = &$fieldLabelschar_per;
$fieldToolTips["char_per"] = &$fieldToolTipschar_per;
$page_titles["char_per"] = &$pageTitleschar_per;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["char_per"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["char_per"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_char_per()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_char_per,  	id_per,  	dir_g,  	unit,  	area,  	boss_is,  	boss_ij,  	charge,  	date_des,  	date_end,  	num_memo,  	date_des_ini";
$proto0["m_strFrom"] = "FROM char_per";
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
	"m_strName" => "id_char_per",
	"m_strTable" => "char_per",
	"m_srcTableName" => "char_per"
));

$proto5["m_sql"] = "id_char_per";
$proto5["m_srcTableName"] = "char_per";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_per",
	"m_strTable" => "char_per",
	"m_srcTableName" => "char_per"
));

$proto7["m_sql"] = "id_per";
$proto7["m_srcTableName"] = "char_per";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "dir_g",
	"m_strTable" => "char_per",
	"m_srcTableName" => "char_per"
));

$proto9["m_sql"] = "dir_g";
$proto9["m_srcTableName"] = "char_per";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "char_per",
	"m_srcTableName" => "char_per"
));

$proto11["m_sql"] = "unit";
$proto11["m_srcTableName"] = "char_per";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "char_per",
	"m_srcTableName" => "char_per"
));

$proto13["m_sql"] = "area";
$proto13["m_srcTableName"] = "char_per";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "boss_is",
	"m_strTable" => "char_per",
	"m_srcTableName" => "char_per"
));

$proto15["m_sql"] = "boss_is";
$proto15["m_srcTableName"] = "char_per";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "boss_ij",
	"m_strTable" => "char_per",
	"m_srcTableName" => "char_per"
));

$proto17["m_sql"] = "boss_ij";
$proto17["m_srcTableName"] = "char_per";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "charge",
	"m_strTable" => "char_per",
	"m_srcTableName" => "char_per"
));

$proto19["m_sql"] = "charge";
$proto19["m_srcTableName"] = "char_per";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "date_des",
	"m_strTable" => "char_per",
	"m_srcTableName" => "char_per"
));

$proto21["m_sql"] = "date_des";
$proto21["m_srcTableName"] = "char_per";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "date_end",
	"m_strTable" => "char_per",
	"m_srcTableName" => "char_per"
));

$proto23["m_sql"] = "date_end";
$proto23["m_srcTableName"] = "char_per";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "num_memo",
	"m_strTable" => "char_per",
	"m_srcTableName" => "char_per"
));

$proto25["m_sql"] = "num_memo";
$proto25["m_srcTableName"] = "char_per";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "date_des_ini",
	"m_strTable" => "char_per",
	"m_srcTableName" => "char_per"
));

$proto27["m_sql"] = "date_des_ini";
$proto27["m_srcTableName"] = "char_per";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "char_per";
$proto30["m_srcTableName"] = "char_per";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id_char_per";
$proto30["m_columns"][] = "id_per";
$proto30["m_columns"][] = "dir_g";
$proto30["m_columns"][] = "unit";
$proto30["m_columns"][] = "area";
$proto30["m_columns"][] = "boss_is";
$proto30["m_columns"][] = "boss_ij";
$proto30["m_columns"][] = "charge";
$proto30["m_columns"][] = "date_des";
$proto30["m_columns"][] = "date_end";
$proto30["m_columns"][] = "num_memo";
$proto30["m_columns"][] = "date_des_ini";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "char_per";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "char_per";
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
$proto0["m_srcTableName"]="char_per";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_char_per = createSqlQuery_char_per();


	
												
	
$tdatachar_per[".sqlquery"] = $queryData_char_per;

$tableEvents["char_per"] = new eventsBase;
$tdatachar_per[".hasEvents"] = false;

?>