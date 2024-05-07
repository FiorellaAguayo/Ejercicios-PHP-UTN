<?php

require "usuario.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["nombre"]) && isset($_POST["clave"]) && isset($_POST["email"])) 
    {
        $nombre = $_POST["nombre"];
        $clave = $_POST["clave"];
        $email = $_POST["email"];

        $archivo_csv = "usuarios.csv";
        $usuario = new Usuario($nombre, $clave, $email);

        if($usuario->agregarUsuario($archivo_csv))
        {
            echo "Usuario agregado exitosamente.";
        }
        else
        {
            echo "Error al agregar usuario.";
        }
    } 
    else 
    {
        echo "Error: Los datos recibidos están incompletos.";
    }
}
else
{
    echo "Error: Se esperaban datos por POST";
}