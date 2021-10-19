<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_salario_minimo = array();	
	$tdatat_salario_minimo[".truncateText"] = true;
	$tdatat_salario_minimo[".NumberOfChars"] = 80; 
	$tdatat_salario_minimo[".ShortName"] = "t_salario_minimo";
	$tdatat_salario_minimo[".OwnerID"] = "";
	$tdatat_salario_minimo[".OriginalTable"] = "t_salario_minimo";

//	field labels
$fieldLabelst_salario_minimo = array();
$fieldToolTipst_salario_minimo = array();
$pageTitlest_salario_minimo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_salario_minimo["Spanish"] = array();
	$fieldToolTipst_salario_minimo["Spanish"] = array();
	$pageTitlest_salario_minimo["Spanish"] = array();
	$fieldLabelst_salario_minimo["Spanish"]["id_sal"] = "Id Sal";
	$fieldToolTipst_salario_minimo["Spanish"]["id_sal"] = "";
	$fieldLabelst_salario_minimo["Spanish"]["salario_minimo"] = "Salario Minimo";
	$fieldToolTipst_salario_minimo["Spanish"]["salario_minimo"] = "";
	$fieldLabelst_salario_minimo["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipst_salario_minimo["Spanish"]["fecha"] = "";
	$fieldLabelst_salario_minimo["Spanish"]["respaldo_legal"] = "Respaldo Legal";
	$fieldToolTipst_salario_minimo["Spanish"]["respaldo_legal"] = "";
	if (count($fieldToolTipst_salario_minimo["Spanish"]))
		$tdatat_salario_minimo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_salario_minimo[""] = array();
	$fieldToolTipst_salario_minimo[""] = array();
	$pageTitlest_salario_minimo[""] = array();
	$fieldLabelst_salario_minimo[""]["id_sal"] = "Id Sal";
	$fieldToolTipst_salario_minimo[""]["id_sal"] = "";
	$fieldLabelst_salario_minimo[""]["salario_minimo"] = "Salario Minimo";
	$fieldToolTipst_salario_minimo[""]["salario_minimo"] = "";
	$fieldLabelst_salario_minimo[""]["fecha"] = "Fecha";
	$fieldToolTipst_salario_minimo[""]["fecha"] = "";
	$fieldLabelst_salario_minimo[""]["respaldo_legal"] = "Respaldo Legal";
	$fieldToolTipst_salario_minimo[""]["respaldo_legal"] = "";
	if (count($fieldToolTipst_salario_minimo[""]))
		$tdatat_salario_minimo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_salario_minimo["English"] = array();
	$fieldToolTipst_salario_minimo["English"] = array();
	$pageTitlest_salario_minimo["English"] = array();
	$fieldLabelst_salario_minimo["English"]["id_sal"] = "Id Sal";
	$fieldToolTipst_salario_minimo["English"]["id_sal"] = "";
	$fieldLabelst_salario_minimo["English"]["salario_minimo"] = "Salario Minimo";
	$fieldToolTipst_salario_minimo["English"]["salario_minimo"] = "";
	$fieldLabelst_salario_minimo["English"]["fecha"] = "Fecha";
	$fieldToolTipst_salario_minimo["English"]["fecha"] = "";
	$fieldLabelst_salario_minimo["English"]["respaldo_legal"] = "Respaldo Legal";
	$fieldToolTipst_salario_minimo["English"]["respaldo_legal"] = "";
	if (count($fieldToolTipst_salario_minimo["English"]))
		$tdatat_salario_minimo[".isUseToolTips"] = true;
}
	
	
	$tdatat_salario_minimo[".NCSearch"] = true;



$tdatat_salario_minimo[".shortTableName"] = "t_salario_minimo";
$tdatat_salario_minimo[".nSecOptions"] = 0;
$tdatat_salario_minimo[".recsPerRowList"] = 1;
$tdatat_salario_minimo[".recsPerRowPrint"] = 1;
$tdatat_salario_minimo[".mainTableOwnerID"] = "";
$tdatat_salario_minimo[".moveNext"] = 1;
$tdatat_salario_minimo[".entityType"] = 0;

$tdatat_salario_minimo[".strOriginalTableName"] = "t_salario_minimo";




$tdatat_salario_minimo[".showAddInPopup"] = false;

$tdatat_salario_minimo[".showEditInPopup"] = false;

$tdatat_salario_minimo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_salario_minimo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_salario_minimo[".fieldsForRegister"] = array();

$tdatat_salario_minimo[".listAjax"] = false;

	$tdatat_salario_minimo[".audit"] = false;

	$tdatat_salario_minimo[".locking"] = false;

$tdatat_salario_minimo[".edit"] = true;
$tdatat_salario_minimo[".afterEditAction"] = 1;
$tdatat_salario_minimo[".closePopupAfterEdit"] = 1;
$tdatat_salario_minimo[".afterEditActionDetTable"] = "";

