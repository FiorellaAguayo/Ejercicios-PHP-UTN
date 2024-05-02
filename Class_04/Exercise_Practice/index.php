<?php

require_once './files.php';

// La carpeta en voy a guardar lo que se sube
$folder_files = 'uploadedFolder/';

// guardo datos del archivo que me enviaron por POST
$name_file = $_FILES['foto']['name'];
$type_file = $_FILES['foto']['type'];
$size_file = $_FILES['foto']['size'];
$temporary_location_file = $_FILES['foto']['tmp_name'];

// ruta destino
$route_destination = $folder_files . $name_file;

if(!move_uploaded_file($temporary_location_file, $route_destination))
{
    echo "Error: Hubo un problema al cargar el archivo.";
}
else
{
    echo "Se guardó el archivo exitosamente.";
}