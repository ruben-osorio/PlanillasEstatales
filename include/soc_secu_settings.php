<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasoc_secu = array();	
	$tdatasoc_secu[".truncateText"] = true;
	$tdatasoc_secu[".NumberOfChars"] = 80; 
	$tdatasoc_secu[".ShortName"] = "soc_secu";
	$tdatasoc_secu[".OwnerID"] = "";
	$tdatasoc_secu[".OriginalTable"] = "soc_secu";

//	field labels
$fieldLabelssoc_secu = array();
$fieldToolTipssoc_secu = array();
$pageTitlessoc_secu = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssoc_secu["Spanish"] = array();
	$fieldToolTipssoc_secu["Spanish"] = array();
	$pageTitlessoc_secu["Spanish"] = array();
	$fieldLabelssoc_secu["Spanish"]["id_sec"] = "Id Sec";
	$fieldToolTipssoc_secu["Spanish"]["id_sec"] = "";
	$fieldLabelssoc_secu["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipssoc_secu["Spanish"]["id_func"] = "";
	$fieldLabelssoc_secu["Spanish"]["id_per"] = "Id Per";
	$fieldToolTipssoc_secu["Spanish"]["id_per"] = "";
	$fieldLabelssoc_secu["Spanish"]["name_sec"] = "Nonbre de la Aseguradora";
	$fieldToolTipssoc_secu["Spanish"]["name_sec"] = "";
	$fieldLabelssoc_secu["Spanish"]["num_reg"] = "Num Registro";
	$fieldToolTipssoc_secu["Spanish"]["num_reg"] = "";
	$fieldLabelssoc_secu["Spanish"]["type_sec"] = "Tipo del seguro";
	$fieldToolTipssoc_secu["Spanish"]["type_sec"] = "";
	$fieldLabelssoc_secu["Spanish"]["date_afil"] = "Fecha de afiliación ";
	$fieldToolTipssoc_secu["Spanish"]["date_afil"] = "";
	$fieldLabelssoc_secu["Spanish"]["date_des"] = "Fecha de desafiliación";
	$fieldToolTipssoc_secu["Spanish"]["date_des"] = "";
	$fieldLabelssoc_secu["Spanish"]["cause"] = "Motivo";
	$fieldToolTipssoc_secu["Spanish"]["cause"] = "";
	if (count($fieldToolTipssoc_secu["Spanish"]))
		$tdatasoc_secu[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssoc_secu[""] = array();
	$fieldToolTipssoc_secu[""] = array();
	$pageTitlessoc_secu[""] = array();
	$fieldLabelssoc_secu[""]["id_sec"] = "Id Sec";
	$fieldToolTipssoc_secu[""]["id_sec"] = "";
	$fieldLabelssoc_secu[""]["id_func"] = "Id Func";
	$fieldToolTipssoc_secu[""]["id_func"] = "";
	$fieldLabelssoc_secu[""]["id_per"] = "Id Per";
	$fieldToolTipssoc_secu[""]["id_per"] = "";
	$fieldLabelssoc_secu[""]["name_sec"] = "Name Sec";
	$fieldToolTipssoc_secu[""]["name_sec"] = "";
	$fieldLabelssoc_secu[""]["num_reg"] = "Num Reg";
	$fieldToolTipssoc_secu[""]["num_reg"] = "";
	$fieldLabelssoc_secu[""]["type_sec"] = "Type Sec";
	$fieldToolTipssoc_secu[""]["type_sec"] = "";
	$fieldLabelssoc_secu[""]["date_afil"] = "Date Afil";
	$fieldToolTipssoc_secu[""]["date_afil"] = "";
	$fieldLabelssoc_secu[""]["date_des"] = "Date Des";
	$fieldToolTipssoc_secu[""]["date_des"] = "";
	$fieldLabelssoc_secu[""]["cause"] = "Cause";
	$fieldToolTipssoc_secu[""]["cause"] = "";
	if (count($fieldToolTipssoc_secu[""]))
		$tdatasoc_secu[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssoc_secu["English"] = array();
	$fieldToolTipssoc_secu["English"] = array();
	$pageTitlessoc_secu["English"] = array();
	$fieldLabelssoc_secu["English"]["id_sec"] = "Id Sec";
	$fieldToolTipssoc_secu["English"]["id_sec"] = "";
	$fieldLabelssoc_secu["English"]["id_func"] = "Id Func";
	$fieldToolTipssoc_secu["English"]["id_func"] = "";
	$fieldLabelssoc_secu["English"]["id_per"] = "Id Per";
	$fieldToolTipssoc_secu["English"]["id_per"] = "";
	$fieldLabelssoc_secu["English"]["name_sec"] = "Name Sec";
	$fieldToolTipssoc_secu["English"]["name_sec"] = "";
	$fieldLabelssoc_secu["English"]["num_reg"] = "Num Reg";
	$fieldToolTipssoc_secu["English"]["num_reg"] = "";
	$fieldLabelssoc_secu["English"]["type_sec"] = "Type Sec";
	$fieldToolTipssoc_secu["English"]["type_sec"] = "";
	$fieldLabelssoc_secu["English"]["date_afil"] = "Date Afil";
	$fieldToolTipssoc_secu["English"]["date_afil"] = "";
	$fieldLabelssoc_secu["English"]["date_des"] = "Date Des";
	$fieldToolTipssoc_secu["English"]["date_des"] = "";
	$fieldLabelssoc_secu["English"]["cause"] = "Cause";
	$fieldToolTipssoc_secu["English"]["cause"] = "";
	if (count($fieldToolTipssoc_secu["English"]))
		$tdatasoc_secu[".isUseToolTips"] = true;
}
	
	
	$tdatasoc_secu[".NCSearch"] = true;



$tdatasoc_secu[".shortTableName"] = "soc_secu";
$tdatasoc_secu[".nSecOptions"] = 0;
$tdatasoc_secu[".recsPerRowList"] = 1;
$tdatasoc_secu[".recsPerRowPrint"] = 1;
$tdatasoc_secu[".mainTableOwnerID"] = "";
$tdatasoc_secu[".moveNext"] = 1;
$tdatasoc_secu[".entityType"] = 0;

$tdatasoc_secu[".strOriginalTableName"] = "soc_secu";




$tdatasoc_secu[".showAddInPopup"] = false;

$tdatasoc_secu[".showEditInPopup"] = false;

$tdatasoc_secu[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasoc_secu[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasoc_secu[".fieldsForRegister"] = array();

$tdatasoc_secu[".listAjax"] = false;

	$tdatasoc_secu[".audit"] = false;

	$tdatasoc_secu[".locking"] = false;

$tdatasoc_secu[".edit"] = true;
$tdatasoc_secu[".afterEditAction"] = 1;
$tdatasoc_secu[".closePopupAfterEdit"] = 1;
$tdatasoc_secu[".afterEditActionDetTable"] = "";

$tdatasoc_secu[".add"] = true;
$tdatasoc_secu[".afterAddAction"] = 1;
$tdatasoc_secu[".closePopupAfterAdd"] = 1;
$tdatasoc_secu[".afterAddActionDetTable"] = "";

$tdatasoc_secu[".list"] = true;

$tdatasoc_secu[".inlineEdit"] = true;
$tdatasoc_secu[".inlineAdd"] = true;




$tdatasoc_secu[".delete"] = true;

$tdatasoc_secu[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasoc_secu[".searchSaving"] = false;
//

$tdatasoc_secu[".showSearchPanel"] = true;
		$tdatasoc_secu[".flexibleSearch"] = true;		

if (isMobile())
	$tdatasoc_secu[".isUseAjaxSuggest"] = false;
else 
	$tdatasoc_secu[".isUseAjaxSuggest"] = true;

$tdatasoc_secu[".rowHighlite"] = true;



$tdatasoc_secu[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasoc_secu[".isUseTimeForSearch"] = false;





$tdatasoc_secu[".allSearchFields"] = array();
$tdatasoc_secu[".filterFields"] = array();
$tdatasoc_secu[".requiredSearchFields"] = array();

$tdatasoc_secu[".allSearchFields"][] = "id_sec";
	$tdatasoc_secu[".allSearchFields"][] = "id_func";
	$tdatasoc_secu[".allSearchFields"][] = "id_per";
	$tdatasoc_secu[".allSearchFields"][] = "name_sec";
	$tdatasoc_secu[".allSearchFields"][] = "num_reg";
	$tdatasoc_secu[".allSearchFields"][] = "type_sec";
	$tdatasoc_secu[".allSearchFields"][] = "date_afil";
	$tdatasoc_secu[".allSearchFields"][] = "date_des";
	$tdatasoc_secu[".allSearchFields"][] = "cause";
	

$tdatasoc_secu[".googleLikeFields"] = array();
$tdatasoc_secu[".googleLikeFields"][] = "id_sec";
$tdatasoc_secu[".googleLikeFields"][] = "id_func";
$tdatasoc_secu[".googleLikeFields"][] = "id_per";
$tdatasoc_secu[".googleLikeFields"][] = "name_sec";
$tdatasoc_secu[".googleLikeFields"][] = "num_reg";
$tdatasoc_secu[".googleLikeFields"][] = "type_sec";
$tdatasoc_secu[".googleLikeFields"][] = "date_afil";
$tdatasoc_secu[".googleLikeFields"][] = "date_des";
$tdatasoc_secu[".googleLikeFields"][] = "cause";


$tdatasoc_secu[".advSearchFields"] = array();
$tdatasoc_secu[".advSearchFields"][] = "id_sec";
$tdatasoc_secu[".advSearchFields"][] = "id_func";
$tdatasoc_secu[".advSearchFields"][] = "id_per";
$tdatasoc_secu[".advSearchFields"][] = "name_sec";
$tdatasoc_secu[".advSearchFields"][] = "num_reg";
$tdatasoc_secu[".advSearchFields"][] = "type_sec";
$tdatasoc_secu[".advSearchFields"][] = "date_afil";
$tdatasoc_secu[".advSearchFields"][] = "date_des";
$tdatasoc_secu[".advSearchFields"][] = "cause";

$tdatasoc_secu[".tableType"] = "list";

$tdatasoc_secu[".printerPageOrientation"] = 0;
$tdatasoc_secu[".nPrinterPageScale"] = 100;

$tdatasoc_secu[".nPrinterSplitRecords"] = 40;

$tdatasoc_secu[".nPrinterPDFSplitRecords"] = 40;



$tdatasoc_secu[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatasoc_secu[".pageSize"] = 20;

$tdatasoc_secu[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasoc_secu[".strOrderBy"] = $tstrOrderBy;

$tdatasoc_secu[".orderindexes"] = array();

$tdatasoc_secu[".sqlHead"] = "SELECT id_sec,  	id_func,  	id_per,  	name_sec,  	num_reg,  	type_sec,  	date_afil,  	date_des,  	cause";
$tdatasoc_secu[".sqlFrom"] = "FROM soc_secu";
$tdatasoc_secu[".sqlWhereExpr"] = "";
$tdatasoc_secu[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasoc_secu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasoc_secu[".arrGroupsPerPage"] = $arrGPP;

$tdatasoc_secu[".highlightSearchResults"] = true;

$tableKeyssoc_secu = array();
$tableKeyssoc_secu[] = "id_sec";
$tdatasoc_secu[".Keys"] = $tableKeyssoc_secu;

$tdatasoc_secu[".listFields"] = array();
$tdatasoc_secu[".listFields"][] = "id_sec";
$tdatasoc_secu[".listFields"][] = "id_func";
$tdatasoc_secu[".listFields"][] = "id_per";
$tdatasoc_secu[".listFields"][] = "name_sec";
$tdatasoc_secu[".listFields"][] = "num_reg";
$tdatasoc_secu[".listFields"][] = "type_sec";
$tdatasoc_secu[".listFields"][] = "date_afil";
$tdatasoc_secu[".listFields"][] = "date_des";
$tdatasoc_secu[".listFields"][] = "cause";

$tdatasoc_secu[".hideMobileList"] = array();


$tdatasoc_secu[".viewFields"] = array();

$tdatasoc_secu[".addFields"] = array();
$tdatasoc_secu[".addFields"][] = "id_func";
$tdatasoc_secu[".addFields"][] = "id_per";
$tdatasoc_secu[".addFields"][] = "name_sec";
$tdatasoc_secu[".addFields"][] = "num_reg";
$tdatasoc_secu[".addFields"][] = "type_sec";
$tdatasoc_secu[".addFields"][] = "date_afil";
$tdatasoc_secu[".addFields"][] = "date_des";
$tdatasoc_secu[".addFields"][] = "cause";

$tdatasoc_secu[".masterListFields"] = array();
$tdatasoc_secu[".masterListFields"][] = "id_sec";
$tdatasoc_secu[".masterListFields"][] = "id_func";
$tdatasoc_secu[".masterListFields"][] = "id_per";
$tdatasoc_secu[".masterListFields"][] = "name_sec";
$tdatasoc_secu[".masterListFields"][] = "num_reg";
$tdatasoc_secu[".masterListFields"][] = "type_sec";
$tdatasoc_secu[".masterListFields"][] = "date_afil";
$tdatasoc_secu[".masterListFields"][] = "date_des";
$tdatasoc_secu[".masterListFields"][] = "cause";

$tdatasoc_secu[".inlineAddFields"] = array();
$tdatasoc_secu[".inlineAddFields"][] = "id_func";
$tdatasoc_secu[".inlineAddFields"][] = "id_per";
$tdatasoc_secu[".inlineAddFields"][] = "name_sec";
$tdatasoc_secu[".inlineAddFields"][] = "num_reg";
$tdatasoc_secu[".inlineAddFields"][] = "type_sec";
$tdatasoc_secu[".inlineAddFields"][] = "date_afil";
$tdatasoc_secu[".inlineAddFields"][] = "date_des";
$tdatasoc_secu[".inlineAddFields"][] = "cause";

$tdatasoc_secu[".editFields"] = array();
$tdatasoc_secu[".editFields"][] = "id_func";
$tdatasoc_secu[".editFields"][] = "id_per";
$tdatasoc_secu[".editFields"][] = "name_sec";
$tdatasoc_secu[".editFields"][] = "num_reg";
$tdatasoc_secu[".editFields"][] = "type_sec";
$tdatasoc_secu[".editFields"][] = "date_afil";
$tdatasoc_secu[".editFields"][] = "date_des";
$tdatasoc_secu[".editFields"][] = "cause";

$tdatasoc_secu[".inlineEditFields"] = array();
$tdatasoc_secu[".inlineEditFields"][] = "id_func";
$tdatasoc_secu[".inlineEditFields"][] = "id_per";
$tdatasoc_secu[".inlineEditFields"][] = "name_sec";
$tdatasoc_secu[".inlineEditFields"][] = "num_reg";
$tdatasoc_secu[".inlineEditFields"][] = "type_sec";
$tdatasoc_secu[".inlineEditFields"][] = "date_afil";
$tdatasoc_secu[".inlineEditFields"][] = "date_des";
$tdatasoc_secu[".inlineEditFields"][] = "cause";

$tdatasoc_secu[".exportFields"] = array();

$tdatasoc_secu[".importFields"] = array();

$tdatasoc_secu[".printFields"] = array();

//	id_sec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_sec";
	$fdata["GoodName"] = "id_sec";
	$fdata["ownerTable"] = "soc_secu";
	$fdata["Label"] = GetFieldLabel("soc_secu","id_sec"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id_sec"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_sec";
	
		
		
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

	

	
	$tdatasoc_secu["id_sec"] = $fdata;
//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "soc_secu";
	$fdata["Label"] = GetFieldLabel("soc_secu","id_func"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
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

	

	
	$tdatasoc_secu["id_func"] = $fdata;
//	id_per
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_per";
	$fdata["GoodName"] = "id_per";
	$fdata["ownerTable"] = "soc_secu";
	$fdata["Label"] = GetFieldLabel("soc_secu","id_per"); 
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

	

	
	$tdatasoc_secu["id_per"] = $fdata;
//	name_sec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "name_sec";
	$fdata["GoodName"] = "name_sec";
	$fdata["ownerTable"] = "soc_secu";
	$fdata["Label"] = GetFieldLabel("soc_secu","name_sec"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "name_sec"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name_sec";
	
		
		
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
	$edata["LookupTable"] = "t_caja";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "nombre";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";
	
		
	$edata["LookupOrderBy"] = "nombre";
	
		
			
		$edata["AllowToAdd"] = true; 
	
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatasoc_secu["name_sec"] = $fdata;
//	num_reg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "num_reg";
	$fdata["GoodName"] = "num_reg";
	$fdata["ownerTable"] = "soc_secu";
	$fdata["Label"] = GetFieldLabel("soc_secu","num_reg"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "num_reg"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "num_reg";
	
		
		
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

	

	
	$tdatasoc_secu["num_reg"] = $fdata;
//	type_sec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "type_sec";
	$fdata["GoodName"] = "type_sec";
	$fdata["ownerTable"] = "soc_secu";
	$fdata["Label"] = GetFieldLabel("soc_secu","type_sec"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "type_sec"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "type_sec";
	
		
		
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

	

	
	$tdatasoc_secu["type_sec"] = $fdata;
//	date_afil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "date_afil";
	$fdata["GoodName"] = "date_afil";
	$fdata["ownerTable"] = "soc_secu";
	$fdata["Label"] = GetFieldLabel("soc_secu","date_afil"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "date_afil"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_afil";
	
		
		
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

	

	
	$tdatasoc_secu["date_afil"] = $fdata;
//	date_des
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "date_des";
	$fdata["GoodName"] = "date_des";
	$fdata["ownerTable"] = "soc_secu";
	$fdata["Label"] = GetFieldLabel("soc_secu","date_des"); 
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

	

	
	$tdatasoc_secu["date_des"] = $fdata;
//	cause
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cause";
	$fdata["GoodName"] = "cause";
	$fdata["ownerTable"] = "soc_secu";
	$fdata["Label"] = GetFieldLabel("soc_secu","cause"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "cause"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cause";
	
		
		
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
			$edata["EditParams"].= " maxlength=1024";
	
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

	

	
	$tdatasoc_secu["cause"] = $fdata;

	
$tables_data["soc_secu"]=&$tdatasoc_secu;
$field_labels["soc_secu"] = &$fieldLabelssoc_secu;
$fieldToolTips["soc_secu"] = &$fieldToolTipssoc_secu;
$page_titles["soc_secu"] = &$pageTitlessoc_secu;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["soc_secu"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["soc_secu"] = array();


	
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
					$masterTablesData["soc_secu"][0] = $masterParams;	
				$masterTablesData["soc_secu"][0]["masterKeys"] = array();
	$masterTablesData["soc_secu"][0]["masterKeys"][]="id_func";
				$masterTablesData["soc_secu"][0]["detailKeys"] = array();
	$masterTablesData["soc_secu"][0]["detailKeys"][]="id_per";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_soc_secu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_sec,  	id_func,  	id_per,  	name_sec,  	num_reg,  	type_sec,  	date_afil,  	date_des,  	cause";
$proto0["m_strFrom"] = "FROM soc_secu";
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
	"m_strName" => "id_sec",
	"m_strTable" => "soc_secu",
	"m_srcTableName" => "soc_secu"
));

$proto5["m_sql"] = "id_sec";
$proto5["m_srcTableName"] = "soc_secu";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "soc_secu",
	"m_srcTableName" => "soc_secu"
));

$proto7["m_sql"] = "id_func";
$proto7["m_srcTableName"] = "soc_secu";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "id_per",
	"m_strTable" => "soc_secu",
	"m_srcTableName" => "soc_secu"
));

$proto9["m_sql"] = "id_per";
$proto9["m_srcTableName"] = "soc_secu";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "name_sec",
	"m_strTable" => "soc_secu",
	"m_srcTableName" => "soc_secu"
));

$proto11["m_sql"] = "name_sec";
$proto11["m_srcTableName"] = "soc_secu";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "num_reg",
	"m_strTable" => "soc_secu",
	"m_srcTableName" => "soc_secu"
));

$proto13["m_sql"] = "num_reg";
$proto13["m_srcTableName"] = "soc_secu";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "type_sec",
	"m_strTable" => "soc_secu",
	"m_srcTableName" => "soc_secu"
));

$proto15["m_sql"] = "type_sec";
$proto15["m_srcTableName"] = "soc_secu";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "date_afil",
	"m_strTable" => "soc_secu",
	"m_srcTableName" => "soc_secu"
));

$proto17["m_sql"] = "date_afil";
$proto17["m_srcTableName"] = "soc_secu";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "date_des",
	"m_strTable" => "soc_secu",
	"m_srcTableName" => "soc_secu"
));

$proto19["m_sql"] = "date_des";
$proto19["m_srcTableName"] = "soc_secu";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "cause",
	"m_strTable" => "soc_secu",
	"m_srcTableName" => "soc_secu"
));

$proto21["m_sql"] = "cause";
$proto21["m_srcTableName"] = "soc_secu";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "soc_secu";
$proto24["m_srcTableName"] = "soc_secu";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id_sec";
$proto24["m_columns"][] = "id_func";
$proto24["m_columns"][] = "id_per";
$proto24["m_columns"][] = "name_sec";
$proto24["m_columns"][] = "num_reg";
$proto24["m_columns"][] = "type_sec";
$proto24["m_columns"][] = "date_afil";
$proto24["m_columns"][] = "date_des";
$proto24["m_columns"][] = "cause";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "soc_secu";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "soc_secu";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="soc_secu";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_soc_secu = createSqlQuery_soc_secu();


	
									
	
$tdatasoc_secu[".sqlquery"] = $queryData_soc_secu;

$tableEvents["soc_secu"] = new eventsBase;
$tdatasoc_secu[".hasEvents"] = false;

?>