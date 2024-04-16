<?php

function showValues($a, $b, $c)
{
    echo "$a   $b   $c ";
}

function getMiddleNumber($a, $b, $c)
{
    $middleNumber = null;

    if(($a > $b && $a < $c) || ($a < $b && $a > $c))
    {
        $middleNumber = $a;
    }
    else if(($b > $a && $b < $c) || ($b < $a && $b > $c))
    {
        $middleNumber = $b;
    }
    else if(($c > $a && $c < $b) || ($c < $a && $c > $b))
    {
        $middleNumber = $c;
    }

    return $middleNumber;
}