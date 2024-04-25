<?php

require_once './Usuario.php';

class Empleado extends Usuario {
    //Atributos
    public $nombre;
    public $apellido;
    public $sector;

    public function __construct($nombre, $apellido = null, $sector = null)
    {
        parent::__construct($nombre, $apellido);
    }
}