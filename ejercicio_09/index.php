<?php

echo "Aplicación No 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.<br><br>";

$lapicera = array('color' => '', 'marca' => '', 'trazo' => '', 'precio' => '');

// lapicera 1 
$lapicera1 = $lapicera;
$lapicera1['color'] = 'azul';
$lapicera1['marca'] = 'Bic';
$lapicera1['trazo'] = 'fino';
$lapicera1['precio'] = 1800;

// lapicera 2 
$lapicera2 = $lapicera;
$lapicera2['color'] = 'rojo';
$lapicera2['marca'] = 'Roller';
$lapicera2['trazo'] = 'grueso';
$lapicera2['precio'] = 2000;

// lapicera 3 
$lapicera3 = $lapicera;
$lapicera3['color'] = 'amarillo';
$lapicera3['marca'] = 'Pelikan';
$lapicera3['trazo'] = 'fino';
$lapicera3['precio'] = 1200;

echo "Lapicera 1:<br>";
foreach($lapicera1 as $clave => $valor)
{
    echo ucfirst($clave).": $valor<br>";
}

echo "<br>";

echo "Lapicera 2:<br>";
foreach($lapicera2 as $clave => $valor)
{
    echo ucfirst($clave).": $valor<br>";
}

echo "<br>";

echo "Lapicera 3:<br>";
foreach($lapicera3 as $clave => $valor)
{
    echo ucfirst($clave).": $valor<br>";
}