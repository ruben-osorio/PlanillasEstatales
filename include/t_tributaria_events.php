<?php 
class eventclass_t_tributaria  extends eventsBase
{ 
	function eventclass_t_tributaria()
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

$datos = "select nit from funcionario where id_func =".$id_func;
$rs_nit = CustomQuery($datos);
if($data_nit = db_fetch_array($rs_nit))
{
$values['nit'] = $data_nit["nit"];
}
//-----------------------------------------------------------------------------------------------------------------------------------------------
$mes_p = "select * from t_mes_activo";
$rs_mes = CustomQuery($mes_p);
if($data_mes = db_fetch_array($rs_mes))
{
$mes_literal = $data_mes["mes_activo"];
$mes_proceso = $data_mes["mes_numerico"];
$anio_proceso = $data_mes["gestion"];
$ufv_mes_actual = $data_mes["ufv_mes_actual"];
$ufv_mes_anterior = $data_mes["ufv_mes_anterior"];
}
$values['periodo'] = $mes_proceso ;
$values['gestion'] = $anio_proceso;

// ---- sacar monto 13% de  t_factura110
$sacar_monto_110 = "select * from t_facturas110 where id_func =".$id_func ."  and gestion = ". $anio_proceso . 
"  and periodo = '".$mes_literal."' " ;
$rs_110 = CustomQuery($sacar_monto_110);
if($data_110 = db_fetch_array($rs_110))
{
$values['f_110_facturas'] = $data_110['monto_13'] ;
}
else
{ $values['f_110_facturas'] = 0 ; }
//----------------------------------------------------------------------------------------------------------------------------------------------
$xservicio = "select liquido_pagable from t_descuentos where id_func =".$id_func;
$rs = CustomQuery($xservicio);

if($data = db_fetch_array($rs))
{
$lp = $data["liquido_pagable"];
}
$values['liquido_pagable'] = $lp;

$smin = "select * from t_salario_minimo";
$salario = CustomQuery($smin); // salario minimo 
if($data2 = db_fetch_array($salario))
{ $values['dos_salarios_min'] = $data2["salario_minimo"] * 2; }

if($data["liquido_pagable"]>$values['dos_salarios_min'])
		$values['base_imponible']= $data["liquido_pagable"] - $values['dos_salarios_min'];
else
		$values['base_imponible']=0 ;

$values['impuesto_rc_iva']=$values['base_imponible'] * 0.13 ;
$values['dos_salarios_13'] = $values['dos_salarios_min'] * 0.13 ;

if($values['impuesto_rc_iva']>$values['dos_salarios_13'])
  $values['impuesto_neto_rc_iva']= $values['impuesto_rc_iva']-$values['dos_salarios_13'] ;
else
  $values['impuesto_neto_rc_iva'] = 0 ;

if($values['impuesto_neto_rc_iva']>$values['f_110_facturas'])
  $values['saldo_favor_fisco']= $values['impuesto_neto_rc_iva']-$values['f_110_facturas'] ;
else
  $values['saldo_favor_fisco']=0;
//-------------------------------------------------------------------------------------------------------------------------------------
if($values['f_110_facturas']>$values['impuesto_neto_rc_iva'])
		{ $values['saldo_favor_dependiente']=$values['f_110_facturas']-$values['impuesto_neto_rc_iva'] ; }
else
		{ $values['saldo_favor_dependiente']= 0 ; }

$mes_actual = $values['periodo'] ;
$mes_anterior =  $values['periodo'] - 1 ;

//$monto1 = "select monto from t_ufv where mes = ".$mes_actual ;
//$ufv1 = CustomQuery($monto1); 
//if($data3 = db_fetch_array($ufv1))
//	{ $ufv_mes_actual = $data3["monto"]; }

//$monto2 = "select monto from t_ufv where mes = ".$mes_anterior ;
//$ufv2 = CustomQuery($monto2); 

//if($data4 = db_fetch_array($ufv2))
//	{ $ufv_mes_anterior = $data4["monto"]; }

	
$values['mantenimiento_periodo_anterior'] = (($ufv_mes_actual/$ufv_mes_anterior) * $values['saldo_favor_dependiente_per_anterior']) - $values['saldo_favor_dependiente_per_anterior'];

$values["saldo_periodo_anterior_actualizado"] = $values['saldo_favor_dependiente_per_anterior'] + $values['mantenimiento_periodo_anterior'];

if($values["saldo_periodo_anterior_actualizado"]<=$values["saldo_favor_fisco"])
	{ $values['saldo_utilizado'] = $values["saldo_periodo_anterior_actualizado"]; }
else
	{
			if ($values["saldo_favor_fisco"]<$values["saldo_periodo_anterior_actualizado"])
				{ 	$values['saldo_utilizado'] = $values["saldo_favor_fisco"] ; }
	}

if($values["saldo_favor_fisco"]>$values['saldo_utilizado'])
		{ $values['impuesto_rc_iva_retenido'] = $values["saldo_favor_fisco"] - $values['saldo_utilizado'] ; }
else
		{ $values['impuesto_rc_iva_retenido'] = 0 ; }

$values['saldo_favor_dep_mes_siguiente'] = ($values['saldo_favor_dependiente'] + $values['saldo_periodo_anterior_actualizado'])-$values['saldo_utilizado'] ;

//$values['periodo'] = $mes_proceso ;
// Place event code here.
// Use 


return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		$data = $pageObject->getMasterRecord();
$id_func = $data["id_func"];


$datos = "select nit from funcionario where id_func =".$id_func;
$rs_nit = CustomQuery($datos);
if($data_nit = db_fetch_array($rs_nit))
{
$values['nit'] = $data_nit["nit"];
}

$xservicio = "select liquido_pagable from t_descuentos where id_func =".$id_func;
$rs = CustomQuery($xservicio);

if($data = db_fetch_array($rs))
{
$lp = $data["liquido_pagable"];
}
$values['liquido_pagable'] = $lp;

$smin = "select * from t_salario_minimo";
$salario = CustomQuery($smin); // salario minimo 
if($data2 = db_fetch_array($salario))
{
$values['dos_salarios_min'] = $data2["salario_minimo"] * 2;
}

if($data["liquido_pagable"]>$values['dos_salarios_min'])
$values['base_imponible']= $data["liquido_pagable"] - $values['dos_salarios_min'];
else
$values['base_imponible']=0 ;

$values['impuesto_rc_iva']=$values['base_imponible'] * 0.13 ;

$values['dos_salarios_13'] = $values['dos_salarios_min'] * 0.13 ;

if($values['impuesto_rc_iva']>$values['dos_salarios_13'])
$values['impuesto_neto_rc_iva']= $values['impuesto_rc_iva']-$values['dos_salarios_13'] ;
else
$values['impuesto_neto_rc_iva'] = 0 ;

if($values['impuesto_neto_rc_iva']>$values['f_110_facturas'])
$values['saldo_favor_fisco']= $values['impuesto_neto_rc_iva']-$values['f_110_facturas'] ;
else
$values['saldo_favor_fisco']=0;

if($values['f_110_facturas']>$values['impuesto_neto_rc_iva'])
{
$values['saldo_favor_dependiente']=$values['f_110_facturas']-$values['impuesto_neto_rc_iva'] ;
}
else
{
$values['saldo_favor_dependiente']= 0 ;
}
$monto1 = "select * from t_mes_activo " ;
$ufv1 = CustomQuery($monto1); 
if($data3 = db_fetch_array($ufv1))
{ 
$values['gestion'] = $data3["gestion"];
$values['periodo'] = $data3["mes_numerico"];
$ufv_mes_actual = $data3["ufv_mes_actual"];
$ufv_mes_anterior = $data3["ufv_mes_anterior"];
}

$values['mantenimiento_periodo_anterior'] = ($ufv_mes_actual/$ufv_mes_anterior) * $values['saldo_favor_dependiente_per_anterior'] - $values['saldo_favor_dependiente_per_anterior'];

if($values["saldo_periodo_anterior_actualizado"]<=$values["saldo_favor_fisco"])
{
$values['saldo_utilizado'] = $values["saldo_periodo_anterior_actualizado"];
}
else
{
			if ($values["saldo_favor_fisco"]<$values["saldo_periodo_anterior_actualizado"])
				{
				$values['saldo_utilizado'] = $values["saldo_favor_fisco"] ;
				}
}
if($values["saldo_favor_fisco"]>$values['saldo_utilizado'])
{
$values['impuesto_rc_iva_retenido'] = $values["saldo_favor_fisco"] - $values['saldo_utilizado'] ;
}
else
{
$values['impuesto_rc_iva_retenido'] = 0 ;
}
$values['saldo_favor_dep_mes_siguiente'] = ($values['saldo_favor_dependiente'] + $values['saldo_periodo_anterior_actualizado'])-$values['saldo_favor_dep_mes_siguiente'] ;


// Place event code here.
// Use 

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
