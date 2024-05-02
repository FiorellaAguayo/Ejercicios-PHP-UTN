<?php

// Creamos una sesion
session_start();

if(isset($_SESSION['usuario']))
{
    echo $_SESSION['usuario'];
}
else
{
    $_SESSION['usuario'] = "Fiorella";
    echo "No estaba seteado, lo seateamos.";
}