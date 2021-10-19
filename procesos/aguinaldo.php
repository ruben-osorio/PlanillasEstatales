<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>
@charset "utf-8";
.overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 500ms;
    visibility: hidden;
    opacity: 0;
}
.overlay:target {
    visibility: visible;
    opacity: 1;
}
#popupBody{
    width: 46%;
    padding: 2%;
    border-radius: 15px;
    box-shadow: 0 0 5px #CCC;
    background: #FFF;
    position: relative;
    transition: all 5s ease-in-out;
    margin: 15% auto;    
}
#cerrar{
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #F00;
}
body {
	background-color: #e6e6e6;
}
</style>
</head>

<?php
echo "<script>if(confirm('VA A PROCESAR PLANILLA DE AGUINALDO DE LA GESTIÓN ACTUAL, DESEA CONTINUAR?')){
}
else{ alert('OPERACIÓN CANCELADA');
      document.location='../menu.php';
}</script>";  

//personal permanente
include("db.php"); 
// 0 funcionario baja
// sacar gestion 


$consulg = "select * from t_mes_activo ";
$sacar_ges = mysqli_query($con,$consulg);
while($objges = mysqli_fetch_assoc($sacar_ges))
{
	$xgestion = $objges["gestion"];
}
$borrar = "delete from t_planilla_aguinaldo";
$borrar_h = "delete from t_planilla_aguinaldo_h where gestion = ".$xgestion ;

$borrar = mysqli_query($con,$borrar);
$borrar_h = mysqli_query($con,$borrar_h);

