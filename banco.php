<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
include("procesos/db.php");
$query = "SELECT ci,cta_banco,liquido_pagable, tipo_funcionario FROM t_planilla_c where tipo_funcionario<>'CONCEJAL'  and cta_banco<>0 " ;

       $fh = fopen('archivo_banco/banco.txt', 'w');
	   $planilla = mysqli_query($con,$query);
	   $num = mysqli_num_fields($planilla) ;
	   $filas = mysqli_num_rows($planilla) ;
	   fwrite($fh, "1205-00|CONCEJO MUNICIPAL DE EL ALTO|".$filas."|");
	   fwrite($fh, "\n");  
       while ($row = mysqli_fetch_array($planilla)) {          
         if($row[1]<>0) 
		 {      
		 if(strlen($row[0])==6)  { $row[0] = "000".$row[0] ; }
		 if(strlen($row[0])==7)  { $row[0] = "00".$row[0] ;  }
		 if(strlen($row[0])==8)  { $row[0] = "0".$row[0] ; }	   

		 if(strlen($row[2])==7)  { $row[2] = "0".$row[2] ; }    
				   $last = $num - 1;
				   for($i = 0; $i < ($num-1); $i++) { 
					   fwrite($fh, $row[$i]);                       
					   if ($i != $last) {
						   fwrite($fh, "|");
					   }
				   }                                                                 
				   fwrite($fh, "\n");
		 }
       }
       fclose($fh);
echo "Archivo para el Banco generado --> banco.txt"
?>
</body>
</html>