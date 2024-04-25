<?php
require_once './Usuario.php';
require_once './Empleado.php';

$usuarioConApellido = new Usuario('Fiorella', 'Aguayo');
echo $usuarioConApellido->mostrar();

echo "<br>";

$usuarioConNombre = new Usuario('Fiorella');
echo $usuarioConNombre->mostrar();

echo "<br>";

$empleado = new Empleado('Agustin');
echo $empleado->mostrar();

echo "<br>";

$cantidadUsuarios = Usuario::cantidadUsuarios();
echo $cantidadUsuarios;