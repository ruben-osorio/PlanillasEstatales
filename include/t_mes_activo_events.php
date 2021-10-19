<?php 
class eventclass_t_mes_activo  extends eventsBase
{ 
	function eventclass_t_mes_activo()
	{
	// fill list of events
		$this->events["BeforeEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		

switch ($values['mes_numerico']) {
    case 1:
        $values['mes_activo']= 'ENERO';
        break;
    case 2:
        $values['mes_activo']= 'FEBRERO';
        break;
    case 3:
        $values['mes_activo']= 'MARZO';
        break;
    case 4:
        $values['mes_activo']= 'ABRIL';
        break;
    case 5:
        $values['mes_activo']= 'MAYO';
        break;
    case 6:
        $values['mes_activo']= 'JUNIO';
        break;
    case 7:
        $values['mes_activo']= 'JULIO';
        break;
    case 8:
        $values['mes_activo']= 'AGOSTO';
        break;
    case 9:
        $values['mes_activo']= 'SEPTIEMBRE';
        break;
    case 10:
        $values['mes_activo']= 'OCTUBRE';
        break;
    case 11:
        $values['mes_activo']= 'NOVIEMBRE';
        break;
    case 12:
        $values['mes_activo']= 'DICIEMBRE';
        break;
}

// Place event code here.
// Use 

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
