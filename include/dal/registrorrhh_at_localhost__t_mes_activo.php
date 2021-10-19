<?php
$dalTablet_mes_activo = array();
$dalTablet_mes_activo["id_mes"] = array("type"=>3,"varname"=>"id_mes");
$dalTablet_mes_activo["mes_activo"] = array("type"=>200,"varname"=>"mes_activo");
$dalTablet_mes_activo["mes_numerico"] = array("type"=>3,"varname"=>"mes_numerico");
$dalTablet_mes_activo["gestion"] = array("type"=>3,"varname"=>"gestion");
$dalTablet_mes_activo["ufv_mes_anterior"] = array("type"=>14,"varname"=>"ufv_mes_anterior");
$dalTablet_mes_activo["ufv_mes_actual"] = array("type"=>14,"varname"=>"ufv_mes_actual");
	$dalTablet_mes_activo["id_mes"]["key"]=true;

$dal_info["registrorrhh_at_localhost__t_mes_activo"] = &$dalTablet_mes_activo;
?>