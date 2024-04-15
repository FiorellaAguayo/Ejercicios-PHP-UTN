<?php

    echo "Aplicación Nº2 (mostrar fecha y estación)<br>
    Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
    distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
    año es. Utilizar una estructura selectiva múltiple.<br><br>";

    date_default_timezone_set('America/Buenos_Aires');
    $fecha_actual=date('d-m-y');
    $hora_actual=date('H:i:s');
    $mes=date('n');
    $dia=date('d');
    $estacion=' ';

    if(($mes == 12 && $dia >= 20) || $mes == 1 || ($mes == 2) || ($mes == 3 && $dia < 21))
    {
        $estacion='Verano';
    }
    else if(($mes == 3 && $dia >= 21) || $mes == 4 || $mes == 5 || ($mes == 6 && $dia < 21))
    {
        $estacion='Otoño';
    }
    else if(($mes == 6 && $dia >= 21) || $mes == 7 || $mes == 8 || ($mes == 9 && $dia < 20))
    {
        $estacion='Invierno';
    }
    else if(($mes == 9 >= 20) || $mes == 10 || $mes == 11 || ($mes == 12 && $dia < 20))
    {
        $estacion='Primavera';
    }

    echo "La fecha actual es: ".$fecha_actual."<br>La hora actual es: ".$hora_actual;
    echo "<br>La estación del año es: ".$estacion;

?>