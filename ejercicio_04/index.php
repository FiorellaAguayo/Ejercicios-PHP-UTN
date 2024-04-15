<?php
    echo "Aplicación nº4 (calculadora)
    Escribir un programa que use la variable operador que pueda almacenar los símbolos
    matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras op1 y op2. <br>De acuerdo al
    símbolo que tenga la variable operador, deberá realizarse la operación indicada y mostrarse el
    resultado por pantalla.<br><br>";

    $operador = '/';
    $mensajeOperacion = ' ';
    $op1 = 10;
    $op2 = 5;
    $resultado = 0;

    switch($operador)
    {
        case '+':
            $resultado = $op1 + $op2;
            $mensajeOperacion = "suma";
            break;

        case '-':
            $resultado = $op1 - $op2;
            $mensajeOperacion = "resta";
            break;

        case '/':
            $resultado = $op1 / $op2;
            $mensajeOperacion = "división";
            break;

        case '*':
            $resultado = $op1 * $op2;
            $mensajeOperacion = "multiplicación";
            break;
    }

    echo "La operación es una $mensajeOperacion<br><br>$op1 $operador $op2 = $resultado";
