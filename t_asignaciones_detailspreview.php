<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/t_asignaciones_variables.php");

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
$page_layouts["t_asignaciones_detailspreview"] = $layout;

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
		$formattedValue = make_db_value("id_asig",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("id_asig") . "is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("id_asig") . "=" . $formattedValue;
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["id_asig"]));
	
	
	//	id_asig - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("id_asig", $data, $keylink);
			$row["id_asig_value"] = $value;
			$format = $pSet->getViewFormat("id_asig");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("id_asig")))
				$class = ' rnr-field-number';
			$row["id_asig_class"] = $class;
	//	fecha_nac - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("fecha_nac", $data, $keylink);
			$row["fecha_nac_value"] = $value;
			$format = $pSet->getViewFormat("fecha_nac");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("fecha_nac")))
				$class = ' rnr-field-number';
			$row["fecha_nac_class"] = $class;
	//	fecha_pres - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("fecha_pres", $data, $keylink);
			$row["fecha_pres_value"] = $value;
			$format = $pSet->getViewFormat("fecha_pres");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("fecha_pres")))
				$class = ' rnr-field-number';
			$row["fecha_pres_class"] = $class;
	//	pre_num_paq - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pre_num_paq", $data, $keylink);
			$row["pre_num_paq_value"] = $value;
			$format = $pSet->getViewFormat("pre_num_paq");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("pre_num_paq")))
				$class = ' rnr-field-number';
			$row["pre_num_paq_class"] = $class;
	//	paq_monto - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("paq_monto", $data, $keylink);
			$row["paq_monto_value"] = $value;
			$format = $pSet->getViewFormat("paq_monto");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("paq_monto")))
				$class = ' rnr-field-number';
			$row["paq_monto_class"] = $class;
	//	sub_natalidad - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("sub_natalidad", $data, $keylink);
			$row["sub_natalidad_value"] = $value;
			$format = $pSet->getViewFormat("sub_natalidad");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("sub_natalidad")))
				$class = ' rnr-field-number';
			$row["sub_natalidad_class"] = $class;
	//	lac_num_paq - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("lac_num_paq", $data, $keylink);
			$row["lac_num_paq_value"] = $value;
			$format = $pSet->getViewFormat("lac_num_paq");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("lac_num_paq")))
				$class = ' rnr-field-number';
			$row["lac_num_paq_class"] = $class;
	//	lac_monto - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("lac_monto", $data, $keylink);
			$row["lac_monto_value"] = $value;
			$format = $pSet->getViewFormat("lac_monto");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("lac_monto")))
				$class = ' rnr-field-number';
			$row["lac_monto_class"] = $class;
	//	sepelio - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("sepelio", $data, $keylink);
			$row["sepelio_value"] = $value;
			$format = $pSet->getViewFormat("sepelio");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("sepelio")))
				$class = ' rnr-field-number';
			$row["sepelio_class"] = $class;
	//	sub_total_pago_sedem - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("sub_total_pago_sedem", $data, $keylink);
			$row["sub_total_pago_sedem_value"] = $value;
			$format = $pSet->getViewFormat("sub_total_pago_sedem");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("sub_total_pago_sedem")))
				$class = ' rnr-field-number';
			$row["sub_total_pago_sedem_class"] = $class;
	//	fecha_registro - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("fecha_registro", $data, $keylink);
			$row["fecha_registro_value"] = $value;
			$format = $pSet->getViewFormat("fecha_registro");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("fecha_registro")))
				$class = ' rnr-field-number';
			$row["fecha_registro_class"] = $class;
	//	id_adm - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("id_adm", $data, $keylink);
			$row["id_adm_value"] = $value;
			$format = $pSet->getViewFormat("id_adm");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("id_adm")))
				$class = ' rnr-field-number';
			$row["id_adm_class"] = $class;
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
$xt->load_template(GetTemplateName("t_asignaciones", "detailspreview"));
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