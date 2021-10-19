<?php
function DisplayMasterTableInfo_t_descuentos($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "t_descuentos";
	$xt->eventsObject = getEventObject($tName);
	
	include_once('classes/listpage.php');
	include_once('classes/listpage_simple.php');
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["mode"] = LIST_MASTER;
	$mParams["pageType"] = PAGE_LIST;
	$mParams["flyId"] = $params["recId"];
	$masterPage = ListPage::createListPage($tName, $mParams);
	
	$settings = $masterPage->pSet;
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST, $masterPage);
	
	$keysAssoc = array();
	$showKeys = "";	

	if($detailtable == "t_multas")
	{
		$keysAssoc["id_func"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("id_func", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("t_descuentos","id_func").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
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
	$xt->assign("afp_10_mastervalue", $viewControls->showDBValue("afp_10", $data, $keylink));
	$format = $settings->getViewFormat("afp_10");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("afp_10")))
		$class = ' rnr-field-number';
		
	$xt->assign("afp_10_class", $class); // add class for field header as field value
	$xt->assign("afp_riesgo_1_71_mastervalue", $viewControls->showDBValue("afp_riesgo_1_71", $data, $keylink));
	$format = $settings->getViewFormat("afp_riesgo_1_71");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("afp_riesgo_1_71")))
		$class = ' rnr-field-number';
		
	$xt->assign("afp_riesgo_1_71_class", $class); // add class for field header as field value
	$xt->assign("afp_05_mastervalue", $viewControls->showDBValue("afp_05", $data, $keylink));
	$format = $settings->getViewFormat("afp_05");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("afp_05")))
		$class = ' rnr-field-number';
		
	$xt->assign("afp_05_class", $class); // add class for field header as field value
	$xt->assign("afp_ap_sol_0_5_mastervalue", $viewControls->showDBValue("afp_ap_sol_0_5", $data, $keylink));
	$format = $settings->getViewFormat("afp_ap_sol_0_5");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("afp_ap_sol_0_5")))
		$class = ' rnr-field-number';
		
	$xt->assign("afp_ap_sol_0_5_class", $class); // add class for field header as field value
	$xt->assign("ans_1_mastervalue", $viewControls->showDBValue("ans_1", $data, $keylink));
	$format = $settings->getViewFormat("ans_1");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ans_1")))
		$class = ' rnr-field-number';
		
	$xt->assign("ans_1_class", $class); // add class for field header as field value
	$xt->assign("rc_iva_mastervalue", $viewControls->showDBValue("rc_iva", $data, $keylink));
	$format = $settings->getViewFormat("rc_iva");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("rc_iva")))
		$class = ' rnr-field-number';
		
	$xt->assign("rc_iva_class", $class); // add class for field header as field value
	$xt->assign("retenciones_mastervalue", $viewControls->showDBValue("retenciones", $data, $keylink));
	$format = $settings->getViewFormat("retenciones");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("retenciones")))
		$class = ' rnr-field-number';
		
	$xt->assign("retenciones_class", $class); // add class for field header as field value
	$xt->assign("multa_mastervalue", $viewControls->showDBValue("multa", $data, $keylink));
	$format = $settings->getViewFormat("multa");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("multa")))
		$class = ' rnr-field-number';
		
	$xt->assign("multa_class", $class); // add class for field header as field value
	$xt->assign("total_desc_mastervalue", $viewControls->showDBValue("total_desc", $data, $keylink));
	$format = $settings->getViewFormat("total_desc");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("total_desc")))
		$class = ' rnr-field-number';
		
	$xt->assign("total_desc_class", $class); // add class for field header as field value
	$xt->assign("mes_mastervalue", $viewControls->showDBValue("mes", $data, $keylink));
	$format = $settings->getViewFormat("mes");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("mes")))
		$class = ' rnr-field-number';
		
	$xt->assign("mes_class", $class); // add class for field header as field value
	$xt->assign("gestion_mastervalue", $viewControls->showDBValue("gestion", $data, $keylink));
	$format = $settings->getViewFormat("gestion");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("gestion")))
		$class = ' rnr-field-number';
		
	$xt->assign("gestion_class", $class); // add class for field header as field value
	$xt->assign("liquido_pagable_mastervalue", $viewControls->showDBValue("liquido_pagable", $data, $keylink));
	$format = $settings->getViewFormat("liquido_pagable");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("liquido_pagable")))
		$class = ' rnr-field-number';
		
	$xt->assign("liquido_pagable_class", $class); // add class for field header as field value
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
	$xt->assign("seguro_pat_10_mastervalue", $viewControls->showDBValue("seguro_pat_10", $data, $keylink));
	$format = $settings->getViewFormat("seguro_pat_10");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("seguro_pat_10")))
		$class = ' rnr-field-number';
		
	$xt->assign("seguro_pat_10_class", $class); // add class for field header as field value
	$xt->assign("riesgo_pat_171_mastervalue", $viewControls->showDBValue("riesgo_pat_171", $data, $keylink));
	$format = $settings->getViewFormat("riesgo_pat_171");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("riesgo_pat_171")))
		$class = ' rnr-field-number';
		
	$xt->assign("riesgo_pat_171_class", $class); // add class for field header as field value
	$xt->assign("pro_vivienda_pat_2_mastervalue", $viewControls->showDBValue("pro_vivienda_pat_2", $data, $keylink));
	$format = $settings->getViewFormat("pro_vivienda_pat_2");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("pro_vivienda_pat_2")))
		$class = ' rnr-field-number';
		
	$xt->assign("pro_vivienda_pat_2_class", $class); // add class for field header as field value
	$xt->assign("ap_pat_sol_3_mastervalue", $viewControls->showDBValue("ap_pat_sol_3", $data, $keylink));
	$format = $settings->getViewFormat("ap_pat_sol_3");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ap_pat_sol_3")))
		$class = ' rnr-field-number';
		
	$xt->assign("ap_pat_sol_3_class", $class); // add class for field header as field value
	$xt->assign("sub_total_mastervalue", $viewControls->showDBValue("sub_total", $data, $keylink));
	$format = $settings->getViewFormat("sub_total");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("sub_total")))
		$class = ' rnr-field-number';
		
	$xt->assign("sub_total_class", $class); // add class for field header as field value

	$layout = GetPageLayout("t_descuentos", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("t_descuentos", "masterlist"));
}

?>