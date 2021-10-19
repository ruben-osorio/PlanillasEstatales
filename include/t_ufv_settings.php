<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_ufv = array();	
	$tdatat_ufv[".truncateText"] = true;
	$tdatat_ufv[".NumberOfChars"] = 80; 
	$tdatat_ufv[".ShortName"] = "t_ufv";
	$tdatat_ufv[".OwnerID"] = "";
	$tdatat_ufv[".OriginalTable"] = "t_ufv";

//	field labels
$fieldLabelst_ufv = array();
$fieldToolTipst_ufv = array();
$pageTitlest_ufv = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_ufv["Spanish"] = array();
	$fieldToolTipst_ufv["Spanish"] = array();
	$pageTitlest_ufv["Spanish"] = array();
	$fieldLabelst_ufv["Spanish"]["id"] = "Id";
	$fieldToolTipst_ufv["Spanish"]["id"] = "";
	$fieldLabelst_ufv["Spanish"]["monto"] = "Monto";
	$fieldToolTipst_ufv["Spanish"]["monto"] = "";
	$fieldLabelst_ufv["Spanish"]["mes"] = "Mes";
	$fieldToolTipst_ufv["Spanish"]["mes"] = "";
	$fieldLabelst_ufv["Spanish"]["gestion"] = "Gestión";
	$fieldToolTipst_ufv["Spanish"]["gestion"] = "";
	if (count($fieldToolTipst_ufv["Spanish"]))
		$tdatat_ufv[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_ufv[""] = array();
	$fieldToolTipst_ufv[""] = array();
	$pageTitlest_ufv[""] = array();
	$fieldLabelst_ufv[""]["id"] = "Id";
	$fieldToolTipst_ufv[""]["id"] = "";
	$fieldLabelst_ufv[""]["monto"] = "Monto";
	$fieldToolTipst_ufv[""]["monto"] = "";
	$fieldLabelst_ufv[""]["mes"] = "Mes";
	$fieldToolTipst_ufv[""]["mes"] = "";
	$fieldLabelst_ufv[""]["gestion"] = "Gestion";
	$fieldToolTipst_ufv[""]["gestion"] = "";
	if (count($fieldToolTipst_ufv[""]))
		$tdatat_ufv[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_ufv["English"] = array();
	$fieldToolTipst_ufv["English"] = array();
	$pageTitlest_ufv["English"] = array();
	$fieldLabelst_ufv["English"]["id"] = "Id";
	$fieldToolTipst_ufv["English"]["id"] = "";
	$fieldLabelst_ufv["English"]["monto"] = "Monto";
	$fieldToolTipst_ufv["English"]["monto"] = "";
	$fieldLabelst_ufv["English"]["mes"] = "Mes";
	$fieldToolTipst_ufv["English"]["mes"] = "";
	$fieldLabelst_ufv["English"]["gestion"] = "Gestion";
	$fieldToolTipst_ufv["English"]["gestion"] = "";
	if (count($fieldToolTipst_ufv["English"]))
		$tdatat_ufv[".isUseToolTips"] = true;
}
	
	
	$tdatat_ufv[".NCSearch"] = true;



$tdatat_ufv[".shortTableName"] = "t_ufv";
$tdatat_ufv[".nSecOptions"] = 0;
$tdatat_ufv[".recsPerRowList"] = 1;
$tdatat_ufv[".recsPerRowPrint"] = 1;
$tdatat_ufv[".mainTableOwnerID"] = "";
$tdatat_ufv[".moveNext"] = 1;
$tdatat_ufv[".entityType"] = 0;

$tdatat_ufv[".strOriginalTableName"] = "t_ufv";




$tdatat_ufv[".showAddInPopup"] = false;

$tdatat_ufv[".showEditInPopup"] = false;

$tdatat_ufv[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_ufv[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_ufv[".fieldsForRegister"] = array();

$tdatat_ufv[".listAjax"] = false;

	$tdatat_ufv[".audit"] = false;

	$tdatat_ufv[".locking"] = false;

$tdatat_ufv[".edit"] = true;
$tdatat_ufv[".afterEditAction"] = 1;
$tdatat_ufv[".closePopupAfterEdit"] = 1;
$tdatat_ufv[".afterEditActionDetTable"] = "";

$tdatat_ufv[".add"] = true;
$tdatat_ufv[".afterAddAction"] = 1;
$tdatat_ufv[".closePopupAfterAdd"] = 1;
$tdatat_ufv[".afterAddActionDetTable"] = "";

$tdatat_ufv[".list"] = true;

$tdatat_ufv[".inlineEdit"] = true;
$tdatat_ufv[".inlineAdd"] = true;


$tdatat_ufv[".exportTo"] = true;


$tdatat_ufv[".delete"] = true;

$tdatat_ufv[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_ufv[".searchSaving"] = false;
//

$tdatat_ufv[".showSearchPanel"] = true;
		$tdatat_ufv[".flexibleSearch"] = true;		

if (isMobile())
	$tdatat_ufv[".isUseAjaxSuggest"] = false;
else 
	$tdatat_ufv[".isUseAjaxSuggest"] = true;

$tdatat_ufv[".rowHighlite"] = true;



$tdatat_ufv[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_ufv[".isUseTimeForSearch"] = false;





$tdatat_ufv[".allSearchFields"] = array();
$tdatat_ufv[".filterFields"] = array();
$tdatat_ufv[".requiredSearchFields"] = array();

$tdatat_ufv[".allSearchFields"][] = "id";
	$tdatat_ufv[".allSearchFields"][] = "monto";
	$tdatat_ufv[".allSearchFields"][] = "mes";
	$tdatat_ufv[".allSearchFields"][] = "gestion";
	

$tdatat_ufv[".googleLikeFields"] = array();
$tdatat_ufv[".googleLikeFields"][] = "id";
$tdatat_ufv[".googleLikeFields"][] = "monto";
$tdatat_ufv[".googleLikeFields"][] = "mes";
$tdatat_ufv[".googleLikeFields"][] = "gestion";


$tdatat_ufv[".advSearchFields"] = array();
$tdatat_ufv[".advSearchFields"][] = "id";
$tdatat_ufv[".advSearchFields"][] = "monto";
$tdatat_ufv[".advSearchFields"][] = "mes";
$tdatat_ufv[".advSearchFields"][] = "gestion";

$tdatat_ufv[".tableType"] = "list";

$tdatat_ufv[".printerPageOrientation"] = 0;
$tdatat_ufv[".nPrinterPageScale"] = 100;

$tdatat_ufv[".nPrinterSplitRecords"] = 40;

$tdatat_ufv[".nPrinterPDFSplitRecords"] = 40;



$tdatat_ufv[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatat_ufv[".pageSize"] = 20;

$tdatat_ufv[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_ufv[".strOrderBy"] = $tstrOrderBy;

$tdatat_ufv[".orderindexes"] = array();

$tdatat_ufv[".sqlHead"] = "SELECT id,  	monto,  	mes,  	gestion";
$tdatat_ufv[".sqlFrom"] = "FROM t_ufv";
$tdatat_ufv[".sqlWhereExpr"] = "";
$tdatat_ufv[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_ufv[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_ufv[".arrGroupsPerPage"] = $arrGPP;

$tdatat_ufv[".highlightSearchResults"] = true;

$tableKeyst_ufv = array();
$tableKeyst_ufv[] = "id";
$tdatat_ufv[".Keys"] = $tableKeyst_ufv;

$tdatat_ufv[".listFields"] = array();
$tdatat_ufv[".listFields"][] = "id";
$tdatat_ufv[".listFields"][] = "monto";
$tdatat_ufv[".listFields"][] = "mes";
$tdatat_ufv[".listFields"][] = "gestion";

$tdatat_ufv[".hideMobileList"] = array();


$tdatat_ufv[".viewFields"] = array();

$tdatat_ufv[".addFields"] = array();
$tdatat_ufv[".addFields"][] = "monto";
$tdatat_ufv[".addFields"][] = "mes";
$tdatat_ufv[".addFields"][] = "gestion";

$tdatat_ufv[".masterListFields"] = array();
$tdatat_ufv[".masterListFields"][] = "id";
$tdatat_ufv[".masterListFields"][] = "monto";
$tdatat_ufv[".masterListFields"][] = "mes";
$tdatat_ufv[".masterListFields"][] = "gestion";

$tdatat_ufv[".inlineAddFields"] = array();
$tdatat_ufv[".inlineAddFields"][] = "monto";
$tdatat_ufv[".inlineAddFields"][] = "mes";
$tdatat_ufv[".inlineAddFields"][] = "gestion";

$tdatat_ufv[".editFields"] = array();
$tdatat_ufv[".editFields"][] = "monto";
$tdatat_ufv[".editFields"][] = "mes";
$tdatat_ufv[".editFields"][] = "gestion";

$tdatat_ufv[".inlineEditFields"] = array();
$tdatat_ufv[".inlineEditFields"][] = "monto";
$tdatat_ufv[".inlineEditFields"][] = "mes";
$tdatat_ufv[".inlineEditFields"][] = "gestion";

$tdatat_ufv[".exportFields"] = array();
$tdatat_ufv[".exportFields"][] = "id";
$tdatat_ufv[".exportFields"][] = "monto";
$tdatat_ufv[".exportFields"][] = "mes";
$tdatat_ufv[".exportFields"][] = "gestion";

$tdatat_ufv[".importFields"] = array();

$tdatat_ufv[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "t_ufv";
	$fdata["Label"] = GetFieldLabel("t_ufv","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
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

	

	
	$tdatat_ufv["id"] = $fdata;
//	monto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "monto";
	$fdata["GoodName"] = "monto";
	$fdata["ownerTable"] = "t_ufv";
	$fdata["Label"] = GetFieldLabel("t_ufv","monto"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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

	

	
	$tdatat_ufv["monto"] = $fdata;
//	mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mes";
	$fdata["GoodName"] = "mes";
	$fdata["ownerTable"] = "t_ufv";
	$fdata["Label"] = GetFieldLabel("t_ufv","mes"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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

	

	
	$tdatat_ufv["mes"] = $fdata;
//	gestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "gestion";
	$fdata["GoodName"] = "gestion";
	$fdata["ownerTable"] = "t_ufv";
	$fdata["Label"] = GetFieldLabel("t_ufv","gestion"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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

	

	
	$tdatat_ufv["gestion"] = $fdata;

	
$tables_data["t_ufv"]=&$tdatat_ufv;
$field_labels["t_ufv"] = &$fieldLabelst_ufv;
$fieldToolTips["t_ufv"] = &$fieldToolTipst_ufv;
$page_titles["t_ufv"] = &$pageTitlest_ufv;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_ufv"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_ufv"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_ufv()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	monto,  	mes,  	gestion";
$proto0["m_strFrom"] = "FROM t_ufv";
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
	"m_strTable" => "t_ufv",
	"m_srcTableName" => "t_ufv"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "t_ufv";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "monto",
	"m_strTable" => "t_ufv",
	"m_srcTableName" => "t_ufv"
));

$proto7["m_sql"] = "monto";
$proto7["m_srcTableName"] = "t_ufv";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "mes",
	"m_strTable" => "t_ufv",
	"m_srcTableName" => "t_ufv"
));

$proto9["m_sql"] = "mes";
$proto9["m_srcTableName"] = "t_ufv";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "gestion",
	"m_strTable" => "t_ufv",
	"m_srcTableName" => "t_ufv"
));

$proto11["m_sql"] = "gestion";
$proto11["m_srcTableName"] = "t_ufv";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "t_ufv";
$proto14["m_srcTableName"] = "t_ufv";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "monto";
$proto14["m_columns"][] = "mes";
$proto14["m_columns"][] = "gestion";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "t_ufv";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "t_ufv";
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
$proto0["m_srcTableName"]="t_ufv";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_ufv = createSqlQuery_t_ufv();


	
				
	
$tdatat_ufv[".sqlquery"] = $queryData_t_ufv;

$tableEvents["t_ufv"] = new eventsBase;
$tdatat_ufv[".hasEvents"] = false;

?>