<?php
    echo "Aplicación nº6 (carga aleatoria)
    Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
    función rand).<br> Mediante una estructura condicional, determinar si el promedio de los números
    son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
    resultado.<br><br>";

    $numero=5;
    $arrayDeNumeros[$numero] = array();
    $promedio = 0;
    $acumulador = 0;

    for($i = 0; $i < $numero; $i++)
    {
        $arrayDeNumeros[$i] = rand(0,10);
        $acumulador += $arrayDeNumeros[$i];
        echo "$arrayDeNumeros[$i]<br>";
    }

    $promedio = $acumulador / $numero;

    if($promedio > 6)
    {
        echo "<br>El promedio es mayor a 6. Resultado: $promedio";
    }
    else if($promedio < 6)
    {
        echo "<br>El promedio es menor a 6. Resultado: $promedio";
    }
    else
    {
        echo "<br>El promedio es igual a 6. Resultado: $promedio";
    }