<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style type="text/css">
body {
	background-color: #cad0c4;
}
</style>
</head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Excel.Sheet>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<link href='https://fonts.googleapis.com/css?family=Merriweather:300' rel='stylesheet' type='text/css'>
<link rel="canonical" href="https://getbootstrap.com/docs/4.1/components/forms/">

<?php include("db.php");
function calculaedad($fechanacimiento){
  list($ano,$mes,$dia) = explode("-",$fechanacimiento);
  $ano_diferencia  = date("Y") - $ano;
  $mes_diferencia = date("m") - $mes;
  $dia_diferencia   = date("d") - $dia;
  if ($dia_diferencia < 0 || $mes_diferencia < 0)
    $ano_diferencia--;
	//echo $ano_diferencia;
	//echo "<br>";
  return $ano_diferencia;
}


$query_c = "SELECT * FROM funcionario,t_ingreso,t_descuentos,contrato, char_per WHERE  estado = 1 and funcionario.id_func = t_ingreso.id_func and funcionario.id_func = t_descuentos.id_func and contrato.id_func = funcionario.id_func and funcionario.id_func = char_per.id_per order by funcionario.id_func" ;
$planilla = mysqli_query($con,$query_c);
while($obj = mysqli_fetch_assoc($planilla))
		{
			$cumpleanos = new DateTime($obj["date_born"]);
			$hoy = new DateTime();
			$annos = $hoy->diff($cumpleanos);
			if(($annos->y)>=65)
				{
				$borra = "delete from t_planilla_c_mayores";
				$borrar = mysqli_query($con,$borra);
				$mayores = "insert into t_planilla_c_mayores select * from t_planilla_c where id_func = ".$obj["id_func"];
				$planilla_may = mysqli_query($con,$mayores);
				};	
		}
$annos = 0;
$queryp = "SELECT * FROM funcionario,t_ingreso,t_descuentos,permanente, char_per WHERE  estado = 1 and funcionario.id_func = t_ingreso.id_func and funcionario.id_func = t_descuentos.id_func and permanente.id_func = funcionario.id_func and funcionario.id_func = char_per.id_per" ;
$planillap = mysqli_query($con,$queryp);
while($objp = mysqli_fetch_assoc($planillap))
		{
			$cumpleanos = new DateTime($objp["date_born"]);
			$hoy = new DateTime();
			$annos = $hoy->diff($cumpleanos);
			if(($annos->y>=65) && ($annos->y<100))
				{
				$mayoresp = "insert into t_planilla_c_mayores select * from t_planilla_c where id_func = ".$objp["id_func"];
				$planilla_may = mysqli_query($con,$mayoresp);
				};	
		}

?>
<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="50%" border="1" align="center" cellpadding="1" cellspacing="0" bgcolor="#454f5e" >
  <tbody>
    <tr>
      <td height="27" align="center"  style="color:rgba(251,249,249,1.00)"><?php
echo "PLANILLA GENERADA CON MAYORES A 65 AÑOS"
?></td>
    </tr>
  </tbody>
</table>

<script language="JavaScript">

    setTimeout("location.href='../menu.php'", 5000);

  </script>
</body>
</html>