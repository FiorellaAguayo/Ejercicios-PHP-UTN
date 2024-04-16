<?php
require 'functions.php';

$pen = array('color' => '', 'brand' => '', 'stroke' => '', 'price' => '');

$pen1 = createPen('blue', 'Bic', 'fine', 1800);
$pen2 = createPen('red', 'Roller', 'thick ', 2000);
$pen3 = createPen('yellow', 'Pelikan', 'fine', 1200);

echo "Pen 1:<br>";
foreach($pen1 as $key => $value)
{
    echo ucfirst($key).": $value<br>";
}

echo "<br>";

echo "Pen 2:<br>";
foreach($pen2 as $key => $value)
{
    echo ucfirst($key).": $value<br>";
}

echo "<br>";

echo "Pen 3:<br>";
foreach($pen3 as $key => $value)
{
    echo ucfirst($key).": $value<br>";
}