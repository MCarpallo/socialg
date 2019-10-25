<!DOCTYPE html>

<?php
error_reporting(E_ALL ^ E_NOTICE); 

session_start();
$usuario = $_SESSION['username'];

if(isset($usuario)){

echo' 
<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="codi.js"></script>

	<meta charset="utf-8">
	<title>Introducir Imagen de Videojuegos</title>
</head>
<body>
	<header class="header">';

	echo " <div class='logeado'> 
			<a>Estás logeado como ".$usuario.".</a> 
			<a href='header.php'>(Cerrar Sesión)</a>
				</div>";

	echo'	<div class="tabla">
			</a>
				<nav class="navigation">
				<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="subir.php">Subir Img</a></li>
			</ul>
			</nav>
		</div>
	</header>
	<!-- Formulario para introducir todo sobre la imágen -->
	

	<div class="panel2">
	<center>
	<h3>Subir Imagen</h3>
	<br>
	<p id = "mensaje" class="mensaje"></p>
	<form action="subirI.php" method="POST" name="formulario", enctype="multipart/form-data" onsubmit="return validacionImagen()">
	<a>Nombre: </a><input type="text" id="nombre" name="nombre" placeholder="Nombre Imagen"> 
	<br> <br>
	<a>Descripción: </a><input type="text" id="desc" name="desc" placeholder="Descripción"> 
	<br> <br>
	<input name="uploadedfile" type="file" id="uploadedfile" />
	<br> <br>
	<button type="submit">Subir Imagen</button><br>

</form>

</center>
</div>

</body>
</html>';
} else {
	echo '<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
	<title>Introducir Imagen de Videojuegos</title>
</head>
<body>
	<header class="header2">
		<div class="tabla">
			</a>
				<nav class="navigation">
				<ul>
				<br>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="subir.php">Subir Img</a></li>
			</ul>
			</nav>
		</div>
	</header>
	<!-- Formulario para introducir todo sobre la imágen -->
	

	<div class="panel2">
	<a> Tienes que iniciar Sesión.</a>
	<h3><a href="login.php">Logearse ahora </a></h3>
	</div>
	';
}
?>