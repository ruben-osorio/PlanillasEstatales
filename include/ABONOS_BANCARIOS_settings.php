<?php
require_once(getabspath("classes/cipherer.php"));




$tdataABONOS_BANCARIOS = array();	
	$tdataABONOS_BANCARIOS[".truncateText"] = true;
	$tdataABONOS_BANCARIOS[".NumberOfChars"] = 80; 
	$tdataABONOS_BANCARIOS[".ShortName"] = "ABONOS_BANCARIOS";
	$tdataABONOS_BANCARIOS[".OwnerID"] = "";
	$tdataABONOS_BANCARIOS[".OriginalTable"] = "t_planilla";

//	field labels
$fieldLabelsABONOS_BANCARIOS = array();
$fieldToolTipsABONOS_BANCARIOS = array();
$pageTitlesABONOS_BANCARIOS = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsABONOS_BANCARIOS["Spanish"] = array();
	$fieldToolTipsABONOS_BANCARIOS["Spanish"] = array();
	$pageTitlesABONOS_BANCARIOS["Spanish"] = array();
	$fieldLabelsABONOS_BANCARIOS["Spanish"]["id_func"] = "Num.";
	$fieldToolTipsABONOS_BANCARIOS["Spanish"]["id_func"] = "";
	$fieldLabelsABONOS_BANCARIOS["Spanish"]["paterno"] = "PATERNO";
	$fieldToolTipsABONOS_BANCARIOS["Spanish"]["paterno"] = "";
	$fieldLabelsABONOS_BANCARIOS["Spanish"]["materno"] = "MATERNO";
	$fieldToolTipsABONOS_BANCARIOS["Spanish"]["materno"] = "";
	$fieldLabelsABONOS_BANCARIOS["Spanish"]["nombres"] = "NOMBRES";
	$fieldToolTipsABONOS_BANCARIOS["Spanish"]["nombres"] = "";
	$fieldLabelsABONOS_BANCARIOS["Spanish"]["ci"] = "CI";
	$fieldToolTipsABONOS_BANCARIOS["Spanish"]["ci"] = "";
	$fieldLabelsABONOS_BANCARIOS["Spanish"]["exp"] = "Exp";
	$fieldToolTipsABONOS_BANCARIOS["Spanish"]["exp"] = "";
	$fieldLabelsABONOS_BANCARIOS["Spanish"]["num_ac"] = "NUM.CUENTA";
	$fieldToolTipsABONOS_BANCARIOS["Spanish"]["num_ac"] = "";
	$fieldLabelsABONOS_BANCARIOS["Spanish"]["liquido_pagable"] = "LIQUIDO PAGABLE";
	$fieldToolTipsABONOS_BANCARIOS["Spanish"]["liquido_pagable"] = "";
	if (count($fieldToolTipsABONOS_BANCARIOS["Spanish"]))
		$tdataABONOS_BANCARIOS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsABONOS_BANCARIOS[""] = array();
	$fieldToolTipsABONOS_BANCARIOS[""] = array();
	$pageTitlesABONOS_BANCARIOS[""] = array();
	$fieldLabelsABONOS_BANCARIOS[""]["id_func"] = "Id Func";
	$fieldToolTipsABONOS_BANCARIOS[""]["id_func"] = "";
	$fieldLabelsABONOS_BANCARIOS[""]["paterno"] = "Paterno";
	$fieldToolTipsABONOS_BANCARIOS[""]["paterno"] = "";
	$fieldLabelsABONOS_BANCARIOS[""]["materno"] = "Materno";
	$fieldToolTipsABONOS_BANCARIOS[""]["materno"] = "";
	$fieldLabelsABONOS_BANCARIOS[""]["nombres"] = "Nombres";
	$fieldToolTipsABONOS_BANCARIOS[""]["nombres"] = "";
	$fieldLabelsABONOS_BANCARIOS[""]["ci"] = "Ci";
	$fieldToolTipsABONOS_BANCARIOS[""]["ci"] = "";
	$fieldLabelsABONOS_BANCARIOS[""]["exp"] = "Exp";
	$fieldToolTipsABONOS_BANCARIOS[""]["exp"] = "";
	$fieldLabelsABONOS_BANCARIOS[""]["num_ac"] = "Num Ac";
	$fieldToolTipsABONOS_BANCARIOS[""]["num_ac"] = "";
	$fieldLabelsABONOS_BANCARIOS[""]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipsABONOS_BANCARIOS[""]["liquido_pagable"] = "";
	if (count($fieldToolTipsABONOS_BANCARIOS[""]))
		$tdataABONOS_BANCARIOS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsABONOS_BANCARIOS["English"] = array();
	$fieldToolTipsABONOS_BANCARIOS["English"] = array();
	$pageTitlesABONOS_BANCARIOS["English"] = array();
	if (count($fieldToolTipsABONOS_BANCARIOS["English"]))
		$tdataABONOS_BANCARIOS[".isUseToolTips"] = true;
}
	
	
	$tdataABONOS_BANCARIOS[".NCSearch"] = true;



