<?php

    echo "Aplicación Nº1 (sumar números)<br>
    Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
    supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
    se sumaron.<br><br>";

    $suma = 0;
    $contador = 0;

    echo "Los números que se suman son: <br>";
    for ($i = 1; $suma + $i <= 1000; $i++) 
    {
        $contador++;
        $suma += $i;

        echo $i." + "; 
    }

    echo "<br><br>La suma total es: $suma";
    echo "<br>Se sumaron un total de $contador números.";

?>