<?php
    $operator = '/';
    $operationMessagge = ' ';
    $op1 = 10;
    $op2 = 5;
    $result = 0;

    switch($operator)
    {
        case '+':
            $operationMessagge = "sum";
            break;

        case '-':
            $operationMessagge = "substraction";
            break;

        case '/':
            $operationMessagge = "division";
            break;

        case '*':
            $operationMessagge = "multiplication";
            break;
    }

    echo "The operation is a $operationMessagge<br><br>$op1 $operator $op2 = $result";
