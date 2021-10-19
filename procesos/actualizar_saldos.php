<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php include("db.php");
$tableName  = 't_tributaria';
$fecha = date("d_m_Y") ;

$backupFile = 't_tributaria_'.$fecha ;
//echo $backupFile ;

$query      ="CREATE TABLE ".$backupFile ." SELECT * FROM t_tributaria";
//echo $query ;

$result = mysqli_query($con,$query);
?>

<?php 
$actu = "update t_tributaria
set saldo_favor_dependiente_per_anterior = saldo_favor_dep_mes_siguiente,saldo_favor_dep_mes_siguiente = 0, saldo_periodo_anterior_actualizado = 0, saldo_favor_fisco = 0, 
saldo_favor_dependiente = 0, mantenimiento_periodo_anterior = 0, saldo_periodo_anterior_actualizado = 0, 
saldo_utilizado = 0, impuesto_rc_iva_retenido = 0 " ;
mysqli_query($con,$actu);

?>
<script>
alert("PLANILLA TRIBUTARIA DEL MES ANTERIOR GRABADO CON EL NOMBRE : <?php echo $backupFile ; ?> , PLANILLA TRIBUTARIA ACTUAL ACTUALIZADA CON SALDOS A FAVOR Y PREPARADA PARA RECEPCIONAR RC-IVA");
window.location="/planillas/menu.php";

</script>
<body>
</body>
</html>