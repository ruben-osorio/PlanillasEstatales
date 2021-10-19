<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_funcionario($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "funcionario";
	$xt->eventsObject = getEventObject($tName);
	
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["pageType"] = PAGE_PRINT;
	$mParams["tName"] = $tName;
	$masterPage = new PrintPage($mParams);
	
	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT, $masterPage);
	
	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "t_ingreso" )
	{
		$keysAssoc["id_func"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("id_func", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("id_func", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("id_func", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("funcionario","id_func").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "t_descuentos" )
	{
		$keysAssoc["id_func"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("id_func", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("id_func", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("id_func", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("funcionario","id_func").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "cta_banc" )
	{
		$keysAssoc["id_func"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("id_func", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("id_func", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("id_func", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("funcionario","id_func").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "identificacion_puesto" )
	{
		$keysAssoc["id_func"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("id_func", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("id_func", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("id_func", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("funcionario","id_func").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "old_cas" )
	{
		$keysAssoc["id_func"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("id_func", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("id_func", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("id_func", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("funcionario","id_func").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "t_asignaciones" )
	{
		$keysAssoc["id_func"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("id_func", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("id_func", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("id_func", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("funcionario","id_func").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "soc_secu" )
	{
		$keysAssoc["id_func"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("id_func", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("id_func", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("id_func", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("funcionario","id_func").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "t_tributaria" )
	{
		$keysAssoc["id_func"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("id_func", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("id_func", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("id_func", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("funcionario","id_func").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "t_documentos" )
	{
		$keysAssoc["id_func"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("id_func", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("id_func", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("id_func", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("funcionario","id_func").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "t_sigep" )
	{
		$keysAssoc["id_func"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("id_func", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("id_func", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("id_func", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("funcionario","id_func").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "t_facturas110" )
	{
		$keysAssoc["id_func"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("id_func", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("id_func", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("id_func", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("funcionario","id_func").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "t_doc_file" )
	{
		$keysAssoc["id_func"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("id_func", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("id_func", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("id_func", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("funcionario","id_func").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}
	
	if( !$where )
		return;
	
	$str = SecuritySQL("Export", $tName );
	if( strlen($str) )
		$where.= " and ".$str;
	
	$strWhere = whereAdd( $masterQuery->m_where->toSql($masterQuery), $where );
	if( strlen($strWhere) )
		$strWhere= " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));	
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["id_func"]));
	
	$xt->assign("id_func_mastervalue", $viewControls->showDBValue("id_func", $data, $keylink));
	$format = $settings->getViewFormat("id_func");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("id_func")))
		$class = ' rnr-field-number';
		
	$xt->assign("id_func_class", $class); // add class for field header as field value
	$xt->assign("name_mastervalue", $viewControls->showDBValue("name", $data, $keylink));
	$format = $settings->getViewFormat("name");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("name")))
		$class = ' rnr-field-number';
		
	$xt->assign("name_class", $class); // add class for field header as field value
	$xt->assign("l_name1_mastervalue", $viewControls->showDBValue("l_name1", $data, $keylink));
	$format = $settings->getViewFormat("l_name1");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("l_name1")))
		$class = ' rnr-field-number';
		
	$xt->assign("l_name1_class", $class); // add class for field header as field value
	$xt->assign("l_name2_mastervalue", $viewControls->showDBValue("l_name2", $data, $keylink));
	$format = $settings->getViewFormat("l_name2");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("l_name2")))
		$class = ' rnr-field-number';
		
	$xt->assign("l_name2_class", $class); // add class for field header as field value
	$xt->assign("afp_mastervalue", $viewControls->showDBValue("afp", $data, $keylink));
	$format = $settings->getViewFormat("afp");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("afp")))
		$class = ' rnr-field-number';
		
	$xt->assign("afp_class", $class); // add class for field header as field value
	$xt->assign("nua_mastervalue", $viewControls->showDBValue("nua", $data, $keylink));
	$format = $settings->getViewFormat("nua");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("nua")))
		$class = ' rnr-field-number';
		
	$xt->assign("nua_class", $class); // add class for field header as field value
	$xt->assign("sex_mastervalue", $viewControls->showDBValue("sex", $data, $keylink));
	$format = $settings->getViewFormat("sex");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("sex")))
		$class = ' rnr-field-number';
		
	$xt->assign("sex_class", $class); // add class for field header as field value
	$xt->assign("ci_mastervalue", $viewControls->showDBValue("ci", $data, $keylink));
	$format = $settings->getViewFormat("ci");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ci")))
		$class = ' rnr-field-number';
		
	$xt->assign("ci_class", $class); // add class for field header as field value
	$xt->assign("expe_mastervalue", $viewControls->showDBValue("expe", $data, $keylink));
	$format = $settings->getViewFormat("expe");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("expe")))
		$class = ' rnr-field-number';
		
	$xt->assign("expe_class", $class); // add class for field header as field value
	$xt->assign("date_born_mastervalue", $viewControls->showDBValue("date_born", $data, $keylink));
	$format = $settings->getViewFormat("date_born");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("date_born")))
		$class = ' rnr-field-number';
		
	$xt->assign("date_born_class", $class); // add class for field header as field value

	$layout = GetPageLayout("funcionario", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("funcionario", "masterprint"));
}

?>