<?php

class Usuario
{
    //Atributos
    public $nombre;
    public $apellido;

    //atributos estaticos
    public static $contador = 0;

    public function __construct($nombre, $apellido = null)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        self::$contador++;
    }

    //Metodo
    public function mostrar()
    {
        return $this->nombre." ".$this->apellido;
    }

    //Metodo estatico
    public static function cantidadUsuarios()
    {
        return self::$contador;
    }
}



