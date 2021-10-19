<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<STYLE>
 H1.SaltoDePagina
 {
     PAGE-BREAK-AFTER: always
 }
</STYLE>
</head>
<?php 
include("num_letras.php");
include("db.php");
$i = 0;
$i = 1 ;
$j = $i -1 ;
$cont = 0 ;
$consulg = "select * from t_mes_activo ";
$sacar_ges = mysqli_query($con,$consulg);
while($objges = mysqli_fetch_assoc($sacar_ges))
{
	$mes = $objges["mes"];
	$xgestion = $objges["gestion"];
}
 
$consulg = "select * from t_salario_minimo";
$sacar_salario = mysqli_query($con,$consulg);
while($objges = mysqli_fetch_assoc($sacar_salario))
{ 	$bono = $objges["salario_minimo"];  }

//$consulta = "select * from funcionario, permanente where funcionario.id_func = permanente.id_func and  estado <> 0 order by funcionario.id_func" ;
$consulta = "SELECT * FROM t_planilla_c where mes = '".$mes ."'" ;
//echo $consulta ;
$planilla_bono = mysqli_query($con,$consulta);
while($obj = mysqli_fetch_assoc($planilla_bono))
{	
	$cargo = "select * from char_per where char_per.id_per = ". $obj["id_func"];
	$cargo_agui = mysqli_query($con,$cargo);
		while($objcargo = mysqli_fetch_assoc($cargo_agui))
		{
			$unidad = $objcargo["unit"] ;
			$cargo_funcionario = $objcargo["charge"] ;
		}

  $fechaEnvio = $obj["fec_ingreso"] ;   //"2020-10-06";
  $fechaActual = ($xgestion-1)."-12-31"; //date('Y-m-d'); 
  $datetime1 = date_create($fechaEnvio);
  $datetime2 = date_create($fechaActual);
  $contador = date_diff($datetime1, $datetime2);
  $differenceFormat = '%a';
  $mes = ($contador->format($differenceFormat)/30);
  if($mes>11.999)
		{	?>   
	
<body>
<hr>

<table width="71%"  border="0" align="center" cellpadding="1" cellspacing="0"   style="font-size:9px">
  <tbody>
    <tr>
      <td colspan="2" rowspan="5" style="text-align: center"><img src="../images/escudo.png" width="85" height="101" alt=""/></td>
      <td width="19%" style="text-align: left">Entidad:</td>
      <td colspan="3" bgcolor="#EBDF76">CONCEJO MUNICIPAL DE EL ALTO</td>
    </tr>
    <tr>
      <td height="18" style="text-align: left">Cod.Ent.</td>
      <td width="14%">1205-00</td>
      <td width="14%" style="text-align: left">N° Item:</td>
      <td width="14%"><?php echo $obj["item_contrato"] ; ?></td>
    </tr>
    <tr>
      <td height="18" style="text-align: left">Escala Salarial:</td>
      <td>&nbsp;</td>
      <td style="text-align: left">Fecha Nac.</td>
      <td><?php echo $obj["fecha_nac"]  ;  ?></td>
    </tr>
    <tr>
      <td height="18" style="text-align: left">Nivel:</td>
      <td>&nbsp;</td>
      <td style="text-align: left">Saldo RC-IVA:</td>
      <td><?php echo $obj["saldo_favor_dep_mes_siguiente"] ; ?></td>
    </tr>
    <tr>
      <td height="20" style="text-align: left">N° Dias Trab.</td>
      <td><?php echo $obj["dias_trab"] ; ?></td>
      <td style="text-align: left">AFP:</td>
      <td><?php echo $obj["cod_afp"] ; ?></td>
    </tr>
    <tr>
      <td width="22%" style="text-align: left">N° Boleta:</td>
      <td width="17%">&nbsp;</td>
      <td style="text-align: left">Antiguedad:</td>
      <td>&nbsp;</td>
      <td><span style="text-align: left">Cargo:</span></td>
      <td><?php echo $obj["cargo"] ; ?></td>
    </tr>
    <tr>
      <td style="text-align: left">Año/Mes:</td>
      <td><?php echo $obj["mes"] ."/".$obj["gestion"] ; ?></td>
      <td colspan="2" style="text-align: left">Lugar Trabajo: 
      <?php  echo $obj["unidad"] ;  ?></td>
      <td><span style="text-align: left">CI::</span></td>
      <td><?php echo $obj["ci"] ." ". $obj["exp"] ; ?></td>
    </tr>
    <tr>
      <td height="20" style="text-align: left">Concepto de Pago:</td>
      <td colspan="2">PAGO DE BONO 3 de MAYO MES : <?php echo $obj["mes"] ." DE ".$obj["gestion"] ; ?></td>
      <td><span style="text-align: right">Nombre:</span></td>
      <td colspan="2"><?php echo $obj["nombres"] ." ".  $obj["paterno"] ."  ". $obj["materno"]; ?></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#C3F1C0" style="font-size: 10px; text-align: center;"><strong>INGRESOS</strong></td>
      <td colspan="4" bgcolor="#C3F1C0" style="font-size: 10px; text-align: center;"><strong>DESCUENTOS</strong></td>
    </tr>
    <tr>
      <td bgcolor="#C3F1C0" style="font-size: 10px; text-align: center;"><strong>DETALLE</strong></td>
      <td bgcolor="#C3F1C0" style="font-size: 10px; text-align: center;"><strong>IMPORTE  Bs.</strong></td>
      <td bgcolor="#C3F1C0" style="font-size: 10px; text-align: center;"><strong>ACREEDOR</strong></td>
      <td bgcolor="#C3F1C0" style="font-size: 10px; text-align: center;"><strong>IMPORTE Bs..</strong></td>
      <td bgcolor="#C3F1C0" style="font-size: 10px; text-align: center;"><strong>ACREEDOR</strong></td>
      <td bgcolor="#C3F1C0" style="font-size: 10px; text-align: center;"><strong>IMPORTE Bs.</strong></td>
    </tr>
    <tr>
      <td style="text-align: left">Salario Minimo Nacional :</td>
      <td><?php echo number_format($bono,0) ; ?></td>
      <td colspan="4" rowspan="5" style="text-align: center"><p>LEY MUNICIPAL N°072 - INCENTIVO AL DESEMPEÑO</p>
      <p>BONO 3 de MAYO</p></td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td style="text-align: right">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#C3F1C0" style="text-align: right">&nbsp;</td>
      <td bgcolor="#C3F1C0">&nbsp;</td>
      <td colspan="2" bgcolor="#F4EEB7">&nbsp;</td>
      <td bgcolor="#F4EEB7">&nbsp;</td>
      <td bgcolor="#F4EEB7">&nbsp;</td>
    </tr>
    <tr>
      <td style="text-align: right">Liquido Pagable:</td>
      <td><?php echo number_format($bono,0) ;?></td>
      <td colspan="4">
      Son:
      <?php 
	  $V=new EnLetras();
 	  $con_letra = ($V->ValorEnLetras($bono,""));
	  echo $con_letra ;
	  ?>
      </td>
    </tr>
  </tbody>
</table>
<br>
<?php 

$cont = $cont +1 ;
if($cont == 3)
{
	echo "<H1 class=SaltoDePagina> </H1>" ;
	$cont = 0;
}

?>

</body>
<?php 
		} // if 11.999
}  //while
?>


</html>