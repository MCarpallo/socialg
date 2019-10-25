<!DOCTYPE html>


<?php
error_reporting(E_ALL ^ E_NOTICE); 
$link = mysqli_connect('localhost', 'root', '', 'socialg');


session_start();
$usuario = $_SESSION['username'];

if(isset($usuario)){

 $id_usu = "SELECT * FROM usuarios";

        $idquery= mysqli_query($link, $id_usu);


while ($insertarid=mysqli_fetch_array($idquery)) {

            $nombreid=$insertarid['user'];
            if ($nombreid == $usuario) {
            $insertid=$insertarid['id_usu'];
            }
}

echo '<html>
<head>
	<title>Galería de Imágenes</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">

</head>
<!-- Header de todas las páginas web -->
<body>
	<header class="header">';
	echo " <div class='logeado'> 
			<a>Estás logeado como ".$usuario."</a> 
			<a href='header.php'>(Cerrar Sesión)</a>
				</div>";

				echo '
		<div class="tabla">
				<nav class="navigation">
				<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="subir.php">Subir Img</a></li>
			</ul>

			</nav>
		</div>
		</header>';

		
		echo'
	
	<!-- Formulario para hacer los filtros -->
	<div class="contenedortodo">
	<div class="filtro">	
	<h1>Galería de Imágenes</h1>
	<form action="index.php" method="POST">
		<label for="orden" class="boton">Selecciona el orden que deseas.</label>
		<select name="ordenar">
			<option value="namegallery">Nombre</option>
			<option value="dategallery">Fecha</option>
			<option value="pathgallery">Nombre Img</option>
		</select>
	<br>
	<br>
	<input type="submit" name="ordensito" class="boton">
		</form>
	</div>';


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
$consulta = "SELECT * FROM gallery where id_usu = '$insertid';";
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

echo "
</div>
<br></br>
	
</body>
</html>";
}else{	
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
	<a> No te has logeado.</a>
	<h3><a href="login.php">Logearse ahora </a></h3>
	</div>
	';
}

?>