<?php
$dalTablebaja_con = array();
$dalTablebaja_con["id_ren"] = array("type"=>3,"varname"=>"id_ren");
$dalTablebaja_con["id_con"] = array("type"=>3,"varname"=>"id_con");
$dalTablebaja_con["date_pres"] = array("type"=>7,"varname"=>"date_pres");
$dalTablebaja_con["date_efec"] = array("type"=>7,"varname"=>"date_efec");
$dalTablebaja_con["reasone"] = array("type"=>200,"varname"=>"reasone");
$dalTablebaja_con["comment"] = array("type"=>200,"varname"=>"comment");
	$dalTablebaja_con["id_ren"]["key"]=true;

$dal_info["registrorrhh_at_localhost__baja_con"] = &$dalTablebaja_con;
?>