<!DOCTYPE html>
<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
	<title>Introducir Imagen de Videojuegos</title>
</head>
<body>
	<header class="header">
		<div class="tabla">
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
	

	<div class="panel">
	<center>
	<h3>Subir Imagen</h3>
	<br>
	<form action="subirI.php" method="POST" name="formulario", enctype="multipart/form-data">
	<a>Nombre: </a><input type="text" name="nombre" placeholder="Nombre Imagen" required> 
	<br> <br>
	<a>Descripción: </a><input type="text" name="desc" placeholder="Descripción"> 
	<br> <br>
	<input name="uploadedfile" type="file" required />
	<br> <br>
	<button type="submit">Subir Imagen</button><br>

</form>

</center>
</div>

</body>
</html>