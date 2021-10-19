<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/t_descuentos_variables.php");

$mode = postvalue("mode");

if(!isLogged())
{ 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	return;
}

require_once("classes/searchclause.php");

$cipherer = new RunnerCipherer($strTableName);

require_once('include/xtempl.php');
$xt = new Xtempl();





$layout = new TLayout("detailspreview", "Rounded1Coral1", "MobileCoral1");
$layout->version = 2;
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();
$layout->container_properties["dcount"] = array(  );
$layout->containers["dcount"][] = array("name"=>"detailspreviewheader", 
	"block"=>"", "substyle"=>1  );

$layout->containers["dcount"][] = array("name"=>"detailspreviewdetailsfount", 
	"block"=>"", "substyle"=>1  );

$layout->containers["dcount"][] = array("name"=>"detailspreviewdispfirst", 
	"block"=>"display_first", "substyle"=>1  );

$layout->skins["dcount"] = "empty";

$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();
$layout->container_properties["detailspreviewgrid"] = array(  );
$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields", 
	"block"=>"details_data", "substyle"=>1  );

$layout->skins["detailspreviewgrid"] = "grid";

$layout->blocks["bare"][] = "detailspreviewgrid";
$page_layouts["t_descuentos_detailspreview"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
$sessionPrefix = "_detailsPreview";
if($mastertable != "")
{
	$_SESSION[$sessionPrefix."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$sessionPrefix."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$sessionPrefix."_masterkey".$i]))
		unset($_SESSION[$sessionPrefix."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$sessionPrefix."_mastertable"];

$params = array();
$params['id'] = 1;
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['pageType'] = "detailspreview";
$pageObject = new DetailsPreview($params);

if($mastertable == "funcionario")
{
	$where = "";
		$formattedValue = make_db_value("id_func",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("id_func") . "is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("id_func") . "=" . $formattedValue;
}

$str = SecuritySQL("Search", $strTableName);
if(strlen($str))
	$where.=" and ".$str;
$strSQL = $gQuery->gSQLWhere($where);

$strSQL.=" ".$gstrOrderBy;

$rowcount = $gQuery->gSQLRowCount($where, $pageObject->connection);
$xt->assign("row_count",$rowcount);
if($rowcount) 
{
	$xt->assign("details_data",true);

	$display_count = 10;
	if($mode == "inline")
		$display_count*=2;
		
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
	
	require_once getabspath('classes/controls/ViewControlsContainer.php');
	$pSet = new ProjectSettings($strTableName, PAGE_LIST);
	$viewContainer = new ViewControlsContainer($pSet, PAGE_LIST);
	$viewContainer->isDetailsPreview = true;

	$b = true;
	$qResult = $pageObject->connection->query( $strSQL );
	$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	while($data && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["id_func"]));
	
	
	//	id_func - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("id_func", $data, $keylink);
			$row["id_func_value"] = $value;
			$format = $pSet->getViewFormat("id_func");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("id_func")))
				$class = ' rnr-field-number';
			$row["id_func_class"] = $class;
	//	afp_10 - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("afp_10", $data, $keylink);
			$row["afp_10_value"] = $value;
			$format = $pSet->getViewFormat("afp_10");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("afp_10")))
				$class = ' rnr-field-number';
			$row["afp_10_class"] = $class;
	//	afp_riesgo_1_71 - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("afp_riesgo_1_71", $data, $keylink);
			$row["afp_riesgo_1_71_value"] = $value;
			$format = $pSet->getViewFormat("afp_riesgo_1_71");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("afp_riesgo_1_71")))
				$class = ' rnr-field-number';
			$row["afp_riesgo_1_71_class"] = $class;
	//	afp_05 - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("afp_05", $data, $keylink);
			$row["afp_05_value"] = $value;
			$format = $pSet->getViewFormat("afp_05");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("afp_05")))
				$class = ' rnr-field-number';
			$row["afp_05_class"] = $class;
	//	afp_ap_sol_0_5 - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("afp_ap_sol_0_5", $data, $keylink);
			$row["afp_ap_sol_0_5_value"] = $value;
			$format = $pSet->getViewFormat("afp_ap_sol_0_5");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("afp_ap_sol_0_5")))
				$class = ' rnr-field-number';
			$row["afp_ap_sol_0_5_class"] = $class;
	//	ans_1 - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ans_1", $data, $keylink);
			$row["ans_1_value"] = $value;
			$format = $pSet->getViewFormat("ans_1");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ans_1")))
				$class = ' rnr-field-number';
			$row["ans_1_class"] = $class;
	//	rc_iva - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("rc_iva", $data, $keylink);
			$row["rc_iva_value"] = $value;
			$format = $pSet->getViewFormat("rc_iva");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("rc_iva")))
				$class = ' rnr-field-number';
			$row["rc_iva_class"] = $class;
	//	retenciones - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("retenciones", $data, $keylink);
			$row["retenciones_value"] = $value;
			$format = $pSet->getViewFormat("retenciones");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("retenciones")))
				$class = ' rnr-field-number';
			$row["retenciones_class"] = $class;
	//	multa - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("multa", $data, $keylink);
			$row["multa_value"] = $value;
			$format = $pSet->getViewFormat("multa");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("multa")))
				$class = ' rnr-field-number';
			$row["multa_class"] = $class;
	//	total_desc - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("total_desc", $data, $keylink);
			$row["total_desc_value"] = $value;
			$format = $pSet->getViewFormat("total_desc");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("total_desc")))
				$class = ' rnr-field-number';
			$row["total_desc_class"] = $class;
	//	liquido_pagable - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("liquido_pagable", $data, $keylink);
			$row["liquido_pagable_value"] = $value;
			$format = $pSet->getViewFormat("liquido_pagable");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("liquido_pagable")))
				$class = ' rnr-field-number';
			$row["liquido_pagable_class"] = $class;
	//	name - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("name", $data, $keylink);
			$row["name_value"] = $value;
			$format = $pSet->getViewFormat("name");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("name")))
				$class = ' rnr-field-number';
			$row["name_class"] = $class;
	//	l_name1 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("l_name1", $data, $keylink);
			$row["l_name1_value"] = $value;
			$format = $pSet->getViewFormat("l_name1");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("l_name1")))
				$class = ' rnr-field-number';
			$row["l_name1_class"] = $class;
	//	l_name2 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("l_name2", $data, $keylink);
			$row["l_name2_value"] = $value;
			$format = $pSet->getViewFormat("l_name2");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("l_name2")))
				$class = ' rnr-field-number';
			$row["l_name2_class"] = $class;
	//	seguro_pat_10 - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("seguro_pat_10", $data, $keylink);
			$row["seguro_pat_10_value"] = $value;
			$format = $pSet->getViewFormat("seguro_pat_10");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("seguro_pat_10")))
				$class = ' rnr-field-number';
			$row["seguro_pat_10_class"] = $class;
	//	riesgo_pat_171 - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("riesgo_pat_171", $data, $keylink);
			$row["riesgo_pat_171_value"] = $value;
			$format = $pSet->getViewFormat("riesgo_pat_171");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("riesgo_pat_171")))
				$class = ' rnr-field-number';
			$row["riesgo_pat_171_class"] = $class;
	//	pro_vivienda_pat_2 - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pro_vivienda_pat_2", $data, $keylink);
			$row["pro_vivienda_pat_2_value"] = $value;
			$format = $pSet->getViewFormat("pro_vivienda_pat_2");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("pro_vivienda_pat_2")))
				$class = ' rnr-field-number';
			$row["pro_vivienda_pat_2_class"] = $class;
	//	ap_pat_sol_3 - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ap_pat_sol_3", $data, $keylink);
			$row["ap_pat_sol_3_value"] = $value;
			$format = $pSet->getViewFormat("ap_pat_sol_3");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ap_pat_sol_3")))
				$class = ' rnr-field-number';
			$row["ap_pat_sol_3_class"] = $class;
	//	sub_total - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("sub_total", $data, $keylink);
			$row["sub_total_value"] = $value;
			$format = $pSet->getViewFormat("sub_total");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("sub_total")))
				$class = ' rnr-field-number';
			$row["sub_total_class"] = $class;
		$rowinfo[] = $row;
		if ($b) {
			$rowinfo2[] = $row;
			$b = false;
		}
		$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	}
	$xt->assign_loopsection("details_row",$rowinfo);
	$xt->assign_loopsection("details_row_header",$rowinfo2); // assign class for header
}
$returnJSON = array("success" => true);
$xt->load_template(GetTemplateName("t_descuentos", "detailspreview"));
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline")
{
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		foreach($layout->getCSSFiles(isRTL(), isMobile()) as $css)
		{
			$returnJSON['CSSFiles'][] = $css;
		}
	}	
}	

echo printJSON($returnJSON);
exit();
?>