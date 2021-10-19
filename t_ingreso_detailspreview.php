<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/t_ingreso_variables.php");

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
$page_layouts["t_ingreso_detailspreview"] = $layout;

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
	//	haber_basico - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("haber_basico", $data, $keylink);
			$row["haber_basico_value"] = $value;
			$format = $pSet->getViewFormat("haber_basico");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("haber_basico")))
				$class = ' rnr-field-number';
			$row["haber_basico_class"] = $class;
	//	dias_trab - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dias_trab", $data, $keylink);
			$row["dias_trab_value"] = $value;
			$format = $pSet->getViewFormat("dias_trab");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dias_trab")))
				$class = ' rnr-field-number';
			$row["dias_trab_class"] = $class;
	//	haber_percibido - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("haber_percibido", $data, $keylink);
			$row["haber_percibido_value"] = $value;
			$format = $pSet->getViewFormat("haber_percibido");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("haber_percibido")))
				$class = ' rnr-field-number';
			$row["haber_percibido_class"] = $class;
	//	reint - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("reint", $data, $keylink);
			$row["reint_value"] = $value;
			$format = $pSet->getViewFormat("reint");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("reint")))
				$class = ' rnr-field-number';
			$row["reint_class"] = $class;
	//	bono_ant - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("bono_ant", $data, $keylink);
			$row["bono_ant_value"] = $value;
			$format = $pSet->getViewFormat("bono_ant");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("bono_ant")))
				$class = ' rnr-field-number';
			$row["bono_ant_class"] = $class;
	//	total_ganado - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("total_ganado", $data, $keylink);
			$row["total_ganado_value"] = $value;
			$format = $pSet->getViewFormat("total_ganado");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("total_ganado")))
				$class = ' rnr-field-number';
			$row["total_ganado_class"] = $class;
	//	devoluciones - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("devoluciones", $data, $keylink);
			$row["devoluciones_value"] = $value;
			$format = $pSet->getViewFormat("devoluciones");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("devoluciones")))
				$class = ' rnr-field-number';
			$row["devoluciones_class"] = $class;
	//	asig_familiar - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("asig_familiar", $data, $keylink);
			$row["asig_familiar_value"] = $value;
			$format = $pSet->getViewFormat("asig_familiar");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("asig_familiar")))
				$class = ' rnr-field-number';
			$row["asig_familiar_class"] = $class;
	//	mes - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("mes", $data, $keylink);
			$row["mes_value"] = $value;
			$format = $pSet->getViewFormat("mes");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("mes")))
				$class = ' rnr-field-number';
			$row["mes_class"] = $class;
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
$xt->load_template(GetTemplateName("t_ingreso", "detailspreview"));
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