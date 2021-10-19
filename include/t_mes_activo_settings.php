<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_mes_activo = array();	
	$tdatat_mes_activo[".truncateText"] = true;
	$tdatat_mes_activo[".NumberOfChars"] = 80; 
	$tdatat_mes_activo[".ShortName"] = "t_mes_activo";
	$tdatat_mes_activo[".OwnerID"] = "";
	$tdatat_mes_activo[".OriginalTable"] = "t_mes_activo";

//	field labels
$fieldLabelst_mes_activo = array();
$fieldToolTipst_mes_activo = array();
$pageTitlest_mes_activo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_mes_activo["Spanish"] = array();
	$fieldToolTipst_mes_activo["Spanish"] = array();
	$pageTitlest_mes_activo["Spanish"] = array();
	$fieldLabelst_mes_activo["Spanish"]["id_mes"] = "Id Mes";
	$fieldToolTipst_mes_activo["Spanish"]["id_mes"] = "";
	$fieldLabelst_mes_activo["Spanish"]["mes_activo"] = "Mes Activo";
	$fieldToolTipst_mes_activo["Spanish"]["mes_activo"] = "";
	$fieldLabelst_mes_activo["Spanish"]["mes_numerico"] = "Mes Numérico (Periodo)";
	$fieldToolTipst_mes_activo["Spanish"]["mes_numerico"] = "";
	$fieldLabelst_mes_activo["Spanish"]["gestion"] = "Gestión";
	$fieldToolTipst_mes_activo["Spanish"]["gestion"] = "";
	$fieldLabelst_mes_activo["Spanish"]["ufv_mes_anterior"] = "UFV Último día hábil del mes anterior";
	$fieldToolTipst_mes_activo["Spanish"]["ufv_mes_anterior"] = "";
	$fieldLabelst_mes_activo["Spanish"]["ufv_mes_actual"] = "UFV Último día hábil del mes actual";
	$fieldToolTipst_mes_activo["Spanish"]["ufv_mes_actual"] = "";
	if (count($fieldToolTipst_mes_activo["Spanish"]))
		$tdatat_mes_activo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_mes_activo[""] = array();
	$fieldToolTipst_mes_activo[""] = array();
	$pageTitlest_mes_activo[""] = array();
	$fieldLabelst_mes_activo[""]["id_mes"] = "Id Mes";
	$fieldToolTipst_mes_activo[""]["id_mes"] = "";
	$fieldLabelst_mes_activo[""]["mes_activo"] = "Mes Activo";
	$fieldToolTipst_mes_activo[""]["mes_activo"] = "";
	$fieldLabelst_mes_activo[""]["mes_numerico"] = "Mes Numerico";
	$fieldToolTipst_mes_activo[""]["mes_numerico"] = "";
	$fieldLabelst_mes_activo[""]["gestion"] = "Gestion";
	$fieldToolTipst_mes_activo[""]["gestion"] = "";
	$fieldLabelst_mes_activo[""]["ufv_mes_anterior"] = "Ufv Mes Anterior";
	$fieldToolTipst_mes_activo[""]["ufv_mes_anterior"] = "";
	$fieldLabelst_mes_activo[""]["ufv_mes_actual"] = "Ufv Mes Actual";
	$fieldToolTipst_mes_activo[""]["ufv_mes_actual"] = "";
	if (count($fieldToolTipst_mes_activo[""]))
		$tdatat_mes_activo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_mes_activo["English"] = array();
	$fieldToolTipst_mes_activo["English"] = array();
	$pageTitlest_mes_activo["English"] = array();
	$fieldLabelst_mes_activo["English"]["id_mes"] = "Id Mes";
	$fieldToolTipst_mes_activo["English"]["id_mes"] = "";
	$fieldLabelst_mes_activo["English"]["mes_activo"] = "Mes Activo";
	$fieldToolTipst_mes_activo["English"]["mes_activo"] = "";
	$fieldLabelst_mes_activo["English"]["mes_numerico"] = "Mes Numerico";
	$fieldToolTipst_mes_activo["English"]["mes_numerico"] = "";
	$fieldLabelst_mes_activo["English"]["gestion"] = "Gestion";
	$fieldToolTipst_mes_activo["English"]["gestion"] = "";
	$fieldLabelst_mes_activo["English"]["ufv_mes_anterior"] = "Ufv Mes Anterior";
	$fieldToolTipst_mes_activo["English"]["ufv_mes_anterior"] = "";
	$fieldLabelst_mes_activo["English"]["ufv_mes_actual"] = "Ufv Mes Actual";
	$fieldToolTipst_mes_activo["English"]["ufv_mes_actual"] = "";
	if (count($fieldToolTipst_mes_activo["English"]))
		$tdatat_mes_activo[".isUseToolTips"] = true;
}
	
	
	$tdatat_mes_activo[".NCSearch"] = true;