$tdataABONOS_BANCARIOS[".shortTableName"] = "ABONOS_BANCARIOS";
$tdataABONOS_BANCARIOS[".nSecOptions"] = 0;
$tdataABONOS_BANCARIOS[".recsPerRowList"] = 1;
$tdataABONOS_BANCARIOS[".recsPerRowPrint"] = 1;
$tdataABONOS_BANCARIOS[".mainTableOwnerID"] = "";
$tdataABONOS_BANCARIOS[".moveNext"] = 1;
$tdataABONOS_BANCARIOS[".entityType"] = 2;

$tdataABONOS_BANCARIOS[".strOriginalTableName"] = "t_planilla";




$tdataABONOS_BANCARIOS[".showAddInPopup"] = false;

$tdataABONOS_BANCARIOS[".showEditInPopup"] = false;

$tdataABONOS_BANCARIOS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataABONOS_BANCARIOS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataABONOS_BANCARIOS[".fieldsForRegister"] = array();

$tdataABONOS_BANCARIOS[".listAjax"] = false;

	$tdataABONOS_BANCARIOS[".audit"] = false;

	$tdataABONOS_BANCARIOS[".locking"] = false;



$tdataABONOS_BANCARIOS[".list"] = true;



$tdataABONOS_BANCARIOS[".exportTo"] = true;

$tdataABONOS_BANCARIOS[".printFriendly"] = true;


