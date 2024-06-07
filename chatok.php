<?php
error_reporting(0);
session_start();
include("conexion1.php");

$mensajep=$_POST['mensajep'];
$receptor=$_POST['receptor'];
$usuariop=$_COOKIE['USU'];
$fecha= date('d/m/Y h:i A');

$sql="INSERT INTO chat (tc_id,tc_contenido,tc_emisor,tc_receptor,tc_fecha) values ('null','$mensajep','$usuariop','$receptor','$fecha')";
if(mysql_query($sql,$conexion)){
	header("Location:chat.php");
	}else{echo mysql_error();
	}



?>