<?php
$dalTableuser = array();
$dalTableuser["id"] = array("type"=>3,"varname"=>"id");
$dalTableuser["username"] = array("type"=>200,"varname"=>"username");
$dalTableuser["password"] = array("type"=>200,"varname"=>"password");
$dalTableuser["nombre"] = array("type"=>200,"varname"=>"nombre");
$dalTableuser["ap_1"] = array("type"=>200,"varname"=>"ap_1");
$dalTableuser["ap_2"] = array("type"=>200,"varname"=>"ap_2");
$dalTableuser["fecha_nac"] = array("type"=>200,"varname"=>"fecha_nac");
$dalTableuser["permisos"] = array("type"=>3,"varname"=>"permisos");
$dalTableuser["id_func"] = array("type"=>3,"varname"=>"id_func");
	$dalTableuser["id"]["key"]=true;

$dal_info["registrorrhh_at_localhost__user"] = &$dalTableuser;
?>