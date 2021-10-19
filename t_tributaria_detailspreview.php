<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/t_tributaria_variables.php");

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
$page_layouts["t_tributaria_detailspreview"] = $layout;

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
		$formattedValue = make_db_value("id_func_trib",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("id_func_trib") . "is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("id_func_trib") . "=" . $formattedValue;
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["id_func_trib"]));
	
	
	//	id_func_trib - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("id_func_trib", $data, $keylink);
			$row["id_func_trib_value"] = $value;
			$format = $pSet->getViewFormat("id_func_trib");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("id_func_trib")))
				$class = ' rnr-field-number';
			$row["id_func_trib_class"] = $class;
	//	gestion - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("gestion", $data, $keylink);
			$row["gestion_value"] = $value;
			$format = $pSet->getViewFormat("gestion");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("gestion")))
				$class = ' rnr-field-number';
			$row["gestion_class"] = $class;
	//	periodo - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("periodo", $data, $keylink);
			$row["periodo_value"] = $value;
			$format = $pSet->getViewFormat("periodo");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("periodo")))
				$class = ' rnr-field-number';
			$row["periodo_class"] = $class;
	//	nit - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("nit", $data, $keylink);
			$row["nit_value"] = $value;
			$format = $pSet->getViewFormat("nit");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("nit")))
				$class = ' rnr-field-number';
			$row["nit_class"] = $class;
	//	novedades - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("novedades", $data, $keylink);
			$row["novedades_value"] = $value;
			$format = $pSet->getViewFormat("novedades");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("novedades")))
				$class = ' rnr-field-number';
			$row["novedades_class"] = $class;
	//	liquido_pagable - 
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
	//	dos_salarios_min - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dos_salarios_min", $data, $keylink);
			$row["dos_salarios_min_value"] = $value;
			$format = $pSet->getViewFormat("dos_salarios_min");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dos_salarios_min")))
				$class = ' rnr-field-number';
			$row["dos_salarios_min_class"] = $class;
	//	base_imponible - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("base_imponible", $data, $keylink);
			$row["base_imponible_value"] = $value;
			$format = $pSet->getViewFormat("base_imponible");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("base_imponible")))
				$class = ' rnr-field-number';
			$row["base_imponible_class"] = $class;
	//	impuesto_rc_iva - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("impuesto_rc_iva", $data, $keylink);
			$row["impuesto_rc_iva_value"] = $value;
			$format = $pSet->getViewFormat("impuesto_rc_iva");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("impuesto_rc_iva")))
				$class = ' rnr-field-number';
			$row["impuesto_rc_iva_class"] = $class;
	//	dos_salarios_13 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dos_salarios_13", $data, $keylink);
			$row["dos_salarios_13_value"] = $value;
			$format = $pSet->getViewFormat("dos_salarios_13");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dos_salarios_13")))
				$class = ' rnr-field-number';
			$row["dos_salarios_13_class"] = $class;
	//	impuesto_neto_rc_iva - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("impuesto_neto_rc_iva", $data, $keylink);
			$row["impuesto_neto_rc_iva_value"] = $value;
			$format = $pSet->getViewFormat("impuesto_neto_rc_iva");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("impuesto_neto_rc_iva")))
				$class = ' rnr-field-number';
			$row["impuesto_neto_rc_iva_class"] = $class;
	//	f_110_facturas - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("f_110_facturas", $data, $keylink);
			$row["f_110_facturas_value"] = $value;
			$format = $pSet->getViewFormat("f_110_facturas");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("f_110_facturas")))
				$class = ' rnr-field-number';
			$row["f_110_facturas_class"] = $class;
	//	saldo_favor_fisco - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("saldo_favor_fisco", $data, $keylink);
			$row["saldo_favor_fisco_value"] = $value;
			$format = $pSet->getViewFormat("saldo_favor_fisco");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("saldo_favor_fisco")))
				$class = ' rnr-field-number';
			$row["saldo_favor_fisco_class"] = $class;
	//	saldo_favor_dependiente - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("saldo_favor_dependiente", $data, $keylink);
			$row["saldo_favor_dependiente_value"] = $value;
			$format = $pSet->getViewFormat("saldo_favor_dependiente");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("saldo_favor_dependiente")))
				$class = ' rnr-field-number';
			$row["saldo_favor_dependiente_class"] = $class;
	//	saldo_favor_dependiente_per_anterior - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("saldo_favor_dependiente_per_anterior", $data, $keylink);
			$row["saldo_favor_dependiente_per_anterior_value"] = $value;
			$format = $pSet->getViewFormat("saldo_favor_dependiente_per_anterior");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("saldo_favor_dependiente_per_anterior")))
				$class = ' rnr-field-number';
			$row["saldo_favor_dependiente_per_anterior_class"] = $class;
	//	mantenimiento_periodo_anterior - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("mantenimiento_periodo_anterior", $data, $keylink);
			$row["mantenimiento_periodo_anterior_value"] = $value;
			$format = $pSet->getViewFormat("mantenimiento_periodo_anterior");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("mantenimiento_periodo_anterior")))
				$class = ' rnr-field-number';
			$row["mantenimiento_periodo_anterior_class"] = $class;
	//	saldo_periodo_anterior_actualizado - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("saldo_periodo_anterior_actualizado", $data, $keylink);
			$row["saldo_periodo_anterior_actualizado_value"] = $value;
			$format = $pSet->getViewFormat("saldo_periodo_anterior_actualizado");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("saldo_periodo_anterior_actualizado")))
				$class = ' rnr-field-number';
			$row["saldo_periodo_anterior_actualizado_class"] = $class;
	//	saldo_utilizado - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("saldo_utilizado", $data, $keylink);
			$row["saldo_utilizado_value"] = $value;
			$format = $pSet->getViewFormat("saldo_utilizado");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("saldo_utilizado")))
				$class = ' rnr-field-number';
			$row["saldo_utilizado_class"] = $class;
	//	impuesto_rc_iva_retenido - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("impuesto_rc_iva_retenido", $data, $keylink);
			$row["impuesto_rc_iva_retenido_value"] = $value;
			$format = $pSet->getViewFormat("impuesto_rc_iva_retenido");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("impuesto_rc_iva_retenido")))
				$class = ' rnr-field-number';
			$row["impuesto_rc_iva_retenido_class"] = $class;
	//	saldo_favor_dep_mes_siguiente - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("saldo_favor_dep_mes_siguiente", $data, $keylink);
			$row["saldo_favor_dep_mes_siguiente_value"] = $value;
			$format = $pSet->getViewFormat("saldo_favor_dep_mes_siguiente");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("saldo_favor_dep_mes_siguiente")))
				$class = ' rnr-field-number';
			$row["saldo_favor_dep_mes_siguiente_class"] = $class;
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
$xt->load_template(GetTemplateName("t_tributaria", "detailspreview"));
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