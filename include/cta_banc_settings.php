<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacta_banc = array();	
	$tdatacta_banc[".truncateText"] = true;
	$tdatacta_banc[".NumberOfChars"] = 80; 
	$tdatacta_banc[".ShortName"] = "cta_banc";
	$tdatacta_banc[".OwnerID"] = "";
	$tdatacta_banc[".OriginalTable"] = "cta_banc";

//	field labels
$fieldLabelscta_banc = array();
$fieldToolTipscta_banc = array();
$pageTitlescta_banc = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscta_banc["Spanish"] = array();
	$fieldToolTipscta_banc["Spanish"] = array();
	$pageTitlescta_banc["Spanish"] = array();
	$fieldLabelscta_banc["Spanish"]["id_cta_banc"] = "Id Cta Banc";
	$fieldToolTipscta_banc["Spanish"]["id_cta_banc"] = "";
	$fieldLabelscta_banc["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipscta_banc["Spanish"]["id_func"] = "";
	$fieldLabelscta_banc["Spanish"]["bank"] = "Banco";
	$fieldToolTipscta_banc["Spanish"]["bank"] = "";
	$fieldLabelscta_banc["Spanish"]["type_ac"] = "Tipo de Cuenta";
	$fieldToolTipscta_banc["Spanish"]["type_ac"] = "";
	$fieldLabelscta_banc["Spanish"]["num_ac"] = "Numero de cuenta";
	$fieldToolTipscta_banc["Spanish"]["num_ac"] = "";
	$fieldLabelscta_banc["Spanish"]["dist_ac"] = "Departamento de la Cuenta";
	$fieldToolTipscta_banc["Spanish"]["dist_ac"] = "";
	if (count($fieldToolTipscta_banc["Spanish"]))
		$tdatacta_banc[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscta_banc[""] = array();
	$fieldToolTipscta_banc[""] = array();
	$pageTitlescta_banc[""] = array();
	if (count($fieldToolTipscta_banc[""]))
		$tdatacta_banc[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscta_banc["English"] = array();
	$fieldToolTipscta_banc["English"] = array();
	$pageTitlescta_banc["English"] = array();
	if (count($fieldToolTipscta_banc["English"]))
		$tdatacta_banc[".isUseToolTips"] = true;
}
	
	
	$tdatacta_banc[".NCSearch"] = true;



$tdatacta_banc[".shortTableName"] = "cta_banc";
$tdatacta_banc[".nSecOptions"] = 0;
$tdatacta_banc[".recsPerRowList"] = 1;
$tdatacta_banc[".recsPerRowPrint"] = 1;
$tdatacta_banc[".mainTableOwnerID"] = "";
$tdatacta_banc[".moveNext"] = 1;
$tdatacta_banc[".entityType"] = 0;

$tdatacta_banc[".strOriginalTableName"] = "cta_banc";




$tdatacta_banc[".showAddInPopup"] = false;

$tdatacta_banc[".showEditInPopup"] = false;

$tdatacta_banc[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacta_banc[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacta_banc[".fieldsForRegister"] = array();

$tdatacta_banc[".listAjax"] = false;

	$tdatacta_banc[".audit"] = false;

	$tdatacta_banc[".locking"] = false;

$tdatacta_banc[".edit"] = true;
$tdatacta_banc[".afterEditAction"] = 1;
$tdatacta_banc[".closePopupAfterEdit"] = 1;
$tdatacta_banc[".afterEditActionDetTable"] = "";

$tdatacta_banc[".add"] = true;
$tdatacta_banc[".afterAddAction"] = 1;
$tdatacta_banc[".closePopupAfterAdd"] = 1;
$tdatacta_banc[".afterAddActionDetTable"] = "";

$tdatacta_banc[".list"] = true;

$tdatacta_banc[".inlineEdit"] = true;
$tdatacta_banc[".inlineAdd"] = true;
$tdatacta_banc[".view"] = true;

$tdatacta_banc[".import"] = true;

$tdatacta_banc[".exportTo"] = true;

$tdatacta_banc[".printFriendly"] = true;

$tdatacta_banc[".delete"] = true;

$tdatacta_banc[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacta_banc[".searchSaving"] = false;
//

$tdatacta_banc[".showSearchPanel"] = true;
		$tdatacta_banc[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacta_banc[".isUseAjaxSuggest"] = false;
else 
	$tdatacta_banc[".isUseAjaxSuggest"] = true;

$tdatacta_banc[".rowHighlite"] = true;



$tdatacta_banc[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacta_banc[".isUseTimeForSearch"] = false;





$tdatacta_banc[".allSearchFields"] = array();
$tdatacta_banc[".filterFields"] = array();
$tdatacta_banc[".requiredSearchFields"] = array();

$tdatacta_banc[".allSearchFields"][] = "id_cta_banc";
	$tdatacta_banc[".allSearchFields"][] = "id_func";
	$tdatacta_banc[".allSearchFields"][] = "bank";
	$tdatacta_banc[".allSearchFields"][] = "type_ac";
	$tdatacta_banc[".allSearchFields"][] = "num_ac";
	$tdatacta_banc[".allSearchFields"][] = "dist_ac";
	

$tdatacta_banc[".googleLikeFields"] = array();
$tdatacta_banc[".googleLikeFields"][] = "id_cta_banc";
$tdatacta_banc[".googleLikeFields"][] = "id_func";
$tdatacta_banc[".googleLikeFields"][] = "bank";
$tdatacta_banc[".googleLikeFields"][] = "type_ac";
$tdatacta_banc[".googleLikeFields"][] = "num_ac";
$tdatacta_banc[".googleLikeFields"][] = "dist_ac";


$tdatacta_banc[".advSearchFields"] = array();
$tdatacta_banc[".advSearchFields"][] = "id_cta_banc";
$tdatacta_banc[".advSearchFields"][] = "id_func";
$tdatacta_banc[".advSearchFields"][] = "bank";
$tdatacta_banc[".advSearchFields"][] = "type_ac";
$tdatacta_banc[".advSearchFields"][] = "num_ac";
$tdatacta_banc[".advSearchFields"][] = "dist_ac";

$tdatacta_banc[".tableType"] = "list";

$tdatacta_banc[".printerPageOrientation"] = 0;
$tdatacta_banc[".nPrinterPageScale"] = 100;

$tdatacta_banc[".nPrinterSplitRecords"] = 40;

$tdatacta_banc[".nPrinterPDFSplitRecords"] = 40;



$tdatacta_banc[".geocodingEnabled"] = false;




	





// view page pdf
$tdatacta_banc[".isViewPagePDF"] = true;
$tdatacta_banc[".isLandscapeViewPDFOrientation"] = 1;
$tdatacta_banc[".nViewPagePDFScale"] = 100;

// print page pdf


$tdatacta_banc[".pageSize"] = 20;

$tdatacta_banc[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacta_banc[".strOrderBy"] = $tstrOrderBy;

$tdatacta_banc[".orderindexes"] = array();

$tdatacta_banc[".sqlHead"] = "SELECT id_cta_banc,  	id_func,  	bank,  	type_ac,  	num_ac,  	dist_ac";
$tdatacta_banc[".sqlFrom"] = "FROM cta_banc";
$tdatacta_banc[".sqlWhereExpr"] = "";
$tdatacta_banc[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacta_banc[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacta_banc[".arrGroupsPerPage"] = $arrGPP;

$tdatacta_banc[".highlightSearchResults"] = true;

$tableKeyscta_banc = array();
$tableKeyscta_banc[] = "id_cta_banc";
$tdatacta_banc[".Keys"] = $tableKeyscta_banc;

$tdatacta_banc[".listFields"] = array();
$tdatacta_banc[".listFields"][] = "id_cta_banc";
$tdatacta_banc[".listFields"][] = "id_func";
$tdatacta_banc[".listFields"][] = "bank";
$tdatacta_banc[".listFields"][] = "type_ac";
$tdatacta_banc[".listFields"][] = "num_ac";
$tdatacta_banc[".listFields"][] = "dist_ac";

$tdatacta_banc[".hideMobileList"] = array();


$tdatacta_banc[".viewFields"] = array();
$tdatacta_banc[".viewFields"][] = "id_cta_banc";
$tdatacta_banc[".viewFields"][] = "id_func";
$tdatacta_banc[".viewFields"][] = "bank";
$tdatacta_banc[".viewFields"][] = "type_ac";
$tdatacta_banc[".viewFields"][] = "num_ac";
$tdatacta_banc[".viewFields"][] = "dist_ac";

$tdatacta_banc[".addFields"] = array();
$tdatacta_banc[".addFields"][] = "id_func";
$tdatacta_banc[".addFields"][] = "bank";
$tdatacta_banc[".addFields"][] = "type_ac";
$tdatacta_banc[".addFields"][] = "num_ac";
$tdatacta_banc[".addFields"][] = "dist_ac";

$tdatacta_banc[".masterListFields"] = array();
$tdatacta_banc[".masterListFields"][] = "id_cta_banc";
$tdatacta_banc[".masterListFields"][] = "id_func";
$tdatacta_banc[".masterListFields"][] = "bank";
$tdatacta_banc[".masterListFields"][] = "type_ac";
$tdatacta_banc[".masterListFields"][] = "num_ac";
$tdatacta_banc[".masterListFields"][] = "dist_ac";

$tdatacta_banc[".inlineAddFields"] = array();
$tdatacta_banc[".inlineAddFields"][] = "id_func";
$tdatacta_banc[".inlineAddFields"][] = "bank";
$tdatacta_banc[".inlineAddFields"][] = "type_ac";
$tdatacta_banc[".inlineAddFields"][] = "num_ac";
$tdatacta_banc[".inlineAddFields"][] = "dist_ac";

$tdatacta_banc[".editFields"] = array();
$tdatacta_banc[".editFields"][] = "id_func";
$tdatacta_banc[".editFields"][] = "bank";
$tdatacta_banc[".editFields"][] = "type_ac";
$tdatacta_banc[".editFields"][] = "num_ac";
$tdatacta_banc[".editFields"][] = "dist_ac";

$tdatacta_banc[".inlineEditFields"] = array();
$tdatacta_banc[".inlineEditFields"][] = "id_func";
$tdatacta_banc[".inlineEditFields"][] = "bank";
$tdatacta_banc[".inlineEditFields"][] = "type_ac";
$tdatacta_banc[".inlineEditFields"][] = "num_ac";
$tdatacta_banc[".inlineEditFields"][] = "dist_ac";

$tdatacta_banc[".exportFields"] = array();
$tdatacta_banc[".exportFields"][] = "id_cta_banc";
$tdatacta_banc[".exportFields"][] = "id_func";
$tdatacta_banc[".exportFields"][] = "bank";
$tdatacta_banc[".exportFields"][] = "type_ac";
$tdatacta_banc[".exportFields"][] = "num_ac";
$tdatacta_banc[".exportFields"][] = "dist_ac";

$tdatacta_banc[".importFields"] = array();
$tdatacta_banc[".importFields"][] = "id_cta_banc";
$tdatacta_banc[".importFields"][] = "id_func";
$tdatacta_banc[".importFields"][] = "bank";
$tdatacta_banc[".importFields"][] = "type_ac";
$tdatacta_banc[".importFields"][] = "num_ac";
$tdatacta_banc[".importFields"][] = "dist_ac";

$tdatacta_banc[".printFields"] = array();
$tdatacta_banc[".printFields"][] = "id_cta_banc";
$tdatacta_banc[".printFields"][] = "id_func";
$tdatacta_banc[".printFields"][] = "bank";
$tdatacta_banc[".printFields"][] = "type_ac";
$tdatacta_banc[".printFields"][] = "num_ac";
$tdatacta_banc[".printFields"][] = "dist_ac";

//	id_cta_banc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cta_banc";
	$fdata["GoodName"] = "id_cta_banc";
	$fdata["ownerTable"] = "cta_banc";
	$fdata["Label"] = GetFieldLabel("cta_banc","id_cta_banc"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id_cta_banc"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cta_banc";
	
		
		
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

	

	
	$tdatacta_banc["id_cta_banc"] = $fdata;
//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "cta_banc";
	$fdata["Label"] = GetFieldLabel("cta_banc","id_func"); 
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

	

	
	$tdatacta_banc["id_func"] = $fdata;
//	bank
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "bank";
	$fdata["GoodName"] = "bank";
	$fdata["ownerTable"] = "cta_banc";
	$fdata["Label"] = GetFieldLabel("cta_banc","bank"); 
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
	
		$fdata["strField"] = "bank"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank";
	
		
		
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

	

	
	$tdatacta_banc["bank"] = $fdata;
//	type_ac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "type_ac";
	$fdata["GoodName"] = "type_ac";
	$fdata["ownerTable"] = "cta_banc";
	$fdata["Label"] = GetFieldLabel("cta_banc","type_ac"); 
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
	
		$fdata["strField"] = "type_ac"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "type_ac";
	
		
		
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

	

	
	$tdatacta_banc["type_ac"] = $fdata;
//	num_ac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "num_ac";
	$fdata["GoodName"] = "num_ac";
	$fdata["ownerTable"] = "cta_banc";
	$fdata["Label"] = GetFieldLabel("cta_banc","num_ac"); 
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
	
		$fdata["strField"] = "num_ac"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "num_ac";
	
		
		
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

	

	
	$tdatacta_banc["num_ac"] = $fdata;
//	dist_ac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dist_ac";
	$fdata["GoodName"] = "dist_ac";
	$fdata["ownerTable"] = "cta_banc";
	$fdata["Label"] = GetFieldLabel("cta_banc","dist_ac"); 
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
	
		$fdata["strField"] = "dist_ac"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dist_ac";
	
		
		
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

	

	
	$tdatacta_banc["dist_ac"] = $fdata;

	
$tables_data["cta_banc"]=&$tdatacta_banc;
$field_labels["cta_banc"] = &$fieldLabelscta_banc;
$fieldToolTips["cta_banc"] = &$fieldToolTipscta_banc;
$page_titles["cta_banc"] = &$pageTitlescta_banc;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cta_banc"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cta_banc"] = array();


	
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
					$masterTablesData["cta_banc"][0] = $masterParams;	
				$masterTablesData["cta_banc"][0]["masterKeys"] = array();
	$masterTablesData["cta_banc"][0]["masterKeys"][]="id_func";
				$masterTablesData["cta_banc"][0]["detailKeys"] = array();
	$masterTablesData["cta_banc"][0]["detailKeys"][]="id_func";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cta_banc()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_cta_banc,  	id_func,  	bank,  	type_ac,  	num_ac,  	dist_ac";
$proto0["m_strFrom"] = "FROM cta_banc";
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
	"m_strName" => "id_cta_banc",
	"m_strTable" => "cta_banc",
	"m_srcTableName" => "cta_banc"
));

$proto5["m_sql"] = "id_cta_banc";
$proto5["m_srcTableName"] = "cta_banc";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "cta_banc",
	"m_srcTableName" => "cta_banc"
));

$proto7["m_sql"] = "id_func";
$proto7["m_srcTableName"] = "cta_banc";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "bank",
	"m_strTable" => "cta_banc",
	"m_srcTableName" => "cta_banc"
));

$proto9["m_sql"] = "bank";
$proto9["m_srcTableName"] = "cta_banc";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "type_ac",
	"m_strTable" => "cta_banc",
	"m_srcTableName" => "cta_banc"
));

$proto11["m_sql"] = "type_ac";
$proto11["m_srcTableName"] = "cta_banc";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "num_ac",
	"m_strTable" => "cta_banc",
	"m_srcTableName" => "cta_banc"
));

$proto13["m_sql"] = "num_ac";
$proto13["m_srcTableName"] = "cta_banc";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "dist_ac",
	"m_strTable" => "cta_banc",
	"m_srcTableName" => "cta_banc"
));

$proto15["m_sql"] = "dist_ac";
$proto15["m_srcTableName"] = "cta_banc";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "cta_banc";
$proto18["m_srcTableName"] = "cta_banc";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id_cta_banc";
$proto18["m_columns"][] = "id_func";
$proto18["m_columns"][] = "bank";
$proto18["m_columns"][] = "type_ac";
$proto18["m_columns"][] = "num_ac";
$proto18["m_columns"][] = "dist_ac";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "cta_banc";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "cta_banc";
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
$proto0["m_srcTableName"]="cta_banc";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cta_banc = createSqlQuery_cta_banc();


	
						
	
$tdatacta_banc[".sqlquery"] = $queryData_cta_banc;

$tableEvents["cta_banc"] = new eventsBase;
$tdatacta_banc[".hasEvents"] = false;

?>