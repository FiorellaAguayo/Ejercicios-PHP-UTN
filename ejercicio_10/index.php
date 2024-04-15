<?php

echo "Aplicación nº10 (arrays de arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.<br><br>";

$lapicera1 = array('color' => 'azul', 'marca' => 'Bic', 'trazo' => 'fino', 'precio' => 1800);
$lapicera2 = array('color' => 'rojo', 'marca' => 'Roller', 'trazo' => 'grueso', 'precio' => 2000);
$lapicera3 = array('color' => 'amarillo', 'marca' => 'Pelikan', 'trazo' => 'fino', 'precio' => 1200);

$arraysAsociativos = array('lapicera1' => $lapicera1, 'lapicera2' => $lapicera2, 'lapicera3' => $lapicera3);
$arraysIndexados = array($lapicera1, $lapicera2, $lapicera3);

echo "Impresión de array asociativo: <br><br>";
foreach($arraysAsociativos as $nombre => $lapicera)
{
    echo ucfirst($nombre).": ";
    foreach($lapicera as $clave => $valor)
    {
        echo ucfirst($clave).": $valor";
        echo "<br>";
    }
    echo "<br>";
}

echo "Impresión de array indexados: <br><br>";
foreach($arraysIndexados as $index => $lapicera)
{
    echo "Lapicera " . ($index + 1) . ":<br>";
    foreach ($lapicera as $clave => $valor) 
    {
        echo ucfirst($clave) . ": $valor<br>";
    }
    echo "<br>";
}