<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>
#apartado1{
   width:600px;
   height:550px;
   border:3px solid brown;
   border-radius:22px;
   background-color:#404957;
   padding:9px;
}
</style>
</head>

<body>
<form id="datos"  method="post" action="informe_planillas.php">
<div id="apartado1" >
<table width="87%" border="0"  bgcolor="#404957" >
  <tbody>
    <tr>
      <td height="76">
      <p align="center"><strong style="color: rgba(248,244,244,1)">DATOS PARA EL INFORME DE PLANILLAS</strong></p>
  <p>
    <label style="color: rgba(253,251,251,1)">CITE:</label>
    <input name="cite" type="text" id="cite" size="70">
  </p>
  </td>
    </tr>
    <tr>
      <td height="51"><span style="color: rgba(247,245,245,1)">MES/GESTION:</span>        <input type="text" name="mes_gestion" id="mes_gestion"></td>
    </tr>
    <tr>
      <td height="54"><span style="color: rgba(249,247,247,1)">FECHA:</span>        <input type="text" name="fecha" id="fecha"></td>
    </tr>
    <tr>
      <td height="58"><span style="color: rgba(249,248,248,1)">ABONOS:</span>        <input name="abonos" type="text" id="abonos" size="10"></td>
    </tr>
    <tr>
      <td height="58" style="color: rgba(252,248,248,1)">LIQUIDO PAGABLE:
        
        <input type="text" name="liq_pagable" id="liq_pagable"></td>
    </tr>
    <tr>
      <td height="58"  style="color: rgba(251,249,249,1)">COMISIONES BANCARIAS:
       
        <input type="text" name="com_banco" id="com_banco"></td>
    </tr>
    <tr>
      <td height="58" style="color: rgba(249,248,248,1)">LIQUIDO PAGABLE EN EFECTIVO:

        <input type="text" name="liq_pag_efec" id="liq_pag_efec"></td>
    </tr>
    <tr>
      <td height="58" align="center"><input name="submit" type="submit" id="submit" value="PROCESAR INFORME"></td>
    </tr>
  </tbody>
</table>
</div>
  
</form>
</body>
</html>