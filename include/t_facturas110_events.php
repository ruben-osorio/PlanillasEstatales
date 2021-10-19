<?php 
class eventclass_t_facturas110  extends eventsBase
{ 
	function eventclass_t_facturas110()
	{
	// fill list of events
		$this->events["ProcessValuesAdd"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesAdd(&$values, &$pageObject)
{

		
$data = $pageObject->getMasterRecord();
$id_func = $data["id_func"];

//-----------------------------------------------------------------------------------------------------------------------------------------------
$mes_p = "select * from t_mes_activo";
$rs_mes = CustomQuery($mes_p);
if($data_mes = db_fetch_array($rs_mes))
{
$mes_literal = $data_mes["mes_activo"];
$mes_numerico = $data_mes["mes_numerico"];
$anio_proceso = $data_mes["gestion"];

}
$values['periodo'] = $mes_literal ;
$values['mes_num'] = $mes_numerico ;
$values['gestion'] = $anio_proceso ;

// Place event code here.
// Use 
;		
} // function ProcessValuesAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
