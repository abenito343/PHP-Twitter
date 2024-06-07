<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
body,td,th {
	color: #FFF;
}
body {
	background-color: #003;
}
</style>
</head>

<body>
<div align="center">

<?php
include ("conexion1.php");

$origen=$_GET['origen'];
$tweet=$_GET['tweet'];
$fecha=urldecode($_GET['fecha']);
$usuario=$_COOKIE['USU'];
$fecha2= date('d/m/Y h:i A');
$id=$_GET['id'];
$retwits=$_GET['retwits'];


$sql1= "Insert into tweets (tt_usuario,tt_contenido,tt_fecha) values ('DE $origen RT por $usuario','$tweet','tuitiado $fecha RT $fecha2')";
$sql3="UPDATE tweets SET tt_retwits=$retwits+1 WHERE tt_id='$id'";


if(mysql_query($sql1,$conexion)){
mysql_query($sql3,$conexion);
	
	
header("Location:index.php");
	}else{ 
	echo mysql_error();                                                     
	echo "ERROR!";
}
?>
</div>
</body>
</html>


