<!DOCTYPE html>
<html>
<head>
	<title>Sesiones con php</title>
	<script type="text/javascript" src="codi.js"></script>
	<link href="style.css" rel="stylesheet" type="text/css">

	
	</style>
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
	<?php 

//Cancelar que salga fallo si no está usuario en el $_Session
error_reporting(E_ALL ^ E_NOTICE); 

session_start();
//Comprobamos si la sesión está iniciada
$usuario = $_SESSION['username'];
if(isset($usuario)){

echo "Estás logeado como"+$usuario;
}else {
	echo "";
	echo "<br>";
	echo "<br>";
}



	?>
	<div class="panel2">
		<h3>Porfavor, introduce tu usuario y contraseña:</h3>
<form action="login.proc.php" method="POST" name="form" onsubmit="return validacionLogin()">
	<p id = "mensaje" class="mensaje"></p>
	<a>Usuario: </a><input type="text" id="user" name="user" placeholder= "Usuario" value="<?php 

	session_start();
	$usuario=$_REQUEST['usuario'];
	if(isset($usuario)){
		$usuario=base64_decode($usuario);
		echo "$usuario";
	}else {

	echo "";
	}
	?>"> 
	<br> <br>
	<a>Password: </a><input type="text" id ="password"name="password" placeholder="Password"> 
	<br> <br>
	<button type="submit">Iniciar Sesion</button><br>
</form>
</div>

</body>
</html>