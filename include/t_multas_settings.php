<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_multas = array();	
	$tdatat_multas[".truncateText"] = true;
	$tdatat_multas[".NumberOfChars"] = 80; 
	$tdatat_multas[".ShortName"] = "t_multas";
	$tdatat_multas[".OwnerID"] = "";
	$tdatat_multas[".OriginalTable"] = "t_multas";

//	field labels
$fieldLabelst_multas = array();
$fieldToolTipst_multas = array();
$pageTitlest_multas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_multas["Spanish"] = array();
	$fieldToolTipst_multas["Spanish"] = array();
	$pageTitlest_multas["Spanish"] = array();
	$fieldLabelst_multas["Spanish"]["id_multas"] = "Id Multas";
	$fieldToolTipst_multas["Spanish"]["id_multas"] = "";
	$fieldLabelst_multas["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipst_multas["Spanish"]["id_func"] = "";
	$fieldLabelst_multas["Spanish"]["tipo_multa"] = "Tipo de Multa";
	$fieldToolTipst_multas["Spanish"]["tipo_multa"] = "";
	$fieldLabelst_multas["Spanish"]["monto"] = "Monto";
	$fieldToolTipst_multas["Spanish"]["monto"] = "";
	$fieldLabelst_multas["Spanish"]["descripcion"] = "Descripción";
	$fieldToolTipst_multas["Spanish"]["descripcion"] = "";
	$fieldLabelst_multas["Spanish"]["doc_img"] = "Doc. Digital";
	$fieldToolTipst_multas["Spanish"]["doc_img"] = "";
	$fieldLabelst_multas["Spanish"]["mes"] = "Mes";
	$fieldToolTipst_multas["Spanish"]["mes"] = "";
	$fieldLabelst_multas["Spanish"]["gestion"] = "Gestión";
	$fieldToolTipst_multas["Spanish"]["gestion"] = "";
	if (count($fieldToolTipst_multas["Spanish"]))
		$tdatat_multas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_multas[""] = array();
	$fieldToolTipst_multas[""] = array();
	$pageTitlest_multas[""] = array();
	$fieldLabelst_multas[""]["id_multas"] = "Id Multas";
	$fieldToolTipst_multas[""]["id_multas"] = "";
	$fieldLabelst_multas[""]["id_func"] = "Id Func";
	$fieldToolTipst_multas[""]["id_func"] = "";
	$fieldLabelst_multas[""]["tipo_multa"] = "Tipo Multa";
	$fieldToolTipst_multas[""]["tipo_multa"] = "";
	$fieldLabelst_multas[""]["monto"] = "Monto";
	$fieldToolTipst_multas[""]["monto"] = "";
	$fieldLabelst_multas[""]["descripcion"] = "Descripcion";
	$fieldToolTipst_multas[""]["descripcion"] = "";
	$fieldLabelst_multas[""]["doc_img"] = "Doc Img";
	$fieldToolTipst_multas[""]["doc_img"] = "";
	$fieldLabelst_multas[""]["mes"] = "Mes";
	$fieldToolTipst_multas[""]["mes"] = "";
	$fieldLabelst_multas[""]["gestion"] = "Gestion";
	$fieldToolTipst_multas[""]["gestion"] = "";
	if (count($fieldToolTipst_multas[""]))
		$tdatat_multas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_multas["English"] = array();
	$fieldToolTipst_multas["English"] = array();
	$pageTitlest_multas["English"] = array();
	$fieldLabelst_multas["English"]["id_multas"] = "Id Multas";
	$fieldToolTipst_multas["English"]["id_multas"] = "";
	$fieldLabelst_multas["English"]["id_func"] = "Id Func";
	$fieldToolTipst_multas["English"]["id_func"] = "";
	$fieldLabelst_multas["English"]["tipo_multa"] = "Tipo Multa";
	$fieldToolTipst_multas["English"]["tipo_multa"] = "";
	$fieldLabelst_multas["English"]["monto"] = "Monto";
	$fieldToolTipst_multas["English"]["monto"] = "";
	$fieldLabelst_multas["English"]["descripcion"] = "Descripcion";
	$fieldToolTipst_multas["English"]["descripcion"] = "";
	$fieldLabelst_multas["English"]["doc_img"] = "Doc Img";
	$fieldToolTipst_multas["English"]["doc_img"] = "";
	$fieldLabelst_multas["English"]["mes"] = "Mes";
	$fieldToolTipst_multas["English"]["mes"] = "";
	$fieldLabelst_multas["English"]["gestion"] = "Gestion";
	$fieldToolTipst_multas["English"]["gestion"] = "";
	if (count($fieldToolTipst_multas["English"]))
		$tdatat_multas[".isUseToolTips"] = true;
}
	
	
	$tdatat_multas[".NCSearch"] = true;



