<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_tipo_multa = array();	
	$tdatat_tipo_multa[".truncateText"] = true;
	$tdatat_tipo_multa[".NumberOfChars"] = 80; 
	$tdatat_tipo_multa[".ShortName"] = "t_tipo_multa";
	$tdatat_tipo_multa[".OwnerID"] = "";
	$tdatat_tipo_multa[".OriginalTable"] = "t_tipo_multa";

//	field labels
$fieldLabelst_tipo_multa = array();
$fieldToolTipst_tipo_multa = array();
$pageTitlest_tipo_multa = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_tipo_multa["Spanish"] = array();
	$fieldToolTipst_tipo_multa["Spanish"] = array();
	$pageTitlest_tipo_multa["Spanish"] = array();
	$fieldLabelst_tipo_multa["Spanish"]["id_multa"] = "Id Multa";
	$fieldToolTipst_tipo_multa["Spanish"]["id_multa"] = "";
	$fieldLabelst_tipo_multa["Spanish"]["tipo_multa"] = "Tipo Multa";
	$fieldToolTipst_tipo_multa["Spanish"]["tipo_multa"] = "";
	if (count($fieldToolTipst_tipo_multa["Spanish"]))
		$tdatat_tipo_multa[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_tipo_multa[""] = array();
	$fieldToolTipst_tipo_multa[""] = array();
	$pageTitlest_tipo_multa[""] = array();
	$fieldLabelst_tipo_multa[""]["id_multa"] = "Id Multa";
	$fieldToolTipst_tipo_multa[""]["id_multa"] = "";
	$fieldLabelst_tipo_multa[""]["tipo_multa"] = "Tipo Multa";
	$fieldToolTipst_tipo_multa[""]["tipo_multa"] = "";
	if (count($fieldToolTipst_tipo_multa[""]))
		$tdatat_tipo_multa[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_tipo_multa["English"] = array();
	$fieldToolTipst_tipo_multa["English"] = array();
	$pageTitlest_tipo_multa["English"] = array();
	$fieldLabelst_tipo_multa["English"]["id_multa"] = "Id Multa";
	$fieldToolTipst_tipo_multa["English"]["id_multa"] = "";
	$fieldLabelst_tipo_multa["English"]["tipo_multa"] = "Tipo Multa";
	$fieldToolTipst_tipo_multa["English"]["tipo_multa"] = "";
	if (count($fieldToolTipst_tipo_multa["English"]))
		$tdatat_tipo_multa[".isUseToolTips"] = true;
}
	
	
	$tdatat_tipo_multa[".NCSearch"] = true;



$tdatat_tipo_multa[".shortTableName"] = "t_tipo_multa";
$tdatat_tipo_multa[".nSecOptions"] = 0;
$tdatat_tipo_multa[".recsPerRowList"] = 1;
$tdatat_tipo_multa[".recsPerRowPrint"] = 1;
$tdatat_tipo_multa[".mainTableOwnerID"] = "";
$tdatat_tipo_multa[".moveNext"] = 1;
$tdatat_tipo_multa[".entityType"] = 0;

$tdatat_tipo_multa[".strOriginalTableName"] = "t_tipo_multa";




$tdatat_tipo_multa[".showAddInPopup"] = false;

$tdatat_tipo_multa[".showEditInPopup"] = false;

$tdatat_tipo_multa[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_tipo_multa[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_tipo_multa[".fieldsForRegister"] = array();

$tdatat_tipo_multa[".listAjax"] = false;

	$tdatat_tipo_multa[".audit"] = false;

	$tdatat_tipo_multa[".locking"] = false;

$tdatat_tipo_multa[".edit"] = true;
$tdatat_tipo_multa[".afterEditAction"] = 1;
$tdatat_tipo_multa[".closePopupAfterEdit"] = 1;
$tdatat_tipo_multa[".afterEditActionDetTable"] = "";

$tdatat_tipo_multa[".add"] = true;
$tdatat_tipo_multa[".afterAddAction"] = 1;
$tdatat_tipo_multa[".closePopupAfterAdd"] = 1;
$tdatat_tipo_multa[".afterAddActionDetTable"] = "";

$tdatat_tipo_multa[".list"] = true;

$tdatat_tipo_multa[".inlineEdit"] = true;
$tdatat_tipo_multa[".inlineAdd"] = true;
$tdatat_tipo_multa[".view"] = true;

$tdatat_tipo_multa[".import"] = true;

$tdatat_tipo_multa[".exportTo"] = true;

$tdatat_tipo_multa[".printFriendly"] = true;

$tdatat_tipo_multa[".delete"] = true;

$tdatat_tipo_multa[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_tipo_multa[".searchSaving"] = false;
//

$tdatat_tipo_multa[".showSearchPanel"] = true;
		$tdatat_tipo_multa[".flexibleSearch"] = true;		

if (isMobile())
	$tdatat_tipo_multa[".isUseAjaxSuggest"] = false;
else 
	$tdatat_tipo_multa[".isUseAjaxSuggest"] = true;

$tdatat_tipo_multa[".rowHighlite"] = true;



$tdatat_tipo_multa[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_tipo_multa[".isUseTimeForSearch"] = false;





$tdatat_tipo_multa[".allSearchFields"] = array();
$tdatat_tipo_multa[".filterFields"] = array();
$tdatat_tipo_multa[".requiredSearchFields"] = array();

$tdatat_tipo_multa[".allSearchFields"][] = "id_multa";
	$tdatat_tipo_multa[".allSearchFields"][] = "tipo_multa";
	

$tdatat_tipo_multa[".googleLikeFields"] = array();
$tdatat_tipo_multa[".googleLikeFields"][] = "id_multa";
$tdatat_tipo_multa[".googleLikeFields"][] = "tipo_multa";


$tdatat_tipo_multa[".advSearchFields"] = array();
$tdatat_tipo_multa[".advSearchFields"][] = "id_multa";
$tdatat_tipo_multa[".advSearchFields"][] = "tipo_multa";

$tdatat_tipo_multa[".tableType"] = "list";

$tdatat_tipo_multa[".printerPageOrientation"] = 0;
$tdatat_tipo_multa[".nPrinterPageScale"] = 100;

$tdatat_tipo_multa[".nPrinterSplitRecords"] = 40;

$tdatat_tipo_multa[".nPrinterPDFSplitRecords"] = 40;



$tdatat_tipo_multa[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatat_tipo_multa[".pageSize"] = 20;

$tdatat_tipo_multa[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_tipo_multa[".strOrderBy"] = $tstrOrderBy;

$tdatat_tipo_multa[".orderindexes"] = array();

$tdatat_tipo_multa[".sqlHead"] = "SELECT id_multa,  	tipo_multa";
$tdatat_tipo_multa[".sqlFrom"] = "FROM t_tipo_multa";
$tdatat_tipo_multa[".sqlWhereExpr"] = "";
$tdatat_tipo_multa[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_tipo_multa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_tipo_multa[".arrGroupsPerPage"] = $arrGPP;

$tdatat_tipo_multa[".highlightSearchResults"] = true;

$tableKeyst_tipo_multa = array();
$tableKeyst_tipo_multa[] = "id_multa";
$tdatat_tipo_multa[".Keys"] = $tableKeyst_tipo_multa;

$tdatat_tipo_multa[".listFields"] = array();
$tdatat_tipo_multa[".listFields"][] = "id_multa";
$tdatat_tipo_multa[".listFields"][] = "tipo_multa";

$tdatat_tipo_multa[".hideMobileList"] = array();


$tdatat_tipo_multa[".viewFields"] = array();
$tdatat_tipo_multa[".viewFields"][] = "id_multa";
$tdatat_tipo_multa[".viewFields"][] = "tipo_multa";

$tdatat_tipo_multa[".addFields"] = array();
$tdatat_tipo_multa[".addFields"][] = "tipo_multa";

$tdatat_tipo_multa[".masterListFields"] = array();
$tdatat_tipo_multa[".masterListFields"][] = "id_multa";
$tdatat_tipo_multa[".masterListFields"][] = "tipo_multa";

$tdatat_tipo_multa[".inlineAddFields"] = array();
$tdatat_tipo_multa[".inlineAddFields"][] = "tipo_multa";

$tdatat_tipo_multa[".editFields"] = array();
$tdatat_tipo_multa[".editFields"][] = "tipo_multa";

$tdatat_tipo_multa[".inlineEditFields"] = array();
$tdatat_tipo_multa[".inlineEditFields"][] = "tipo_multa";

$tdatat_tipo_multa[".exportFields"] = array();
$tdatat_tipo_multa[".exportFields"][] = "id_multa";
$tdatat_tipo_multa[".exportFields"][] = "tipo_multa";

$tdatat_tipo_multa[".importFields"] = array();
$tdatat_tipo_multa[".importFields"][] = "id_multa";
$tdatat_tipo_multa[".importFields"][] = "tipo_multa";

$tdatat_tipo_multa[".printFields"] = array();
$tdatat_tipo_multa[".printFields"][] = "id_multa";
$tdatat_tipo_multa[".printFields"][] = "tipo_multa";

//	id_multa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_multa";
	$fdata["GoodName"] = "id_multa";
	$fdata["ownerTable"] = "t_tipo_multa";
	$fdata["Label"] = GetFieldLabel("t_tipo_multa","id_multa"); 
	$fdata["FieldType"] = 2;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id_multa"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_multa";
	
		
		
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

	

	
	$tdatat_tipo_multa["id_multa"] = $fdata;
//	tipo_multa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipo_multa";
	$fdata["GoodName"] = "tipo_multa";
	$fdata["ownerTable"] = "t_tipo_multa";
	$fdata["Label"] = GetFieldLabel("t_tipo_multa","tipo_multa"); 
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

	

	
	$tdatat_tipo_multa["tipo_multa"] = $fdata;

	
$tables_data["t_tipo_multa"]=&$tdatat_tipo_multa;
$field_labels["t_tipo_multa"] = &$fieldLabelst_tipo_multa;
$fieldToolTips["t_tipo_multa"] = &$fieldToolTipst_tipo_multa;
$page_titles["t_tipo_multa"] = &$pageTitlest_tipo_multa;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_tipo_multa"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_tipo_multa"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_tipo_multa()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_multa,  	tipo_multa";
$proto0["m_strFrom"] = "FROM t_tipo_multa";
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
	"m_strName" => "id_multa",
	"m_strTable" => "t_tipo_multa",
	"m_srcTableName" => "t_tipo_multa"
));

$proto5["m_sql"] = "id_multa";
$proto5["m_srcTableName"] = "t_tipo_multa";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_multa",
	"m_strTable" => "t_tipo_multa",
	"m_srcTableName" => "t_tipo_multa"
));

$proto7["m_sql"] = "tipo_multa";
$proto7["m_srcTableName"] = "t_tipo_multa";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "t_tipo_multa";
$proto10["m_srcTableName"] = "t_tipo_multa";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "id_multa";
$proto10["m_columns"][] = "tipo_multa";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "t_tipo_multa";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "t_tipo_multa";
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
$proto0["m_srcTableName"]="t_tipo_multa";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_tipo_multa = createSqlQuery_t_tipo_multa();


	
		
	
$tdatat_tipo_multa[".sqlquery"] = $queryData_t_tipo_multa;

$tableEvents["t_tipo_multa"] = new eventsBase;
$tdatat_tipo_multa[".hasEvents"] = false;

?>