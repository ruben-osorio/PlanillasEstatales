<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_planilla_c_mayores = array();	
	$tdatat_planilla_c_mayores[".truncateText"] = true;
	$tdatat_planilla_c_mayores[".NumberOfChars"] = 80; 
	$tdatat_planilla_c_mayores[".ShortName"] = "t_planilla_c_mayores";
	$tdatat_planilla_c_mayores[".OwnerID"] = "";
	$tdatat_planilla_c_mayores[".OriginalTable"] = "t_planilla_c_mayores";

//	field labels
$fieldLabelst_planilla_c_mayores = array();
$fieldToolTipst_planilla_c_mayores = array();
$pageTitlest_planilla_c_mayores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_planilla_c_mayores["Spanish"] = array();
	$fieldToolTipst_planilla_c_mayores["Spanish"] = array();
	$pageTitlest_planilla_c_mayores["Spanish"] = array();
	$fieldLabelst_planilla_c_mayores["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["id_func"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["fecha_nac"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["sexo"] = "Sexo";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["sexo"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["item_contrato"] = "Item Contrato";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["item_contrato"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["unidad"] = "Unidad";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["unidad"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["cargo"] = "Cargo";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["cargo"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["paterno"] = "Paterno";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["paterno"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["materno"] = "Materno";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["materno"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["nombres"] = "Nombres";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["nombres"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["ci"] = "Ci";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["ci"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["exp"] = "Exp";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["exp"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["nit"] = "Nit";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["nit"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["fec_ingreso"] = "Fec Ingreso";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["fec_ingreso"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["baja"] = "Baja";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["baja"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["reasig"] = "Reasig";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["reasig"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["haber_basico"] = "Haber Basico";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["haber_basico"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["dias_trab"] = "Dias Trab";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["dias_trab"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["haber_percibido"] = "Haber Percibido";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["haber_percibido"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["reint"] = "Reint";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["reint"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["bono_ant"] = "Bono Ant";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["bono_ant"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["total_ganado"] = "Total Ganado";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["total_ganado"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["devoluciones"] = "Devoluciones";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["devoluciones"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["asig_familiar"] = "Asig Familiar";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["asig_familiar"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["futuro_afp_10"] = "Futuro Afp 10";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["futuro_afp_10"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["futuro_afp_riesgo_1_71"] = "Futuro Afp Riesgo 1 71";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["futuro_afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["futuro_afp_05"] = "Futuro Afp 05";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["futuro_afp_05"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["futuro_afp_ap_sol_0_5"] = "Futuro Afp Ap Sol 0 5";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["futuro_afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["futuro_ans_1"] = "Futuro Ans 1";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["futuro_ans_1"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["prev_afp_10"] = "Prev Afp 10";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["prev_afp_10"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["prev_afp_riesgo_1_71"] = "Prev Afp Riesgo 1 71";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["prev_afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["prev_afp_05"] = "Prev Afp 05";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["prev_afp_05"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["prev_afp_ap_sol_0_5"] = "Prev Afp Ap Sol 0 5";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["prev_afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["prev_ans_1"] = "Prev Ans 1";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["prev_ans_1"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["rc_iva"] = "Rc Iva";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["rc_iva"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["retenciones"] = "Retenciones";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["retenciones"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["multa"] = "Multa";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["multa"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["total_desc"] = "Total Desc";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["total_desc"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["pre_natal"] = "Pre Natal";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["pre_natal"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["natalidad"] = "Natalidad";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["natalidad"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["lactancia"] = "Lactancia";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["lactancia"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["sepelio"] = "Sepelio";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["sepelio"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["seguro_pat_10"] = "Seguro Pat 10";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["seguro_pat_10"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["riesgo_pat_171"] = "Riesgo Pat 171";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["riesgo_pat_171"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["pro_vivienda_pat_2"] = "Pro Vivienda Pat 2";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["pro_vivienda_pat_2"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["ap_pat_sol_3"] = "Ap Pat Sol 3";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["ap_pat_sol_3"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["mes"] = "Mes";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["mes"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["gestion"] = "Gestion";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["gestion"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["liquido_pagable"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["cod_afp"] = "Cod Afp";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["cod_afp"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["cta_banco"] = "Cta Banco";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["cta_banco"] = "";
	$fieldLabelst_planilla_c_mayores["Spanish"]["tipo_funcionario"] = "Tipo Funcionario";
	$fieldToolTipst_planilla_c_mayores["Spanish"]["tipo_funcionario"] = "";
	if (count($fieldToolTipst_planilla_c_mayores["Spanish"]))
		$tdatat_planilla_c_mayores[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_planilla_c_mayores[""] = array();
	$fieldToolTipst_planilla_c_mayores[""] = array();
	$pageTitlest_planilla_c_mayores[""] = array();
	$fieldLabelst_planilla_c_mayores[""]["id_func"] = "Id Func";
	$fieldToolTipst_planilla_c_mayores[""]["id_func"] = "";
	$fieldLabelst_planilla_c_mayores[""]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipst_planilla_c_mayores[""]["fecha_nac"] = "";
	$fieldLabelst_planilla_c_mayores[""]["sexo"] = "Sexo";
	$fieldToolTipst_planilla_c_mayores[""]["sexo"] = "";
	$fieldLabelst_planilla_c_mayores[""]["item_contrato"] = "Item Contrato";
	$fieldToolTipst_planilla_c_mayores[""]["item_contrato"] = "";
	$fieldLabelst_planilla_c_mayores[""]["unidad"] = "Unidad";
	$fieldToolTipst_planilla_c_mayores[""]["unidad"] = "";
	$fieldLabelst_planilla_c_mayores[""]["cargo"] = "Cargo";
	$fieldToolTipst_planilla_c_mayores[""]["cargo"] = "";
	$fieldLabelst_planilla_c_mayores[""]["paterno"] = "Paterno";
	$fieldToolTipst_planilla_c_mayores[""]["paterno"] = "";
	$fieldLabelst_planilla_c_mayores[""]["materno"] = "Materno";
	$fieldToolTipst_planilla_c_mayores[""]["materno"] = "";
	$fieldLabelst_planilla_c_mayores[""]["nombres"] = "Nombres";
	$fieldToolTipst_planilla_c_mayores[""]["nombres"] = "";
	$fieldLabelst_planilla_c_mayores[""]["ci"] = "Ci";
	$fieldToolTipst_planilla_c_mayores[""]["ci"] = "";
	$fieldLabelst_planilla_c_mayores[""]["exp"] = "Exp";
	$fieldToolTipst_planilla_c_mayores[""]["exp"] = "";
	$fieldLabelst_planilla_c_mayores[""]["nit"] = "Nit";
	$fieldToolTipst_planilla_c_mayores[""]["nit"] = "";
	$fieldLabelst_planilla_c_mayores[""]["fec_ingreso"] = "Fec Ingreso";
	$fieldToolTipst_planilla_c_mayores[""]["fec_ingreso"] = "";
	$fieldLabelst_planilla_c_mayores[""]["baja"] = "Baja";
	$fieldToolTipst_planilla_c_mayores[""]["baja"] = "";
	$fieldLabelst_planilla_c_mayores[""]["reasig"] = "Reasig";
	$fieldToolTipst_planilla_c_mayores[""]["reasig"] = "";
	$fieldLabelst_planilla_c_mayores[""]["haber_basico"] = "Haber Basico";
	$fieldToolTipst_planilla_c_mayores[""]["haber_basico"] = "";
	$fieldLabelst_planilla_c_mayores[""]["dias_trab"] = "Dias Trab";
	$fieldToolTipst_planilla_c_mayores[""]["dias_trab"] = "";
	$fieldLabelst_planilla_c_mayores[""]["haber_percibido"] = "Haber Percibido";
	$fieldToolTipst_planilla_c_mayores[""]["haber_percibido"] = "";
	$fieldLabelst_planilla_c_mayores[""]["reint"] = "Reint";
	$fieldToolTipst_planilla_c_mayores[""]["reint"] = "";
	$fieldLabelst_planilla_c_mayores[""]["bono_ant"] = "Bono Ant";
	$fieldToolTipst_planilla_c_mayores[""]["bono_ant"] = "";
	$fieldLabelst_planilla_c_mayores[""]["total_ganado"] = "Total Ganado";
	$fieldToolTipst_planilla_c_mayores[""]["total_ganado"] = "";
	$fieldLabelst_planilla_c_mayores[""]["devoluciones"] = "Devoluciones";
	$fieldToolTipst_planilla_c_mayores[""]["devoluciones"] = "";
	$fieldLabelst_planilla_c_mayores[""]["asig_familiar"] = "Asig Familiar";
	$fieldToolTipst_planilla_c_mayores[""]["asig_familiar"] = "";
	$fieldLabelst_planilla_c_mayores[""]["futuro_afp_10"] = "Futuro Afp 10";
	$fieldToolTipst_planilla_c_mayores[""]["futuro_afp_10"] = "";
	$fieldLabelst_planilla_c_mayores[""]["futuro_afp_riesgo_1_71"] = "Futuro Afp Riesgo 1 71";
	$fieldToolTipst_planilla_c_mayores[""]["futuro_afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla_c_mayores[""]["futuro_afp_05"] = "Futuro Afp 05";
	$fieldToolTipst_planilla_c_mayores[""]["futuro_afp_05"] = "";
	$fieldLabelst_planilla_c_mayores[""]["futuro_afp_ap_sol_0_5"] = "Futuro Afp Ap Sol 0 5";
	$fieldToolTipst_planilla_c_mayores[""]["futuro_afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla_c_mayores[""]["futuro_ans_1"] = "Futuro Ans 1";
	$fieldToolTipst_planilla_c_mayores[""]["futuro_ans_1"] = "";
	$fieldLabelst_planilla_c_mayores[""]["prev_afp_10"] = "Prev Afp 10";
	$fieldToolTipst_planilla_c_mayores[""]["prev_afp_10"] = "";
	$fieldLabelst_planilla_c_mayores[""]["prev_afp_riesgo_1_71"] = "Prev Afp Riesgo 1 71";
	$fieldToolTipst_planilla_c_mayores[""]["prev_afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla_c_mayores[""]["prev_afp_05"] = "Prev Afp 05";
	$fieldToolTipst_planilla_c_mayores[""]["prev_afp_05"] = "";
	$fieldLabelst_planilla_c_mayores[""]["prev_afp_ap_sol_0_5"] = "Prev Afp Ap Sol 0 5";
	$fieldToolTipst_planilla_c_mayores[""]["prev_afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla_c_mayores[""]["prev_ans_1"] = "Prev Ans 1";
	$fieldToolTipst_planilla_c_mayores[""]["prev_ans_1"] = "";
	$fieldLabelst_planilla_c_mayores[""]["rc_iva"] = "Rc Iva";
	$fieldToolTipst_planilla_c_mayores[""]["rc_iva"] = "";
	$fieldLabelst_planilla_c_mayores[""]["retenciones"] = "Retenciones";
	$fieldToolTipst_planilla_c_mayores[""]["retenciones"] = "";
	$fieldLabelst_planilla_c_mayores[""]["multa"] = "Multa";
	$fieldToolTipst_planilla_c_mayores[""]["multa"] = "";
	$fieldLabelst_planilla_c_mayores[""]["total_desc"] = "Total Desc";
	$fieldToolTipst_planilla_c_mayores[""]["total_desc"] = "";
	$fieldLabelst_planilla_c_mayores[""]["pre_natal"] = "Pre Natal";
	$fieldToolTipst_planilla_c_mayores[""]["pre_natal"] = "";
	$fieldLabelst_planilla_c_mayores[""]["natalidad"] = "Natalidad";
	$fieldToolTipst_planilla_c_mayores[""]["natalidad"] = "";
	$fieldLabelst_planilla_c_mayores[""]["lactancia"] = "Lactancia";
	$fieldToolTipst_planilla_c_mayores[""]["lactancia"] = "";
	$fieldLabelst_planilla_c_mayores[""]["sepelio"] = "Sepelio";
	$fieldToolTipst_planilla_c_mayores[""]["sepelio"] = "";
	$fieldLabelst_planilla_c_mayores[""]["seguro_pat_10"] = "Seguro Pat 10";
	$fieldToolTipst_planilla_c_mayores[""]["seguro_pat_10"] = "";
	$fieldLabelst_planilla_c_mayores[""]["riesgo_pat_171"] = "Riesgo Pat 171";
	$fieldToolTipst_planilla_c_mayores[""]["riesgo_pat_171"] = "";
	$fieldLabelst_planilla_c_mayores[""]["pro_vivienda_pat_2"] = "Pro Vivienda Pat 2";
	$fieldToolTipst_planilla_c_mayores[""]["pro_vivienda_pat_2"] = "";
	$fieldLabelst_planilla_c_mayores[""]["ap_pat_sol_3"] = "Ap Pat Sol 3";
	$fieldToolTipst_planilla_c_mayores[""]["ap_pat_sol_3"] = "";
	$fieldLabelst_planilla_c_mayores[""]["mes"] = "Mes";
	$fieldToolTipst_planilla_c_mayores[""]["mes"] = "";
	$fieldLabelst_planilla_c_mayores[""]["gestion"] = "Gestion";
	$fieldToolTipst_planilla_c_mayores[""]["gestion"] = "";
	$fieldLabelst_planilla_c_mayores[""]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipst_planilla_c_mayores[""]["liquido_pagable"] = "";
	$fieldLabelst_planilla_c_mayores[""]["cod_afp"] = "Cod Afp";
	$fieldToolTipst_planilla_c_mayores[""]["cod_afp"] = "";
	$fieldLabelst_planilla_c_mayores[""]["cta_banco"] = "Cta Banco";
	$fieldToolTipst_planilla_c_mayores[""]["cta_banco"] = "";
	$fieldLabelst_planilla_c_mayores[""]["tipo_funcionario"] = "Tipo Funcionario";
	$fieldToolTipst_planilla_c_mayores[""]["tipo_funcionario"] = "";
	if (count($fieldToolTipst_planilla_c_mayores[""]))
		$tdatat_planilla_c_mayores[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_planilla_c_mayores["English"] = array();
	$fieldToolTipst_planilla_c_mayores["English"] = array();
	$pageTitlest_planilla_c_mayores["English"] = array();
	$fieldLabelst_planilla_c_mayores["English"]["id_func"] = "Id Func";
	$fieldToolTipst_planilla_c_mayores["English"]["id_func"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipst_planilla_c_mayores["English"]["fecha_nac"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["sexo"] = "Sexo";
	$fieldToolTipst_planilla_c_mayores["English"]["sexo"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["item_contrato"] = "Item Contrato";
	$fieldToolTipst_planilla_c_mayores["English"]["item_contrato"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["unidad"] = "Unidad";
	$fieldToolTipst_planilla_c_mayores["English"]["unidad"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["cargo"] = "Cargo";
	$fieldToolTipst_planilla_c_mayores["English"]["cargo"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["paterno"] = "Paterno";
	$fieldToolTipst_planilla_c_mayores["English"]["paterno"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["materno"] = "Materno";
	$fieldToolTipst_planilla_c_mayores["English"]["materno"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["nombres"] = "Nombres";
	$fieldToolTipst_planilla_c_mayores["English"]["nombres"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["ci"] = "Ci";
	$fieldToolTipst_planilla_c_mayores["English"]["ci"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["exp"] = "Exp";
	$fieldToolTipst_planilla_c_mayores["English"]["exp"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["nit"] = "Nit";
	$fieldToolTipst_planilla_c_mayores["English"]["nit"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["fec_ingreso"] = "Fec Ingreso";
	$fieldToolTipst_planilla_c_mayores["English"]["fec_ingreso"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["baja"] = "Baja";
	$fieldToolTipst_planilla_c_mayores["English"]["baja"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["reasig"] = "Reasig";
	$fieldToolTipst_planilla_c_mayores["English"]["reasig"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["haber_basico"] = "Haber Basico";
	$fieldToolTipst_planilla_c_mayores["English"]["haber_basico"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["dias_trab"] = "Dias Trab";
	$fieldToolTipst_planilla_c_mayores["English"]["dias_trab"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["haber_percibido"] = "Haber Percibido";
	$fieldToolTipst_planilla_c_mayores["English"]["haber_percibido"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["reint"] = "Reint";
	$fieldToolTipst_planilla_c_mayores["English"]["reint"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["bono_ant"] = "Bono Ant";
	$fieldToolTipst_planilla_c_mayores["English"]["bono_ant"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["total_ganado"] = "Total Ganado";
	$fieldToolTipst_planilla_c_mayores["English"]["total_ganado"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["devoluciones"] = "Devoluciones";
	$fieldToolTipst_planilla_c_mayores["English"]["devoluciones"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["asig_familiar"] = "Asig Familiar";
	$fieldToolTipst_planilla_c_mayores["English"]["asig_familiar"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["futuro_afp_10"] = "Futuro Afp 10";
	$fieldToolTipst_planilla_c_mayores["English"]["futuro_afp_10"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["futuro_afp_riesgo_1_71"] = "Futuro Afp Riesgo 1 71";
	$fieldToolTipst_planilla_c_mayores["English"]["futuro_afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["futuro_afp_05"] = "Futuro Afp 05";
	$fieldToolTipst_planilla_c_mayores["English"]["futuro_afp_05"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["futuro_afp_ap_sol_0_5"] = "Futuro Afp Ap Sol 0 5";
	$fieldToolTipst_planilla_c_mayores["English"]["futuro_afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["futuro_ans_1"] = "Futuro Ans 1";
	$fieldToolTipst_planilla_c_mayores["English"]["futuro_ans_1"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["prev_afp_10"] = "Prev Afp 10";
	$fieldToolTipst_planilla_c_mayores["English"]["prev_afp_10"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["prev_afp_riesgo_1_71"] = "Prev Afp Riesgo 1 71";
	$fieldToolTipst_planilla_c_mayores["English"]["prev_afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["prev_afp_05"] = "Prev Afp 05";
	$fieldToolTipst_planilla_c_mayores["English"]["prev_afp_05"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["prev_afp_ap_sol_0_5"] = "Prev Afp Ap Sol 0 5";
	$fieldToolTipst_planilla_c_mayores["English"]["prev_afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["prev_ans_1"] = "Prev Ans 1";
	$fieldToolTipst_planilla_c_mayores["English"]["prev_ans_1"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["rc_iva"] = "Rc Iva";
	$fieldToolTipst_planilla_c_mayores["English"]["rc_iva"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["retenciones"] = "Retenciones";
	$fieldToolTipst_planilla_c_mayores["English"]["retenciones"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["multa"] = "Multa";
	$fieldToolTipst_planilla_c_mayores["English"]["multa"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["total_desc"] = "Total Desc";
	$fieldToolTipst_planilla_c_mayores["English"]["total_desc"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["pre_natal"] = "Pre Natal";
	$fieldToolTipst_planilla_c_mayores["English"]["pre_natal"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["natalidad"] = "Natalidad";
	$fieldToolTipst_planilla_c_mayores["English"]["natalidad"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["lactancia"] = "Lactancia";
	$fieldToolTipst_planilla_c_mayores["English"]["lactancia"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["sepelio"] = "Sepelio";
	$fieldToolTipst_planilla_c_mayores["English"]["sepelio"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["seguro_pat_10"] = "Seguro Pat 10";
	$fieldToolTipst_planilla_c_mayores["English"]["seguro_pat_10"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["riesgo_pat_171"] = "Riesgo Pat 171";
	$fieldToolTipst_planilla_c_mayores["English"]["riesgo_pat_171"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["pro_vivienda_pat_2"] = "Pro Vivienda Pat 2";
	$fieldToolTipst_planilla_c_mayores["English"]["pro_vivienda_pat_2"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["ap_pat_sol_3"] = "Ap Pat Sol 3";
	$fieldToolTipst_planilla_c_mayores["English"]["ap_pat_sol_3"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["mes"] = "Mes";
	$fieldToolTipst_planilla_c_mayores["English"]["mes"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["gestion"] = "Gestion";
	$fieldToolTipst_planilla_c_mayores["English"]["gestion"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipst_planilla_c_mayores["English"]["liquido_pagable"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["cod_afp"] = "Cod Afp";
	$fieldToolTipst_planilla_c_mayores["English"]["cod_afp"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["cta_banco"] = "Cta Banco";
	$fieldToolTipst_planilla_c_mayores["English"]["cta_banco"] = "";
	$fieldLabelst_planilla_c_mayores["English"]["tipo_funcionario"] = "Tipo Funcionario";
	$fieldToolTipst_planilla_c_mayores["English"]["tipo_funcionario"] = "";
	if (count($fieldToolTipst_planilla_c_mayores["English"]))
		$tdatat_planilla_c_mayores[".isUseToolTips"] = true;
}
	
	
	$tdatat_planilla_c_mayores[".NCSearch"] = true;



$tdatat_planilla_c_mayores[".shortTableName"] = "t_planilla_c_mayores";
$tdatat_planilla_c_mayores[".nSecOptions"] = 0;
$tdatat_planilla_c_mayores[".recsPerRowList"] = 1;
$tdatat_planilla_c_mayores[".recsPerRowPrint"] = 1;
$tdatat_planilla_c_mayores[".mainTableOwnerID"] = "";
$tdatat_planilla_c_mayores[".moveNext"] = 1;
$tdatat_planilla_c_mayores[".entityType"] = 0;

$tdatat_planilla_c_mayores[".strOriginalTableName"] = "t_planilla_c_mayores";




$tdatat_planilla_c_mayores[".showAddInPopup"] = false;

$tdatat_planilla_c_mayores[".showEditInPopup"] = false;

$tdatat_planilla_c_mayores[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_planilla_c_mayores[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_planilla_c_mayores[".fieldsForRegister"] = array();

$tdatat_planilla_c_mayores[".listAjax"] = false;

	$tdatat_planilla_c_mayores[".audit"] = false;

	$tdatat_planilla_c_mayores[".locking"] = false;



$tdatat_planilla_c_mayores[".list"] = true;

$tdatat_planilla_c_mayores[".view"] = true;


$tdatat_planilla_c_mayores[".exportTo"] = true;

$tdatat_planilla_c_mayores[".printFriendly"] = true;


$tdatat_planilla_c_mayores[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_planilla_c_mayores[".searchSaving"] = false;
//

$tdatat_planilla_c_mayores[".showSearchPanel"] = true;
		$tdatat_planilla_c_mayores[".flexibleSearch"] = true;		

if (isMobile())
	$tdatat_planilla_c_mayores[".isUseAjaxSuggest"] = false;
else 
	$tdatat_planilla_c_mayores[".isUseAjaxSuggest"] = true;

$tdatat_planilla_c_mayores[".rowHighlite"] = true;



$tdatat_planilla_c_mayores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_planilla_c_mayores[".isUseTimeForSearch"] = false;





$tdatat_planilla_c_mayores[".allSearchFields"] = array();
$tdatat_planilla_c_mayores[".filterFields"] = array();
$tdatat_planilla_c_mayores[".requiredSearchFields"] = array();

$tdatat_planilla_c_mayores[".allSearchFields"][] = "id_func";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "fecha_nac";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "sexo";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "item_contrato";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "unidad";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "cargo";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "paterno";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "materno";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "nombres";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "ci";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "exp";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "nit";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "fec_ingreso";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "baja";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "reasig";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "haber_basico";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "dias_trab";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "haber_percibido";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "reint";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "bono_ant";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "total_ganado";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "devoluciones";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "asig_familiar";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "futuro_afp_10";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "futuro_afp_riesgo_1_71";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "futuro_afp_05";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "futuro_afp_ap_sol_0_5";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "futuro_ans_1";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "prev_afp_10";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "prev_afp_riesgo_1_71";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "prev_afp_05";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "prev_afp_ap_sol_0_5";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "prev_ans_1";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "rc_iva";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "retenciones";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "multa";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "total_desc";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "pre_natal";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "natalidad";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "lactancia";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "sepelio";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "seguro_pat_10";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "riesgo_pat_171";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "pro_vivienda_pat_2";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "ap_pat_sol_3";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "mes";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "gestion";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "liquido_pagable";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "cod_afp";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "cta_banco";
	$tdatat_planilla_c_mayores[".allSearchFields"][] = "tipo_funcionario";
	

$tdatat_planilla_c_mayores[".googleLikeFields"] = array();
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "id_func";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "fecha_nac";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "sexo";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "item_contrato";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "unidad";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "cargo";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "paterno";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "materno";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "nombres";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "ci";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "exp";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "nit";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "fec_ingreso";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "baja";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "reasig";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "haber_basico";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "dias_trab";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "haber_percibido";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "reint";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "bono_ant";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "total_ganado";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "devoluciones";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "asig_familiar";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "futuro_afp_10";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "futuro_afp_05";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "futuro_ans_1";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "prev_afp_10";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "prev_afp_05";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "prev_ans_1";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "rc_iva";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "retenciones";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "multa";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "total_desc";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "pre_natal";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "natalidad";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "lactancia";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "sepelio";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "seguro_pat_10";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "riesgo_pat_171";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "pro_vivienda_pat_2";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "ap_pat_sol_3";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "mes";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "gestion";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "liquido_pagable";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "cod_afp";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "cta_banco";
$tdatat_planilla_c_mayores[".googleLikeFields"][] = "tipo_funcionario";


$tdatat_planilla_c_mayores[".advSearchFields"] = array();
$tdatat_planilla_c_mayores[".advSearchFields"][] = "id_func";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "fecha_nac";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "sexo";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "item_contrato";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "unidad";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "cargo";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "paterno";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "materno";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "nombres";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "ci";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "exp";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "nit";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "fec_ingreso";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "baja";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "reasig";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "haber_basico";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "dias_trab";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "haber_percibido";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "reint";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "bono_ant";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "total_ganado";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "devoluciones";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "asig_familiar";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "futuro_afp_10";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "futuro_afp_05";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "futuro_ans_1";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "prev_afp_10";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "prev_afp_05";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "prev_ans_1";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "rc_iva";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "retenciones";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "multa";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "total_desc";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "pre_natal";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "natalidad";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "lactancia";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "sepelio";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "seguro_pat_10";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "riesgo_pat_171";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "pro_vivienda_pat_2";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "ap_pat_sol_3";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "mes";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "gestion";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "liquido_pagable";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "cod_afp";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "cta_banco";
$tdatat_planilla_c_mayores[".advSearchFields"][] = "tipo_funcionario";

$tdatat_planilla_c_mayores[".tableType"] = "list";

$tdatat_planilla_c_mayores[".printerPageOrientation"] = 0;
$tdatat_planilla_c_mayores[".nPrinterPageScale"] = 100;

$tdatat_planilla_c_mayores[".nPrinterSplitRecords"] = 40;

$tdatat_planilla_c_mayores[".nPrinterPDFSplitRecords"] = 40;



$tdatat_planilla_c_mayores[".geocodingEnabled"] = false;




	





// view page pdf
$tdatat_planilla_c_mayores[".isViewPagePDF"] = true;
$tdatat_planilla_c_mayores[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatat_planilla_c_mayores[".isPrinterPagePDF"] = true;
$tdatat_planilla_c_mayores[".nPrinterPagePDFScale"] = 100;


$tdatat_planilla_c_mayores[".pageSize"] = 20;

$tdatat_planilla_c_mayores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_planilla_c_mayores[".strOrderBy"] = $tstrOrderBy;

$tdatat_planilla_c_mayores[".orderindexes"] = array();

$tdatat_planilla_c_mayores[".sqlHead"] = "SELECT id_func,  	fecha_nac,  	sexo,  	item_contrato,  	unidad,  	cargo,  	paterno,  	materno,  	nombres,  	ci,  	exp,  	nit,  	fec_ingreso,  	baja,  	reasig,  	haber_basico,  	dias_trab,  	haber_percibido,  	reint,  	bono_ant,  	total_ganado,  	devoluciones,  	asig_familiar,  	futuro_afp_10,  	futuro_afp_riesgo_1_71,  	futuro_afp_05,  	futuro_afp_ap_sol_0_5,  	futuro_ans_1,  	prev_afp_10,  	prev_afp_riesgo_1_71,  	prev_afp_05,  	prev_afp_ap_sol_0_5,  	prev_ans_1,  	rc_iva,  	retenciones,  	multa,  	total_desc,  	pre_natal,  	natalidad,  	lactancia,  	sepelio,  	seguro_pat_10,  	riesgo_pat_171,  	pro_vivienda_pat_2,  	ap_pat_sol_3,  	mes,  	gestion,  	liquido_pagable,  	cod_afp,  	cta_banco,  	tipo_funcionario";
$tdatat_planilla_c_mayores[".sqlFrom"] = "FROM t_planilla_c_mayores";
$tdatat_planilla_c_mayores[".sqlWhereExpr"] = "";
$tdatat_planilla_c_mayores[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_planilla_c_mayores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_planilla_c_mayores[".arrGroupsPerPage"] = $arrGPP;

$tdatat_planilla_c_mayores[".highlightSearchResults"] = true;

$tableKeyst_planilla_c_mayores = array();
$tableKeyst_planilla_c_mayores[] = "id_func";
$tdatat_planilla_c_mayores[".Keys"] = $tableKeyst_planilla_c_mayores;

$tdatat_planilla_c_mayores[".listFields"] = array();
$tdatat_planilla_c_mayores[".listFields"][] = "id_func";
$tdatat_planilla_c_mayores[".listFields"][] = "fecha_nac";
$tdatat_planilla_c_mayores[".listFields"][] = "sexo";
$tdatat_planilla_c_mayores[".listFields"][] = "item_contrato";
$tdatat_planilla_c_mayores[".listFields"][] = "unidad";
$tdatat_planilla_c_mayores[".listFields"][] = "cargo";
$tdatat_planilla_c_mayores[".listFields"][] = "paterno";
$tdatat_planilla_c_mayores[".listFields"][] = "materno";
$tdatat_planilla_c_mayores[".listFields"][] = "nombres";
$tdatat_planilla_c_mayores[".listFields"][] = "ci";
$tdatat_planilla_c_mayores[".listFields"][] = "exp";
$tdatat_planilla_c_mayores[".listFields"][] = "nit";
$tdatat_planilla_c_mayores[".listFields"][] = "fec_ingreso";
$tdatat_planilla_c_mayores[".listFields"][] = "baja";
$tdatat_planilla_c_mayores[".listFields"][] = "reasig";
$tdatat_planilla_c_mayores[".listFields"][] = "haber_basico";
$tdatat_planilla_c_mayores[".listFields"][] = "dias_trab";
$tdatat_planilla_c_mayores[".listFields"][] = "haber_percibido";
$tdatat_planilla_c_mayores[".listFields"][] = "reint";
$tdatat_planilla_c_mayores[".listFields"][] = "bono_ant";
$tdatat_planilla_c_mayores[".listFields"][] = "total_ganado";
$tdatat_planilla_c_mayores[".listFields"][] = "devoluciones";
$tdatat_planilla_c_mayores[".listFields"][] = "asig_familiar";
$tdatat_planilla_c_mayores[".listFields"][] = "futuro_afp_10";
$tdatat_planilla_c_mayores[".listFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_c_mayores[".listFields"][] = "futuro_afp_05";
$tdatat_planilla_c_mayores[".listFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_c_mayores[".listFields"][] = "futuro_ans_1";
$tdatat_planilla_c_mayores[".listFields"][] = "prev_afp_10";
$tdatat_planilla_c_mayores[".listFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_c_mayores[".listFields"][] = "prev_afp_05";
$tdatat_planilla_c_mayores[".listFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_c_mayores[".listFields"][] = "prev_ans_1";
$tdatat_planilla_c_mayores[".listFields"][] = "rc_iva";
$tdatat_planilla_c_mayores[".listFields"][] = "retenciones";
$tdatat_planilla_c_mayores[".listFields"][] = "multa";
$tdatat_planilla_c_mayores[".listFields"][] = "total_desc";
$tdatat_planilla_c_mayores[".listFields"][] = "pre_natal";
$tdatat_planilla_c_mayores[".listFields"][] = "natalidad";
$tdatat_planilla_c_mayores[".listFields"][] = "lactancia";
$tdatat_planilla_c_mayores[".listFields"][] = "sepelio";
$tdatat_planilla_c_mayores[".listFields"][] = "seguro_pat_10";
$tdatat_planilla_c_mayores[".listFields"][] = "riesgo_pat_171";
$tdatat_planilla_c_mayores[".listFields"][] = "pro_vivienda_pat_2";
$tdatat_planilla_c_mayores[".listFields"][] = "ap_pat_sol_3";
$tdatat_planilla_c_mayores[".listFields"][] = "mes";
$tdatat_planilla_c_mayores[".listFields"][] = "gestion";
$tdatat_planilla_c_mayores[".listFields"][] = "liquido_pagable";
$tdatat_planilla_c_mayores[".listFields"][] = "cod_afp";
$tdatat_planilla_c_mayores[".listFields"][] = "cta_banco";
$tdatat_planilla_c_mayores[".listFields"][] = "tipo_funcionario";

$tdatat_planilla_c_mayores[".hideMobileList"] = array();


$tdatat_planilla_c_mayores[".viewFields"] = array();
$tdatat_planilla_c_mayores[".viewFields"][] = "id_func";
$tdatat_planilla_c_mayores[".viewFields"][] = "fecha_nac";
$tdatat_planilla_c_mayores[".viewFields"][] = "sexo";
$tdatat_planilla_c_mayores[".viewFields"][] = "item_contrato";
$tdatat_planilla_c_mayores[".viewFields"][] = "unidad";
$tdatat_planilla_c_mayores[".viewFields"][] = "cargo";
$tdatat_planilla_c_mayores[".viewFields"][] = "paterno";
$tdatat_planilla_c_mayores[".viewFields"][] = "materno";
$tdatat_planilla_c_mayores[".viewFields"][] = "nombres";
$tdatat_planilla_c_mayores[".viewFields"][] = "ci";
$tdatat_planilla_c_mayores[".viewFields"][] = "exp";
$tdatat_planilla_c_mayores[".viewFields"][] = "nit";
$tdatat_planilla_c_mayores[".viewFields"][] = "fec_ingreso";
$tdatat_planilla_c_mayores[".viewFields"][] = "baja";
$tdatat_planilla_c_mayores[".viewFields"][] = "reasig";
$tdatat_planilla_c_mayores[".viewFields"][] = "haber_basico";
$tdatat_planilla_c_mayores[".viewFields"][] = "dias_trab";
$tdatat_planilla_c_mayores[".viewFields"][] = "haber_percibido";
$tdatat_planilla_c_mayores[".viewFields"][] = "reint";
$tdatat_planilla_c_mayores[".viewFields"][] = "bono_ant";
$tdatat_planilla_c_mayores[".viewFields"][] = "total_ganado";
$tdatat_planilla_c_mayores[".viewFields"][] = "devoluciones";
$tdatat_planilla_c_mayores[".viewFields"][] = "asig_familiar";
$tdatat_planilla_c_mayores[".viewFields"][] = "futuro_afp_10";
$tdatat_planilla_c_mayores[".viewFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_c_mayores[".viewFields"][] = "futuro_afp_05";
$tdatat_planilla_c_mayores[".viewFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_c_mayores[".viewFields"][] = "futuro_ans_1";
$tdatat_planilla_c_mayores[".viewFields"][] = "prev_afp_10";
$tdatat_planilla_c_mayores[".viewFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_c_mayores[".viewFields"][] = "prev_afp_05";
$tdatat_planilla_c_mayores[".viewFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_c_mayores[".viewFields"][] = "prev_ans_1";
$tdatat_planilla_c_mayores[".viewFields"][] = "rc_iva";
$tdatat_planilla_c_mayores[".viewFields"][] = "retenciones";
$tdatat_planilla_c_mayores[".viewFields"][] = "multa";
$tdatat_planilla_c_mayores[".viewFields"][] = "total_desc";
$tdatat_planilla_c_mayores[".viewFields"][] = "pre_natal";
$tdatat_planilla_c_mayores[".viewFields"][] = "natalidad";
$tdatat_planilla_c_mayores[".viewFields"][] = "lactancia";
$tdatat_planilla_c_mayores[".viewFields"][] = "sepelio";
$tdatat_planilla_c_mayores[".viewFields"][] = "seguro_pat_10";
$tdatat_planilla_c_mayores[".viewFields"][] = "riesgo_pat_171";
$tdatat_planilla_c_mayores[".viewFields"][] = "pro_vivienda_pat_2";
$tdatat_planilla_c_mayores[".viewFields"][] = "ap_pat_sol_3";
$tdatat_planilla_c_mayores[".viewFields"][] = "mes";
$tdatat_planilla_c_mayores[".viewFields"][] = "gestion";
$tdatat_planilla_c_mayores[".viewFields"][] = "liquido_pagable";
$tdatat_planilla_c_mayores[".viewFields"][] = "cod_afp";
$tdatat_planilla_c_mayores[".viewFields"][] = "cta_banco";
$tdatat_planilla_c_mayores[".viewFields"][] = "tipo_funcionario";

$tdatat_planilla_c_mayores[".addFields"] = array();

$tdatat_planilla_c_mayores[".masterListFields"] = array();
$tdatat_planilla_c_mayores[".masterListFields"][] = "id_func";
$tdatat_planilla_c_mayores[".masterListFields"][] = "fecha_nac";
$tdatat_planilla_c_mayores[".masterListFields"][] = "sexo";
$tdatat_planilla_c_mayores[".masterListFields"][] = "item_contrato";
$tdatat_planilla_c_mayores[".masterListFields"][] = "unidad";
$tdatat_planilla_c_mayores[".masterListFields"][] = "cargo";
$tdatat_planilla_c_mayores[".masterListFields"][] = "paterno";
$tdatat_planilla_c_mayores[".masterListFields"][] = "materno";
$tdatat_planilla_c_mayores[".masterListFields"][] = "nombres";
$tdatat_planilla_c_mayores[".masterListFields"][] = "ci";
$tdatat_planilla_c_mayores[".masterListFields"][] = "exp";
$tdatat_planilla_c_mayores[".masterListFields"][] = "nit";
$tdatat_planilla_c_mayores[".masterListFields"][] = "fec_ingreso";
$tdatat_planilla_c_mayores[".masterListFields"][] = "baja";
$tdatat_planilla_c_mayores[".masterListFields"][] = "reasig";
$tdatat_planilla_c_mayores[".masterListFields"][] = "haber_basico";
$tdatat_planilla_c_mayores[".masterListFields"][] = "dias_trab";
$tdatat_planilla_c_mayores[".masterListFields"][] = "haber_percibido";
$tdatat_planilla_c_mayores[".masterListFields"][] = "reint";
$tdatat_planilla_c_mayores[".masterListFields"][] = "bono_ant";
$tdatat_planilla_c_mayores[".masterListFields"][] = "total_ganado";
$tdatat_planilla_c_mayores[".masterListFields"][] = "devoluciones";
$tdatat_planilla_c_mayores[".masterListFields"][] = "asig_familiar";
$tdatat_planilla_c_mayores[".masterListFields"][] = "futuro_afp_10";
$tdatat_planilla_c_mayores[".masterListFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_c_mayores[".masterListFields"][] = "futuro_afp_05";
$tdatat_planilla_c_mayores[".masterListFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_c_mayores[".masterListFields"][] = "futuro_ans_1";
$tdatat_planilla_c_mayores[".masterListFields"][] = "prev_afp_10";
$tdatat_planilla_c_mayores[".masterListFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_c_mayores[".masterListFields"][] = "prev_afp_05";
$tdatat_planilla_c_mayores[".masterListFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_c_mayores[".masterListFields"][] = "prev_ans_1";
$tdatat_planilla_c_mayores[".masterListFields"][] = "rc_iva";
$tdatat_planilla_c_mayores[".masterListFields"][] = "retenciones";
$tdatat_planilla_c_mayores[".masterListFields"][] = "multa";
$tdatat_planilla_c_mayores[".masterListFields"][] = "total_desc";
$tdatat_planilla_c_mayores[".masterListFields"][] = "pre_natal";
$tdatat_planilla_c_mayores[".masterListFields"][] = "natalidad";
$tdatat_planilla_c_mayores[".masterListFields"][] = "lactancia";
$tdatat_planilla_c_mayores[".masterListFields"][] = "sepelio";
$tdatat_planilla_c_mayores[".masterListFields"][] = "seguro_pat_10";
$tdatat_planilla_c_mayores[".masterListFields"][] = "riesgo_pat_171";
$tdatat_planilla_c_mayores[".masterListFields"][] = "pro_vivienda_pat_2";
$tdatat_planilla_c_mayores[".masterListFields"][] = "ap_pat_sol_3";
$tdatat_planilla_c_mayores[".masterListFields"][] = "mes";
$tdatat_planilla_c_mayores[".masterListFields"][] = "gestion";
$tdatat_planilla_c_mayores[".masterListFields"][] = "liquido_pagable";
$tdatat_planilla_c_mayores[".masterListFields"][] = "cod_afp";
$tdatat_planilla_c_mayores[".masterListFields"][] = "cta_banco";
$tdatat_planilla_c_mayores[".masterListFields"][] = "tipo_funcionario";

$tdatat_planilla_c_mayores[".inlineAddFields"] = array();

$tdatat_planilla_c_mayores[".editFields"] = array();

$tdatat_planilla_c_mayores[".inlineEditFields"] = array();

$tdatat_planilla_c_mayores[".exportFields"] = array();
$tdatat_planilla_c_mayores[".exportFields"][] = "id_func";
$tdatat_planilla_c_mayores[".exportFields"][] = "fecha_nac";
$tdatat_planilla_c_mayores[".exportFields"][] = "sexo";
$tdatat_planilla_c_mayores[".exportFields"][] = "item_contrato";
$tdatat_planilla_c_mayores[".exportFields"][] = "unidad";
$tdatat_planilla_c_mayores[".exportFields"][] = "cargo";
$tdatat_planilla_c_mayores[".exportFields"][] = "paterno";
$tdatat_planilla_c_mayores[".exportFields"][] = "materno";
$tdatat_planilla_c_mayores[".exportFields"][] = "nombres";
$tdatat_planilla_c_mayores[".exportFields"][] = "ci";
$tdatat_planilla_c_mayores[".exportFields"][] = "exp";
$tdatat_planilla_c_mayores[".exportFields"][] = "nit";
$tdatat_planilla_c_mayores[".exportFields"][] = "fec_ingreso";
$tdatat_planilla_c_mayores[".exportFields"][] = "baja";
$tdatat_planilla_c_mayores[".exportFields"][] = "reasig";
$tdatat_planilla_c_mayores[".exportFields"][] = "haber_basico";
$tdatat_planilla_c_mayores[".exportFields"][] = "dias_trab";
$tdatat_planilla_c_mayores[".exportFields"][] = "haber_percibido";
$tdatat_planilla_c_mayores[".exportFields"][] = "reint";
$tdatat_planilla_c_mayores[".exportFields"][] = "bono_ant";
$tdatat_planilla_c_mayores[".exportFields"][] = "total_ganado";
$tdatat_planilla_c_mayores[".exportFields"][] = "devoluciones";
$tdatat_planilla_c_mayores[".exportFields"][] = "asig_familiar";
$tdatat_planilla_c_mayores[".exportFields"][] = "futuro_afp_10";
$tdatat_planilla_c_mayores[".exportFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_c_mayores[".exportFields"][] = "futuro_afp_05";
$tdatat_planilla_c_mayores[".exportFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_c_mayores[".exportFields"][] = "futuro_ans_1";
$tdatat_planilla_c_mayores[".exportFields"][] = "prev_afp_10";
$tdatat_planilla_c_mayores[".exportFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_c_mayores[".exportFields"][] = "prev_afp_05";
$tdatat_planilla_c_mayores[".exportFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_c_mayores[".exportFields"][] = "prev_ans_1";
$tdatat_planilla_c_mayores[".exportFields"][] = "rc_iva";
$tdatat_planilla_c_mayores[".exportFields"][] = "retenciones";
$tdatat_planilla_c_mayores[".exportFields"][] = "multa";
$tdatat_planilla_c_mayores[".exportFields"][] = "total_desc";
$tdatat_planilla_c_mayores[".exportFields"][] = "pre_natal";
$tdatat_planilla_c_mayores[".exportFields"][] = "natalidad";
$tdatat_planilla_c_mayores[".exportFields"][] = "lactancia";
$tdatat_planilla_c_mayores[".exportFields"][] = "sepelio";
$tdatat_planilla_c_mayores[".exportFields"][] = "seguro_pat_10";
$tdatat_planilla_c_mayores[".exportFields"][] = "riesgo_pat_171";
$tdatat_planilla_c_mayores[".exportFields"][] = "pro_vivienda_pat_2";
$tdatat_planilla_c_mayores[".exportFields"][] = "ap_pat_sol_3";
$tdatat_planilla_c_mayores[".exportFields"][] = "mes";
$tdatat_planilla_c_mayores[".exportFields"][] = "gestion";
$tdatat_planilla_c_mayores[".exportFields"][] = "liquido_pagable";
$tdatat_planilla_c_mayores[".exportFields"][] = "cod_afp";
$tdatat_planilla_c_mayores[".exportFields"][] = "cta_banco";
$tdatat_planilla_c_mayores[".exportFields"][] = "tipo_funcionario";

$tdatat_planilla_c_mayores[".importFields"] = array();

$tdatat_planilla_c_mayores[".printFields"] = array();
$tdatat_planilla_c_mayores[".printFields"][] = "id_func";
$tdatat_planilla_c_mayores[".printFields"][] = "fecha_nac";
$tdatat_planilla_c_mayores[".printFields"][] = "sexo";
$tdatat_planilla_c_mayores[".printFields"][] = "item_contrato";
$tdatat_planilla_c_mayores[".printFields"][] = "unidad";
$tdatat_planilla_c_mayores[".printFields"][] = "cargo";
$tdatat_planilla_c_mayores[".printFields"][] = "paterno";
$tdatat_planilla_c_mayores[".printFields"][] = "materno";
$tdatat_planilla_c_mayores[".printFields"][] = "nombres";
$tdatat_planilla_c_mayores[".printFields"][] = "ci";
$tdatat_planilla_c_mayores[".printFields"][] = "exp";
$tdatat_planilla_c_mayores[".printFields"][] = "nit";
$tdatat_planilla_c_mayores[".printFields"][] = "fec_ingreso";
$tdatat_planilla_c_mayores[".printFields"][] = "baja";
$tdatat_planilla_c_mayores[".printFields"][] = "reasig";
$tdatat_planilla_c_mayores[".printFields"][] = "haber_basico";
$tdatat_planilla_c_mayores[".printFields"][] = "dias_trab";
$tdatat_planilla_c_mayores[".printFields"][] = "haber_percibido";
$tdatat_planilla_c_mayores[".printFields"][] = "reint";
$tdatat_planilla_c_mayores[".printFields"][] = "bono_ant";
$tdatat_planilla_c_mayores[".printFields"][] = "total_ganado";
$tdatat_planilla_c_mayores[".printFields"][] = "devoluciones";
$tdatat_planilla_c_mayores[".printFields"][] = "asig_familiar";
$tdatat_planilla_c_mayores[".printFields"][] = "futuro_afp_10";
$tdatat_planilla_c_mayores[".printFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_c_mayores[".printFields"][] = "futuro_afp_05";
$tdatat_planilla_c_mayores[".printFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_c_mayores[".printFields"][] = "futuro_ans_1";
$tdatat_planilla_c_mayores[".printFields"][] = "prev_afp_10";
$tdatat_planilla_c_mayores[".printFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_c_mayores[".printFields"][] = "prev_afp_05";
$tdatat_planilla_c_mayores[".printFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_c_mayores[".printFields"][] = "prev_ans_1";
$tdatat_planilla_c_mayores[".printFields"][] = "rc_iva";
$tdatat_planilla_c_mayores[".printFields"][] = "retenciones";
$tdatat_planilla_c_mayores[".printFields"][] = "multa";
$tdatat_planilla_c_mayores[".printFields"][] = "total_desc";
$tdatat_planilla_c_mayores[".printFields"][] = "pre_natal";
$tdatat_planilla_c_mayores[".printFields"][] = "natalidad";
$tdatat_planilla_c_mayores[".printFields"][] = "lactancia";
$tdatat_planilla_c_mayores[".printFields"][] = "sepelio";
$tdatat_planilla_c_mayores[".printFields"][] = "seguro_pat_10";
$tdatat_planilla_c_mayores[".printFields"][] = "riesgo_pat_171";
$tdatat_planilla_c_mayores[".printFields"][] = "pro_vivienda_pat_2";
$tdatat_planilla_c_mayores[".printFields"][] = "ap_pat_sol_3";
$tdatat_planilla_c_mayores[".printFields"][] = "mes";
$tdatat_planilla_c_mayores[".printFields"][] = "gestion";
$tdatat_planilla_c_mayores[".printFields"][] = "liquido_pagable";
$tdatat_planilla_c_mayores[".printFields"][] = "cod_afp";
$tdatat_planilla_c_mayores[".printFields"][] = "cta_banco";
$tdatat_planilla_c_mayores[".printFields"][] = "tipo_funcionario";

//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","id_func"); 
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

	

	
	$tdatat_planilla_c_mayores["id_func"] = $fdata;
//	fecha_nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha_nac";
	$fdata["GoodName"] = "fecha_nac";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","fecha_nac"); 
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

	

	
	$tdatat_planilla_c_mayores["fecha_nac"] = $fdata;
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","sexo"); 
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

	

	
	$tdatat_planilla_c_mayores["sexo"] = $fdata;
//	item_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "item_contrato";
	$fdata["GoodName"] = "item_contrato";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","item_contrato"); 
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

	

	
	$tdatat_planilla_c_mayores["item_contrato"] = $fdata;
//	unidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "unidad";
	$fdata["GoodName"] = "unidad";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","unidad"); 
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

	

	
	$tdatat_planilla_c_mayores["unidad"] = $fdata;
//	cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cargo";
	$fdata["GoodName"] = "cargo";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","cargo"); 
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

	

	
	$tdatat_planilla_c_mayores["cargo"] = $fdata;
//	paterno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "paterno";
	$fdata["GoodName"] = "paterno";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","paterno"); 
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

	

	
	$tdatat_planilla_c_mayores["paterno"] = $fdata;
//	materno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "materno";
	$fdata["GoodName"] = "materno";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","materno"); 
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

	

	
	$tdatat_planilla_c_mayores["materno"] = $fdata;
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","nombres"); 
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

	

	
	$tdatat_planilla_c_mayores["nombres"] = $fdata;
//	ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ci";
	$fdata["GoodName"] = "ci";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","ci"); 
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

	

	
	$tdatat_planilla_c_mayores["ci"] = $fdata;
//	exp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "exp";
	$fdata["GoodName"] = "exp";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","exp"); 
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

	

	
	$tdatat_planilla_c_mayores["exp"] = $fdata;
//	nit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "nit";
	$fdata["GoodName"] = "nit";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","nit"); 
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

	

	
	$tdatat_planilla_c_mayores["nit"] = $fdata;
//	fec_ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "fec_ingreso";
	$fdata["GoodName"] = "fec_ingreso";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","fec_ingreso"); 
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

	

	
	$tdatat_planilla_c_mayores["fec_ingreso"] = $fdata;
//	baja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "baja";
	$fdata["GoodName"] = "baja";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","baja"); 
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

	

	
	$tdatat_planilla_c_mayores["baja"] = $fdata;
//	reasig
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "reasig";
	$fdata["GoodName"] = "reasig";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","reasig"); 
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

	

	
	$tdatat_planilla_c_mayores["reasig"] = $fdata;
//	haber_basico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "haber_basico";
	$fdata["GoodName"] = "haber_basico";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","haber_basico"); 
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

	

	
	$tdatat_planilla_c_mayores["haber_basico"] = $fdata;
//	dias_trab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "dias_trab";
	$fdata["GoodName"] = "dias_trab";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","dias_trab"); 
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

	

	
	$tdatat_planilla_c_mayores["dias_trab"] = $fdata;
//	haber_percibido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "haber_percibido";
	$fdata["GoodName"] = "haber_percibido";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","haber_percibido"); 
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

	

	
	$tdatat_planilla_c_mayores["haber_percibido"] = $fdata;
//	reint
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "reint";
	$fdata["GoodName"] = "reint";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","reint"); 
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

	

	
	$tdatat_planilla_c_mayores["reint"] = $fdata;
//	bono_ant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "bono_ant";
	$fdata["GoodName"] = "bono_ant";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","bono_ant"); 
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

	

	
	$tdatat_planilla_c_mayores["bono_ant"] = $fdata;
//	total_ganado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "total_ganado";
	$fdata["GoodName"] = "total_ganado";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","total_ganado"); 
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

	

	
	$tdatat_planilla_c_mayores["total_ganado"] = $fdata;
//	devoluciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "devoluciones";
	$fdata["GoodName"] = "devoluciones";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","devoluciones"); 
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

	

	
	$tdatat_planilla_c_mayores["devoluciones"] = $fdata;
//	asig_familiar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "asig_familiar";
	$fdata["GoodName"] = "asig_familiar";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","asig_familiar"); 
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

	

	
	$tdatat_planilla_c_mayores["asig_familiar"] = $fdata;
//	futuro_afp_10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "futuro_afp_10";
	$fdata["GoodName"] = "futuro_afp_10";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","futuro_afp_10"); 
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

	

	
	$tdatat_planilla_c_mayores["futuro_afp_10"] = $fdata;
//	futuro_afp_riesgo_1_71
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "futuro_afp_riesgo_1_71";
	$fdata["GoodName"] = "futuro_afp_riesgo_1_71";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","futuro_afp_riesgo_1_71"); 
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

	

	
	$tdatat_planilla_c_mayores["futuro_afp_riesgo_1_71"] = $fdata;
//	futuro_afp_05
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "futuro_afp_05";
	$fdata["GoodName"] = "futuro_afp_05";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","futuro_afp_05"); 
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

	

	
	$tdatat_planilla_c_mayores["futuro_afp_05"] = $fdata;
//	futuro_afp_ap_sol_0_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "futuro_afp_ap_sol_0_5";
	$fdata["GoodName"] = "futuro_afp_ap_sol_0_5";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","futuro_afp_ap_sol_0_5"); 
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

	

	
	$tdatat_planilla_c_mayores["futuro_afp_ap_sol_0_5"] = $fdata;
//	futuro_ans_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "futuro_ans_1";
	$fdata["GoodName"] = "futuro_ans_1";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","futuro_ans_1"); 
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

	

	
	$tdatat_planilla_c_mayores["futuro_ans_1"] = $fdata;
//	prev_afp_10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "prev_afp_10";
	$fdata["GoodName"] = "prev_afp_10";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","prev_afp_10"); 
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

	

	
	$tdatat_planilla_c_mayores["prev_afp_10"] = $fdata;
//	prev_afp_riesgo_1_71
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "prev_afp_riesgo_1_71";
	$fdata["GoodName"] = "prev_afp_riesgo_1_71";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","prev_afp_riesgo_1_71"); 
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

	

	
	$tdatat_planilla_c_mayores["prev_afp_riesgo_1_71"] = $fdata;
//	prev_afp_05
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "prev_afp_05";
	$fdata["GoodName"] = "prev_afp_05";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","prev_afp_05"); 
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

	

	
	$tdatat_planilla_c_mayores["prev_afp_05"] = $fdata;
//	prev_afp_ap_sol_0_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "prev_afp_ap_sol_0_5";
	$fdata["GoodName"] = "prev_afp_ap_sol_0_5";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","prev_afp_ap_sol_0_5"); 
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

	

	
	$tdatat_planilla_c_mayores["prev_afp_ap_sol_0_5"] = $fdata;
//	prev_ans_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "prev_ans_1";
	$fdata["GoodName"] = "prev_ans_1";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","prev_ans_1"); 
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

	

	
	$tdatat_planilla_c_mayores["prev_ans_1"] = $fdata;
//	rc_iva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "rc_iva";
	$fdata["GoodName"] = "rc_iva";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","rc_iva"); 
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

	

	
	$tdatat_planilla_c_mayores["rc_iva"] = $fdata;
//	retenciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "retenciones";
	$fdata["GoodName"] = "retenciones";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","retenciones"); 
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

	

	
	$tdatat_planilla_c_mayores["retenciones"] = $fdata;
//	multa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "multa";
	$fdata["GoodName"] = "multa";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","multa"); 
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

	

	
	$tdatat_planilla_c_mayores["multa"] = $fdata;
//	total_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "total_desc";
	$fdata["GoodName"] = "total_desc";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","total_desc"); 
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

	

	
	$tdatat_planilla_c_mayores["total_desc"] = $fdata;
//	pre_natal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "pre_natal";
	$fdata["GoodName"] = "pre_natal";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","pre_natal"); 
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

	

	
	$tdatat_planilla_c_mayores["pre_natal"] = $fdata;
//	natalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "natalidad";
	$fdata["GoodName"] = "natalidad";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","natalidad"); 
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

	

	
	$tdatat_planilla_c_mayores["natalidad"] = $fdata;
//	lactancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "lactancia";
	$fdata["GoodName"] = "lactancia";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","lactancia"); 
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

	

	
	$tdatat_planilla_c_mayores["lactancia"] = $fdata;
//	sepelio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "sepelio";
	$fdata["GoodName"] = "sepelio";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","sepelio"); 
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

	

	
	$tdatat_planilla_c_mayores["sepelio"] = $fdata;
//	seguro_pat_10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "seguro_pat_10";
	$fdata["GoodName"] = "seguro_pat_10";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","seguro_pat_10"); 
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

	

	
	$tdatat_planilla_c_mayores["seguro_pat_10"] = $fdata;
//	riesgo_pat_171
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "riesgo_pat_171";
	$fdata["GoodName"] = "riesgo_pat_171";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","riesgo_pat_171"); 
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

	

	
	$tdatat_planilla_c_mayores["riesgo_pat_171"] = $fdata;
//	pro_vivienda_pat_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "pro_vivienda_pat_2";
	$fdata["GoodName"] = "pro_vivienda_pat_2";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","pro_vivienda_pat_2"); 
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

	

	
	$tdatat_planilla_c_mayores["pro_vivienda_pat_2"] = $fdata;
//	ap_pat_sol_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "ap_pat_sol_3";
	$fdata["GoodName"] = "ap_pat_sol_3";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","ap_pat_sol_3"); 
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

	

	
	$tdatat_planilla_c_mayores["ap_pat_sol_3"] = $fdata;
//	mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "mes";
	$fdata["GoodName"] = "mes";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","mes"); 
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

	

	
	$tdatat_planilla_c_mayores["mes"] = $fdata;
//	gestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "gestion";
	$fdata["GoodName"] = "gestion";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","gestion"); 
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

	

	
	$tdatat_planilla_c_mayores["gestion"] = $fdata;
//	liquido_pagable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "liquido_pagable";
	$fdata["GoodName"] = "liquido_pagable";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","liquido_pagable"); 
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

	

	
	$tdatat_planilla_c_mayores["liquido_pagable"] = $fdata;
//	cod_afp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "cod_afp";
	$fdata["GoodName"] = "cod_afp";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","cod_afp"); 
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

	

	
	$tdatat_planilla_c_mayores["cod_afp"] = $fdata;
//	cta_banco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "cta_banco";
	$fdata["GoodName"] = "cta_banco";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","cta_banco"); 
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

	

	
	$tdatat_planilla_c_mayores["cta_banco"] = $fdata;
//	tipo_funcionario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "tipo_funcionario";
	$fdata["GoodName"] = "tipo_funcionario";
	$fdata["ownerTable"] = "t_planilla_c_mayores";
	$fdata["Label"] = GetFieldLabel("t_planilla_c_mayores","tipo_funcionario"); 
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

	

	
	$tdatat_planilla_c_mayores["tipo_funcionario"] = $fdata;

	
$tables_data["t_planilla_c_mayores"]=&$tdatat_planilla_c_mayores;
$field_labels["t_planilla_c_mayores"] = &$fieldLabelst_planilla_c_mayores;
$fieldToolTips["t_planilla_c_mayores"] = &$fieldToolTipst_planilla_c_mayores;
$page_titles["t_planilla_c_mayores"] = &$pageTitlest_planilla_c_mayores;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_planilla_c_mayores"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_planilla_c_mayores"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_planilla_c_mayores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_func,  	fecha_nac,  	sexo,  	item_contrato,  	unidad,  	cargo,  	paterno,  	materno,  	nombres,  	ci,  	exp,  	nit,  	fec_ingreso,  	baja,  	reasig,  	haber_basico,  	dias_trab,  	haber_percibido,  	reint,  	bono_ant,  	total_ganado,  	devoluciones,  	asig_familiar,  	futuro_afp_10,  	futuro_afp_riesgo_1_71,  	futuro_afp_05,  	futuro_afp_ap_sol_0_5,  	futuro_ans_1,  	prev_afp_10,  	prev_afp_riesgo_1_71,  	prev_afp_05,  	prev_afp_ap_sol_0_5,  	prev_ans_1,  	rc_iva,  	retenciones,  	multa,  	total_desc,  	pre_natal,  	natalidad,  	lactancia,  	sepelio,  	seguro_pat_10,  	riesgo_pat_171,  	pro_vivienda_pat_2,  	ap_pat_sol_3,  	mes,  	gestion,  	liquido_pagable,  	cod_afp,  	cta_banco,  	tipo_funcionario";
$proto0["m_strFrom"] = "FROM t_planilla_c_mayores";
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
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto5["m_sql"] = "id_func";
$proto5["m_srcTableName"] = "t_planilla_c_mayores";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_nac",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto7["m_sql"] = "fecha_nac";
$proto7["m_srcTableName"] = "t_planilla_c_mayores";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto9["m_sql"] = "sexo";
$proto9["m_srcTableName"] = "t_planilla_c_mayores";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "item_contrato",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto11["m_sql"] = "item_contrato";
$proto11["m_srcTableName"] = "t_planilla_c_mayores";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "unidad",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto13["m_sql"] = "unidad";
$proto13["m_srcTableName"] = "t_planilla_c_mayores";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto15["m_sql"] = "cargo";
$proto15["m_srcTableName"] = "t_planilla_c_mayores";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "paterno",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto17["m_sql"] = "paterno";
$proto17["m_srcTableName"] = "t_planilla_c_mayores";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "materno",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto19["m_sql"] = "materno";
$proto19["m_srcTableName"] = "t_planilla_c_mayores";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto21["m_sql"] = "nombres";
$proto21["m_srcTableName"] = "t_planilla_c_mayores";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "ci",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto23["m_sql"] = "ci";
$proto23["m_srcTableName"] = "t_planilla_c_mayores";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "exp",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto25["m_sql"] = "exp";
$proto25["m_srcTableName"] = "t_planilla_c_mayores";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "nit",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto27["m_sql"] = "nit";
$proto27["m_srcTableName"] = "t_planilla_c_mayores";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "fec_ingreso",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto29["m_sql"] = "fec_ingreso";
$proto29["m_srcTableName"] = "t_planilla_c_mayores";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "baja",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto31["m_sql"] = "baja";
$proto31["m_srcTableName"] = "t_planilla_c_mayores";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "reasig",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto33["m_sql"] = "reasig";
$proto33["m_srcTableName"] = "t_planilla_c_mayores";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "haber_basico",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto35["m_sql"] = "haber_basico";
$proto35["m_srcTableName"] = "t_planilla_c_mayores";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "dias_trab",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto37["m_sql"] = "dias_trab";
$proto37["m_srcTableName"] = "t_planilla_c_mayores";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "haber_percibido",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto39["m_sql"] = "haber_percibido";
$proto39["m_srcTableName"] = "t_planilla_c_mayores";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "reint",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto41["m_sql"] = "reint";
$proto41["m_srcTableName"] = "t_planilla_c_mayores";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "bono_ant",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto43["m_sql"] = "bono_ant";
$proto43["m_srcTableName"] = "t_planilla_c_mayores";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "total_ganado",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto45["m_sql"] = "total_ganado";
$proto45["m_srcTableName"] = "t_planilla_c_mayores";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "devoluciones",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto47["m_sql"] = "devoluciones";
$proto47["m_srcTableName"] = "t_planilla_c_mayores";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "asig_familiar",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto49["m_sql"] = "asig_familiar";
$proto49["m_srcTableName"] = "t_planilla_c_mayores";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "futuro_afp_10",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto51["m_sql"] = "futuro_afp_10";
$proto51["m_srcTableName"] = "t_planilla_c_mayores";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "futuro_afp_riesgo_1_71",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto53["m_sql"] = "futuro_afp_riesgo_1_71";
$proto53["m_srcTableName"] = "t_planilla_c_mayores";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "futuro_afp_05",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto55["m_sql"] = "futuro_afp_05";
$proto55["m_srcTableName"] = "t_planilla_c_mayores";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "futuro_afp_ap_sol_0_5",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto57["m_sql"] = "futuro_afp_ap_sol_0_5";
$proto57["m_srcTableName"] = "t_planilla_c_mayores";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "futuro_ans_1",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto59["m_sql"] = "futuro_ans_1";
$proto59["m_srcTableName"] = "t_planilla_c_mayores";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "prev_afp_10",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto61["m_sql"] = "prev_afp_10";
$proto61["m_srcTableName"] = "t_planilla_c_mayores";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "prev_afp_riesgo_1_71",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto63["m_sql"] = "prev_afp_riesgo_1_71";
$proto63["m_srcTableName"] = "t_planilla_c_mayores";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "prev_afp_05",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto65["m_sql"] = "prev_afp_05";
$proto65["m_srcTableName"] = "t_planilla_c_mayores";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "prev_afp_ap_sol_0_5",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto67["m_sql"] = "prev_afp_ap_sol_0_5";
$proto67["m_srcTableName"] = "t_planilla_c_mayores";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "prev_ans_1",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto69["m_sql"] = "prev_ans_1";
$proto69["m_srcTableName"] = "t_planilla_c_mayores";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "rc_iva",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto71["m_sql"] = "rc_iva";
$proto71["m_srcTableName"] = "t_planilla_c_mayores";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "retenciones",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto73["m_sql"] = "retenciones";
$proto73["m_srcTableName"] = "t_planilla_c_mayores";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "multa",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto75["m_sql"] = "multa";
$proto75["m_srcTableName"] = "t_planilla_c_mayores";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "total_desc",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto77["m_sql"] = "total_desc";
$proto77["m_srcTableName"] = "t_planilla_c_mayores";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "pre_natal",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto79["m_sql"] = "pre_natal";
$proto79["m_srcTableName"] = "t_planilla_c_mayores";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "natalidad",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto81["m_sql"] = "natalidad";
$proto81["m_srcTableName"] = "t_planilla_c_mayores";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "lactancia",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto83["m_sql"] = "lactancia";
$proto83["m_srcTableName"] = "t_planilla_c_mayores";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "sepelio",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto85["m_sql"] = "sepelio";
$proto85["m_srcTableName"] = "t_planilla_c_mayores";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "seguro_pat_10",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto87["m_sql"] = "seguro_pat_10";
$proto87["m_srcTableName"] = "t_planilla_c_mayores";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "riesgo_pat_171",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto89["m_sql"] = "riesgo_pat_171";
$proto89["m_srcTableName"] = "t_planilla_c_mayores";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "pro_vivienda_pat_2",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto91["m_sql"] = "pro_vivienda_pat_2";
$proto91["m_srcTableName"] = "t_planilla_c_mayores";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "ap_pat_sol_3",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto93["m_sql"] = "ap_pat_sol_3";
$proto93["m_srcTableName"] = "t_planilla_c_mayores";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLField(array(
	"m_strName" => "mes",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto95["m_sql"] = "mes";
$proto95["m_srcTableName"] = "t_planilla_c_mayores";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "gestion",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto97["m_sql"] = "gestion";
$proto97["m_srcTableName"] = "t_planilla_c_mayores";
$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLField(array(
	"m_strName" => "liquido_pagable",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto99["m_sql"] = "liquido_pagable";
$proto99["m_srcTableName"] = "t_planilla_c_mayores";
$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "";
$obj = new SQLFieldListItem($proto99);

$proto0["m_fieldlist"][]=$obj;
						$proto101=array();
			$obj = new SQLField(array(
	"m_strName" => "cod_afp",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto101["m_sql"] = "cod_afp";
$proto101["m_srcTableName"] = "t_planilla_c_mayores";
$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto0["m_fieldlist"][]=$obj;
						$proto103=array();
			$obj = new SQLField(array(
	"m_strName" => "cta_banco",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto103["m_sql"] = "cta_banco";
$proto103["m_srcTableName"] = "t_planilla_c_mayores";
$proto103["m_expr"]=$obj;
$proto103["m_alias"] = "";
$obj = new SQLFieldListItem($proto103);

$proto0["m_fieldlist"][]=$obj;
						$proto105=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_funcionario",
	"m_strTable" => "t_planilla_c_mayores",
	"m_srcTableName" => "t_planilla_c_mayores"
));

$proto105["m_sql"] = "tipo_funcionario";
$proto105["m_srcTableName"] = "t_planilla_c_mayores";
$proto105["m_expr"]=$obj;
$proto105["m_alias"] = "";
$obj = new SQLFieldListItem($proto105);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto107=array();
$proto107["m_link"] = "SQLL_MAIN";
			$proto108=array();
$proto108["m_strName"] = "t_planilla_c_mayores";
$proto108["m_srcTableName"] = "t_planilla_c_mayores";
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
$proto107["m_sql"] = "t_planilla_c_mayores";
$proto107["m_alias"] = "";
$proto107["m_srcTableName"] = "t_planilla_c_mayores";
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
$proto0["m_srcTableName"]="t_planilla_c_mayores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_planilla_c_mayores = createSqlQuery_t_planilla_c_mayores();


	
																																																			
	
$tdatat_planilla_c_mayores[".sqlquery"] = $queryData_t_planilla_c_mayores;

$tableEvents["t_planilla_c_mayores"] = new eventsBase;
$tdatat_planilla_c_mayores[".hasEvents"] = false;

?>