<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_caja = array();	
	$tdatat_caja[".truncateText"] = true;
	$tdatat_caja[".NumberOfChars"] = 80; 
	$tdatat_caja[".ShortName"] = "t_caja";
	$tdatat_caja[".OwnerID"] = "";
	$tdatat_caja[".OriginalTable"] = "t_caja";

//	field labels
$fieldLabelst_caja = array();
$fieldToolTipst_caja = array();
$pageTitlest_caja = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_caja["Spanish"] = array();
	$fieldToolTipst_caja["Spanish"] = array();
	$pageTitlest_caja["Spanish"] = array();
	$fieldLabelst_caja["Spanish"]["id"] = "Id";
	$fieldToolTipst_caja["Spanish"]["id"] = "";
	$fieldLabelst_caja["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipst_caja["Spanish"]["nombre"] = "";
	if (count($fieldToolTipst_caja["Spanish"]))
		$tdatat_caja[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_caja[""] = array();
	$fieldToolTipst_caja[""] = array();
	$pageTitlest_caja[""] = array();
	$fieldLabelst_caja[""]["id"] = "Id";
	$fieldToolTipst_caja[""]["id"] = "";
	$fieldLabelst_caja[""]["nombre"] = "Nombre";
	$fieldToolTipst_caja[""]["nombre"] = "";
	if (count($fieldToolTipst_caja[""]))
		$tdatat_caja[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_caja["English"] = array();
	$fieldToolTipst_caja["English"] = array();
	$pageTitlest_caja["English"] = array();
	$fieldLabelst_caja["English"]["id"] = "Id";
	$fieldToolTipst_caja["English"]["id"] = "";
	$fieldLabelst_caja["English"]["nombre"] = "Nombre";
	$fieldToolTipst_caja["English"]["nombre"] = "";
	if (count($fieldToolTipst_caja["English"]))
		$tdatat_caja[".isUseToolTips"] = true;
}
	
	
	$tdatat_caja[".NCSearch"] = true;



$tdatat_caja[".shortTableName"] = "t_caja";
$tdatat_caja[".nSecOptions"] = 0;
$tdatat_caja[".recsPerRowList"] = 1;
$tdatat_caja[".recsPerRowPrint"] = 1;
$tdatat_caja[".mainTableOwnerID"] = "";
$tdatat_caja[".moveNext"] = 1;
$tdatat_caja[".entityType"] = 0;

$tdatat_caja[".strOriginalTableName"] = "t_caja";




$tdatat_caja[".showAddInPopup"] = false;

$tdatat_caja[".showEditInPopup"] = false;

$tdatat_caja[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_caja[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_caja[".fieldsForRegister"] = array();

$tdatat_caja[".listAjax"] = false;

	$tdatat_caja[".audit"] = false;

	$tdatat_caja[".locking"] = false;

$tdatat_caja[".edit"] = true;
$tdatat_caja[".afterEditAction"] = 1;
$tdatat_caja[".closePopupAfterEdit"] = 1;
$tdatat_caja[".afterEditActionDetTable"] = "";

$tdatat_caja[".add"] = true;
$tdatat_caja[".afterAddAction"] = 1;
$tdatat_caja[".closePopupAfterAdd"] = 1;
$tdatat_caja[".afterAddActionDetTable"] = "";

$tdatat_caja[".list"] = true;

$tdatat_caja[".inlineEdit"] = true;
$tdatat_caja[".inlineAdd"] = true;
$tdatat_caja[".view"] = true;

$tdatat_caja[".import"] = true;

$tdatat_caja[".exportTo"] = true;

$tdatat_caja[".printFriendly"] = true;

$tdatat_caja[".delete"] = true;

$tdatat_caja[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_caja[".searchSaving"] = false;
//

$tdatat_caja[".showSearchPanel"] = true;
		$tdatat_caja[".flexibleSearch"] = true;		

if (isMobile())
	$tdatat_caja[".isUseAjaxSuggest"] = false;
else 
	$tdatat_caja[".isUseAjaxSuggest"] = true;

$tdatat_caja[".rowHighlite"] = true;



$tdatat_caja[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_caja[".isUseTimeForSearch"] = false;





$tdatat_caja[".allSearchFields"] = array();
$tdatat_caja[".filterFields"] = array();
$tdatat_caja[".requiredSearchFields"] = array();

$tdatat_caja[".allSearchFields"][] = "id";
	$tdatat_caja[".allSearchFields"][] = "nombre";
	

$tdatat_caja[".googleLikeFields"] = array();
$tdatat_caja[".googleLikeFields"][] = "id";
$tdatat_caja[".googleLikeFields"][] = "nombre";


$tdatat_caja[".advSearchFields"] = array();
$tdatat_caja[".advSearchFields"][] = "id";
$tdatat_caja[".advSearchFields"][] = "nombre";

$tdatat_caja[".tableType"] = "list";

$tdatat_caja[".printerPageOrientation"] = 0;
$tdatat_caja[".nPrinterPageScale"] = 100;

$tdatat_caja[".nPrinterSplitRecords"] = 40;

$tdatat_caja[".nPrinterPDFSplitRecords"] = 40;



$tdatat_caja[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatat_caja[".pageSize"] = 20;

$tdatat_caja[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_caja[".strOrderBy"] = $tstrOrderBy;

$tdatat_caja[".orderindexes"] = array();

$tdatat_caja[".sqlHead"] = "SELECT id,  	nombre";
$tdatat_caja[".sqlFrom"] = "FROM t_caja";
$tdatat_caja[".sqlWhereExpr"] = "";
$tdatat_caja[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_caja[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_caja[".arrGroupsPerPage"] = $arrGPP;

$tdatat_caja[".highlightSearchResults"] = true;

$tableKeyst_caja = array();
$tableKeyst_caja[] = "id";
$tdatat_caja[".Keys"] = $tableKeyst_caja;

$tdatat_caja[".listFields"] = array();
$tdatat_caja[".listFields"][] = "id";
$tdatat_caja[".listFields"][] = "nombre";

$tdatat_caja[".hideMobileList"] = array();


$tdatat_caja[".viewFields"] = array();
$tdatat_caja[".viewFields"][] = "id";
$tdatat_caja[".viewFields"][] = "nombre";

$tdatat_caja[".addFields"] = array();
$tdatat_caja[".addFields"][] = "nombre";

$tdatat_caja[".masterListFields"] = array();
$tdatat_caja[".masterListFields"][] = "id";
$tdatat_caja[".masterListFields"][] = "nombre";

$tdatat_caja[".inlineAddFields"] = array();
$tdatat_caja[".inlineAddFields"][] = "nombre";

$tdatat_caja[".editFields"] = array();
$tdatat_caja[".editFields"][] = "nombre";

$tdatat_caja[".inlineEditFields"] = array();
$tdatat_caja[".inlineEditFields"][] = "nombre";

$tdatat_caja[".exportFields"] = array();
$tdatat_caja[".exportFields"][] = "id";
$tdatat_caja[".exportFields"][] = "nombre";

$tdatat_caja[".importFields"] = array();
$tdatat_caja[".importFields"][] = "id";
$tdatat_caja[".importFields"][] = "nombre";

$tdatat_caja[".printFields"] = array();
$tdatat_caja[".printFields"][] = "id";
$tdatat_caja[".printFields"][] = "nombre";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "t_caja";
	$fdata["Label"] = GetFieldLabel("t_caja","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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

	

	
	$tdatat_caja["id"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "t_caja";
	$fdata["Label"] = GetFieldLabel("t_caja","nombre"); 
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
	
		$fdata["strField"] = "nombre"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";
	
		
		
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

	

	
	$tdatat_caja["nombre"] = $fdata;

	
$tables_data["t_caja"]=&$tdatat_caja;
$field_labels["t_caja"] = &$fieldLabelst_caja;
$fieldToolTips["t_caja"] = &$fieldToolTipst_caja;
$page_titles["t_caja"] = &$pageTitlest_caja;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_caja"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_caja"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_caja()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre";
$proto0["m_strFrom"] = "FROM t_caja";
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
	"m_strTable" => "t_caja",
	"m_srcTableName" => "t_caja"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "t_caja";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "t_caja",
	"m_srcTableName" => "t_caja"
));

$proto7["m_sql"] = "nombre";
$proto7["m_srcTableName"] = "t_caja";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "t_caja";
$proto10["m_srcTableName"] = "t_caja";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "id";
$proto10["m_columns"][] = "nombre";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "t_caja";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "t_caja";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_caja";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_caja = createSqlQuery_t_caja();


	
		
	
$tdatat_caja[".sqlquery"] = $queryData_t_caja;

$tableEvents["t_caja"] = new eventsBase;
$tdatat_caja[".hasEvents"] = false;

?>