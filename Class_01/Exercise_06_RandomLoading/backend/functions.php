<?php

function generateRandomNumbers($number)
{
    $arrayOfNumber = array();

    for($i = 0; $i < $number; $i++)
    {
        $arrayOfNumber[] = rand(0,10);
    }

    return $arrayOfNumber;
}

function calculateAverage($arrayOfNumber)
{
    $acumulator = 0;

    foreach ($arrayOfNumber as $number)
    {
        $acumulator += $number;
        echo "$number<br>";
    }

    $average = $acumulator / count($arrayOfNumber);
    
    return $average;
}