<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
$xmes = $_POST["meses"];
$xgestion = $_POST["gestion"];
include("db.php");
mysqli_query($con,"delete from t_planilla_c");
//actualizar saldo del mes anterior
//$query = "SELECT * FROM funcionario,t_ingreso,t_descuentos,permanente, char_per WHERE  estado = 1 and funcionario.id_func = t_ingreso.id_func and funcionario.id_func = t_descuentos.id_func and permanente.id_func = funcionario.id_func and funcionario.id_func = char_per.id_per" ;
$query = "SELECT * FROM funcionario,t_ingreso,t_descuentos, char_per WHERE  estado = 1 and funcionario.id_func = t_ingreso.id_func and funcionario.id_func = t_descuentos.id_func and funcionario.id_func = char_per.id_per" ;

$i = 0;
//echo $query ;
$planilla = mysqli_query($con,$query);
while($obj = mysqli_fetch_assoc($planilla))
{
	
//sacar fecha de baja 
		$sacar_fecha = "select * from baja where id_per = ". $obj["id_func"];
		$sacfecha = mysqli_query($con,$sacar_fecha);
		while($objfecha = mysqli_fetch_assoc($sacfecha))
		{ $fbaja = $objfecha["date_efect"]; }
		if(strlen($fbaja)==0)
		{$fbaja ="-";}
		$reasig = "-";
		
		if(strlen($obj["nit"])==0)
		{    $obj["nit"] = "0";	}
		
        $sacar_cta = "select * from cta_banc where id_func = ". $obj["id_func"];
		$reg_cta = mysqli_query($con,$sacar_cta);
		while($objcta = mysqli_fetch_assoc($reg_cta))
		{
				if(strlen($objcta["num_ac"])==0)
					$banco = "0";	
				else 
				     $banco = $objcta["num_ac"] ;	
		}
//if(stripos($str,'job')){ f(ereg($buscar, $texto1)) 
if(ereg("CONCEJAL", $obj["charge"]))
{
	$tipo = "CONCEJAL";
}
else
{
	$tipo = "ITEM";
}
								  $pre_paq_monto = 0 ;
								  $sub_natalidad = 0;
								  $lac_monto = 0;
								  $sepelio = 0;

		$sacar_asig = "select * from t_asignaciones where id_asig = ". $obj["id_func"];
		if($reg_asig = mysqli_query($con,$sacar_asig))
			{	
			      while($objasig = mysqli_fetch_assoc($reg_asig))
							{  
								  $pre_paq_monto = $objasig["paq_monto"] ;
								  $sub_natalidad = $objasig["sub_natalidad"];
								  $lac_monto = $objasig["lac_monto"];
								  $sepelio = $objasig["sepelio"];
							}
			}
			

if(ereg("FUTU", $obj["afp"]))
{
  $prev_afp_10 = 0 ;
  $prev_afp_riesgo_1_71 = 0;
  $prev_afp_05 = 0 ;
  $prev_afp_ap_sol_0_5  = 0;
  $prev_ans_1  =0 ; 
  
  $futuro_afp_10 = $obj["afp_10"] ;
  $futuro_afp_riesgo_1_71 = $obj["afp_riesgo_1_71"];
  $futuro_afp_05 = $obj["afp_05"] ;
  $futuro_afp_ap_sol_0_5  = $obj["afp_ap_sol_0_5"];
  $futuro_ans_1  =$obj["ans_1"] ;
}
else
{
  $futuro_afp_10 = 0 ;
  $futuro_afp_riesgo_1_71 = 0;
  $futuro_afp_05 = 0 ;
  $futuro_afp_ap_sol_0_5  = 0;
  $futuro_ans_1  =0 ; 
  
  $prev_afp_10 = $obj["afp_10"] ;
  $prev_afp_riesgo_1_71 = $obj["afp_riesgo_1_71"];
  $prev_afp_05 = $obj["afp_05"] ;
  $prev_afp_ap_sol_0_5  = $obj["afp_ap_sol_0_5"];
  $prev_ans_1  =$obj["ans_1"] ; 
}
	$seguro_pat_10 = 0 ;
	$riesgo_pat_171 =0 ;
	$pro_vivienda_pat_2 =0 ;
	$ap_pat_sol_3 = 0 ;
	
if($obj["seguro_pat_10"]>0)
{
	$seguro_pat_10 = $obj["seguro_pat_10"] ;
	$riesgo_pat_171 =$obj["riesgo_pat_171"] ;
	$pro_vivienda_pat_2 =$obj["pro_vivienda_pat_2"] ;
	$ap_pat_sol_3 = $obj["ap_pat_sol_3"] ;

}


$registro = "insert into t_planilla_c( id_func ,  fecha_nac ,  sexo ,  item_contrato ,  unidad ,  cargo ,  paterno ,  materno ,  nombres ,  ci ,  exp ,  nit ,  fec_ingreso ,
  baja ,  reasig ,  haber_basico ,  dias_trab ,  haber_percibido ,  reint ,  bono_ant ,  total_ganado ,  devoluciones ,  asig_familiar ,
  futuro_afp_10 ,  futuro_afp_riesgo_1_71 ,  futuro_afp_05 ,  futuro_afp_ap_sol_0_5 ,  futuro_ans_1 ,  
  prev_afp_10 ,  prev_afp_riesgo_1_71 ,  prev_afp_05 ,  prev_afp_ap_sol_0_5 ,  prev_ans_1 ,  
  rc_iva ,  retenciones ,  multa ,  total_desc ,
  pre_natal,natalidad,lactancia,sepelio,
  seguro_pat_10, riesgo_pat_171 ,pro_vivienda_pat_2,ap_pat_sol_3,
  mes ,  gestion ,  liquido_pagable,cod_afp , cta_banco, tipo_funcionario ) values (". 
$obj["id_func"] .",'".  $obj["date_born"] ."','".  $obj["sex"] ."','".  $obj["item"] ."','".  $obj["unit"] . "','".  $obj["charge"] ."','".  $obj["l_name1"] ."','". $obj["l_name2"] ."','".  $obj["name"] ."','".  $obj["ci"] ."','".  $obj["expe"] ."',".  $obj["nit"] .",'".  $obj["date_ent"] ."','".$fbaja."','".
  $reasig ."',".
   $obj["haber_basico"] .",".
  $obj["dias_trab"] .",".
  $obj["haber_percibido"] .",".
  $obj["reint"] .",".
  $obj["bono_ant"] .",".
  $obj["total_ganado"] .",".
  $obj["devoluciones"] .",".
  $obj["asig_familiar"] .",".
      
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
  
  $obj["rc_iva"] .",".
  $obj["retenciones"] .",". 
  $obj["multa"] .",". 
  $obj["total_desc"] .",". 
  
  $pre_paq_monto  .",".
  $sub_natalidad .",".
  $lac_monto .",".
  $sepelio .",".
  	$seguro_pat_10 .",".
	$riesgo_pat_171 .",".
	$pro_vivienda_pat_2 .",".
	$ap_pat_sol_3 .",'".
  $xmes ."',".
  $xgestion .",".
  $obj["liquido_pagable"] . ",'".
  $obj["afp"] . "','".
  $banco . "','".$tipo."')";
  
  if ( $obj["id_func"]=== 314 )
		echo $registro;
	
  //registro historico
  $registro_h = "insert into t_planilla_h( id_func ,  fecha_nac ,  sexo ,  item_contrato ,  unidad ,  cargo ,  paterno ,  materno ,  nombres ,  ci ,  exp ,  nit ,  fec_ingreso ,
  baja ,  reasig ,  haber_basico ,  dias_trab ,  haber_percibido ,  reint ,  bono_ant ,  total_ganado ,  devoluciones ,  asig_familiar ,
  futuro_afp_10 ,  futuro_afp_riesgo_1_71 ,  futuro_afp_05 ,  futuro_afp_ap_sol_0_5 ,  futuro_ans_1 ,  
  prev_afp_10 ,  prev_afp_riesgo_1_71 ,  prev_afp_05 ,  prev_afp_ap_sol_0_5 ,  prev_ans_1 ,  
  rc_iva ,  retenciones ,  multa ,  total_desc ,
  pre_natal,natalidad,lactancia,sepelio,
  seguro_pat_10, riesgo_pat_171 ,pro_vivienda_pat_2,ap_pat_sol_3,
  mes ,  gestion ,  liquido_pagable,cod_afp , cta_banco, tipo_funcionario ) values (". 
$obj["id_func"] .",'".  $obj["date_born"] ."','".  $obj["sex"] ."','".  $obj["item"] ."','".  $obj["unit"] . "','".  $obj["charge"] ."','".  $obj["l_name1"] ."','". $obj["l_name2"] ."','".  $obj["name"] ."','".  $obj["ci"] ."','".  $obj["expe"] ."',".  $obj["nit"] .",'".  $obj["date_ent"] ."','".$fbaja."','".
  $reasig ."',".
   $obj["haber_basico"] .",".
  $obj["dias_trab"] .",".
  $obj["haber_percibido"] .",".
  $obj["reint"] .",".
  $obj["bono_ant"] .",".
  $obj["total_ganado"] .",".
  $obj["devoluciones"] .",".
  $obj["asig_familiar"] .",".
      
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
  
  $obj["rc_iva"] .",".
  $obj["retenciones"] .",". 
  $obj["multa"] .",". 
  $obj["total_desc"] .",". 
  
  $pre_paq_monto  .",".
  $sub_natalidad .",".
  $lac_monto .",".
  $sepelio .",".
  	$seguro_pat_10 .",".
	$riesgo_pat_171 .",".
	$pro_vivienda_pat_2 .",".
	$ap_pat_sol_3 .",'".
  $xmes ."',".
  $xgestion .",".
  $obj["liquido_pagable"] . ",'".
  $obj["afp"] . "','".
  $banco . "','".$tipo."')";
  
//echo $registro_h;

  $graba = mysqli_query($con,$registro);
  $grabahc = mysqli_query($con,$registro_h);
}
// ---------------------- proceso de contrato ----------------------
$query_c = "SELECT * FROM funcionario,t_ingreso,t_descuentos,contrato, char_per WHERE  estado = 1 and funcionario.id_func = t_ingreso.id_func and funcionario.id_func = t_descuentos.id_func and contrato.id_func = funcionario.id_func and funcionario.id_func = char_per.id_per order by funcionario.id_func" ;
$i = 0;
//echo $query ;
$planilla_c = mysqli_query($con,$query_c);
while($obj = mysqli_fetch_assoc($planilla_c))
{
	
//sacar fecha de baja 
		$sacar_fecha = "select * from baja_con where id_con = ". $obj["id_func"];
		$sacfecha = mysqli_query($con,$sacar_fecha);
		while($objfecha = mysqli_fetch_assoc($sacfecha))
		{ $fbaja = $objfecha["date_efect"]; }
		if(strlen($fbaja)==0)
		{$fbaja ="-";}
		$reasig = "-";
		if(strlen($obj["nit"])==0)
		{    $obj["nit"] = "0";	}
		
        $sacar_cta = "select * from cta_banc where id_func = ". $obj["id_func"];
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

		$sacar_asig = "select * from t_asignaciones where id_asig = ". $obj["id_func"];
		if($reg_asig = mysqli_query($con,$sacar_asig))
			{	
			      while($objasig = mysqli_fetch_assoc($reg_asig))
							{  
								  $pre_paq_monto = $objasig["paq_monto"] ;
								  $sub_natalidad = $objasig["sub_natalidad"];
								  $lac_monto = $objasig["lac_monto"];
								  $sepelio = $objasig["sepelio"];
							}
			}
			

if(ereg("FUTU", $obj["afp"]))
{
  $prev_afp_10 = 0 ;
  $prev_afp_riesgo_1_71 = 0;
  $prev_afp_05 = 0 ;
  $prev_afp_ap_sol_0_5  = 0;
  $prev_ans_1  =0 ; 
  
  $futuro_afp_10 = $obj["afp_10"] ;
  $futuro_afp_riesgo_1_71 = $obj["afp_riesgo_1_71"];
  $futuro_afp_05 = $obj["afp_05"] ;
  $futuro_afp_ap_sol_0_5  = $obj["afp_ap_sol_0_5"];
  $futuro_ans_1  =$obj["ans_1"] ;
}
else
{
  $futuro_afp_10 = 0 ;
  $futuro_afp_riesgo_1_71 = 0;
  $futuro_afp_05 = 0 ;
  $futuro_afp_ap_sol_0_5  = 0;
  $futuro_ans_1  =0 ; 
  
  $prev_afp_10 = $obj["afp_10"] ;
  $prev_afp_riesgo_1_71 = $obj["afp_riesgo_1_71"];
  $prev_afp_05 = $obj["afp_05"] ;
  $prev_afp_ap_sol_0_5  = $obj["afp_ap_sol_0_5"];
  $prev_ans_1  =$obj["ans_1"] ; 
}

$registro_c= "insert into t_planilla_c( id_func ,  fecha_nac ,  sexo ,  item_contrato ,  unidad ,  cargo ,  paterno ,  materno ,  nombres ,  ci ,  exp ,  nit ,  fec_ingreso ,
  baja ,  reasig ,  haber_basico ,  dias_trab ,  haber_percibido ,  reint ,  bono_ant ,  total_ganado ,  devoluciones ,  asig_familiar ,
  futuro_afp_10 ,  futuro_afp_riesgo_1_71 ,  futuro_afp_05 ,  futuro_afp_ap_sol_0_5 ,  futuro_ans_1 ,  
  prev_afp_10 ,  prev_afp_riesgo_1_71 ,  prev_afp_05 ,  prev_afp_ap_sol_0_5 ,  prev_ans_1 ,  
  rc_iva ,  retenciones ,  multa ,  total_desc ,
  pre_natal,natalidad,lactancia,sepelio,
  seguro_pat_10, riesgo_pat_171 ,pro_vivienda_pat_2,ap_pat_sol_3,
  mes ,  gestion ,  liquido_pagable,cod_afp , cta_banco, tipo_funcionario ) values (". 
$obj["id_func"] .",'".  $obj["date_born"] ."','".  $obj["sex"] ."','".  $obj["item"] ."','".  $obj["unit"] . "','".  $obj["charge"] ."','".  $obj["l_name1"] ."','". $obj["l_name2"] ."','".  $obj["name"] ."','".  $obj["ci"] ."','".  $obj["expe"] ."',".  $obj["nit"] .",'".  $obj["date_ent"] ."','".$fbaja."','".
  $reasig ."',".
   $obj["haber_basico"] .",".
  $obj["dias_trab"] .",".
  $obj["haber_percibido"] .",".
  $obj["reint"] .",".
  $obj["bono_ant"] .",".
  $obj["total_ganado"] .",".
  $obj["devoluciones"] .",".
  $obj["asig_familiar"] .",".    
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
  
  $obj["rc_iva"] .",".
  $obj["retenciones"] .",". 
  $obj["multa"] .",". 
  $obj["total_desc"] .",". 
  
  $pre_paq_monto  .",".
  $sub_natalidad .",".
  $lac_monto .",".
  $sepelio .",".
  	$seguro_pat_10 .",".
	$riesgo_pat_171 .",".
	$pro_vivienda_pat_2 .",".
	$ap_pat_sol_3 .",'".
  $xmes ."',".
  $xgestion .",".
  $obj["liquido_pagable"] . ",'".
  $obj["afp"] . "','".
  $banco . "','EVENTUAL')";
  
 //echo $registro_c;
 //registro historico
 $registro_hc = "insert into t_planilla_h( id_func ,  fecha_nac ,  sexo ,  item_contrato ,  unidad ,  cargo ,  paterno ,  materno ,  nombres ,  ci ,  exp ,  nit ,  fec_ingreso ,
  baja ,  reasig ,  haber_basico ,  dias_trab ,  haber_percibido ,  reint ,  bono_ant ,  total_ganado ,  devoluciones ,  asig_familiar ,
  futuro_afp_10 ,  futuro_afp_riesgo_1_71 ,  futuro_afp_05 ,  futuro_afp_ap_sol_0_5 ,  futuro_ans_1 ,  
  prev_afp_10 ,  prev_afp_riesgo_1_71 ,  prev_afp_05 ,  prev_afp_ap_sol_0_5 ,  prev_ans_1 ,  
  rc_iva ,  retenciones ,  multa ,  total_desc ,
  pre_natal,natalidad,lactancia,sepelio,
  seguro_pat_10, riesgo_pat_171 ,pro_vivienda_pat_2,ap_pat_sol_3,
  mes ,  gestion ,  liquido_pagable,cod_afp , cta_banco, tipo_funcionario ) values (". 
$obj["id_func"] .",'".  $obj["date_born"] ."','".  $obj["sex"] ."','".  $obj["item"] ."','".  $obj["unit"] . "','".  $obj["charge"] ."','".  $obj["l_name1"] ."','". $obj["l_name2"] ."','".  $obj["name"] ."','".  $obj["ci"] ."','".  $obj["expe"] ."',".  $obj["nit"] .",'".  $obj["date_ent"] ."','".$fbaja."','".
  $reasig ."',".
   $obj["haber_basico"] .",".
  $obj["dias_trab"] .",".
  $obj["haber_percibido"] .",".
  $obj["reint"] .",".
  $obj["bono_ant"] .",".
  $obj["total_ganado"] .",".
  $obj["devoluciones"] .",".
  $obj["asig_familiar"] .",".
      
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
  
  $obj["rc_iva"] .",".
  $obj["retenciones"] .",". 
  $obj["multa"] .",". 
  $obj["total_desc"] .",". 
  
  $pre_paq_monto  .",".
  $sub_natalidad .",".
  $lac_monto .",".
  $sepelio .",".
  	$seguro_pat_10 .",".
	$riesgo_pat_171 .",".
	$pro_vivienda_pat_2 .",".
	$ap_pat_sol_3 .",'".
  $xmes ."',".
  $xgestion .",".
  $obj["liquido_pagable"] . ",'".
  $obj["afp"] . "','".
  $banco . "','".$tipo."')";
 

  $graba = mysqli_query($con,$registro_c);
  $grabahc = mysqli_query($con,$registro_hc);
 
}

?>
<body>
<table width="408" border="1" align="center">
<tr>
<td width="298">
<table width="50%" border="0" align="center">
  <tbody>
    <tr>
      <td height="32" align="center"><?php echo "Planilla procesada del mes:".$xmes." de la Gestión:". $xgestion;  ?></td>
    </tr>
    <tr>
      <td height="47" align="center">
		<script type="text/JavaScript" language="javascript">
        function confirmar ( mensaje ) {
        return confirm( mensaje );
        }
        </script>
<a href="almacenar.php?mes=<?php echo $xmes ?>&gestion=<?php echo $xgestion ?>" onclick="return confirmar('¿Desea guardar planilla procesada?')">GRABAR PLANILLA DE HABERES COMO RESPALDO ?</a>
      <span style="text-align: center"></span></td>
    </tr>
  </tbody>
</table>
</td>
</tr>
</table>

</body>
</html>