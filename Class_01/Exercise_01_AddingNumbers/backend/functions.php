<?php

function addNumbers(&$counter)
{
    $sum = 0;
    $counter = 0;
    for ($i = 1; $sum + $i <= 1000; $i++) 
    {
        $counter++;
        $sum += $i;
        showNumber($i);
    }
    return $sum;
}

function showNumber($number)
{
    echo $number." + "; 
}