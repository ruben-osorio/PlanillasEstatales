<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_doc_file = array();	
	$tdatat_doc_file[".truncateText"] = true;
	$tdatat_doc_file[".NumberOfChars"] = 80; 
	$tdatat_doc_file[".ShortName"] = "t_doc_file";
	$tdatat_doc_file[".OwnerID"] = "";
	$tdatat_doc_file[".OriginalTable"] = "t_doc_file";

//	field labels
$fieldLabelst_doc_file = array();
$fieldToolTipst_doc_file = array();
$pageTitlest_doc_file = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_doc_file["Spanish"] = array();
	$fieldToolTipst_doc_file["Spanish"] = array();
	$pageTitlest_doc_file["Spanish"] = array();
	$fieldLabelst_doc_file["Spanish"]["id_doc_per"] = "Id Doc Per";
	$fieldToolTipst_doc_file["Spanish"]["id_doc_per"] = "";
	$fieldLabelst_doc_file["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipst_doc_file["Spanish"]["id_func"] = "";
	$fieldLabelst_doc_file["Spanish"]["cert_nac"] = "Cert. Nacimiento";
	$fieldToolTipst_doc_file["Spanish"]["cert_nac"] = "";
	$fieldLabelst_doc_file["Spanish"]["cert_nac_img"] = "C.N. Digital";
	$fieldToolTipst_doc_file["Spanish"]["cert_nac_img"] = "";
	$fieldLabelst_doc_file["Spanish"]["ci"] = "CI";
	$fieldToolTipst_doc_file["Spanish"]["ci"] = "";
	$fieldLabelst_doc_file["Spanish"]["ci_img"] = "CI Digital";
	$fieldToolTipst_doc_file["Spanish"]["ci_img"] = "";
	$fieldLabelst_doc_file["Spanish"]["libreta_mil"] = "Lib.Militar";
	$fieldToolTipst_doc_file["Spanish"]["libreta_mil"] = "";
	$fieldLabelst_doc_file["Spanish"]["libreta_mil_img"] = "L.M. Digital";
	$fieldToolTipst_doc_file["Spanish"]["libreta_mil_img"] = "";
	$fieldLabelst_doc_file["Spanish"]["segip"] = "SEGIP";
	$fieldToolTipst_doc_file["Spanish"]["segip"] = "";
	$fieldLabelst_doc_file["Spanish"]["segip_img"] = "SEGIP Digital";
	$fieldToolTipst_doc_file["Spanish"]["segip_img"] = "";
	if (count($fieldToolTipst_doc_file["Spanish"]))
		$tdatat_doc_file[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_doc_file[""] = array();
	$fieldToolTipst_doc_file[""] = array();
	$pageTitlest_doc_file[""] = array();
	$fieldLabelst_doc_file[""]["id_doc_per"] = "Id Doc Per";
	$fieldToolTipst_doc_file[""]["id_doc_per"] = "";
	$fieldLabelst_doc_file[""]["id_func"] = "Id Func";
	$fieldToolTipst_doc_file[""]["id_func"] = "";
	$fieldLabelst_doc_file[""]["cert_nac"] = "Cert Nac";
	$fieldToolTipst_doc_file[""]["cert_nac"] = "";
	$fieldLabelst_doc_file[""]["cert_nac_img"] = "Cert Nac Img";
	$fieldToolTipst_doc_file[""]["cert_nac_img"] = "";
	$fieldLabelst_doc_file[""]["ci"] = "Ci";
	$fieldToolTipst_doc_file[""]["ci"] = "";
	$fieldLabelst_doc_file[""]["ci_img"] = "Ci Img";
	$fieldToolTipst_doc_file[""]["ci_img"] = "";
	$fieldLabelst_doc_file[""]["libreta_mil"] = "Libreta Mil";
	$fieldToolTipst_doc_file[""]["libreta_mil"] = "";
	$fieldLabelst_doc_file[""]["libreta_mil_img"] = "Libreta Mil Img";
	$fieldToolTipst_doc_file[""]["libreta_mil_img"] = "";
	$fieldLabelst_doc_file[""]["segip"] = "Segip";
	$fieldToolTipst_doc_file[""]["segip"] = "";
	$fieldLabelst_doc_file[""]["segip_img"] = "Segip Img";
	$fieldToolTipst_doc_file[""]["segip_img"] = "";
	if (count($fieldToolTipst_doc_file[""]))
		$tdatat_doc_file[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_doc_file["English"] = array();
	$fieldToolTipst_doc_file["English"] = array();
	$pageTitlest_doc_file["English"] = array();
	$fieldLabelst_doc_file["English"]["id_doc_per"] = "Id Doc Per";
	$fieldToolTipst_doc_file["English"]["id_doc_per"] = "";
	$fieldLabelst_doc_file["English"]["id_func"] = "Id Func";
	$fieldToolTipst_doc_file["English"]["id_func"] = "";
	$fieldLabelst_doc_file["English"]["cert_nac"] = "Cert Nac";
	$fieldToolTipst_doc_file["English"]["cert_nac"] = "";
	$fieldLabelst_doc_file["English"]["cert_nac_img"] = "Cert Nac Img";
	$fieldToolTipst_doc_file["English"]["cert_nac_img"] = "";
	$fieldLabelst_doc_file["English"]["ci"] = "Ci";
	$fieldToolTipst_doc_file["English"]["ci"] = "";
	$fieldLabelst_doc_file["English"]["ci_img"] = "Ci Img";
	$fieldToolTipst_doc_file["English"]["ci_img"] = "";
	$fieldLabelst_doc_file["English"]["libreta_mil"] = "Libreta Mil";
	$fieldToolTipst_doc_file["English"]["libreta_mil"] = "";
	$fieldLabelst_doc_file["English"]["libreta_mil_img"] = "Libreta Mil Img";
	$fieldToolTipst_doc_file["English"]["libreta_mil_img"] = "";
	$fieldLabelst_doc_file["English"]["segip"] = "Segip";
	$fieldToolTipst_doc_file["English"]["segip"] = "";
	$fieldLabelst_doc_file["English"]["segip_img"] = "Segip Img";
	$fieldToolTipst_doc_file["English"]["segip_img"] = "";
	if (count($fieldToolTipst_doc_file["English"]))
		$tdatat_doc_file[".isUseToolTips"] = true;
}
	
	
	$tdatat_doc_file[".NCSearch"] = true;



$tdatat_doc_file[".shortTableName"] = "t_doc_file";
$tdatat_doc_file[".nSecOptions"] = 0;
$tdatat_doc_file[".recsPerRowList"] = 1;
$tdatat_doc_file[".recsPerRowPrint"] = 1;
$tdatat_doc_file[".mainTableOwnerID"] = "";
$tdatat_doc_file[".moveNext"] = 1;
$tdatat_doc_file[".entityType"] = 0;

$tdatat_doc_file[".strOriginalTableName"] = "t_doc_file";




$tdatat_doc_file[".showAddInPopup"] = false;

$tdatat_doc_file[".showEditInPopup"] = false;

$tdatat_doc_file[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_doc_file[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_doc_file[".fieldsForRegister"] = array();

$tdatat_doc_file[".listAjax"] = false;

	$tdatat_doc_file[".audit"] = false;

	$tdatat_doc_file[".locking"] = false;

$tdatat_doc_file[".edit"] = true;
$tdatat_doc_file[".afterEditAction"] = 1;
$tdatat_doc_file[".closePopupAfterEdit"] = 1;
$tdatat_doc_file[".afterEditActionDetTable"] = "";

$tdatat_doc_file[".add"] = true;
$tdatat_doc_file[".afterAddAction"] = 1;
$tdatat_doc_file[".closePopupAfterAdd"] = 1;
$tdatat_doc_file[".afterAddActionDetTable"] = "";

$tdatat_doc_file[".list"] = true;

$tdatat_doc_file[".inlineEdit"] = true;
$tdatat_doc_file[".inlineAdd"] = true;
$tdatat_doc_file[".view"] = true;

$tdatat_doc_file[".import"] = true;

$tdatat_doc_file[".exportTo"] = true;

$tdatat_doc_file[".printFriendly"] = true;

$tdatat_doc_file[".delete"] = true;

$tdatat_doc_file[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_doc_file[".searchSaving"] = false;
//

$tdatat_doc_file[".showSearchPanel"] = true;
		$tdatat_doc_file[".flexibleSearch"] = true;		

if (isMobile())
	$tdatat_doc_file[".isUseAjaxSuggest"] = false;
else 
	$tdatat_doc_file[".isUseAjaxSuggest"] = true;

$tdatat_doc_file[".rowHighlite"] = true;



$tdatat_doc_file[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_doc_file[".isUseTimeForSearch"] = false;





$tdatat_doc_file[".allSearchFields"] = array();
$tdatat_doc_file[".filterFields"] = array();
$tdatat_doc_file[".requiredSearchFields"] = array();

$tdatat_doc_file[".allSearchFields"][] = "cert_nac";
	$tdatat_doc_file[".allSearchFields"][] = "cert_nac_img";
	$tdatat_doc_file[".allSearchFields"][] = "ci";
	$tdatat_doc_file[".allSearchFields"][] = "ci_img";
	$tdatat_doc_file[".allSearchFields"][] = "libreta_mil";
	$tdatat_doc_file[".allSearchFields"][] = "libreta_mil_img";
	$tdatat_doc_file[".allSearchFields"][] = "segip";
	$tdatat_doc_file[".allSearchFields"][] = "segip_img";
	

$tdatat_doc_file[".googleLikeFields"] = array();
$tdatat_doc_file[".googleLikeFields"][] = "id_doc_per";
$tdatat_doc_file[".googleLikeFields"][] = "id_func";
$tdatat_doc_file[".googleLikeFields"][] = "cert_nac";
$tdatat_doc_file[".googleLikeFields"][] = "cert_nac_img";
$tdatat_doc_file[".googleLikeFields"][] = "ci";
$tdatat_doc_file[".googleLikeFields"][] = "ci_img";
$tdatat_doc_file[".googleLikeFields"][] = "libreta_mil";
$tdatat_doc_file[".googleLikeFields"][] = "libreta_mil_img";
$tdatat_doc_file[".googleLikeFields"][] = "segip";
$tdatat_doc_file[".googleLikeFields"][] = "segip_img";


$tdatat_doc_file[".advSearchFields"] = array();
$tdatat_doc_file[".advSearchFields"][] = "cert_nac";
$tdatat_doc_file[".advSearchFields"][] = "cert_nac_img";
$tdatat_doc_file[".advSearchFields"][] = "ci";
$tdatat_doc_file[".advSearchFields"][] = "ci_img";
$tdatat_doc_file[".advSearchFields"][] = "libreta_mil";
$tdatat_doc_file[".advSearchFields"][] = "libreta_mil_img";
$tdatat_doc_file[".advSearchFields"][] = "segip";
$tdatat_doc_file[".advSearchFields"][] = "segip_img";

$tdatat_doc_file[".tableType"] = "list";

$tdatat_doc_file[".printerPageOrientation"] = 0;
$tdatat_doc_file[".nPrinterPageScale"] = 100;

$tdatat_doc_file[".nPrinterSplitRecords"] = 40;

$tdatat_doc_file[".nPrinterPDFSplitRecords"] = 40;



$tdatat_doc_file[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatat_doc_file[".pageSize"] = 20;

$tdatat_doc_file[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_doc_file[".strOrderBy"] = $tstrOrderBy;

$tdatat_doc_file[".orderindexes"] = array();

$tdatat_doc_file[".sqlHead"] = "SELECT id_doc_per,  	id_func,  	cert_nac,  	cert_nac_img,  	ci,  	ci_img,  	libreta_mil,  	libreta_mil_img,  	segip,  	segip_img";
$tdatat_doc_file[".sqlFrom"] = "FROM t_doc_file";
$tdatat_doc_file[".sqlWhereExpr"] = "";
$tdatat_doc_file[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_doc_file[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_doc_file[".arrGroupsPerPage"] = $arrGPP;

$tdatat_doc_file[".highlightSearchResults"] = true;

$tableKeyst_doc_file = array();
$tableKeyst_doc_file[] = "id_doc_per";
$tdatat_doc_file[".Keys"] = $tableKeyst_doc_file;

$tdatat_doc_file[".listFields"] = array();
$tdatat_doc_file[".listFields"][] = "id_doc_per";
$tdatat_doc_file[".listFields"][] = "id_func";
$tdatat_doc_file[".listFields"][] = "cert_nac";
$tdatat_doc_file[".listFields"][] = "cert_nac_img";
$tdatat_doc_file[".listFields"][] = "ci";
$tdatat_doc_file[".listFields"][] = "ci_img";
$tdatat_doc_file[".listFields"][] = "libreta_mil";
$tdatat_doc_file[".listFields"][] = "libreta_mil_img";
$tdatat_doc_file[".listFields"][] = "segip";
$tdatat_doc_file[".listFields"][] = "segip_img";

$tdatat_doc_file[".hideMobileList"] = array();


$tdatat_doc_file[".viewFields"] = array();
$tdatat_doc_file[".viewFields"][] = "cert_nac";
$tdatat_doc_file[".viewFields"][] = "cert_nac_img";
$tdatat_doc_file[".viewFields"][] = "ci";
$tdatat_doc_file[".viewFields"][] = "ci_img";
$tdatat_doc_file[".viewFields"][] = "libreta_mil";
$tdatat_doc_file[".viewFields"][] = "libreta_mil_img";
$tdatat_doc_file[".viewFields"][] = "segip";
$tdatat_doc_file[".viewFields"][] = "segip_img";

$tdatat_doc_file[".addFields"] = array();
$tdatat_doc_file[".addFields"][] = "cert_nac";
$tdatat_doc_file[".addFields"][] = "cert_nac_img";
$tdatat_doc_file[".addFields"][] = "ci";
$tdatat_doc_file[".addFields"][] = "ci_img";
$tdatat_doc_file[".addFields"][] = "libreta_mil";
$tdatat_doc_file[".addFields"][] = "libreta_mil_img";
$tdatat_doc_file[".addFields"][] = "segip";
$tdatat_doc_file[".addFields"][] = "segip_img";

$tdatat_doc_file[".masterListFields"] = array();
$tdatat_doc_file[".masterListFields"][] = "id_doc_per";
$tdatat_doc_file[".masterListFields"][] = "id_func";
$tdatat_doc_file[".masterListFields"][] = "cert_nac";
$tdatat_doc_file[".masterListFields"][] = "cert_nac_img";
$tdatat_doc_file[".masterListFields"][] = "ci";
$tdatat_doc_file[".masterListFields"][] = "ci_img";
$tdatat_doc_file[".masterListFields"][] = "libreta_mil";
$tdatat_doc_file[".masterListFields"][] = "libreta_mil_img";
$tdatat_doc_file[".masterListFields"][] = "segip";
$tdatat_doc_file[".masterListFields"][] = "segip_img";

$tdatat_doc_file[".inlineAddFields"] = array();
$tdatat_doc_file[".inlineAddFields"][] = "cert_nac";
$tdatat_doc_file[".inlineAddFields"][] = "cert_nac_img";
$tdatat_doc_file[".inlineAddFields"][] = "ci";
$tdatat_doc_file[".inlineAddFields"][] = "ci_img";
$tdatat_doc_file[".inlineAddFields"][] = "libreta_mil";
$tdatat_doc_file[".inlineAddFields"][] = "libreta_mil_img";
$tdatat_doc_file[".inlineAddFields"][] = "segip";
$tdatat_doc_file[".inlineAddFields"][] = "segip_img";

$tdatat_doc_file[".editFields"] = array();
$tdatat_doc_file[".editFields"][] = "cert_nac";
$tdatat_doc_file[".editFields"][] = "cert_nac_img";
$tdatat_doc_file[".editFields"][] = "ci";
$tdatat_doc_file[".editFields"][] = "ci_img";
$tdatat_doc_file[".editFields"][] = "libreta_mil";
$tdatat_doc_file[".editFields"][] = "libreta_mil_img";
$tdatat_doc_file[".editFields"][] = "segip";
$tdatat_doc_file[".editFields"][] = "segip_img";

$tdatat_doc_file[".inlineEditFields"] = array();
$tdatat_doc_file[".inlineEditFields"][] = "cert_nac";
$tdatat_doc_file[".inlineEditFields"][] = "cert_nac_img";
$tdatat_doc_file[".inlineEditFields"][] = "ci";
$tdatat_doc_file[".inlineEditFields"][] = "ci_img";
$tdatat_doc_file[".inlineEditFields"][] = "libreta_mil";
$tdatat_doc_file[".inlineEditFields"][] = "libreta_mil_img";
$tdatat_doc_file[".inlineEditFields"][] = "segip";
$tdatat_doc_file[".inlineEditFields"][] = "segip_img";

$tdatat_doc_file[".exportFields"] = array();

$tdatat_doc_file[".importFields"] = array();

$tdatat_doc_file[".printFields"] = array();

//	id_doc_per
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_doc_per";
	$fdata["GoodName"] = "id_doc_per";
	$fdata["ownerTable"] = "t_doc_file";
	$fdata["Label"] = GetFieldLabel("t_doc_file","id_doc_per"); 
	$fdata["FieldType"] = 2;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id_doc_per"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_doc_per";
	
		
		
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
	
	
	
	

	

	
	$tdatat_doc_file["id_doc_per"] = $fdata;
//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "t_doc_file";
	$fdata["Label"] = GetFieldLabel("t_doc_file","id_func"); 
	$fdata["FieldType"] = 2;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
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
	
	
	
	

	

	
	$tdatat_doc_file["id_func"] = $fdata;
//	cert_nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cert_nac";
	$fdata["GoodName"] = "cert_nac";
	$fdata["ownerTable"] = "t_doc_file";
	$fdata["Label"] = GetFieldLabel("t_doc_file","cert_nac"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "cert_nac"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_nac";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
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

	

	
	$tdatat_doc_file["cert_nac"] = $fdata;
//	cert_nac_img
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cert_nac_img";
	$fdata["GoodName"] = "cert_nac_img";
	$fdata["ownerTable"] = "t_doc_file";
	$fdata["Label"] = GetFieldLabel("t_doc_file","cert_nac_img"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "cert_nac_img"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_nac_img";
	
		
		
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

	

	
	$tdatat_doc_file["cert_nac_img"] = $fdata;
//	ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ci";
	$fdata["GoodName"] = "ci";
	$fdata["ownerTable"] = "t_doc_file";
	$fdata["Label"] = GetFieldLabel("t_doc_file","ci"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ci"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ci";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
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

	

	
	$tdatat_doc_file["ci"] = $fdata;
//	ci_img
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ci_img";
	$fdata["GoodName"] = "ci_img";
	$fdata["ownerTable"] = "t_doc_file";
	$fdata["Label"] = GetFieldLabel("t_doc_file","ci_img"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ci_img"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ci_img";
	
		
		
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

	

	
	$tdatat_doc_file["ci_img"] = $fdata;
//	libreta_mil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "libreta_mil";
	$fdata["GoodName"] = "libreta_mil";
	$fdata["ownerTable"] = "t_doc_file";
	$fdata["Label"] = GetFieldLabel("t_doc_file","libreta_mil"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "libreta_mil"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "libreta_mil";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
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

	

	
	$tdatat_doc_file["libreta_mil"] = $fdata;
//	libreta_mil_img
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "libreta_mil_img";
	$fdata["GoodName"] = "libreta_mil_img";
	$fdata["ownerTable"] = "t_doc_file";
	$fdata["Label"] = GetFieldLabel("t_doc_file","libreta_mil_img"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "libreta_mil_img"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "libreta_mil_img";
	
		
		
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

	

	
	$tdatat_doc_file["libreta_mil_img"] = $fdata;
//	segip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "segip";
	$fdata["GoodName"] = "segip";
	$fdata["ownerTable"] = "t_doc_file";
	$fdata["Label"] = GetFieldLabel("t_doc_file","segip"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "segip"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "segip";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
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

	

	
	$tdatat_doc_file["segip"] = $fdata;
//	segip_img
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "segip_img";
	$fdata["GoodName"] = "segip_img";
	$fdata["ownerTable"] = "t_doc_file";
	$fdata["Label"] = GetFieldLabel("t_doc_file","segip_img"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "segip_img"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "segip_img";
	
		
		
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

	

	
	$tdatat_doc_file["segip_img"] = $fdata;

	
$tables_data["t_doc_file"]=&$tdatat_doc_file;
$field_labels["t_doc_file"] = &$fieldLabelst_doc_file;
$fieldToolTips["t_doc_file"] = &$fieldToolTipst_doc_file;
$page_titles["t_doc_file"] = &$pageTitlest_doc_file;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_doc_file"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_doc_file"] = array();


	
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
					$masterTablesData["t_doc_file"][0] = $masterParams;	
				$masterTablesData["t_doc_file"][0]["masterKeys"] = array();
	$masterTablesData["t_doc_file"][0]["masterKeys"][]="id_func";
				$masterTablesData["t_doc_file"][0]["detailKeys"] = array();
	$masterTablesData["t_doc_file"][0]["detailKeys"][]="id_func";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_doc_file()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_doc_per,  	id_func,  	cert_nac,  	cert_nac_img,  	ci,  	ci_img,  	libreta_mil,  	libreta_mil_img,  	segip,  	segip_img";
$proto0["m_strFrom"] = "FROM t_doc_file";
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
	"m_strName" => "id_doc_per",
	"m_strTable" => "t_doc_file",
	"m_srcTableName" => "t_doc_file"
));

$proto5["m_sql"] = "id_doc_per";
$proto5["m_srcTableName"] = "t_doc_file";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_func",
	"m_strTable" => "t_doc_file",
	"m_srcTableName" => "t_doc_file"
));

$proto7["m_sql"] = "id_func";
$proto7["m_srcTableName"] = "t_doc_file";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_nac",
	"m_strTable" => "t_doc_file",
	"m_srcTableName" => "t_doc_file"
));

$proto9["m_sql"] = "cert_nac";
$proto9["m_srcTableName"] = "t_doc_file";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_nac_img",
	"m_strTable" => "t_doc_file",
	"m_srcTableName" => "t_doc_file"
));

$proto11["m_sql"] = "cert_nac_img";
$proto11["m_srcTableName"] = "t_doc_file";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "ci",
	"m_strTable" => "t_doc_file",
	"m_srcTableName" => "t_doc_file"
));

$proto13["m_sql"] = "ci";
$proto13["m_srcTableName"] = "t_doc_file";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "ci_img",
	"m_strTable" => "t_doc_file",
	"m_srcTableName" => "t_doc_file"
));

$proto15["m_sql"] = "ci_img";
$proto15["m_srcTableName"] = "t_doc_file";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "libreta_mil",
	"m_strTable" => "t_doc_file",
	"m_srcTableName" => "t_doc_file"
));

$proto17["m_sql"] = "libreta_mil";
$proto17["m_srcTableName"] = "t_doc_file";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "libreta_mil_img",
	"m_strTable" => "t_doc_file",
	"m_srcTableName" => "t_doc_file"
));

$proto19["m_sql"] = "libreta_mil_img";
$proto19["m_srcTableName"] = "t_doc_file";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "segip",
	"m_strTable" => "t_doc_file",
	"m_srcTableName" => "t_doc_file"
));

$proto21["m_sql"] = "segip";
$proto21["m_srcTableName"] = "t_doc_file";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "segip_img",
	"m_strTable" => "t_doc_file",
	"m_srcTableName" => "t_doc_file"
));

$proto23["m_sql"] = "segip_img";
$proto23["m_srcTableName"] = "t_doc_file";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "t_doc_file";
$proto26["m_srcTableName"] = "t_doc_file";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id_doc_per";
$proto26["m_columns"][] = "id_func";
$proto26["m_columns"][] = "cert_nac";
$proto26["m_columns"][] = "cert_nac_img";
$proto26["m_columns"][] = "ci";
$proto26["m_columns"][] = "ci_img";
$proto26["m_columns"][] = "libreta_mil";
$proto26["m_columns"][] = "libreta_mil_img";
$proto26["m_columns"][] = "segip";
$proto26["m_columns"][] = "segip_img";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "t_doc_file";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "t_doc_file";
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
$proto0["m_srcTableName"]="t_doc_file";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_doc_file = createSqlQuery_t_doc_file();


	
										
	
$tdatat_doc_file[".sqlquery"] = $queryData_t_doc_file;

$tableEvents["t_doc_file"] = new eventsBase;
$tdatat_doc_file[".hasEvents"] = false;

?>