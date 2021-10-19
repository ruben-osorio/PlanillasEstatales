<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 

$con=mysqli_connect("localhost","root","","registrorrhh");
if (mysqli_connect_errno())
{
	echo "Error en la conexión: " . mysqli_connect_error();
}
mysqli_set_charset($con,"utf8");


$tableName  = 't_tributaria';
$fecha = date("d_m_Y") ;

$backupFile = 't_tributaria'.$fecha ;
//echo $backupFile ;
//$query      = "SELECT * INTO OUTFILE '".$backupFile."' FROM  ".$tableName;
$query      ="CREATE TABLE ".$backupFile ." SELECT * FROM t_tributaria";
echo $query ;
$result = mysqli_query($con,$query);

$actu = "update t_tributaria
set saldo_favor_dependiente_per_anterior = saldo_favor_dep_mes_siguiente,saldo_favor_dep_mes_siguiente = 0, saldo_periodo_anterior_actualizado = 0, saldo_favor_fisco = 0, 
saldo_favor_dependiente = 0, mantenimiento_periodo_anterior = 0, saldo_periodo_anterior_actualizado = 0, 
saldo_utilizado = 0, impuesto_rc_iva_retenido = 0 " ;
//mysqli_query($con,$actu);

?>
<body>
</body>
</html>