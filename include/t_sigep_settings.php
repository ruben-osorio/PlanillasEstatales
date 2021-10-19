<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_sigep = array();	
	$tdatat_sigep[".truncateText"] = true;
	$tdatat_sigep[".NumberOfChars"] = 80; 
	$tdatat_sigep[".ShortName"] = "t_sigep";
	$tdatat_sigep[".OwnerID"] = "";
	$tdatat_sigep[".OriginalTable"] = "t_sigep";

//	field labels
$fieldLabelst_sigep = array();
$fieldToolTipst_sigep = array();
$pageTitlest_sigep = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_sigep["Spanish"] = array();
	$fieldToolTipst_sigep["Spanish"] = array();
	$pageTitlest_sigep["Spanish"] = array();
	$fieldLabelst_sigep["Spanish"]["idsigep"] = "Idsigep";
	$fieldToolTipst_sigep["Spanish"]["idsigep"] = "";
	$fieldLabelst_sigep["Spanish"]["id_func"] = "ID";
	$fieldToolTipst_sigep["Spanish"]["id_func"] = "";
	$fieldLabelst_sigep["Spanish"]["fecha_emision"] = "FECHA DE EMISIÓN";
	$fieldToolTipst_sigep["Spanish"]["fecha_emision"] = "";
	$fieldLabelst_sigep["Spanish"]["gestion"] = "GESTIÓN";
	$fieldToolTipst_sigep["Spanish"]["gestion"] = "";
	$fieldLabelst_sigep["Spanish"]["image"] = "ARCHIVO DIGITAL";
	$fieldToolTipst_sigep["Spanish"]["image"] = "";
	if (count($fieldToolTipst_sigep["Spanish"]))
		$tdatat_sigep[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_sigep[""] = array();
	$fieldToolTipst_sigep[""] = array();
	$pageTitlest_sigep[""] = array();
	$fieldLabelst_sigep[""]["idsigep"] = "Idsigep";
	$fieldToolTipst_sigep[""]["idsigep"] = "";
	$fieldLabelst_sigep[""]["id_func"] = "Id Func";
	$fieldToolTipst_sigep[""]["id_func"] = "";
	$fieldLabelst_sigep[""]["fecha_emision"] = "Fecha Emision";
	$fieldToolTipst_sigep[""]["fecha_emision"] = "";
	$fieldLabelst_sigep[""]["gestion"] = "Gestion";
	$fieldToolTipst_sigep[""]["gestion"] = "";
	$fieldLabelst_sigep[""]["image"] = "Image";
	$fieldToolTipst_sigep[""]["image"] = "";
	if (count($fieldToolTipst_sigep[""]))
		$tdatat_sigep[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_sigep["English"] = array();
	$fieldToolTipst_sigep["English"] = array();
	$pageTitlest_sigep["English"] = array();
	$fieldLabelst_sigep["English"]["idsigep"] = "Idsigep";
	$fieldToolTipst_sigep["English"]["idsigep"] = "";
	$fieldLabelst_sigep["English"]["id_func"] = "Id Func";
	$fieldToolTipst_sigep["English"]["id_func"] = "";
	$fieldLabelst_sigep["English"]["fecha_emision"] = "Fecha Emision";
	$fieldToolTipst_sigep["English"]["fecha_emision"] = "";
	$fieldLabelst_sigep["English"]["gestion"] = "Gestion";
	$fieldToolTipst_sigep["English"]["gestion"] = "";
	$fieldLabelst_sigep["English"]["image"] = "Image";
	$fieldToolTipst_sigep["English"]["image"] = "";
	if (count($fieldToolTipst_sigep["English"]))
		$tdatat_sigep[".isUseToolTips"] = true;
}
	
	
	$tdatat_sigep[".NCSearch"] = true;



$tdatat_sigep[".shortTableName"] = "t_sigep";
$tdatat_sigep[".nSecOptions"] = 0;
$tdatat_sigep[".recsPerRowList"] = 1;
$tdatat_sigep[".recsPerRowPrint"] = 1;
$tdatat_sigep[".mainTableOwnerID"] = "";
$tdatat_sigep[".moveNext"] = 1;
$tdatat_sigep[".entityType"] = 0;

$tdatat_sigep[".strOriginalTableName"] = "t_sigep";




$tdatat_sigep[".showAddInPopup"] = false;

$tdatat_sigep[".showEditInPopup"] = false;

$tdatat_sigep[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_sigep[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_sigep[".fieldsForRegister"] = array();

$tdatat_sigep[".listAjax"] = false;

	$tdatat_sigep[".audit"] = false;

	$tdatat_sigep[".locking"] = false;

$tdatat_sigep[".edit"] = true;
$tdatat_sigep[".afterEditAction"] = 1;
$tdatat_sigep[".closePopupAfterEdit"] = 1;
$tdatat_sigep[".afterEditActionDetTable"] = "";

$tdatat_sigep[".add"] = true;
$tdatat_sigep[".afterAddAction"] = 1;
$tdatat_sigep[".closePopupAfterAdd"] = 1;
$tdatat_sigep[".afterAddActionDetTable"] = "";

$tdatat_sigep[".list"] = true;

$tdatat_sigep[".inlineEdit"] = true;
$tdatat_sigep[".inlineAdd"] = true;




$tdatat_sigep[".delete"] = true;

$tdatat_sigep[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_sigep[".searchSaving"] = false;
//

$tdatat_sigep[".showSearchPanel"] = true;
		$tdatat_sigep[".flexibleSearch"] = true;		

if (isMobile())
	$tdatat_sigep[".isUseAjaxSuggest"] = false;
else 
	$tdatat_sigep[".isUseAjaxSuggest"] = true;

$tdatat_sigep[".rowHighlite"] = true;



$tdatat_sigep[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_sigep[".isUseTimeForSearch"] = false;





$tdatat_sigep[".allSearchFields"] = array();
$tdatat_sigep[".filterFields"] = array();
$tdatat_sigep[".requiredSearchFields"] = array();

$tdatat_sigep[".allSearchFields"][] = "idsigep";
	$tdatat_sigep[".allSearchFields"][] = "id_func";
	$tdatat_sigep[".allSearchFields"][] = "fecha_emision";
	$tdatat_sigep[".allSearchFields"][] = "gestion";
	$tdatat_sigep[".allSearchFields"][] = "image";
	

$tdatat_sigep[".googleLikeFields"] = array();
$tdatat_sigep[".googleLikeFields"][] = "idsigep";
$tdatat_sigep[".googleLikeFields"][] = "id_func";
$tdatat_sigep[".googleLikeFields"][] = "fecha_emision";
$tdatat_sigep[".googleLikeFields"][] = "gestion";
$tdatat_sigep[".googleLikeFields"][] = "image";


$tdatat_sigep[".advSearchFields"] = array();
$tdatat_sigep[".advSearchFields"][] = "idsigep";
$tdatat_sigep[".advSearchFields"][] = "id_func";
$tdatat_sigep[".advSearchFields"][] = "fecha_emision";
$tdatat_sigep[".advSearchFields"][] = "gestion";
$tdatat_sigep[".advSearchFields"][] = "image";

$tdatat_sigep[".tableType"] = "list";

$tdatat_sigep[".printerPageOrientation"] = 0;
$tdatat_sigep[".nPrinterPageScale"] = 100;

$tdatat_sigep[".nPrinterSplitRecords"] = 40;

$tdatat_sigep[".nPrinterPDFSplitRecords"] = 40;



$tdatat_sigep[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatat_sigep[".pageSize"] = 20;

$tdatat_sigep[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_sigep[".strOrderBy"] = $tstrOrderBy;

$tdatat_sigep[".orderindexes"] = array();

$tdatat_sigep[".sqlHead"] = "SELECT idsigep,  	id_func,  	fecha_emision,  	gestion,  	image";
$tdatat_sigep[".sqlFrom"] = "FROM t_sigep";
$tdatat_sigep[".sqlWhereExpr"] = "";
$tdatat_sigep[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_sigep[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_sigep[".arrGroupsPerPage"] = $arrGPP;

$tdatat_sigep[".highlightSearchResults"] = true;

$tableKeyst_sigep = array();
$tableKeyst_sigep[] = "idsigep";
$tdatat_sigep[".Keys"] = $tableKeyst_sigep;

$tdatat_sigep[".listFields"] = array();
$tdatat_sigep[".listFields"][] = "idsigep";
$tdatat_sigep[".listFields"][] = "id_func";
$tdatat_sigep[".listFields"][] = "fecha_emision";
$tdatat_sigep[".listFields"][] = "gestion";
$tdatat_sigep[".listFields"][] = "image";

$tdatat_sigep[".hideMobileList"] = array();


$tdatat_sigep[".viewFields"] = array();

$tdatat_sigep[".addFields"] = array();
$tdatat_sigep[".addFields"][] = "id_func";
$tdatat_sigep[".addFields"][] = "fecha_emision";
$tdatat_sigep[".addFields"][] = "gestion";
$tdatat_sigep[".addFields"][] = "image";

$tdatat_sigep[".masterListFields"] = array();
$tdatat_sigep[".masterListFields"][] = "idsigep";
$tdatat_sigep[".masterListFields"][] = "id_func";
$tdatat_sigep[".masterListFields"][] = "fecha_emision";
$tdatat_sigep[".masterListFields"][] = "gestion";
$tdatat_sigep[".masterListFields"][] = "image";

$tdatat_sigep[".inlineAddFields"] = array();
$tdatat_sigep[".inlineAddFields"][] = "id_func";
$tdatat_sigep[".inlineAddFields"][] = "fecha_emision";
$tdatat_sigep[".inlineAddFields"][] = "gestion";
$tdatat_sigep[".inlineAddFields"][] = "image";

$tdatat_sigep[".editFields"] = array();
$tdatat_sigep[".editFields"][] = "id_func";
$tdatat_sigep[".editFields"][] = "fecha_emision";
$tdatat_sigep[".editFields"][] = "gestion";
$tdatat_sigep[".editFields"][] = "image";

$tdatat_sigep[".inlineEditFields"] = array();
$tdatat_sigep[".inlineEditFields"][] = "id_func";
$tdatat_sigep[".inlineEditFields"][] = "fecha_emision";
$tdatat_sigep[".inlineEditFields"][] = "gestion";
$tdatat_sigep[".inlineEditFields"][] = "image";

$tdatat_sigep[".exportFields"] = array();

$tdatat_sigep[".importFields"] = array();

$tdatat_sigep[".printFields"] = array();

//	idsigep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idsigep";
	$fdata["GoodName"] = "idsigep";
	$fdata["ownerTable"] = "t_sigep";
	$fdata["Label"] = GetFieldLabel("t_sigep","idsigep"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "idsigep"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idsigep";
	
		
		
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

	

	
	$tdatat_sigep["idsigep"] = $fdata;
//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "t_sigep";
	$fdata["Label"] = GetFieldLabel("t_sigep","id_func"); 
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "funcionario";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id_func";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(l_name1,'   ',l_name2, '  ',name)";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_sigep["id_func"] = $fdata;
//	fecha_emision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha_emision";
	$fdata["GoodName"] = "fecha_emision";
	$fdata["ownerTable"] = "t_sigep";
	$fdata["Label"] = GetFieldLabel("t_sigep","fecha_emision"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "fecha_emision"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_emision";
	
		
		
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

	

	
	$tdatat_sigep["fecha_emision"] = $fdata;
//	gestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "gestion";
	$fdata["GoodName"] = "gestion";
	$fdata["ownerTable"] = "t_sigep";
	$fdata["Label"] = GetFieldLabel("t_sigep","gestion"); 
	$fdata["FieldType"] = 2;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "gestion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gestion";
	
		
		
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

	

	
	$tdatat_sigep["gestion"] = $fdata;
//	image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "image";
	$fdata["GoodName"] = "image";
	$fdata["ownerTable"] = "t_sigep";
	$fdata["Label"] = GetFieldLabel("t_sigep","image"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "image"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "image";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
								$vdata["ShowIcon"] = true; 
			
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
			
	
	


		
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_sigep["image"] = $fdata;

	
$tables_data["t_sigep"]=&$tdatat_sigep;
$field_labels["t_sigep"] = &$fieldLabelst_sigep;
$fieldToolTips["t_sigep"] = &$fieldToolTipst_sigep;
$page_titles["t_sigep"] = &$pageTitlest_sigep;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_sigep"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_sigep"] = array();


	
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
					$masterTablesData["t_sigep"][0] = $masterParams;	
				$masterTablesData["t_sigep"][0]["masterKeys"] = array();
	$masterTablesData["t_sigep"][0]["masterKeys"][]="id_func";
				$masterTablesData["t_sigep"][0]["detailKeys"] = array();
	$masterTablesData["t_sigep"][0]["detailKeys"][]="id_func";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_sigep()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idsigep,  	id_func,  	fecha_emision,  	gestion,  	image";
$proto0["m_strFrom"] = "FROM t_sigep";
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
	"m_strName" => "idsigep",
	"m_strTable" => "t_sigep",
	"m_srcTableName" => "t_sigep"
));

$proto5["m_sql"] = "idsigep";
$proto5["m_srcTableName"] = "t_sigep";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "t_sigep",
	"m_srcTableName" => "t_sigep"
));

$proto7["m_sql"] = "id_func";
$proto7["m_srcTableName"] = "t_sigep";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_emision",
	"m_strTable" => "t_sigep",
	"m_srcTableName" => "t_sigep"
));

$proto9["m_sql"] = "fecha_emision";
$proto9["m_srcTableName"] = "t_sigep";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "gestion",
	"m_strTable" => "t_sigep",
	"m_srcTableName" => "t_sigep"
));

$proto11["m_sql"] = "gestion";
$proto11["m_srcTableName"] = "t_sigep";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "image",
	"m_strTable" => "t_sigep",
	"m_srcTableName" => "t_sigep"
));

$proto13["m_sql"] = "image";
$proto13["m_srcTableName"] = "t_sigep";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "t_sigep";
$proto16["m_srcTableName"] = "t_sigep";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "idsigep";
$proto16["m_columns"][] = "id_func";
$proto16["m_columns"][] = "fecha_emision";
$proto16["m_columns"][] = "gestion";
$proto16["m_columns"][] = "image";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "t_sigep";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "t_sigep";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_sigep";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_sigep = createSqlQuery_t_sigep();


	
					
	
$tdatat_sigep[".sqlquery"] = $queryData_t_sigep;

$tableEvents["t_sigep"] = new eventsBase;
$tdatat_sigep[".hasEvents"] = false;

?>