$consulta = "select * from funcionario, permanente,t_ingreso 
where funcionario.id_func = permanente.id_func and funcionario.id_func = t_ingreso.id_func and estado <> 0 
order by funcionario.id_func" ;
//echo $consulta ;
$planilla_aguinaldo = mysqli_query($con,$consulta);
while($obj_agui = mysqli_fetch_assoc($planilla_aguinaldo))
{
	
  $fechaEnvio = $obj_agui["date_ent"] ;   //"2020-10-06";
  $fechaActual = $xgestion."-12-31"; //date('Y-m-d'); 
  $datetime1 = date_create($fechaEnvio);
  $datetime2 = date_create($fechaActual);
  $contador = date_diff($datetime1, $datetime2);
  $differenceFormat = '%a';
  $mes = ($contador->format($differenceFormat)/30);
  if($mes>2.999)
		{	     
		    $ganado = 0; 
			$sacar_meses = "select mes, total_ganado from t_planilla_h 
			                where gestion =".$xgestion." AND id_func =".$obj_agui["id_func"] ;
			//echo $sacar_meses ."<br>";
			$datos_aguinaldo = mysqli_query($con,$sacar_meses);
			while($obj_meses = mysqli_fetch_assoc($datos_aguinaldo))
			{
				if($obj_meses["mes"]=='SEPTIEMBRE') { $ganado += $obj_meses["total_ganado"] ;}
				if($obj_meses["mes"]=='OCTUBRE')    { $ganado += $obj_meses["total_ganado"] ;}
				if($obj_meses["mes"]=='NOVIEMBRE')  {$ganado += $obj_meses["total_ganado"] ; }
			}
			 $promedio =  $ganado /3 ;
			 //echo "ganado".$obj_agui["id_func"] . $promedio ."<br>" ;
				  if($mes>=12) { // todo el año	
				       $calculo = 	($promedio*12)/12  ;
	                   $aguinaldo = number_format($calculo,2) ; }
					//$aguinaldo = ($obj_agui["total_ganado"] *12)/12 ;
				  else // duodecimas
				       {	
					    $calculo = ($promedio*$mes)/12  ;				        
						$aguinaldo = number_format($calculo,2) ;
					 	}
				  
		}// 2.999
  else
        	{
				$aguinaldo = 0;
			}
if($mes >11) { $mes_aguinaldo = 12 ; }
else {$mes_aguinaldo = $mes ; }
// --------------------------------------------------------------------------------------------
	$cargo = "select * from char_per where 
	 char_per.id_per = ". $obj_agui["id_func"];
	$cargo_agui = mysqli_query($con,$cargo);
		while($objcargo = mysqli_fetch_assoc($cargo_agui))
		{
			$unidad = $objcargo["unit"] ;
			$cargo_funcionario = $objcargo["charge"] ;
		}
				
        $sacar_cta = "select * from cta_banc where id_func = ". $obj_agui["id_func"];
		//echo $sacar_cta ;
		$reg_cta = mysqli_query($con,$sacar_cta);
		while($objcta = mysqli_fetch_assoc($reg_cta))
		{
				if(strlen($objcta["num_ac"])==0)
					$banco = "0";	
				else 
				     $banco = $objcta["num_ac"] ;	
		}
		
		$pre_paq_monto = 0 ;
		$sub_natalidad = 0;
		$lac_monto = 0;
		$sepelio = 0;
		$pre_paq_monto = 0 ;
		$sub_natalidad = 0;
		$lac_monto = 0;
		$sepelio = 0;

  $prev_afp_10 = 0 ;
  $prev_afp_riesgo_1_71 = 0;
  $prev_afp_05 = 0 ;
  $prev_afp_ap_sol_0_5  = 0;
  $prev_ans_1  =0 ; 

  $futuro_afp_10 = 0 ;
  $futuro_afp_riesgo_1_71 = 0;
  $futuro_afp_05 = 0 ;
  $futuro_afp_ap_sol_0_5  = 0;
  $futuro_ans_1  =0 ; 


$registro_c= "insert into t_planilla_aguinaldo( id_func ,  fecha_nac ,  sexo ,  item_contrato ,  unidad ,  cargo ,  paterno ,  materno ,  nombres ,  ci ,  exp ,  nit ,  fec_ingreso ,
  baja ,  reasig ,  haber_basico ,  dias_trab ,  haber_percibido ,  reint ,  bono_ant ,  total_ganado ,  devoluciones ,  asig_familiar ,
  futuro_afp_10 ,  futuro_afp_riesgo_1_71 ,  futuro_afp_05 ,  futuro_afp_ap_sol_0_5 ,  futuro_ans_1 ,  
  prev_afp_10 ,  prev_afp_riesgo_1_71 ,  prev_afp_05 ,  prev_afp_ap_sol_0_5 ,  prev_ans_1 ,  
  rc_iva ,  retenciones ,  multa ,  total_desc ,
  pre_natal,natalidad,lactancia,sepelio,
  seguro_pat_10, riesgo_pat_171 ,pro_vivienda_pat_2,ap_pat_sol_3,
  mes ,  gestion ,  liquido_pagable,cod_afp , cta_banco, tipo_funcionario ) values (". 
$obj_agui["id_func"] .",'".  $obj_agui["date_born"] ."','".  $obj_agui["sex"] ."','".  $obj_agui["item"] ."','".  $unidad . "','".  $cargo_funcionario ."','".  $obj_agui["l_name1"] ."','". $obj_agui["l_name2"] ."','".  $obj_agui["name"] ."','".  $obj_agui["ci"] ."','".  $obj_agui["expe"] ."',".  $obj_agui["nit"] .",'".  $obj_agui["date_ent"] ."','".$fbaja."','".
  $reasig ."',".
   $obj_agui["haber_basico"] .",".
  $mes_aguinaldo .",".
  $obj_agui["haber_percibido"] .",".
  $obj_agui["reint"] .",".
  $obj_agui["bono_ant"] .",".
  $obj_agui["total_ganado"] .",".
  $obj_agui["devoluciones"] .",".
  $obj_agui["asig_familiar"] .",".    
  $futuro_afp_10 .",".
  $futuro_afp_riesgo_1_71 .",".
  $futuro_afp_05 .",".
  $futuro_afp_ap_sol_0_5 .",".  
  $futuro_ans_1 .",". 
   
  $prev_afp_10 .",".
  $prev_afp_riesgo_1_71 .",".
  $prev_afp_05 .",".
  $prev_afp_ap_sol_0_5 .",".  
  $prev_ans_1 .",". 
  
  "0" .",".
  "0" .",". 
  "0" .",". 
  "0" .",". 
  
  "0"  .",".
  "0" .",".
  "0" .",".
  "0" .",".
  	"0" .",".
	"0" .",".
	"0" .",".
	"0" .",'".
  $xmes ."',".
  $xgestion .",'".
  $aguinaldo . "','".
  $obj_agui["afp"] . "','".
  $banco . "','FUNCIONARIO')";
  
 //echo $registro_c;
 //registro historico
 $registro_hc= "insert into t_planilla_aguinaldo_h( id_func ,  fecha_nac ,  sexo ,  item_contrato ,  unidad ,  cargo ,  paterno ,  materno ,  nombres ,  ci ,  exp ,  nit ,  fec_ingreso ,
  baja ,  reasig ,  haber_basico ,  dias_trab ,  haber_percibido ,  reint ,  bono_ant ,  total_ganado ,  devoluciones ,  asig_familiar ,
  futuro_afp_10 ,  futuro_afp_riesgo_1_71 ,  futuro_afp_05 ,  futuro_afp_ap_sol_0_5 ,  futuro_ans_1 ,  
  prev_afp_10 ,  prev_afp_riesgo_1_71 ,  prev_afp_05 ,  prev_afp_ap_sol_0_5 ,  prev_ans_1 ,  
  rc_iva ,  retenciones ,  multa ,  total_desc ,
  pre_natal,natalidad,lactancia,sepelio,
  seguro_pat_10, riesgo_pat_171 ,pro_vivienda_pat_2,ap_pat_sol_3,
  mes ,  gestion ,  liquido_pagable,cod_afp , cta_banco, tipo_funcionario ) values (". 
$obj_agui["id_func"] .",'".  $obj_agui["date_born"] ."','".  $obj_agui["sex"] ."','".  $obj_agui["item"] ."','".  $unidad . "','".  $cargo_funcionario ."','".  $obj_agui["l_name1"] ."','". $obj_agui["l_name2"] ."','".  $obj_agui["name"] ."','".  $obj_agui["ci"] ."','".  $obj_agui["expe"] ."',".  $obj_agui["nit"] .",'".  $obj_agui["date_ent"] ."','".$fbaja."','".
  $reasig ."',".
   $obj_agui["haber_basico"] .",".
  $mes_aguinaldo .",".
  $obj_agui["haber_percibido"] .",".
  $obj_agui["reint"] .",".
  $obj_agui["bono_ant"] .",".
  $obj_agui["total_ganado"] .",".
  $obj_agui["devoluciones"] .",".
  $obj_agui["asig_familiar"] .",".    
  $futuro_afp_10 .",".
  $futuro_afp_riesgo_1_71 .",".
  $futuro_afp_05 .",".
  $futuro_afp_ap_sol_0_5 .",".  
  $futuro_ans_1 .",". 
   
  $prev_afp_10 .",".
  $prev_afp_riesgo_1_71 .",".
  $prev_afp_05 .",".
  $prev_afp_ap_sol_0_5 .",".  
  $prev_ans_1 .",". 
  
  "0" .",".
  "0" .",". 
  "0" .",". 
  "0" .",". 
  
  "0"  .",".
  "0" .",".
  "0" .",".
  "0" .",".
  	"0" .",".
	"0" .",".
	"0" .",".
	"0" .",'".
  $xmes ."',".
  $xgestion .",'".
  $aguinaldo . "','".
  $obj_agui["afp"] . "','".
  $banco . "','FUNCIONARIO')";
  
  $graba = mysqli_query($con,$registro_c);
  $grabahc = mysqli_query($con,$registro_hc);
 
}// end while planilla_aguinaldo

?>
<body>
        <!-- <p><a href="#popup">Abrir Popup</a></p> 
        <div id="popup" class="overlay">-->
<div id="popupBody" style="background-color:#353d4a">
                <h2 style="color:#d5b195">CONTROL DE PROCESOS</h2>
                <a id="cerrar" href="../menu.php">&times;</a>
                <div class="popupContent">
                    <p style="color:#FFFFFF">PLANILLA DE AGUINALDO GENERADA ....</p>
                </div>
            </div>
     <!--    </div> -->

</body>
</html>