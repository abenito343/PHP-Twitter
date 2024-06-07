<?php
session_start();
include("conexion1.php");


$usuario3=$_POST['usuario3'];
$psw3=$_POST['psw3'];
$regi=$_POST['regi'];
setcookie("USU",$usuario3,time()+1);



	header("Location:login.php");
	
	
	
	?>
