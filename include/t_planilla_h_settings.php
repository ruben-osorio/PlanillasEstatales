<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_planilla_h = array();	
	$tdatat_planilla_h[".truncateText"] = true;
	$tdatat_planilla_h[".NumberOfChars"] = 80; 
	$tdatat_planilla_h[".ShortName"] = "t_planilla_h";
	$tdatat_planilla_h[".OwnerID"] = "";
	$tdatat_planilla_h[".OriginalTable"] = "t_planilla_h";

//	field labels
$fieldLabelst_planilla_h = array();
$fieldToolTipst_planilla_h = array();
$pageTitlest_planilla_h = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_planilla_h["Spanish"] = array();
	$fieldToolTipst_planilla_h["Spanish"] = array();
	$pageTitlest_planilla_h["Spanish"] = array();
	$fieldLabelst_planilla_h["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipst_planilla_h["Spanish"]["id_func"] = "";
	$fieldLabelst_planilla_h["Spanish"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipst_planilla_h["Spanish"]["fecha_nac"] = "";
	$fieldLabelst_planilla_h["Spanish"]["sexo"] = "Sexo";
	$fieldToolTipst_planilla_h["Spanish"]["sexo"] = "";
	$fieldLabelst_planilla_h["Spanish"]["item_contrato"] = "Item / Contrato";
	$fieldToolTipst_planilla_h["Spanish"]["item_contrato"] = "";
	$fieldLabelst_planilla_h["Spanish"]["unidad"] = "Unidad";
	$fieldToolTipst_planilla_h["Spanish"]["unidad"] = "";
	$fieldLabelst_planilla_h["Spanish"]["cargo"] = "Cargo";
	$fieldToolTipst_planilla_h["Spanish"]["cargo"] = "";
	$fieldLabelst_planilla_h["Spanish"]["paterno"] = "Paterno";
	$fieldToolTipst_planilla_h["Spanish"]["paterno"] = "";
	$fieldLabelst_planilla_h["Spanish"]["materno"] = "Materno";
	$fieldToolTipst_planilla_h["Spanish"]["materno"] = "";
	$fieldLabelst_planilla_h["Spanish"]["nombres"] = "Nombres";
	$fieldToolTipst_planilla_h["Spanish"]["nombres"] = "";
	$fieldLabelst_planilla_h["Spanish"]["ci"] = "Ci";
	$fieldToolTipst_planilla_h["Spanish"]["ci"] = "";
	$fieldLabelst_planilla_h["Spanish"]["exp"] = "Exp";
	$fieldToolTipst_planilla_h["Spanish"]["exp"] = "";
	$fieldLabelst_planilla_h["Spanish"]["nit"] = "Nit";
	$fieldToolTipst_planilla_h["Spanish"]["nit"] = "";
	$fieldLabelst_planilla_h["Spanish"]["fec_ingreso"] = "Fecha de Ingreso";
	$fieldToolTipst_planilla_h["Spanish"]["fec_ingreso"] = "";
	$fieldLabelst_planilla_h["Spanish"]["baja"] = "Fecha de Baja";
	$fieldToolTipst_planilla_h["Spanish"]["baja"] = "";
	$fieldLabelst_planilla_h["Spanish"]["reasig"] = "Reasignación";
	$fieldToolTipst_planilla_h["Spanish"]["reasig"] = "";
	$fieldLabelst_planilla_h["Spanish"]["haber_basico"] = "Haber Basico";
	$fieldToolTipst_planilla_h["Spanish"]["haber_basico"] = "";
	$fieldLabelst_planilla_h["Spanish"]["dias_trab"] = "Dias Trab";
	$fieldToolTipst_planilla_h["Spanish"]["dias_trab"] = "";
	$fieldLabelst_planilla_h["Spanish"]["haber_percibido"] = "Haber Percibido";
	$fieldToolTipst_planilla_h["Spanish"]["haber_percibido"] = "";
	$fieldLabelst_planilla_h["Spanish"]["reint"] = "Reint";
	$fieldToolTipst_planilla_h["Spanish"]["reint"] = "";
	$fieldLabelst_planilla_h["Spanish"]["bono_ant"] = "Bono Antiguedad";
	$fieldToolTipst_planilla_h["Spanish"]["bono_ant"] = "";
	$fieldLabelst_planilla_h["Spanish"]["total_ganado"] = "Total Ganado";
	$fieldToolTipst_planilla_h["Spanish"]["total_ganado"] = "";
	$fieldLabelst_planilla_h["Spanish"]["devoluciones"] = "Devoluciones";
	$fieldToolTipst_planilla_h["Spanish"]["devoluciones"] = "";
	$fieldLabelst_planilla_h["Spanish"]["asig_familiar"] = "Asig Familiar";
	$fieldToolTipst_planilla_h["Spanish"]["asig_familiar"] = "";
	$fieldLabelst_planilla_h["Spanish"]["futuro_afp_10"] = "Futuro Afp 10";
	$fieldToolTipst_planilla_h["Spanish"]["futuro_afp_10"] = "";
	$fieldLabelst_planilla_h["Spanish"]["futuro_afp_riesgo_1_71"] = "Futuro Afp Riesgo 1.71%";
	$fieldToolTipst_planilla_h["Spanish"]["futuro_afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla_h["Spanish"]["futuro_afp_05"] = "Futuro Afp 0.5%";
	$fieldToolTipst_planilla_h["Spanish"]["futuro_afp_05"] = "";
	$fieldLabelst_planilla_h["Spanish"]["futuro_afp_ap_sol_0_5"] = "Futuro Afp Ap Sol.0.5%";
	$fieldToolTipst_planilla_h["Spanish"]["futuro_afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla_h["Spanish"]["futuro_ans_1"] = "Futuro Ans 1%";
	$fieldToolTipst_planilla_h["Spanish"]["futuro_ans_1"] = "";
	$fieldLabelst_planilla_h["Spanish"]["prev_afp_10"] = "Prev Afp 10%";
	$fieldToolTipst_planilla_h["Spanish"]["prev_afp_10"] = "";
	$fieldLabelst_planilla_h["Spanish"]["prev_afp_riesgo_1_71"] = "Prev Afp Riesgo 1.71%";
	$fieldToolTipst_planilla_h["Spanish"]["prev_afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla_h["Spanish"]["prev_afp_05"] = "Prev Afp 0.5%";
	$fieldToolTipst_planilla_h["Spanish"]["prev_afp_05"] = "";
	$fieldLabelst_planilla_h["Spanish"]["prev_afp_ap_sol_0_5"] = "Prev Afp Ap Sol.0.5%";
	$fieldToolTipst_planilla_h["Spanish"]["prev_afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla_h["Spanish"]["prev_ans_1"] = "Prev Ans 1%";
	$fieldToolTipst_planilla_h["Spanish"]["prev_ans_1"] = "";
	$fieldLabelst_planilla_h["Spanish"]["rc_iva"] = "RC-IVA";
	$fieldToolTipst_planilla_h["Spanish"]["rc_iva"] = "";
	$fieldLabelst_planilla_h["Spanish"]["retenciones"] = "Retenciones";
	$fieldToolTipst_planilla_h["Spanish"]["retenciones"] = "";
	$fieldLabelst_planilla_h["Spanish"]["multa"] = "Multa";
	$fieldToolTipst_planilla_h["Spanish"]["multa"] = "";
	$fieldLabelst_planilla_h["Spanish"]["total_desc"] = "Total Desc";
	$fieldToolTipst_planilla_h["Spanish"]["total_desc"] = "";
	$fieldLabelst_planilla_h["Spanish"]["pre_natal"] = "Pre Natal";
	$fieldToolTipst_planilla_h["Spanish"]["pre_natal"] = "";
	$fieldLabelst_planilla_h["Spanish"]["natalidad"] = "Natalidad";
	$fieldToolTipst_planilla_h["Spanish"]["natalidad"] = "";
	$fieldLabelst_planilla_h["Spanish"]["lactancia"] = "Lactancia";
	$fieldToolTipst_planilla_h["Spanish"]["lactancia"] = "";
	$fieldLabelst_planilla_h["Spanish"]["sepelio"] = "Sepelio";
	$fieldToolTipst_planilla_h["Spanish"]["sepelio"] = "";
	$fieldLabelst_planilla_h["Spanish"]["seguro_pat_10"] = "Seguro Pat 10%";
	$fieldToolTipst_planilla_h["Spanish"]["seguro_pat_10"] = "";
	$fieldLabelst_planilla_h["Spanish"]["riesgo_pat_171"] = "Riesgo Pat 1.71%";
	$fieldToolTipst_planilla_h["Spanish"]["riesgo_pat_171"] = "";
	$fieldLabelst_planilla_h["Spanish"]["pro_vivienda_pat_2"] = "Pro Vivienda Pat 2%";
	$fieldToolTipst_planilla_h["Spanish"]["pro_vivienda_pat_2"] = "";
	$fieldLabelst_planilla_h["Spanish"]["ap_pat_sol_3"] = "Ap Pat Sol. 3%";
	$fieldToolTipst_planilla_h["Spanish"]["ap_pat_sol_3"] = "";
	$fieldLabelst_planilla_h["Spanish"]["mes"] = "Mes";
	$fieldToolTipst_planilla_h["Spanish"]["mes"] = "";
	$fieldLabelst_planilla_h["Spanish"]["gestion"] = "Gestion";
	$fieldToolTipst_planilla_h["Spanish"]["gestion"] = "";
	$fieldLabelst_planilla_h["Spanish"]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipst_planilla_h["Spanish"]["liquido_pagable"] = "";
	$fieldLabelst_planilla_h["Spanish"]["cod_afp"] = "Cod Afp";
	$fieldToolTipst_planilla_h["Spanish"]["cod_afp"] = "";
	$fieldLabelst_planilla_h["Spanish"]["cta_banco"] = "Cta Banco";
	$fieldToolTipst_planilla_h["Spanish"]["cta_banco"] = "";
	$fieldLabelst_planilla_h["Spanish"]["tipo_funcionario"] = "Tipo Funcionario";
	$fieldToolTipst_planilla_h["Spanish"]["tipo_funcionario"] = "";
	if (count($fieldToolTipst_planilla_h["Spanish"]))
		$tdatat_planilla_h[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_planilla_h[""] = array();
	$fieldToolTipst_planilla_h[""] = array();
	$pageTitlest_planilla_h[""] = array();
	$fieldLabelst_planilla_h[""]["id_func"] = "Id Func";
	$fieldToolTipst_planilla_h[""]["id_func"] = "";
	$fieldLabelst_planilla_h[""]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipst_planilla_h[""]["fecha_nac"] = "";
	$fieldLabelst_planilla_h[""]["sexo"] = "Sexo";
	$fieldToolTipst_planilla_h[""]["sexo"] = "";
	$fieldLabelst_planilla_h[""]["item_contrato"] = "Item Contrato";
	$fieldToolTipst_planilla_h[""]["item_contrato"] = "";
	$fieldLabelst_planilla_h[""]["unidad"] = "Unidad";
	$fieldToolTipst_planilla_h[""]["unidad"] = "";
	$fieldLabelst_planilla_h[""]["cargo"] = "Cargo";
	$fieldToolTipst_planilla_h[""]["cargo"] = "";
	$fieldLabelst_planilla_h[""]["paterno"] = "Paterno";
	$fieldToolTipst_planilla_h[""]["paterno"] = "";
	$fieldLabelst_planilla_h[""]["materno"] = "Materno";
	$fieldToolTipst_planilla_h[""]["materno"] = "";
	$fieldLabelst_planilla_h[""]["nombres"] = "Nombres";
	$fieldToolTipst_planilla_h[""]["nombres"] = "";
	$fieldLabelst_planilla_h[""]["ci"] = "Ci";
	$fieldToolTipst_planilla_h[""]["ci"] = "";
	$fieldLabelst_planilla_h[""]["exp"] = "Exp";
	$fieldToolTipst_planilla_h[""]["exp"] = "";
	$fieldLabelst_planilla_h[""]["nit"] = "Nit";
	$fieldToolTipst_planilla_h[""]["nit"] = "";
	$fieldLabelst_planilla_h[""]["fec_ingreso"] = "Fec Ingreso";
	$fieldToolTipst_planilla_h[""]["fec_ingreso"] = "";
	$fieldLabelst_planilla_h[""]["baja"] = "Baja";
	$fieldToolTipst_planilla_h[""]["baja"] = "";
	$fieldLabelst_planilla_h[""]["reasig"] = "Reasig";
	$fieldToolTipst_planilla_h[""]["reasig"] = "";
	$fieldLabelst_planilla_h[""]["haber_basico"] = "Haber Basico";
	$fieldToolTipst_planilla_h[""]["haber_basico"] = "";
	$fieldLabelst_planilla_h[""]["dias_trab"] = "Dias Trab";
	$fieldToolTipst_planilla_h[""]["dias_trab"] = "";
	$fieldLabelst_planilla_h[""]["haber_percibido"] = "Haber Percibido";
	$fieldToolTipst_planilla_h[""]["haber_percibido"] = "";
	$fieldLabelst_planilla_h[""]["reint"] = "Reint";
	$fieldToolTipst_planilla_h[""]["reint"] = "";
	$fieldLabelst_planilla_h[""]["bono_ant"] = "Bono Ant";
	$fieldToolTipst_planilla_h[""]["bono_ant"] = "";
	$fieldLabelst_planilla_h[""]["total_ganado"] = "Total Ganado";
	$fieldToolTipst_planilla_h[""]["total_ganado"] = "";
	$fieldLabelst_planilla_h[""]["devoluciones"] = "Devoluciones";
	$fieldToolTipst_planilla_h[""]["devoluciones"] = "";
	$fieldLabelst_planilla_h[""]["asig_familiar"] = "Asig Familiar";
	$fieldToolTipst_planilla_h[""]["asig_familiar"] = "";
	$fieldLabelst_planilla_h[""]["futuro_afp_10"] = "Futuro Afp 10";
	$fieldToolTipst_planilla_h[""]["futuro_afp_10"] = "";
	$fieldLabelst_planilla_h[""]["futuro_afp_riesgo_1_71"] = "Futuro Afp Riesgo 1 71";
	$fieldToolTipst_planilla_h[""]["futuro_afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla_h[""]["futuro_afp_05"] = "Futuro Afp 05";
	$fieldToolTipst_planilla_h[""]["futuro_afp_05"] = "";
	$fieldLabelst_planilla_h[""]["futuro_afp_ap_sol_0_5"] = "Futuro Afp Ap Sol 0 5";
	$fieldToolTipst_planilla_h[""]["futuro_afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla_h[""]["futuro_ans_1"] = "Futuro Ans 1";
	$fieldToolTipst_planilla_h[""]["futuro_ans_1"] = "";
	$fieldLabelst_planilla_h[""]["prev_afp_10"] = "Prev Afp 10";
	$fieldToolTipst_planilla_h[""]["prev_afp_10"] = "";
	$fieldLabelst_planilla_h[""]["prev_afp_riesgo_1_71"] = "Prev Afp Riesgo 1 71";
	$fieldToolTipst_planilla_h[""]["prev_afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla_h[""]["prev_afp_05"] = "Prev Afp 05";
	$fieldToolTipst_planilla_h[""]["prev_afp_05"] = "";
	$fieldLabelst_planilla_h[""]["prev_afp_ap_sol_0_5"] = "Prev Afp Ap Sol 0 5";
	$fieldToolTipst_planilla_h[""]["prev_afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla_h[""]["prev_ans_1"] = "Prev Ans 1";
	$fieldToolTipst_planilla_h[""]["prev_ans_1"] = "";
	$fieldLabelst_planilla_h[""]["rc_iva"] = "Rc Iva";
	$fieldToolTipst_planilla_h[""]["rc_iva"] = "";
	$fieldLabelst_planilla_h[""]["retenciones"] = "Retenciones";
	$fieldToolTipst_planilla_h[""]["retenciones"] = "";
	$fieldLabelst_planilla_h[""]["multa"] = "Multa";
	$fieldToolTipst_planilla_h[""]["multa"] = "";
	$fieldLabelst_planilla_h[""]["total_desc"] = "Total Desc";
	$fieldToolTipst_planilla_h[""]["total_desc"] = "";
	$fieldLabelst_planilla_h[""]["pre_natal"] = "Pre Natal";
	$fieldToolTipst_planilla_h[""]["pre_natal"] = "";
	$fieldLabelst_planilla_h[""]["natalidad"] = "Natalidad";
	$fieldToolTipst_planilla_h[""]["natalidad"] = "";
	$fieldLabelst_planilla_h[""]["lactancia"] = "Lactancia";
	$fieldToolTipst_planilla_h[""]["lactancia"] = "";
	$fieldLabelst_planilla_h[""]["sepelio"] = "Sepelio";
	$fieldToolTipst_planilla_h[""]["sepelio"] = "";
	$fieldLabelst_planilla_h[""]["seguro_pat_10"] = "Seguro Pat 10";
	$fieldToolTipst_planilla_h[""]["seguro_pat_10"] = "";
	$fieldLabelst_planilla_h[""]["riesgo_pat_171"] = "Riesgo Pat 171";
	$fieldToolTipst_planilla_h[""]["riesgo_pat_171"] = "";
	$fieldLabelst_planilla_h[""]["pro_vivienda_pat_2"] = "Pro Vivienda Pat 2";
	$fieldToolTipst_planilla_h[""]["pro_vivienda_pat_2"] = "";
	$fieldLabelst_planilla_h[""]["ap_pat_sol_3"] = "Ap Pat Sol 3";
	$fieldToolTipst_planilla_h[""]["ap_pat_sol_3"] = "";
	$fieldLabelst_planilla_h[""]["mes"] = "Mes";
	$fieldToolTipst_planilla_h[""]["mes"] = "";
	$fieldLabelst_planilla_h[""]["gestion"] = "Gestion";
	$fieldToolTipst_planilla_h[""]["gestion"] = "";
	$fieldLabelst_planilla_h[""]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipst_planilla_h[""]["liquido_pagable"] = "";
	$fieldLabelst_planilla_h[""]["cod_afp"] = "Cod Afp";
	$fieldToolTipst_planilla_h[""]["cod_afp"] = "";
	$fieldLabelst_planilla_h[""]["cta_banco"] = "Cta Banco";
	$fieldToolTipst_planilla_h[""]["cta_banco"] = "";
	$fieldLabelst_planilla_h[""]["tipo_funcionario"] = "Tipo Funcionario";
	$fieldToolTipst_planilla_h[""]["tipo_funcionario"] = "";
	if (count($fieldToolTipst_planilla_h[""]))
		$tdatat_planilla_h[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_planilla_h["English"] = array();
	$fieldToolTipst_planilla_h["English"] = array();
	$pageTitlest_planilla_h["English"] = array();
	$fieldLabelst_planilla_h["English"]["id_func"] = "Id Func";
	$fieldToolTipst_planilla_h["English"]["id_func"] = "";
	$fieldLabelst_planilla_h["English"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipst_planilla_h["English"]["fecha_nac"] = "";
	$fieldLabelst_planilla_h["English"]["sexo"] = "Sexo";
	$fieldToolTipst_planilla_h["English"]["sexo"] = "";
	$fieldLabelst_planilla_h["English"]["item_contrato"] = "Item Contrato";
	$fieldToolTipst_planilla_h["English"]["item_contrato"] = "";
	$fieldLabelst_planilla_h["English"]["unidad"] = "Unidad";
	$fieldToolTipst_planilla_h["English"]["unidad"] = "";
	$fieldLabelst_planilla_h["English"]["cargo"] = "Cargo";
	$fieldToolTipst_planilla_h["English"]["cargo"] = "";
	$fieldLabelst_planilla_h["English"]["paterno"] = "Paterno";
	$fieldToolTipst_planilla_h["English"]["paterno"] = "";
	$fieldLabelst_planilla_h["English"]["materno"] = "Materno";
	$fieldToolTipst_planilla_h["English"]["materno"] = "";
	$fieldLabelst_planilla_h["English"]["nombres"] = "Nombres";
	$fieldToolTipst_planilla_h["English"]["nombres"] = "";
	$fieldLabelst_planilla_h["English"]["ci"] = "Ci";
	$fieldToolTipst_planilla_h["English"]["ci"] = "";
	$fieldLabelst_planilla_h["English"]["exp"] = "Exp";
	$fieldToolTipst_planilla_h["English"]["exp"] = "";
	$fieldLabelst_planilla_h["English"]["nit"] = "Nit";
	$fieldToolTipst_planilla_h["English"]["nit"] = "";
	$fieldLabelst_planilla_h["English"]["fec_ingreso"] = "Fec Ingreso";
	$fieldToolTipst_planilla_h["English"]["fec_ingreso"] = "";
	$fieldLabelst_planilla_h["English"]["baja"] = "Baja";
	$fieldToolTipst_planilla_h["English"]["baja"] = "";
	$fieldLabelst_planilla_h["English"]["reasig"] = "Reasig";
	$fieldToolTipst_planilla_h["English"]["reasig"] = "";
	$fieldLabelst_planilla_h["English"]["haber_basico"] = "Haber Basico";
	$fieldToolTipst_planilla_h["English"]["haber_basico"] = "";
	$fieldLabelst_planilla_h["English"]["dias_trab"] = "Dias Trab";
	$fieldToolTipst_planilla_h["English"]["dias_trab"] = "";
	$fieldLabelst_planilla_h["English"]["haber_percibido"] = "Haber Percibido";
	$fieldToolTipst_planilla_h["English"]["haber_percibido"] = "";
	$fieldLabelst_planilla_h["English"]["reint"] = "Reint";
	$fieldToolTipst_planilla_h["English"]["reint"] = "";
	$fieldLabelst_planilla_h["English"]["bono_ant"] = "Bono Ant";
	$fieldToolTipst_planilla_h["English"]["bono_ant"] = "";
	$fieldLabelst_planilla_h["English"]["total_ganado"] = "Total Ganado";
	$fieldToolTipst_planilla_h["English"]["total_ganado"] = "";
	$fieldLabelst_planilla_h["English"]["devoluciones"] = "Devoluciones";
	$fieldToolTipst_planilla_h["English"]["devoluciones"] = "";
	$fieldLabelst_planilla_h["English"]["asig_familiar"] = "Asig Familiar";
	$fieldToolTipst_planilla_h["English"]["asig_familiar"] = "";
	$fieldLabelst_planilla_h["English"]["futuro_afp_10"] = "Futuro Afp 10";
	$fieldToolTipst_planilla_h["English"]["futuro_afp_10"] = "";
	$fieldLabelst_planilla_h["English"]["futuro_afp_riesgo_1_71"] = "Futuro Afp Riesgo 1 71";
	$fieldToolTipst_planilla_h["English"]["futuro_afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla_h["English"]["futuro_afp_05"] = "Futuro Afp 05";
	$fieldToolTipst_planilla_h["English"]["futuro_afp_05"] = "";
	$fieldLabelst_planilla_h["English"]["futuro_afp_ap_sol_0_5"] = "Futuro Afp Ap Sol 0 5";
	$fieldToolTipst_planilla_h["English"]["futuro_afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla_h["English"]["futuro_ans_1"] = "Futuro Ans 1";
	$fieldToolTipst_planilla_h["English"]["futuro_ans_1"] = "";
	$fieldLabelst_planilla_h["English"]["prev_afp_10"] = "Prev Afp 10";
	$fieldToolTipst_planilla_h["English"]["prev_afp_10"] = "";
	$fieldLabelst_planilla_h["English"]["prev_afp_riesgo_1_71"] = "Prev Afp Riesgo 1 71";
	$fieldToolTipst_planilla_h["English"]["prev_afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla_h["English"]["prev_afp_05"] = "Prev Afp 05";
	$fieldToolTipst_planilla_h["English"]["prev_afp_05"] = "";
	$fieldLabelst_planilla_h["English"]["prev_afp_ap_sol_0_5"] = "Prev Afp Ap Sol 0 5";
	$fieldToolTipst_planilla_h["English"]["prev_afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla_h["English"]["prev_ans_1"] = "Prev Ans 1";
	$fieldToolTipst_planilla_h["English"]["prev_ans_1"] = "";
	$fieldLabelst_planilla_h["English"]["rc_iva"] = "Rc Iva";
	$fieldToolTipst_planilla_h["English"]["rc_iva"] = "";
	$fieldLabelst_planilla_h["English"]["retenciones"] = "Retenciones";
	$fieldToolTipst_planilla_h["English"]["retenciones"] = "";
	$fieldLabelst_planilla_h["English"]["multa"] = "Multa";
	$fieldToolTipst_planilla_h["English"]["multa"] = "";
	$fieldLabelst_planilla_h["English"]["total_desc"] = "Total Desc";
	$fieldToolTipst_planilla_h["English"]["total_desc"] = "";
	$fieldLabelst_planilla_h["English"]["pre_natal"] = "Pre Natal";
	$fieldToolTipst_planilla_h["English"]["pre_natal"] = "";
	$fieldLabelst_planilla_h["English"]["natalidad"] = "Natalidad";
	$fieldToolTipst_planilla_h["English"]["natalidad"] = "";
	$fieldLabelst_planilla_h["English"]["lactancia"] = "Lactancia";
	$fieldToolTipst_planilla_h["English"]["lactancia"] = "";
	$fieldLabelst_planilla_h["English"]["sepelio"] = "Sepelio";
	$fieldToolTipst_planilla_h["English"]["sepelio"] = "";
	$fieldLabelst_planilla_h["English"]["seguro_pat_10"] = "Seguro Pat 10";
	$fieldToolTipst_planilla_h["English"]["seguro_pat_10"] = "";
	$fieldLabelst_planilla_h["English"]["riesgo_pat_171"] = "Riesgo Pat 171";
	$fieldToolTipst_planilla_h["English"]["riesgo_pat_171"] = "";
	$fieldLabelst_planilla_h["English"]["pro_vivienda_pat_2"] = "Pro Vivienda Pat 2";
	$fieldToolTipst_planilla_h["English"]["pro_vivienda_pat_2"] = "";
	$fieldLabelst_planilla_h["English"]["ap_pat_sol_3"] = "Ap Pat Sol 3";
	$fieldToolTipst_planilla_h["English"]["ap_pat_sol_3"] = "";
	$fieldLabelst_planilla_h["English"]["mes"] = "Mes";
	$fieldToolTipst_planilla_h["English"]["mes"] = "";
	$fieldLabelst_planilla_h["English"]["gestion"] = "Gestion";
	$fieldToolTipst_planilla_h["English"]["gestion"] = "";
	$fieldLabelst_planilla_h["English"]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipst_planilla_h["English"]["liquido_pagable"] = "";
	$fieldLabelst_planilla_h["English"]["cod_afp"] = "Cod Afp";
	$fieldToolTipst_planilla_h["English"]["cod_afp"] = "";
	$fieldLabelst_planilla_h["English"]["cta_banco"] = "Cta Banco";
	$fieldToolTipst_planilla_h["English"]["cta_banco"] = "";
	$fieldLabelst_planilla_h["English"]["tipo_funcionario"] = "Tipo Funcionario";
	$fieldToolTipst_planilla_h["English"]["tipo_funcionario"] = "";
	if (count($fieldToolTipst_planilla_h["English"]))
		$tdatat_planilla_h[".isUseToolTips"] = true;
}
	
	
	$tdatat_planilla_h[".NCSearch"] = true;



$tdatat_planilla_h[".shortTableName"] = "t_planilla_h";
$tdatat_planilla_h[".nSecOptions"] = 0;
$tdatat_planilla_h[".recsPerRowList"] = 1;
$tdatat_planilla_h[".recsPerRowPrint"] = 1;
$tdatat_planilla_h[".mainTableOwnerID"] = "";
$tdatat_planilla_h[".moveNext"] = 1;
$tdatat_planilla_h[".entityType"] = 0;

$tdatat_planilla_h[".strOriginalTableName"] = "t_planilla_h";




$tdatat_planilla_h[".showAddInPopup"] = false;

$tdatat_planilla_h[".showEditInPopup"] = false;

$tdatat_planilla_h[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_planilla_h[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_planilla_h[".fieldsForRegister"] = array();

$tdatat_planilla_h[".listAjax"] = false;

	$tdatat_planilla_h[".audit"] = false;

	$tdatat_planilla_h[".locking"] = false;



$tdatat_planilla_h[".list"] = true;

$tdatat_planilla_h[".view"] = true;


$tdatat_planilla_h[".exportTo"] = true;

$tdatat_planilla_h[".printFriendly"] = true;


$tdatat_planilla_h[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_planilla_h[".searchSaving"] = false;
//

$tdatat_planilla_h[".showSearchPanel"] = true;
		$tdatat_planilla_h[".flexibleSearch"] = true;		

if (isMobile())
	$tdatat_planilla_h[".isUseAjaxSuggest"] = false;
else 
	$tdatat_planilla_h[".isUseAjaxSuggest"] = true;

$tdatat_planilla_h[".rowHighlite"] = true;



$tdatat_planilla_h[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_planilla_h[".isUseTimeForSearch"] = false;





$tdatat_planilla_h[".allSearchFields"] = array();
$tdatat_planilla_h[".filterFields"] = array();
$tdatat_planilla_h[".requiredSearchFields"] = array();

$tdatat_planilla_h[".allSearchFields"][] = "id_func";
	$tdatat_planilla_h[".allSearchFields"][] = "fecha_nac";
	$tdatat_planilla_h[".allSearchFields"][] = "sexo";
	$tdatat_planilla_h[".allSearchFields"][] = "item_contrato";
	$tdatat_planilla_h[".allSearchFields"][] = "unidad";
	$tdatat_planilla_h[".allSearchFields"][] = "cargo";
	$tdatat_planilla_h[".allSearchFields"][] = "paterno";
	$tdatat_planilla_h[".allSearchFields"][] = "materno";
	$tdatat_planilla_h[".allSearchFields"][] = "nombres";
	$tdatat_planilla_h[".allSearchFields"][] = "ci";
	$tdatat_planilla_h[".allSearchFields"][] = "exp";
	$tdatat_planilla_h[".allSearchFields"][] = "nit";
	$tdatat_planilla_h[".allSearchFields"][] = "fec_ingreso";
	$tdatat_planilla_h[".allSearchFields"][] = "baja";
	$tdatat_planilla_h[".allSearchFields"][] = "reasig";
	$tdatat_planilla_h[".allSearchFields"][] = "haber_basico";
	$tdatat_planilla_h[".allSearchFields"][] = "dias_trab";
	$tdatat_planilla_h[".allSearchFields"][] = "haber_percibido";
	$tdatat_planilla_h[".allSearchFields"][] = "reint";
	$tdatat_planilla_h[".allSearchFields"][] = "bono_ant";
	$tdatat_planilla_h[".allSearchFields"][] = "total_ganado";
	$tdatat_planilla_h[".allSearchFields"][] = "devoluciones";
	$tdatat_planilla_h[".allSearchFields"][] = "asig_familiar";
	$tdatat_planilla_h[".allSearchFields"][] = "futuro_afp_10";
	$tdatat_planilla_h[".allSearchFields"][] = "futuro_afp_riesgo_1_71";
	$tdatat_planilla_h[".allSearchFields"][] = "futuro_afp_05";
	$tdatat_planilla_h[".allSearchFields"][] = "futuro_afp_ap_sol_0_5";
	$tdatat_planilla_h[".allSearchFields"][] = "futuro_ans_1";
	$tdatat_planilla_h[".allSearchFields"][] = "prev_afp_10";
	$tdatat_planilla_h[".allSearchFields"][] = "prev_afp_riesgo_1_71";
	$tdatat_planilla_h[".allSearchFields"][] = "prev_afp_05";
	$tdatat_planilla_h[".allSearchFields"][] = "prev_afp_ap_sol_0_5";
	$tdatat_planilla_h[".allSearchFields"][] = "prev_ans_1";
	$tdatat_planilla_h[".allSearchFields"][] = "rc_iva";
	$tdatat_planilla_h[".allSearchFields"][] = "retenciones";
	$tdatat_planilla_h[".allSearchFields"][] = "multa";
	$tdatat_planilla_h[".allSearchFields"][] = "total_desc";
	$tdatat_planilla_h[".allSearchFields"][] = "pre_natal";
	$tdatat_planilla_h[".allSearchFields"][] = "natalidad";
	$tdatat_planilla_h[".allSearchFields"][] = "lactancia";
	$tdatat_planilla_h[".allSearchFields"][] = "sepelio";
	$tdatat_planilla_h[".allSearchFields"][] = "seguro_pat_10";
	$tdatat_planilla_h[".allSearchFields"][] = "riesgo_pat_171";
	$tdatat_planilla_h[".allSearchFields"][] = "pro_vivienda_pat_2";
	$tdatat_planilla_h[".allSearchFields"][] = "ap_pat_sol_3";
	$tdatat_planilla_h[".allSearchFields"][] = "mes";
	$tdatat_planilla_h[".allSearchFields"][] = "gestion";
	$tdatat_planilla_h[".allSearchFields"][] = "liquido_pagable";
	$tdatat_planilla_h[".allSearchFields"][] = "cod_afp";
	$tdatat_planilla_h[".allSearchFields"][] = "cta_banco";
	$tdatat_planilla_h[".allSearchFields"][] = "tipo_funcionario";
	

$tdatat_planilla_h[".googleLikeFields"] = array();
$tdatat_planilla_h[".googleLikeFields"][] = "id_func";
$tdatat_planilla_h[".googleLikeFields"][] = "fecha_nac";
$tdatat_planilla_h[".googleLikeFields"][] = "sexo";
$tdatat_planilla_h[".googleLikeFields"][] = "item_contrato";
$tdatat_planilla_h[".googleLikeFields"][] = "unidad";
$tdatat_planilla_h[".googleLikeFields"][] = "cargo";
$tdatat_planilla_h[".googleLikeFields"][] = "paterno";
$tdatat_planilla_h[".googleLikeFields"][] = "materno";
$tdatat_planilla_h[".googleLikeFields"][] = "nombres";
$tdatat_planilla_h[".googleLikeFields"][] = "ci";
$tdatat_planilla_h[".googleLikeFields"][] = "exp";
$tdatat_planilla_h[".googleLikeFields"][] = "nit";
$tdatat_planilla_h[".googleLikeFields"][] = "fec_ingreso";
$tdatat_planilla_h[".googleLikeFields"][] = "baja";
$tdatat_planilla_h[".googleLikeFields"][] = "reasig";
$tdatat_planilla_h[".googleLikeFields"][] = "haber_basico";
$tdatat_planilla_h[".googleLikeFields"][] = "dias_trab";
$tdatat_planilla_h[".googleLikeFields"][] = "haber_percibido";
$tdatat_planilla_h[".googleLikeFields"][] = "reint";
$tdatat_planilla_h[".googleLikeFields"][] = "bono_ant";
$tdatat_planilla_h[".googleLikeFields"][] = "total_ganado";
$tdatat_planilla_h[".googleLikeFields"][] = "devoluciones";
$tdatat_planilla_h[".googleLikeFields"][] = "asig_familiar";
$tdatat_planilla_h[".googleLikeFields"][] = "futuro_afp_10";
$tdatat_planilla_h[".googleLikeFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_h[".googleLikeFields"][] = "futuro_afp_05";
$tdatat_planilla_h[".googleLikeFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_h[".googleLikeFields"][] = "futuro_ans_1";
$tdatat_planilla_h[".googleLikeFields"][] = "prev_afp_10";
$tdatat_planilla_h[".googleLikeFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_h[".googleLikeFields"][] = "prev_afp_05";
$tdatat_planilla_h[".googleLikeFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_h[".googleLikeFields"][] = "prev_ans_1";
$tdatat_planilla_h[".googleLikeFields"][] = "rc_iva";
$tdatat_planilla_h[".googleLikeFields"][] = "retenciones";
$tdatat_planilla_h[".googleLikeFields"][] = "multa";
$tdatat_planilla_h[".googleLikeFields"][] = "total_desc";
$tdatat_planilla_h[".googleLikeFields"][] = "pre_natal";
$tdatat_planilla_h[".googleLikeFields"][] = "natalidad";
$tdatat_planilla_h[".googleLikeFields"][] = "lactancia";
$tdatat_planilla_h[".googleLikeFields"][] = "sepelio";
$tdatat_planilla_h[".googleLikeFields"][] = "seguro_pat_10";
$tdatat_planilla_h[".googleLikeFields"][] = "riesgo_pat_171";
$tdatat_planilla_h[".googleLikeFields"][] = "pro_vivienda_pat_2";
$tdatat_planilla_h[".googleLikeFields"][] = "ap_pat_sol_3";
$tdatat_planilla_h[".googleLikeFields"][] = "mes";
$tdatat_planilla_h[".googleLikeFields"][] = "gestion";
$tdatat_planilla_h[".googleLikeFields"][] = "liquido_pagable";
$tdatat_planilla_h[".googleLikeFields"][] = "cod_afp";
$tdatat_planilla_h[".googleLikeFields"][] = "cta_banco";
$tdatat_planilla_h[".googleLikeFields"][] = "tipo_funcionario";


$tdatat_planilla_h[".advSearchFields"] = array();
$tdatat_planilla_h[".advSearchFields"][] = "id_func";
$tdatat_planilla_h[".advSearchFields"][] = "fecha_nac";
$tdatat_planilla_h[".advSearchFields"][] = "sexo";
$tdatat_planilla_h[".advSearchFields"][] = "item_contrato";
$tdatat_planilla_h[".advSearchFields"][] = "unidad";
$tdatat_planilla_h[".advSearchFields"][] = "cargo";
$tdatat_planilla_h[".advSearchFields"][] = "paterno";
$tdatat_planilla_h[".advSearchFields"][] = "materno";
$tdatat_planilla_h[".advSearchFields"][] = "nombres";
$tdatat_planilla_h[".advSearchFields"][] = "ci";
$tdatat_planilla_h[".advSearchFields"][] = "exp";
$tdatat_planilla_h[".advSearchFields"][] = "nit";
$tdatat_planilla_h[".advSearchFields"][] = "fec_ingreso";
$tdatat_planilla_h[".advSearchFields"][] = "baja";
$tdatat_planilla_h[".advSearchFields"][] = "reasig";
$tdatat_planilla_h[".advSearchFields"][] = "haber_basico";
$tdatat_planilla_h[".advSearchFields"][] = "dias_trab";
$tdatat_planilla_h[".advSearchFields"][] = "haber_percibido";
$tdatat_planilla_h[".advSearchFields"][] = "reint";
$tdatat_planilla_h[".advSearchFields"][] = "bono_ant";
$tdatat_planilla_h[".advSearchFields"][] = "total_ganado";
$tdatat_planilla_h[".advSearchFields"][] = "devoluciones";
$tdatat_planilla_h[".advSearchFields"][] = "asig_familiar";
$tdatat_planilla_h[".advSearchFields"][] = "futuro_afp_10";
$tdatat_planilla_h[".advSearchFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_h[".advSearchFields"][] = "futuro_afp_05";
$tdatat_planilla_h[".advSearchFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_h[".advSearchFields"][] = "futuro_ans_1";
$tdatat_planilla_h[".advSearchFields"][] = "prev_afp_10";
$tdatat_planilla_h[".advSearchFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_h[".advSearchFields"][] = "prev_afp_05";
$tdatat_planilla_h[".advSearchFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_h[".advSearchFields"][] = "prev_ans_1";
$tdatat_planilla_h[".advSearchFields"][] = "rc_iva";
$tdatat_planilla_h[".advSearchFields"][] = "retenciones";
$tdatat_planilla_h[".advSearchFields"][] = "multa";
$tdatat_planilla_h[".advSearchFields"][] = "total_desc";
$tdatat_planilla_h[".advSearchFields"][] = "pre_natal";
$tdatat_planilla_h[".advSearchFields"][] = "natalidad";
$tdatat_planilla_h[".advSearchFields"][] = "lactancia";
$tdatat_planilla_h[".advSearchFields"][] = "sepelio";
$tdatat_planilla_h[".advSearchFields"][] = "seguro_pat_10";
$tdatat_planilla_h[".advSearchFields"][] = "riesgo_pat_171";
$tdatat_planilla_h[".advSearchFields"][] = "pro_vivienda_pat_2";
$tdatat_planilla_h[".advSearchFields"][] = "ap_pat_sol_3";
$tdatat_planilla_h[".advSearchFields"][] = "mes";
$tdatat_planilla_h[".advSearchFields"][] = "gestion";
$tdatat_planilla_h[".advSearchFields"][] = "liquido_pagable";
$tdatat_planilla_h[".advSearchFields"][] = "cod_afp";
$tdatat_planilla_h[".advSearchFields"][] = "cta_banco";
$tdatat_planilla_h[".advSearchFields"][] = "tipo_funcionario";

$tdatat_planilla_h[".tableType"] = "list";

$tdatat_planilla_h[".printerPageOrientation"] = 0;
$tdatat_planilla_h[".nPrinterPageScale"] = 100;

$tdatat_planilla_h[".nPrinterSplitRecords"] = 40;

$tdatat_planilla_h[".nPrinterPDFSplitRecords"] = 40;



$tdatat_planilla_h[".geocodingEnabled"] = false;




	





// view page pdf
$tdatat_planilla_h[".isViewPagePDF"] = true;
$tdatat_planilla_h[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatat_planilla_h[".isPrinterPagePDF"] = true;
$tdatat_planilla_h[".nPrinterPagePDFScale"] = 100;


$tdatat_planilla_h[".pageSize"] = 20;

$tdatat_planilla_h[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_planilla_h[".strOrderBy"] = $tstrOrderBy;

$tdatat_planilla_h[".orderindexes"] = array();

$tdatat_planilla_h[".sqlHead"] = "SELECT id_func,  	fecha_nac,  	sexo,  	item_contrato,  	unidad,  	cargo,  	paterno,  	materno,  	nombres,  	ci,  	exp,  	nit,  	fec_ingreso,  	baja,  	reasig,  	haber_basico,  	dias_trab,  	haber_percibido,  	reint,  	bono_ant,  	total_ganado,  	devoluciones,  	asig_familiar,  	futuro_afp_10,  	futuro_afp_riesgo_1_71,  	futuro_afp_05,  	futuro_afp_ap_sol_0_5,  	futuro_ans_1,  	prev_afp_10,  	prev_afp_riesgo_1_71,  	prev_afp_05,  	prev_afp_ap_sol_0_5,  	prev_ans_1,  	rc_iva,  	retenciones,  	multa,  	total_desc,  	pre_natal,  	natalidad,  	lactancia,  	sepelio,  	seguro_pat_10,  	riesgo_pat_171,  	pro_vivienda_pat_2,  	ap_pat_sol_3,  	mes,  	gestion,  	liquido_pagable,  	cod_afp,  	cta_banco,  	tipo_funcionario";
$tdatat_planilla_h[".sqlFrom"] = "FROM t_planilla_h";
$tdatat_planilla_h[".sqlWhereExpr"] = "";
$tdatat_planilla_h[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_planilla_h[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_planilla_h[".arrGroupsPerPage"] = $arrGPP;

$tdatat_planilla_h[".highlightSearchResults"] = true;

$tableKeyst_planilla_h = array();
$tableKeyst_planilla_h[] = "id_func";
$tdatat_planilla_h[".Keys"] = $tableKeyst_planilla_h;

$tdatat_planilla_h[".listFields"] = array();
$tdatat_planilla_h[".listFields"][] = "id_func";
$tdatat_planilla_h[".listFields"][] = "fecha_nac";
$tdatat_planilla_h[".listFields"][] = "sexo";
$tdatat_planilla_h[".listFields"][] = "item_contrato";
$tdatat_planilla_h[".listFields"][] = "unidad";
$tdatat_planilla_h[".listFields"][] = "cargo";
$tdatat_planilla_h[".listFields"][] = "paterno";
$tdatat_planilla_h[".listFields"][] = "materno";
$tdatat_planilla_h[".listFields"][] = "nombres";
$tdatat_planilla_h[".listFields"][] = "ci";
$tdatat_planilla_h[".listFields"][] = "exp";
$tdatat_planilla_h[".listFields"][] = "nit";
$tdatat_planilla_h[".listFields"][] = "fec_ingreso";
$tdatat_planilla_h[".listFields"][] = "baja";
$tdatat_planilla_h[".listFields"][] = "reasig";
$tdatat_planilla_h[".listFields"][] = "haber_basico";
$tdatat_planilla_h[".listFields"][] = "dias_trab";
$tdatat_planilla_h[".listFields"][] = "haber_percibido";
$tdatat_planilla_h[".listFields"][] = "reint";
$tdatat_planilla_h[".listFields"][] = "bono_ant";
$tdatat_planilla_h[".listFields"][] = "total_ganado";
$tdatat_planilla_h[".listFields"][] = "devoluciones";
$tdatat_planilla_h[".listFields"][] = "asig_familiar";
$tdatat_planilla_h[".listFields"][] = "futuro_afp_10";
$tdatat_planilla_h[".listFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_h[".listFields"][] = "futuro_afp_05";
$tdatat_planilla_h[".listFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_h[".listFields"][] = "futuro_ans_1";
$tdatat_planilla_h[".listFields"][] = "prev_afp_10";
$tdatat_planilla_h[".listFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_h[".listFields"][] = "prev_afp_05";
$tdatat_planilla_h[".listFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_h[".listFields"][] = "prev_ans_1";
$tdatat_planilla_h[".listFields"][] = "rc_iva";
$tdatat_planilla_h[".listFields"][] = "retenciones";
$tdatat_planilla_h[".listFields"][] = "multa";
$tdatat_planilla_h[".listFields"][] = "total_desc";
$tdatat_planilla_h[".listFields"][] = "pre_natal";
$tdatat_planilla_h[".listFields"][] = "natalidad";
$tdatat_planilla_h[".listFields"][] = "lactancia";
$tdatat_planilla_h[".listFields"][] = "sepelio";
$tdatat_planilla_h[".listFields"][] = "seguro_pat_10";
$tdatat_planilla_h[".listFields"][] = "riesgo_pat_171";
$tdatat_planilla_h[".listFields"][] = "pro_vivienda_pat_2";
$tdatat_planilla_h[".listFields"][] = "ap_pat_sol_3";
$tdatat_planilla_h[".listFields"][] = "mes";
$tdatat_planilla_h[".listFields"][] = "gestion";
$tdatat_planilla_h[".listFields"][] = "liquido_pagable";
$tdatat_planilla_h[".listFields"][] = "cod_afp";
$tdatat_planilla_h[".listFields"][] = "cta_banco";
$tdatat_planilla_h[".listFields"][] = "tipo_funcionario";

$tdatat_planilla_h[".hideMobileList"] = array();


$tdatat_planilla_h[".viewFields"] = array();
$tdatat_planilla_h[".viewFields"][] = "id_func";
$tdatat_planilla_h[".viewFields"][] = "fecha_nac";
$tdatat_planilla_h[".viewFields"][] = "sexo";
$tdatat_planilla_h[".viewFields"][] = "item_contrato";
$tdatat_planilla_h[".viewFields"][] = "unidad";
$tdatat_planilla_h[".viewFields"][] = "cargo";
$tdatat_planilla_h[".viewFields"][] = "paterno";
$tdatat_planilla_h[".viewFields"][] = "materno";
$tdatat_planilla_h[".viewFields"][] = "nombres";
$tdatat_planilla_h[".viewFields"][] = "ci";
$tdatat_planilla_h[".viewFields"][] = "exp";
$tdatat_planilla_h[".viewFields"][] = "nit";
$tdatat_planilla_h[".viewFields"][] = "fec_ingreso";
$tdatat_planilla_h[".viewFields"][] = "baja";
$tdatat_planilla_h[".viewFields"][] = "reasig";
$tdatat_planilla_h[".viewFields"][] = "haber_basico";
$tdatat_planilla_h[".viewFields"][] = "dias_trab";
$tdatat_planilla_h[".viewFields"][] = "haber_percibido";
$tdatat_planilla_h[".viewFields"][] = "reint";
$tdatat_planilla_h[".viewFields"][] = "bono_ant";
$tdatat_planilla_h[".viewFields"][] = "total_ganado";
$tdatat_planilla_h[".viewFields"][] = "devoluciones";
$tdatat_planilla_h[".viewFields"][] = "asig_familiar";
$tdatat_planilla_h[".viewFields"][] = "futuro_afp_10";
$tdatat_planilla_h[".viewFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_h[".viewFields"][] = "futuro_afp_05";
$tdatat_planilla_h[".viewFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_h[".viewFields"][] = "futuro_ans_1";
$tdatat_planilla_h[".viewFields"][] = "prev_afp_10";
$tdatat_planilla_h[".viewFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_h[".viewFields"][] = "prev_afp_05";
$tdatat_planilla_h[".viewFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_h[".viewFields"][] = "prev_ans_1";
$tdatat_planilla_h[".viewFields"][] = "rc_iva";
$tdatat_planilla_h[".viewFields"][] = "retenciones";
$tdatat_planilla_h[".viewFields"][] = "multa";
$tdatat_planilla_h[".viewFields"][] = "total_desc";
$tdatat_planilla_h[".viewFields"][] = "pre_natal";
$tdatat_planilla_h[".viewFields"][] = "natalidad";
$tdatat_planilla_h[".viewFields"][] = "lactancia";
$tdatat_planilla_h[".viewFields"][] = "sepelio";
$tdatat_planilla_h[".viewFields"][] = "seguro_pat_10";
$tdatat_planilla_h[".viewFields"][] = "riesgo_pat_171";
$tdatat_planilla_h[".viewFields"][] = "pro_vivienda_pat_2";
$tdatat_planilla_h[".viewFields"][] = "ap_pat_sol_3";
$tdatat_planilla_h[".viewFields"][] = "mes";
$tdatat_planilla_h[".viewFields"][] = "gestion";
$tdatat_planilla_h[".viewFields"][] = "liquido_pagable";
$tdatat_planilla_h[".viewFields"][] = "cod_afp";
$tdatat_planilla_h[".viewFields"][] = "cta_banco";
$tdatat_planilla_h[".viewFields"][] = "tipo_funcionario";

$tdatat_planilla_h[".addFields"] = array();

$tdatat_planilla_h[".masterListFields"] = array();
$tdatat_planilla_h[".masterListFields"][] = "id_func";
$tdatat_planilla_h[".masterListFields"][] = "fecha_nac";
$tdatat_planilla_h[".masterListFields"][] = "sexo";
$tdatat_planilla_h[".masterListFields"][] = "item_contrato";
$tdatat_planilla_h[".masterListFields"][] = "unidad";
$tdatat_planilla_h[".masterListFields"][] = "cargo";
$tdatat_planilla_h[".masterListFields"][] = "paterno";
$tdatat_planilla_h[".masterListFields"][] = "materno";
$tdatat_planilla_h[".masterListFields"][] = "nombres";
$tdatat_planilla_h[".masterListFields"][] = "ci";
$tdatat_planilla_h[".masterListFields"][] = "exp";
$tdatat_planilla_h[".masterListFields"][] = "nit";
$tdatat_planilla_h[".masterListFields"][] = "fec_ingreso";
$tdatat_planilla_h[".masterListFields"][] = "baja";
$tdatat_planilla_h[".masterListFields"][] = "reasig";
$tdatat_planilla_h[".masterListFields"][] = "haber_basico";
$tdatat_planilla_h[".masterListFields"][] = "dias_trab";
$tdatat_planilla_h[".masterListFields"][] = "haber_percibido";
$tdatat_planilla_h[".masterListFields"][] = "reint";
$tdatat_planilla_h[".masterListFields"][] = "bono_ant";
$tdatat_planilla_h[".masterListFields"][] = "total_ganado";
$tdatat_planilla_h[".masterListFields"][] = "devoluciones";
$tdatat_planilla_h[".masterListFields"][] = "asig_familiar";
$tdatat_planilla_h[".masterListFields"][] = "futuro_afp_10";
$tdatat_planilla_h[".masterListFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_h[".masterListFields"][] = "futuro_afp_05";
$tdatat_planilla_h[".masterListFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_h[".masterListFields"][] = "futuro_ans_1";
$tdatat_planilla_h[".masterListFields"][] = "prev_afp_10";
$tdatat_planilla_h[".masterListFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_h[".masterListFields"][] = "prev_afp_05";
$tdatat_planilla_h[".masterListFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_h[".masterListFields"][] = "prev_ans_1";
$tdatat_planilla_h[".masterListFields"][] = "rc_iva";
$tdatat_planilla_h[".masterListFields"][] = "retenciones";
$tdatat_planilla_h[".masterListFields"][] = "multa";
$tdatat_planilla_h[".masterListFields"][] = "total_desc";
$tdatat_planilla_h[".masterListFields"][] = "pre_natal";
$tdatat_planilla_h[".masterListFields"][] = "natalidad";
$tdatat_planilla_h[".masterListFields"][] = "lactancia";
$tdatat_planilla_h[".masterListFields"][] = "sepelio";
$tdatat_planilla_h[".masterListFields"][] = "seguro_pat_10";
$tdatat_planilla_h[".masterListFields"][] = "riesgo_pat_171";
$tdatat_planilla_h[".masterListFields"][] = "pro_vivienda_pat_2";
$tdatat_planilla_h[".masterListFields"][] = "ap_pat_sol_3";
$tdatat_planilla_h[".masterListFields"][] = "mes";
$tdatat_planilla_h[".masterListFields"][] = "gestion";
$tdatat_planilla_h[".masterListFields"][] = "liquido_pagable";
$tdatat_planilla_h[".masterListFields"][] = "cod_afp";
$tdatat_planilla_h[".masterListFields"][] = "cta_banco";
$tdatat_planilla_h[".masterListFields"][] = "tipo_funcionario";

$tdatat_planilla_h[".inlineAddFields"] = array();

$tdatat_planilla_h[".editFields"] = array();

$tdatat_planilla_h[".inlineEditFields"] = array();

$tdatat_planilla_h[".exportFields"] = array();
$tdatat_planilla_h[".exportFields"][] = "id_func";
$tdatat_planilla_h[".exportFields"][] = "fecha_nac";
$tdatat_planilla_h[".exportFields"][] = "sexo";
$tdatat_planilla_h[".exportFields"][] = "item_contrato";
$tdatat_planilla_h[".exportFields"][] = "unidad";
$tdatat_planilla_h[".exportFields"][] = "cargo";
$tdatat_planilla_h[".exportFields"][] = "paterno";
$tdatat_planilla_h[".exportFields"][] = "materno";
$tdatat_planilla_h[".exportFields"][] = "nombres";
$tdatat_planilla_h[".exportFields"][] = "ci";
$tdatat_planilla_h[".exportFields"][] = "exp";
$tdatat_planilla_h[".exportFields"][] = "nit";
$tdatat_planilla_h[".exportFields"][] = "fec_ingreso";
$tdatat_planilla_h[".exportFields"][] = "baja";
$tdatat_planilla_h[".exportFields"][] = "reasig";
$tdatat_planilla_h[".exportFields"][] = "haber_basico";
$tdatat_planilla_h[".exportFields"][] = "dias_trab";
$tdatat_planilla_h[".exportFields"][] = "haber_percibido";
$tdatat_planilla_h[".exportFields"][] = "reint";
$tdatat_planilla_h[".exportFields"][] = "bono_ant";
$tdatat_planilla_h[".exportFields"][] = "total_ganado";
$tdatat_planilla_h[".exportFields"][] = "devoluciones";
$tdatat_planilla_h[".exportFields"][] = "asig_familiar";
$tdatat_planilla_h[".exportFields"][] = "futuro_afp_10";
$tdatat_planilla_h[".exportFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_h[".exportFields"][] = "futuro_afp_05";
$tdatat_planilla_h[".exportFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_h[".exportFields"][] = "futuro_ans_1";
$tdatat_planilla_h[".exportFields"][] = "prev_afp_10";
$tdatat_planilla_h[".exportFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_h[".exportFields"][] = "prev_afp_05";
$tdatat_planilla_h[".exportFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_h[".exportFields"][] = "prev_ans_1";
$tdatat_planilla_h[".exportFields"][] = "rc_iva";
$tdatat_planilla_h[".exportFields"][] = "retenciones";
$tdatat_planilla_h[".exportFields"][] = "multa";
$tdatat_planilla_h[".exportFields"][] = "total_desc";
$tdatat_planilla_h[".exportFields"][] = "pre_natal";
$tdatat_planilla_h[".exportFields"][] = "natalidad";
$tdatat_planilla_h[".exportFields"][] = "lactancia";
$tdatat_planilla_h[".exportFields"][] = "sepelio";
$tdatat_planilla_h[".exportFields"][] = "seguro_pat_10";
$tdatat_planilla_h[".exportFields"][] = "riesgo_pat_171";
$tdatat_planilla_h[".exportFields"][] = "pro_vivienda_pat_2";
$tdatat_planilla_h[".exportFields"][] = "ap_pat_sol_3";
$tdatat_planilla_h[".exportFields"][] = "mes";
$tdatat_planilla_h[".exportFields"][] = "gestion";
$tdatat_planilla_h[".exportFields"][] = "liquido_pagable";
$tdatat_planilla_h[".exportFields"][] = "cod_afp";
$tdatat_planilla_h[".exportFields"][] = "cta_banco";
$tdatat_planilla_h[".exportFields"][] = "tipo_funcionario";

$tdatat_planilla_h[".importFields"] = array();

$tdatat_planilla_h[".printFields"] = array();
$tdatat_planilla_h[".printFields"][] = "id_func";
$tdatat_planilla_h[".printFields"][] = "fecha_nac";
$tdatat_planilla_h[".printFields"][] = "sexo";
$tdatat_planilla_h[".printFields"][] = "item_contrato";
$tdatat_planilla_h[".printFields"][] = "unidad";
$tdatat_planilla_h[".printFields"][] = "cargo";
$tdatat_planilla_h[".printFields"][] = "paterno";
$tdatat_planilla_h[".printFields"][] = "materno";
$tdatat_planilla_h[".printFields"][] = "nombres";
$tdatat_planilla_h[".printFields"][] = "ci";
$tdatat_planilla_h[".printFields"][] = "exp";
$tdatat_planilla_h[".printFields"][] = "nit";
$tdatat_planilla_h[".printFields"][] = "fec_ingreso";
$tdatat_planilla_h[".printFields"][] = "baja";
$tdatat_planilla_h[".printFields"][] = "reasig";
$tdatat_planilla_h[".printFields"][] = "haber_basico";
$tdatat_planilla_h[".printFields"][] = "dias_trab";
$tdatat_planilla_h[".printFields"][] = "haber_percibido";
$tdatat_planilla_h[".printFields"][] = "reint";
$tdatat_planilla_h[".printFields"][] = "bono_ant";
$tdatat_planilla_h[".printFields"][] = "total_ganado";
$tdatat_planilla_h[".printFields"][] = "devoluciones";
$tdatat_planilla_h[".printFields"][] = "asig_familiar";
$tdatat_planilla_h[".printFields"][] = "futuro_afp_10";
$tdatat_planilla_h[".printFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_h[".printFields"][] = "futuro_afp_05";
$tdatat_planilla_h[".printFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_h[".printFields"][] = "futuro_ans_1";
$tdatat_planilla_h[".printFields"][] = "prev_afp_10";
$tdatat_planilla_h[".printFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_h[".printFields"][] = "prev_afp_05";
$tdatat_planilla_h[".printFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_h[".printFields"][] = "prev_ans_1";
$tdatat_planilla_h[".printFields"][] = "rc_iva";
$tdatat_planilla_h[".printFields"][] = "retenciones";
$tdatat_planilla_h[".printFields"][] = "multa";
$tdatat_planilla_h[".printFields"][] = "total_desc";
$tdatat_planilla_h[".printFields"][] = "pre_natal";
$tdatat_planilla_h[".printFields"][] = "natalidad";
$tdatat_planilla_h[".printFields"][] = "lactancia";
$tdatat_planilla_h[".printFields"][] = "sepelio";
$tdatat_planilla_h[".printFields"][] = "seguro_pat_10";
$tdatat_planilla_h[".printFields"][] = "riesgo_pat_171";
$tdatat_planilla_h[".printFields"][] = "pro_vivienda_pat_2";
$tdatat_planilla_h[".printFields"][] = "ap_pat_sol_3";
$tdatat_planilla_h[".printFields"][] = "mes";
$tdatat_planilla_h[".printFields"][] = "gestion";
$tdatat_planilla_h[".printFields"][] = "liquido_pagable";
$tdatat_planilla_h[".printFields"][] = "cod_afp";
$tdatat_planilla_h[".printFields"][] = "cta_banco";
$tdatat_planilla_h[".printFields"][] = "tipo_funcionario";

//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","id_func"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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

	

	
	$tdatat_planilla_h["id_func"] = $fdata;
//	fecha_nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha_nac";
	$fdata["GoodName"] = "fecha_nac";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","fecha_nac"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fecha_nac"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_nac";
	
		
		
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
	
		
		
		$edata["DateEditType"] = 13; 
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

	

	
	$tdatat_planilla_h["fecha_nac"] = $fdata;
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","sexo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sexo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sexo";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["sexo"] = $fdata;
//	item_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "item_contrato";
	$fdata["GoodName"] = "item_contrato";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","item_contrato"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "item_contrato"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "item_contrato";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["item_contrato"] = $fdata;
//	unidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "unidad";
	$fdata["GoodName"] = "unidad";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","unidad"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "unidad"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unidad";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["unidad"] = $fdata;
//	cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cargo";
	$fdata["GoodName"] = "cargo";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","cargo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cargo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cargo";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["cargo"] = $fdata;
//	paterno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "paterno";
	$fdata["GoodName"] = "paterno";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","paterno"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "paterno"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paterno";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["paterno"] = $fdata;
//	materno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "materno";
	$fdata["GoodName"] = "materno";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","materno"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "materno"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "materno";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["materno"] = $fdata;
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","nombres"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nombres"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombres";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["nombres"] = $fdata;
//	ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ci";
	$fdata["GoodName"] = "ci";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","ci"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ci"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ci";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["ci"] = $fdata;
//	exp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "exp";
	$fdata["GoodName"] = "exp";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","exp"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "exp"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exp";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["exp"] = $fdata;
//	nit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "nit";
	$fdata["GoodName"] = "nit";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","nit"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nit"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nit";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["nit"] = $fdata;
//	fec_ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "fec_ingreso";
	$fdata["GoodName"] = "fec_ingreso";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","fec_ingreso"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fec_ingreso"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fec_ingreso";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["fec_ingreso"] = $fdata;
//	baja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "baja";
	$fdata["GoodName"] = "baja";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","baja"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "baja"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "baja";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["baja"] = $fdata;
//	reasig
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "reasig";
	$fdata["GoodName"] = "reasig";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","reasig"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reasig"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reasig";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["reasig"] = $fdata;
//	haber_basico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "haber_basico";
	$fdata["GoodName"] = "haber_basico";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","haber_basico"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "haber_basico"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "haber_basico";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["haber_basico"] = $fdata;
//	dias_trab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "dias_trab";
	$fdata["GoodName"] = "dias_trab";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","dias_trab"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "dias_trab"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dias_trab";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["dias_trab"] = $fdata;
//	haber_percibido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "haber_percibido";
	$fdata["GoodName"] = "haber_percibido";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","haber_percibido"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "haber_percibido"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "haber_percibido";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["haber_percibido"] = $fdata;
//	reint
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "reint";
	$fdata["GoodName"] = "reint";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","reint"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reint"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reint";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["reint"] = $fdata;
//	bono_ant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "bono_ant";
	$fdata["GoodName"] = "bono_ant";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","bono_ant"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "bono_ant"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bono_ant";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["bono_ant"] = $fdata;
//	total_ganado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "total_ganado";
	$fdata["GoodName"] = "total_ganado";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","total_ganado"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_ganado"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_ganado";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["total_ganado"] = $fdata;
//	devoluciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "devoluciones";
	$fdata["GoodName"] = "devoluciones";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","devoluciones"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "devoluciones"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "devoluciones";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["devoluciones"] = $fdata;
//	asig_familiar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "asig_familiar";
	$fdata["GoodName"] = "asig_familiar";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","asig_familiar"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "asig_familiar"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "asig_familiar";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["asig_familiar"] = $fdata;
//	futuro_afp_10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "futuro_afp_10";
	$fdata["GoodName"] = "futuro_afp_10";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","futuro_afp_10"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "futuro_afp_10"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "futuro_afp_10";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["futuro_afp_10"] = $fdata;
//	futuro_afp_riesgo_1_71
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "futuro_afp_riesgo_1_71";
	$fdata["GoodName"] = "futuro_afp_riesgo_1_71";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","futuro_afp_riesgo_1_71"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "futuro_afp_riesgo_1_71"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "futuro_afp_riesgo_1_71";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["futuro_afp_riesgo_1_71"] = $fdata;
//	futuro_afp_05
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "futuro_afp_05";
	$fdata["GoodName"] = "futuro_afp_05";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","futuro_afp_05"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "futuro_afp_05"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "futuro_afp_05";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["futuro_afp_05"] = $fdata;
//	futuro_afp_ap_sol_0_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "futuro_afp_ap_sol_0_5";
	$fdata["GoodName"] = "futuro_afp_ap_sol_0_5";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","futuro_afp_ap_sol_0_5"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "futuro_afp_ap_sol_0_5"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "futuro_afp_ap_sol_0_5";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["futuro_afp_ap_sol_0_5"] = $fdata;
//	futuro_ans_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "futuro_ans_1";
	$fdata["GoodName"] = "futuro_ans_1";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","futuro_ans_1"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "futuro_ans_1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "futuro_ans_1";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["futuro_ans_1"] = $fdata;
//	prev_afp_10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "prev_afp_10";
	$fdata["GoodName"] = "prev_afp_10";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","prev_afp_10"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "prev_afp_10"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prev_afp_10";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["prev_afp_10"] = $fdata;
//	prev_afp_riesgo_1_71
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "prev_afp_riesgo_1_71";
	$fdata["GoodName"] = "prev_afp_riesgo_1_71";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","prev_afp_riesgo_1_71"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "prev_afp_riesgo_1_71"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prev_afp_riesgo_1_71";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["prev_afp_riesgo_1_71"] = $fdata;
//	prev_afp_05
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "prev_afp_05";
	$fdata["GoodName"] = "prev_afp_05";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","prev_afp_05"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "prev_afp_05"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prev_afp_05";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["prev_afp_05"] = $fdata;
//	prev_afp_ap_sol_0_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "prev_afp_ap_sol_0_5";
	$fdata["GoodName"] = "prev_afp_ap_sol_0_5";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","prev_afp_ap_sol_0_5"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "prev_afp_ap_sol_0_5"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prev_afp_ap_sol_0_5";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["prev_afp_ap_sol_0_5"] = $fdata;
//	prev_ans_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "prev_ans_1";
	$fdata["GoodName"] = "prev_ans_1";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","prev_ans_1"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "prev_ans_1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prev_ans_1";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["prev_ans_1"] = $fdata;
//	rc_iva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "rc_iva";
	$fdata["GoodName"] = "rc_iva";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","rc_iva"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rc_iva"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rc_iva";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["rc_iva"] = $fdata;
//	retenciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "retenciones";
	$fdata["GoodName"] = "retenciones";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","retenciones"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "retenciones"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "retenciones";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["retenciones"] = $fdata;
//	multa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "multa";
	$fdata["GoodName"] = "multa";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","multa"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "multa"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "multa";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["multa"] = $fdata;
//	total_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "total_desc";
	$fdata["GoodName"] = "total_desc";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","total_desc"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_desc"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_desc";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["total_desc"] = $fdata;
//	pre_natal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "pre_natal";
	$fdata["GoodName"] = "pre_natal";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","pre_natal"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pre_natal"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pre_natal";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["pre_natal"] = $fdata;
//	natalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "natalidad";
	$fdata["GoodName"] = "natalidad";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","natalidad"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "natalidad"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "natalidad";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["natalidad"] = $fdata;
//	lactancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "lactancia";
	$fdata["GoodName"] = "lactancia";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","lactancia"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "lactancia"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lactancia";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["lactancia"] = $fdata;
//	sepelio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "sepelio";
	$fdata["GoodName"] = "sepelio";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","sepelio"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sepelio"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sepelio";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["sepelio"] = $fdata;
//	seguro_pat_10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "seguro_pat_10";
	$fdata["GoodName"] = "seguro_pat_10";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","seguro_pat_10"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "seguro_pat_10"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seguro_pat_10";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["seguro_pat_10"] = $fdata;
//	riesgo_pat_171
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "riesgo_pat_171";
	$fdata["GoodName"] = "riesgo_pat_171";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","riesgo_pat_171"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "riesgo_pat_171"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "riesgo_pat_171";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["riesgo_pat_171"] = $fdata;
//	pro_vivienda_pat_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "pro_vivienda_pat_2";
	$fdata["GoodName"] = "pro_vivienda_pat_2";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","pro_vivienda_pat_2"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pro_vivienda_pat_2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pro_vivienda_pat_2";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["pro_vivienda_pat_2"] = $fdata;
//	ap_pat_sol_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "ap_pat_sol_3";
	$fdata["GoodName"] = "ap_pat_sol_3";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","ap_pat_sol_3"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ap_pat_sol_3"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ap_pat_sol_3";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["ap_pat_sol_3"] = $fdata;
//	mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "mes";
	$fdata["GoodName"] = "mes";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","mes"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
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
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["mes"] = $fdata;
//	gestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "gestion";
	$fdata["GoodName"] = "gestion";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","gestion"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
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
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["gestion"] = $fdata;
//	liquido_pagable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "liquido_pagable";
	$fdata["GoodName"] = "liquido_pagable";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","liquido_pagable"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "liquido_pagable"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "liquido_pagable";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["liquido_pagable"] = $fdata;
//	cod_afp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "cod_afp";
	$fdata["GoodName"] = "cod_afp";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","cod_afp"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cod_afp"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cod_afp";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["cod_afp"] = $fdata;
//	cta_banco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "cta_banco";
	$fdata["GoodName"] = "cta_banco";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","cta_banco"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cta_banco"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cta_banco";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["cta_banco"] = $fdata;
//	tipo_funcionario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "tipo_funcionario";
	$fdata["GoodName"] = "tipo_funcionario";
	$fdata["ownerTable"] = "t_planilla_h";
	$fdata["Label"] = GetFieldLabel("t_planilla_h","tipo_funcionario"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "tipo_funcionario"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_funcionario";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatat_planilla_h["tipo_funcionario"] = $fdata;

	
$tables_data["t_planilla_h"]=&$tdatat_planilla_h;
$field_labels["t_planilla_h"] = &$fieldLabelst_planilla_h;
$fieldToolTips["t_planilla_h"] = &$fieldToolTipst_planilla_h;
$page_titles["t_planilla_h"] = &$pageTitlest_planilla_h;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_planilla_h"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_planilla_h"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_planilla_h()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_func,  	fecha_nac,  	sexo,  	item_contrato,  	unidad,  	cargo,  	paterno,  	materno,  	nombres,  	ci,  	exp,  	nit,  	fec_ingreso,  	baja,  	reasig,  	haber_basico,  	dias_trab,  	haber_percibido,  	reint,  	bono_ant,  	total_ganado,  	devoluciones,  	asig_familiar,  	futuro_afp_10,  	futuro_afp_riesgo_1_71,  	futuro_afp_05,  	futuro_afp_ap_sol_0_5,  	futuro_ans_1,  	prev_afp_10,  	prev_afp_riesgo_1_71,  	prev_afp_05,  	prev_afp_ap_sol_0_5,  	prev_ans_1,  	rc_iva,  	retenciones,  	multa,  	total_desc,  	pre_natal,  	natalidad,  	lactancia,  	sepelio,  	seguro_pat_10,  	riesgo_pat_171,  	pro_vivienda_pat_2,  	ap_pat_sol_3,  	mes,  	gestion,  	liquido_pagable,  	cod_afp,  	cta_banco,  	tipo_funcionario";
$proto0["m_strFrom"] = "FROM t_planilla_h";
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
	"m_strName" => "id_func",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto5["m_sql"] = "id_func";
$proto5["m_srcTableName"] = "t_planilla_h";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_nac",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto7["m_sql"] = "fecha_nac";
$proto7["m_srcTableName"] = "t_planilla_h";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto9["m_sql"] = "sexo";
$proto9["m_srcTableName"] = "t_planilla_h";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "item_contrato",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto11["m_sql"] = "item_contrato";
$proto11["m_srcTableName"] = "t_planilla_h";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "unidad",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto13["m_sql"] = "unidad";
$proto13["m_srcTableName"] = "t_planilla_h";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto15["m_sql"] = "cargo";
$proto15["m_srcTableName"] = "t_planilla_h";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "paterno",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto17["m_sql"] = "paterno";
$proto17["m_srcTableName"] = "t_planilla_h";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "materno",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto19["m_sql"] = "materno";
$proto19["m_srcTableName"] = "t_planilla_h";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto21["m_sql"] = "nombres";
$proto21["m_srcTableName"] = "t_planilla_h";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "ci",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto23["m_sql"] = "ci";
$proto23["m_srcTableName"] = "t_planilla_h";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "exp",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto25["m_sql"] = "exp";
$proto25["m_srcTableName"] = "t_planilla_h";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "nit",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto27["m_sql"] = "nit";
$proto27["m_srcTableName"] = "t_planilla_h";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "fec_ingreso",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto29["m_sql"] = "fec_ingreso";
$proto29["m_srcTableName"] = "t_planilla_h";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "baja",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto31["m_sql"] = "baja";
$proto31["m_srcTableName"] = "t_planilla_h";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "reasig",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto33["m_sql"] = "reasig";
$proto33["m_srcTableName"] = "t_planilla_h";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "haber_basico",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto35["m_sql"] = "haber_basico";
$proto35["m_srcTableName"] = "t_planilla_h";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "dias_trab",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto37["m_sql"] = "dias_trab";
$proto37["m_srcTableName"] = "t_planilla_h";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "haber_percibido",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto39["m_sql"] = "haber_percibido";
$proto39["m_srcTableName"] = "t_planilla_h";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "reint",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto41["m_sql"] = "reint";
$proto41["m_srcTableName"] = "t_planilla_h";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "bono_ant",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto43["m_sql"] = "bono_ant";
$proto43["m_srcTableName"] = "t_planilla_h";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "total_ganado",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto45["m_sql"] = "total_ganado";
$proto45["m_srcTableName"] = "t_planilla_h";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "devoluciones",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto47["m_sql"] = "devoluciones";
$proto47["m_srcTableName"] = "t_planilla_h";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "asig_familiar",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto49["m_sql"] = "asig_familiar";
$proto49["m_srcTableName"] = "t_planilla_h";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "futuro_afp_10",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto51["m_sql"] = "futuro_afp_10";
$proto51["m_srcTableName"] = "t_planilla_h";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "futuro_afp_riesgo_1_71",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto53["m_sql"] = "futuro_afp_riesgo_1_71";
$proto53["m_srcTableName"] = "t_planilla_h";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "futuro_afp_05",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto55["m_sql"] = "futuro_afp_05";
$proto55["m_srcTableName"] = "t_planilla_h";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "futuro_afp_ap_sol_0_5",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto57["m_sql"] = "futuro_afp_ap_sol_0_5";
$proto57["m_srcTableName"] = "t_planilla_h";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "futuro_ans_1",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto59["m_sql"] = "futuro_ans_1";
$proto59["m_srcTableName"] = "t_planilla_h";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "prev_afp_10",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto61["m_sql"] = "prev_afp_10";
$proto61["m_srcTableName"] = "t_planilla_h";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "prev_afp_riesgo_1_71",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto63["m_sql"] = "prev_afp_riesgo_1_71";
$proto63["m_srcTableName"] = "t_planilla_h";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "prev_afp_05",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto65["m_sql"] = "prev_afp_05";
$proto65["m_srcTableName"] = "t_planilla_h";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "prev_afp_ap_sol_0_5",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto67["m_sql"] = "prev_afp_ap_sol_0_5";
$proto67["m_srcTableName"] = "t_planilla_h";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "prev_ans_1",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto69["m_sql"] = "prev_ans_1";
$proto69["m_srcTableName"] = "t_planilla_h";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "rc_iva",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto71["m_sql"] = "rc_iva";
$proto71["m_srcTableName"] = "t_planilla_h";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "retenciones",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto73["m_sql"] = "retenciones";
$proto73["m_srcTableName"] = "t_planilla_h";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "multa",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto75["m_sql"] = "multa";
$proto75["m_srcTableName"] = "t_planilla_h";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "total_desc",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto77["m_sql"] = "total_desc";
$proto77["m_srcTableName"] = "t_planilla_h";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "pre_natal",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto79["m_sql"] = "pre_natal";
$proto79["m_srcTableName"] = "t_planilla_h";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "natalidad",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto81["m_sql"] = "natalidad";
$proto81["m_srcTableName"] = "t_planilla_h";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "lactancia",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto83["m_sql"] = "lactancia";
$proto83["m_srcTableName"] = "t_planilla_h";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "sepelio",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto85["m_sql"] = "sepelio";
$proto85["m_srcTableName"] = "t_planilla_h";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "seguro_pat_10",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto87["m_sql"] = "seguro_pat_10";
$proto87["m_srcTableName"] = "t_planilla_h";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "riesgo_pat_171",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto89["m_sql"] = "riesgo_pat_171";
$proto89["m_srcTableName"] = "t_planilla_h";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "pro_vivienda_pat_2",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto91["m_sql"] = "pro_vivienda_pat_2";
$proto91["m_srcTableName"] = "t_planilla_h";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "ap_pat_sol_3",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto93["m_sql"] = "ap_pat_sol_3";
$proto93["m_srcTableName"] = "t_planilla_h";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLField(array(
	"m_strName" => "mes",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto95["m_sql"] = "mes";
$proto95["m_srcTableName"] = "t_planilla_h";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "gestion",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto97["m_sql"] = "gestion";
$proto97["m_srcTableName"] = "t_planilla_h";
$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLField(array(
	"m_strName" => "liquido_pagable",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto99["m_sql"] = "liquido_pagable";
$proto99["m_srcTableName"] = "t_planilla_h";
$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "";
$obj = new SQLFieldListItem($proto99);

$proto0["m_fieldlist"][]=$obj;
						$proto101=array();
			$obj = new SQLField(array(
	"m_strName" => "cod_afp",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto101["m_sql"] = "cod_afp";
$proto101["m_srcTableName"] = "t_planilla_h";
$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto0["m_fieldlist"][]=$obj;
						$proto103=array();
			$obj = new SQLField(array(
	"m_strName" => "cta_banco",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto103["m_sql"] = "cta_banco";
$proto103["m_srcTableName"] = "t_planilla_h";
$proto103["m_expr"]=$obj;
$proto103["m_alias"] = "";
$obj = new SQLFieldListItem($proto103);

$proto0["m_fieldlist"][]=$obj;
						$proto105=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_funcionario",
	"m_strTable" => "t_planilla_h",
	"m_srcTableName" => "t_planilla_h"
));

$proto105["m_sql"] = "tipo_funcionario";
$proto105["m_srcTableName"] = "t_planilla_h";
$proto105["m_expr"]=$obj;
$proto105["m_alias"] = "";
$obj = new SQLFieldListItem($proto105);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto107=array();
$proto107["m_link"] = "SQLL_MAIN";
			$proto108=array();
$proto108["m_strName"] = "t_planilla_h";
$proto108["m_srcTableName"] = "t_planilla_h";
$proto108["m_columns"] = array();
$proto108["m_columns"][] = "id_func";
$proto108["m_columns"][] = "fecha_nac";
$proto108["m_columns"][] = "sexo";
$proto108["m_columns"][] = "item_contrato";
$proto108["m_columns"][] = "unidad";
$proto108["m_columns"][] = "cargo";
$proto108["m_columns"][] = "paterno";
$proto108["m_columns"][] = "materno";
$proto108["m_columns"][] = "nombres";
$proto108["m_columns"][] = "ci";
$proto108["m_columns"][] = "exp";
$proto108["m_columns"][] = "nit";
$proto108["m_columns"][] = "fec_ingreso";
$proto108["m_columns"][] = "baja";
$proto108["m_columns"][] = "reasig";
$proto108["m_columns"][] = "haber_basico";
$proto108["m_columns"][] = "dias_trab";
$proto108["m_columns"][] = "haber_percibido";
$proto108["m_columns"][] = "reint";
$proto108["m_columns"][] = "bono_ant";
$proto108["m_columns"][] = "total_ganado";
$proto108["m_columns"][] = "devoluciones";
$proto108["m_columns"][] = "asig_familiar";
$proto108["m_columns"][] = "futuro_afp_10";
$proto108["m_columns"][] = "futuro_afp_riesgo_1_71";
$proto108["m_columns"][] = "futuro_afp_05";
$proto108["m_columns"][] = "futuro_afp_ap_sol_0_5";
$proto108["m_columns"][] = "futuro_ans_1";
$proto108["m_columns"][] = "prev_afp_10";
$proto108["m_columns"][] = "prev_afp_riesgo_1_71";
$proto108["m_columns"][] = "prev_afp_05";
$proto108["m_columns"][] = "prev_afp_ap_sol_0_5";
$proto108["m_columns"][] = "prev_ans_1";
$proto108["m_columns"][] = "rc_iva";
$proto108["m_columns"][] = "retenciones";
$proto108["m_columns"][] = "multa";
$proto108["m_columns"][] = "total_desc";
$proto108["m_columns"][] = "pre_natal";
$proto108["m_columns"][] = "natalidad";
$proto108["m_columns"][] = "lactancia";
$proto108["m_columns"][] = "sepelio";
$proto108["m_columns"][] = "seguro_pat_10";
$proto108["m_columns"][] = "riesgo_pat_171";
$proto108["m_columns"][] = "pro_vivienda_pat_2";
$proto108["m_columns"][] = "ap_pat_sol_3";
$proto108["m_columns"][] = "mes";
$proto108["m_columns"][] = "gestion";
$proto108["m_columns"][] = "liquido_pagable";
$proto108["m_columns"][] = "cod_afp";
$proto108["m_columns"][] = "cta_banco";
$proto108["m_columns"][] = "tipo_funcionario";
$obj = new SQLTable($proto108);

$proto107["m_table"] = $obj;
$proto107["m_sql"] = "t_planilla_h";
$proto107["m_alias"] = "";
$proto107["m_srcTableName"] = "t_planilla_h";
$proto109=array();
$proto109["m_sql"] = "";
$proto109["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto109["m_column"]=$obj;
$proto109["m_contained"] = array();
$proto109["m_strCase"] = "";
$proto109["m_havingmode"] = false;
$proto109["m_inBrackets"] = false;
$proto109["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto109);

$proto107["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto107);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_planilla_h";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_planilla_h = createSqlQuery_t_planilla_h();


	
																																																			
	
$tdatat_planilla_h[".sqlquery"] = $queryData_t_planilla_h;

$tableEvents["t_planilla_h"] = new eventsBase;
$tdatat_planilla_h[".hasEvents"] = false;

?>