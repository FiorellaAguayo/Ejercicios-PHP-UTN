<?php

class User
{
    private $_email;
    private $_clue;

    public function __construct($email, $clue)
    {
        $this->_email = $email;
        $this->_clue = $clue;
    }

    public function getClue()
    {
        return $this->_clue;
    }

    public function getEmail()
    {
        return $this->_email;
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
            $usuario = new Usuario($row[0], $row[1]);
            $usuarios[] = $usuario;
        }
        fclose($archivo);
        return $usuarios;
    }

    public function verificarUsuario()
    {
        $usuarios = self::cargarUsuariosDesdeCSV("usuarios.csv");
        foreach($usuarios as $usuario)
        {
            if($usuario->getEmail() !== $this->getEmail())
            {
                continue ;
            }
            
            if($usuario->getClue() !== $this->getClue())
            {
                return ValidationUser::ClaveIncorrecta;
            }
            
            return ValidationUser::Verificado;
        }
        return ValidationUser::NoRegistrado;
    }
    
    public static function agregarUsuario($user, $file)
    {
        $fileOpened = fopen($file, "a");
        if(!$fileOpened) 
        {
            return false;
        }
        fputcsv($fileOpened, [$user->getEmail(), $user->getClue()]);
        fclose($fileOpened);
        return true;
    }
}

enum ValidationUser: int{
    case ClaveIncorrecta = 1;
    case Verificado = 2;
    case NoRegistrado = 3;
}