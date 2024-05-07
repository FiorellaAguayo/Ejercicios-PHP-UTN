<?php

include_once("./Entity/book.php");

echo "<h3>Borrar archivos</h3><br/>";

if(!Book::deleteFile())
{
    echo "Hubo un error al borrar el archivo.";
}
else
{
    echo "Se borró el archivo.";   
}