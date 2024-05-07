<?php

include_once("./Entity/book.php");

echo "<h3>Copia de archivos</h3><br/>";

if(Book::copyFile())
{
    echo "Error al crear la copia del archivo.";
}
else
{
    echo "Se creó la copia del archivo!";
}