<?php

class Usuario
{
    private $_nombre;
    private $_clave;
    private $_email;

    public function __construct($nombre, $clave, $email)
    {
        $this->_nombre = $nombre;
        $this->_clave = $clave;
        $this->_email = $email;
    }

    public function agregarUsuario($archivo)
    {
        $archivo_csv = fopen($archivo, 'a');

        if($archivo_csv === false)
        {
            return false;
        }

        $linea = $this->_nombre . "," . $this->_clave . "," . $this->_email . PHP_EOL;
        
        if(fwrite($archivo_csv, $linea) === false)
        {
            fclose($archivo_csv);
            return false;
        }
        else
        {
            fclose($archivo_csv);
            return true;
        }
    }
}