$tdataABONOS_BANCARIOS[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataABONOS_BANCARIOS[".searchSaving"] = false;
//

$tdataABONOS_BANCARIOS[".showSearchPanel"] = true;
		$tdataABONOS_BANCARIOS[".flexibleSearch"] = true;		

if (isMobile())
	$tdataABONOS_BANCARIOS[".isUseAjaxSuggest"] = false;
else 
	$tdataABONOS_BANCARIOS[".isUseAjaxSuggest"] = true;




$tdataABONOS_BANCARIOS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataABONOS_BANCARIOS[".isUseTimeForSearch"] = false;





$tdataABONOS_BANCARIOS[".allSearchFields"] = array();
$tdataABONOS_BANCARIOS[".filterFields"] = array();
$tdataABONOS_BANCARIOS[".requiredSearchFields"] = array();

$tdataABONOS_BANCARIOS[".allSearchFields"][] = "id_func";
	$tdataABONOS_BANCARIOS[".allSearchFields"][] = "paterno";
	$tdataABONOS_BANCARIOS[".allSearchFields"][] = "materno";
	$tdataABONOS_BANCARIOS[".allSearchFields"][] = "nombres";
	$tdataABONOS_BANCARIOS[".allSearchFields"][] = "ci";
	$tdataABONOS_BANCARIOS[".allSearchFields"][] = "exp";
	$tdataABONOS_BANCARIOS[".allSearchFields"][] = "num_ac";
	$tdataABONOS_BANCARIOS[".allSearchFields"][] = "liquido_pagable";
	

$tdataABONOS_BANCARIOS[".googleLikeFields"] = array();
$tdataABONOS_BANCARIOS[".googleLikeFields"][] = "id_func";
$tdataABONOS_BANCARIOS[".googleLikeFields"][] = "paterno";
$tdataABONOS_BANCARIOS[".googleLikeFields"][] = "materno";
$tdataABONOS_BANCARIOS[".googleLikeFields"][] = "nombres";
$tdataABONOS_BANCARIOS[".googleLikeFields"][] = "ci";
$tdataABONOS_BANCARIOS[".googleLikeFields"][] = "exp";
$tdataABONOS_BANCARIOS[".googleLikeFields"][] = "num_ac";
$tdataABONOS_BANCARIOS[".googleLikeFields"][] = "liquido_pagable";


$tdataABONOS_BANCARIOS[".advSearchFields"] = array();
$tdataABONOS_BANCARIOS[".advSearchFields"][] = "id_func";
$tdataABONOS_BANCARIOS[".advSearchFields"][] = "paterno";
$tdataABONOS_BANCARIOS[".advSearchFields"][] = "materno";
$tdataABONOS_BANCARIOS[".advSearchFields"][] = "nombres";
$tdataABONOS_BANCARIOS[".advSearchFields"][] = "ci";
$tdataABONOS_BANCARIOS[".advSearchFields"][] = "exp";
$tdataABONOS_BANCARIOS[".advSearchFields"][] = "num_ac";
$tdataABONOS_BANCARIOS[".advSearchFields"][] = "liquido_pagable";

$tdataABONOS_BANCARIOS[".tableType"] = "report";

$tdataABONOS_BANCARIOS[".printerPageOrientation"] = 0;
$tdataABONOS_BANCARIOS[".nPrinterPageScale"] = 100;

$tdataABONOS_BANCARIOS[".nPrinterSplitRecords"] = 40;

$tdataABONOS_BANCARIOS[".nPrinterPDFSplitRecords"] = 40;



$tdataABONOS_BANCARIOS[".geocodingEnabled"] = false;

//report settings
$tdataABONOS_BANCARIOS[".printReportLayout"] = 6;	

$tdataABONOS_BANCARIOS[".reportPrintPartitionType"] = 1;	
$tdataABONOS_BANCARIOS[".reportPrintGroupsPerPage"] = 40;	
	$tdataABONOS_BANCARIOS[".reportPrintPDFGroupsPerPage"] = 40;
$tdataABONOS_BANCARIOS[".lowGroup"] = 0;



$tdataABONOS_BANCARIOS[".pageSize"] = 20;	


$tdataABONOS_BANCARIOS[".isExistTotalFields"] = true;




$tdataABONOS_BANCARIOS[".repShowDet"] = true;

$tdataABONOS_BANCARIOS[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf
$tdataABONOS_BANCARIOS[".isPrinterPagePDF"] = true;
$tdataABONOS_BANCARIOS[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "ORDER BY t_planilla.id_func";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataABONOS_BANCARIOS[".strOrderBy"] = $tstrOrderBy;

$tdataABONOS_BANCARIOS[".orderindexes"] = array();
$tdataABONOS_BANCARIOS[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "t_planilla.id_func");

$tdataABONOS_BANCARIOS[".sqlHead"] = "SELECT t_planilla.id_func,  t_planilla.paterno,  t_planilla.materno,  t_planilla.nombres,  t_planilla.ci,  t_planilla.exp,  cta_banc.num_ac,  t_planilla.liquido_pagable";
$tdataABONOS_BANCARIOS[".sqlFrom"] = "FROM t_planilla  INNER JOIN cta_banc ON t_planilla.id_func = cta_banc.id_func";
$tdataABONOS_BANCARIOS[".sqlWhereExpr"] = "";
$tdataABONOS_BANCARIOS[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataABONOS_BANCARIOS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataABONOS_BANCARIOS[".arrGroupsPerPage"] = $arrGPP;

$tdataABONOS_BANCARIOS[".highlightSearchResults"] = true;

$tableKeysABONOS_BANCARIOS = array();
$tdataABONOS_BANCARIOS[".Keys"] = $tableKeysABONOS_BANCARIOS;

$tdataABONOS_BANCARIOS[".listFields"] = array();
$tdataABONOS_BANCARIOS[".listFields"][] = "id_func";
$tdataABONOS_BANCARIOS[".listFields"][] = "paterno";
$tdataABONOS_BANCARIOS[".listFields"][] = "materno";
$tdataABONOS_BANCARIOS[".listFields"][] = "nombres";
$tdataABONOS_BANCARIOS[".listFields"][] = "ci";
$tdataABONOS_BANCARIOS[".listFields"][] = "exp";
$tdataABONOS_BANCARIOS[".listFields"][] = "num_ac";
$tdataABONOS_BANCARIOS[".listFields"][] = "liquido_pagable";

$tdataABONOS_BANCARIOS[".hideMobileList"] = array();


$tdataABONOS_BANCARIOS[".viewFields"] = array();
$tdataABONOS_BANCARIOS[".viewFields"][] = "id_func";
$tdataABONOS_BANCARIOS[".viewFields"][] = "paterno";
$tdataABONOS_BANCARIOS[".viewFields"][] = "materno";
$tdataABONOS_BANCARIOS[".viewFields"][] = "nombres";
$tdataABONOS_BANCARIOS[".viewFields"][] = "ci";
$tdataABONOS_BANCARIOS[".viewFields"][] = "exp";
$tdataABONOS_BANCARIOS[".viewFields"][] = "num_ac";
$tdataABONOS_BANCARIOS[".viewFields"][] = "liquido_pagable";

$tdataABONOS_BANCARIOS[".addFields"] = array();
$tdataABONOS_BANCARIOS[".addFields"][] = "id_func";
$tdataABONOS_BANCARIOS[".addFields"][] = "paterno";
$tdataABONOS_BANCARIOS[".addFields"][] = "materno";
$tdataABONOS_BANCARIOS[".addFields"][] = "nombres";
$tdataABONOS_BANCARIOS[".addFields"][] = "ci";
$tdataABONOS_BANCARIOS[".addFields"][] = "exp";
$tdataABONOS_BANCARIOS[".addFields"][] = "liquido_pagable";

$tdataABONOS_BANCARIOS[".masterListFields"] = array();
$tdataABONOS_BANCARIOS[".masterListFields"][] = "id_func";
$tdataABONOS_BANCARIOS[".masterListFields"][] = "paterno";
$tdataABONOS_BANCARIOS[".masterListFields"][] = "materno";
$tdataABONOS_BANCARIOS[".masterListFields"][] = "nombres";
$tdataABONOS_BANCARIOS[".masterListFields"][] = "ci";
$tdataABONOS_BANCARIOS[".masterListFields"][] = "exp";
$tdataABONOS_BANCARIOS[".masterListFields"][] = "num_ac";
$tdataABONOS_BANCARIOS[".masterListFields"][] = "liquido_pagable";

$tdataABONOS_BANCARIOS[".inlineAddFields"] = array();
$tdataABONOS_BANCARIOS[".inlineAddFields"][] = "id_func";
$tdataABONOS_BANCARIOS[".inlineAddFields"][] = "paterno";
$tdataABONOS_BANCARIOS[".inlineAddFields"][] = "materno";
$tdataABONOS_BANCARIOS[".inlineAddFields"][] = "nombres";
$tdataABONOS_BANCARIOS[".inlineAddFields"][] = "ci";
$tdataABONOS_BANCARIOS[".inlineAddFields"][] = "exp";
$tdataABONOS_BANCARIOS[".inlineAddFields"][] = "liquido_pagable";

$tdataABONOS_BANCARIOS[".editFields"] = array();
$tdataABONOS_BANCARIOS[".editFields"][] = "id_func";
$tdataABONOS_BANCARIOS[".editFields"][] = "paterno";
$tdataABONOS_BANCARIOS[".editFields"][] = "materno";
$tdataABONOS_BANCARIOS[".editFields"][] = "nombres";
$tdataABONOS_BANCARIOS[".editFields"][] = "ci";
$tdataABONOS_BANCARIOS[".editFields"][] = "exp";
$tdataABONOS_BANCARIOS[".editFields"][] = "liquido_pagable";

$tdataABONOS_BANCARIOS[".inlineEditFields"] = array();
$tdataABONOS_BANCARIOS[".inlineEditFields"][] = "id_func";
$tdataABONOS_BANCARIOS[".inlineEditFields"][] = "paterno";
$tdataABONOS_BANCARIOS[".inlineEditFields"][] = "materno";
$tdataABONOS_BANCARIOS[".inlineEditFields"][] = "nombres";
$tdataABONOS_BANCARIOS[".inlineEditFields"][] = "ci";
$tdataABONOS_BANCARIOS[".inlineEditFields"][] = "exp";
$tdataABONOS_BANCARIOS[".inlineEditFields"][] = "liquido_pagable";

$tdataABONOS_BANCARIOS[".exportFields"] = array();
$tdataABONOS_BANCARIOS[".exportFields"][] = "id_func";
$tdataABONOS_BANCARIOS[".exportFields"][] = "paterno";
$tdataABONOS_BANCARIOS[".exportFields"][] = "materno";
$tdataABONOS_BANCARIOS[".exportFields"][] = "nombres";
$tdataABONOS_BANCARIOS[".exportFields"][] = "ci";
$tdataABONOS_BANCARIOS[".exportFields"][] = "exp";
$tdataABONOS_BANCARIOS[".exportFields"][] = "num_ac";
$tdataABONOS_BANCARIOS[".exportFields"][] = "liquido_pagable";

$tdataABONOS_BANCARIOS[".importFields"] = array();
$tdataABONOS_BANCARIOS[".importFields"][] = "id_func";
$tdataABONOS_BANCARIOS[".importFields"][] = "paterno";
$tdataABONOS_BANCARIOS[".importFields"][] = "materno";
$tdataABONOS_BANCARIOS[".importFields"][] = "nombres";
$tdataABONOS_BANCARIOS[".importFields"][] = "ci";
$tdataABONOS_BANCARIOS[".importFields"][] = "exp";
$tdataABONOS_BANCARIOS[".importFields"][] = "num_ac";
$tdataABONOS_BANCARIOS[".importFields"][] = "liquido_pagable";

$tdataABONOS_BANCARIOS[".printFields"] = array();
$tdataABONOS_BANCARIOS[".printFields"][] = "id_func";
$tdataABONOS_BANCARIOS[".printFields"][] = "paterno";
$tdataABONOS_BANCARIOS[".printFields"][] = "materno";
$tdataABONOS_BANCARIOS[".printFields"][] = "nombres";
$tdataABONOS_BANCARIOS[".printFields"][] = "ci";
$tdataABONOS_BANCARIOS[".printFields"][] = "exp";
$tdataABONOS_BANCARIOS[".printFields"][] = "num_ac";
$tdataABONOS_BANCARIOS[".printFields"][] = "liquido_pagable";

//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("ABONOS_BANCARIOS","id_func"); 
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
	
		$fdata["strField"] = "id_func"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla.id_func";
	
		
		
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

	

	
	$tdataABONOS_BANCARIOS["id_func"] = $fdata;
//	paterno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "paterno";
	$fdata["GoodName"] = "paterno";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("ABONOS_BANCARIOS","paterno"); 
	$fdata["FieldType"] = 200;
	
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
	
		$fdata["strField"] = "paterno"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla.paterno";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdataABONOS_BANCARIOS["paterno"] = $fdata;
//	materno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "materno";
	$fdata["GoodName"] = "materno";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("ABONOS_BANCARIOS","materno"); 
	$fdata["FieldType"] = 200;
	
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
	
		$fdata["strField"] = "materno"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla.materno";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdataABONOS_BANCARIOS["materno"] = $fdata;
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("ABONOS_BANCARIOS","nombres"); 
	$fdata["FieldType"] = 200;
	
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
	
		$fdata["strField"] = "nombres"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla.nombres";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdataABONOS_BANCARIOS["nombres"] = $fdata;
//	ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ci";
	$fdata["GoodName"] = "ci";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("ABONOS_BANCARIOS","ci"); 
	$fdata["FieldType"] = 200;
	
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
	
		$fdata["strField"] = "ci"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla.ci";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdataABONOS_BANCARIOS["ci"] = $fdata;
//	exp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "exp";
	$fdata["GoodName"] = "exp";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("ABONOS_BANCARIOS","exp"); 
	$fdata["FieldType"] = 200;
	
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
	
		$fdata["strField"] = "exp"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla.exp";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdataABONOS_BANCARIOS["exp"] = $fdata;
//	num_ac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "num_ac";
	$fdata["GoodName"] = "num_ac";
	$fdata["ownerTable"] = "cta_banc";
	$fdata["Label"] = GetFieldLabel("ABONOS_BANCARIOS","num_ac"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "num_ac"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cta_banc.num_ac";
	
		
		
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

	

	
	$tdataABONOS_BANCARIOS["num_ac"] = $fdata;
//	liquido_pagable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "liquido_pagable";
	$fdata["GoodName"] = "liquido_pagable";
	$fdata["ownerTable"] = "t_planilla";
	$fdata["Label"] = GetFieldLabel("ABONOS_BANCARIOS","liquido_pagable"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
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
	
		$fdata["strField"] = "liquido_pagable"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_planilla.liquido_pagable";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdataABONOS_BANCARIOS["liquido_pagable"] = $fdata;

	
$tables_data["ABONOS BANCARIOS"]=&$tdataABONOS_BANCARIOS;
$field_labels["ABONOS_BANCARIOS"] = &$fieldLabelsABONOS_BANCARIOS;
$fieldToolTips["ABONOS BANCARIOS"] = &$fieldToolTipsABONOS_BANCARIOS;
$page_titles["ABONOS_BANCARIOS"] = &$pageTitlesABONOS_BANCARIOS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ABONOS BANCARIOS"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["ABONOS BANCARIOS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ABONOS_BANCARIOS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_planilla.id_func,  t_planilla.paterno,  t_planilla.materno,  t_planilla.nombres,  t_planilla.ci,  t_planilla.exp,  cta_banc.num_ac,  t_planilla.liquido_pagable";
$proto0["m_strFrom"] = "FROM t_planilla  INNER JOIN cta_banc ON t_planilla.id_func = cta_banc.id_func";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY t_planilla.id_func";
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
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "ABONOS BANCARIOS"
));

$proto5["m_sql"] = "t_planilla.id_func";
$proto5["m_srcTableName"] = "ABONOS BANCARIOS";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "paterno",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "ABONOS BANCARIOS"
));

$proto7["m_sql"] = "t_planilla.paterno";
$proto7["m_srcTableName"] = "ABONOS BANCARIOS";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "materno",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "ABONOS BANCARIOS"
));

