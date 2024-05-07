<?php

class UserManager
{
    private static function toJSON($users)
    {
        return json_encode($users, JSON_PRETTY_PRINT);
    }
    
    private static function readUsersFromFile($filename)
    {
        if (!file_exists($filename)) {
            // Si el archivo no existe, regresamos un array vacío
            return [];
        }

        $data = file_get_contents($filename);
        return json_decode($data, true) ?? [];
    }

    private static function writeUsersToFile($filename, $users)
    {
        $userJSON = self::toJSON($users);
        if (false === file_put_contents($filename, $userJSON)) {
            echo "Error al escribir en el archivo.";
            return false;
        }
        return true;
    }

    public static function saveInJSON($user)
    {
        $filename = 'users.json';
        $existingUsers = self::readUsersFromFile($filename);
        
        $existingUsers[] = [
            'id' => $user->getId(),
            'name' => $user->getName(),
            'password' => $user->getPassword(),
            'email' => $user->getEmail(),
            'registrationDate' => $user->getRegistrationDate()
        ];

        return self::writeUsersToFile($filename, $existingUsers);
    }
}
