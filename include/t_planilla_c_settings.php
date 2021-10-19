<?php
require_once(getabspath("classes/cipherer.php"));




$tdatat_planilla_c = array();	
	$tdatat_planilla_c[".truncateText"] = true;
	$tdatat_planilla_c[".NumberOfChars"] = 80; 
	$tdatat_planilla_c[".ShortName"] = "t_planilla_c";
	$tdatat_planilla_c[".OwnerID"] = "";
	$tdatat_planilla_c[".OriginalTable"] = "t_planilla_c";

//	field labels
$fieldLabelst_planilla_c = array();
$fieldToolTipst_planilla_c = array();
$pageTitlest_planilla_c = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelst_planilla_c["Spanish"] = array();
	$fieldToolTipst_planilla_c["Spanish"] = array();
	$pageTitlest_planilla_c["Spanish"] = array();
	$fieldLabelst_planilla_c["Spanish"]["id_func"] = "Id Func";
	$fieldToolTipst_planilla_c["Spanish"]["id_func"] = "";
	$fieldLabelst_planilla_c["Spanish"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipst_planilla_c["Spanish"]["fecha_nac"] = "";
	$fieldLabelst_planilla_c["Spanish"]["sexo"] = "Sexo";
	$fieldToolTipst_planilla_c["Spanish"]["sexo"] = "";
	$fieldLabelst_planilla_c["Spanish"]["item_contrato"] = "Item Contrato";
	$fieldToolTipst_planilla_c["Spanish"]["item_contrato"] = "";
	$fieldLabelst_planilla_c["Spanish"]["unidad"] = "Unidad";
	$fieldToolTipst_planilla_c["Spanish"]["unidad"] = "";
	$fieldLabelst_planilla_c["Spanish"]["cargo"] = "Cargo";
	$fieldToolTipst_planilla_c["Spanish"]["cargo"] = "";
	$fieldLabelst_planilla_c["Spanish"]["paterno"] = "Paterno";
	$fieldToolTipst_planilla_c["Spanish"]["paterno"] = "";
	$fieldLabelst_planilla_c["Spanish"]["materno"] = "Materno";
	$fieldToolTipst_planilla_c["Spanish"]["materno"] = "";
	$fieldLabelst_planilla_c["Spanish"]["nombres"] = "Nombres";
	$fieldToolTipst_planilla_c["Spanish"]["nombres"] = "";
	$fieldLabelst_planilla_c["Spanish"]["ci"] = "CI";
	$fieldToolTipst_planilla_c["Spanish"]["ci"] = "";
	$fieldLabelst_planilla_c["Spanish"]["exp"] = "Exp";
	$fieldToolTipst_planilla_c["Spanish"]["exp"] = "";
	$fieldLabelst_planilla_c["Spanish"]["nit"] = "NIT";
	$fieldToolTipst_planilla_c["Spanish"]["nit"] = "";
	$fieldLabelst_planilla_c["Spanish"]["fec_ingreso"] = "Fec.Ingreso";
	$fieldToolTipst_planilla_c["Spanish"]["fec_ingreso"] = "";
	$fieldLabelst_planilla_c["Spanish"]["baja"] = "Baja";
	$fieldToolTipst_planilla_c["Spanish"]["baja"] = "";
	$fieldLabelst_planilla_c["Spanish"]["reasig"] = "Reasig";
	$fieldToolTipst_planilla_c["Spanish"]["reasig"] = "";
	$fieldLabelst_planilla_c["Spanish"]["haber_basico"] = "Haber Basico";
	$fieldToolTipst_planilla_c["Spanish"]["haber_basico"] = "";
	$fieldLabelst_planilla_c["Spanish"]["dias_trab"] = "Dias Trab";
	$fieldToolTipst_planilla_c["Spanish"]["dias_trab"] = "";
	$fieldLabelst_planilla_c["Spanish"]["haber_percibido"] = "Haber Percibido";
	$fieldToolTipst_planilla_c["Spanish"]["haber_percibido"] = "";
	$fieldLabelst_planilla_c["Spanish"]["reint"] = "Reint";
	$fieldToolTipst_planilla_c["Spanish"]["reint"] = "";
	$fieldLabelst_planilla_c["Spanish"]["bono_ant"] = "Bono Ant";
	$fieldToolTipst_planilla_c["Spanish"]["bono_ant"] = "";
	$fieldLabelst_planilla_c["Spanish"]["total_ganado"] = "Total Ganado";
	$fieldToolTipst_planilla_c["Spanish"]["total_ganado"] = "";
	$fieldLabelst_planilla_c["Spanish"]["devoluciones"] = "Devoluciones";
	$fieldToolTipst_planilla_c["Spanish"]["devoluciones"] = "";
	$fieldLabelst_planilla_c["Spanish"]["asig_familiar"] = "Asig Familiar";
	$fieldToolTipst_planilla_c["Spanish"]["asig_familiar"] = "";
	$fieldLabelst_planilla_c["Spanish"]["futuro_afp_10"] = "Futuro Afp 10";
	$fieldToolTipst_planilla_c["Spanish"]["futuro_afp_10"] = "";
	$fieldLabelst_planilla_c["Spanish"]["futuro_afp_riesgo_1_71"] = "Futuro Afp Riesgo 1 71";
	$fieldToolTipst_planilla_c["Spanish"]["futuro_afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla_c["Spanish"]["futuro_afp_05"] = "Futuro Afp 05";
	$fieldToolTipst_planilla_c["Spanish"]["futuro_afp_05"] = "";
	$fieldLabelst_planilla_c["Spanish"]["futuro_afp_ap_sol_0_5"] = "Futuro Afp Ap Sol 0 5";
	$fieldToolTipst_planilla_c["Spanish"]["futuro_afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla_c["Spanish"]["futuro_ans_1"] = "Futuro Ans 1";
	$fieldToolTipst_planilla_c["Spanish"]["futuro_ans_1"] = "";
	$fieldLabelst_planilla_c["Spanish"]["prev_afp_10"] = "Prevision Afp 10";
	$fieldToolTipst_planilla_c["Spanish"]["prev_afp_10"] = "";
	$fieldLabelst_planilla_c["Spanish"]["prev_afp_riesgo_1_71"] = "Prevision Afp Riesgo 1 71";
	$fieldToolTipst_planilla_c["Spanish"]["prev_afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla_c["Spanish"]["prev_afp_05"] = "Prevision Afp 05";
	$fieldToolTipst_planilla_c["Spanish"]["prev_afp_05"] = "";
	$fieldLabelst_planilla_c["Spanish"]["prev_afp_ap_sol_0_5"] = "PrevisionAfp Ap Sol 0 5";
	$fieldToolTipst_planilla_c["Spanish"]["prev_afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla_c["Spanish"]["prev_ans_1"] = "PrevisionAns 1";
	$fieldToolTipst_planilla_c["Spanish"]["prev_ans_1"] = "";
	$fieldLabelst_planilla_c["Spanish"]["rc_iva"] = "RC IVA";
	$fieldToolTipst_planilla_c["Spanish"]["rc_iva"] = "";
	$fieldLabelst_planilla_c["Spanish"]["retenciones"] = "Retenciones";
	$fieldToolTipst_planilla_c["Spanish"]["retenciones"] = "";
	$fieldLabelst_planilla_c["Spanish"]["multa"] = "Multa";
	$fieldToolTipst_planilla_c["Spanish"]["multa"] = "";
	$fieldLabelst_planilla_c["Spanish"]["total_desc"] = "Total Desc";
	$fieldToolTipst_planilla_c["Spanish"]["total_desc"] = "";
	$fieldLabelst_planilla_c["Spanish"]["pre_natal"] = "Subsidio Pre Natal";
	$fieldToolTipst_planilla_c["Spanish"]["pre_natal"] = "";
	$fieldLabelst_planilla_c["Spanish"]["natalidad"] = "Subsidio Natalidad";
	$fieldToolTipst_planilla_c["Spanish"]["natalidad"] = "";
	$fieldLabelst_planilla_c["Spanish"]["lactancia"] = "Subsidio Lactancia";
	$fieldToolTipst_planilla_c["Spanish"]["lactancia"] = "";
	$fieldLabelst_planilla_c["Spanish"]["sepelio"] = "Sepelio";
	$fieldToolTipst_planilla_c["Spanish"]["sepelio"] = "";
	$fieldLabelst_planilla_c["Spanish"]["mes"] = "Mes";
	$fieldToolTipst_planilla_c["Spanish"]["mes"] = "";
	$fieldLabelst_planilla_c["Spanish"]["gestion"] = "Gestion";
	$fieldToolTipst_planilla_c["Spanish"]["gestion"] = "";
	$fieldLabelst_planilla_c["Spanish"]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipst_planilla_c["Spanish"]["liquido_pagable"] = "";
	$fieldLabelst_planilla_c["Spanish"]["cod_afp"] = "AFP";
	$fieldToolTipst_planilla_c["Spanish"]["cod_afp"] = "";
	$fieldLabelst_planilla_c["Spanish"]["cta_banco"] = "Cta de Banco";
	$fieldToolTipst_planilla_c["Spanish"]["cta_banco"] = "";
	$fieldLabelst_planilla_c["Spanish"]["tipo_funcionario"] = "Tipo de Funcionario";
	$fieldToolTipst_planilla_c["Spanish"]["tipo_funcionario"] = "";
	$fieldLabelst_planilla_c["Spanish"]["seguro_pat_10"] = "Seguro Pat 10";
	$fieldToolTipst_planilla_c["Spanish"]["seguro_pat_10"] = "";
	$fieldLabelst_planilla_c["Spanish"]["riesgo_pat_171"] = "Riesgo Pat 171";
	$fieldToolTipst_planilla_c["Spanish"]["riesgo_pat_171"] = "";
	$fieldLabelst_planilla_c["Spanish"]["pro_vivienda_pat_2"] = "Pro Vivienda Pat 2";
	$fieldToolTipst_planilla_c["Spanish"]["pro_vivienda_pat_2"] = "";
	$fieldLabelst_planilla_c["Spanish"]["ap_pat_sol_3"] = "Ap Pat Sol 3";
	$fieldToolTipst_planilla_c["Spanish"]["ap_pat_sol_3"] = "";
	if (count($fieldToolTipst_planilla_c["Spanish"]))
		$tdatat_planilla_c[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelst_planilla_c[""] = array();
	$fieldToolTipst_planilla_c[""] = array();
	$pageTitlest_planilla_c[""] = array();
	$fieldLabelst_planilla_c[""]["id_func"] = "Id Func";
	$fieldToolTipst_planilla_c[""]["id_func"] = "";
	$fieldLabelst_planilla_c[""]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipst_planilla_c[""]["fecha_nac"] = "";
	$fieldLabelst_planilla_c[""]["sexo"] = "Sexo";
	$fieldToolTipst_planilla_c[""]["sexo"] = "";
	$fieldLabelst_planilla_c[""]["item_contrato"] = "Item Contrato";
	$fieldToolTipst_planilla_c[""]["item_contrato"] = "";
	$fieldLabelst_planilla_c[""]["unidad"] = "Unidad";
	$fieldToolTipst_planilla_c[""]["unidad"] = "";
	$fieldLabelst_planilla_c[""]["cargo"] = "Cargo";
	$fieldToolTipst_planilla_c[""]["cargo"] = "";
	$fieldLabelst_planilla_c[""]["paterno"] = "Paterno";
	$fieldToolTipst_planilla_c[""]["paterno"] = "";
	$fieldLabelst_planilla_c[""]["materno"] = "Materno";
	$fieldToolTipst_planilla_c[""]["materno"] = "";
	$fieldLabelst_planilla_c[""]["nombres"] = "Nombres";
	$fieldToolTipst_planilla_c[""]["nombres"] = "";
	$fieldLabelst_planilla_c[""]["ci"] = "Ci";
	$fieldToolTipst_planilla_c[""]["ci"] = "";
	$fieldLabelst_planilla_c[""]["exp"] = "Exp";
	$fieldToolTipst_planilla_c[""]["exp"] = "";
	$fieldLabelst_planilla_c[""]["nit"] = "Nit";
	$fieldToolTipst_planilla_c[""]["nit"] = "";
	$fieldLabelst_planilla_c[""]["fec_ingreso"] = "Fec Ingreso";
	$fieldToolTipst_planilla_c[""]["fec_ingreso"] = "";
	$fieldLabelst_planilla_c[""]["baja"] = "Baja";
	$fieldToolTipst_planilla_c[""]["baja"] = "";
	$fieldLabelst_planilla_c[""]["reasig"] = "Reasig";
	$fieldToolTipst_planilla_c[""]["reasig"] = "";
	$fieldLabelst_planilla_c[""]["haber_basico"] = "Haber Basico";
	$fieldToolTipst_planilla_c[""]["haber_basico"] = "";
	$fieldLabelst_planilla_c[""]["dias_trab"] = "Dias Trab";
	$fieldToolTipst_planilla_c[""]["dias_trab"] = "";
	$fieldLabelst_planilla_c[""]["haber_percibido"] = "Haber Percibido";
	$fieldToolTipst_planilla_c[""]["haber_percibido"] = "";
	$fieldLabelst_planilla_c[""]["reint"] = "Reint";
	$fieldToolTipst_planilla_c[""]["reint"] = "";
	$fieldLabelst_planilla_c[""]["bono_ant"] = "Bono Ant";
	$fieldToolTipst_planilla_c[""]["bono_ant"] = "";
	$fieldLabelst_planilla_c[""]["total_ganado"] = "Total Ganado";
	$fieldToolTipst_planilla_c[""]["total_ganado"] = "";
	$fieldLabelst_planilla_c[""]["devoluciones"] = "Devoluciones";
	$fieldToolTipst_planilla_c[""]["devoluciones"] = "";
	$fieldLabelst_planilla_c[""]["asig_familiar"] = "Asig Familiar";
	$fieldToolTipst_planilla_c[""]["asig_familiar"] = "";
	$fieldLabelst_planilla_c[""]["futuro_afp_10"] = "Futuro Afp 10";
	$fieldToolTipst_planilla_c[""]["futuro_afp_10"] = "";
	$fieldLabelst_planilla_c[""]["futuro_afp_riesgo_1_71"] = "Futuro Afp Riesgo 1 71";
	$fieldToolTipst_planilla_c[""]["futuro_afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla_c[""]["futuro_afp_05"] = "Futuro Afp 05";
	$fieldToolTipst_planilla_c[""]["futuro_afp_05"] = "";
	$fieldLabelst_planilla_c[""]["futuro_afp_ap_sol_0_5"] = "Futuro Afp Ap Sol 0 5";
	$fieldToolTipst_planilla_c[""]["futuro_afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla_c[""]["futuro_ans_1"] = "Futuro Ans 1";
	$fieldToolTipst_planilla_c[""]["futuro_ans_1"] = "";
	$fieldLabelst_planilla_c[""]["prev_afp_10"] = "Prev Afp 10";
	$fieldToolTipst_planilla_c[""]["prev_afp_10"] = "";
	$fieldLabelst_planilla_c[""]["prev_afp_riesgo_1_71"] = "Prev Afp Riesgo 1 71";
	$fieldToolTipst_planilla_c[""]["prev_afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla_c[""]["prev_afp_05"] = "Prev Afp 05";
	$fieldToolTipst_planilla_c[""]["prev_afp_05"] = "";
	$fieldLabelst_planilla_c[""]["prev_afp_ap_sol_0_5"] = "Prev Afp Ap Sol 0 5";
	$fieldToolTipst_planilla_c[""]["prev_afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla_c[""]["prev_ans_1"] = "Prev Ans 1";
	$fieldToolTipst_planilla_c[""]["prev_ans_1"] = "";
	$fieldLabelst_planilla_c[""]["rc_iva"] = "Rc Iva";
	$fieldToolTipst_planilla_c[""]["rc_iva"] = "";
	$fieldLabelst_planilla_c[""]["retenciones"] = "Retenciones";
	$fieldToolTipst_planilla_c[""]["retenciones"] = "";
	$fieldLabelst_planilla_c[""]["multa"] = "Multa";
	$fieldToolTipst_planilla_c[""]["multa"] = "";
	$fieldLabelst_planilla_c[""]["total_desc"] = "Total Desc";
	$fieldToolTipst_planilla_c[""]["total_desc"] = "";
	$fieldLabelst_planilla_c[""]["pre_natal"] = "Pre Natal";
	$fieldToolTipst_planilla_c[""]["pre_natal"] = "";
	$fieldLabelst_planilla_c[""]["natalidad"] = "Natalidad";
	$fieldToolTipst_planilla_c[""]["natalidad"] = "";
	$fieldLabelst_planilla_c[""]["lactancia"] = "Lactancia";
	$fieldToolTipst_planilla_c[""]["lactancia"] = "";
	$fieldLabelst_planilla_c[""]["sepelio"] = "Sepelio";
	$fieldToolTipst_planilla_c[""]["sepelio"] = "";
	$fieldLabelst_planilla_c[""]["mes"] = "Mes";
	$fieldToolTipst_planilla_c[""]["mes"] = "";
	$fieldLabelst_planilla_c[""]["gestion"] = "Gestion";
	$fieldToolTipst_planilla_c[""]["gestion"] = "";
	$fieldLabelst_planilla_c[""]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipst_planilla_c[""]["liquido_pagable"] = "";
	$fieldLabelst_planilla_c[""]["cod_afp"] = "Cod Afp";
	$fieldToolTipst_planilla_c[""]["cod_afp"] = "";
	$fieldLabelst_planilla_c[""]["cta_banco"] = "Cta Banco";
	$fieldToolTipst_planilla_c[""]["cta_banco"] = "";
	$fieldLabelst_planilla_c[""]["tipo_funcionario"] = "Tipo Funcionario";
	$fieldToolTipst_planilla_c[""]["tipo_funcionario"] = "";
	$fieldLabelst_planilla_c[""]["seguro_pat_10"] = "Seguro Pat 10";
	$fieldToolTipst_planilla_c[""]["seguro_pat_10"] = "";
	$fieldLabelst_planilla_c[""]["riesgo_pat_171"] = "Riesgo Pat 171";
	$fieldToolTipst_planilla_c[""]["riesgo_pat_171"] = "";
	$fieldLabelst_planilla_c[""]["pro_vivienda_pat_2"] = "Pro Vivienda Pat 2";
	$fieldToolTipst_planilla_c[""]["pro_vivienda_pat_2"] = "";
	$fieldLabelst_planilla_c[""]["ap_pat_sol_3"] = "Ap Pat Sol 3";
	$fieldToolTipst_planilla_c[""]["ap_pat_sol_3"] = "";
	if (count($fieldToolTipst_planilla_c[""]))
		$tdatat_planilla_c[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_planilla_c["English"] = array();
	$fieldToolTipst_planilla_c["English"] = array();
	$pageTitlest_planilla_c["English"] = array();
	$fieldLabelst_planilla_c["English"]["id_func"] = "Id Func";
	$fieldToolTipst_planilla_c["English"]["id_func"] = "";
	$fieldLabelst_planilla_c["English"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipst_planilla_c["English"]["fecha_nac"] = "";
	$fieldLabelst_planilla_c["English"]["sexo"] = "Sexo";
	$fieldToolTipst_planilla_c["English"]["sexo"] = "";
	$fieldLabelst_planilla_c["English"]["item_contrato"] = "Item Contrato";
	$fieldToolTipst_planilla_c["English"]["item_contrato"] = "";
	$fieldLabelst_planilla_c["English"]["unidad"] = "Unidad";
	$fieldToolTipst_planilla_c["English"]["unidad"] = "";
	$fieldLabelst_planilla_c["English"]["cargo"] = "Cargo";
	$fieldToolTipst_planilla_c["English"]["cargo"] = "";
	$fieldLabelst_planilla_c["English"]["paterno"] = "Paterno";
	$fieldToolTipst_planilla_c["English"]["paterno"] = "";
	$fieldLabelst_planilla_c["English"]["materno"] = "Materno";
	$fieldToolTipst_planilla_c["English"]["materno"] = "";
	$fieldLabelst_planilla_c["English"]["nombres"] = "Nombres";
	$fieldToolTipst_planilla_c["English"]["nombres"] = "";
	$fieldLabelst_planilla_c["English"]["ci"] = "Ci";
	$fieldToolTipst_planilla_c["English"]["ci"] = "";
	$fieldLabelst_planilla_c["English"]["exp"] = "Exp";
	$fieldToolTipst_planilla_c["English"]["exp"] = "";
	$fieldLabelst_planilla_c["English"]["nit"] = "Nit";
	$fieldToolTipst_planilla_c["English"]["nit"] = "";
	$fieldLabelst_planilla_c["English"]["fec_ingreso"] = "Fec Ingreso";
	$fieldToolTipst_planilla_c["English"]["fec_ingreso"] = "";
	$fieldLabelst_planilla_c["English"]["baja"] = "Baja";
	$fieldToolTipst_planilla_c["English"]["baja"] = "";
	$fieldLabelst_planilla_c["English"]["reasig"] = "Reasig";
	$fieldToolTipst_planilla_c["English"]["reasig"] = "";
	$fieldLabelst_planilla_c["English"]["haber_basico"] = "Haber Basico";
	$fieldToolTipst_planilla_c["English"]["haber_basico"] = "";
	$fieldLabelst_planilla_c["English"]["dias_trab"] = "Dias Trab";
	$fieldToolTipst_planilla_c["English"]["dias_trab"] = "";
	$fieldLabelst_planilla_c["English"]["haber_percibido"] = "Haber Percibido";
	$fieldToolTipst_planilla_c["English"]["haber_percibido"] = "";
	$fieldLabelst_planilla_c["English"]["reint"] = "Reint";
	$fieldToolTipst_planilla_c["English"]["reint"] = "";
	$fieldLabelst_planilla_c["English"]["bono_ant"] = "Bono Ant";
	$fieldToolTipst_planilla_c["English"]["bono_ant"] = "";
	$fieldLabelst_planilla_c["English"]["total_ganado"] = "Total Ganado";
	$fieldToolTipst_planilla_c["English"]["total_ganado"] = "";
	$fieldLabelst_planilla_c["English"]["devoluciones"] = "Devoluciones";
	$fieldToolTipst_planilla_c["English"]["devoluciones"] = "";
	$fieldLabelst_planilla_c["English"]["asig_familiar"] = "Asig Familiar";
	$fieldToolTipst_planilla_c["English"]["asig_familiar"] = "";
	$fieldLabelst_planilla_c["English"]["futuro_afp_10"] = "Futuro Afp 10";
	$fieldToolTipst_planilla_c["English"]["futuro_afp_10"] = "";
	$fieldLabelst_planilla_c["English"]["futuro_afp_riesgo_1_71"] = "Futuro Afp Riesgo 1 71";
	$fieldToolTipst_planilla_c["English"]["futuro_afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla_c["English"]["futuro_afp_05"] = "Futuro Afp 05";
	$fieldToolTipst_planilla_c["English"]["futuro_afp_05"] = "";
	$fieldLabelst_planilla_c["English"]["futuro_afp_ap_sol_0_5"] = "Futuro Afp Ap Sol 0 5";
	$fieldToolTipst_planilla_c["English"]["futuro_afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla_c["English"]["futuro_ans_1"] = "Futuro Ans 1";
	$fieldToolTipst_planilla_c["English"]["futuro_ans_1"] = "";
	$fieldLabelst_planilla_c["English"]["prev_afp_10"] = "Prev Afp 10";
	$fieldToolTipst_planilla_c["English"]["prev_afp_10"] = "";
	$fieldLabelst_planilla_c["English"]["prev_afp_riesgo_1_71"] = "Prev Afp Riesgo 1 71";
	$fieldToolTipst_planilla_c["English"]["prev_afp_riesgo_1_71"] = "";
	$fieldLabelst_planilla_c["English"]["prev_afp_05"] = "Prev Afp 05";
	$fieldToolTipst_planilla_c["English"]["prev_afp_05"] = "";
	$fieldLabelst_planilla_c["English"]["prev_afp_ap_sol_0_5"] = "Prev Afp Ap Sol 0 5";
	$fieldToolTipst_planilla_c["English"]["prev_afp_ap_sol_0_5"] = "";
	$fieldLabelst_planilla_c["English"]["prev_ans_1"] = "Prev Ans 1";
	$fieldToolTipst_planilla_c["English"]["prev_ans_1"] = "";
	$fieldLabelst_planilla_c["English"]["rc_iva"] = "Rc Iva";
	$fieldToolTipst_planilla_c["English"]["rc_iva"] = "";
	$fieldLabelst_planilla_c["English"]["retenciones"] = "Retenciones";
	$fieldToolTipst_planilla_c["English"]["retenciones"] = "";
	$fieldLabelst_planilla_c["English"]["multa"] = "Multa";
	$fieldToolTipst_planilla_c["English"]["multa"] = "";
	$fieldLabelst_planilla_c["English"]["total_desc"] = "Total Desc";
	$fieldToolTipst_planilla_c["English"]["total_desc"] = "";
	$fieldLabelst_planilla_c["English"]["pre_natal"] = "Pre Natal";
	$fieldToolTipst_planilla_c["English"]["pre_natal"] = "";
	$fieldLabelst_planilla_c["English"]["natalidad"] = "Natalidad";
	$fieldToolTipst_planilla_c["English"]["natalidad"] = "";
	$fieldLabelst_planilla_c["English"]["lactancia"] = "Lactancia";
	$fieldToolTipst_planilla_c["English"]["lactancia"] = "";
	$fieldLabelst_planilla_c["English"]["sepelio"] = "Sepelio";
	$fieldToolTipst_planilla_c["English"]["sepelio"] = "";
	$fieldLabelst_planilla_c["English"]["mes"] = "Mes";
	$fieldToolTipst_planilla_c["English"]["mes"] = "";
	$fieldLabelst_planilla_c["English"]["gestion"] = "Gestion";
	$fieldToolTipst_planilla_c["English"]["gestion"] = "";
	$fieldLabelst_planilla_c["English"]["liquido_pagable"] = "Liquido Pagable";
	$fieldToolTipst_planilla_c["English"]["liquido_pagable"] = "";
	$fieldLabelst_planilla_c["English"]["cod_afp"] = "Cod Afp";
	$fieldToolTipst_planilla_c["English"]["cod_afp"] = "";
	$fieldLabelst_planilla_c["English"]["cta_banco"] = "Cta Banco";
	$fieldToolTipst_planilla_c["English"]["cta_banco"] = "";
	$fieldLabelst_planilla_c["English"]["tipo_funcionario"] = "Tipo Funcionario";
	$fieldToolTipst_planilla_c["English"]["tipo_funcionario"] = "";
	$fieldLabelst_planilla_c["English"]["seguro_pat_10"] = "Seguro Pat 10";
	$fieldToolTipst_planilla_c["English"]["seguro_pat_10"] = "";
	$fieldLabelst_planilla_c["English"]["riesgo_pat_171"] = "Riesgo Pat 171";
	$fieldToolTipst_planilla_c["English"]["riesgo_pat_171"] = "";
	$fieldLabelst_planilla_c["English"]["pro_vivienda_pat_2"] = "Pro Vivienda Pat 2";
	$fieldToolTipst_planilla_c["English"]["pro_vivienda_pat_2"] = "";
	$fieldLabelst_planilla_c["English"]["ap_pat_sol_3"] = "Ap Pat Sol 3";
	$fieldToolTipst_planilla_c["English"]["ap_pat_sol_3"] = "";
	if (count($fieldToolTipst_planilla_c["English"]))
		$tdatat_planilla_c[".isUseToolTips"] = true;
}
	
	
	$tdatat_planilla_c[".NCSearch"] = true;



$tdatat_planilla_c[".shortTableName"] = "t_planilla_c";
$tdatat_planilla_c[".nSecOptions"] = 0;
$tdatat_planilla_c[".recsPerRowList"] = 1;
$tdatat_planilla_c[".recsPerRowPrint"] = 1;
$tdatat_planilla_c[".mainTableOwnerID"] = "";
$tdatat_planilla_c[".moveNext"] = 1;
$tdatat_planilla_c[".entityType"] = 0;

$tdatat_planilla_c[".strOriginalTableName"] = "t_planilla_c";




$tdatat_planilla_c[".showAddInPopup"] = false;

$tdatat_planilla_c[".showEditInPopup"] = false;

$tdatat_planilla_c[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatat_planilla_c[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatat_planilla_c[".fieldsForRegister"] = array();

$tdatat_planilla_c[".listAjax"] = false;

	$tdatat_planilla_c[".audit"] = false;

	$tdatat_planilla_c[".locking"] = false;



$tdatat_planilla_c[".list"] = true;

$tdatat_planilla_c[".view"] = true;


$tdatat_planilla_c[".exportTo"] = true;

$tdatat_planilla_c[".printFriendly"] = true;


$tdatat_planilla_c[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatat_planilla_c[".searchSaving"] = false;
//

$tdatat_planilla_c[".showSearchPanel"] = true;
		$tdatat_planilla_c[".flexibleSearch"] = true;		

if (isMobile())
	$tdatat_planilla_c[".isUseAjaxSuggest"] = false;
else 
	$tdatat_planilla_c[".isUseAjaxSuggest"] = true;

$tdatat_planilla_c[".rowHighlite"] = true;



$tdatat_planilla_c[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_planilla_c[".isUseTimeForSearch"] = false;





$tdatat_planilla_c[".allSearchFields"] = array();
$tdatat_planilla_c[".filterFields"] = array();
$tdatat_planilla_c[".requiredSearchFields"] = array();

$tdatat_planilla_c[".allSearchFields"][] = "id_func";
	$tdatat_planilla_c[".allSearchFields"][] = "fecha_nac";
	$tdatat_planilla_c[".allSearchFields"][] = "sexo";
	$tdatat_planilla_c[".allSearchFields"][] = "item_contrato";
	$tdatat_planilla_c[".allSearchFields"][] = "unidad";
	$tdatat_planilla_c[".allSearchFields"][] = "cargo";
	$tdatat_planilla_c[".allSearchFields"][] = "paterno";
	$tdatat_planilla_c[".allSearchFields"][] = "materno";
	$tdatat_planilla_c[".allSearchFields"][] = "nombres";
	$tdatat_planilla_c[".allSearchFields"][] = "ci";
	$tdatat_planilla_c[".allSearchFields"][] = "exp";
	$tdatat_planilla_c[".allSearchFields"][] = "nit";
	$tdatat_planilla_c[".allSearchFields"][] = "fec_ingreso";
	$tdatat_planilla_c[".allSearchFields"][] = "baja";
	$tdatat_planilla_c[".allSearchFields"][] = "reasig";
	$tdatat_planilla_c[".allSearchFields"][] = "haber_basico";
	$tdatat_planilla_c[".allSearchFields"][] = "dias_trab";
	$tdatat_planilla_c[".allSearchFields"][] = "haber_percibido";
	$tdatat_planilla_c[".allSearchFields"][] = "reint";
	$tdatat_planilla_c[".allSearchFields"][] = "bono_ant";
	$tdatat_planilla_c[".allSearchFields"][] = "total_ganado";
	$tdatat_planilla_c[".allSearchFields"][] = "devoluciones";
	$tdatat_planilla_c[".allSearchFields"][] = "asig_familiar";
	$tdatat_planilla_c[".allSearchFields"][] = "futuro_afp_10";
	$tdatat_planilla_c[".allSearchFields"][] = "futuro_afp_riesgo_1_71";
	$tdatat_planilla_c[".allSearchFields"][] = "futuro_afp_05";
	$tdatat_planilla_c[".allSearchFields"][] = "futuro_afp_ap_sol_0_5";
	$tdatat_planilla_c[".allSearchFields"][] = "futuro_ans_1";
	$tdatat_planilla_c[".allSearchFields"][] = "prev_afp_10";
	$tdatat_planilla_c[".allSearchFields"][] = "prev_afp_riesgo_1_71";
	$tdatat_planilla_c[".allSearchFields"][] = "prev_afp_05";
	$tdatat_planilla_c[".allSearchFields"][] = "prev_afp_ap_sol_0_5";
	$tdatat_planilla_c[".allSearchFields"][] = "prev_ans_1";
	$tdatat_planilla_c[".allSearchFields"][] = "rc_iva";
	$tdatat_planilla_c[".allSearchFields"][] = "retenciones";
	$tdatat_planilla_c[".allSearchFields"][] = "multa";
	$tdatat_planilla_c[".allSearchFields"][] = "total_desc";
	$tdatat_planilla_c[".allSearchFields"][] = "pre_natal";
	$tdatat_planilla_c[".allSearchFields"][] = "natalidad";
	$tdatat_planilla_c[".allSearchFields"][] = "lactancia";
	$tdatat_planilla_c[".allSearchFields"][] = "sepelio";
	$tdatat_planilla_c[".allSearchFields"][] = "mes";
	$tdatat_planilla_c[".allSearchFields"][] = "gestion";
	$tdatat_planilla_c[".allSearchFields"][] = "liquido_pagable";
	$tdatat_planilla_c[".allSearchFields"][] = "cod_afp";
	$tdatat_planilla_c[".allSearchFields"][] = "cta_banco";
	$tdatat_planilla_c[".allSearchFields"][] = "tipo_funcionario";
	$tdatat_planilla_c[".allSearchFields"][] = "ap_pat_sol_3";
	$tdatat_planilla_c[".allSearchFields"][] = "seguro_pat_10";
	$tdatat_planilla_c[".allSearchFields"][] = "riesgo_pat_171";
	$tdatat_planilla_c[".allSearchFields"][] = "pro_vivienda_pat_2";
	

$tdatat_planilla_c[".googleLikeFields"] = array();
$tdatat_planilla_c[".googleLikeFields"][] = "id_func";
$tdatat_planilla_c[".googleLikeFields"][] = "fecha_nac";
$tdatat_planilla_c[".googleLikeFields"][] = "sexo";
$tdatat_planilla_c[".googleLikeFields"][] = "item_contrato";
$tdatat_planilla_c[".googleLikeFields"][] = "unidad";
$tdatat_planilla_c[".googleLikeFields"][] = "cargo";
$tdatat_planilla_c[".googleLikeFields"][] = "paterno";
$tdatat_planilla_c[".googleLikeFields"][] = "materno";
$tdatat_planilla_c[".googleLikeFields"][] = "nombres";
$tdatat_planilla_c[".googleLikeFields"][] = "ci";
$tdatat_planilla_c[".googleLikeFields"][] = "exp";
$tdatat_planilla_c[".googleLikeFields"][] = "nit";
$tdatat_planilla_c[".googleLikeFields"][] = "fec_ingreso";
$tdatat_planilla_c[".googleLikeFields"][] = "baja";
$tdatat_planilla_c[".googleLikeFields"][] = "reasig";
$tdatat_planilla_c[".googleLikeFields"][] = "haber_basico";
$tdatat_planilla_c[".googleLikeFields"][] = "dias_trab";
$tdatat_planilla_c[".googleLikeFields"][] = "haber_percibido";
$tdatat_planilla_c[".googleLikeFields"][] = "reint";
$tdatat_planilla_c[".googleLikeFields"][] = "bono_ant";
$tdatat_planilla_c[".googleLikeFields"][] = "total_ganado";
$tdatat_planilla_c[".googleLikeFields"][] = "devoluciones";
$tdatat_planilla_c[".googleLikeFields"][] = "asig_familiar";
$tdatat_planilla_c[".googleLikeFields"][] = "futuro_afp_10";
$tdatat_planilla_c[".googleLikeFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_c[".googleLikeFields"][] = "futuro_afp_05";
$tdatat_planilla_c[".googleLikeFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_c[".googleLikeFields"][] = "futuro_ans_1";
$tdatat_planilla_c[".googleLikeFields"][] = "prev_afp_10";
$tdatat_planilla_c[".googleLikeFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_c[".googleLikeFields"][] = "prev_afp_05";
$tdatat_planilla_c[".googleLikeFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_c[".googleLikeFields"][] = "prev_ans_1";
$tdatat_planilla_c[".googleLikeFields"][] = "rc_iva";
$tdatat_planilla_c[".googleLikeFields"][] = "retenciones";
$tdatat_planilla_c[".googleLikeFields"][] = "multa";
$tdatat_planilla_c[".googleLikeFields"][] = "total_desc";
$tdatat_planilla_c[".googleLikeFields"][] = "pre_natal";
$tdatat_planilla_c[".googleLikeFields"][] = "natalidad";
$tdatat_planilla_c[".googleLikeFields"][] = "lactancia";
$tdatat_planilla_c[".googleLikeFields"][] = "sepelio";
$tdatat_planilla_c[".googleLikeFields"][] = "seguro_pat_10";
$tdatat_planilla_c[".googleLikeFields"][] = "riesgo_pat_171";
$tdatat_planilla_c[".googleLikeFields"][] = "pro_vivienda_pat_2";
$tdatat_planilla_c[".googleLikeFields"][] = "ap_pat_sol_3";
$tdatat_planilla_c[".googleLikeFields"][] = "mes";
$tdatat_planilla_c[".googleLikeFields"][] = "gestion";
$tdatat_planilla_c[".googleLikeFields"][] = "liquido_pagable";
$tdatat_planilla_c[".googleLikeFields"][] = "cod_afp";
$tdatat_planilla_c[".googleLikeFields"][] = "cta_banco";
$tdatat_planilla_c[".googleLikeFields"][] = "tipo_funcionario";


$tdatat_planilla_c[".advSearchFields"] = array();
$tdatat_planilla_c[".advSearchFields"][] = "id_func";
$tdatat_planilla_c[".advSearchFields"][] = "fecha_nac";
$tdatat_planilla_c[".advSearchFields"][] = "sexo";
$tdatat_planilla_c[".advSearchFields"][] = "item_contrato";
$tdatat_planilla_c[".advSearchFields"][] = "unidad";
$tdatat_planilla_c[".advSearchFields"][] = "cargo";
$tdatat_planilla_c[".advSearchFields"][] = "paterno";
$tdatat_planilla_c[".advSearchFields"][] = "materno";
$tdatat_planilla_c[".advSearchFields"][] = "nombres";
$tdatat_planilla_c[".advSearchFields"][] = "ci";
$tdatat_planilla_c[".advSearchFields"][] = "exp";
$tdatat_planilla_c[".advSearchFields"][] = "nit";
$tdatat_planilla_c[".advSearchFields"][] = "fec_ingreso";
$tdatat_planilla_c[".advSearchFields"][] = "baja";
$tdatat_planilla_c[".advSearchFields"][] = "reasig";
$tdatat_planilla_c[".advSearchFields"][] = "haber_basico";
$tdatat_planilla_c[".advSearchFields"][] = "dias_trab";
$tdatat_planilla_c[".advSearchFields"][] = "haber_percibido";
$tdatat_planilla_c[".advSearchFields"][] = "reint";
$tdatat_planilla_c[".advSearchFields"][] = "bono_ant";
$tdatat_planilla_c[".advSearchFields"][] = "total_ganado";
$tdatat_planilla_c[".advSearchFields"][] = "devoluciones";
$tdatat_planilla_c[".advSearchFields"][] = "asig_familiar";
$tdatat_planilla_c[".advSearchFields"][] = "futuro_afp_10";
$tdatat_planilla_c[".advSearchFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_c[".advSearchFields"][] = "futuro_afp_05";
$tdatat_planilla_c[".advSearchFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_c[".advSearchFields"][] = "futuro_ans_1";
$tdatat_planilla_c[".advSearchFields"][] = "prev_afp_10";
$tdatat_planilla_c[".advSearchFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_c[".advSearchFields"][] = "prev_afp_05";
$tdatat_planilla_c[".advSearchFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_c[".advSearchFields"][] = "prev_ans_1";
$tdatat_planilla_c[".advSearchFields"][] = "rc_iva";
$tdatat_planilla_c[".advSearchFields"][] = "retenciones";
$tdatat_planilla_c[".advSearchFields"][] = "multa";
$tdatat_planilla_c[".advSearchFields"][] = "total_desc";
$tdatat_planilla_c[".advSearchFields"][] = "pre_natal";
$tdatat_planilla_c[".advSearchFields"][] = "natalidad";
$tdatat_planilla_c[".advSearchFields"][] = "lactancia";
$tdatat_planilla_c[".advSearchFields"][] = "sepelio";
$tdatat_planilla_c[".advSearchFields"][] = "mes";
$tdatat_planilla_c[".advSearchFields"][] = "gestion";
$tdatat_planilla_c[".advSearchFields"][] = "liquido_pagable";
$tdatat_planilla_c[".advSearchFields"][] = "cod_afp";
$tdatat_planilla_c[".advSearchFields"][] = "cta_banco";
$tdatat_planilla_c[".advSearchFields"][] = "tipo_funcionario";
$tdatat_planilla_c[".advSearchFields"][] = "ap_pat_sol_3";
$tdatat_planilla_c[".advSearchFields"][] = "seguro_pat_10";
$tdatat_planilla_c[".advSearchFields"][] = "riesgo_pat_171";
$tdatat_planilla_c[".advSearchFields"][] = "pro_vivienda_pat_2";

$tdatat_planilla_c[".tableType"] = "list";

$tdatat_planilla_c[".printerPageOrientation"] = 0;
$tdatat_planilla_c[".nPrinterPageScale"] = 100;

$tdatat_planilla_c[".nPrinterSplitRecords"] = 40;

$tdatat_planilla_c[".nPrinterPDFSplitRecords"] = 40;



$tdatat_planilla_c[".geocodingEnabled"] = false;




	





// view page pdf
$tdatat_planilla_c[".isViewPagePDF"] = true;
$tdatat_planilla_c[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatat_planilla_c[".isPrinterPagePDF"] = true;
$tdatat_planilla_c[".nPrinterPagePDFScale"] = 100;

$tdatat_planilla_c[".totalsFields"] = array();
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "haber_basico", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "haber_percibido", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "reint", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "bono_ant", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "total_ganado", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "devoluciones", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "asig_familiar", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "futuro_afp_10", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "futuro_afp_riesgo_1_71", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "futuro_afp_05", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "futuro_afp_ap_sol_0_5", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "futuro_ans_1", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "prev_afp_10", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "prev_afp_riesgo_1_71", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "prev_afp_05", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "prev_afp_ap_sol_0_5", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "prev_ans_1", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "rc_iva", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "retenciones", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "multa", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "total_desc", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "pre_natal", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "natalidad", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "lactancia", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "sepelio", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatat_planilla_c[".totalsFields"][] = array(
	"fName" => "liquido_pagable", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');

$tdatat_planilla_c[".pageSize"] = 20;

$tdatat_planilla_c[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_planilla_c[".strOrderBy"] = $tstrOrderBy;

$tdatat_planilla_c[".orderindexes"] = array();

$tdatat_planilla_c[".sqlHead"] = "SELECT id_func,  	fecha_nac,  	sexo,  	item_contrato,  	unidad,  	cargo,  	paterno,  	materno,  	nombres,  	ci,  	exp,  	nit,  	fec_ingreso,  	baja,  	reasig,  	haber_basico,  	dias_trab,  	haber_percibido,  	reint,  	bono_ant,  	total_ganado,  	devoluciones,  	asig_familiar,  	futuro_afp_10,  	futuro_afp_riesgo_1_71,  	futuro_afp_05,  	futuro_afp_ap_sol_0_5,  	futuro_ans_1,  	prev_afp_10,  	prev_afp_riesgo_1_71,  	prev_afp_05,  	prev_afp_ap_sol_0_5,  	prev_ans_1,  	rc_iva,  	retenciones,  	multa,  	total_desc,  	pre_natal,  	natalidad,  	lactancia,  	sepelio,  	seguro_pat_10,  	riesgo_pat_171,  	pro_vivienda_pat_2,  	ap_pat_sol_3,  	mes,  	gestion,  	liquido_pagable,  	cod_afp,  	cta_banco,  	tipo_funcionario";
$tdatat_planilla_c[".sqlFrom"] = "FROM t_planilla_c";
$tdatat_planilla_c[".sqlWhereExpr"] = "";
$tdatat_planilla_c[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_planilla_c[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_planilla_c[".arrGroupsPerPage"] = $arrGPP;

$tdatat_planilla_c[".highlightSearchResults"] = true;

$tableKeyst_planilla_c = array();
$tableKeyst_planilla_c[] = "id_func";
$tdatat_planilla_c[".Keys"] = $tableKeyst_planilla_c;

$tdatat_planilla_c[".listFields"] = array();
$tdatat_planilla_c[".listFields"][] = "id_func";
$tdatat_planilla_c[".listFields"][] = "fecha_nac";
$tdatat_planilla_c[".listFields"][] = "sexo";
$tdatat_planilla_c[".listFields"][] = "item_contrato";
$tdatat_planilla_c[".listFields"][] = "unidad";
$tdatat_planilla_c[".listFields"][] = "cargo";
$tdatat_planilla_c[".listFields"][] = "paterno";
$tdatat_planilla_c[".listFields"][] = "materno";
$tdatat_planilla_c[".listFields"][] = "nombres";
$tdatat_planilla_c[".listFields"][] = "ci";
$tdatat_planilla_c[".listFields"][] = "exp";
$tdatat_planilla_c[".listFields"][] = "nit";
$tdatat_planilla_c[".listFields"][] = "fec_ingreso";
$tdatat_planilla_c[".listFields"][] = "baja";
$tdatat_planilla_c[".listFields"][] = "reasig";
$tdatat_planilla_c[".listFields"][] = "haber_basico";
$tdatat_planilla_c[".listFields"][] = "dias_trab";
$tdatat_planilla_c[".listFields"][] = "haber_percibido";
$tdatat_planilla_c[".listFields"][] = "reint";
$tdatat_planilla_c[".listFields"][] = "bono_ant";
$tdatat_planilla_c[".listFields"][] = "total_ganado";
$tdatat_planilla_c[".listFields"][] = "devoluciones";
$tdatat_planilla_c[".listFields"][] = "asig_familiar";
$tdatat_planilla_c[".listFields"][] = "futuro_afp_10";
$tdatat_planilla_c[".listFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_c[".listFields"][] = "futuro_afp_05";
$tdatat_planilla_c[".listFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_c[".listFields"][] = "futuro_ans_1";
$tdatat_planilla_c[".listFields"][] = "prev_afp_10";
$tdatat_planilla_c[".listFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_c[".listFields"][] = "prev_afp_05";
$tdatat_planilla_c[".listFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_c[".listFields"][] = "prev_ans_1";
$tdatat_planilla_c[".listFields"][] = "rc_iva";
$tdatat_planilla_c[".listFields"][] = "retenciones";
$tdatat_planilla_c[".listFields"][] = "multa";
$tdatat_planilla_c[".listFields"][] = "total_desc";
$tdatat_planilla_c[".listFields"][] = "pre_natal";
$tdatat_planilla_c[".listFields"][] = "natalidad";
$tdatat_planilla_c[".listFields"][] = "lactancia";
$tdatat_planilla_c[".listFields"][] = "sepelio";
$tdatat_planilla_c[".listFields"][] = "mes";
$tdatat_planilla_c[".listFields"][] = "gestion";
$tdatat_planilla_c[".listFields"][] = "liquido_pagable";
$tdatat_planilla_c[".listFields"][] = "cod_afp";
$tdatat_planilla_c[".listFields"][] = "cta_banco";
$tdatat_planilla_c[".listFields"][] = "tipo_funcionario";
$tdatat_planilla_c[".listFields"][] = "ap_pat_sol_3";
$tdatat_planilla_c[".listFields"][] = "seguro_pat_10";
$tdatat_planilla_c[".listFields"][] = "riesgo_pat_171";
$tdatat_planilla_c[".listFields"][] = "pro_vivienda_pat_2";

$tdatat_planilla_c[".hideMobileList"] = array();


$tdatat_planilla_c[".viewFields"] = array();
$tdatat_planilla_c[".viewFields"][] = "id_func";
$tdatat_planilla_c[".viewFields"][] = "fecha_nac";
$tdatat_planilla_c[".viewFields"][] = "sexo";
$tdatat_planilla_c[".viewFields"][] = "item_contrato";
$tdatat_planilla_c[".viewFields"][] = "unidad";
$tdatat_planilla_c[".viewFields"][] = "cargo";
$tdatat_planilla_c[".viewFields"][] = "paterno";
$tdatat_planilla_c[".viewFields"][] = "materno";
$tdatat_planilla_c[".viewFields"][] = "nombres";
$tdatat_planilla_c[".viewFields"][] = "ci";
$tdatat_planilla_c[".viewFields"][] = "exp";
$tdatat_planilla_c[".viewFields"][] = "nit";
$tdatat_planilla_c[".viewFields"][] = "fec_ingreso";
$tdatat_planilla_c[".viewFields"][] = "baja";
$tdatat_planilla_c[".viewFields"][] = "reasig";
$tdatat_planilla_c[".viewFields"][] = "haber_basico";
$tdatat_planilla_c[".viewFields"][] = "dias_trab";
$tdatat_planilla_c[".viewFields"][] = "haber_percibido";
$tdatat_planilla_c[".viewFields"][] = "reint";
$tdatat_planilla_c[".viewFields"][] = "bono_ant";
$tdatat_planilla_c[".viewFields"][] = "total_ganado";
$tdatat_planilla_c[".viewFields"][] = "devoluciones";
$tdatat_planilla_c[".viewFields"][] = "asig_familiar";
$tdatat_planilla_c[".viewFields"][] = "futuro_afp_10";
$tdatat_planilla_c[".viewFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_c[".viewFields"][] = "futuro_afp_05";
$tdatat_planilla_c[".viewFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_c[".viewFields"][] = "futuro_ans_1";
$tdatat_planilla_c[".viewFields"][] = "prev_afp_10";
$tdatat_planilla_c[".viewFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_c[".viewFields"][] = "prev_afp_05";
$tdatat_planilla_c[".viewFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_c[".viewFields"][] = "prev_ans_1";
$tdatat_planilla_c[".viewFields"][] = "rc_iva";
$tdatat_planilla_c[".viewFields"][] = "retenciones";
$tdatat_planilla_c[".viewFields"][] = "multa";
$tdatat_planilla_c[".viewFields"][] = "total_desc";
$tdatat_planilla_c[".viewFields"][] = "pre_natal";
$tdatat_planilla_c[".viewFields"][] = "natalidad";
$tdatat_planilla_c[".viewFields"][] = "lactancia";
$tdatat_planilla_c[".viewFields"][] = "sepelio";
$tdatat_planilla_c[".viewFields"][] = "mes";
$tdatat_planilla_c[".viewFields"][] = "gestion";
$tdatat_planilla_c[".viewFields"][] = "liquido_pagable";
$tdatat_planilla_c[".viewFields"][] = "cod_afp";
$tdatat_planilla_c[".viewFields"][] = "cta_banco";
$tdatat_planilla_c[".viewFields"][] = "tipo_funcionario";
$tdatat_planilla_c[".viewFields"][] = "ap_pat_sol_3";
$tdatat_planilla_c[".viewFields"][] = "seguro_pat_10";
$tdatat_planilla_c[".viewFields"][] = "riesgo_pat_171";
$tdatat_planilla_c[".viewFields"][] = "pro_vivienda_pat_2";

$tdatat_planilla_c[".addFields"] = array();

$tdatat_planilla_c[".masterListFields"] = array();
$tdatat_planilla_c[".masterListFields"][] = "id_func";
$tdatat_planilla_c[".masterListFields"][] = "fecha_nac";
$tdatat_planilla_c[".masterListFields"][] = "sexo";
$tdatat_planilla_c[".masterListFields"][] = "item_contrato";
$tdatat_planilla_c[".masterListFields"][] = "unidad";
$tdatat_planilla_c[".masterListFields"][] = "cargo";
$tdatat_planilla_c[".masterListFields"][] = "paterno";
$tdatat_planilla_c[".masterListFields"][] = "materno";
$tdatat_planilla_c[".masterListFields"][] = "nombres";
$tdatat_planilla_c[".masterListFields"][] = "ci";
$tdatat_planilla_c[".masterListFields"][] = "exp";
$tdatat_planilla_c[".masterListFields"][] = "nit";
$tdatat_planilla_c[".masterListFields"][] = "fec_ingreso";
$tdatat_planilla_c[".masterListFields"][] = "baja";
$tdatat_planilla_c[".masterListFields"][] = "reasig";
$tdatat_planilla_c[".masterListFields"][] = "haber_basico";
$tdatat_planilla_c[".masterListFields"][] = "dias_trab";
$tdatat_planilla_c[".masterListFields"][] = "haber_percibido";
$tdatat_planilla_c[".masterListFields"][] = "reint";
$tdatat_planilla_c[".masterListFields"][] = "bono_ant";
$tdatat_planilla_c[".masterListFields"][] = "total_ganado";
$tdatat_planilla_c[".masterListFields"][] = "devoluciones";
$tdatat_planilla_c[".masterListFields"][] = "asig_familiar";
$tdatat_planilla_c[".masterListFields"][] = "futuro_afp_10";
$tdatat_planilla_c[".masterListFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_c[".masterListFields"][] = "futuro_afp_05";
$tdatat_planilla_c[".masterListFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_c[".masterListFields"][] = "futuro_ans_1";
$tdatat_planilla_c[".masterListFields"][] = "prev_afp_10";
$tdatat_planilla_c[".masterListFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_c[".masterListFields"][] = "prev_afp_05";
$tdatat_planilla_c[".masterListFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_c[".masterListFields"][] = "prev_ans_1";
$tdatat_planilla_c[".masterListFields"][] = "rc_iva";
$tdatat_planilla_c[".masterListFields"][] = "retenciones";
$tdatat_planilla_c[".masterListFields"][] = "multa";
$tdatat_planilla_c[".masterListFields"][] = "total_desc";
$tdatat_planilla_c[".masterListFields"][] = "pre_natal";
$tdatat_planilla_c[".masterListFields"][] = "natalidad";
$tdatat_planilla_c[".masterListFields"][] = "lactancia";
$tdatat_planilla_c[".masterListFields"][] = "sepelio";
$tdatat_planilla_c[".masterListFields"][] = "mes";
$tdatat_planilla_c[".masterListFields"][] = "gestion";
$tdatat_planilla_c[".masterListFields"][] = "liquido_pagable";
$tdatat_planilla_c[".masterListFields"][] = "cod_afp";
$tdatat_planilla_c[".masterListFields"][] = "cta_banco";
$tdatat_planilla_c[".masterListFields"][] = "tipo_funcionario";
$tdatat_planilla_c[".masterListFields"][] = "ap_pat_sol_3";
$tdatat_planilla_c[".masterListFields"][] = "seguro_pat_10";
$tdatat_planilla_c[".masterListFields"][] = "riesgo_pat_171";
$tdatat_planilla_c[".masterListFields"][] = "pro_vivienda_pat_2";

$tdatat_planilla_c[".inlineAddFields"] = array();

$tdatat_planilla_c[".editFields"] = array();

$tdatat_planilla_c[".inlineEditFields"] = array();

$tdatat_planilla_c[".exportFields"] = array();
$tdatat_planilla_c[".exportFields"][] = "id_func";
$tdatat_planilla_c[".exportFields"][] = "fecha_nac";
$tdatat_planilla_c[".exportFields"][] = "sexo";
$tdatat_planilla_c[".exportFields"][] = "item_contrato";
$tdatat_planilla_c[".exportFields"][] = "unidad";
$tdatat_planilla_c[".exportFields"][] = "cargo";
$tdatat_planilla_c[".exportFields"][] = "paterno";
$tdatat_planilla_c[".exportFields"][] = "materno";
$tdatat_planilla_c[".exportFields"][] = "nombres";
$tdatat_planilla_c[".exportFields"][] = "ci";
$tdatat_planilla_c[".exportFields"][] = "exp";
$tdatat_planilla_c[".exportFields"][] = "nit";
$tdatat_planilla_c[".exportFields"][] = "fec_ingreso";
$tdatat_planilla_c[".exportFields"][] = "baja";
$tdatat_planilla_c[".exportFields"][] = "reasig";
$tdatat_planilla_c[".exportFields"][] = "haber_basico";
$tdatat_planilla_c[".exportFields"][] = "dias_trab";
$tdatat_planilla_c[".exportFields"][] = "haber_percibido";
$tdatat_planilla_c[".exportFields"][] = "reint";
$tdatat_planilla_c[".exportFields"][] = "bono_ant";
$tdatat_planilla_c[".exportFields"][] = "total_ganado";
$tdatat_planilla_c[".exportFields"][] = "devoluciones";
$tdatat_planilla_c[".exportFields"][] = "asig_familiar";
$tdatat_planilla_c[".exportFields"][] = "futuro_afp_10";
$tdatat_planilla_c[".exportFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_c[".exportFields"][] = "futuro_afp_05";
$tdatat_planilla_c[".exportFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_c[".exportFields"][] = "futuro_ans_1";
$tdatat_planilla_c[".exportFields"][] = "prev_afp_10";
$tdatat_planilla_c[".exportFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_c[".exportFields"][] = "prev_afp_05";
$tdatat_planilla_c[".exportFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_c[".exportFields"][] = "prev_ans_1";
$tdatat_planilla_c[".exportFields"][] = "rc_iva";
$tdatat_planilla_c[".exportFields"][] = "retenciones";
$tdatat_planilla_c[".exportFields"][] = "multa";
$tdatat_planilla_c[".exportFields"][] = "total_desc";
$tdatat_planilla_c[".exportFields"][] = "pre_natal";
$tdatat_planilla_c[".exportFields"][] = "natalidad";
$tdatat_planilla_c[".exportFields"][] = "lactancia";
$tdatat_planilla_c[".exportFields"][] = "sepelio";
$tdatat_planilla_c[".exportFields"][] = "mes";
$tdatat_planilla_c[".exportFields"][] = "gestion";
$tdatat_planilla_c[".exportFields"][] = "liquido_pagable";
$tdatat_planilla_c[".exportFields"][] = "cod_afp";
$tdatat_planilla_c[".exportFields"][] = "cta_banco";
$tdatat_planilla_c[".exportFields"][] = "tipo_funcionario";
$tdatat_planilla_c[".exportFields"][] = "ap_pat_sol_3";
$tdatat_planilla_c[".exportFields"][] = "seguro_pat_10";
$tdatat_planilla_c[".exportFields"][] = "riesgo_pat_171";
$tdatat_planilla_c[".exportFields"][] = "pro_vivienda_pat_2";

$tdatat_planilla_c[".importFields"] = array();

$tdatat_planilla_c[".printFields"] = array();
$tdatat_planilla_c[".printFields"][] = "id_func";
$tdatat_planilla_c[".printFields"][] = "fecha_nac";
$tdatat_planilla_c[".printFields"][] = "sexo";
$tdatat_planilla_c[".printFields"][] = "item_contrato";
$tdatat_planilla_c[".printFields"][] = "unidad";
$tdatat_planilla_c[".printFields"][] = "cargo";
$tdatat_planilla_c[".printFields"][] = "paterno";
$tdatat_planilla_c[".printFields"][] = "materno";
$tdatat_planilla_c[".printFields"][] = "nombres";
$tdatat_planilla_c[".printFields"][] = "ci";
$tdatat_planilla_c[".printFields"][] = "exp";
$tdatat_planilla_c[".printFields"][] = "nit";
$tdatat_planilla_c[".printFields"][] = "fec_ingreso";
$tdatat_planilla_c[".printFields"][] = "baja";
$tdatat_planilla_c[".printFields"][] = "reasig";
$tdatat_planilla_c[".printFields"][] = "haber_basico";
$tdatat_planilla_c[".printFields"][] = "dias_trab";
$tdatat_planilla_c[".printFields"][] = "haber_percibido";
$tdatat_planilla_c[".printFields"][] = "reint";
$tdatat_planilla_c[".printFields"][] = "bono_ant";
$tdatat_planilla_c[".printFields"][] = "total_ganado";
$tdatat_planilla_c[".printFields"][] = "devoluciones";
$tdatat_planilla_c[".printFields"][] = "asig_familiar";
$tdatat_planilla_c[".printFields"][] = "futuro_afp_10";
$tdatat_planilla_c[".printFields"][] = "futuro_afp_riesgo_1_71";
$tdatat_planilla_c[".printFields"][] = "futuro_afp_05";
$tdatat_planilla_c[".printFields"][] = "futuro_afp_ap_sol_0_5";
$tdatat_planilla_c[".printFields"][] = "futuro_ans_1";
$tdatat_planilla_c[".printFields"][] = "prev_afp_10";
$tdatat_planilla_c[".printFields"][] = "prev_afp_riesgo_1_71";
$tdatat_planilla_c[".printFields"][] = "prev_afp_05";
$tdatat_planilla_c[".printFields"][] = "prev_afp_ap_sol_0_5";
$tdatat_planilla_c[".printFields"][] = "prev_ans_1";
$tdatat_planilla_c[".printFields"][] = "rc_iva";
$tdatat_planilla_c[".printFields"][] = "retenciones";
$tdatat_planilla_c[".printFields"][] = "multa";
$tdatat_planilla_c[".printFields"][] = "total_desc";
$tdatat_planilla_c[".printFields"][] = "pre_natal";
$tdatat_planilla_c[".printFields"][] = "natalidad";
$tdatat_planilla_c[".printFields"][] = "lactancia";
$tdatat_planilla_c[".printFields"][] = "sepelio";
$tdatat_planilla_c[".printFields"][] = "mes";
$tdatat_planilla_c[".printFields"][] = "gestion";
$tdatat_planilla_c[".printFields"][] = "liquido_pagable";
$tdatat_planilla_c[".printFields"][] = "cod_afp";
$tdatat_planilla_c[".printFields"][] = "cta_banco";
$tdatat_planilla_c[".printFields"][] = "tipo_funcionario";
$tdatat_planilla_c[".printFields"][] = "ap_pat_sol_3";
$tdatat_planilla_c[".printFields"][] = "seguro_pat_10";
$tdatat_planilla_c[".printFields"][] = "riesgo_pat_171";
$tdatat_planilla_c[".printFields"][] = "pro_vivienda_pat_2";

//	id_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_func";
	$fdata["GoodName"] = "id_func";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","id_func"); 
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

	

	
	$tdatat_planilla_c["id_func"] = $fdata;
//	fecha_nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha_nac";
	$fdata["GoodName"] = "fecha_nac";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","fecha_nac"); 
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

	

	
	$tdatat_planilla_c["fecha_nac"] = $fdata;
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","sexo"); 
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

	

	
	$tdatat_planilla_c["sexo"] = $fdata;
//	item_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "item_contrato";
	$fdata["GoodName"] = "item_contrato";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","item_contrato"); 
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

	

	
	$tdatat_planilla_c["item_contrato"] = $fdata;
//	unidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "unidad";
	$fdata["GoodName"] = "unidad";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","unidad"); 
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

	

	
	$tdatat_planilla_c["unidad"] = $fdata;
//	cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cargo";
	$fdata["GoodName"] = "cargo";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","cargo"); 
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

	

	
	$tdatat_planilla_c["cargo"] = $fdata;
//	paterno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "paterno";
	$fdata["GoodName"] = "paterno";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","paterno"); 
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

	

	
	$tdatat_planilla_c["paterno"] = $fdata;
//	materno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "materno";
	$fdata["GoodName"] = "materno";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","materno"); 
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

	

	
	$tdatat_planilla_c["materno"] = $fdata;
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","nombres"); 
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

	

	
	$tdatat_planilla_c["nombres"] = $fdata;
//	ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ci";
	$fdata["GoodName"] = "ci";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","ci"); 
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

	

	
	$tdatat_planilla_c["ci"] = $fdata;
//	exp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "exp";
	$fdata["GoodName"] = "exp";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","exp"); 
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

	

	
	$tdatat_planilla_c["exp"] = $fdata;
//	nit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "nit";
	$fdata["GoodName"] = "nit";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","nit"); 
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

	

	
	$tdatat_planilla_c["nit"] = $fdata;
//	fec_ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "fec_ingreso";
	$fdata["GoodName"] = "fec_ingreso";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","fec_ingreso"); 
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

	

	
	$tdatat_planilla_c["fec_ingreso"] = $fdata;
//	baja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "baja";
	$fdata["GoodName"] = "baja";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","baja"); 
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

	

	
	$tdatat_planilla_c["baja"] = $fdata;
//	reasig
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "reasig";
	$fdata["GoodName"] = "reasig";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","reasig"); 
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

	

	
	$tdatat_planilla_c["reasig"] = $fdata;
//	haber_basico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "haber_basico";
	$fdata["GoodName"] = "haber_basico";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","haber_basico"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["haber_basico"] = $fdata;
//	dias_trab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "dias_trab";
	$fdata["GoodName"] = "dias_trab";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","dias_trab"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["dias_trab"] = $fdata;
//	haber_percibido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "haber_percibido";
	$fdata["GoodName"] = "haber_percibido";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","haber_percibido"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["haber_percibido"] = $fdata;
//	reint
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "reint";
	$fdata["GoodName"] = "reint";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","reint"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["reint"] = $fdata;
//	bono_ant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "bono_ant";
	$fdata["GoodName"] = "bono_ant";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","bono_ant"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["bono_ant"] = $fdata;
//	total_ganado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "total_ganado";
	$fdata["GoodName"] = "total_ganado";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","total_ganado"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["total_ganado"] = $fdata;
//	devoluciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "devoluciones";
	$fdata["GoodName"] = "devoluciones";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","devoluciones"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["devoluciones"] = $fdata;
//	asig_familiar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "asig_familiar";
	$fdata["GoodName"] = "asig_familiar";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","asig_familiar"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["asig_familiar"] = $fdata;
//	futuro_afp_10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "futuro_afp_10";
	$fdata["GoodName"] = "futuro_afp_10";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","futuro_afp_10"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["futuro_afp_10"] = $fdata;
//	futuro_afp_riesgo_1_71
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "futuro_afp_riesgo_1_71";
	$fdata["GoodName"] = "futuro_afp_riesgo_1_71";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","futuro_afp_riesgo_1_71"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["futuro_afp_riesgo_1_71"] = $fdata;
//	futuro_afp_05
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "futuro_afp_05";
	$fdata["GoodName"] = "futuro_afp_05";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","futuro_afp_05"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["futuro_afp_05"] = $fdata;
//	futuro_afp_ap_sol_0_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "futuro_afp_ap_sol_0_5";
	$fdata["GoodName"] = "futuro_afp_ap_sol_0_5";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","futuro_afp_ap_sol_0_5"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["futuro_afp_ap_sol_0_5"] = $fdata;
//	futuro_ans_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "futuro_ans_1";
	$fdata["GoodName"] = "futuro_ans_1";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","futuro_ans_1"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["futuro_ans_1"] = $fdata;
//	prev_afp_10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "prev_afp_10";
	$fdata["GoodName"] = "prev_afp_10";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","prev_afp_10"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["prev_afp_10"] = $fdata;
//	prev_afp_riesgo_1_71
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "prev_afp_riesgo_1_71";
	$fdata["GoodName"] = "prev_afp_riesgo_1_71";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","prev_afp_riesgo_1_71"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["prev_afp_riesgo_1_71"] = $fdata;
//	prev_afp_05
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "prev_afp_05";
	$fdata["GoodName"] = "prev_afp_05";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","prev_afp_05"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["prev_afp_05"] = $fdata;
//	prev_afp_ap_sol_0_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "prev_afp_ap_sol_0_5";
	$fdata["GoodName"] = "prev_afp_ap_sol_0_5";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","prev_afp_ap_sol_0_5"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["prev_afp_ap_sol_0_5"] = $fdata;
//	prev_ans_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "prev_ans_1";
	$fdata["GoodName"] = "prev_ans_1";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","prev_ans_1"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["prev_ans_1"] = $fdata;
//	rc_iva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "rc_iva";
	$fdata["GoodName"] = "rc_iva";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","rc_iva"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["rc_iva"] = $fdata;
//	retenciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "retenciones";
	$fdata["GoodName"] = "retenciones";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","retenciones"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["retenciones"] = $fdata;
//	multa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "multa";
	$fdata["GoodName"] = "multa";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","multa"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["multa"] = $fdata;
//	total_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "total_desc";
	$fdata["GoodName"] = "total_desc";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","total_desc"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["total_desc"] = $fdata;
//	pre_natal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "pre_natal";
	$fdata["GoodName"] = "pre_natal";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","pre_natal"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["pre_natal"] = $fdata;
//	natalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "natalidad";
	$fdata["GoodName"] = "natalidad";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","natalidad"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["natalidad"] = $fdata;
//	lactancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "lactancia";
	$fdata["GoodName"] = "lactancia";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","lactancia"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["lactancia"] = $fdata;
//	sepelio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "sepelio";
	$fdata["GoodName"] = "sepelio";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","sepelio"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["sepelio"] = $fdata;
//	seguro_pat_10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "seguro_pat_10";
	$fdata["GoodName"] = "seguro_pat_10";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","seguro_pat_10"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["seguro_pat_10"] = $fdata;
//	riesgo_pat_171
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "riesgo_pat_171";
	$fdata["GoodName"] = "riesgo_pat_171";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","riesgo_pat_171"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["riesgo_pat_171"] = $fdata;
//	pro_vivienda_pat_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "pro_vivienda_pat_2";
	$fdata["GoodName"] = "pro_vivienda_pat_2";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","pro_vivienda_pat_2"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["pro_vivienda_pat_2"] = $fdata;
//	ap_pat_sol_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "ap_pat_sol_3";
	$fdata["GoodName"] = "ap_pat_sol_3";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","ap_pat_sol_3"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["ap_pat_sol_3"] = $fdata;
//	mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "mes";
	$fdata["GoodName"] = "mes";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","mes"); 
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

	

	
	$tdatat_planilla_c["mes"] = $fdata;
//	gestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "gestion";
	$fdata["GoodName"] = "gestion";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","gestion"); 
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

	

	
	$tdatat_planilla_c["gestion"] = $fdata;
//	liquido_pagable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "liquido_pagable";
	$fdata["GoodName"] = "liquido_pagable";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","liquido_pagable"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatat_planilla_c["liquido_pagable"] = $fdata;
//	cod_afp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "cod_afp";
	$fdata["GoodName"] = "cod_afp";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","cod_afp"); 
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

	

	
	$tdatat_planilla_c["cod_afp"] = $fdata;
//	cta_banco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "cta_banco";
	$fdata["GoodName"] = "cta_banco";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","cta_banco"); 
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

	

	
	$tdatat_planilla_c["cta_banco"] = $fdata;
//	tipo_funcionario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "tipo_funcionario";
	$fdata["GoodName"] = "tipo_funcionario";
	$fdata["ownerTable"] = "t_planilla_c";
	$fdata["Label"] = GetFieldLabel("t_planilla_c","tipo_funcionario"); 
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

	

	
	$tdatat_planilla_c["tipo_funcionario"] = $fdata;

	
$tables_data["t_planilla_c"]=&$tdatat_planilla_c;
$field_labels["t_planilla_c"] = &$fieldLabelst_planilla_c;
$fieldToolTips["t_planilla_c"] = &$fieldToolTipst_planilla_c;
$page_titles["t_planilla_c"] = &$pageTitlest_planilla_c;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_planilla_c"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_planilla_c"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_planilla_c()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_func,  	fecha_nac,  	sexo,  	item_contrato,  	unidad,  	cargo,  	paterno,  	materno,  	nombres,  	ci,  	exp,  	nit,  	fec_ingreso,  	baja,  	reasig,  	haber_basico,  	dias_trab,  	haber_percibido,  	reint,  	bono_ant,  	total_ganado,  	devoluciones,  	asig_familiar,  	futuro_afp_10,  	futuro_afp_riesgo_1_71,  	futuro_afp_05,  	futuro_afp_ap_sol_0_5,  	futuro_ans_1,  	prev_afp_10,  	prev_afp_riesgo_1_71,  	prev_afp_05,  	prev_afp_ap_sol_0_5,  	prev_ans_1,  	rc_iva,  	retenciones,  	multa,  	total_desc,  	pre_natal,  	natalidad,  	lactancia,  	sepelio,  	seguro_pat_10,  	riesgo_pat_171,  	pro_vivienda_pat_2,  	ap_pat_sol_3,  	mes,  	gestion,  	liquido_pagable,  	cod_afp,  	cta_banco,  	tipo_funcionario";
$proto0["m_strFrom"] = "FROM t_planilla_c";
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
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto5["m_sql"] = "id_func";
$proto5["m_srcTableName"] = "t_planilla_c";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_nac",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto7["m_sql"] = "fecha_nac";
$proto7["m_srcTableName"] = "t_planilla_c";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto9["m_sql"] = "sexo";
$proto9["m_srcTableName"] = "t_planilla_c";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "item_contrato",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto11["m_sql"] = "item_contrato";
$proto11["m_srcTableName"] = "t_planilla_c";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "unidad",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto13["m_sql"] = "unidad";
$proto13["m_srcTableName"] = "t_planilla_c";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto15["m_sql"] = "cargo";
$proto15["m_srcTableName"] = "t_planilla_c";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "paterno",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto17["m_sql"] = "paterno";
$proto17["m_srcTableName"] = "t_planilla_c";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "materno",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto19["m_sql"] = "materno";
$proto19["m_srcTableName"] = "t_planilla_c";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto21["m_sql"] = "nombres";
$proto21["m_srcTableName"] = "t_planilla_c";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "ci",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto23["m_sql"] = "ci";
$proto23["m_srcTableName"] = "t_planilla_c";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "exp",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto25["m_sql"] = "exp";
$proto25["m_srcTableName"] = "t_planilla_c";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "nit",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto27["m_sql"] = "nit";
$proto27["m_srcTableName"] = "t_planilla_c";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "fec_ingreso",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto29["m_sql"] = "fec_ingreso";
$proto29["m_srcTableName"] = "t_planilla_c";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "baja",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto31["m_sql"] = "baja";
$proto31["m_srcTableName"] = "t_planilla_c";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "reasig",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto33["m_sql"] = "reasig";
$proto33["m_srcTableName"] = "t_planilla_c";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "haber_basico",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto35["m_sql"] = "haber_basico";
$proto35["m_srcTableName"] = "t_planilla_c";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "dias_trab",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto37["m_sql"] = "dias_trab";
$proto37["m_srcTableName"] = "t_planilla_c";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "haber_percibido",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto39["m_sql"] = "haber_percibido";
$proto39["m_srcTableName"] = "t_planilla_c";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "reint",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto41["m_sql"] = "reint";
$proto41["m_srcTableName"] = "t_planilla_c";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "bono_ant",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto43["m_sql"] = "bono_ant";
$proto43["m_srcTableName"] = "t_planilla_c";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "total_ganado",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto45["m_sql"] = "total_ganado";
$proto45["m_srcTableName"] = "t_planilla_c";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "devoluciones",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto47["m_sql"] = "devoluciones";
$proto47["m_srcTableName"] = "t_planilla_c";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "asig_familiar",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto49["m_sql"] = "asig_familiar";
$proto49["m_srcTableName"] = "t_planilla_c";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "futuro_afp_10",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto51["m_sql"] = "futuro_afp_10";
$proto51["m_srcTableName"] = "t_planilla_c";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "futuro_afp_riesgo_1_71",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto53["m_sql"] = "futuro_afp_riesgo_1_71";
$proto53["m_srcTableName"] = "t_planilla_c";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "futuro_afp_05",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto55["m_sql"] = "futuro_afp_05";
$proto55["m_srcTableName"] = "t_planilla_c";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "futuro_afp_ap_sol_0_5",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto57["m_sql"] = "futuro_afp_ap_sol_0_5";
$proto57["m_srcTableName"] = "t_planilla_c";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "futuro_ans_1",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto59["m_sql"] = "futuro_ans_1";
$proto59["m_srcTableName"] = "t_planilla_c";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "prev_afp_10",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto61["m_sql"] = "prev_afp_10";
$proto61["m_srcTableName"] = "t_planilla_c";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "prev_afp_riesgo_1_71",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto63["m_sql"] = "prev_afp_riesgo_1_71";
$proto63["m_srcTableName"] = "t_planilla_c";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "prev_afp_05",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto65["m_sql"] = "prev_afp_05";
$proto65["m_srcTableName"] = "t_planilla_c";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "prev_afp_ap_sol_0_5",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto67["m_sql"] = "prev_afp_ap_sol_0_5";
$proto67["m_srcTableName"] = "t_planilla_c";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "prev_ans_1",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto69["m_sql"] = "prev_ans_1";
$proto69["m_srcTableName"] = "t_planilla_c";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "rc_iva",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto71["m_sql"] = "rc_iva";
$proto71["m_srcTableName"] = "t_planilla_c";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "retenciones",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto73["m_sql"] = "retenciones";
$proto73["m_srcTableName"] = "t_planilla_c";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "multa",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto75["m_sql"] = "multa";
$proto75["m_srcTableName"] = "t_planilla_c";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "total_desc",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto77["m_sql"] = "total_desc";
$proto77["m_srcTableName"] = "t_planilla_c";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "pre_natal",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto79["m_sql"] = "pre_natal";
$proto79["m_srcTableName"] = "t_planilla_c";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "natalidad",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto81["m_sql"] = "natalidad";
$proto81["m_srcTableName"] = "t_planilla_c";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "lactancia",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto83["m_sql"] = "lactancia";
$proto83["m_srcTableName"] = "t_planilla_c";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "sepelio",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto85["m_sql"] = "sepelio";
$proto85["m_srcTableName"] = "t_planilla_c";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "seguro_pat_10",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto87["m_sql"] = "seguro_pat_10";
$proto87["m_srcTableName"] = "t_planilla_c";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "riesgo_pat_171",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto89["m_sql"] = "riesgo_pat_171";
$proto89["m_srcTableName"] = "t_planilla_c";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "pro_vivienda_pat_2",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto91["m_sql"] = "pro_vivienda_pat_2";
$proto91["m_srcTableName"] = "t_planilla_c";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "ap_pat_sol_3",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto93["m_sql"] = "ap_pat_sol_3";
$proto93["m_srcTableName"] = "t_planilla_c";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLField(array(
	"m_strName" => "mes",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto95["m_sql"] = "mes";
$proto95["m_srcTableName"] = "t_planilla_c";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "gestion",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto97["m_sql"] = "gestion";
$proto97["m_srcTableName"] = "t_planilla_c";
$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLField(array(
	"m_strName" => "liquido_pagable",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto99["m_sql"] = "liquido_pagable";
$proto99["m_srcTableName"] = "t_planilla_c";
$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "";
$obj = new SQLFieldListItem($proto99);

$proto0["m_fieldlist"][]=$obj;
						$proto101=array();
			$obj = new SQLField(array(
	"m_strName" => "cod_afp",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto101["m_sql"] = "cod_afp";
$proto101["m_srcTableName"] = "t_planilla_c";
$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto0["m_fieldlist"][]=$obj;
						$proto103=array();
			$obj = new SQLField(array(
	"m_strName" => "cta_banco",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto103["m_sql"] = "cta_banco";
$proto103["m_srcTableName"] = "t_planilla_c";
$proto103["m_expr"]=$obj;
$proto103["m_alias"] = "";
$obj = new SQLFieldListItem($proto103);

$proto0["m_fieldlist"][]=$obj;
						$proto105=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_funcionario",
	"m_strTable" => "t_planilla_c",
	"m_srcTableName" => "t_planilla_c"
));

$proto105["m_sql"] = "tipo_funcionario";
$proto105["m_srcTableName"] = "t_planilla_c";
$proto105["m_expr"]=$obj;
$proto105["m_alias"] = "";
$obj = new SQLFieldListItem($proto105);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto107=array();
$proto107["m_link"] = "SQLL_MAIN";
			$proto108=array();
$proto108["m_strName"] = "t_planilla_c";
$proto108["m_srcTableName"] = "t_planilla_c";
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
$proto107["m_sql"] = "t_planilla_c";
$proto107["m_alias"] = "";
$proto107["m_srcTableName"] = "t_planilla_c";
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
$proto0["m_srcTableName"]="t_planilla_c";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_planilla_c = createSqlQuery_t_planilla_c();


	
																																																			
	
$tdatat_planilla_c[".sqlquery"] = $queryData_t_planilla_c;

$tableEvents["t_planilla_c"] = new eventsBase;
$tdatat_planilla_c[".hasEvents"] = false;

?>