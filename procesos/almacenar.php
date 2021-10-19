<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
include("db.php");
$xmes = $_GET["mes"];
$xgestion = $_GET["gestion"];

$renombrar = $xmes."_".$xgestion ;
		//$tabla = "DESCRIBE t_planilla_".$xmes."_".$xgestion ;
		//if(mysqli_query($con,$tabla)) 
		//{ 
		//echo "la planilla ya fue Almacenada...."; 
		//} 
		//else
		//{
		//$cambiar ="CREATE TABLE t_planilla_".$renombrar. " SELECT * FROM t_planilla";
		//mysqli_query($con,$cambiar);
		//}
$borrar = "drop table t_planilla_".	$renombrar ;
mysqli_query($con,$borrar);

$cambiar ="CREATE TABLE t_planilla_".$renombrar. " SELECT * FROM t_planilla";
mysqli_query($con,$cambiar);
mysqli_close($con);

?>
<body>
<script type="text/javascript">
function redireccionar(){
  window.location="../menu.php";
} 
setTimeout ("redireccionar()", 0); 
</script>
</body>
</html>