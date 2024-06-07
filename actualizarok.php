<input type="button" name="Volver al login" id="Volver al login" value="Volver al login" onclick=location.href="index.php">
<?php
error_reporting(0);
include("conexion1.php");
$nombre1=$_POST['nombre1'];
$apellido1=$_POST['apellido1'];
$mail1=$_POST['mail1'];
$carpeta="images";
copy($_FILES['file']['tmp_name'],$carpeta."/".$_FILES['file']['name']);
$imagenp=$_FILES['file']['name'];
$estado=$_POST['estado'];
$usuariov=$_COOKIE['USU'];

$sql="UPDATE usuarios SET tu_mail='$mail1' ,tu_nombre='$nombre1',tu_apellido='$apellido1',tu_imagen='$imagenp',tu_estado='$estado' where tu_usuario = '$usuariov'";

if(mysql_query($sql,$conexion)){
	header("Location:index.php");
	echo "datos insertados";
	}else{echo mysql_error();
	}
?>