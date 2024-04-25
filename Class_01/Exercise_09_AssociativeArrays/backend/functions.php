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

function printPen($pen)
{
    foreach ($pen as $key => $value)
    {
        echo ucfirst($key) . ": $value<br>";
    }
}