$tdatat_mes_activo[".shortTableName"] = "t_mes_activo";
$tdatat_mes_activo[".nSecOptions"] = 0;
$tdatat_mes_activo[".recsPerRowList"] = 1;
$tdatat_mes_activo[".recsPerRowPrint"] = 1;
$tdatat_mes_activo[".mainTableOwnerID"] = "";
$tdatat_mes_activo[".moveNext"] = 1;
$tdatat_mes_activo[".entityType"] = 0;

$tdatat_mes_activo[".strOriginalTableName"] = "t_mes_activo";




$tdatat_mes_activo[".showAddInPopup"] = false;

$tdatat_mes_activo[".showEditInPopup"] = true;

$tdatat_mes_activo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["edit"] = "edit_basic_2col_center";
$tdatat_mes_activo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_mes_activo[".fieldsForRegister"] = array();

$tdatat_mes_activo[".listAjax"] = false;

	$tdatat_mes_activo[".audit"] = false;

	$tdatat_mes_activo[".locking"] = false;

$tdatat_mes_activo[".edit"] = true;
$tdatat_mes_activo[".afterEditAction"] = 1;
$tdatat_mes_activo[".closePopupAfterEdit"] = 1;
$tdatat_mes_activo[".afterEditActionDetTable"] = "";

$tdatat_mes_activo[".add"] = true;
$tdatat_mes_activo[".afterAddAction"] = 1;
$tdatat_mes_activo[".closePopupAfterAdd"] = 1;
$tdatat_mes_activo[".afterAddActionDetTable"] = "";

$tdatat_mes_activo[".list"] = true;

$tdatat_mes_activo[".inlineEdit"] = true;
$tdatat_mes_activo[".inlineAdd"] = true;





