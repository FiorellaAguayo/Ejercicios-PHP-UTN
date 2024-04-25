<?php

function getSeason($day, $month, &$season)
{
    if(($month == 12 && $day >= 20) || $month == 1 || ($month == 2) || ($month == 3 && $day < 21))
    {
        $season='Summer';
    }
    else if(($month == 3 && $day >= 21) || $month == 4 || $month == 5 || ($month == 6 && $day < 21))
    {
        $season='Autumn';
    }
    else if(($month == 6 && $day >= 21) || $month == 7 || $month == 8 || ($month == 9 && $day < 20))
    {
        $season='Winter';
    }
    else if(($month == 9 >= 20) || $month == 10 || $month == 11 || ($month == 12 && $day < 20))
    {
        $season='Spring';
    }
    else
    {
        $season = 'Hubo un error';
    }
    return $season;
}