<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_documentos = array();	
	$tdatat_documentos[".truncateText"] = true;
	$tdatat_documentos[".NumberOfChars"] = 80; 
	$tdatat_documentos[".ShortName"] = "t_documentos";
	$tdatat_documentos[".OwnerID"] = "";
	$tdatat_documentos[".OriginalTable"] = "t_documentos";

//	field labels
$fieldLabelst_documentos = array();
$fieldToolTipst_documentos = array();
$pageTitlest_documentos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_documentos["Spanish"] = array();
	$fieldToolTipst_documentos["Spanish"] = array();
	$pageTitlest_documentos["Spanish"] = array();
	$fieldLabelst_documentos["Spanish"]["id"] = "Id";
	$fieldToolTipst_documentos["Spanish"]["id"] = "";
	$fieldLabelst_documentos["Spanish"]["id_func"] = "Id Funcionario";
	$fieldToolTipst_documentos["Spanish"]["id_func"] = "";
	$fieldLabelst_documentos["Spanish"]["documento"] = "Documento Digital";
	$fieldToolTipst_documentos["Spanish"]["documento"] = "";
	$fieldLabelst_documentos["Spanish"]["tipo_documento"] = "Tipo de Documento";
	$fieldToolTipst_documentos["Spanish"]["tipo_documento"] = "";
	$fieldLabelst_documentos["Spanish"]["fecha_registro"] = "Fecha de Registro";
	$fieldToolTipst_documentos["Spanish"]["fecha_registro"] = "";
	if (count($fieldToolTipst_documentos["Spanish"]))
		$tdatat_documentos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_documentos[""] = array();
	$fieldToolTipst_documentos[""] = array();
	$pageTitlest_documentos[""] = array();
	$fieldLabelst_documentos[""]["id"] = "Id";
	$fieldToolTipst_documentos[""]["id"] = "";
	$fieldLabelst_documentos[""]["id_func"] = "Id Func";
	$fieldToolTipst_documentos[""]["id_func"] = "";
	$fieldLabelst_documentos[""]["documento"] = "Documento";
	$fieldToolTipst_documentos[""]["documento"] = "";
	$fieldLabelst_documentos[""]["tipo_documento"] = "Tipo Documento";
	$fieldToolTipst_documentos[""]["tipo_documento"] = "";
	$fieldLabelst_documentos[""]["fecha_registro"] = "Fecha Registro";
	$fieldToolTipst_documentos[""]["fecha_registro"] = "";
	if (count($fieldToolTipst_documentos[""]))
		$tdatat_documentos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_documentos["English"] = array();
	$fieldToolTipst_documentos["English"] = array();
	$pageTitlest_documentos["English"] = array();
	$fieldLabelst_documentos["English"]["id"] = "Id";
	$fieldToolTipst_documentos["English"]["id"] = "";
	$fieldLabelst_documentos["English"]["id_func"] = "Id Func";
	$fieldToolTipst_documentos["English"]["id_func"] = "";
	$fieldLabelst_documentos["English"]["documento"] = "Documento";
	$fieldToolTipst_documentos["English"]["documento"] = "";
	$fieldLabelst_documentos["English"]["tipo_documento"] = "Tipo Documento";
	$fieldToolTipst_documentos["English"]["tipo_documento"] = "";
	$fieldLabelst_documentos["English"]["fecha_registro"] = "Fecha Registro";
	$fieldToolTipst_documentos["English"]["fecha_registro"] = "";
	if (count($fieldToolTipst_documentos["English"]))
		$tdatat_documentos[".isUseToolTips"] = true;
}
	
	
	$tdatat_documentos[".NCSearch"] = true;



$tdatat_documentos[".shortTableName"] = "t_documentos";
$tdatat_documentos[".nSecOptions"] = 0;
$tdatat_documentos[".recsPerRowList"] = 1;
$tdatat_documentos[".recsPerRowPrint"] = 1;
$tdatat_documentos[".mainTableOwnerID"] = "";
$tdatat_documentos[".moveNext"] = 1;
$tdatat_documentos[".entityType"] = 0;

$tdatat_documentos[".strOriginalTableName"] = "t_documentos";




$tdatat_documentos[".showAddInPopup"] = false;

$tdatat_documentos[".showEditInPopup"] = false;

$tdatat_documentos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_documentos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_documentos[".fieldsForRegister"] = array();

$tdatat_documentos[".listAjax"] = false;

	$tdatat_documentos[".audit"] = false;

	$tdatat_documentos[".locking"] = false;

$tdatat_documentos[".edit"] = true;
$tdatat_documentos[".afterEditAction"] = 1;
$tdatat_documentos[".closePopupAfterEdit"] = 1;
$tdatat_documentos[".afterEditActionDetTable"] = "";

$tdatat_documentos[".add"] = true;
$tdatat_documentos[".afterAddAction"] = 1;
$tdatat_documentos[".closePopupAfterAdd"] = 1;
$tdatat_documentos[".afterAddActionDetTable"] = "";

