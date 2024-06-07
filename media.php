<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Twitaa - Notificaciones</title>
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
            <div id="rt23">
            <div>
				
					<div class="media">
					<div>
                    <div id ="content">
                         
						    <h3>Tweets que te retwitiaron</h3>
						    <div class=retwits2>
							<div><?php
								session_start();
		error_reporting(0);
include("conexion1.php");
session_start();
$usuario=$_COOKIE['USU'];
$categoria=$_POST['categoria'];
$sql="select 	

*
 From tweets where tt_usuario like '%DE $usuario%'";
$consulta = mysql_query($sql,$conexion);
echo "<table border=0 class=ho >";?>
						        
					          
						        <tr>
						        <th></th>
	    <th>Tweet</th>
	    <th>retwits</th>
	    <th>favotiros</th>
	    <th>fecha</th>
	  
	</tr>
<?php while ($registro= mysql_fetch_row($consulta)){ ?>
	<tr>
		
		<td> <?php echo $registro[1] ?> </td>
		<td> <?php echo $registro[2] ?> </td>
		<td> <?php echo $registro[3] ?> </td>
		<td> <?php echo $registro[4] ?> </td>
		<td> <?php echo $registro[5] ?> </td>
        <?php echo "<td bgcolor=#33CCCC><a href=retiwit.php?user_id=".$_COOKIE['UID']."&id=".$registro[0]."&origen="."&origen=".$registro[1]."&retwits=".$registro[3]."&tweet=".urlencode($registro[2])."&fecha=".urlencode($registro[5]).">Retwitiar</a>"; ?><?php echo "<td bgcolor=#F7FE2E><a href=favoriteador.php?user_id=".$_COOKIE['UID']."&id=".$registro[0]."&favoritos=".$registro[4].">Favoritos</a>"; ?>
		
		
	
	</tr>
<?php } ?>
</table>
            </div>
                          
                          </div>
                      </div>
                      <div id="content">
<h3>Tus Tweets favoritos</h3>
<div>
             <?php
		error_reporting(0);
include("conexion1.php");
$usuario=$_COOKIE['USU'];
 
 $sql2="SELECT *
FROM tweets
WHERE tt_id = any (select 	

tf_ttid

 From favoritos where  tf_favoriteador = '$usuario')";

 


$consulta3 = mysql_query($sql2,$conexion);




echo "<table border=0 class=ho >";?>

	         <tr>
	    <th>De</th>
	    <th>Tweet</th>
	    <th>fecha</th>
	  
	</tr>
<?php while ($registro3= mysql_fetch_row($consulta3)){ ?>
	<tr>
		
		<td> <?php echo $registro3[1] ?> </td>
		<td> <?php echo $registro3[2] ?> </td>
		<td> <?php echo $registro3[5] ?> </td>
        
		
	
	</tr>
<?php } ?>
</table></div></div>
					  </div>
						
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