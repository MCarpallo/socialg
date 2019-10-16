<!DOCTYPE html>
<html>
<head>
	<title>Galería de Imágenes</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">

</head>
<!-- Header de todas las páginas web -->
<body>
	<header class="header">
		<div class="tabla">
				<nav class="navigation">
				<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="subir.php">Subir Img</a></li>
			</ul>
			</nav>
		</div>
	</header>
	<!-- Formulario para hacer los filtros -->
	<div class="contenedortodo">
	<div class="filtro">	
	<h1>Galería de Imágenes</h1>
	<form action="index.php" method="POST">
		<label for='orden' class="boton">Selecciona el orden que deseas.</label>
		<select name="ordenar">
			<option value="namegallery">Nombre</option>
			<option value="dategallery">Fecha</option>
			<option value="pathgallery">Nombre Img</option>
		</select>
	<br>
	<br>
	<input type="submit" name="ordensito" class="boton">
		</form>
	</div>

<?php
//Ifs para comprobar el tema de los filtros
if (!isset($_POST['ordenar'])) {

	$orden ='';
} else{
	$orden = $_POST['ordenar'];
}

if ($orden!='') {
	$consulta = "SELECT * FROM gallery ORDER BY $orden ASC;";
	$variablevacia = "";
}else{


}
if (!isset($variablevacia)) {
$consulta = "SELECT * FROM gallery;";
}

//Código php para conectar a la base de datos
$link = mysqli_connect('localhost', 'root', '', 'socialg');
// Combrobación si la conexión está bien realizada
	if(!$link){
		echo "<h2>¡Error de conexión con la base de datos!</h2>";
	    echo "Connect failed: ". mysqli_connect_error();
	    exit();

}else {

	//echo "Base de datos conectada";
	//echo "</br>";
}

//Consulta que selecciona todo de la tabla "gallery"

$query = mysqli_query($link, $consulta);

//Aqui hacemos los filtros para seleccionar nombre, descripción y nombre de la foto.
while ($imagen=mysqli_fetch_array($query)) {

	

	
	echo "<div class='cajaF'>";
	echo "<img class='imagen' src='".$imagen['pathgallery']."'>";
	
	echo "<h3 class='nombre'>".$imagen['namegallery'];
	echo "<h3 class='desc'>".$imagen['descgallery'];
	echo "<h3 class='fecha'>".$imagen['dategallery'];
	echo "</div>";
}

?>
</div>
<br></br>
	
</body>
</html>