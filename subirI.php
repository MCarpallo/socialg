<?php
$link = mysqli_connect('localhost', 'root', '', 'socialg');
session_start();
$usuario = $_SESSION['username'];
//Recogida de datos
$nombre = $_REQUEST['nombre'];
$desc = $_REQUEST['desc'];

$target_path = "images/";
$target_path = $target_path . basename($_FILES['uploadedfile']['name']);

if (is_file($target_path)) {
echo "La imágen ya existe";

} else {
//Comprobar que la imágen se ha movido a la carpeta correctamente 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "La imagen ". basename( $_FILES['uploadedfile']['name']). 
    " ha sido subida correctamente";

//Soltar datos
    $fecha = date('y-m-d');
    echo '<!DOCTYPE html>
<html>
<head>
    <title>Galería de Imágenes</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

</head>
<!-- Header de todas las páginas web -->
<body>
    <header class="header">';

    echo "<div class='logeado'> 
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
        </header>
        <div class="panel">';

        $id_usu = "SELECT * FROM usuarios";

        $idquery= mysqli_query($link, $id_usu);


while ($insertarid=mysqli_fetch_array($idquery)) {

            $nombreid=$insertarid['user'];
            if ($nombreid == $usuario) {
            $insertid=$insertarid['id_usu'];
            }
}

    echo "</br>";
    echo "La ruta es: ".$target_path;
    echo "</br>";
    echo "El nombre es: ".$nombre;    
    echo "</br>";
    echo "La descripción es: ".$desc;
    echo "</br>";
    echo "Subido en la fecha".$fecha;
    echo "</br>";
    echo '<a href="index.php"> Volver al inicio </a>';
    echo "La id es: ".$insertid;
    echo "</div>
    </body>
</html>";
//Insertar todo en la Base de Datos

$query = "INSERT INTO gallery (namegallery, pathgallery, descgallery, dategallery, id_usu) VALUES ('$nombre', '$target_path', '$desc', '$fecha','$insertid')";

$insertar = mysqli_query($link, $query);
echo "<";


}
else{
    echo "Ha ocurrido un error, intentalo de nuevo.";
}
}
?>