$tdatat_multas[".shortTableName"] = "t_multas";
$tdatat_multas[".nSecOptions"] = 0;
$tdatat_multas[".recsPerRowList"] = 1;
$tdatat_multas[".recsPerRowPrint"] = 1;
$tdatat_multas[".mainTableOwnerID"] = "";
$tdatat_multas[".moveNext"] = 1;
$tdatat_multas[".entityType"] = 0;

$tdatat_multas[".strOriginalTableName"] = "t_multas";




$tdatat_multas[".showAddInPopup"] = false;

$tdatat_multas[".showEditInPopup"] = false;

$tdatat_multas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_multas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_multas[".fieldsForRegister"] = array();

$tdatat_multas[".listAjax"] = false;

	$tdatat_multas[".audit"] = false;

	$tdatat_multas[".locking"] = false;

$tdatat_multas[".edit"] = true;
$tdatat_multas[".afterEditAction"] = 1;
$tdatat_multas[".closePopupAfterEdit"] = 1;
$tdatat_multas[".afterEditActionDetTable"] = "";

$tdatat_multas[".add"] = true;
$tdatat_multas[".afterAddAction"] = 1;
$tdatat_multas[".closePopupAfterAdd"] = 1;
$tdatat_multas[".afterAddActionDetTable"] = "";

$tdatat_multas[".list"] = true;

$tdatat_multas[".inlineEdit"] = true;
$tdatat_multas[".inlineAdd"] = true;




$tdatat_multas[".delete"] = true;