$tdatat_documentos[".list"] = true;

$tdatat_documentos[".inlineEdit"] = true;
$tdatat_documentos[".inlineAdd"] = true;
$tdatat_documentos[".view"] = true;




$tdatat_documentos[".delete"] = true;

$tdatat_documentos[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_documentos[".searchSaving"] = false;
//

$tdatat_documentos[".showSearchPanel"] = true;
		$tdatat_documentos[".flexibleSearch"] = true;		

if (isMobile())
	$tdatat_documentos[".isUseAjaxSuggest"] = false;
else 
	$tdatat_documentos[".isUseAjaxSuggest"] = true;

$tdatat_documentos[".rowHighlite"] = true;



$tdatat_documentos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_documentos[".isUseTimeForSearch"] = false;





$tdatat_documentos[".allSearchFields"] = array();
$tdatat_documentos[".filterFields"] = array();
$tdatat_documentos[".requiredSearchFields"] = array();

$tdatat_documentos[".allSearchFields"][] = "id";
	$tdatat_documentos[".allSearchFields"][] = "id_func";
	$tdatat_documentos[".allSearchFields"][] = "tipo_documento";
	$tdatat_documentos[".allSearchFields"][] = "documento";
	$tdatat_documentos[".allSearchFields"][] = "fecha_registro";
	

$tdatat_documentos[".googleLikeFields"] = array();
$tdatat_documentos[".googleLikeFields"][] = "id";
$tdatat_documentos[".googleLikeFields"][] = "id_func";
$tdatat_documentos[".googleLikeFields"][] = "documento";
$tdatat_documentos[".googleLikeFields"][] = "tipo_documento";
$tdatat_documentos[".googleLikeFields"][] = "fecha_registro";


$tdatat_documentos[".advSearchFields"] = array();
$tdatat_documentos[".advSearchFields"][] = "id";
$tdatat_documentos[".advSearchFields"][] = "id_func";
$tdatat_documentos[".advSearchFields"][] = "tipo_documento";
$tdatat_documentos[".advSearchFields"][] = "documento";
$tdatat_documentos[".advSearchFields"][] = "fecha_registro";

$tdatat_documentos[".tableType"] = "list";

$tdatat_documentos[".printerPageOrientation"] = 0;
$tdatat_documentos[".nPrinterPageScale"] = 100;

$tdatat_documentos[".nPrinterSplitRecords"] = 40;

$tdatat_documentos[".nPrinterPDFSplitRecords"] = 40;



$tdatat_documentos[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatat_documentos[".pageSize"] = 20;

$tdatat_documentos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_documentos[".strOrderBy"] = $tstrOrderBy;

$tdatat_documentos[".orderindexes"] = array();

$tdatat_documentos[".sqlHead"] = "SELECT id,  	id_func,  	documento,  	tipo_documento,  	fecha_registro";
$tdatat_documentos[".sqlFrom"] = "FROM t_documentos";
$tdatat_documentos[".sqlWhereExpr"] = "";
$tdatat_documentos[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_documentos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_documentos[".arrGroupsPerPage"] = $arrGPP;

$tdatat_documentos[".highlightSearchResults"] = true;

$tableKeyst_documentos = array();
$tableKeyst_documentos[] = "id";
$tdatat_documentos[".Keys"] = $tableKeyst_documentos;

$tdatat_documentos[".listFields"] = array();
$tdatat_documentos[".listFields"][] = "id";
$tdatat_documentos[".listFields"][] = "id_func";
$tdatat_documentos[".listFields"][] = "tipo_documento";
$tdatat_documentos[".listFields"][] = "documento";
$tdatat_documentos[".listFields"][] = "fecha_registro";

$tdatat_documentos[".hideMobileList"] = array();


$tdatat_documentos[".viewFields"] = array();
$tdatat_documentos[".viewFields"][] = "id";
$tdatat_documentos[".viewFields"][] = "id_func";
$tdatat_documentos[".viewFields"][] = "tipo_documento";
$tdatat_documentos[".viewFields"][] = "documento";
$tdatat_documentos[".viewFields"][] = "fecha_registro";

$tdatat_documentos[".addFields"] = array();
$tdatat_documentos[".addFields"][] = "id_func";
$tdatat_documentos[".addFields"][] = "tipo_documento";
$tdatat_documentos[".addFields"][] = "documento";
$tdatat_documentos[".addFields"][] = "fecha_registro";

$tdatat_documentos[".masterListFields"] = array();
$tdatat_documentos[".masterListFields"][] = "id";
$tdatat_documentos[".masterListFields"][] = "id_func";
$tdatat_documentos[".masterListFields"][] = "tipo_documento";
$tdatat_documentos[".masterListFields"][] = "documento";
$tdatat_documentos[".masterListFields"][] = "fecha_registro";

$tdatat_documentos[".inlineAddFields"] = array();
$tdatat_documentos[".inlineAddFields"][] = "id_func";
$tdatat_documentos[".inlineAddFields"][] = "tipo_documento";
$tdatat_documentos[".inlineAddFields"][] = "documento";
$tdatat_documentos[".inlineAddFields"][] = "fecha_registro";

$tdatat_documentos[".editFields"] = array();
$tdatat_documentos[".editFields"][] = "id_func";
$tdatat_documentos[".editFields"][] = "tipo_documento";
$tdatat_documentos[".editFields"][] = "documento";
$tdatat_documentos[".editFields"][] = "fecha_registro";

$tdatat_documentos[".inlineEditFields"] = array();
$tdatat_documentos[".inlineEditFields"][] = "id_func";
$tdatat_documentos[".inlineEditFields"][] = "tipo_documento";
$tdatat_documentos[".inlineEditFields"][] = "documento";
$tdatat_documentos[".inlineEditFields"][] = "fecha_registro";

$tdatat_documentos[".exportFields"] = array();

$tdatat_documentos[".importFields"] = array();

$tdatat_documentos[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "t_documentos";
	$fdata["Label"] = GetFieldLabel("t_documentos","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";
	
		
		
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

	

	
	$tdatat_documentos["id"] = $fdata;
//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "t_documentos";
	$fdata["Label"] = GetFieldLabel("t_documentos","id_func"); 
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

	

	
	$tdatat_documentos["id_func"] = $fdata;
//	documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "documento";
	$fdata["GoodName"] = "documento";
	$fdata["ownerTable"] = "t_documentos";
	$fdata["Label"] = GetFieldLabel("t_documentos","documento"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "documento"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documento";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "PDF");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_documentos["documento"] = $fdata;
//	tipo_documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tipo_documento";
	$fdata["GoodName"] = "tipo_documento";
	$fdata["ownerTable"] = "t_documentos";
	$fdata["Label"] = GetFieldLabel("t_documentos","tipo_documento"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "tipo_documento"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_documento";
	
		
		
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
	$edata["LookupTable"] = "t_tipo_documento";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "detalle";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "detalle";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
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

	

	
	$tdatat_documentos["tipo_documento"] = $fdata;
//	fecha_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_registro";
	$fdata["GoodName"] = "fecha_registro";
	$fdata["ownerTable"] = "t_documentos";
	$fdata["Label"] = GetFieldLabel("t_documentos","fecha_registro"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "fecha_registro"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_registro";
	
		
		
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

	

	
	$tdatat_documentos["fecha_registro"] = $fdata;

	
$tables_data["t_documentos"]=&$tdatat_documentos;
$field_labels["t_documentos"] = &$fieldLabelst_documentos;
$fieldToolTips["t_documentos"] = &$fieldToolTipst_documentos;
$page_titles["t_documentos"] = &$pageTitlest_documentos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_documentos"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_documentos"] = array();


	
				$strOriginalDetailsTable="funcionario";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="funcionario";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "funcionario";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["t_documentos"][0] = $masterParams;	
				$masterTablesData["t_documentos"][0]["masterKeys"] = array();
	$masterTablesData["t_documentos"][0]["masterKeys"][]="id_func";
				$masterTablesData["t_documentos"][0]["detailKeys"] = array();
	$masterTablesData["t_documentos"][0]["detailKeys"][]="id_func";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_documentos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	id_func,  	documento,  	tipo_documento,  	fecha_registro";
$proto0["m_strFrom"] = "FROM t_documentos";
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
	"m_strName" => "id",
	"m_strTable" => "t_documentos",
	"m_srcTableName" => "t_documentos"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "t_documentos";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "t_documentos",
	"m_srcTableName" => "t_documentos"
));

$proto7["m_sql"] = "id_func";
$proto7["m_srcTableName"] = "t_documentos";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "documento",
	"m_strTable" => "t_documentos",
	"m_srcTableName" => "t_documentos"
));

$proto9["m_sql"] = "documento";
$proto9["m_srcTableName"] = "t_documentos";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_documento",
	"m_strTable" => "t_documentos",
	"m_srcTableName" => "t_documentos"
));

$proto11["m_sql"] = "tipo_documento";
$proto11["m_srcTableName"] = "t_documentos";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_registro",
	"m_strTable" => "t_documentos",
	"m_srcTableName" => "t_documentos"
));

$proto13["m_sql"] = "fecha_registro";
$proto13["m_srcTableName"] = "t_documentos";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "t_documentos";
$proto16["m_srcTableName"] = "t_documentos";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "id_func";
$proto16["m_columns"][] = "documento";
$proto16["m_columns"][] = "tipo_documento";
$proto16["m_columns"][] = "fecha_registro";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "t_documentos";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "t_documentos";
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
$proto0["m_srcTableName"]="t_documentos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_documentos = createSqlQuery_t_documentos();


	
					
	
$tdatat_documentos[".sqlquery"] = $queryData_t_documentos;

$tableEvents["t_documentos"] = new eventsBase;
$tdatat_documentos[".hasEvents"] = false;

?>