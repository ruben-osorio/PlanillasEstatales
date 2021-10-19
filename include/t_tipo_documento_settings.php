<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_tipo_documento = array();	
	$tdatat_tipo_documento[".truncateText"] = true;
	$tdatat_tipo_documento[".NumberOfChars"] = 80; 
	$tdatat_tipo_documento[".ShortName"] = "t_tipo_documento";
	$tdatat_tipo_documento[".OwnerID"] = "";
	$tdatat_tipo_documento[".OriginalTable"] = "t_tipo_documento";

//	field labels
$fieldLabelst_tipo_documento = array();
$fieldToolTipst_tipo_documento = array();
$pageTitlest_tipo_documento = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_tipo_documento["Spanish"] = array();
	$fieldToolTipst_tipo_documento["Spanish"] = array();
	$pageTitlest_tipo_documento["Spanish"] = array();
	$fieldLabelst_tipo_documento["Spanish"]["id_tipo"] = "Id Tipo";
	$fieldToolTipst_tipo_documento["Spanish"]["id_tipo"] = "";
	$fieldLabelst_tipo_documento["Spanish"]["detalle"] = "Detalle";
	$fieldToolTipst_tipo_documento["Spanish"]["detalle"] = "";
	$fieldLabelst_tipo_documento["Spanish"]["abrev"] = "Abrev";
	$fieldToolTipst_tipo_documento["Spanish"]["abrev"] = "";
	if (count($fieldToolTipst_tipo_documento["Spanish"]))
		$tdatat_tipo_documento[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_tipo_documento[""] = array();
	$fieldToolTipst_tipo_documento[""] = array();
	$pageTitlest_tipo_documento[""] = array();
	$fieldLabelst_tipo_documento[""]["id_tipo"] = "Id Tipo";
	$fieldToolTipst_tipo_documento[""]["id_tipo"] = "";
	$fieldLabelst_tipo_documento[""]["detalle"] = "Detalle";
	$fieldToolTipst_tipo_documento[""]["detalle"] = "";
	$fieldLabelst_tipo_documento[""]["abrev"] = "Abrev";
	$fieldToolTipst_tipo_documento[""]["abrev"] = "";
	if (count($fieldToolTipst_tipo_documento[""]))
		$tdatat_tipo_documento[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_tipo_documento["English"] = array();
	$fieldToolTipst_tipo_documento["English"] = array();
	$pageTitlest_tipo_documento["English"] = array();
	$fieldLabelst_tipo_documento["English"]["id_tipo"] = "Id Tipo";
	$fieldToolTipst_tipo_documento["English"]["id_tipo"] = "";
	$fieldLabelst_tipo_documento["English"]["detalle"] = "Detalle";
	$fieldToolTipst_tipo_documento["English"]["detalle"] = "";
	$fieldLabelst_tipo_documento["English"]["abrev"] = "Abrev";
	$fieldToolTipst_tipo_documento["English"]["abrev"] = "";
	if (count($fieldToolTipst_tipo_documento["English"]))
		$tdatat_tipo_documento[".isUseToolTips"] = true;
}
	
	
	$tdatat_tipo_documento[".NCSearch"] = true;



$tdatat_tipo_documento[".shortTableName"] = "t_tipo_documento";
$tdatat_tipo_documento[".nSecOptions"] = 0;
$tdatat_tipo_documento[".recsPerRowList"] = 1;
$tdatat_tipo_documento[".recsPerRowPrint"] = 1;
$tdatat_tipo_documento[".mainTableOwnerID"] = "";
$tdatat_tipo_documento[".moveNext"] = 1;
$tdatat_tipo_documento[".entityType"] = 0;

$tdatat_tipo_documento[".strOriginalTableName"] = "t_tipo_documento";




$tdatat_tipo_documento[".showAddInPopup"] = false;

$tdatat_tipo_documento[".showEditInPopup"] = false;

$tdatat_tipo_documento[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_tipo_documento[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_tipo_documento[".fieldsForRegister"] = array();

$tdatat_tipo_documento[".listAjax"] = false;

	$tdatat_tipo_documento[".audit"] = false;

	$tdatat_tipo_documento[".locking"] = false;

$tdatat_tipo_documento[".edit"] = true;
$tdatat_tipo_documento[".afterEditAction"] = 1;
$tdatat_tipo_documento[".closePopupAfterEdit"] = 1;
$tdatat_tipo_documento[".afterEditActionDetTable"] = "";

$tdatat_tipo_documento[".add"] = true;
$tdatat_tipo_documento[".afterAddAction"] = 1;
$tdatat_tipo_documento[".closePopupAfterAdd"] = 1;
$tdatat_tipo_documento[".afterAddActionDetTable"] = "";

$tdatat_tipo_documento[".list"] = true;

$tdatat_tipo_documento[".inlineEdit"] = true;
$tdatat_tipo_documento[".inlineAdd"] = true;
$tdatat_tipo_documento[".view"] = true;

$tdatat_tipo_documento[".import"] = true;

$tdatat_tipo_documento[".exportTo"] = true;

$tdatat_tipo_documento[".printFriendly"] = true;

$tdatat_tipo_documento[".delete"] = true;

$tdatat_tipo_documento[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_tipo_documento[".searchSaving"] = false;
//

$tdatat_tipo_documento[".showSearchPanel"] = true;
		$tdatat_tipo_documento[".flexibleSearch"] = true;		

if (isMobile())
	$tdatat_tipo_documento[".isUseAjaxSuggest"] = false;
else 
	$tdatat_tipo_documento[".isUseAjaxSuggest"] = true;

$tdatat_tipo_documento[".rowHighlite"] = true;



$tdatat_tipo_documento[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_tipo_documento[".isUseTimeForSearch"] = false;





$tdatat_tipo_documento[".allSearchFields"] = array();
$tdatat_tipo_documento[".filterFields"] = array();
$tdatat_tipo_documento[".requiredSearchFields"] = array();

$tdatat_tipo_documento[".allSearchFields"][] = "id_tipo";
	$tdatat_tipo_documento[".allSearchFields"][] = "detalle";
	$tdatat_tipo_documento[".allSearchFields"][] = "abrev";
	

$tdatat_tipo_documento[".googleLikeFields"] = array();
$tdatat_tipo_documento[".googleLikeFields"][] = "id_tipo";
$tdatat_tipo_documento[".googleLikeFields"][] = "detalle";
$tdatat_tipo_documento[".googleLikeFields"][] = "abrev";


$tdatat_tipo_documento[".advSearchFields"] = array();
$tdatat_tipo_documento[".advSearchFields"][] = "id_tipo";
$tdatat_tipo_documento[".advSearchFields"][] = "detalle";
$tdatat_tipo_documento[".advSearchFields"][] = "abrev";

$tdatat_tipo_documento[".tableType"] = "list";

$tdatat_tipo_documento[".printerPageOrientation"] = 0;
$tdatat_tipo_documento[".nPrinterPageScale"] = 100;

$tdatat_tipo_documento[".nPrinterSplitRecords"] = 40;

$tdatat_tipo_documento[".nPrinterPDFSplitRecords"] = 40;



$tdatat_tipo_documento[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatat_tipo_documento[".pageSize"] = 20;

$tdatat_tipo_documento[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_tipo_documento[".strOrderBy"] = $tstrOrderBy;

$tdatat_tipo_documento[".orderindexes"] = array();

$tdatat_tipo_documento[".sqlHead"] = "SELECT id_tipo,  	detalle,  	abrev";
$tdatat_tipo_documento[".sqlFrom"] = "FROM t_tipo_documento";
$tdatat_tipo_documento[".sqlWhereExpr"] = "";
$tdatat_tipo_documento[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_tipo_documento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_tipo_documento[".arrGroupsPerPage"] = $arrGPP;

$tdatat_tipo_documento[".highlightSearchResults"] = true;

$tableKeyst_tipo_documento = array();
$tableKeyst_tipo_documento[] = "id_tipo";
$tdatat_tipo_documento[".Keys"] = $tableKeyst_tipo_documento;

$tdatat_tipo_documento[".listFields"] = array();
$tdatat_tipo_documento[".listFields"][] = "id_tipo";
$tdatat_tipo_documento[".listFields"][] = "detalle";
$tdatat_tipo_documento[".listFields"][] = "abrev";

$tdatat_tipo_documento[".hideMobileList"] = array();


$tdatat_tipo_documento[".viewFields"] = array();
$tdatat_tipo_documento[".viewFields"][] = "id_tipo";
$tdatat_tipo_documento[".viewFields"][] = "detalle";
$tdatat_tipo_documento[".viewFields"][] = "abrev";

$tdatat_tipo_documento[".addFields"] = array();
$tdatat_tipo_documento[".addFields"][] = "detalle";
$tdatat_tipo_documento[".addFields"][] = "abrev";

$tdatat_tipo_documento[".masterListFields"] = array();
$tdatat_tipo_documento[".masterListFields"][] = "id_tipo";
$tdatat_tipo_documento[".masterListFields"][] = "detalle";
$tdatat_tipo_documento[".masterListFields"][] = "abrev";

$tdatat_tipo_documento[".inlineAddFields"] = array();
$tdatat_tipo_documento[".inlineAddFields"][] = "detalle";
$tdatat_tipo_documento[".inlineAddFields"][] = "abrev";

$tdatat_tipo_documento[".editFields"] = array();
$tdatat_tipo_documento[".editFields"][] = "detalle";
$tdatat_tipo_documento[".editFields"][] = "abrev";

$tdatat_tipo_documento[".inlineEditFields"] = array();
$tdatat_tipo_documento[".inlineEditFields"][] = "detalle";
$tdatat_tipo_documento[".inlineEditFields"][] = "abrev";

$tdatat_tipo_documento[".exportFields"] = array();
$tdatat_tipo_documento[".exportFields"][] = "id_tipo";
$tdatat_tipo_documento[".exportFields"][] = "detalle";
$tdatat_tipo_documento[".exportFields"][] = "abrev";

$tdatat_tipo_documento[".importFields"] = array();
$tdatat_tipo_documento[".importFields"][] = "id_tipo";
$tdatat_tipo_documento[".importFields"][] = "detalle";
$tdatat_tipo_documento[".importFields"][] = "abrev";

$tdatat_tipo_documento[".printFields"] = array();
$tdatat_tipo_documento[".printFields"][] = "id_tipo";
$tdatat_tipo_documento[".printFields"][] = "detalle";
$tdatat_tipo_documento[".printFields"][] = "abrev";

//	id_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_tipo";
	$fdata["GoodName"] = "id_tipo";
	$fdata["ownerTable"] = "t_tipo_documento";
	$fdata["Label"] = GetFieldLabel("t_tipo_documento","id_tipo"); 
	$fdata["FieldType"] = 2;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id_tipo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_tipo";
	
		
		
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

	

	
	$tdatat_tipo_documento["id_tipo"] = $fdata;
//	detalle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "detalle";
	$fdata["GoodName"] = "detalle";
	$fdata["ownerTable"] = "t_tipo_documento";
	$fdata["Label"] = GetFieldLabel("t_tipo_documento","detalle"); 
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

	

	
	$tdatat_tipo_documento["detalle"] = $fdata;
//	abrev
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "abrev";
	$fdata["GoodName"] = "abrev";
	$fdata["ownerTable"] = "t_tipo_documento";
	$fdata["Label"] = GetFieldLabel("t_tipo_documento","abrev"); 
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
	
		$fdata["strField"] = "abrev"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "abrev";
	
		
		
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
			$edata["EditParams"].= " maxlength=5";
	
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

	

	
	$tdatat_tipo_documento["abrev"] = $fdata;

	
$tables_data["t_tipo_documento"]=&$tdatat_tipo_documento;
$field_labels["t_tipo_documento"] = &$fieldLabelst_tipo_documento;
$fieldToolTips["t_tipo_documento"] = &$fieldToolTipst_tipo_documento;
$page_titles["t_tipo_documento"] = &$pageTitlest_tipo_documento;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_tipo_documento"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_tipo_documento"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_tipo_documento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_tipo,  	detalle,  	abrev";
$proto0["m_strFrom"] = "FROM t_tipo_documento";
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
	"m_strName" => "id_tipo",
	"m_strTable" => "t_tipo_documento",
	"m_srcTableName" => "t_tipo_documento"
));

$proto5["m_sql"] = "id_tipo";
$proto5["m_srcTableName"] = "t_tipo_documento";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "detalle",
	"m_strTable" => "t_tipo_documento",
	"m_srcTableName" => "t_tipo_documento"
));

$proto7["m_sql"] = "detalle";
$proto7["m_srcTableName"] = "t_tipo_documento";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "abrev",
	"m_strTable" => "t_tipo_documento",
	"m_srcTableName" => "t_tipo_documento"
));

$proto9["m_sql"] = "abrev";
$proto9["m_srcTableName"] = "t_tipo_documento";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "t_tipo_documento";
$proto12["m_srcTableName"] = "t_tipo_documento";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id_tipo";
$proto12["m_columns"][] = "detalle";
$proto12["m_columns"][] = "abrev";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "t_tipo_documento";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "t_tipo_documento";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_tipo_documento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_tipo_documento = createSqlQuery_t_tipo_documento();


	
			
	
$tdatat_tipo_documento[".sqlquery"] = $queryData_t_tipo_documento;

$tableEvents["t_tipo_documento"] = new eventsBase;
$tdatat_tipo_documento[".hasEvents"] = false;

?>