<?php
error_reporting(0);
session_start();
$_SESSION[x]="a";

?>
<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Twitaaa - Login</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div id="background">
  <div id="header">
    
			<div>
				<div>
				<img src="images/twitter_logo.png" alt=""></div>
			</div>
		</div>
      
		<div id="body">
			<div>
				<div>
                <div id="index5">
					
                         
						    <form action="loginok.php" method="post" enctype="multipart/form-data" name="form1" class="logge" id="form1">

<p>Loguearse:</p>
<p>Usuario:
  <label for="usuario3"></label>
  <input type="text" name="usuario3" id="usuario3" />
</p>
<p>Contraseña:
    <input type="password" name="psw3" id="psw3" />
    <input type="submit" name="button2" id="button2" value="iniciar sesion" />
</p>
<p>&nbsp;</p>
<p>
  ¿No tenes cuenta?
  
  <input type="button" name="regi" id="regi" value="registrarse" onclick=location.href="registrarse.php">
</p>
</form>
                     
                    
                    
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