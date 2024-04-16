<?php

function convertNumberToLetter($num)
{
    if($num >= 20 && $num <= 60)
    {
        $ones = array('', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve');
        $tens = array(20 => 'veinte', 30 => 'treinta', 40 => 'cuarenta', 50 => 'cincuenta', 60 => 'sesenta');
        
        if ($num <= 29) {
            // Si el número está entre 20 y 29, simplemente buscamos en el array de las decenas.
            return $tens[$num];
        } else {
            // Para números entre 30 y 60, necesitamos combinar la decena con la unidad.
            $decena = floor($num / 10) * 10;
            $unidad = $num % 10;
            $result = $tens[$decena];
            if ($unidad > 0) {
                $result .= " y " . $ones[$unidad];
            }
            return $result;
        }
    }
    else
    {
        return "El número debe estar en el rango de 20 y 60.";
    }
}
