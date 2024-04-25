<?php

function generateOddNumbers($oddNumbers, $lenght)
{
    $oddNumbers[] = array();
    $oddNumber = 0;

    for($i = 0; $i < $lenght; $i++)
    {
        if($oddNumber % 2 != 0)
        {
            $oddNumbers[$i] = $oddNumber;
        }
        else
        {
            $i--;
        }
        $oddNumber++;
    }

    return $oddNumbers;
}

function printNumbersWithFor($numbers)
{
    echo "<br><br>Printing numbers with FOR: <br>";
    for ($i = 0; $i < count($numbers); $i++)
    {
        echo "$numbers[$i]<br>";
    }
}

function printNumbersWithForeach($numbers)
{
    echo "<br><br>Printing numbers with FOREACH: <br>";
    foreach ($numbers as $num)
    {
        echo "$num<br>";
    }
}

function printNumbersWithWhile($numbers)
{
    echo "<br><br>Printing numbers with WHILE: <br>";
    $i = 0;
    while ($i < count($numbers))
    {
        echo "$numbers[$i]<br>";
        $i++;
    }
}