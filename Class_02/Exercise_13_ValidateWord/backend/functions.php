<?php

function validateWord($word, $max)
{
    if(strlen($word) < $max)
    {
        if($word == 'recovery' || $word == 'partial' || $word == 'programming')
        {
            $allOk = 1;
        }
        else
        {
            $allOk = 0;
        }
    }
    else
    {
        $allOk = -1;
    }

    return $allOk;
}