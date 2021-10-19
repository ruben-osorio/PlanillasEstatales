<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_facturas110 = array();	
	$tdatat_facturas110[".truncateText"] = true;
	$tdatat_facturas110[".NumberOfChars"] = 80; 
	$tdatat_facturas110[".ShortName"] = "t_facturas110";
	$tdatat_facturas110[".OwnerID"] = "";
	$tdatat_facturas110[".OriginalTable"] = "t_facturas110";

//	field labels
$fieldLabelst_facturas110 = array();
$fieldToolTipst_facturas110 = array();
$pageTitlest_facturas110 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_facturas110["Spanish"] = array();
	$fieldToolTipst_facturas110["Spanish"] = array();
	$pageTitlest_facturas110["Spanish"] = array();
	$fieldLabelst_facturas110["Spanish"]["id_fac"] = "Id Fac";
	$fieldToolTipst_facturas110["Spanish"]["id_fac"] = "";
	$fieldLabelst_facturas110["Spanish"]["id_func"] = "Id";
	$fieldToolTipst_facturas110["Spanish"]["id_func"] = "";
	$fieldLabelst_facturas110["Spanish"]["gestion"] = "Periodo [GESTIÓN]";
	$fieldToolTipst_facturas110["Spanish"]["gestion"] = "";
	$fieldLabelst_facturas110["Spanish"]["periodo"] = "Periodo [MES]";
	$fieldToolTipst_facturas110["Spanish"]["periodo"] = "";
	$fieldLabelst_facturas110["Spanish"]["mes_num"] = "Mes Numérico";
	$fieldToolTipst_facturas110["Spanish"]["mes_num"] = "";
	$fieldLabelst_facturas110["Spanish"]["monto_total"] = "Monto Total";
	$fieldToolTipst_facturas110["Spanish"]["monto_total"] = "";
	$fieldLabelst_facturas110["Spanish"]["monto_13"] = "Monto 13%";
	$fieldToolTipst_facturas110["Spanish"]["monto_13"] = "";
	$fieldLabelst_facturas110["Spanish"]["archivo_digital"] = "Archivo Digital";
	$fieldToolTipst_facturas110["Spanish"]["archivo_digital"] = "";
	$fieldLabelst_facturas110["Spanish"]["lugar"] = "Lugar";
	$fieldToolTipst_facturas110["Spanish"]["lugar"] = "";
	$fieldLabelst_facturas110["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipst_facturas110["Spanish"]["fecha"] = "";
	if (count($fieldToolTipst_facturas110["Spanish"]))
		$tdatat_facturas110[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_facturas110[""] = array();
	$fieldToolTipst_facturas110[""] = array();
	$pageTitlest_facturas110[""] = array();
	$fieldLabelst_facturas110[""]["id_fac"] = "Id Fac";
	$fieldToolTipst_facturas110[""]["id_fac"] = "";
	$fieldLabelst_facturas110[""]["id_func"] = "Id Func";
	$fieldToolTipst_facturas110[""]["id_func"] = "";
	$fieldLabelst_facturas110[""]["gestion"] = "Gestion";
	$fieldToolTipst_facturas110[""]["gestion"] = "";
	$fieldLabelst_facturas110[""]["periodo"] = "Periodo";
	$fieldToolTipst_facturas110[""]["periodo"] = "";
	$fieldLabelst_facturas110[""]["mes_num"] = "Mes Num";
	$fieldToolTipst_facturas110[""]["mes_num"] = "";
	$fieldLabelst_facturas110[""]["monto_total"] = "Monto Total";
	$fieldToolTipst_facturas110[""]["monto_total"] = "";
	$fieldLabelst_facturas110[""]["monto_13"] = "Monto 13";
	$fieldToolTipst_facturas110[""]["monto_13"] = "";
	$fieldLabelst_facturas110[""]["archivo_digital"] = "Archivo Digital";
	$fieldToolTipst_facturas110[""]["archivo_digital"] = "";
	$fieldLabelst_facturas110[""]["lugar"] = "Lugar";
	$fieldToolTipst_facturas110[""]["lugar"] = "";
	$fieldLabelst_facturas110[""]["fecha"] = "Fecha";
	$fieldToolTipst_facturas110[""]["fecha"] = "";
	if (count($fieldToolTipst_facturas110[""]))
		$tdatat_facturas110[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_facturas110["English"] = array();
	$fieldToolTipst_facturas110["English"] = array();
	$pageTitlest_facturas110["English"] = array();
	$fieldLabelst_facturas110["English"]["id_fac"] = "Id Fac";
	$fieldToolTipst_facturas110["English"]["id_fac"] = "";
	$fieldLabelst_facturas110["English"]["id_func"] = "Id Func";
	$fieldToolTipst_facturas110["English"]["id_func"] = "";
	$fieldLabelst_facturas110["English"]["gestion"] = "Gestion";
	$fieldToolTipst_facturas110["English"]["gestion"] = "";
	$fieldLabelst_facturas110["English"]["periodo"] = "Periodo";
	$fieldToolTipst_facturas110["English"]["periodo"] = "";
	$fieldLabelst_facturas110["English"]["mes_num"] = "Mes Num";
	$fieldToolTipst_facturas110["English"]["mes_num"] = "";
	$fieldLabelst_facturas110["English"]["monto_total"] = "Monto Total";
	$fieldToolTipst_facturas110["English"]["monto_total"] = "";
	$fieldLabelst_facturas110["English"]["monto_13"] = "Monto 13";
	$fieldToolTipst_facturas110["English"]["monto_13"] = "";
	$fieldLabelst_facturas110["English"]["archivo_digital"] = "Archivo Digital";
	$fieldToolTipst_facturas110["English"]["archivo_digital"] = "";
	$fieldLabelst_facturas110["English"]["lugar"] = "Lugar";
	$fieldToolTipst_facturas110["English"]["lugar"] = "";
	$fieldLabelst_facturas110["English"]["fecha"] = "Fecha";
	$fieldToolTipst_facturas110["English"]["fecha"] = "";
	if (count($fieldToolTipst_facturas110["English"]))
		$tdatat_facturas110[".isUseToolTips"] = true;
}
	
	
	$tdatat_facturas110[".NCSearch"] = true;



$tdatat_facturas110[".shortTableName"] = "t_facturas110";
$tdatat_facturas110[".nSecOptions"] = 0;
$tdatat_facturas110[".recsPerRowList"] = 1;
$tdatat_facturas110[".recsPerRowPrint"] = 1;
$tdatat_facturas110[".mainTableOwnerID"] = "";
$tdatat_facturas110[".moveNext"] = 1;
$tdatat_facturas110[".entityType"] = 0;

$tdatat_facturas110[".strOriginalTableName"] = "t_facturas110";




$tdatat_facturas110[".showAddInPopup"] = false;

$tdatat_facturas110[".showEditInPopup"] = false;

$tdatat_facturas110[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_facturas110[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_facturas110[".fieldsForRegister"] = array();

$tdatat_facturas110[".listAjax"] = false;

	$tdatat_facturas110[".audit"] = false;

	$tdatat_facturas110[".locking"] = false;

$tdatat_facturas110[".edit"] = true;
$tdatat_facturas110[".afterEditAction"] = 1;
$tdatat_facturas110[".closePopupAfterEdit"] = 1;
$tdatat_facturas110[".afterEditActionDetTable"] = "";

$tdatat_facturas110[".add"] = true;
$tdatat_facturas110[".afterAddAction"] = 1;
$tdatat_facturas110[".closePopupAfterAdd"] = 1;
$tdatat_facturas110[".afterAddActionDetTable"] = "";

$tdatat_facturas110[".list"] = true;

$tdatat_facturas110[".inlineEdit"] = true;
$tdatat_facturas110[".inlineAdd"] = true;




$tdatat_facturas110[".delete"] = true;

$tdatat_facturas110[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_facturas110[".searchSaving"] = false;
//

$tdatat_facturas110[".showSearchPanel"] = true;
		$tdatat_facturas110[".flexibleSearch"] = true;		

if (isMobile())
	$tdatat_facturas110[".isUseAjaxSuggest"] = false;
else 
	$tdatat_facturas110[".isUseAjaxSuggest"] = true;

$tdatat_facturas110[".rowHighlite"] = true;



$tdatat_facturas110[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_facturas110[".isUseTimeForSearch"] = false;





$tdatat_facturas110[".allSearchFields"] = array();
$tdatat_facturas110[".filterFields"] = array();
$tdatat_facturas110[".requiredSearchFields"] = array();

$tdatat_facturas110[".allSearchFields"][] = "id_func";
	$tdatat_facturas110[".allSearchFields"][] = "gestion";
	$tdatat_facturas110[".allSearchFields"][] = "periodo";
	$tdatat_facturas110[".allSearchFields"][] = "mes_num";
	$tdatat_facturas110[".allSearchFields"][] = "monto_total";
	$tdatat_facturas110[".allSearchFields"][] = "monto_13";
	$tdatat_facturas110[".allSearchFields"][] = "lugar";
	$tdatat_facturas110[".allSearchFields"][] = "fecha";
	$tdatat_facturas110[".allSearchFields"][] = "archivo_digital";
	

$tdatat_facturas110[".googleLikeFields"] = array();
$tdatat_facturas110[".googleLikeFields"][] = "id_fac";
$tdatat_facturas110[".googleLikeFields"][] = "id_func";
$tdatat_facturas110[".googleLikeFields"][] = "gestion";
$tdatat_facturas110[".googleLikeFields"][] = "periodo";
$tdatat_facturas110[".googleLikeFields"][] = "mes_num";
$tdatat_facturas110[".googleLikeFields"][] = "monto_total";
$tdatat_facturas110[".googleLikeFields"][] = "monto_13";
$tdatat_facturas110[".googleLikeFields"][] = "lugar";
$tdatat_facturas110[".googleLikeFields"][] = "fecha";
$tdatat_facturas110[".googleLikeFields"][] = "archivo_digital";


$tdatat_facturas110[".advSearchFields"] = array();
$tdatat_facturas110[".advSearchFields"][] = "id_func";
$tdatat_facturas110[".advSearchFields"][] = "gestion";
$tdatat_facturas110[".advSearchFields"][] = "periodo";
$tdatat_facturas110[".advSearchFields"][] = "mes_num";
$tdatat_facturas110[".advSearchFields"][] = "monto_total";
$tdatat_facturas110[".advSearchFields"][] = "monto_13";
$tdatat_facturas110[".advSearchFields"][] = "lugar";
$tdatat_facturas110[".advSearchFields"][] = "fecha";
$tdatat_facturas110[".advSearchFields"][] = "archivo_digital";

$tdatat_facturas110[".tableType"] = "list";

$tdatat_facturas110[".printerPageOrientation"] = 0;
$tdatat_facturas110[".nPrinterPageScale"] = 100;

$tdatat_facturas110[".nPrinterSplitRecords"] = 40;

$tdatat_facturas110[".nPrinterPDFSplitRecords"] = 40;



$tdatat_facturas110[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf

$tdatat_facturas110[".totalsFields"] = array();
$tdatat_facturas110[".totalsFields"][] = array(
	"fName" => "monto_total", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatat_facturas110[".pageSize"] = 20;

$tdatat_facturas110[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_facturas110[".strOrderBy"] = $tstrOrderBy;

$tdatat_facturas110[".orderindexes"] = array();

$tdatat_facturas110[".sqlHead"] = "SELECT id_fac,  	id_func,  	gestion,  	periodo,  	mes_num,  	monto_total,  	monto_13,  	lugar,  	fecha,  	archivo_digital";
$tdatat_facturas110[".sqlFrom"] = "FROM t_facturas110";
$tdatat_facturas110[".sqlWhereExpr"] = "";
$tdatat_facturas110[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_facturas110[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_facturas110[".arrGroupsPerPage"] = $arrGPP;

$tdatat_facturas110[".highlightSearchResults"] = true;

$tableKeyst_facturas110 = array();
$tableKeyst_facturas110[] = "id_fac";
$tdatat_facturas110[".Keys"] = $tableKeyst_facturas110;

$tdatat_facturas110[".listFields"] = array();
$tdatat_facturas110[".listFields"][] = "id_func";
$tdatat_facturas110[".listFields"][] = "gestion";
$tdatat_facturas110[".listFields"][] = "periodo";
$tdatat_facturas110[".listFields"][] = "mes_num";
$tdatat_facturas110[".listFields"][] = "monto_total";
$tdatat_facturas110[".listFields"][] = "monto_13";
$tdatat_facturas110[".listFields"][] = "lugar";
$tdatat_facturas110[".listFields"][] = "fecha";
$tdatat_facturas110[".listFields"][] = "archivo_digital";

$tdatat_facturas110[".hideMobileList"] = array();


$tdatat_facturas110[".viewFields"] = array();

$tdatat_facturas110[".addFields"] = array();
$tdatat_facturas110[".addFields"][] = "gestion";
$tdatat_facturas110[".addFields"][] = "periodo";
$tdatat_facturas110[".addFields"][] = "mes_num";
$tdatat_facturas110[".addFields"][] = "monto_total";
$tdatat_facturas110[".addFields"][] = "monto_13";
$tdatat_facturas110[".addFields"][] = "lugar";
$tdatat_facturas110[".addFields"][] = "fecha";
$tdatat_facturas110[".addFields"][] = "archivo_digital";

$tdatat_facturas110[".masterListFields"] = array();
$tdatat_facturas110[".masterListFields"][] = "id_fac";
$tdatat_facturas110[".masterListFields"][] = "id_func";
$tdatat_facturas110[".masterListFields"][] = "gestion";
$tdatat_facturas110[".masterListFields"][] = "periodo";
$tdatat_facturas110[".masterListFields"][] = "mes_num";
$tdatat_facturas110[".masterListFields"][] = "monto_total";
$tdatat_facturas110[".masterListFields"][] = "monto_13";
$tdatat_facturas110[".masterListFields"][] = "lugar";
$tdatat_facturas110[".masterListFields"][] = "fecha";
$tdatat_facturas110[".masterListFields"][] = "archivo_digital";

$tdatat_facturas110[".inlineAddFields"] = array();
$tdatat_facturas110[".inlineAddFields"][] = "gestion";
$tdatat_facturas110[".inlineAddFields"][] = "periodo";
$tdatat_facturas110[".inlineAddFields"][] = "mes_num";
$tdatat_facturas110[".inlineAddFields"][] = "monto_total";
$tdatat_facturas110[".inlineAddFields"][] = "monto_13";
$tdatat_facturas110[".inlineAddFields"][] = "lugar";
$tdatat_facturas110[".inlineAddFields"][] = "fecha";
$tdatat_facturas110[".inlineAddFields"][] = "archivo_digital";

$tdatat_facturas110[".editFields"] = array();
$tdatat_facturas110[".editFields"][] = "monto_total";
$tdatat_facturas110[".editFields"][] = "monto_13";
$tdatat_facturas110[".editFields"][] = "lugar";
$tdatat_facturas110[".editFields"][] = "fecha";
$tdatat_facturas110[".editFields"][] = "archivo_digital";

$tdatat_facturas110[".inlineEditFields"] = array();
$tdatat_facturas110[".inlineEditFields"][] = "monto_total";
$tdatat_facturas110[".inlineEditFields"][] = "monto_13";
$tdatat_facturas110[".inlineEditFields"][] = "lugar";
$tdatat_facturas110[".inlineEditFields"][] = "fecha";
$tdatat_facturas110[".inlineEditFields"][] = "archivo_digital";

$tdatat_facturas110[".exportFields"] = array();

$tdatat_facturas110[".importFields"] = array();

$tdatat_facturas110[".printFields"] = array();

//	id_fac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_fac";
	$fdata["GoodName"] = "id_fac";
	$fdata["ownerTable"] = "t_facturas110";
	$fdata["Label"] = GetFieldLabel("t_facturas110","id_fac"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id_fac"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_fac";
	
		
		
				
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
	
	
	
	

	

	
	$tdatat_facturas110["id_fac"] = $fdata;
//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "t_facturas110";
	$fdata["Label"] = GetFieldLabel("t_facturas110","id_func"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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

	

	
	$tdatat_facturas110["id_func"] = $fdata;
//	gestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "gestion";
	$fdata["GoodName"] = "gestion";
	$fdata["ownerTable"] = "t_facturas110";
	$fdata["Label"] = GetFieldLabel("t_facturas110","gestion"); 
	$fdata["FieldType"] = 2;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
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

	

	
	$tdatat_facturas110["gestion"] = $fdata;
//	periodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "periodo";
	$fdata["GoodName"] = "periodo";
	$fdata["ownerTable"] = "t_facturas110";
	$fdata["Label"] = GetFieldLabel("t_facturas110","periodo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "periodo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatat_facturas110["periodo"] = $fdata;
//	mes_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mes_num";
	$fdata["GoodName"] = "mes_num";
	$fdata["ownerTable"] = "t_facturas110";
	$fdata["Label"] = GetFieldLabel("t_facturas110","mes_num"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "mes_num"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mes_num";
	
		
		
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

	

	
	$tdatat_facturas110["mes_num"] = $fdata;
//	monto_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "monto_total";
	$fdata["GoodName"] = "monto_total";
	$fdata["ownerTable"] = "t_facturas110";
	$fdata["Label"] = GetFieldLabel("t_facturas110","monto_total"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "monto_total"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "monto_total";
	
		
		
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

	

	
	$tdatat_facturas110["monto_total"] = $fdata;
//	monto_13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "monto_13";
	$fdata["GoodName"] = "monto_13";
	$fdata["ownerTable"] = "t_facturas110";
	$fdata["Label"] = GetFieldLabel("t_facturas110","monto_13"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "monto_13"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "monto_13";
	
		
		
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

	

	
	$tdatat_facturas110["monto_13"] = $fdata;
//	lugar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "lugar";
	$fdata["GoodName"] = "lugar";
	$fdata["ownerTable"] = "t_facturas110";
	$fdata["Label"] = GetFieldLabel("t_facturas110","lugar"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "lugar"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lugar";
	
		
		
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
			$edata["EditParams"].= " maxlength=20";
	
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

	

	
	$tdatat_facturas110["lugar"] = $fdata;
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "t_facturas110";
	$fdata["Label"] = GetFieldLabel("t_facturas110","fecha"); 
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_facturas110["fecha"] = $fdata;
//	archivo_digital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "archivo_digital";
	$fdata["GoodName"] = "archivo_digital";
	$fdata["ownerTable"] = "t_facturas110";
	$fdata["Label"] = GetFieldLabel("t_facturas110","archivo_digital"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "archivo_digital"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "archivo_digital";
	
		
		
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

	

	
	$tdatat_facturas110["archivo_digital"] = $fdata;

	
$tables_data["t_facturas110"]=&$tdatat_facturas110;
$field_labels["t_facturas110"] = &$fieldLabelst_facturas110;
$fieldToolTips["t_facturas110"] = &$fieldToolTipst_facturas110;
$page_titles["t_facturas110"] = &$pageTitlest_facturas110;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_facturas110"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_facturas110"] = array();


	
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
					$masterTablesData["t_facturas110"][0] = $masterParams;	
				$masterTablesData["t_facturas110"][0]["masterKeys"] = array();
	$masterTablesData["t_facturas110"][0]["masterKeys"][]="id_func";
				$masterTablesData["t_facturas110"][0]["detailKeys"] = array();
	$masterTablesData["t_facturas110"][0]["detailKeys"][]="id_func";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_facturas110()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_fac,  	id_func,  	gestion,  	periodo,  	mes_num,  	monto_total,  	monto_13,  	lugar,  	fecha,  	archivo_digital";
$proto0["m_strFrom"] = "FROM t_facturas110";
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
	"m_strName" => "id_fac",
	"m_strTable" => "t_facturas110",
	"m_srcTableName" => "t_facturas110"
));

$proto5["m_sql"] = "id_fac";
$proto5["m_srcTableName"] = "t_facturas110";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "t_facturas110",
	"m_srcTableName" => "t_facturas110"
));

$proto7["m_sql"] = "id_func";
$proto7["m_srcTableName"] = "t_facturas110";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "gestion",
	"m_strTable" => "t_facturas110",
	"m_srcTableName" => "t_facturas110"
));

$proto9["m_sql"] = "gestion";
$proto9["m_srcTableName"] = "t_facturas110";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo",
	"m_strTable" => "t_facturas110",
	"m_srcTableName" => "t_facturas110"
));

$proto11["m_sql"] = "periodo";
$proto11["m_srcTableName"] = "t_facturas110";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "mes_num",
	"m_strTable" => "t_facturas110",
	"m_srcTableName" => "t_facturas110"
));

$proto13["m_sql"] = "mes_num";
$proto13["m_srcTableName"] = "t_facturas110";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "monto_total",
	"m_strTable" => "t_facturas110",
	"m_srcTableName" => "t_facturas110"
));

$proto15["m_sql"] = "monto_total";
$proto15["m_srcTableName"] = "t_facturas110";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "monto_13",
	"m_strTable" => "t_facturas110",
	"m_srcTableName" => "t_facturas110"
));

$proto17["m_sql"] = "monto_13";
$proto17["m_srcTableName"] = "t_facturas110";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "lugar",
	"m_strTable" => "t_facturas110",
	"m_srcTableName" => "t_facturas110"
));

$proto19["m_sql"] = "lugar";
$proto19["m_srcTableName"] = "t_facturas110";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "t_facturas110",
	"m_srcTableName" => "t_facturas110"
));

