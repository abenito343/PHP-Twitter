<?php
session_start();
include("conexion1.php");
if(isset($_SESSION['x'])){

$usuario3=$_POST['usuario3'];
$psw3=$_POST['psw3'];
$regi=$_POST['regi'];
setcookie("USU",$usuario3,time()+7200);




$sql="SELECT tu_id FROM usuarios WHERE tu_usuario='$usuario3' and tu_contrasena='$psw3'";
$consulta=mysql_query($sql,$conexion);
$registro=mysql_num_rows($consulta);//1
$id= mysql_fetch_row($consulta);
setcookie("UID",$id[0],time()+7200);


if ($registro==1){
	//echo $registro;
	header("Location:index.php");
}else{
	//echo $sql;
	header ("Location:http://www.disney.com");
}
}else{
	header("Location:login.php");
	}
	
	
	?>
