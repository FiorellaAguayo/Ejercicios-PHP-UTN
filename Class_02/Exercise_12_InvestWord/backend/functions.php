<?php

function investWord($word)
{
    $investWord = array();
    for($i = count($word) - 1; $i >= 0; $i--)
    {
        $investWord[] = $word[$i];
    }
    return $investWord;
}