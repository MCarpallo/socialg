<?php
$link = mysqli_connect('localhost', 'root', '', 'socialg');

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
        <div class="panel">';
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
    echo "</div>
    </body>
</html>";
//Insertar todo en la Base de Datos

$query = "INSERT INTO gallery (namegallery, pathgallery, descgallery, dategallery) VALUES ('$nombre', '$target_path', '$desc', '$fecha')";

$insertar = mysqli_query($link, $query);
echo "<";


}
else{
    echo "Ha ocurrido un error, intentalo de nuevo.";
}
}
?>