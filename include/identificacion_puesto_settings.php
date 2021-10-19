<?php
require_once(getabspath("classes/cipherer.php"));




$tdataidentificacion_puesto = array();	
	$tdataidentificacion_puesto[".truncateText"] = true;
	$tdataidentificacion_puesto[".NumberOfChars"] = 80; 
	$tdataidentificacion_puesto[".ShortName"] = "identificacion_puesto";
	$tdataidentificacion_puesto[".OwnerID"] = "";
	$tdataidentificacion_puesto[".OriginalTable"] = "identificacion_puesto";

//	field labels
$fieldLabelsidentificacion_puesto = array();
$fieldToolTipsidentificacion_puesto = array();
$pageTitlesidentificacion_puesto = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsidentificacion_puesto["Spanish"] = array();
	$fieldToolTipsidentificacion_puesto["Spanish"] = array();
	$pageTitlesidentificacion_puesto["Spanish"] = array();
	$fieldLabelsidentificacion_puesto["Spanish"]["id"] = "Id";
	$fieldToolTipsidentificacion_puesto["Spanish"]["id"] = "";
	$fieldLabelsidentificacion_puesto["Spanish"]["id_per"] = "Id Per";
	$fieldToolTipsidentificacion_puesto["Spanish"]["id_per"] = "";
	$fieldLabelsidentificacion_puesto["Spanish"]["denominacion"] = "Denominación";
	$fieldToolTipsidentificacion_puesto["Spanish"]["denominacion"] = "";
	$fieldLabelsidentificacion_puesto["Spanish"]["nombre_funcional"] = "Nombre Funcional";
	$fieldToolTipsidentificacion_puesto["Spanish"]["nombre_funcional"] = "";
	$fieldLabelsidentificacion_puesto["Spanish"]["unidad_organizacional"] = "Unidad Organizacional";
	$fieldToolTipsidentificacion_puesto["Spanish"]["unidad_organizacional"] = "";
	$fieldLabelsidentificacion_puesto["Spanish"]["supervisa_a"] = "Supervisa  A";
	$fieldToolTipsidentificacion_puesto["Spanish"]["supervisa_a"] = "";
	$fieldLabelsidentificacion_puesto["Spanish"]["codigo"] = "Código";
	$fieldToolTipsidentificacion_puesto["Spanish"]["codigo"] = "";
	$fieldLabelsidentificacion_puesto["Spanish"]["categoria"] = "Categoría";
	$fieldToolTipsidentificacion_puesto["Spanish"]["categoria"] = "";
	$fieldLabelsidentificacion_puesto["Spanish"]["nivel"] = "Nivel";
	$fieldToolTipsidentificacion_puesto["Spanish"]["nivel"] = "";
	$fieldLabelsidentificacion_puesto["Spanish"]["jefe_inmediato_superior"] = "Jefe Inmediato Superior";
	$fieldToolTipsidentificacion_puesto["Spanish"]["jefe_inmediato_superior"] = "";
	$fieldLabelsidentificacion_puesto["Spanish"]["jefe_supeior_jerarquico"] = "Jefe Supeior Jerarquico";
	$fieldToolTipsidentificacion_puesto["Spanish"]["jefe_supeior_jerarquico"] = "";
	$fieldLabelsidentificacion_puesto["Spanish"]["updated_at"] = "Fecha de actualización";
	$fieldToolTipsidentificacion_puesto["Spanish"]["updated_at"] = "";
	$fieldLabelsidentificacion_puesto["Spanish"]["created_at"] = "Fecha de creación";
	$fieldToolTipsidentificacion_puesto["Spanish"]["created_at"] = "";
	if (count($fieldToolTipsidentificacion_puesto["Spanish"]))
		$tdataidentificacion_puesto[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsidentificacion_puesto[""] = array();
	$fieldToolTipsidentificacion_puesto[""] = array();
	$pageTitlesidentificacion_puesto[""] = array();
	if (count($fieldToolTipsidentificacion_puesto[""]))
		$tdataidentificacion_puesto[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsidentificacion_puesto["English"] = array();
	$fieldToolTipsidentificacion_puesto["English"] = array();
	$pageTitlesidentificacion_puesto["English"] = array();
	if (count($fieldToolTipsidentificacion_puesto["English"]))
		$tdataidentificacion_puesto[".isUseToolTips"] = true;
}
	
	
	$tdataidentificacion_puesto[".NCSearch"] = true;



$tdataidentificacion_puesto[".shortTableName"] = "identificacion_puesto";
$tdataidentificacion_puesto[".nSecOptions"] = 0;
$tdataidentificacion_puesto[".recsPerRowList"] = 1;
$tdataidentificacion_puesto[".recsPerRowPrint"] = 1;
$tdataidentificacion_puesto[".mainTableOwnerID"] = "";
$tdataidentificacion_puesto[".moveNext"] = 1;
$tdataidentificacion_puesto[".entityType"] = 0;

$tdataidentificacion_puesto[".strOriginalTableName"] = "identificacion_puesto";




$tdataidentificacion_puesto[".showAddInPopup"] = false;

$tdataidentificacion_puesto[".showEditInPopup"] = false;

$tdataidentificacion_puesto[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataidentificacion_puesto[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataidentificacion_puesto[".fieldsForRegister"] = array();

$tdataidentificacion_puesto[".listAjax"] = false;

	$tdataidentificacion_puesto[".audit"] = false;

	$tdataidentificacion_puesto[".locking"] = false;

$tdataidentificacion_puesto[".edit"] = true;
$tdataidentificacion_puesto[".afterEditAction"] = 1;
$tdataidentificacion_puesto[".closePopupAfterEdit"] = 1;
$tdataidentificacion_puesto[".afterEditActionDetTable"] = "";

$tdataidentificacion_puesto[".add"] = true;
$tdataidentificacion_puesto[".afterAddAction"] = 1;
$tdataidentificacion_puesto[".closePopupAfterAdd"] = 1;
$tdataidentificacion_puesto[".afterAddActionDetTable"] = "";

$tdataidentificacion_puesto[".list"] = true;

$tdataidentificacion_puesto[".inlineEdit"] = true;
$tdataidentificacion_puesto[".inlineAdd"] = true;
$tdataidentificacion_puesto[".view"] = true;




$tdataidentificacion_puesto[".delete"] = true;

$tdataidentificacion_puesto[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataidentificacion_puesto[".searchSaving"] = false;
//

$tdataidentificacion_puesto[".showSearchPanel"] = true;
		$tdataidentificacion_puesto[".flexibleSearch"] = true;		

if (isMobile())
	$tdataidentificacion_puesto[".isUseAjaxSuggest"] = false;
else 
	$tdataidentificacion_puesto[".isUseAjaxSuggest"] = true;

$tdataidentificacion_puesto[".rowHighlite"] = true;



$tdataidentificacion_puesto[".addPageEvents"] = false;

// use timepicker for search panel
$tdataidentificacion_puesto[".isUseTimeForSearch"] = false;





$tdataidentificacion_puesto[".allSearchFields"] = array();
$tdataidentificacion_puesto[".filterFields"] = array();
$tdataidentificacion_puesto[".requiredSearchFields"] = array();

$tdataidentificacion_puesto[".allSearchFields"][] = "id";
	$tdataidentificacion_puesto[".allSearchFields"][] = "id_per";
	$tdataidentificacion_puesto[".allSearchFields"][] = "denominacion";
	$tdataidentificacion_puesto[".allSearchFields"][] = "nombre_funcional";
	$tdataidentificacion_puesto[".allSearchFields"][] = "unidad_organizacional";
	$tdataidentificacion_puesto[".allSearchFields"][] = "supervisa_a";
	$tdataidentificacion_puesto[".allSearchFields"][] = "codigo";
	$tdataidentificacion_puesto[".allSearchFields"][] = "categoria";
	$tdataidentificacion_puesto[".allSearchFields"][] = "nivel";
	$tdataidentificacion_puesto[".allSearchFields"][] = "jefe_inmediato_superior";
	$tdataidentificacion_puesto[".allSearchFields"][] = "jefe_supeior_jerarquico";
	$tdataidentificacion_puesto[".allSearchFields"][] = "updated_at";
	$tdataidentificacion_puesto[".allSearchFields"][] = "created_at";
	

$tdataidentificacion_puesto[".googleLikeFields"] = array();
$tdataidentificacion_puesto[".googleLikeFields"][] = "id";
$tdataidentificacion_puesto[".googleLikeFields"][] = "id_per";
$tdataidentificacion_puesto[".googleLikeFields"][] = "denominacion";
$tdataidentificacion_puesto[".googleLikeFields"][] = "nombre_funcional";
$tdataidentificacion_puesto[".googleLikeFields"][] = "unidad_organizacional";
$tdataidentificacion_puesto[".googleLikeFields"][] = "supervisa_a";
$tdataidentificacion_puesto[".googleLikeFields"][] = "codigo";
$tdataidentificacion_puesto[".googleLikeFields"][] = "categoria";
$tdataidentificacion_puesto[".googleLikeFields"][] = "nivel";
$tdataidentificacion_puesto[".googleLikeFields"][] = "jefe_inmediato_superior";
$tdataidentificacion_puesto[".googleLikeFields"][] = "jefe_supeior_jerarquico";
$tdataidentificacion_puesto[".googleLikeFields"][] = "updated_at";
$tdataidentificacion_puesto[".googleLikeFields"][] = "created_at";


$tdataidentificacion_puesto[".advSearchFields"] = array();
$tdataidentificacion_puesto[".advSearchFields"][] = "id";
$tdataidentificacion_puesto[".advSearchFields"][] = "id_per";
$tdataidentificacion_puesto[".advSearchFields"][] = "denominacion";
$tdataidentificacion_puesto[".advSearchFields"][] = "nombre_funcional";
$tdataidentificacion_puesto[".advSearchFields"][] = "unidad_organizacional";
$tdataidentificacion_puesto[".advSearchFields"][] = "supervisa_a";
$tdataidentificacion_puesto[".advSearchFields"][] = "codigo";
$tdataidentificacion_puesto[".advSearchFields"][] = "categoria";
$tdataidentificacion_puesto[".advSearchFields"][] = "nivel";
$tdataidentificacion_puesto[".advSearchFields"][] = "jefe_inmediato_superior";
$tdataidentificacion_puesto[".advSearchFields"][] = "jefe_supeior_jerarquico";
$tdataidentificacion_puesto[".advSearchFields"][] = "updated_at";
$tdataidentificacion_puesto[".advSearchFields"][] = "created_at";

$tdataidentificacion_puesto[".tableType"] = "list";

$tdataidentificacion_puesto[".printerPageOrientation"] = 0;
$tdataidentificacion_puesto[".nPrinterPageScale"] = 100;

$tdataidentificacion_puesto[".nPrinterSplitRecords"] = 40;

$tdataidentificacion_puesto[".nPrinterPDFSplitRecords"] = 40;



$tdataidentificacion_puesto[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataidentificacion_puesto[".pageSize"] = 20;

$tdataidentificacion_puesto[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataidentificacion_puesto[".strOrderBy"] = $tstrOrderBy;

$tdataidentificacion_puesto[".orderindexes"] = array();

$tdataidentificacion_puesto[".sqlHead"] = "SELECT id,  	id_per,  	denominacion,  	nombre_funcional,  	unidad_organizacional,  	supervisa_a,  	codigo,  	categoria,  	nivel,  	jefe_inmediato_superior,  	jefe_supeior_jerarquico,  	updated_at,  	created_at";
$tdataidentificacion_puesto[".sqlFrom"] = "FROM identificacion_puesto";
$tdataidentificacion_puesto[".sqlWhereExpr"] = "";
$tdataidentificacion_puesto[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataidentificacion_puesto[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataidentificacion_puesto[".arrGroupsPerPage"] = $arrGPP;

$tdataidentificacion_puesto[".highlightSearchResults"] = true;

$tableKeysidentificacion_puesto = array();
$tableKeysidentificacion_puesto[] = "id";
$tdataidentificacion_puesto[".Keys"] = $tableKeysidentificacion_puesto;

$tdataidentificacion_puesto[".listFields"] = array();
$tdataidentificacion_puesto[".listFields"][] = "id";
$tdataidentificacion_puesto[".listFields"][] = "id_per";
$tdataidentificacion_puesto[".listFields"][] = "denominacion";
$tdataidentificacion_puesto[".listFields"][] = "nombre_funcional";
$tdataidentificacion_puesto[".listFields"][] = "unidad_organizacional";
$tdataidentificacion_puesto[".listFields"][] = "supervisa_a";
$tdataidentificacion_puesto[".listFields"][] = "codigo";
$tdataidentificacion_puesto[".listFields"][] = "categoria";
$tdataidentificacion_puesto[".listFields"][] = "nivel";
$tdataidentificacion_puesto[".listFields"][] = "jefe_inmediato_superior";
$tdataidentificacion_puesto[".listFields"][] = "jefe_supeior_jerarquico";
$tdataidentificacion_puesto[".listFields"][] = "updated_at";
$tdataidentificacion_puesto[".listFields"][] = "created_at";

$tdataidentificacion_puesto[".hideMobileList"] = array();


$tdataidentificacion_puesto[".viewFields"] = array();
$tdataidentificacion_puesto[".viewFields"][] = "id";
$tdataidentificacion_puesto[".viewFields"][] = "id_per";
$tdataidentificacion_puesto[".viewFields"][] = "denominacion";
$tdataidentificacion_puesto[".viewFields"][] = "nombre_funcional";
$tdataidentificacion_puesto[".viewFields"][] = "unidad_organizacional";
$tdataidentificacion_puesto[".viewFields"][] = "supervisa_a";
$tdataidentificacion_puesto[".viewFields"][] = "codigo";
$tdataidentificacion_puesto[".viewFields"][] = "categoria";
$tdataidentificacion_puesto[".viewFields"][] = "nivel";
$tdataidentificacion_puesto[".viewFields"][] = "jefe_inmediato_superior";
$tdataidentificacion_puesto[".viewFields"][] = "jefe_supeior_jerarquico";
$tdataidentificacion_puesto[".viewFields"][] = "updated_at";
$tdataidentificacion_puesto[".viewFields"][] = "created_at";

$tdataidentificacion_puesto[".addFields"] = array();
$tdataidentificacion_puesto[".addFields"][] = "id_per";
$tdataidentificacion_puesto[".addFields"][] = "denominacion";
$tdataidentificacion_puesto[".addFields"][] = "nombre_funcional";
$tdataidentificacion_puesto[".addFields"][] = "unidad_organizacional";
$tdataidentificacion_puesto[".addFields"][] = "supervisa_a";
$tdataidentificacion_puesto[".addFields"][] = "codigo";
$tdataidentificacion_puesto[".addFields"][] = "categoria";
$tdataidentificacion_puesto[".addFields"][] = "nivel";
$tdataidentificacion_puesto[".addFields"][] = "jefe_inmediato_superior";
$tdataidentificacion_puesto[".addFields"][] = "jefe_supeior_jerarquico";
$tdataidentificacion_puesto[".addFields"][] = "updated_at";
$tdataidentificacion_puesto[".addFields"][] = "created_at";

$tdataidentificacion_puesto[".masterListFields"] = array();
$tdataidentificacion_puesto[".masterListFields"][] = "id";
$tdataidentificacion_puesto[".masterListFields"][] = "id_per";
$tdataidentificacion_puesto[".masterListFields"][] = "denominacion";
$tdataidentificacion_puesto[".masterListFields"][] = "nombre_funcional";
$tdataidentificacion_puesto[".masterListFields"][] = "unidad_organizacional";
$tdataidentificacion_puesto[".masterListFields"][] = "supervisa_a";
$tdataidentificacion_puesto[".masterListFields"][] = "codigo";
$tdataidentificacion_puesto[".masterListFields"][] = "categoria";
$tdataidentificacion_puesto[".masterListFields"][] = "nivel";
$tdataidentificacion_puesto[".masterListFields"][] = "jefe_inmediato_superior";
$tdataidentificacion_puesto[".masterListFields"][] = "jefe_supeior_jerarquico";
$tdataidentificacion_puesto[".masterListFields"][] = "updated_at";
$tdataidentificacion_puesto[".masterListFields"][] = "created_at";

$tdataidentificacion_puesto[".inlineAddFields"] = array();
$tdataidentificacion_puesto[".inlineAddFields"][] = "id_per";
$tdataidentificacion_puesto[".inlineAddFields"][] = "denominacion";
$tdataidentificacion_puesto[".inlineAddFields"][] = "nombre_funcional";
$tdataidentificacion_puesto[".inlineAddFields"][] = "unidad_organizacional";
$tdataidentificacion_puesto[".inlineAddFields"][] = "supervisa_a";
$tdataidentificacion_puesto[".inlineAddFields"][] = "codigo";
$tdataidentificacion_puesto[".inlineAddFields"][] = "categoria";
$tdataidentificacion_puesto[".inlineAddFields"][] = "nivel";
$tdataidentificacion_puesto[".inlineAddFields"][] = "jefe_inmediato_superior";
$tdataidentificacion_puesto[".inlineAddFields"][] = "jefe_supeior_jerarquico";
$tdataidentificacion_puesto[".inlineAddFields"][] = "updated_at";
$tdataidentificacion_puesto[".inlineAddFields"][] = "created_at";

$tdataidentificacion_puesto[".editFields"] = array();
$tdataidentificacion_puesto[".editFields"][] = "id_per";
$tdataidentificacion_puesto[".editFields"][] = "denominacion";
$tdataidentificacion_puesto[".editFields"][] = "nombre_funcional";
$tdataidentificacion_puesto[".editFields"][] = "unidad_organizacional";
$tdataidentificacion_puesto[".editFields"][] = "supervisa_a";
$tdataidentificacion_puesto[".editFields"][] = "codigo";
$tdataidentificacion_puesto[".editFields"][] = "categoria";
$tdataidentificacion_puesto[".editFields"][] = "nivel";
$tdataidentificacion_puesto[".editFields"][] = "jefe_inmediato_superior";
$tdataidentificacion_puesto[".editFields"][] = "jefe_supeior_jerarquico";
$tdataidentificacion_puesto[".editFields"][] = "updated_at";
$tdataidentificacion_puesto[".editFields"][] = "created_at";

$tdataidentificacion_puesto[".inlineEditFields"] = array();
$tdataidentificacion_puesto[".inlineEditFields"][] = "id_per";
$tdataidentificacion_puesto[".inlineEditFields"][] = "denominacion";
$tdataidentificacion_puesto[".inlineEditFields"][] = "nombre_funcional";
$tdataidentificacion_puesto[".inlineEditFields"][] = "unidad_organizacional";
$tdataidentificacion_puesto[".inlineEditFields"][] = "supervisa_a";
$tdataidentificacion_puesto[".inlineEditFields"][] = "codigo";
$tdataidentificacion_puesto[".inlineEditFields"][] = "categoria";
$tdataidentificacion_puesto[".inlineEditFields"][] = "nivel";
$tdataidentificacion_puesto[".inlineEditFields"][] = "jefe_inmediato_superior";
$tdataidentificacion_puesto[".inlineEditFields"][] = "jefe_supeior_jerarquico";
$tdataidentificacion_puesto[".inlineEditFields"][] = "updated_at";
$tdataidentificacion_puesto[".inlineEditFields"][] = "created_at";

$tdataidentificacion_puesto[".exportFields"] = array();

$tdataidentificacion_puesto[".importFields"] = array();

$tdataidentificacion_puesto[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "identificacion_puesto";
	$fdata["Label"] = GetFieldLabel("identificacion_puesto","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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

	

	
	$tdataidentificacion_puesto["id"] = $fdata;
//	id_per
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_per";
	$fdata["GoodName"] = "id_per";
	$fdata["ownerTable"] = "identificacion_puesto";
	$fdata["Label"] = GetFieldLabel("identificacion_puesto","id_per"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id_per"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_per";
	
		
		
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

	

	
	$tdataidentificacion_puesto["id_per"] = $fdata;
//	denominacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "denominacion";
	$fdata["GoodName"] = "denominacion";
	$fdata["ownerTable"] = "identificacion_puesto";
	$fdata["Label"] = GetFieldLabel("identificacion_puesto","denominacion"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "denominacion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "denominacion";
	
		
		
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
			$edata["EditParams"].= " maxlength=250";
	
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

	

	
	$tdataidentificacion_puesto["denominacion"] = $fdata;
//	nombre_funcional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre_funcional";
	$fdata["GoodName"] = "nombre_funcional";
	$fdata["ownerTable"] = "identificacion_puesto";
	$fdata["Label"] = GetFieldLabel("identificacion_puesto","nombre_funcional"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "nombre_funcional"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_funcional";
	
		
		
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
			$edata["EditParams"].= " maxlength=250";
	
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

	

	
	$tdataidentificacion_puesto["nombre_funcional"] = $fdata;
//	unidad_organizacional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "unidad_organizacional";
	$fdata["GoodName"] = "unidad_organizacional";
	$fdata["ownerTable"] = "identificacion_puesto";
	$fdata["Label"] = GetFieldLabel("identificacion_puesto","unidad_organizacional"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "unidad_organizacional"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unidad_organizacional";
	
		
		
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
			$edata["EditParams"].= " maxlength=250";
	
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

	

	
	$tdataidentificacion_puesto["unidad_organizacional"] = $fdata;
//	supervisa_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "supervisa_a";
	$fdata["GoodName"] = "supervisa_a";
	$fdata["ownerTable"] = "identificacion_puesto";
	$fdata["Label"] = GetFieldLabel("identificacion_puesto","supervisa_a"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "supervisa_a"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "supervisa_a";
	
		
		
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
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdataidentificacion_puesto["supervisa_a"] = $fdata;
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "identificacion_puesto";
	$fdata["Label"] = GetFieldLabel("identificacion_puesto","codigo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "codigo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigo";
	
		
		
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

	

	
	$tdataidentificacion_puesto["codigo"] = $fdata;
//	categoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "categoria";
	$fdata["GoodName"] = "categoria";
	$fdata["ownerTable"] = "identificacion_puesto";
	$fdata["Label"] = GetFieldLabel("identificacion_puesto","categoria"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "categoria"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "categoria";
	
		
		
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
			$edata["EditParams"].= " maxlength=30";
	
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

	

	
	$tdataidentificacion_puesto["categoria"] = $fdata;
//	nivel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "nivel";
	$fdata["GoodName"] = "nivel";
	$fdata["ownerTable"] = "identificacion_puesto";
	$fdata["Label"] = GetFieldLabel("identificacion_puesto","nivel"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "nivel"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nivel";
	
		
		
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
			$edata["EditParams"].= " maxlength=30";
	
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

	

	
	$tdataidentificacion_puesto["nivel"] = $fdata;
//	jefe_inmediato_superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "jefe_inmediato_superior";
	$fdata["GoodName"] = "jefe_inmediato_superior";
	$fdata["ownerTable"] = "identificacion_puesto";
	$fdata["Label"] = GetFieldLabel("identificacion_puesto","jefe_inmediato_superior"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "jefe_inmediato_superior"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jefe_inmediato_superior";
	
		
		
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
			$edata["EditParams"].= " maxlength=250";
	
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

	

	
	$tdataidentificacion_puesto["jefe_inmediato_superior"] = $fdata;
//	jefe_supeior_jerarquico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "jefe_supeior_jerarquico";
	$fdata["GoodName"] = "jefe_supeior_jerarquico";
	$fdata["ownerTable"] = "identificacion_puesto";
	$fdata["Label"] = GetFieldLabel("identificacion_puesto","jefe_supeior_jerarquico"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "jefe_supeior_jerarquico"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jefe_supeior_jerarquico";
	
		
		
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
			$edata["EditParams"].= " maxlength=250";
	
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

	

	
	$tdataidentificacion_puesto["jefe_supeior_jerarquico"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "identificacion_puesto";
	$fdata["Label"] = GetFieldLabel("identificacion_puesto","updated_at"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "updated_at"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_at";
	
		
		
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

	

	
	$tdataidentificacion_puesto["updated_at"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "identificacion_puesto";
	$fdata["Label"] = GetFieldLabel("identificacion_puesto","created_at"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "created_at"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";
	
		
		
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

	

	
	$tdataidentificacion_puesto["created_at"] = $fdata;

	
$tables_data["identificacion_puesto"]=&$tdataidentificacion_puesto;
$field_labels["identificacion_puesto"] = &$fieldLabelsidentificacion_puesto;
$fieldToolTips["identificacion_puesto"] = &$fieldToolTipsidentificacion_puesto;
$page_titles["identificacion_puesto"] = &$pageTitlesidentificacion_puesto;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["identificacion_puesto"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["identificacion_puesto"] = array();


	
				$strOriginalDetailsTable="funcionario";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="funcionario";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "funcionario";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["identificacion_puesto"][0] = $masterParams;	
				$masterTablesData["identificacion_puesto"][0]["masterKeys"] = array();
	$masterTablesData["identificacion_puesto"][0]["masterKeys"][]="id_func";
				$masterTablesData["identificacion_puesto"][0]["detailKeys"] = array();
	$masterTablesData["identificacion_puesto"][0]["detailKeys"][]="id_per";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_identificacion_puesto()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	id_per,  	denominacion,  	nombre_funcional,  	unidad_organizacional,  	supervisa_a,  	codigo,  	categoria,  	nivel,  	jefe_inmediato_superior,  	jefe_supeior_jerarquico,  	updated_at,  	created_at";
$proto0["m_strFrom"] = "FROM identificacion_puesto";
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
	"m_strTable" => "identificacion_puesto",
	"m_srcTableName" => "identificacion_puesto"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "identificacion_puesto";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_per",
	"m_strTable" => "identificacion_puesto",
	"m_srcTableName" => "identificacion_puesto"
));

$proto7["m_sql"] = "id_per";
$proto7["m_srcTableName"] = "identificacion_puesto";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "denominacion",
	"m_strTable" => "identificacion_puesto",
	"m_srcTableName" => "identificacion_puesto"
));

$proto9["m_sql"] = "denominacion";
$proto9["m_srcTableName"] = "identificacion_puesto";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_funcional",
	"m_strTable" => "identificacion_puesto",
	"m_srcTableName" => "identificacion_puesto"
));

$proto11["m_sql"] = "nombre_funcional";
$proto11["m_srcTableName"] = "identificacion_puesto";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "unidad_organizacional",
	"m_strTable" => "identificacion_puesto",
	"m_srcTableName" => "identificacion_puesto"
));

$proto13["m_sql"] = "unidad_organizacional";
$proto13["m_srcTableName"] = "identificacion_puesto";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "supervisa_a",
	"m_strTable" => "identificacion_puesto",
	"m_srcTableName" => "identificacion_puesto"
));

$proto15["m_sql"] = "supervisa_a";
$proto15["m_srcTableName"] = "identificacion_puesto";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "identificacion_puesto",
	"m_srcTableName" => "identificacion_puesto"
));

$proto17["m_sql"] = "codigo";
$proto17["m_srcTableName"] = "identificacion_puesto";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "categoria",
	"m_strTable" => "identificacion_puesto",
	"m_srcTableName" => "identificacion_puesto"
));

$proto19["m_sql"] = "categoria";
$proto19["m_srcTableName"] = "identificacion_puesto";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "nivel",
	"m_strTable" => "identificacion_puesto",
	"m_srcTableName" => "identificacion_puesto"
));

$proto21["m_sql"] = "nivel";
$proto21["m_srcTableName"] = "identificacion_puesto";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "jefe_inmediato_superior",
	"m_strTable" => "identificacion_puesto",
	"m_srcTableName" => "identificacion_puesto"
));

$proto23["m_sql"] = "jefe_inmediato_superior";
$proto23["m_srcTableName"] = "identificacion_puesto";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "jefe_supeior_jerarquico",
	"m_strTable" => "identificacion_puesto",
	"m_srcTableName" => "identificacion_puesto"
));

$proto25["m_sql"] = "jefe_supeior_jerarquico";
$proto25["m_srcTableName"] = "identificacion_puesto";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "identificacion_puesto",
	"m_srcTableName" => "identificacion_puesto"
));

$proto27["m_sql"] = "updated_at";
$proto27["m_srcTableName"] = "identificacion_puesto";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "identificacion_puesto",
	"m_srcTableName" => "identificacion_puesto"
));

$proto29["m_sql"] = "created_at";
$proto29["m_srcTableName"] = "identificacion_puesto";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "identificacion_puesto";
$proto32["m_srcTableName"] = "identificacion_puesto";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "id";
$proto32["m_columns"][] = "id_per";
$proto32["m_columns"][] = "denominacion";
$proto32["m_columns"][] = "nombre_funcional";
$proto32["m_columns"][] = "unidad_organizacional";
$proto32["m_columns"][] = "supervisa_a";
$proto32["m_columns"][] = "codigo";
$proto32["m_columns"][] = "categoria";
$proto32["m_columns"][] = "nivel";
$proto32["m_columns"][] = "jefe_inmediato_superior";
$proto32["m_columns"][] = "jefe_supeior_jerarquico";
$proto32["m_columns"][] = "updated_at";
$proto32["m_columns"][] = "created_at";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "identificacion_puesto";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "identificacion_puesto";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="identificacion_puesto";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_identificacion_puesto = createSqlQuery_identificacion_puesto();


	
													
	
$tdataidentificacion_puesto[".sqlquery"] = $queryData_identificacion_puesto;

$tableEvents["identificacion_puesto"] = new eventsBase;
$tdataidentificacion_puesto[".hasEvents"] = false;

?>