$proto9["m_sql"] = "t_planilla.materno";
$proto9["m_srcTableName"] = "ABONOS BANCARIOS";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "ABONOS BANCARIOS"
));

$proto11["m_sql"] = "t_planilla.nombres";
$proto11["m_srcTableName"] = "ABONOS BANCARIOS";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "ci",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "ABONOS BANCARIOS"
));

$proto13["m_sql"] = "t_planilla.ci";
$proto13["m_srcTableName"] = "ABONOS BANCARIOS";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "exp",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "ABONOS BANCARIOS"
));

$proto15["m_sql"] = "t_planilla.exp";
$proto15["m_srcTableName"] = "ABONOS BANCARIOS";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "num_ac",
	"m_strTable" => "cta_banc",
	"m_srcTableName" => "ABONOS BANCARIOS"
));

$proto17["m_sql"] = "cta_banc.num_ac";
$proto17["m_srcTableName"] = "ABONOS BANCARIOS";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "liquido_pagable",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "ABONOS BANCARIOS"
));

$proto19["m_sql"] = "t_planilla.liquido_pagable";
$proto19["m_srcTableName"] = "ABONOS BANCARIOS";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "t_planilla";
$proto22["m_srcTableName"] = "ABONOS BANCARIOS";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id_func";
$proto22["m_columns"][] = "fecha_nac";
$proto22["m_columns"][] = "sexo";
$proto22["m_columns"][] = "item_contrato";
$proto22["m_columns"][] = "unidad";
$proto22["m_columns"][] = "cargo";
$proto22["m_columns"][] = "paterno";
$proto22["m_columns"][] = "materno";
$proto22["m_columns"][] = "nombres";
$proto22["m_columns"][] = "ci";
$proto22["m_columns"][] = "exp";
$proto22["m_columns"][] = "nit";
$proto22["m_columns"][] = "fec_ingreso";
$proto22["m_columns"][] = "baja";
$proto22["m_columns"][] = "reasig";
$proto22["m_columns"][] = "haber_basico";
$proto22["m_columns"][] = "dias_trab";
$proto22["m_columns"][] = "haber_percibido";
$proto22["m_columns"][] = "reint";
$proto22["m_columns"][] = "bono_ant";
$proto22["m_columns"][] = "total_ganado";
$proto22["m_columns"][] = "devoluciones";
$proto22["m_columns"][] = "asig_familiar";
$proto22["m_columns"][] = "afp_10";
$proto22["m_columns"][] = "afp_riesgo_1_71";
$proto22["m_columns"][] = "afp_05";
$proto22["m_columns"][] = "afp_ap_sol_0_5";
$proto22["m_columns"][] = "ans_1";
$proto22["m_columns"][] = "rc_iva";
$proto22["m_columns"][] = "retenciones";
$proto22["m_columns"][] = "multa";
$proto22["m_columns"][] = "total_desc";
$proto22["m_columns"][] = "mes";
$proto22["m_columns"][] = "gestion";
$proto22["m_columns"][] = "liquido_pagable";
$proto22["m_columns"][] = "cod_afp";
$proto22["m_columns"][] = "cta_banco";
$proto22["m_columns"][] = "tipo_funcionario";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "t_planilla";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "ABONOS BANCARIOS";
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
												$proto25=array();