$tdatat_multas[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_multas[".searchSaving"] = false;
//

$tdatat_multas[".showSearchPanel"] = true;
		$tdatat_multas[".flexibleSearch"] = true;		

if (isMobile())
	$tdatat_multas[".isUseAjaxSuggest"] = false;
else 
	$tdatat_multas[".isUseAjaxSuggest"] = true;

$tdatat_multas[".rowHighlite"] = true;



$tdatat_multas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_multas[".isUseTimeForSearch"] = false;





$tdatat_multas[".allSearchFields"] = array();
$tdatat_multas[".filterFields"] = array();
$tdatat_multas[".requiredSearchFields"] = array();

$tdatat_multas[".allSearchFields"][] = "id_func";
	$tdatat_multas[".allSearchFields"][] = "tipo_multa";
	$tdatat_multas[".allSearchFields"][] = "monto";
	$tdatat_multas[".allSearchFields"][] = "descripcion";
	$tdatat_multas[".allSearchFields"][] = "doc_img";
	$tdatat_multas[".allSearchFields"][] = "mes";
	$tdatat_multas[".allSearchFields"][] = "gestion";
	

$tdatat_multas[".googleLikeFields"] = array();
$tdatat_multas[".googleLikeFields"][] = "id_multas";
$tdatat_multas[".googleLikeFields"][] = "id_func";
$tdatat_multas[".googleLikeFields"][] = "tipo_multa";
$tdatat_multas[".googleLikeFields"][] = "monto";
$tdatat_multas[".googleLikeFields"][] = "descripcion";
$tdatat_multas[".googleLikeFields"][] = "doc_img";
$tdatat_multas[".googleLikeFields"][] = "mes";
$tdatat_multas[".googleLikeFields"][] = "gestion";


$tdatat_multas[".advSearchFields"] = array();
$tdatat_multas[".advSearchFields"][] = "id_func";
$tdatat_multas[".advSearchFields"][] = "tipo_multa";
$tdatat_multas[".advSearchFields"][] = "monto";
$tdatat_multas[".advSearchFields"][] = "descripcion";
$tdatat_multas[".advSearchFields"][] = "doc_img";
$tdatat_multas[".advSearchFields"][] = "mes";
$tdatat_multas[".advSearchFields"][] = "gestion";

$tdatat_multas[".tableType"] = "list";

$tdatat_multas[".printerPageOrientation"] = 0;
$tdatat_multas[".nPrinterPageScale"] = 100;

$tdatat_multas[".nPrinterSplitRecords"] = 40;

$tdatat_multas[".nPrinterPDFSplitRecords"] = 40;



$tdatat_multas[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf

$tdatat_multas[".totalsFields"] = array();
$tdatat_multas[".totalsFields"][] = array(
	"fName" => "monto", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatat_multas[".pageSize"] = 20;

$tdatat_multas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_multas[".strOrderBy"] = $tstrOrderBy;

$tdatat_multas[".orderindexes"] = array();

$tdatat_multas[".sqlHead"] = "SELECT id_multas,  	id_func,  	tipo_multa,  	monto,  	descripcion,  	doc_img,  	mes,  	gestion";
$tdatat_multas[".sqlFrom"] = "FROM t_multas";
$tdatat_multas[".sqlWhereExpr"] = "";
$tdatat_multas[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_multas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_multas[".arrGroupsPerPage"] = $arrGPP;

$tdatat_multas[".highlightSearchResults"] = true;

$tableKeyst_multas = array();
$tableKeyst_multas[] = "id_multas";
$tdatat_multas[".Keys"] = $tableKeyst_multas;

$tdatat_multas[".listFields"] = array();
$tdatat_multas[".listFields"][] = "id_multas";
$tdatat_multas[".listFields"][] = "id_func";
$tdatat_multas[".listFields"][] = "tipo_multa";
$tdatat_multas[".listFields"][] = "monto";
$tdatat_multas[".listFields"][] = "descripcion";
$tdatat_multas[".listFields"][] = "doc_img";
$tdatat_multas[".listFields"][] = "mes";
$tdatat_multas[".listFields"][] = "gestion";

$tdatat_multas[".hideMobileList"] = array();


$tdatat_multas[".viewFields"] = array();

$tdatat_multas[".addFields"] = array();
$tdatat_multas[".addFields"][] = "id_func";
$tdatat_multas[".addFields"][] = "tipo_multa";
$tdatat_multas[".addFields"][] = "monto";
$tdatat_multas[".addFields"][] = "descripcion";
$tdatat_multas[".addFields"][] = "doc_img";
$tdatat_multas[".addFields"][] = "mes";
$tdatat_multas[".addFields"][] = "gestion";

$tdatat_multas[".masterListFields"] = array();
$tdatat_multas[".masterListFields"][] = "id_multas";
$tdatat_multas[".masterListFields"][] = "id_func";
$tdatat_multas[".masterListFields"][] = "tipo_multa";
$tdatat_multas[".masterListFields"][] = "monto";
$tdatat_multas[".masterListFields"][] = "descripcion";
$tdatat_multas[".masterListFields"][] = "doc_img";
$tdatat_multas[".masterListFields"][] = "mes";
$tdatat_multas[".masterListFields"][] = "gestion";

$tdatat_multas[".inlineAddFields"] = array();
$tdatat_multas[".inlineAddFields"][] = "id_func";
$tdatat_multas[".inlineAddFields"][] = "tipo_multa";
$tdatat_multas[".inlineAddFields"][] = "monto";
$tdatat_multas[".inlineAddFields"][] = "descripcion";
$tdatat_multas[".inlineAddFields"][] = "doc_img";
$tdatat_multas[".inlineAddFields"][] = "mes";
$tdatat_multas[".inlineAddFields"][] = "gestion";

$tdatat_multas[".editFields"] = array();
$tdatat_multas[".editFields"][] = "tipo_multa";
$tdatat_multas[".editFields"][] = "monto";
$tdatat_multas[".editFields"][] = "descripcion";
$tdatat_multas[".editFields"][] = "doc_img";
$tdatat_multas[".editFields"][] = "mes";
$tdatat_multas[".editFields"][] = "gestion";

$tdatat_multas[".inlineEditFields"] = array();
$tdatat_multas[".inlineEditFields"][] = "tipo_multa";
$tdatat_multas[".inlineEditFields"][] = "monto";
$tdatat_multas[".inlineEditFields"][] = "descripcion";
$tdatat_multas[".inlineEditFields"][] = "doc_img";
$tdatat_multas[".inlineEditFields"][] = "mes";
$tdatat_multas[".inlineEditFields"][] = "gestion";

$tdatat_multas[".exportFields"] = array();

$tdatat_multas[".importFields"] = array();

$tdatat_multas[".printFields"] = array();

//	id_multas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_multas";
	$fdata["GoodName"] = "id_multas";
	$fdata["ownerTable"] = "t_multas";
	$fdata["Label"] = GetFieldLabel("t_multas","id_multas"); 
	$fdata["FieldType"] = 2;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id_multas"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_multas";
	
		
		
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
	
	
	
	

	

	
	$tdatat_multas["id_multas"] = $fdata;
//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "t_multas";
	$fdata["Label"] = GetFieldLabel("t_multas","id_func"); 
	$fdata["FieldType"] = 2;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
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

	

	
	$tdatat_multas["id_func"] = $fdata;
//	tipo_multa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tipo_multa";
	$fdata["GoodName"] = "tipo_multa";
	$fdata["ownerTable"] = "t_multas";
	$fdata["Label"] = GetFieldLabel("t_multas","tipo_multa"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "tipo_multa"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_multa";
	
		
		
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
	$edata["LookupTable"] = "t_tipo_multa";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "tipo_multa";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "tipo_multa";
	
		
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

	

	
	$tdatat_multas["tipo_multa"] = $fdata;
//	monto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "monto";
	$fdata["GoodName"] = "monto";
	$fdata["ownerTable"] = "t_multas";
	$fdata["Label"] = GetFieldLabel("t_multas","monto"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "monto"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "monto";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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

	

	
	$tdatat_multas["monto"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "t_multas";
	$fdata["Label"] = GetFieldLabel("t_multas","descripcion"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "descripcion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion";
	
		
		
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
			$edata["EditParams"].= " maxlength=1500";
	
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

	

	
	$tdatat_multas["descripcion"] = $fdata;
//	doc_img
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "doc_img";
	$fdata["GoodName"] = "doc_img";
	$fdata["ownerTable"] = "t_multas";
	$fdata["Label"] = GetFieldLabel("t_multas","doc_img"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "doc_img"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_img";
	
		
		
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

	

	
	$tdatat_multas["doc_img"] = $fdata;
//	mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "mes";
	$fdata["GoodName"] = "mes";
	$fdata["ownerTable"] = "t_multas";
	$fdata["Label"] = GetFieldLabel("t_multas","mes"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "mes"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mes";
	
		
		
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

	

	
	$tdatat_multas["mes"] = $fdata;
//	gestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "gestion";
	$fdata["GoodName"] = "gestion";
	$fdata["ownerTable"] = "t_multas";
	$fdata["Label"] = GetFieldLabel("t_multas","gestion"); 
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

	

	
	$tdatat_multas["gestion"] = $fdata;

	
$tables_data["t_multas"]=&$tdatat_multas;
$field_labels["t_multas"] = &$fieldLabelst_multas;
$fieldToolTips["t_multas"] = &$fieldToolTipst_multas;
$page_titles["t_multas"] = &$pageTitlest_multas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_multas"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_multas"] = array();


	
				$strOriginalDetailsTable="t_descuentos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="t_descuentos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "t_descuentos";
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
					$masterTablesData["t_multas"][0] = $masterParams;	
				$masterTablesData["t_multas"][0]["masterKeys"] = array();
	$masterTablesData["t_multas"][0]["masterKeys"][]="id_func";
				$masterTablesData["t_multas"][0]["detailKeys"] = array();
	$masterTablesData["t_multas"][0]["detailKeys"][]="id_func";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_multas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_multas,  	id_func,  	tipo_multa,  	monto,  	descripcion,  	doc_img,  	mes,  	gestion";
$proto0["m_strFrom"] = "FROM t_multas";
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
	"m_strName" => "id_multas",
	"m_strTable" => "t_multas",
	"m_srcTableName" => "t_multas"
));

$proto5["m_sql"] = "id_multas";
$proto5["m_srcTableName"] = "t_multas";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "t_multas",
	"m_srcTableName" => "t_multas"
));

$proto7["m_sql"] = "id_func";
$proto7["m_srcTableName"] = "t_multas";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_multa",
	"m_strTable" => "t_multas",
	"m_srcTableName" => "t_multas"
));

$proto9["m_sql"] = "tipo_multa";
$proto9["m_srcTableName"] = "t_multas";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "monto",
	"m_strTable" => "t_multas",
	"m_srcTableName" => "t_multas"
));

$proto11["m_sql"] = "monto";
$proto11["m_srcTableName"] = "t_multas";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "t_multas",
	"m_srcTableName" => "t_multas"
));

