<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<style type="text/css">
.tdicon21 {width: 250px !important; 
}
.tdicon21 {width: 250px !important; 
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
<style>
.tdicon{ width: 5px !important; }
.tdicon2{ 
width: 150px !important; 
}
</style>

<body  >
<div class="container-fluid aligncenter" >
  <h5  class="alert-success">
    <?php 
$cod_proyecto = $_GET["id"];  //1
include("db.php");

if(!$dbconn) {
echo "Error: No se ha podido conectar a la base de datos\n";
} else {
//echo "Conexión exitosa\n";
}
 
$query = "SELECT * FROM t_estado WHERE  t_estado.id_proy = ".$cod_proyecto ;

$estado = pg_query($dbconn,$query) or die('Error: ' . pg_last_error());
while( $obj = pg_fetch_object($estado) )
{
	if($obj->sw_apro=='Observado')
	{  
       $cod_observado = $obj->sw_apro ;
	   $detalle = $obj->observaciones ;
 	}
}

?>
<?php 
 if ($cod_observado=='Observado')
 {  ?>
</h5>
  <table width="100%" border="0" >
    <tbody>
   <tr>
     <td height="32" align="center" style="color: #FFFFFF; font-weight: bold; background-color:#454f5e"><p>UNIDAD DE TALENTO HUMANO</p>
       <p>GENERACION DE PLANILLAS</p></td>
   </tr>
  </tbody>
</table>
<?php } ?>

<?php 
 if ($cod_observado!='Observado')
 {  ?>
  <form action="ver_fichas.php" method="POST" class="form-inline" >
  <table  border="2" align="center" cellpadding="5" cellspacing="5" class="table  table-striped " bgcolor="#454f5e">
  <tr>
  <td width="399" height="240">
  
  <table width="90%"  align="center"  class="table  table-striped " bgcolor="#eeeeee">
    <tr>
    <td height="79">
      <input type="hidden" id="xproy" name="xproy"  value="<?php echo $cod_proyecto ; ?>">
      <div>
        <label class="custom-control-label table-condensed" for="meses">MES DE PROCESO:</label>
        <select name="meses" id="meses" class="form-control">
          <option value="ENERO">ENERO</option>
          <option value="FEBRERO">FEBRERO</option>
          <option value="MARZO">MARZO</option>
          <option value="ABRIL">ABRIL</option>
          <option value="MAYO">MAYO</option>
          <option value="JUNIO">JUNIO</option>
          <option value="JULIO">JULIO</option>
          <option value="AGOSTO">AGOSTO</option>
          <option value="SEPTIEMBRE">SEPTIEMBRE</option>
          <option value="OCTUBRE">OCTUBRE</option>
          <option value="NOVIEMBRE">NOVIEMBRE</option>
          <option value="DICIEMBRE">DICIEMBRE</option>
          </select>
      </div>    </td>
    </tr>
          <tr>
                  <td height="52" >GESTIÓN:
                    <select name="select" id="select">
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                      <option value="2025">2025</option>
                  </select></td>
            </tr>
        <tr>
             <td height="32"  >&nbsp;</td>
            </tr>
        <tr>
            <td height="40">
                <button type="submit" class="btn btn-primary">PROCESAR</button>
            </td>
            </tr>
   </table>
 </td>
 </tr>
 </table>
  </form>
</div>
</form>
<?php  } ?>
</body>
</html>