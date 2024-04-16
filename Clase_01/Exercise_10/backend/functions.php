<?php

function createPen($color, $brand, $stroke, $price)
{
    return array(
        'color' => $color,
        'brand' => $brand,
        'stroke' => $stroke,
        'price' => $price
    );
}

function printAssociativeArrays($associativeArrays)
{
    echo "Associative array printing: <br><br>";
    foreach ($associativeArrays as $name => $pen)
    {
        echo ucfirst($name) . ": ";
        foreach ($pen as $key => $value)
        {
            echo ucfirst($key) . ": $value";
            echo "<br>";
        }
        echo "<br>";
    }
}

function printIndexedArrays($indexedArrays)
{
    echo "Indexed array printing: <br><br>";
    foreach ($indexedArrays as $index => $pen)
    {
        echo "Pen " . ($index + 1) . ":<br>";
        foreach ($pen as $key => $value) 
        {
            echo ucfirst($key) . ": $value<br>";
        }
        echo "<br>";
    }
}