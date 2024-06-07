<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Twitaaa - Inicio</title>
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

if(isset($_COOKIE['USU'])){
	
?>
<div><a href="cerrarsesion.php" class="figure"><img src="images/cerrar.png" alt="" width="177" height="49"></a></div>
<?php }else{
	
	
	header("Location:login.php");

	
}
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
                            
                   
      
      <?php
		error_reporting(0);
include("conexion1.php");
$categoria=$_POST['categoria'];
$usuario=$_COOKIE['USU'];
$sql="select 	
*
 From tweets where tt_usuario =
 
any(SELECT ts_seguido FROM seguidores

 WHERE ts_seguidor ='$usuario') or tt_usuario like '%$usuario%' order by tt_id desc  ";
 
$consulta = mysql_query($sql,$conexion);
echo "<table border=0 class=ho >";?>

	<tr>
	    
	  <th>Usuario</th>
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
        <?php echo "<td bgcolor=#33CCCC><a href=retiwit.php?user_id=".$_COOKIE['UID']."&id=".$registro[0]."&origen=".urlencode($registro[1])."&retwits=".$registro[3]."&tweet=".urlencode($registro[2])."&fecha=".urlencode($registro[5]).">Retwitiar</a>"; ?><?php echo "<td bgcolor=#F7FE2E><a href=favoriteador.php?user_id=".$_COOKIE['UID']."&id=".$registro[0]."&favoritos=".$registro[4].">Favoritos</a>"; ?>
		
		
	
	</tr>
<?php } ?>
</table>

</div>
                     
                    </div>
                    
                    </div>
					</div>
					
                    <div>
                    <div>
					  <div class="interaccion">
				    <h3>Publicar un nuevo tweet...</h3>
							<div class=twitear>
                            <form action="tuitiarok.php" method="post" enctype="multipart/form-data" name="form1" class="vend" id="form1">
<p>Escribir  1 tweet:
    <label for="nombrep"></label>
    <label for="preciop"></label>
    :
    <label for="tweetp"></label>
    <textarea name="tweetp" id="tweetp" cols="45" rows="5"></textarea>
    <label for="file"></label>
    <label for="estado"></label>
    <label for="estado"></label>
  </p>
  <p><input type="image" src="images/twittear.png" alt="Enviar formulario" title="Enviar" />
</p>
 
</form>
								
						</div>	
						
						<div>
							
							
<div id="img1" class="modal">
<a href="#close"><img src="images/cruz_cerrar.png" alt="1"/></a>
<object data="http://localhost/intento%20de%20twitter/chat.php" width="700" height="700">
</object>
</div>


<div id="gallery_thumbs"> <a href="#img1"><img src="images/chat.png" alt="1"/></a> </div>


							
						</div>
                        <div>
							<h3>Buscar usuarios</h3>
							<div>
								<form action="busqueda.php" method="post" name="form1" id="form1">
      <input type="text" name="nombrep" id="nombrep" />
      <input type="submit" name="button3" id="button3" value="Buscar" /></form>
							</div>
						</div>
					  </div>
					</div>
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