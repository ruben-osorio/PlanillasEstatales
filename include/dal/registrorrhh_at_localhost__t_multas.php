<?php
$dalTablet_multas = array();
$dalTablet_multas["id_multas"] = array("type"=>2,"varname"=>"id_multas");
$dalTablet_multas["id_func"] = array("type"=>2,"varname"=>"id_func");
$dalTablet_multas["tipo_multa"] = array("type"=>200,"varname"=>"tipo_multa");
$dalTablet_multas["monto"] = array("type"=>14,"varname"=>"monto");
$dalTablet_multas["descripcion"] = array("type"=>200,"varname"=>"descripcion");
$dalTablet_multas["doc_img"] = array("type"=>201,"varname"=>"doc_img");
$dalTablet_multas["mes"] = array("type"=>200,"varname"=>"mes");
$dalTablet_multas["gestion"] = array("type"=>2,"varname"=>"gestion");
	$dalTablet_multas["id_multas"]["key"]=true;

$dal_info["registrorrhh_at_localhost__t_multas"] = &$dalTablet_multas;
?>