<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
body {
	background: url(images/wpp.jpg) repeat;
}

}
</style>
</head>

<body>
<form action="chatok.php" method="post" enctype="multipart/form-data" name="form1" class="vend" id="form1">
<p>Campo de texto:
    <label for="nombrep"></label>
    <label for="preciop"></label>
  </p>
  <p>
    <label for="mensajep"></label>
    <textarea name="mensajep" id="mensajep" cols="45" rows="5"></textarea>
    <label for="file"></label>
    <label for="estado"></label>
    <label for="estado"></label>
  </p>
  <p>
    <label for="receptor"></label>
    Enviar mensaje a:
    <input type="text" name="receptor" id="receptor" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar mensaje" />
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
  <?php
  session_start();
		error_reporting(0);
include("conexion1.php");
$usuariop=$_COOKIE['USU'];
$sql="select * from chat where tc_emisor = '$usuariop' or tc_receptor = '$usuariop'";
$consulta = mysql_query($sql,$conexion);
echo "<table border=0 class=ho >";?>

	<tr>
	  
	  
	</tr>
<?php while ($registro= mysql_fetch_row($consulta)){ ?>
	<tr>
		
		<td> <?php echo "$registro[2] le dice a " ?> </td>
        <td> <?php echo $registro[3] ?> </td>
		<td> <?php echo $registro[1] ?> </td>
		<td> <?php echo $registro[4] ?> </td>
</tr>
<?php } ?>
</table>
  
  
  
  &nbsp;</p>
</form>


</body>
</html>