<?php

require 'functions.php';

$word = array('H', 'E', 'L', 'L', 'O');
$investWord = investWord($word);
echo "Word: ".implode("", $word) ;
echo "<br>Invest word: ".implode("", $investWord);