$proto13["m_sql"] = "descripcion";
$proto13["m_srcTableName"] = "t_multas";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "doc_img",
	"m_strTable" => "t_multas",
	"m_srcTableName" => "t_multas"
));

$proto15["m_sql"] = "doc_img";
$proto15["m_srcTableName"] = "t_multas";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "mes",
	"m_strTable" => "t_multas",
	"m_srcTableName" => "t_multas"
));

$proto17["m_sql"] = "mes";
$proto17["m_srcTableName"] = "t_multas";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "gestion",
	"m_strTable" => "t_multas",
	"m_srcTableName" => "t_multas"
));

$proto19["m_sql"] = "gestion";
$proto19["m_srcTableName"] = "t_multas";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "t_multas";
$proto22["m_srcTableName"] = "t_multas";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id_multas";
$proto22["m_columns"][] = "id_func";
$proto22["m_columns"][] = "tipo_multa";
$proto22["m_columns"][] = "monto";
$proto22["m_columns"][] = "descripcion";
$proto22["m_columns"][] = "doc_img";
$proto22["m_columns"][] = "mes";
$proto22["m_columns"][] = "gestion";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "t_multas";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "t_multas";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_multas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_multas = createSqlQuery_t_multas();


	
								
	
$tdatat_multas[".sqlquery"] = $queryData_t_multas;

include_once(getabspath("include/t_multas_events.php"));
$tableEvents["t_multas"] = new eventclass_t_multas;
$tdatat_multas[".hasEvents"] = true;

?>