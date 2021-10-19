<!doctype html>
<html>
<head>
  <title></title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <style type="text/css">
  body {
	background-color: #cad0c4;
}
  </style>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="utf-8">
 </head>
<body>
<?php
include("db.php"); 
$consulg = "select * from t_mes_activo ";
$sacar_ges = mysqli_query($con,$consulg);
while($objges = mysqli_fetch_assoc($sacar_ges))
{
	$mes = $objges["mes_activo"] ;
	$xgestion = $objges["gestion"];
}
  ?>
  <br />
  <br />
  <div class="container">
   <h4 align="center" style="font:'Arial'"><strong>MÓDULO DE ELABORACIÓN DE PLANILLAS<BR></strong></h4>
   <!-- <H5 align="center" style="font:'Arial'"><strong>PROCESO DE PLANILLAS DE HABERES</strong></h5> -->
   <br />
   <div class="panel panel-default" style="background-color:#454f5e" >
    <div class="panel-heading" style="background-color:#d5b195">
     <h3 class="panel-title" align="center" >PROCESO DE PLANILLAS DE HABERES</h3>
    </div>
      <div class="panel-body">
       <span id="success_message"></span>
       <form method="post" id="sample_form" >
        <div class="form-group">
         <!--<label>First Name</label>
         <input type="text" name="first_name" id="first_name" class="form-control" /> -->
<label style=" color:#ffffff">MES A PROCESAR:</label>         
<input type="text" name="meses" id="meses" class="form-control"  value="<?php echo $mes  ; ?>" readonly/>
<label style=" color:#ffffff">GESTIÓN A PROCESAR:</label>   
<input type="text" name="gestion" id="gestion" class="form-control" value="<?php echo $xgestion  ; ?>" readonly/> 
   
 <!-- <label class="custom-control-label table-condensed"  style="color:#FFFFFF" for="meses">MES DE PROCESO:</label>
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
        </div>
        <div class="form-group">

         <label style="color:#FFFFFF">GESTÍÓN:</label>
         <select name="gestion" id="gestion" class="form-control" >
                      <option value="2020" selected="selected">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                      <option value="2025">2025</option>
                      <option value="2026">2026</option>
                      <option value="2027">2027</option>
              </select>
-->
        </div>
        <div class="form-group" align="center">
         <input type="submit" name="save" id="save" class="btn btn-info" value="PROCESAR" />
        </div>
       </form>
       <div class="form-group" id="process" style="display:none;">
        <div class="progress">
       <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="">
       </div>
      </div>
       </div>
      </div>
    </div>
</div>
</body>
</html>

<script>
 $(document).ready(function(){
  $('#sample_form').on('submit', function(event){
   event.preventDefault();
   var count_error = 0;
    $.ajax({
     url:"grabar_planilla_c.php",
     method:"POST",
     data:$(this).serialize(),
     beforeSend:function()
				 {
				  $('#save').attr('disabled', 'disabled');
				  $('#process').css('display', 'block');
				 },
     success:function(data)
     		{
			  var percentage = 0;
		
			  var timer = setInterval(function(){
			   percentage = percentage + 20;
			   progress_bar_process(percentage, timer);
			  }, 1000);
    		 }
    })

   
  });

  function progress_bar_process(percentage, timer)
  {
   $('.progress-bar').css('width', percentage + '%');
   if(percentage > 100)
   {
    clearInterval(timer);
    $('#sample_form')[0].reset();
    $('#process').css('display', 'none');
    $('.progress-bar').css('width', '0%');
    $('#save').attr('disabled', false);
    $('#success_message').html("<div class='alert alert-success'>Planilla Generada</div>");
    setTimeout(function(){
     $('#success_message').html('');
    }, 5000);
   }
  }

 });
</script>