<?php 
class eventclass_t_ingreso  extends eventsBase
{ 
	function eventclass_t_ingreso()
	{
	// fill list of events
		$this->events["BeforeEdit"]=true;

		$this->events["ProcessValuesEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		//sacar year_rat
$data = $pageObject->getMasterRecord();
$id_func = $data["id_func"];
$xservicio = "select year_rat from old_cas where id_per =".$id_func . 
" and date_cas = (select max(date_cas) from old_cas where id_per =".$id_func .")" ;
$rs = CustomQuery($xservicio);
if($data = db_fetch_array($rs))
{
	$anio = $data["year_rat"];
}
//------------------------------------------------------------------------------------------------------------------------------------------
$xsal = "select salario_minimo from t_salario_minimo";
$rs_sal = CustomQuery($xsal);
if($data_sal = db_fetch_array($rs_sal))
{
	$minimo = $data_sal["salario_minimo"];
}

//------------------------------------------------------------------------------------------------------------------------------------------
function val_inter($dato, $rango, $separador){
return (in_array($dato, explode($separador, $rango))) ? true : false;
}
//------------------------------------------------------------------------------------------------------------------------------------------
$values['haber_percibido']= ($values['haber_basico']/30)*$values['dias_trab'];

$valor = $anio;

if ($valor == 0 )
	$calculado = 0;
if (val_inter($valor, "2,3,4", ","))
{
  $calculado = ($minimo)*0.05 ;
}
else
    {
     if (val_inter($valor, "5,6,7", ","))
			{	$calculado = ($minimo)*0.11 ;	}
      else
         {
          if (val_inter($valor, "8,9,10", ","))
							{	$calculado = ($minimo)*0.18 ;	}
           else
             {
              if (val_inter($valor, "11,12,13,14", ","))
									{	$calculado = ($minimo)*0.26 ;	}
              else 
                 { 
                   if (val_inter($valor, "15,16,17,18,19", ","))
											{	$calculado = ($minimo)*0.34 ;	}
                   else
											{
												if (val_inter($valor, "20,21,22,23,24", ","))
														{	$calculado = ($minimo)*0.42 ;	}
												else
														{
														if (val_inter($valor, "25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50", ","))
																{	$calculado = ($minimo)*0.5 ;	}
															else 
                               { }

														}
											}
                  
                  }

              }

          }

     }

$values['bono_ant'] = $calculado ;
$values['total_ganado'] = $calculado + $values['haber_percibido']+$values['reint'];
// Place event code here.
// Use 

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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
$values['mes'] = $mes_proceso ;
$values['gestion'] = $anio_proceso ;

// Place event code here.
// Use 
;		
} // function ProcessValuesEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
