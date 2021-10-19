<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafuncionario = array();	
	$tdatafuncionario[".truncateText"] = true;
	$tdatafuncionario[".NumberOfChars"] = 80; 
	$tdatafuncionario[".ShortName"] = "funcionario";
	$tdatafuncionario[".OwnerID"] = "";
	$tdatafuncionario[".OriginalTable"] = "funcionario";

//	field labels
$fieldLabelsfuncionario = array();
$fieldToolTipsfuncionario = array();
$pageTitlesfuncionario = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsfuncionario["Spanish"] = array();
	$fieldToolTipsfuncionario["Spanish"] = array();
	$pageTitlesfuncionario["Spanish"] = array();
	$fieldLabelsfuncionario["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipsfuncionario["Spanish"]["id_func"] = "";
	$fieldLabelsfuncionario["Spanish"]["name"] = "NOMBRE";
	$fieldToolTipsfuncionario["Spanish"]["name"] = "";
	$fieldLabelsfuncionario["Spanish"]["l_name1"] = "PATERNO";
	$fieldToolTipsfuncionario["Spanish"]["l_name1"] = "";
	$fieldLabelsfuncionario["Spanish"]["l_name2"] = "MATERNO";
	$fieldToolTipsfuncionario["Spanish"]["l_name2"] = "";
	$fieldLabelsfuncionario["Spanish"]["afp"] = "AFP";
	$fieldToolTipsfuncionario["Spanish"]["afp"] = "";
	$fieldLabelsfuncionario["Spanish"]["nua"] = "NUA";
	$fieldToolTipsfuncionario["Spanish"]["nua"] = "";
	$fieldLabelsfuncionario["Spanish"]["sex"] = "SEXO";
	$fieldToolTipsfuncionario["Spanish"]["sex"] = "";
	$fieldLabelsfuncionario["Spanish"]["ci"] = "CI";
	$fieldToolTipsfuncionario["Spanish"]["ci"] = "";
	$fieldLabelsfuncionario["Spanish"]["expe"] = "LUGAR EXP";
	$fieldToolTipsfuncionario["Spanish"]["expe"] = "";
	$fieldLabelsfuncionario["Spanish"]["date_born"] = "FECHA DE NACIMIENTO";
	$fieldToolTipsfuncionario["Spanish"]["date_born"] = "";
	if (count($fieldToolTipsfuncionario["Spanish"]))
		$tdatafuncionario[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfuncionario[""] = array();
	$fieldToolTipsfuncionario[""] = array();
	$pageTitlesfuncionario[""] = array();
	if (count($fieldToolTipsfuncionario[""]))
		$tdatafuncionario[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfuncionario["English"] = array();
	$fieldToolTipsfuncionario["English"] = array();
	$pageTitlesfuncionario["English"] = array();
	if (count($fieldToolTipsfuncionario["English"]))
		$tdatafuncionario[".isUseToolTips"] = true;
}
	
	
	$tdatafuncionario[".NCSearch"] = true;



$tdatafuncionario[".shortTableName"] = "funcionario";
$tdatafuncionario[".nSecOptions"] = 0;
$tdatafuncionario[".recsPerRowList"] = 1;
$tdatafuncionario[".recsPerRowPrint"] = 1;
$tdatafuncionario[".mainTableOwnerID"] = "";
$tdatafuncionario[".moveNext"] = 1;
$tdatafuncionario[".entityType"] = 0;

$tdatafuncionario[".strOriginalTableName"] = "funcionario";




$tdatafuncionario[".showAddInPopup"] = false;

$tdatafuncionario[".showEditInPopup"] = false;

$tdatafuncionario[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafuncionario[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafuncionario[".fieldsForRegister"] = array();

$tdatafuncionario[".listAjax"] = false;

	$tdatafuncionario[".audit"] = false;

	$tdatafuncionario[".locking"] = false;

$tdatafuncionario[".edit"] = true;
$tdatafuncionario[".afterEditAction"] = 1;
$tdatafuncionario[".closePopupAfterEdit"] = 1;
$tdatafuncionario[".afterEditActionDetTable"] = "";

$tdatafuncionario[".add"] = true;
$tdatafuncionario[".afterAddAction"] = 1;
$tdatafuncionario[".closePopupAfterAdd"] = 1;
$tdatafuncionario[".afterAddActionDetTable"] = "";

$tdatafuncionario[".list"] = true;

$tdatafuncionario[".inlineEdit"] = true;
$tdatafuncionario[".inlineAdd"] = true;




$tdatafuncionario[".delete"] = true;

$tdatafuncionario[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafuncionario[".searchSaving"] = false;
//

$tdatafuncionario[".showSearchPanel"] = true;
		$tdatafuncionario[".flexibleSearch"] = true;		

if (isMobile())
	$tdatafuncionario[".isUseAjaxSuggest"] = false;
else 
	$tdatafuncionario[".isUseAjaxSuggest"] = true;

$tdatafuncionario[".rowHighlite"] = true;



$tdatafuncionario[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuncionario[".isUseTimeForSearch"] = false;





$tdatafuncionario[".allSearchFields"] = array();
$tdatafuncionario[".filterFields"] = array();
$tdatafuncionario[".requiredSearchFields"] = array();

$tdatafuncionario[".allSearchFields"][] = "id_func";
	$tdatafuncionario[".allSearchFields"][] = "name";
	$tdatafuncionario[".allSearchFields"][] = "l_name1";
	$tdatafuncionario[".allSearchFields"][] = "l_name2";
	$tdatafuncionario[".allSearchFields"][] = "afp";
	$tdatafuncionario[".allSearchFields"][] = "nua";
	$tdatafuncionario[".allSearchFields"][] = "sex";
	$tdatafuncionario[".allSearchFields"][] = "ci";
	$tdatafuncionario[".allSearchFields"][] = "expe";
	$tdatafuncionario[".allSearchFields"][] = "date_born";
	

$tdatafuncionario[".googleLikeFields"] = array();
$tdatafuncionario[".googleLikeFields"][] = "id_func";
$tdatafuncionario[".googleLikeFields"][] = "name";
$tdatafuncionario[".googleLikeFields"][] = "l_name1";
$tdatafuncionario[".googleLikeFields"][] = "l_name2";
$tdatafuncionario[".googleLikeFields"][] = "afp";
$tdatafuncionario[".googleLikeFields"][] = "nua";
$tdatafuncionario[".googleLikeFields"][] = "sex";
$tdatafuncionario[".googleLikeFields"][] = "ci";
$tdatafuncionario[".googleLikeFields"][] = "expe";
$tdatafuncionario[".googleLikeFields"][] = "date_born";


$tdatafuncionario[".advSearchFields"] = array();
$tdatafuncionario[".advSearchFields"][] = "id_func";
$tdatafuncionario[".advSearchFields"][] = "name";
$tdatafuncionario[".advSearchFields"][] = "l_name1";
$tdatafuncionario[".advSearchFields"][] = "l_name2";
$tdatafuncionario[".advSearchFields"][] = "afp";
$tdatafuncionario[".advSearchFields"][] = "nua";
$tdatafuncionario[".advSearchFields"][] = "sex";
$tdatafuncionario[".advSearchFields"][] = "ci";
$tdatafuncionario[".advSearchFields"][] = "expe";
$tdatafuncionario[".advSearchFields"][] = "date_born";

$tdatafuncionario[".tableType"] = "list";

$tdatafuncionario[".printerPageOrientation"] = 0;
$tdatafuncionario[".nPrinterPageScale"] = 100;

$tdatafuncionario[".nPrinterSplitRecords"] = 40;

$tdatafuncionario[".nPrinterPDFSplitRecords"] = 40;



$tdatafuncionario[".geocodingEnabled"] = false;




	





// view page pdf
$tdatafuncionario[".isViewPagePDF"] = true;
$tdatafuncionario[".isLandscapeViewPDFOrientation"] = 1;
$tdatafuncionario[".nViewPagePDFScale"] = 100;

// print page pdf


$tdatafuncionario[".pageSize"] = 20;

$tdatafuncionario[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafuncionario[".strOrderBy"] = $tstrOrderBy;

$tdatafuncionario[".orderindexes"] = array();

$tdatafuncionario[".sqlHead"] = "SELECT id_func,  name,  l_name1,  l_name2,  afp,  nua,  sex,  ci,  expe,  date_born";
$tdatafuncionario[".sqlFrom"] = "FROM funcionario";
$tdatafuncionario[".sqlWhereExpr"] = "";
$tdatafuncionario[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafuncionario[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuncionario[".arrGroupsPerPage"] = $arrGPP;

$tdatafuncionario[".highlightSearchResults"] = true;

$tableKeysfuncionario = array();
$tableKeysfuncionario[] = "id_func";
$tdatafuncionario[".Keys"] = $tableKeysfuncionario;

$tdatafuncionario[".listFields"] = array();
$tdatafuncionario[".listFields"][] = "id_func";
$tdatafuncionario[".listFields"][] = "name";
$tdatafuncionario[".listFields"][] = "l_name1";
$tdatafuncionario[".listFields"][] = "l_name2";
$tdatafuncionario[".listFields"][] = "afp";
$tdatafuncionario[".listFields"][] = "nua";
$tdatafuncionario[".listFields"][] = "sex";
$tdatafuncionario[".listFields"][] = "ci";
$tdatafuncionario[".listFields"][] = "expe";
$tdatafuncionario[".listFields"][] = "date_born";

$tdatafuncionario[".hideMobileList"] = array();


$tdatafuncionario[".viewFields"] = array();

$tdatafuncionario[".addFields"] = array();
$tdatafuncionario[".addFields"][] = "name";
$tdatafuncionario[".addFields"][] = "l_name1";
$tdatafuncionario[".addFields"][] = "l_name2";
$tdatafuncionario[".addFields"][] = "afp";
$tdatafuncionario[".addFields"][] = "nua";
$tdatafuncionario[".addFields"][] = "sex";
$tdatafuncionario[".addFields"][] = "ci";
$tdatafuncionario[".addFields"][] = "expe";
$tdatafuncionario[".addFields"][] = "date_born";

$tdatafuncionario[".masterListFields"] = array();
$tdatafuncionario[".masterListFields"][] = "id_func";
$tdatafuncionario[".masterListFields"][] = "name";
$tdatafuncionario[".masterListFields"][] = "l_name1";
$tdatafuncionario[".masterListFields"][] = "l_name2";
$tdatafuncionario[".masterListFields"][] = "afp";
$tdatafuncionario[".masterListFields"][] = "nua";
$tdatafuncionario[".masterListFields"][] = "sex";
$tdatafuncionario[".masterListFields"][] = "ci";
$tdatafuncionario[".masterListFields"][] = "expe";
$tdatafuncionario[".masterListFields"][] = "date_born";

$tdatafuncionario[".inlineAddFields"] = array();
$tdatafuncionario[".inlineAddFields"][] = "name";
$tdatafuncionario[".inlineAddFields"][] = "l_name1";
$tdatafuncionario[".inlineAddFields"][] = "l_name2";
$tdatafuncionario[".inlineAddFields"][] = "afp";
$tdatafuncionario[".inlineAddFields"][] = "nua";
$tdatafuncionario[".inlineAddFields"][] = "sex";
$tdatafuncionario[".inlineAddFields"][] = "ci";
$tdatafuncionario[".inlineAddFields"][] = "expe";
$tdatafuncionario[".inlineAddFields"][] = "date_born";

$tdatafuncionario[".editFields"] = array();
$tdatafuncionario[".editFields"][] = "name";
$tdatafuncionario[".editFields"][] = "l_name1";
$tdatafuncionario[".editFields"][] = "l_name2";
$tdatafuncionario[".editFields"][] = "afp";
$tdatafuncionario[".editFields"][] = "nua";
$tdatafuncionario[".editFields"][] = "sex";
$tdatafuncionario[".editFields"][] = "ci";
$tdatafuncionario[".editFields"][] = "expe";
$tdatafuncionario[".editFields"][] = "date_born";

$tdatafuncionario[".inlineEditFields"] = array();
$tdatafuncionario[".inlineEditFields"][] = "name";
$tdatafuncionario[".inlineEditFields"][] = "l_name1";
$tdatafuncionario[".inlineEditFields"][] = "l_name2";
$tdatafuncionario[".inlineEditFields"][] = "afp";
$tdatafuncionario[".inlineEditFields"][] = "nua";
$tdatafuncionario[".inlineEditFields"][] = "sex";
$tdatafuncionario[".inlineEditFields"][] = "ci";
$tdatafuncionario[".inlineEditFields"][] = "expe";
$tdatafuncionario[".inlineEditFields"][] = "date_born";

$tdatafuncionario[".exportFields"] = array();

$tdatafuncionario[".importFields"] = array();

$tdatafuncionario[".printFields"] = array();

//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","id_func"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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

	

	
	$tdatafuncionario["id_func"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";
	
		
		
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
			$edata["EditParams"].= " maxlength=512";
	
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

	

	
	$tdatafuncionario["name"] = $fdata;
//	l_name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "l_name1";
	$fdata["GoodName"] = "l_name1";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","l_name1"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "l_name1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "l_name1";
	
		
		
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
			$edata["EditParams"].= " maxlength=512";
	
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

	

	
	$tdatafuncionario["l_name1"] = $fdata;
//	l_name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "l_name2";
	$fdata["GoodName"] = "l_name2";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","l_name2"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "l_name2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "l_name2";
	
		
		
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
			$edata["EditParams"].= " maxlength=512";
	
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

	

	
	$tdatafuncionario["l_name2"] = $fdata;
//	afp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "afp";
	$fdata["GoodName"] = "afp";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","afp"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "afp"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "afp";
	
		
		
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

	

	
	$tdatafuncionario["afp"] = $fdata;
//	nua
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nua";
	$fdata["GoodName"] = "nua";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","nua"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "nua"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nua";
	
		
		
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

	

	
	$tdatafuncionario["nua"] = $fdata;
//	sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sex";
	$fdata["GoodName"] = "sex";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","sex"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "sex"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sex";
	
		
		
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "F";
	$edata["LookupValues"][] = "M";
	$edata["LookupValues"][] = "";

		
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

	

	
	$tdatafuncionario["sex"] = $fdata;
//	ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ci";
	$fdata["GoodName"] = "ci";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","ci"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ci"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ci";
	
		
		
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
			$edata["EditParams"].= " maxlength=15";
	
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

	

	
	$tdatafuncionario["ci"] = $fdata;
//	expe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "expe";
	$fdata["GoodName"] = "expe";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","expe"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "expe"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "expe";
	
		
		
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "LP";
	$edata["LookupValues"][] = "CBBA";
	$edata["LookupValues"][] = "CH";
	$edata["LookupValues"][] = "PTS";
	$edata["LookupValues"][] = "SCZ";
	$edata["LookupValues"][] = "TRJ";
	$edata["LookupValues"][] = "PND";
	$edata["LookupValues"][] = "BEN";
	$edata["LookupValues"][] = "OR";

		
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

	

	
	$tdatafuncionario["expe"] = $fdata;
//	date_born
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "date_born";
	$fdata["GoodName"] = "date_born";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","date_born"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "date_born"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_born";
	
		
		
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

	

	
	$tdatafuncionario["date_born"] = $fdata;

	
$tables_data["funcionario"]=&$tdatafuncionario;
$field_labels["funcionario"] = &$fieldLabelsfuncionario;
$fieldToolTips["funcionario"] = &$fieldToolTipsfuncionario;
$page_titles["funcionario"] = &$pageTitlesfuncionario;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["funcionario"] = array();
//	t_ingreso
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="t_ingreso";
		$detailsParam["dOriginalTable"] = "t_ingreso";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "t_ingreso";
	$detailsParam["dCaptionTable"] = GetTableCaption("t_ingreso");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 1;
	$detailsParam["previewOnEdit"] = 1;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["funcionario"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["funcionario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["masterKeys"][]="id_func";

				$detailsTablesData["funcionario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["detailKeys"][]="id_func";
//	t_descuentos
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="t_descuentos";
		$detailsParam["dOriginalTable"] = "t_descuentos";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "t_descuentos";
	$detailsParam["dCaptionTable"] = GetTableCaption("t_descuentos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 1;
	$detailsParam["previewOnEdit"] = 1;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["funcionario"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["funcionario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["masterKeys"][]="id_func";

				$detailsTablesData["funcionario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["detailKeys"][]="id_func";
//	cta_banc
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cta_banc";
		$detailsParam["dOriginalTable"] = "cta_banc";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cta_banc";
	$detailsParam["dCaptionTable"] = GetTableCaption("cta_banc");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["funcionario"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["funcionario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["masterKeys"][]="id_func";

				$detailsTablesData["funcionario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["detailKeys"][]="id_func";
//	identificacion_puesto
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="identificacion_puesto";
		$detailsParam["dOriginalTable"] = "identificacion_puesto";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "identificacion_puesto";
	$detailsParam["dCaptionTable"] = GetTableCaption("identificacion_puesto");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 1;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["funcionario"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["funcionario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["masterKeys"][]="id_func";

				$detailsTablesData["funcionario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["detailKeys"][]="id_per";
//	old_cas
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="old_cas";
		$detailsParam["dOriginalTable"] = "old_cas";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "old_cas";
	$detailsParam["dCaptionTable"] = GetTableCaption("old_cas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["funcionario"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["funcionario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["masterKeys"][]="id_func";

				$detailsTablesData["funcionario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["detailKeys"][]="id_per";
//	t_asignaciones
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="t_asignaciones";
		$detailsParam["dOriginalTable"] = "t_asignaciones";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "t_asignaciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("t_asignaciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["funcionario"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["funcionario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["masterKeys"][]="id_func";

				$detailsTablesData["funcionario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["detailKeys"][]="id_asig";
//	soc_secu
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="soc_secu";
		$detailsParam["dOriginalTable"] = "soc_secu";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "soc_secu";
	$detailsParam["dCaptionTable"] = GetTableCaption("soc_secu");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["funcionario"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["funcionario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["masterKeys"][]="id_func";

				$detailsTablesData["funcionario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["detailKeys"][]="id_per";
//	t_tributaria
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="t_tributaria";
		$detailsParam["dOriginalTable"] = "t_tributaria";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "t_tributaria";
	$detailsParam["dCaptionTable"] = GetTableCaption("t_tributaria");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["funcionario"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["funcionario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["masterKeys"][]="id_func";

				$detailsTablesData["funcionario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["detailKeys"][]="id_func_trib";
//	t_documentos
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="t_documentos";
		$detailsParam["dOriginalTable"] = "t_documentos";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "t_documentos";
	$detailsParam["dCaptionTable"] = GetTableCaption("t_documentos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["funcionario"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["funcionario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["masterKeys"][]="id_func";

				$detailsTablesData["funcionario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["detailKeys"][]="id_func";
//	t_sigep
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="t_sigep";
		$detailsParam["dOriginalTable"] = "t_sigep";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "t_sigep";
	$detailsParam["dCaptionTable"] = GetTableCaption("t_sigep");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["funcionario"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["funcionario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["masterKeys"][]="id_func";

				$detailsTablesData["funcionario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["detailKeys"][]="id_func";
//	t_facturas110
	
	

		$dIndex = 10;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="t_facturas110";
		$detailsParam["dOriginalTable"] = "t_facturas110";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "t_facturas110";
	$detailsParam["dCaptionTable"] = GetTableCaption("t_facturas110");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["funcionario"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["funcionario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["masterKeys"][]="id_func";

				$detailsTablesData["funcionario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["detailKeys"][]="id_func";
//	t_doc_file
	
	

		$dIndex = 11;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="t_doc_file";
		$detailsParam["dOriginalTable"] = "t_doc_file";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "t_doc_file";
	$detailsParam["dCaptionTable"] = GetTableCaption("t_doc_file");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["funcionario"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["funcionario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["masterKeys"][]="id_func";

				$detailsTablesData["funcionario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["funcionario"][$dIndex]["detailKeys"][]="id_func";
	
// tables which are master tables for current table (detail)
$masterTablesData["funcionario"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_funcionario()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_func,  name,  l_name1,  l_name2,  afp,  nua,  sex,  ci,  expe,  date_born";
$proto0["m_strFrom"] = "FROM funcionario";
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
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto5["m_sql"] = "id_func";
$proto5["m_srcTableName"] = "funcionario";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto7["m_sql"] = "name";
$proto7["m_srcTableName"] = "funcionario";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "l_name1",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto9["m_sql"] = "l_name1";
$proto9["m_srcTableName"] = "funcionario";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "l_name2",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto11["m_sql"] = "l_name2";
$proto11["m_srcTableName"] = "funcionario";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "afp",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto13["m_sql"] = "afp";
$proto13["m_srcTableName"] = "funcionario";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "nua",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto15["m_sql"] = "nua";
$proto15["m_srcTableName"] = "funcionario";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sex",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto17["m_sql"] = "sex";
$proto17["m_srcTableName"] = "funcionario";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "ci",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto19["m_sql"] = "ci";
$proto19["m_srcTableName"] = "funcionario";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "expe",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto21["m_sql"] = "expe";
$proto21["m_srcTableName"] = "funcionario";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "date_born",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto23["m_sql"] = "date_born";
$proto23["m_srcTableName"] = "funcionario";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "funcionario";
$proto26["m_srcTableName"] = "funcionario";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id_func";
$proto26["m_columns"][] = "estado";
$proto26["m_columns"][] = "name";
$proto26["m_columns"][] = "l_name1";
$proto26["m_columns"][] = "l_name2";
$proto26["m_columns"][] = "l_name_es";
$proto26["m_columns"][] = "nationality";
$proto26["m_columns"][] = "nati";
$proto26["m_columns"][] = "ci";
$proto26["m_columns"][] = "expe";
$proto26["m_columns"][] = "afp";
$proto26["m_columns"][] = "nua";
$proto26["m_columns"][] = "c_status";
$proto26["m_columns"][] = "sex";
$proto26["m_columns"][] = "g_blood";
$proto26["m_columns"][] = "p_email";
$proto26["m_columns"][] = "job_email";
$proto26["m_columns"][] = "adress";
$proto26["m_columns"][] = "place_res";
$proto26["m_columns"][] = "phone_num";
$proto26["m_columns"][] = "cel_num";
$proto26["m_columns"][] = "phone_job";
$proto26["m_columns"][] = "p1_born";
$proto26["m_columns"][] = "p2_born";
$proto26["m_columns"][] = "p3_born";
$proto26["m_columns"][] = "date_born";
$proto26["m_columns"][] = "lic_driv";
$proto26["m_columns"][] = "type_lic";
$proto26["m_columns"][] = "prof";
$proto26["m_columns"][] = "col_prof";
$proto26["m_columns"][] = "num_prof";
$proto26["m_columns"][] = "nit";
$proto26["m_columns"][] = "on_off";
$proto26["m_columns"][] = "last_gra";
$proto26["m_columns"][] = "cole";
$proto26["m_columns"][] = "ciudad_de";
$proto26["m_columns"][] = "anyo_de";
$proto26["m_columns"][] = "title";
$proto26["m_columns"][] = "nro_libreta";
$proto26["m_columns"][] = "matricula";
$proto26["m_columns"][] = "anyo";
$proto26["m_columns"][] = "tipo_libreta";
$proto26["m_columns"][] = "nro_referencia1";
$proto26["m_columns"][] = "nro_referencia2";
$proto26["m_columns"][] = "es_estudiante";
$proto26["m_columns"][] = "nombre_carrera";
$proto26["m_columns"][] = "especialidad";
$proto26["m_columns"][] = "ultimo_anyo";
$proto26["m_columns"][] = "foto";
$proto26["m_columns"][] = "updated_at";
$proto26["m_columns"][] = "created_at";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "funcionario";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "funcionario";
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
$proto0["m_srcTableName"]="funcionario";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_funcionario = createSqlQuery_funcionario();


	
										
	
$tdatafuncionario[".sqlquery"] = $queryData_funcionario;

$tableEvents["funcionario"] = new eventsBase;
$tdatafuncionario[".hasEvents"] = false;

?>