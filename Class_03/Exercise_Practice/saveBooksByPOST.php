<?php

include_once ("./Entity/book.php");
echo "<h1>Archivos<br><br></h1>";

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    if(isset($_POST["libro"]) && isset($_POST["precio"]))
    {
        $book = new Book($_POST["libro"], $_POST["precio"]);
        $newBook = Book::saveBook($book);
        
        if(!$newBook)
        {
            echo "Error al guardar libro";
        }
        else
        {
            echo "Se escribieron $newBook caracteres!<br></h3>";
        }
    }
    else
    {
        echo "Error: Se esperaban los datos 'libro' y 'precio'.";
    }
}
else
{
    echo "Error: Se esperaban datos por POST.";
}