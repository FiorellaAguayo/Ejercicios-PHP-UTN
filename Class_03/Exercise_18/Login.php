<?php

require "User.php";

/*
    Aplicación No 22 ( Login)
    Archivo: Login.php
    método:POST
    Recibe los datos del usuario(clave, mail)por POST ,
    crear un objeto y utilizar sus métodos para poder verificar si es un usuario registrado, Retorna
    un :
    “Verificado” si el usuario existe y coincide la clave también.
    “Error en los datos” si esta mal la clave.
    “Usuario no registrado si no coincide el mail“
    Hacer los métodos necesarios en la clase usuario.
*/

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $jsonContent = file_get_contents("php://input"); // leo el json del body
    $data = json_decode($jsonContent); // parseo el json

    if(!$data)
    {
        echo "Error: No se pudo decodificar.";
        return ;
    }

    if(empty($data->email) || empty($data->clue)) 
    {
        echo "Error: Se esperaban datos.";
        return ;
    }

    echo "Se recibieron datos válidos por POST.\n\n";
    $usuario = new Usuario($data->email, $data->clue);
    $status = $usuario->verificarUsuario();
    switch($status)
    {
        case ValidationUser::ClaveIncorrecta:
            echo "Error: Clave incorrecta.";
            break;

        case ValidationUser::Verificado:
            echo "Verificado. Bienvenido al sistema!";
            break;

        case ValidationUser::NoRegistrado:
            echo "Usuario no registrado. Se agregará a la lista.";
            if(!Usuario::agregarUsuario($usuario, "usuarios.csv"))
            {
                echo "Error: No se pudo agregar el usuario.";
            }
            else
            {
                echo "\nEl usuario se agregó exitosamente a la lista.";
            }
            break;
    }
    return ;
}
else
{
    echo "Error: Se esperaban datos por POST";
    return ;
}