<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Twitaaa - Busqueda</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>


                        
                        
						
	
    
		
        
<?php
error_reporting(0);
session_start();
echo "Bienvenido <b>".$_COOKIE['USU']."</b>";
      
include("conexion1.php");

$usuariov=$_COOKIE['USU'];
$sql="select 	

tu_imagen

 From usuarios where tu_usuario = '$usuariov'";
$consulta = mysql_query($sql,$conexion);

echo "<table border=1 class=ho>";

while ($registro= mysql_fetch_row($consulta)){
	echo "<tr>";
	
		echo "<td><img src=images/$registro[0] width=250px height=150px></td>";
		
		
	echo "</tr>";
}
echo "</table>";

?>
<div id="background">
  <div id="header">
    
			<div>
				<div>
					<a href="index.php" class="logo"><img src="images/twitter_logo.png" alt=""></a>
					<ul>
						<li class="selected">
							<a href="index.php" id="menu1">inicio</a>
						</li>
						<li>
							<a href="media.php" id="menu2">notificaciones</a>
						</li>
						<li>
							<a href="games.php" id="menu3">Descubre</a>
						</li>
						<li>
							<a href="about.php" id="menu4">Cuenta</a>
						</li>
                        <li class="selected">
							<a href="blog.php" id="menu5">contactanos</a>
						</li>
						
					</ul>
				</div>
			</div>
  </div>
      
		<div id="body">
			<div>
				<div>
					<div>
                         <div>
						    <div id="index5">
                            
                   
      <form id="form1" name="form1" method="post" action="busqueda2.php">
  <table width="716" height="470" border="0" cellspacing="5">
    <tr>
      <th width="388" height="65" scope="col"><p>&nbsp;</p>
        <p>Buscar
          <label for="nombrepe"></label>
          <input type="text" name="nombrepe" id="nombrepe" />
          <input type="submit" name="button" id="button" value="buscar usuarios" />
        </p></th>
    </tr>
    <tr>
      <th align="left" valign="top" scope="row">
        <?php
error_reporting(0);
include("conexion1.php");
$nombre=$_POST['nombrep'];

$sql="SELECT * from usuarios where tu_usuario like '%$nombre%'";

$consulta = mysql_query($sql,$conexion);
$cuantos = mysql_num_rows ($consulta); 
echo "<table border=1 class=ho >";
?>

	</th>
    </tr>
    <tr>
	    <th>Usuario</th>
	    <th width="50">Estado</th>
	    <th width="23">Foto</th>
	    <th width="23">Mail</th>
	    <th width="23">Seguidores</th>
	    <th width="23">Siguiendo</th>
	    
	    <th width="57">-</th>
        <th width="57">-</th>
	</tr>
<?php
while ($registro=mysql_fetch_array($consulta)){?>
	<tr>
		<td> <?php echo $registro[1] ?> </td>
		<td> <?php echo $registro[10] ?> </td>
		<td><img src="images/<?php echo $registro[7] ?>" width="100px" height="100px" /></td>
		<td> <?php echo $registro[3] ?> </td>
		<td> <?php echo $registro[8] ?> </td>
		<td> <?php echo $registro[9] ?> </td>
        
        
		
		<?php echo "<td bgcolor=#FF0000><a href=deseguimiento.php?user_id=".$_COOKIE['UID']."&usuario2=".$registro[1]."&seguidores=".$registro[8].">Deja de seguir</a>";  ?>
		<?php echo "<td bgcolor=#00FF55><a href=seguimiento.php?user_id=".$_COOKIE['UID']."&usuario2=".$registro[1]."&seguidores=".$registro[8].">Seguir</a>"; ?>
        
	</tr>
<?php } 
echo "</table>";
echo "SE ENCONTRARON: ". $cuantos." USUARIO/S";                          
?>
        
      &nbsp;&nbsp;</th>
    </tr>
  </table>

</form>
      

</div>
                     
                    </div>
                    
                    </div>
			  </div>
					
                    <div>
                    <div></div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<ul>
					<li id="facebook">
						<a href="https://www.facebook.com/Ari.Cuervo1/">facebook</a>
					</li>
					<li id="twitter">
						<a href="https://twitter.com/Ari_Cuervo1/">twitter</a>
					</li>
					<li id="googleplus">
						<a href="https://plus.google.com/103266535096976618857/posts/">googleplus</a>
					</li>
				</ul>
				<p>
					@ copyright 2012. Tu hermana en pelotas.
				</p>
			</div>
		</div>
</div>
</body>
</html>