<?php 
class eventclass_t_descuentos  extends eventsBase
{ 
	function eventclass_t_descuentos()
	{
	// fill list of events
		$this->events["BeforeEdit"]=true;

		$this->events["BeforeAdd"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		$data = $pageObject->getMasterRecord();
$id_func = $data["id_func"];

$xservicio = "select total_ganado from t_ingreso where id_func =".$id_func;
$rs = CustomQuery($xservicio);
if($data = db_fetch_array($rs))
{
$tg = $data["total_ganado"];
}
$values['afp_10'] = $tg * 0.1 ;

$values['afp_05'] = $tg *0.005 ;

$values['afp_ap_sol_0_5'] = $tg *0.005 ;
$values['afp_riesgo_1_71'] = $tg *0.0171 ;

$ans = ($tg - 13000)*0.01 ;
if ($ans<0)
{
$ans = 0;
}

$values['ans_1'] = $ans ; //($tg-13000)*0.01 ;

$values['total_desc'] = $values['afp_10'] + $values['afp_05'] + $values['afp_ap_sol_0_5'] + $values['afp_riesgo_1_71'] + $values['ans_1']+$values['rc_iva']+$values['multa']+$values['retenciones'] ;

$values['liquido_pagable'] = $tg - $values['total_desc'] ;
// Place event code here.
// Use 
$values['seguro_pat_10']= $tg * 0.1 ;
$values['riesgo_pat_171'] = $tg *0.0171 ;
$values['pro_vivienda_pat_2'] = $tg * 0.02 ;
$values['ap_pat_sol_3'] = $tg * 0.03 ;
$values['sub_total'] = $tg * 0.1671 ;

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		$data = $pageObject->getMasterRecord();
$id_func = $data["id_func"];

$xservicio = "select total_ganado from t_ingreso where id_func =".$id_func;
$rs = CustomQuery($xservicio);
if($data = db_fetch_array($rs))
{
$tg = $data["total_ganado"];
}
$values['afp_10'] = $tg * 0.1 ;

$values['afp_05'] = $tg *0.005 ;

$values['afp_ap_sol_0_5'] = $tg *0.005 ;
$values['afp_riesgo_1_71'] = $tg *0.0171 ;

$ans = ($tg - 13000)*0.01 ;
if ($ans<0)
{
$ans = 0;
}
$values['ans_1'] = $ans  ; //($tg-13000)*0.01 ;

$values['total_desc'] = $values['afp_10'] + $values['afp_05'] + $values['afp_ap_sol_0_5'] + $values['afp_riesgo_1_71'] + $values['ans_1']+$values['rc_iva']+$values['multa']+$values['retenciones'] ;

$values['liquido_pagable'] = $tg - $values['total_desc'] ;
// Place event code here.
// Use 
$values['seguro_pat_10']= $tg * 0.1 ;
$values['riesgo_pat_171'] = $tg *0.0171 ;
$values['pro_vivienda_pat_2'] = $tg * 0.02 ;
$values['ap_pat_sol_3'] = $tg * 0.03 ;
$values['sub_total'] = $tg * 0.1671 ;

// Place event code here.
// Use 

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
