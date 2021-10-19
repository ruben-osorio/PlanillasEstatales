<!doctype html>
<!DOCTYPE html>
<html>
<head>
<title>Bono 3 de MAYO</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?php include("db.php");   
?>


<!-- Inicio de tabla responsive-->
    <table width="106%"  border="0" align="center" cellpadding="1" cellspacing="0" class="table">
        <thead>
            <tr>
              <th  style="text-align:left">
              <img src="../images/escudo.png" width="98" height="101" alt=""/> </th>
              <th colspan="12"  style="text-align: center; font-size: 16px;"><p>CONCEJO MUNICIPAL DE EL ALTO</p>
              <p>PLANILLA &quot;BONO 6 DE MARZO&quot;</p></th>
            </tr>
          <tr bgcolor="#EFE9E9" style="text-align: center">	
                <th width="7%" >UNIDAD</th>
                <th width="4%">ID</th>
                <th width="14%">SEXO</th>
                <th width="6%">ITEM</th>
                <th width="7%">CARGO</th>
                <th width="11%">AP.PATERNO</th>
                <th width="11%">AP.MATERNO</th>
                <th width="9%">NOMBRES</th>
                <th width="4%">C.I.</th>
                <th width="7%">EXP.</th>
                <th width="5%">MES</th>
                <th width="8%">GESTIÓN</th>
                <th width="18%">BONO 6 DE MARZO</th>
          </tr>
        </thead>
 <tbody>
 <?php 
 $consulg = "select * from t_mes_activo ";
$sacar_ges = mysqli_query($con,$consulg);
while($objges = mysqli_fetch_assoc($sacar_ges))
{
	$xgestion = $objges["gestion"];
}
 
$consulg = "select * from t_salario_minimo";
$sacar_salario = mysqli_query($con,$consulg);
while($objges = mysqli_fetch_assoc($sacar_salario))
{ 	$bono = $objges["salario_minimo"];  }

$consulta = "select * from funcionario, permanente
where funcionario.id_func = permanente.id_func and  estado <> 0 
order by funcionario.id_func" ;
//echo $consulta ;

$planilla_bono = mysqli_query($con,$consulta);
while($obj_bono = mysqli_fetch_assoc($planilla_bono))
{	
	$cargo = "select * from char_per where char_per.id_per = ". $obj_bono["id_func"];
	$cargo_agui = mysqli_query($con,$cargo);
		while($objcargo = mysqli_fetch_assoc($cargo_agui))
		{
			$unidad = $objcargo["unit"] ;
			$cargo_funcionario = $objcargo["charge"] ;
		}

  $fechaEnvio = $obj_bono["date_ent"] ;   //"2020-10-06";
  $fechaActual = ($xgestion-1)."-12-31"; //date('Y-m-d'); 
  $datetime1 = date_create($fechaEnvio);
  $datetime2 = date_create($fechaActual);
  $contador = date_diff($datetime1, $datetime2);
  $differenceFormat = '%a';
  $mes = ($contador->format($differenceFormat)/30);
  if($mes>11.999)
		{	?>       
            <tr>
                <td><?php echo $unidad ;  ?></td>
                <td><?php echo $obj_bono["id_func"] ;  ?></td>
                <td><?php echo $obj_bono["sex"] ;  ?></td>
                <td><?php echo $obj_bono["item"] ;  ?></td>
                <td><?php echo $cargo_funcionario ;  ?></td>
                <td><?php echo $obj_bono["l_name1"] ;  ?></td>
                <td><?php echo $obj_bono["l_name2"] ;  ?></td>
                <td><?php echo $obj_bono["name"] ;  ?></td>
                <td><?php echo $obj_bono["ci"] ;  ?></td>
                <td><?php echo $obj_bono["expe"] ;  ?></td>
                <td><?php echo "MARZO" ;  ?></td>
                <td><?php echo $xgestion ;  ?></td>
                <td><?php echo number_format($bono,0) ;  $bono_total += $bono ;?></td>
            </tr>
     
 <?php
		}
}?>
      <tr>


              <td colspan="12" style="text-align:right">TOTAL:</td>
              <td><?php echo  number_format($bono_total,0).".-"  ; ?></td>
    </tr> 
      </tbody>
</table>
<table border="0" cellpadding="1" cellspacing="0">
<tbody>  
              
          <tr>
             <td  colspan="2"><img src="../images/elaborado.png" width="294" height="171" alt=""/></td>
             <td >
         
             </td>
             <td colspan="2">
             <img src="../images/revisado.png" width="292" height="171" alt=""/></td>
             <td >
           
             </td>
             <td colspan="2">
             <img src="../images/aprobado.png" width="307" height="169" alt=""/></td>
             <td >
          
             </td>
             <td colspan="2">
             <img src="../images/autorizado.png" width="297" height="172" alt=""/></td>
		  </tr>
    </tbody>
</table>
    

</body>
