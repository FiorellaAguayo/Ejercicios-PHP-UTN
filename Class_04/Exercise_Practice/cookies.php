<?php

if(isset($_COOKIE['nombre']))
{
    echo "La cookie está creada y tiene el valor:" . $_COOKIE['nombre'];
}
else
{
    echo "La cookie no está creada, la creamos.";
    // creamos una cookie con tiempo de vida
    setcookie("nombre", "fiorella", time() + 30);
}