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
include("procesos/num_letras.php");
include("procesos/db.php");
$query = "SELECT * FROM t_planilla_c,t_tributaria where id_func = id_func_trib" ;
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
      <td colspan="2" rowspan="5" style="text-align: center"><img src="images/escudo.png" width="85" height="101" alt=""/></td>
      <td width="19%" style="text-align: left">Entidad:</td>
      <td colspan="3" bgcolor="#EBDF76">GOBERNACIÓN DE SANTA CRUZ</td>
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
      <td colspan="2">PAGO DE HABERES MES : <?php echo $obj["mes"] ." DE ".$obj["gestion"] ; ?></td>
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
      <td style="text-align: left">RC-IVA:</td>
      <td><?php echo $obj["rc_iva"] ;?></td>
      <td style="text-align: left">Afp 10% :</td>
      <td>
	  <?php if($obj["cod_afp"]=="FUTURO") 
	  { echo $obj["futuro_afp_10"] ; }
	  else { echo $obj["prev_afp_10"] ; }?>
      </td>
    </tr>
    <tr>
      <td style="text-align: left">Reintegro</td>
      <td><?php echo $obj["reint"] ; ?></td>
      <td style="text-align: left">Multa:</td>
      <td><?php echo $obj["multa"] ; ?></td>
      <td style="text-align: left">Afp 1.71% :</td>
      <td><?php if($obj["cod_afp"]=="FUTURO") 
	  { echo $obj["futuro_afp_riesgo_1_71"] ; }
	  else { echo $obj["prev_afp_riesgo_1_71"] ; }?></td>
    </tr>
    <tr>
      <td style="text-align: left">Bono Ant.</td>
      <td><?php echo $obj["bono_ant"] ; ?></td>
      <td style="text-align: left">Retenciones</td>
      <td><?php echo $obj["retenciones"] ; ?></td>
      <td style="text-align: left">Afp 0.5% :</td>
      <td><?php if($obj["cod_afp"]=="FUTURO") 
	  { echo $obj["futuro_afp_05"] ; }
	  else { echo $obj["prev_afp_05"] ; }?></td>
    </tr>
    <tr>
      <td style="text-align: left">Devoluciones</td>
      <td><?php echo $obj["devoluciones"] ; ?></td>
      <td style="text-align: left">&nbsp;</td>
      <td>&nbsp;</td>
      <td style="text-align: left">Afp.Sol 0.5% :</td>
      <td><?php if($obj["cod_afp"]=="FUTURO") 
	  { echo $obj["futuro_afp_ap_sol_0_5"] ; }
	  else { echo $obj["prev_afp_ap_sol_0_5"] ; }?></td>
    </tr>
    <tr>
      <td style="text-align: right">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td style="text-align: left">Afp.ANS 1% :</td>
      <td><?php if($obj["cod_afp"]=="FUTURO") 
	  { echo $obj["futuro_ans_1"] ; }
	  else { echo $obj["prev_ans_1"] ; }?></td>
    </tr>
    <tr>
      <td bgcolor="#C3F1C0" style="text-align: right">Total Ganado:</td>
      <td bgcolor="#C3F1C0"><?php echo $obj["total_ganado"] ; ?></td>
      <td colspan="2" bgcolor="#F4EEB7">&nbsp;</td>
      <td bgcolor="#F4EEB7">Total Descuentos:</td>
      <td bgcolor="#F4EEB7"><?php echo $obj["total_desc"] ; ?></td>
    </tr>
    <tr>
      <td style="text-align: right">Liquido Pagable:</td>
      <td><?php echo number_format($obj["liquido_pagable"],2) ;?></td>
      <td colspan="4">
      <?php 
	  $V=new EnLetras();
 	  $con_letra = ($V->ValorEnLetras($obj["liquido_pagable"],""));
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