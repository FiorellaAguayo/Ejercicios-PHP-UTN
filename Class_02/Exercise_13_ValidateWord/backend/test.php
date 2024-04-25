<?php

require 'functions.php';

$word = 'RECOvery';
$max = 15;

echo "Word: $word";
echo "<br>Maximum: $max";

switch(validateWord(strtolower($word), $max))
{
    case -1:
        echo "<br>Error. The word exceeded the maximum limit.";
        break;
    case 0:
        echo "<br>Error. The word must match one of these: Recovery, Partial or Programming";
        break;
    case 1:
        echo "<br>Success. The word coincides with Recovery, Partial or Programming, and does not exceed the maximum.";
        break;
}