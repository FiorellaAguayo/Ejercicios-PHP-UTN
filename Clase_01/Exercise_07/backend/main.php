<?php
    require 'functions.php';
    $lenght = 10;
    $oddNumbers[] = array();

    $oddNumbers = generateOddNumbers($oddNumbers, $lenght);

    printNumbersWithFor($oddNumbers);
    printNumbersWithForeach($oddNumbers);
    printNumbersWithWhile($oddNumbers);