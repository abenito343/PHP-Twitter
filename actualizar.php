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
                            
                   
      <form id="form1" name="form1" method="post" action="actualizarok.php" enctype="multipart/form-data">
<p>Actualizar Perfil:</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="652" height="469" border="0" cellspacing="0">
    <tr>
      <th height="84" align="left" scope="row"><p>Nombre:
        <label for="nombre1"></label>
        <input type="text" name="nombre1" id="nombre1" />
      </p></th>
    </tr>
    <tr>
      <th height="32" align="left" scope="row"><p>&nbsp;</p>
        <p>Apellido:
          <label for="apellido1"></label>
          <input type="text" name="apellido1" id="apellido1" />
        </p>
        <p>&nbsp; </p></th>
    </tr>
    <tr>
      <th height="32" align="left" scope="row">
        <p>&nbsp;</p>
        <p>Imagen:
          <label for="file"></label>
    <input type="file" name="file" id="file" />
      &nbsp;</p>
      <p>&nbsp;</p></th>
    </tr>
   
    <tr>
      <th height="70" align="left" scope="row">Mail:
        <label for="mail1"></label>
        <input type="text" name="mail1" id="mail1" /></th>
    </tr>
    
    
  </table>

<th height="88" align="left" scope="row"><p>Estado :
  <label for="estado"></label>
  <input type="text" name="estado" id="estado" />
</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</th>
<p>
  <input type="submit" name="registrarse1" id="registrarse1" value="actualizar" />
</p>
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