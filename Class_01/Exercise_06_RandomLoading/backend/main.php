<?php
    require 'functions.php';
    $number=5;
    $arrayOfNumbers= array();

    $arrayOfNumbers = generateRandomNumbers($number);
    $average = calculateAverage($arrayOfNumbers);

    if($average > 6)
    {
        echo "<br>The average is greater than 6. Result: $average";
    }
    else if($average < 6)
    {
        echo "<br>The average is less than 6. Result: $average";
    }
    else
    {
        echo "<br>The average is equal to 6. Result: $average";
    }