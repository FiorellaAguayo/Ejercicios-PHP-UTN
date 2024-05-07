<?php

include_once("./Entity/book.php");

echo "<h3>Lectura de libro específico</h3>";

if($_SERVER["REQUEST_METHOD"] === "GET")
{
    if(isset($_GET["libro"]))
    {
        $title = $_GET["libro"];
        $price = Book::findPrice($title);
        echo "<br>El precio del libro es: $price";
    }
    else
    {
        echo "Error: Se esperaba el dato 'libro'.";
    }
}
else
{
    echo "Error: Se esperaban datos por GET.";
}