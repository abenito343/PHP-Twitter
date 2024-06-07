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
$id=$_GET['id'];


$sql1="Delete from tweets WHERE tt_id='$id'";
//"Delete from seguidores where ts_seguidor='$usuario' and ts_seguido='$origen'";


if(mysql_query($sql1,$conexion)){

	
	
header("Location:about.php");
	}else{ 
	echo mysql_error();                                                     
	echo "ERROR!";
}
?>
</div>
</body>
</html>
