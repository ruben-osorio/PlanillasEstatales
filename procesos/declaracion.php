<!doctype html>
<!DOCTYPE html>
<html>
<head>
<title>Declaracion</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>
<?php include("db.php");   
?>


<!-- Inicio de tabla responsive-->
    <table width="124%"  border="0" align="center" cellpadding="1" cellspacing="0"   style="font-size:10px">
        <thead>
            <tr>
              <th  style="text-align:left">
              <img src="../images/escudo.png" width="98" height="101" alt=""/> </th>
              <th colspan="12"  style="text-align: center; font-size: 16px;"><p>CONCEJO MUNICIPAL DE EL ALTO</p>
              <p>PLANILLA &quot;DECLARACIÓN JURADA DE BIENES Y RENTAS&quot;</p></th>
            </tr>
          <tr bgcolor="#EFE9E9" style="text-align: center">	
                <th width="4%">ID</th>
                <th width="10%" height="33" >UNIDAD</th>          
                <th width="4%">SEXO</th>
                <th width="6%">ITEM</th>
                <th width="9%">CARGO</th>
                <th width="8%">AP.PATERNO</th>
                <th width="9%">AP.MATERNO</th>
                <th width="8%">NOMBRES</th>
                <th width="5%">C.I.</th>
                <th width="6%">EXP.</th>
                <th width="9%">FECHA DDJJ</th>
                <th width="17%">OBSERVACIONES</th>
                <th width="5%" bgcolor="#EFE9E9">GESTIÓN</th>
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
 

$consulta = "select * from t_planilla_c" ;
//echo $consulta ;
$planilla_dec = mysqli_query($con,$consulta);
while($obj_dec = mysqli_fetch_assoc($planilla_dec))
	{	
		$observaciones = "";
		$fecha = "";
		$consulta_dec = "select * from  ult_decl where id_func =".$obj_dec["id_func"] ." 
		  and date_dbr = (select max(date_dbr) from ult_decl where id_func = ".$obj_dec["id_func"]." )";
		 
		 //echo $consulta_dec ;
		$dec = mysqli_query($con,$consulta_dec);
		$row_cnt = mysqli_num_rows($dec);
		if ($row_cnt>0)
		{
					
					while($obj_ges = mysqli_fetch_assoc($dec))
							{
								$fecha = $obj_ges["date_dbr"] ;
							}
					 $gestion_actual = date("Y");
					 $fecha_dec = strtotime($fecha);
					 $gestion_dec = date("Y",$fecha_dec) ;
			if($gestion_actual == $gestion_dec)
			{ $observaciones = "<p style='color:green';>DECLARACIÓN CORRECTA</p>" ; }
			else
			{ $observaciones = "<p style='color:orange';>ACTUALIZAR LA DECLARACIÓN A LA GESTIÓN ACTUAL</p>" ;} 		
		}
		else
		 {  
		   $observaciones = "<p style='color:#FF0000';>FALTA DECLARACIÓN DE LA GESTIÓN ACTUAL</p>" ;
		 }
		 ?>
         <tr>
                            <td style="text-align: center"><?php echo $obj_dec["id_func"] ;  ?></td>
                            <td><?php echo $obj_dec["unidad"] ;  ?></td>
                            <td><?php echo $obj_dec["sexo"] ;  ?></td>
                            <td><?php echo $obj_dec["item_contrato"] ;  ?></td>
                            <td><?php echo $obj_dec["cargo"] ;  ?></td>
                            <td><?php echo $obj_dec["paterno"] ;  ?></td>
                            <td><?php echo $obj_dec["materno"] ;  ?></td>
                            <td><?php echo $obj_dec["nombres"] ;  ?></td>
                            <td><?php echo $obj_dec["ci"] ;  ?></td>
                            <td><?php echo $obj_dec["exp"] ;  ?></td>
                            <td><?php 
							
							if(	date("d/m/Y", strtotime($fecha))=='31/12/1969')
								 {  echo "     " ; }
							else { echo date("d/m/Y", strtotime($fecha));  }
							
							?></td> 
                            <td><?php echo $observaciones ;?></td>
                            <td><?php echo $xgestion ;  ?></td>
                        </tr>  
		 
<?php
}?> 
      </tbody>
</table>
<hr align="center" width="124%">
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
