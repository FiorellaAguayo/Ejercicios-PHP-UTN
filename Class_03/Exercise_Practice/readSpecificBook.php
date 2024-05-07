<?php

include_once("./Entity/book.php");

echo "<h3>Lectura de libro específico</h3>";
$price = Book::findPrice("Boulevard");
echo "<br>El precio del libro es: $price";