$proto21["m_sql"] = "fecha";
$proto21["m_srcTableName"] = "t_facturas110";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "archivo_digital",
	"m_strTable" => "t_facturas110",
	"m_srcTableName" => "t_facturas110"
));

$proto23["m_sql"] = "archivo_digital";
$proto23["m_srcTableName"] = "t_facturas110";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "t_facturas110";
$proto26["m_srcTableName"] = "t_facturas110";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id_fac";
$proto26["m_columns"][] = "id_func";
$proto26["m_columns"][] = "gestion";
$proto26["m_columns"][] = "periodo";
$proto26["m_columns"][] = "mes_num";
$proto26["m_columns"][] = "monto_total";
$proto26["m_columns"][] = "monto_13";
$proto26["m_columns"][] = "lugar";
$proto26["m_columns"][] = "fecha";
$proto26["m_columns"][] = "archivo_digital";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "t_facturas110";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "t_facturas110";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_facturas110";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_facturas110 = createSqlQuery_t_facturas110();


	
										
	
$tdatat_facturas110[".sqlquery"] = $queryData_t_facturas110;

include_once(getabspath("include/t_facturas110_events.php"));
$tableEvents["t_facturas110"] = new eventclass_t_facturas110;
$tdatat_facturas110[".hasEvents"] = true;

?>