$proto25["m_link"] = "SQLL_INNERJOIN";
			$proto26=array();
$proto26["m_strName"] = "cta_banc";
$proto26["m_srcTableName"] = "ABONOS BANCARIOS";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id_cta_banc";
$proto26["m_columns"][] = "id_func";
$proto26["m_columns"][] = "bank";
$proto26["m_columns"][] = "type_ac";
$proto26["m_columns"][] = "num_ac";
$proto26["m_columns"][] = "dist_ac";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "INNER JOIN cta_banc ON t_planilla.id_func = cta_banc.id_func";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "ABONOS BANCARIOS";
$proto27=array();
$proto27["m_sql"] = "t_planilla.id_func = cta_banc.id_func";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "ABONOS BANCARIOS"
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "= cta_banc.id_func";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "t_planilla",
	"m_srcTableName" => "ABONOS BANCARIOS"
));

$proto29["m_column"]=$obj;
$proto29["m_bAsc"] = 1;
$proto29["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto29);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="ABONOS BANCARIOS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ABONOS_BANCARIOS = createSqlQuery_ABONOS_BANCARIOS();


	
								
	
$tdataABONOS_BANCARIOS[".sqlquery"] = $queryData_ABONOS_BANCARIOS;

$tableEvents["ABONOS BANCARIOS"] = new eventsBase;
$tdataABONOS_BANCARIOS[".hasEvents"] = false;

?>