<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Twitaa - Contactanos</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<?php
error_reporting(0);
session_start();

      
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
echo "Bienvenido <b>".$_COOKIE['USU']."</b>";

?>
	<div id="background">
		<div id="header">
			<div>
				<div>
					<a href="index.php" class="logo"><img src="images/twitter_logo.png" alt=""></a>
					<ul>
						<li class="selected">
							<a href="index.php" id="menu1">Inicio</a>
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
					<div class="blog">
						<div class="content">
							<ul>
								<li>
									<div class="header">
								  <b>My steam</b>:</div>
									<div class="article">
										<a href="http://store.steampowered.com/" class="figure"><img src="images/steam-banner.jpg" alt="" width="306"></a>
										<p>http://steamcommunity.com/id/arixel343<br>
											<a href="http://steamcommunity.com/id/arixel343" class="more">click aqui para ver el perfil</a>
									  </p>
								  </div>
								</li>
								<li>
									<div class="header"><b>My skype:</b></div>
									<div class="article">
								    <a href="http://www.skype.com/es/download-skype/skype-for-computer/" class="figure"><img src="images/skype_logo.jpg" alt="" width="309" height="206"></a>ID:arixelbenito343<br>
                                    
										
								    </div>
								</li>
						    <li>
									<div class="header">
					    <b>Mi youtube:</b></div>
									<div class="article">
										<a href="http://www.youtube.com/" class="figure"><img src="images/YouTube.png" alt="" width="309" height="206"></a>
										<p>
											Canal: Ariel Benito <br><a href="http://www.youtube.com/channel/UCe6VH1AvPu8YUe7yaK-A84A" class="more">click aca para ver el canal</a>
										</p>
									</div>
								</li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
			  <ul>
			    <li id="facebook"> <a href="https://www.facebook.com/Ari.Cuervo1/">facebook</a> </li>
			    <li id="twitter"> <a href="https://twitter.com/Ari_Cuervo1/">twitter</a> </li>
			    <li id="googleplus"> <a href="https://plus.google.com/103266535096976618857/posts/">googleplus</a> </li>
		      </ul>
			  <p>
					@ copyright 2012. all rights reserved.
				</p>
			</div>
		</div>
	</div>
</body>
</html>