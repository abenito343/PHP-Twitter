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
$usuario=$_COOKIE['USU'];
$asd="SELECT * from usuarios where tu_usuario = '$usuario'";
$consulta = mysql_query($asd,$conexion);
$registro=mysql_fetch_array($consulta);
$asd2=$registro[9];


$origen=$_GET['usuario2'];

$seguidores=$_GET['seguidores'];

$idborrar="Select ts_id FROM `hoeleequis`.`seguidores` WHERE ts_seguidor='$usuario' and ts_seguido='$origen ";

$sql1= "Delete from seguidores where ts_seguidor='$usuario' and ts_seguido='$origen'";
//DELETE FROM `hoeleequis`.`seguidores` WHERE `seguidores`.`ts_id` = 11
//Delete from seguidores where ts_seguidor='$usuario' and ts_seguido='$origen'
//DELETE FROM `hoeleequis`.`seguidores` WHERE `seguidores`.`ts_id` = $idborrar

$sql3="UPDATE usuarios SET tu_seguidores=$seguidores-1 WHERE tu_usuario='$origen'";
$sql4="UPDATE usuarios SET tu_siguiendo=$asd2-1 WHERE tu_usuario='$usuario'";


if(mysql_query($sql1,$conexion)){
mysql_query($sql3,$conexion);
mysql_query($sql4,$conexion);
	
	
header("Location:index.php");
	}else{ 
	echo mysql_error();                                                     
	echo "ERROR!";
}
?>
</div>
</body>
</html>
