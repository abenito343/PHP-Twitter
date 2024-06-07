<?php
error_reporting(0);
session_start();
echo "Bienvenido <b>".$_COOKIE['USU']."</b>";
include("conexion1.php");

$tweetp=$_POST['tweetp'];
$usuariop=$_COOKIE['USU'];
$fecha= date('d/m/Y h:i A');

$sql="INSERT INTO tweets (tt_id,tt_usuario,tt_contenido,tt_fecha) values ('null','$usuariop','$tweetp','$fecha')";
if(mysql_query($sql,$conexion)){
	header("Location:index.php");
	}else{echo mysql_error();
	}






?>