$tdatat_salario_minimo[".add"] = true;
$tdatat_salario_minimo[".afterAddAction"] = 1;
$tdatat_salario_minimo[".closePopupAfterAdd"] = 1;
$tdatat_salario_minimo[".afterAddActionDetTable"] = "";

$tdatat_salario_minimo[".list"] = true;

$tdatat_salario_minimo[".inlineEdit"] = true;
$tdatat_salario_minimo[".inlineAdd"] = true;




$tdatat_salario_minimo[".delete"] = true;

$tdatat_salario_minimo[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_salario_minimo[".searchSaving"] = false;
//

$tdatat_salario_minimo[".showSearchPanel"] = true;
		$tdatat_salario_minimo[".flexibleSearch"] = true;		

if (isMobile())
	$tdatat_salario_minimo[".isUseAjaxSuggest"] = false;
else 
	$tdatat_salario_minimo[".isUseAjaxSuggest"] = true;

$tdatat_salario_minimo[".rowHighlite"] = true;



$tdatat_salario_minimo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_salario_minimo[".isUseTimeForSearch"] = false;





$tdatat_salario_minimo[".allSearchFields"] = array();
$tdatat_salario_minimo[".filterFields"] = array();
$tdatat_salario_minimo[".requiredSearchFields"] = array();

$tdatat_salario_minimo[".allSearchFields"][] = "id_sal";
	$tdatat_salario_minimo[".allSearchFields"][] = "salario_minimo";
	$tdatat_salario_minimo[".allSearchFields"][] = "fecha";
	$tdatat_salario_minimo[".allSearchFields"][] = "respaldo_legal";
	

$tdatat_salario_minimo[".googleLikeFields"] = array();
$tdatat_salario_minimo[".googleLikeFields"][] = "id_sal";
$tdatat_salario_minimo[".googleLikeFields"][] = "salario_minimo";
$tdatat_salario_minimo[".googleLikeFields"][] = "fecha";
$tdatat_salario_minimo[".googleLikeFields"][] = "respaldo_legal";


$tdatat_salario_minimo[".advSearchFields"] = array();
$tdatat_salario_minimo[".advSearchFields"][] = "id_sal";
$tdatat_salario_minimo[".advSearchFields"][] = "salario_minimo";
$tdatat_salario_minimo[".advSearchFields"][] = "fecha";
$tdatat_salario_minimo[".advSearchFields"][] = "respaldo_legal";

$tdatat_salario_minimo[".tableType"] = "list";

$tdatat_salario_minimo[".printerPageOrientation"] = 0;
$tdatat_salario_minimo[".nPrinterPageScale"] = 100;

$tdatat_salario_minimo[".nPrinterSplitRecords"] = 40;

$tdatat_salario_minimo[".nPrinterPDFSplitRecords"] = 40;



$tdatat_salario_minimo[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatat_salario_minimo[".pageSize"] = 20;

$tdatat_salario_minimo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_salario_minimo[".strOrderBy"] = $tstrOrderBy;

$tdatat_salario_minimo[".orderindexes"] = array();

$tdatat_salario_minimo[".sqlHead"] = "SELECT id_sal,  	salario_minimo,  	fecha,  	respaldo_legal";
$tdatat_salario_minimo[".sqlFrom"] = "FROM t_salario_minimo";
$tdatat_salario_minimo[".sqlWhereExpr"] = "";
$tdatat_salario_minimo[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_salario_minimo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_salario_minimo[".arrGroupsPerPage"] = $arrGPP;

$tdatat_salario_minimo[".highlightSearchResults"] = true;

$tableKeyst_salario_minimo = array();
$tableKeyst_salario_minimo[] = "id_sal";
$tdatat_salario_minimo[".Keys"] = $tableKeyst_salario_minimo;

$tdatat_salario_minimo[".listFields"] = array();
$tdatat_salario_minimo[".listFields"][] = "id_sal";
$tdatat_salario_minimo[".listFields"][] = "salario_minimo";
$tdatat_salario_minimo[".listFields"][] = "fecha";
$tdatat_salario_minimo[".listFields"][] = "respaldo_legal";

$tdatat_salario_minimo[".hideMobileList"] = array();


$tdatat_salario_minimo[".viewFields"] = array();

$tdatat_salario_minimo[".addFields"] = array();
$tdatat_salario_minimo[".addFields"][] = "id_sal";
$tdatat_salario_minimo[".addFields"][] = "salario_minimo";
$tdatat_salario_minimo[".addFields"][] = "fecha";
$tdatat_salario_minimo[".addFields"][] = "respaldo_legal";

$tdatat_salario_minimo[".masterListFields"] = array();
$tdatat_salario_minimo[".masterListFields"][] = "id_sal";
$tdatat_salario_minimo[".masterListFields"][] = "salario_minimo";
$tdatat_salario_minimo[".masterListFields"][] = "fecha";
$tdatat_salario_minimo[".masterListFields"][] = "respaldo_legal";

$tdatat_salario_minimo[".inlineAddFields"] = array();
$tdatat_salario_minimo[".inlineAddFields"][] = "id_sal";
$tdatat_salario_minimo[".inlineAddFields"][] = "salario_minimo";
$tdatat_salario_minimo[".inlineAddFields"][] = "fecha";
$tdatat_salario_minimo[".inlineAddFields"][] = "respaldo_legal";

$tdatat_salario_minimo[".editFields"] = array();
$tdatat_salario_minimo[".editFields"][] = "id_sal";
$tdatat_salario_minimo[".editFields"][] = "salario_minimo";
$tdatat_salario_minimo[".editFields"][] = "fecha";
$tdatat_salario_minimo[".editFields"][] = "respaldo_legal";

$tdatat_salario_minimo[".inlineEditFields"] = array();
$tdatat_salario_minimo[".inlineEditFields"][] = "id_sal";
$tdatat_salario_minimo[".inlineEditFields"][] = "salario_minimo";
$tdatat_salario_minimo[".inlineEditFields"][] = "fecha";
$tdatat_salario_minimo[".inlineEditFields"][] = "respaldo_legal";

$tdatat_salario_minimo[".exportFields"] = array();

$tdatat_salario_minimo[".importFields"] = array();

$tdatat_salario_minimo[".printFields"] = array();

//	id_sal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_sal";
	$fdata["GoodName"] = "id_sal";
	$fdata["ownerTable"] = "t_salario_minimo";
	$fdata["Label"] = GetFieldLabel("t_salario_minimo","id_sal"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id_sal"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_sal";
	
		
		
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

	

	
	$tdatat_salario_minimo["id_sal"] = $fdata;
//	salario_minimo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "salario_minimo";
	$fdata["GoodName"] = "salario_minimo";
	$fdata["ownerTable"] = "t_salario_minimo";
	$fdata["Label"] = GetFieldLabel("t_salario_minimo","salario_minimo"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "salario_minimo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "salario_minimo";
	
		
		
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

	

	
	$tdatat_salario_minimo["salario_minimo"] = $fdata;
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "t_salario_minimo";
	$fdata["Label"] = GetFieldLabel("t_salario_minimo","fecha"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "fecha"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha";
	
		
		
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

	

	
	$tdatat_salario_minimo["fecha"] = $fdata;
//	respaldo_legal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "respaldo_legal";
	$fdata["GoodName"] = "respaldo_legal";
	$fdata["ownerTable"] = "t_salario_minimo";
	$fdata["Label"] = GetFieldLabel("t_salario_minimo","respaldo_legal"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "respaldo_legal"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "respaldo_legal";
	
		
		
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

	

	
	$tdatat_salario_minimo["respaldo_legal"] = $fdata;

	
$tables_data["t_salario_minimo"]=&$tdatat_salario_minimo;
$field_labels["t_salario_minimo"] = &$fieldLabelst_salario_minimo;
$fieldToolTips["t_salario_minimo"] = &$fieldToolTipst_salario_minimo;
$page_titles["t_salario_minimo"] = &$pageTitlest_salario_minimo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_salario_minimo"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_salario_minimo"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_salario_minimo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_sal,  	salario_minimo,  	fecha,  	respaldo_legal";
$proto0["m_strFrom"] = "FROM t_salario_minimo";
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
	"m_strName" => "id_sal",
	"m_strTable" => "t_salario_minimo",
	"m_srcTableName" => "t_salario_minimo"
));

$proto5["m_sql"] = "id_sal";
$proto5["m_srcTableName"] = "t_salario_minimo";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "salario_minimo",
	"m_strTable" => "t_salario_minimo",
	"m_srcTableName" => "t_salario_minimo"
));

$proto7["m_sql"] = "salario_minimo";
$proto7["m_srcTableName"] = "t_salario_minimo";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "t_salario_minimo",
	"m_srcTableName" => "t_salario_minimo"
));

$proto9["m_sql"] = "fecha";
$proto9["m_srcTableName"] = "t_salario_minimo";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "respaldo_legal",
	"m_strTable" => "t_salario_minimo",
	"m_srcTableName" => "t_salario_minimo"
));

$proto11["m_sql"] = "respaldo_legal";
$proto11["m_srcTableName"] = "t_salario_minimo";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "t_salario_minimo";
$proto14["m_srcTableName"] = "t_salario_minimo";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id_sal";
$proto14["m_columns"][] = "salario_minimo";
$proto14["m_columns"][] = "fecha";
$proto14["m_columns"][] = "respaldo_legal";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "t_salario_minimo";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "t_salario_minimo";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_salario_minimo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_salario_minimo = createSqlQuery_t_salario_minimo();


	
				
	
$tdatat_salario_minimo[".sqlquery"] = $queryData_t_salario_minimo;

$tableEvents["t_salario_minimo"] = new eventsBase;
$tdatat_salario_minimo[".hasEvents"] = false;

?>