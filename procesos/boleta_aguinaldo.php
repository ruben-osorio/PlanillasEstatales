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
$query = "SELECT * FROM t_planilla_aguinaldo " ;
$i = 0;
//echo $query ;;
$planilla = mysqli_query($con,$query);
$i = 1 ;
$j = $i -1 ;
$cont = 0 ;
while($obj = mysqli_fetch_assoc($planilla))
{
?>	
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
      <td height="20" style="text-align: left">Meses trabajados:</td>
      <td><?php echo $obj["dias_trab"] ; ?></td>
      <td style="text-align: left">AFP:</td>
      <td><?php echo $obj["cod_afp"] ; ?></td>
    </tr>
    <tr>
      <td width="22%" style="text-align: left">N° Boleta:</td>
      <td width="17%"><?php echo $obj["id_func"] ; ?></td>
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
      <td colspan="2">PAGO DE AGUINALDO MES : <?php echo $obj["mes"] ." DE ".$obj["gestion"] ; ?></td>
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
      <td style="text-align: left">Haber Percibido:</td>
      <td><?php echo $obj["haber_percibido"] ; ?></td>
      <td colspan="4" rowspan="5" style="text-align: center"><p>EL CONCEJO MUNICIPAL DE EL ALTO LES DESEA</p>
      <p>&quot;FELIZ NAVIDAD Y PROSPERO AÑO NUEVO&quot;<span style="text-align: center"></span></p></td>
    </tr>
    <tr>
      <td style="text-align: left">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td style="text-align: left">Bono Ant.</td>
      <td><?php echo $obj["bono_ant"] ; ?></td>
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
      <td bgcolor="#C3F1C0" style="text-align: right">Total Ganado:</td>
      <td bgcolor="#C3F1C0"><?php echo $obj["total_ganado"] ; ?></td>
      <td colspan="2" bgcolor="#F4EEB7">&nbsp;</td>
      <td bgcolor="#F4EEB7">&nbsp;</td>
      <td bgcolor="#F4EEB7">&nbsp;</td>
    </tr>
    <tr>
      <td style="text-align: right">Liquido Pagable:</td>
      <td><?php echo $obj["liquido_pagable"] ;?></td>
      <td colspan="4">
      <?php 
	  $V=new EnLetras();
 	  $con_letra = ($V->ValorEnLetras($obj["total_ganado"],""));
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
}  //while
?>


</html>