<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Excel.Sheet>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<link href='https://fonts.googleapis.com/css?family=Merriweather:300' rel='stylesheet' type='text/css'>
<link rel="canonical" href="https://getbootstrap.com/docs/4.1/components/forms/">
<?php 
$xmes = $_POST["meses"];
$xgestion = $_POST["gestion"];
include("db.php");
mysqli_query($con,"delete from t_planilla");

$query = "SELECT * FROM funcionario,t_ingreso,t_descuentos,permanente, char_per WHERE  estado = 1 and funcionario.id_func = t_ingreso.id_func and funcionario.id_func = t_descuentos.id_func and permanente.id_func = funcionario.id_func and funcionario.id_func = char_per.id_per" ;
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

$registro = "insert into t_planilla( id_func ,  fecha_nac ,  sexo ,  item_contrato ,  unidad ,  cargo ,  paterno ,  materno ,  nombres ,  ci ,  exp ,  nit ,  fec_ingreso ,
  baja ,  reasig ,  haber_basico ,  dias_trab ,  haber_percibido ,  reint ,  bono_ant ,  total_ganado ,  devoluciones ,  asig_familiar ,
  afp_10 ,  afp_riesgo_1_71 ,  afp_05 ,  afp_ap_sol_0_5 ,  ans_1 ,  rc_iva ,  retenciones ,  multa ,  total_desc ,
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
  $obj["afp_10"] .",".
  $obj["afp_riesgo_1_71"] .",".
  $obj["afp_05"] .",".
  $obj["afp_ap_sol_0_5"] .",".  
  $obj["ans_1"] .",". 
  $obj["rc_iva"] .",".
  $obj["retenciones"] .",". 
  $obj["multa"] .",". 
  $obj["total_desc"] .",'". 
  $xmes ."',".
  $xgestion .",".
  $obj["liquido_pagable"] . ",'".
  $obj["afp"] . "','".
  $banco . "','".$tipo."')";
  
 $graba = mysqli_query($con,$registro);
 //echo $graba ;
 
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
		
$registro_c = "insert into t_planilla( id_func ,  fecha_nac ,  sexo ,  item_contrato ,  unidad ,  cargo ,  paterno ,  materno ,  nombres ,  ci ,  exp ,  nit ,  fec_ingreso ,
  baja ,  reasig ,  haber_basico ,  dias_trab ,  haber_percibido ,  reint ,  bono_ant ,  total_ganado ,  devoluciones ,  asig_familiar ,
  afp_10 ,  afp_riesgo_1_71 ,  afp_05 ,  afp_ap_sol_0_5 ,  ans_1 ,  rc_iva ,  retenciones ,  multa ,  total_desc ,
  mes ,  gestion ,  liquido_pagable,cod_afp , cta_banco, tipo_funcionario) values (". 
$obj["id_func"] .",'".  $obj["date_born"] ."','".  $obj["sex"] ."','".  $obj["name_con"] ."','".  $obj["unit"] . "','".  $obj["charge"] ."','".  $obj["l_name1"] ."','". $obj["l_name2"] ."','".  $obj["name"] ."','".  $obj["ci"] ."','".  $obj["expe"] ."',".  $obj["nit"] .",'".  $obj["date_ent"] ."','".$fbaja."','".
  $reasig ."',".
   $obj["haber_basico"] .",".
  $obj["dias_trab"] .",".
  $obj["haber_percibido"] .",".
  $obj["reint"] .",".
  $obj["bono_ant"] .",".
  $obj["total_ganado"] .",".
  $obj["devoluciones"] .",".
  $obj["asig_familiar"] .",".    
  $obj["afp_10"] .",".
  $obj["afp_riesgo_1_71"] .",".
  $obj["afp_05"] .",".
  $obj["afp_ap_sol_0_5"] .",".  
  $obj["ans_1"] .",". 
  $obj["rc_iva"] .",".
  $obj["retenciones"] .",". 
  $obj["multa"] .",". 
  $obj["total_desc"] .",'". 
  $xmes ."',".
  $xgestion .",".
  $obj["liquido_pagable"] . ",'".
  $obj["afp"] . "','".
  $banco . "','CONTRATO')";
  
 //echo $registro_c;

  $graba = mysqli_query($con,$registro_c);
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
<a href="almacenar.php?mes=<?php echo $xmes ?>&gestion=<?php echo $xgestion ?>" onclick="return confirmar('¿Desea guardar planilla procesada?')">ALMACENAR PLANILLA DE HABERES ?</a>
      <span style="text-align: center"></span></td>
    </tr>
  </tbody>
</table>
</td>
</tr>
</table>

</body>
</html>