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

    public function getNombre()
    {
        return $this->_nombre;
    }

    public function getClave()
    {
        return $this->_clave;
    }

    public function getEmail()
    {
        return $this->_email;
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

    public static function cargarUsuariosDesdeCSV($nombreArchivo) 
    {
        $usuarios = array();
        $archivo = fopen($nombreArchivo, "r");
        if(!$archivo) 
        {
            return null;
        }
        while($row = fgetcsv($archivo)) 
        {
            $usuario = new Usuario($row[0], $row[1], $row[2]);
            $usuarios[] = $usuario;
        }
        fclose($archivo);
        return $usuarios;
    }

    public static function listarUsuariosHtml($usuarios) {
        $html = "<ul>";
        foreach($usuarios as $usuario) 
        {
            $html .= "<li>" . $usuario->_nombre . " - " . $usuario->_clave . " - " . $usuario->_email . "</li>";
        }
        $html .= "</ul>";
        return $html;
    }
}