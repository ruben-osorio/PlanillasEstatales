<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>
div1 {
position: absolute;
top: 50%; /* Buscamos el centro horizontal (relativo) del navegador */
left: 50%; /* Buscamos el centro vertical (relativo) del navegador */
width: 600 px; /* Definimos el ancho del objeto a centrar */
height: 400px; /* Definimos el alto del objeto a centrar */
margin-top: -200px; /* Restamos la mitad de la altura del objeto con un margin-top */
margin-left: -300px; /* Restamos la mitad de la anchura del objeto con un margin-left */
}
#apartado1{
	width: 600px;
	height: 350px;
	border: 3px solid brown;
	border-radius: 22px;
	background-color: #404957;
	padding: 9px;
	text-align: left;
}
body {
	background-color: #f0f0f0;
}
</style>
</head>

<body>
<form id="datos"  method="post" action="informe_planillas.php" >
<div1 id="apartado1">
  <div align="center">
<label style="color: rgba(253,251,251,1)"><strong>DATOS PARA LA GENERACIÓN DE INFORMES DE PLANILLAS</strong></label>
  </div>
<br><br>
<label style="color: rgba(253,251,251,1)">CITE:</label><input name="cite" type="text" id="cite" size="70">
<br><br>
<label style="color: rgba(253,251,251,1)">MES/GESTION:</label><input type="text" name="mes_gestion" id="mes_gestion">
<br><br>
<label style="color: rgba(253,251,251,1)">FECHA:</label><input type="text" name="fecha" id="fecha">
<br><br>
<label style="color: rgba(253,251,251,1)">ABONOS:</label><input name="abonos" type="text" id="abonos" size="10">
<br><br>
<label style="color: rgba(253,251,251,1)">LIQUIDO PAGABLE:</label>
<input type="text" name="liq_pagable" id="liq_pagable">
<br><br>
<label style="color: rgba(253,251,251,1)">COMISIONES BANCARIAS:</label>
<input type="text" name="com_banco" id="com_banco">
<br><br>
<label style="color: rgba(253,251,251,1)">LIQUIDO PAGABLE EN EFECTIVO:</label>
<input type="text" name="liq_pag_efec" id="liq_pag_efec">
<br><br>
<input name="submit" type="submit" id="submit" value="PROCESAR INFORME">

</div>
  
</form>
</body>
</html>