<?php
    echo "Aplicación nº7 (mostrar impares)
    Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
    Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
    salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números
    utilizando las estructuras while y foreach.";

    $numerosImpares[] = array();
    $numeroImpar = 0;

    for($i = 0; $i < 10; $i++)
    {
        if($numeroImpar % 2 != 0)
        {
            $numerosImpares[$i] = $numeroImpar;
        }
        else
        {
            $i--;
        }
        $numeroImpar++;
    }

    echo "<br><br>Impresión de números con FOR: <br>";
    for($i = 0; $i < 10; $i++)
    {
        echo "$numerosImpares[$i]<br>";
    }

    echo "<br><br>Impresión de números con FOREACH: <br>";
    foreach($numerosImpares as $num)
    {
        echo "$num<br>";
    }

    echo "<br><br>Impresión de números con WHILE: <br>";
    $i = 0;
    while($i < count($numerosImpares))
    {
        echo "$numerosImpares[$i]<br>";
        $i++;
    }
