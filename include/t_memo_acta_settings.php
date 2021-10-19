<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_memo_acta = array();	
	$tdatat_memo_acta[".truncateText"] = true;
	$tdatat_memo_acta[".NumberOfChars"] = 80; 
	$tdatat_memo_acta[".ShortName"] = "t_memo_acta";
	$tdatat_memo_acta[".OwnerID"] = "";
	$tdatat_memo_acta[".OriginalTable"] = "t_memo_acta";

//	field labels
$fieldLabelst_memo_acta = array();
$fieldToolTipst_memo_acta = array();
$pageTitlest_memo_acta = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_memo_acta["Spanish"] = array();
	$fieldToolTipst_memo_acta["Spanish"] = array();
	$pageTitlest_memo_acta["Spanish"] = array();
	$fieldLabelst_memo_acta["Spanish"]["id_doc"] = "Id Doc";
	$fieldToolTipst_memo_acta["Spanish"]["id_doc"] = "";
	$fieldLabelst_memo_acta["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipst_memo_acta["Spanish"]["id_func"] = "";
	$fieldLabelst_memo_acta["Spanish"]["tipo_documento"] = "Tipo Documento";
	$fieldToolTipst_memo_acta["Spanish"]["tipo_documento"] = "";
	$fieldLabelst_memo_acta["Spanish"]["documento_dig"] = "Documento Dig";
	$fieldToolTipst_memo_acta["Spanish"]["documento_dig"] = "";
	$fieldLabelst_memo_acta["Spanish"]["fecha_registro"] = "Fecha Registro";
	$fieldToolTipst_memo_acta["Spanish"]["fecha_registro"] = "";
	$fieldLabelst_memo_acta["Spanish"]["detalle"] = "Detalle";
	$fieldToolTipst_memo_acta["Spanish"]["detalle"] = "";
	if (count($fieldToolTipst_memo_acta["Spanish"]))
		$tdatat_memo_acta[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_memo_acta[""] = array();
	$fieldToolTipst_memo_acta[""] = array();
	$pageTitlest_memo_acta[""] = array();
	$fieldLabelst_memo_acta[""]["id_doc"] = "Id Doc";
	$fieldToolTipst_memo_acta[""]["id_doc"] = "";
	$fieldLabelst_memo_acta[""]["id_func"] = "Id Func";
	$fieldToolTipst_memo_acta[""]["id_func"] = "";
	$fieldLabelst_memo_acta[""]["tipo_documento"] = "Tipo Documento";
	$fieldToolTipst_memo_acta[""]["tipo_documento"] = "";
	$fieldLabelst_memo_acta[""]["documento_dig"] = "Documento Dig";
	$fieldToolTipst_memo_acta[""]["documento_dig"] = "";
	$fieldLabelst_memo_acta[""]["fecha_registro"] = "Fecha Registro";
	$fieldToolTipst_memo_acta[""]["fecha_registro"] = "";
	$fieldLabelst_memo_acta[""]["detalle"] = "Detalle";
	$fieldToolTipst_memo_acta[""]["detalle"] = "";
	if (count($fieldToolTipst_memo_acta[""]))
		$tdatat_memo_acta[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_memo_acta["English"] = array();
	$fieldToolTipst_memo_acta["English"] = array();
	$pageTitlest_memo_acta["English"] = array();
	$fieldLabelst_memo_acta["English"]["id_doc"] = "Id Doc";
	$fieldToolTipst_memo_acta["English"]["id_doc"] = "";
	$fieldLabelst_memo_acta["English"]["id_func"] = "Id Func";
	$fieldToolTipst_memo_acta["English"]["id_func"] = "";
	$fieldLabelst_memo_acta["English"]["tipo_documento"] = "Tipo Documento";
	$fieldToolTipst_memo_acta["English"]["tipo_documento"] = "";
	$fieldLabelst_memo_acta["English"]["documento_dig"] = "Documento Dig";
	$fieldToolTipst_memo_acta["English"]["documento_dig"] = "";
	$fieldLabelst_memo_acta["English"]["fecha_registro"] = "Fecha Registro";
	$fieldToolTipst_memo_acta["English"]["fecha_registro"] = "";
	$fieldLabelst_memo_acta["English"]["detalle"] = "Detalle";
	$fieldToolTipst_memo_acta["English"]["detalle"] = "";
	if (count($fieldToolTipst_memo_acta["English"]))
		$tdatat_memo_acta[".isUseToolTips"] = true;
}
	
	
	$tdatat_memo_acta[".NCSearch"] = true;



$tdatat_memo_acta[".shortTableName"] = "t_memo_acta";
$tdatat_memo_acta[".nSecOptions"] = 0;
$tdatat_memo_acta[".recsPerRowList"] = 1;
$tdatat_memo_acta[".recsPerRowPrint"] = 1;
$tdatat_memo_acta[".mainTableOwnerID"] = "";
$tdatat_memo_acta[".moveNext"] = 1;
$tdatat_memo_acta[".entityType"] = 0;

$tdatat_memo_acta[".strOriginalTableName"] = "t_memo_acta";




$tdatat_memo_acta[".showAddInPopup"] = false;

$tdatat_memo_acta[".showEditInPopup"] = false;

$tdatat_memo_acta[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_memo_acta[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_memo_acta[".fieldsForRegister"] = array();

$tdatat_memo_acta[".listAjax"] = false;

	$tdatat_memo_acta[".audit"] = false;

	$tdatat_memo_acta[".locking"] = false;

$tdatat_memo_acta[".edit"] = true;
$tdatat_memo_acta[".afterEditAction"] = 1;
$tdatat_memo_acta[".closePopupAfterEdit"] = 1;
$tdatat_memo_acta[".afterEditActionDetTable"] = "";

$tdatat_memo_acta[".add"] = true;
$tdatat_memo_acta[".afterAddAction"] = 1;
$tdatat_memo_acta[".closePopupAfterAdd"] = 1;
$tdatat_memo_acta[".afterAddActionDetTable"] = "";

$tdatat_memo_acta[".list"] = true;

$tdatat_memo_acta[".inlineEdit"] = true;
$tdatat_memo_acta[".inlineAdd"] = true;
$tdatat_memo_acta[".view"] = true;

$tdatat_memo_acta[".import"] = true;

$tdatat_memo_acta[".exportTo"] = true;

$tdatat_memo_acta[".printFriendly"] = true;

$tdatat_memo_acta[".delete"] = true;

$tdatat_memo_acta[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_memo_acta[".searchSaving"] = false;
//

$tdatat_memo_acta[".showSearchPanel"] = true;
		$tdatat_memo_acta[".flexibleSearch"] = true;		

if (isMobile())
	$tdatat_memo_acta[".isUseAjaxSuggest"] = false;
else 
	$tdatat_memo_acta[".isUseAjaxSuggest"] = true;

$tdatat_memo_acta[".rowHighlite"] = true;



$tdatat_memo_acta[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_memo_acta[".isUseTimeForSearch"] = false;





$tdatat_memo_acta[".allSearchFields"] = array();
$tdatat_memo_acta[".filterFields"] = array();
$tdatat_memo_acta[".requiredSearchFields"] = array();

$tdatat_memo_acta[".allSearchFields"][] = "id_doc";
	$tdatat_memo_acta[".allSearchFields"][] = "id_func";
	$tdatat_memo_acta[".allSearchFields"][] = "tipo_documento";
	$tdatat_memo_acta[".allSearchFields"][] = "documento_dig";
	$tdatat_memo_acta[".allSearchFields"][] = "fecha_registro";
	$tdatat_memo_acta[".allSearchFields"][] = "detalle";
	

$tdatat_memo_acta[".googleLikeFields"] = array();
$tdatat_memo_acta[".googleLikeFields"][] = "id_doc";
$tdatat_memo_acta[".googleLikeFields"][] = "id_func";
$tdatat_memo_acta[".googleLikeFields"][] = "tipo_documento";
$tdatat_memo_acta[".googleLikeFields"][] = "documento_dig";
$tdatat_memo_acta[".googleLikeFields"][] = "fecha_registro";
$tdatat_memo_acta[".googleLikeFields"][] = "detalle";


$tdatat_memo_acta[".advSearchFields"] = array();
$tdatat_memo_acta[".advSearchFields"][] = "id_doc";
$tdatat_memo_acta[".advSearchFields"][] = "id_func";
$tdatat_memo_acta[".advSearchFields"][] = "tipo_documento";
$tdatat_memo_acta[".advSearchFields"][] = "documento_dig";
$tdatat_memo_acta[".advSearchFields"][] = "fecha_registro";
$tdatat_memo_acta[".advSearchFields"][] = "detalle";

$tdatat_memo_acta[".tableType"] = "list";

$tdatat_memo_acta[".printerPageOrientation"] = 0;
$tdatat_memo_acta[".nPrinterPageScale"] = 100;

$tdatat_memo_acta[".nPrinterSplitRecords"] = 40;

$tdatat_memo_acta[".nPrinterPDFSplitRecords"] = 40;



$tdatat_memo_acta[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatat_memo_acta[".pageSize"] = 20;

$tdatat_memo_acta[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_memo_acta[".strOrderBy"] = $tstrOrderBy;

$tdatat_memo_acta[".orderindexes"] = array();

$tdatat_memo_acta[".sqlHead"] = "SELECT id_doc,  	id_func,  	tipo_documento,  	documento_dig,  	fecha_registro,  	detalle";
$tdatat_memo_acta[".sqlFrom"] = "FROM t_memo_acta";
$tdatat_memo_acta[".sqlWhereExpr"] = "";
$tdatat_memo_acta[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_memo_acta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_memo_acta[".arrGroupsPerPage"] = $arrGPP;

$tdatat_memo_acta[".highlightSearchResults"] = true;

$tableKeyst_memo_acta = array();
$tableKeyst_memo_acta[] = "id_doc";
$tdatat_memo_acta[".Keys"] = $tableKeyst_memo_acta;

$tdatat_memo_acta[".listFields"] = array();
$tdatat_memo_acta[".listFields"][] = "id_doc";
$tdatat_memo_acta[".listFields"][] = "id_func";
$tdatat_memo_acta[".listFields"][] = "tipo_documento";
$tdatat_memo_acta[".listFields"][] = "documento_dig";
$tdatat_memo_acta[".listFields"][] = "fecha_registro";
$tdatat_memo_acta[".listFields"][] = "detalle";

$tdatat_memo_acta[".hideMobileList"] = array();


$tdatat_memo_acta[".viewFields"] = array();
$tdatat_memo_acta[".viewFields"][] = "id_doc";
$tdatat_memo_acta[".viewFields"][] = "id_func";
$tdatat_memo_acta[".viewFields"][] = "tipo_documento";
$tdatat_memo_acta[".viewFields"][] = "documento_dig";
$tdatat_memo_acta[".viewFields"][] = "fecha_registro";
$tdatat_memo_acta[".viewFields"][] = "detalle";

$tdatat_memo_acta[".addFields"] = array();
$tdatat_memo_acta[".addFields"][] = "id_func";
$tdatat_memo_acta[".addFields"][] = "tipo_documento";
$tdatat_memo_acta[".addFields"][] = "documento_dig";
$tdatat_memo_acta[".addFields"][] = "fecha_registro";
$tdatat_memo_acta[".addFields"][] = "detalle";

$tdatat_memo_acta[".masterListFields"] = array();
$tdatat_memo_acta[".masterListFields"][] = "id_doc";
$tdatat_memo_acta[".masterListFields"][] = "id_func";
$tdatat_memo_acta[".masterListFields"][] = "tipo_documento";
$tdatat_memo_acta[".masterListFields"][] = "documento_dig";
$tdatat_memo_acta[".masterListFields"][] = "fecha_registro";
$tdatat_memo_acta[".masterListFields"][] = "detalle";

$tdatat_memo_acta[".inlineAddFields"] = array();
$tdatat_memo_acta[".inlineAddFields"][] = "id_func";
$tdatat_memo_acta[".inlineAddFields"][] = "tipo_documento";
$tdatat_memo_acta[".inlineAddFields"][] = "documento_dig";
$tdatat_memo_acta[".inlineAddFields"][] = "fecha_registro";
$tdatat_memo_acta[".inlineAddFields"][] = "detalle";

$tdatat_memo_acta[".editFields"] = array();
$tdatat_memo_acta[".editFields"][] = "id_func";
$tdatat_memo_acta[".editFields"][] = "tipo_documento";
$tdatat_memo_acta[".editFields"][] = "documento_dig";
$tdatat_memo_acta[".editFields"][] = "fecha_registro";
$tdatat_memo_acta[".editFields"][] = "detalle";

$tdatat_memo_acta[".inlineEditFields"] = array();
$tdatat_memo_acta[".inlineEditFields"][] = "id_func";
$tdatat_memo_acta[".inlineEditFields"][] = "tipo_documento";
$tdatat_memo_acta[".inlineEditFields"][] = "documento_dig";
$tdatat_memo_acta[".inlineEditFields"][] = "fecha_registro";
$tdatat_memo_acta[".inlineEditFields"][] = "detalle";

$tdatat_memo_acta[".exportFields"] = array();
$tdatat_memo_acta[".exportFields"][] = "id_doc";
$tdatat_memo_acta[".exportFields"][] = "id_func";
$tdatat_memo_acta[".exportFields"][] = "tipo_documento";
$tdatat_memo_acta[".exportFields"][] = "documento_dig";
$tdatat_memo_acta[".exportFields"][] = "fecha_registro";
$tdatat_memo_acta[".exportFields"][] = "detalle";

$tdatat_memo_acta[".importFields"] = array();
$tdatat_memo_acta[".importFields"][] = "id_doc";
$tdatat_memo_acta[".importFields"][] = "id_func";
$tdatat_memo_acta[".importFields"][] = "tipo_documento";
$tdatat_memo_acta[".importFields"][] = "documento_dig";
$tdatat_memo_acta[".importFields"][] = "fecha_registro";
$tdatat_memo_acta[".importFields"][] = "detalle";

$tdatat_memo_acta[".printFields"] = array();
$tdatat_memo_acta[".printFields"][] = "id_doc";
$tdatat_memo_acta[".printFields"][] = "id_func";
$tdatat_memo_acta[".printFields"][] = "tipo_documento";
$tdatat_memo_acta[".printFields"][] = "documento_dig";
$tdatat_memo_acta[".printFields"][] = "fecha_registro";
$tdatat_memo_acta[".printFields"][] = "detalle";

//	id_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_doc";
	$fdata["GoodName"] = "id_doc";
	$fdata["ownerTable"] = "t_memo_acta";
	$fdata["Label"] = GetFieldLabel("t_memo_acta","id_doc"); 
	$fdata["FieldType"] = 2;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id_doc"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_doc";
	
		
		
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

	

	
	$tdatat_memo_acta["id_doc"] = $fdata;
//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "t_memo_acta";
	$fdata["Label"] = GetFieldLabel("t_memo_acta","id_func"); 
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

	

	
	$tdatat_memo_acta["id_func"] = $fdata;
//	tipo_documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tipo_documento";
	$fdata["GoodName"] = "tipo_documento";
	$fdata["ownerTable"] = "t_memo_acta";
	$fdata["Label"] = GetFieldLabel("t_memo_acta","tipo_documento"); 
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

	

	
	$tdatat_memo_acta["tipo_documento"] = $fdata;
//	documento_dig
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "documento_dig";
	$fdata["GoodName"] = "documento_dig";
	$fdata["ownerTable"] = "t_memo_acta";
	$fdata["Label"] = GetFieldLabel("t_memo_acta","documento_dig"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "documento_dig"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documento_dig";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
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

	

	
	$tdatat_memo_acta["documento_dig"] = $fdata;
//	fecha_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_registro";
	$fdata["GoodName"] = "fecha_registro";
	$fdata["ownerTable"] = "t_memo_acta";
	$fdata["Label"] = GetFieldLabel("t_memo_acta","fecha_registro"); 
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

	

	
	$tdatat_memo_acta["fecha_registro"] = $fdata;
//	detalle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "detalle";
	$fdata["GoodName"] = "detalle";
	$fdata["ownerTable"] = "t_memo_acta";
	$fdata["Label"] = GetFieldLabel("t_memo_acta","detalle"); 
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
	
		$fdata["strField"] = "detalle"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "detalle";
	
		
		
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
			$edata["EditParams"].= " maxlength=1000";
	
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

	

	
	$tdatat_memo_acta["detalle"] = $fdata;

	
$tables_data["t_memo_acta"]=&$tdatat_memo_acta;
$field_labels["t_memo_acta"] = &$fieldLabelst_memo_acta;
$fieldToolTips["t_memo_acta"] = &$fieldToolTipst_memo_acta;
$page_titles["t_memo_acta"] = &$pageTitlest_memo_acta;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_memo_acta"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_memo_acta"] = array();


	
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
					$masterTablesData["t_memo_acta"][0] = $masterParams;	
				$masterTablesData["t_memo_acta"][0]["masterKeys"] = array();
	$masterTablesData["t_memo_acta"][0]["masterKeys"][]="id_func";
				$masterTablesData["t_memo_acta"][0]["detailKeys"] = array();
	$masterTablesData["t_memo_acta"][0]["detailKeys"][]="id_func";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_memo_acta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_doc,  	id_func,  	tipo_documento,  	documento_dig,  	fecha_registro,  	detalle";
$proto0["m_strFrom"] = "FROM t_memo_acta";
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
	"m_strName" => "id_doc",
	"m_strTable" => "t_memo_acta",
	"m_srcTableName" => "t_memo_acta"
));

$proto5["m_sql"] = "id_doc";
$proto5["m_srcTableName"] = "t_memo_acta";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "t_memo_acta",
	"m_srcTableName" => "t_memo_acta"
));

$proto7["m_sql"] = "id_func";
$proto7["m_srcTableName"] = "t_memo_acta";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_documento",
	"m_strTable" => "t_memo_acta",
	"m_srcTableName" => "t_memo_acta"
));

$proto9["m_sql"] = "tipo_documento";
$proto9["m_srcTableName"] = "t_memo_acta";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "documento_dig",
	"m_strTable" => "t_memo_acta",
	"m_srcTableName" => "t_memo_acta"
));

$proto11["m_sql"] = "documento_dig";
$proto11["m_srcTableName"] = "t_memo_acta";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_registro",
	"m_strTable" => "t_memo_acta",
	"m_srcTableName" => "t_memo_acta"
));

$proto13["m_sql"] = "fecha_registro";
$proto13["m_srcTableName"] = "t_memo_acta";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "detalle",
	"m_strTable" => "t_memo_acta",
	"m_srcTableName" => "t_memo_acta"
));

$proto15["m_sql"] = "detalle";
$proto15["m_srcTableName"] = "t_memo_acta";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "t_memo_acta";
$proto18["m_srcTableName"] = "t_memo_acta";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id_doc";
$proto18["m_columns"][] = "id_func";
$proto18["m_columns"][] = "tipo_documento";
$proto18["m_columns"][] = "documento_dig";
$proto18["m_columns"][] = "fecha_registro";
$proto18["m_columns"][] = "detalle";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "t_memo_acta";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "t_memo_acta";
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
$proto0["m_srcTableName"]="t_memo_acta";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_memo_acta = createSqlQuery_t_memo_acta();


	
						
	
$tdatat_memo_acta[".sqlquery"] = $queryData_t_memo_acta;

$tableEvents["t_memo_acta"] = new eventsBase;
$tdatat_memo_acta[".hasEvents"] = false;

?>