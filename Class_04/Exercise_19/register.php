<?php

require_once "./user.php";
require_once "./files.php";
require_once "./userManager.php";

/*Aplicación No 23 (Registro JSON)
Archivo: registro.php
método:POST
Recibe los datos del usuario(nombre, clave,mail )por POST ,
crea un ID autoincremental(emulado, puede ser un random de 1 a 10.000). crear un dato con la
fecha de registro , toma todos los datos y utilizar sus métodos para poder hacer el alta,
guardando los datos en usuarios.json y subir la imagen al servidor en la carpeta
Usuario/Fotos/.
retorna si se pudo agregar o no.
Cada usuario se agrega en un renglón diferente al anterior.
Hacer los métodos necesarios en la clase usuario. */


if($_SERVER["REQUEST_METHOD"] === "POST")
{
    if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email']))
    { 
        $user = new User($_POST['name'], $_POST['password'], $_POST['email']);
        if(!UserManager::saveInJSON($user))
        {
            echo "Couldn't save the user to database";
        }
        echo "The user was saved succesfully";
    }
    else
    {
        echo "The data 'name', 'password' and 'email' was expected.";
    }
}
else
{
    echo "Data was expected by POST.";
}