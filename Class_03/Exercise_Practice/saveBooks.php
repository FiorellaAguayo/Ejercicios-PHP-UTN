<?php

include_once ("./Entity/book.php");
echo "<h1>Archivos<br><br></h1>";
$book = new Book("Boulevard 2", 19000);
$newBook = Book::saveBook($book);

if(!$newBook)
{
    echo "Error al guardar libro";
}
else
{
    echo "Se escribieron $newBook caracteres!<br></h3>";
}