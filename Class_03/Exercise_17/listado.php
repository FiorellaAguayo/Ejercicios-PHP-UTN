<?php

require "usuario.php";

if($_SERVER["REQUEST_METHOD"] == "GET")
{
    if(isset($_GET['archivo']) && $_GET['archivo'] === 'usuarios')
    {
        $usuarios = Usuario::cargarUsuariosDesdeCSV("usuarios.csv");
        if($usuarios)
        {
            echo Usuario::listarUsuariosHtml($usuarios);
        }
        else
        {
            echo "Error al cargar los usuarios.";
        }
    }
    else
    {
        echo "Error: Se esperaba un listado.";
    }   
}
else
{
    echo "Error: Se esperaban datos por GET";
}