$tdatat_mes_activo[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_mes_activo[".searchSaving"] = false;
//

if (isMobile()){
	$tdatat_mes_activo[".showSearchPanel"] = true;
}
else 
	$tdatat_mes_activo[".showSearchPanel"] = false;

if (isMobile())
	$tdatat_mes_activo[".isUseAjaxSuggest"] = false;
else 
	$tdatat_mes_activo[".isUseAjaxSuggest"] = true;

$tdatat_mes_activo[".rowHighlite"] = true;



$tdatat_mes_activo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_mes_activo[".isUseTimeForSearch"] = false;





$tdatat_mes_activo[".allSearchFields"] = array();
$tdatat_mes_activo[".filterFields"] = array();
$tdatat_mes_activo[".requiredSearchFields"] = array();

$tdatat_mes_activo[".allSearchFields"][] = "mes_activo";
	$tdatat_mes_activo[".allSearchFields"][] = "mes_numerico";
	$tdatat_mes_activo[".allSearchFields"][] = "gestion";
	$tdatat_mes_activo[".allSearchFields"][] = "ufv_mes_anterior";
	$tdatat_mes_activo[".allSearchFields"][] = "ufv_mes_actual";
	

$tdatat_mes_activo[".googleLikeFields"] = array();
$tdatat_mes_activo[".googleLikeFields"][] = "id_mes";
$tdatat_mes_activo[".googleLikeFields"][] = "mes_activo";
$tdatat_mes_activo[".googleLikeFields"][] = "mes_numerico";
$tdatat_mes_activo[".googleLikeFields"][] = "gestion";
$tdatat_mes_activo[".googleLikeFields"][] = "ufv_mes_anterior";
$tdatat_mes_activo[".googleLikeFields"][] = "ufv_mes_actual";


$tdatat_mes_activo[".advSearchFields"] = array();
$tdatat_mes_activo[".advSearchFields"][] = "mes_activo";
$tdatat_mes_activo[".advSearchFields"][] = "mes_numerico";
$tdatat_mes_activo[".advSearchFields"][] = "gestion";
$tdatat_mes_activo[".advSearchFields"][] = "ufv_mes_anterior";
$tdatat_mes_activo[".advSearchFields"][] = "ufv_mes_actual";

$tdatat_mes_activo[".tableType"] = "list";

$tdatat_mes_activo[".printerPageOrientation"] = 0;
$tdatat_mes_activo[".nPrinterPageScale"] = 100;

$tdatat_mes_activo[".nPrinterSplitRecords"] = 40;

$tdatat_mes_activo[".nPrinterPDFSplitRecords"] = 40;



$tdatat_mes_activo[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatat_mes_activo[".pageSize"] = 20;

$tdatat_mes_activo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_mes_activo[".strOrderBy"] = $tstrOrderBy;

$tdatat_mes_activo[".orderindexes"] = array();

$tdatat_mes_activo[".sqlHead"] = "SELECT id_mes,  	mes_activo,  	mes_numerico,  	gestion,  	ufv_mes_anterior,  	ufv_mes_actual";
$tdatat_mes_activo[".sqlFrom"] = "FROM t_mes_activo";
$tdatat_mes_activo[".sqlWhereExpr"] = "";
$tdatat_mes_activo[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_mes_activo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_mes_activo[".arrGroupsPerPage"] = $arrGPP;

$tdatat_mes_activo[".highlightSearchResults"] = true;

$tableKeyst_mes_activo = array();
$tableKeyst_mes_activo[] = "id_mes";
$tdatat_mes_activo[".Keys"] = $tableKeyst_mes_activo;

$tdatat_mes_activo[".listFields"] = array();
$tdatat_mes_activo[".listFields"][] = "ufv_mes_anterior";
$tdatat_mes_activo[".listFields"][] = "ufv_mes_actual";
$tdatat_mes_activo[".listFields"][] = "mes_numerico";
$tdatat_mes_activo[".listFields"][] = "gestion";
$tdatat_mes_activo[".listFields"][] = "mes_activo";

$tdatat_mes_activo[".hideMobileList"] = array();


$tdatat_mes_activo[".viewFields"] = array();

$tdatat_mes_activo[".addFields"] = array();
$tdatat_mes_activo[".addFields"][] = "mes_activo";
$tdatat_mes_activo[".addFields"][] = "mes_numerico";
$tdatat_mes_activo[".addFields"][] = "gestion";
$tdatat_mes_activo[".addFields"][] = "ufv_mes_anterior";
$tdatat_mes_activo[".addFields"][] = "ufv_mes_actual";

$tdatat_mes_activo[".masterListFields"] = array();
$tdatat_mes_activo[".masterListFields"][] = "id_mes";
$tdatat_mes_activo[".masterListFields"][] = "mes_activo";
$tdatat_mes_activo[".masterListFields"][] = "mes_numerico";
$tdatat_mes_activo[".masterListFields"][] = "gestion";
$tdatat_mes_activo[".masterListFields"][] = "ufv_mes_anterior";
$tdatat_mes_activo[".masterListFields"][] = "ufv_mes_actual";

$tdatat_mes_activo[".inlineAddFields"] = array();
$tdatat_mes_activo[".inlineAddFields"][] = "ufv_mes_anterior";
$tdatat_mes_activo[".inlineAddFields"][] = "ufv_mes_actual";
$tdatat_mes_activo[".inlineAddFields"][] = "mes_numerico";
$tdatat_mes_activo[".inlineAddFields"][] = "gestion";
$tdatat_mes_activo[".inlineAddFields"][] = "mes_activo";

$tdatat_mes_activo[".editFields"] = array();
$tdatat_mes_activo[".editFields"][] = "mes_activo";
$tdatat_mes_activo[".editFields"][] = "mes_numerico";
$tdatat_mes_activo[".editFields"][] = "gestion";
$tdatat_mes_activo[".editFields"][] = "ufv_mes_anterior";
$tdatat_mes_activo[".editFields"][] = "ufv_mes_actual";

$tdatat_mes_activo[".inlineEditFields"] = array();
$tdatat_mes_activo[".inlineEditFields"][] = "ufv_mes_anterior";
$tdatat_mes_activo[".inlineEditFields"][] = "ufv_mes_actual";
$tdatat_mes_activo[".inlineEditFields"][] = "mes_numerico";
$tdatat_mes_activo[".inlineEditFields"][] = "gestion";
$tdatat_mes_activo[".inlineEditFields"][] = "mes_activo";

$tdatat_mes_activo[".exportFields"] = array();

$tdatat_mes_activo[".importFields"] = array();

$tdatat_mes_activo[".printFields"] = array();

//	id_mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_mes";
	$fdata["GoodName"] = "id_mes";
	$fdata["ownerTable"] = "t_mes_activo";
	$fdata["Label"] = GetFieldLabel("t_mes_activo","id_mes"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id_mes"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_mes";
	
		
		
				
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
	
	
	
	

	

	
	$tdatat_mes_activo["id_mes"] = $fdata;
//	mes_activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mes_activo";
	$fdata["GoodName"] = "mes_activo";
	$fdata["ownerTable"] = "t_mes_activo";
	$fdata["Label"] = GetFieldLabel("t_mes_activo","mes_activo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "mes_activo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mes_activo";
	
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_mes_activo["mes_activo"] = $fdata;
//	mes_numerico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mes_numerico";
	$fdata["GoodName"] = "mes_numerico";
	$fdata["ownerTable"] = "t_mes_activo";
	$fdata["Label"] = GetFieldLabel("t_mes_activo","mes_numerico"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "mes_numerico"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mes_numerico";
	
		
		
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
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "7";
	$edata["LookupValues"][] = "8";
	$edata["LookupValues"][] = "9";
	$edata["LookupValues"][] = "10";
	$edata["LookupValues"][] = "11";
	$edata["LookupValues"][] = "12";

		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_mes_activo["mes_numerico"] = $fdata;
//	gestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "gestion";
	$fdata["GoodName"] = "gestion";
	$fdata["ownerTable"] = "t_mes_activo";
	$fdata["Label"] = GetFieldLabel("t_mes_activo","gestion"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
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

	

	
	$tdatat_mes_activo["gestion"] = $fdata;
//	ufv_mes_anterior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ufv_mes_anterior";
	$fdata["GoodName"] = "ufv_mes_anterior";
	$fdata["ownerTable"] = "t_mes_activo";
	$fdata["Label"] = GetFieldLabel("t_mes_activo","ufv_mes_anterior"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ufv_mes_anterior"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ufv_mes_anterior";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 5;
	
		
		
		
		
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

	

	
	$tdatat_mes_activo["ufv_mes_anterior"] = $fdata;
//	ufv_mes_actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ufv_mes_actual";
	$fdata["GoodName"] = "ufv_mes_actual";
	$fdata["ownerTable"] = "t_mes_activo";
	$fdata["Label"] = GetFieldLabel("t_mes_activo","ufv_mes_actual"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ufv_mes_actual"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ufv_mes_actual";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 5;
	
		
		
		
		
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

	

	
	$tdatat_mes_activo["ufv_mes_actual"] = $fdata;

	
$tables_data["t_mes_activo"]=&$tdatat_mes_activo;
$field_labels["t_mes_activo"] = &$fieldLabelst_mes_activo;
$fieldToolTips["t_mes_activo"] = &$fieldToolTipst_mes_activo;
$page_titles["t_mes_activo"] = &$pageTitlest_mes_activo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_mes_activo"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_mes_activo"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_mes_activo()
{
$proto1=array();
$proto1["m_strHead"] = "SELECT";
$proto1["m_strFieldList"] = "id_mes,  	mes_activo,  	mes_numerico,  	gestion,  	ufv_mes_anterior,  	ufv_mes_actual";
$proto1["m_strFrom"] = "FROM t_mes_activo";
$proto1["m_strWhere"] = "";
$proto1["m_strOrderBy"] = "";
$proto1["m_strTail"] = "";
			$proto1["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto1["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto1["m_having"] = $obj;
$proto1["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id_mes",
	"m_strTable" => "t_mes_activo",
	"m_srcTableName" => "t_mes_activo"
));

$proto6["m_sql"] = "id_mes";
$proto6["m_srcTableName"] = "t_mes_activo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto1["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "mes_activo",
	"m_strTable" => "t_mes_activo",
	"m_srcTableName" => "t_mes_activo"
));

$proto8["m_sql"] = "mes_activo";
$proto8["m_srcTableName"] = "t_mes_activo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto1["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mes_numerico",
	"m_strTable" => "t_mes_activo",
	"m_srcTableName" => "t_mes_activo"
));

$proto10["m_sql"] = "mes_numerico";
$proto10["m_srcTableName"] = "t_mes_activo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto1["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "gestion",
	"m_strTable" => "t_mes_activo",
	"m_srcTableName" => "t_mes_activo"
));

$proto12["m_sql"] = "gestion";
$proto12["m_srcTableName"] = "t_mes_activo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto1["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ufv_mes_anterior",
	"m_strTable" => "t_mes_activo",
	"m_srcTableName" => "t_mes_activo"
));

$proto14["m_sql"] = "ufv_mes_anterior";
$proto14["m_srcTableName"] = "t_mes_activo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto1["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ufv_mes_actual",
	"m_strTable" => "t_mes_activo",
	"m_srcTableName" => "t_mes_activo"
));

$proto16["m_sql"] = "ufv_mes_actual";
$proto16["m_srcTableName"] = "t_mes_activo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto1["m_fieldlist"][]=$obj;
$proto1["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "t_mes_activo";
$proto19["m_srcTableName"] = "t_mes_activo";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id_mes";
$proto19["m_columns"][] = "mes_activo";
$proto19["m_columns"][] = "mes_numerico";
$proto19["m_columns"][] = "gestion";
$proto19["m_columns"][] = "ufv_mes_anterior";
$proto19["m_columns"][] = "ufv_mes_actual";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "t_mes_activo";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "t_mes_activo";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto1["m_fromlist"][]=$obj;
$proto1["m_groupby"] = array();
$proto1["m_orderby"] = array();
$proto1["m_srcTableName"]="t_mes_activo";		
$obj = new SQLQuery($proto1);

	return $obj;
}
$queryData_t_mes_activo = createSqlQuery_t_mes_activo();


	
						
	
$tdatat_mes_activo[".sqlquery"] = $queryData_t_mes_activo;

include_once(getabspath("include/t_mes_activo_events.php"));
$tableEvents["t_mes_activo"] = new eventclass_t_mes_activo;
$tdatat_mes_activo[".hasEvents"] = true;

?>