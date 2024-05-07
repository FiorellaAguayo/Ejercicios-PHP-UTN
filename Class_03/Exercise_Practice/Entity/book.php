<?php

class Book
{
    private $_title;
    private $_price;

    public function __construct($title, $price)
    {
        $this->_title = $title;
        $this->_price = $price;
    }

    /**
     * Guarda en el archivo libros.txt el libro en formato '$titulo - $precio'.
     * Hace un echo dependiendo de si pudo escribir o no.
     * Deja un salto de linea al final para que la próxima vez que se escriba se comiense desde la próxima línea.
     * 
     * @param Book $book es el libro a guardar
     */
    public static function saveBook($book)
    {
        $file = fopen("books.txt", "a");
        if(!$file)
        {
            return "Error al abrir el archivo!";
            fclose($file);
        }
        $string = $book->_title . "-" . $book->_price . PHP_EOL;
        $newBook = fwrite($file, $string);
        fclose($file);
        return $newBook;
    }

    /**
     * Lee todos los libros del archivo libros.txt y los muestra.
     */
    public static function readBooks() 
    {
        $file = fopen("books.txt", "r");
        $reading = fread($file, filesize("books.txt"));
        echo $reading;
        fclose($file);
    }

    /**
     * Busca en el archivo libros.txt la primer coincidencia del libro que coincida con el titulo pasado por parámetro y muestra su precio.
     * 
     * @param string $title es el titulo del libro a buscar
     */
    public static function findPrice($title) 
    {
        $file = fopen("books.txt", "r");
        while(!feof($file))
        {
            $line = fgets($file) . "<br>";
            $explode = explode("-", $line);
            if(strcmp($title, $explode[0])== 0)
            {
                fclose($file);
                return $explode[1];
            }
        }
        fclose($file);
    }

    public static function copyFile()
    {
        $result = copy("books.txt", "backup/booksBackup.txt");
        return $result;
    }

    public static function deleteFile()
    {
        $result = unlink("backup/booksBackup.txt");
        return $result;
    }
}