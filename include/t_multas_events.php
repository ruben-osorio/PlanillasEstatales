<?php 
class eventclass_t_multas  extends eventsBase
{ 
	function eventclass_t_multas()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["ProcessValuesAdd"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["ProcessValuesEdit"]=true;

		$this->events["AfterEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		
// Place event code here.
// Use 

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesAdd(&$values, &$pageObject)
{

		// sacar mes y gestion
$mes_p = "select * from t_mes_activo";
$rs_mes = CustomQuery($mes_p);
if($data_mes = db_fetch_array($rs_mes))
{
$mes_literal = $data_mes["mes_activo"];
$mes_proceso = $data_mes["mes_numerico"];
$anio_proceso = $data_mes["gestion"];
}

$values['mes'] = $mes_literal ;
$values['gestion'] = $anio_proceso ;

// Place event code here.
// Use 
;		
} // function ProcessValuesAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		$data = $pageObject->getMasterRecord();
$id_func = $data["id_func"];

$mes_p = "select * from t_mes_activo";
$rs_mes = CustomQuery($mes_p);
if($data_mes = db_fetch_array($rs_mes))
{
$mes_literal = $data_mes["mes_activo"];
$mes_proceso = $data_mes["mes_numerico"];
$anio_proceso = $data_mes["gestion"];
}

$consulta_suma = "select sum(monto) as total from t_multas where id_func = ".$id_func.
" and  mes = '".$mes_literal."' and gestion =".$anio_proceso;
$total = CustomQuery($consulta_suma);
if($data_multa = db_fetch_array($total))
{
$suma = $data_multa["total"] ;
}
else
{
$suma = 0;
}
$actu = "update t_descuentos set multa=".$suma." where id_func =".$id_func;
CustomQuery($actu);

// Place event code here.
// Use 
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesEdit(&$values, &$pageObject)
{

		$mes_p = "select * from t_mes_activo";
$rs_mes = CustomQuery($mes_p);
if($data_mes = db_fetch_array($rs_mes))
{
$mes_literal = $data_mes["mes_activo"];
$mes_proceso = $data_mes["mes_numerico"];
$anio_proceso = $data_mes["gestion"];

}
$values['mes'] = $mes_literal ;
$values['gestion'] = $anio_proceso ;

// Place event code here.
// Use 
;		
} // function ProcessValuesEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		$data = $pageObject->getMasterRecord();
$id_func = $data["id_func"];

$mes_p = "select * from t_mes_activo";
$rs_mes = CustomQuery($mes_p);
if($data_mes = db_fetch_array($rs_mes))
{
$mes_literal = $data_mes["mes_activo"];
$mes_proceso = $data_mes["mes_numerico"];
$anio_proceso = $data_mes["gestion"];
}

$consulta_suma = "select sum(monto) as total from t_multas where id_func = ".$id_func.
" and  mes = '".$mes_literal."' and gestion =".$anio_proceso;

$total = CustomQuery($consulta_suma);
if($data_multa = db_fetch_array($total))
{
$suma = $data_multa["total"] ;
}
else
{
$suma = 0;
}
$actu = "update t_descuentos set multa=".$suma." where id_func =".$id_func;
CustomQuery($actu);


// Place event code here.
// Use 
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
