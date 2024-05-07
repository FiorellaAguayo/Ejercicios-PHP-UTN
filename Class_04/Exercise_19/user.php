<?php

class User
{
    private $_id;
    private $_name;
    private $_password;
    private $_email;
    private $_registrationDate;

    public function __construct($name, $password, $email)
    {
        $this->_id = $this->getId();
        $this->_name = $name;
        $this->_password = $password;
        $this->_email = $email;
        $this->_registrartionDate = $this->getRegistrationDate();
    }

    private function generateID()
    {
        $this->_id = rand(1, 10000);
    }

    public function getRegistrationDate()
    {
        return date('D-m-y H:i:s');;
    }

    public function getId()
    {
        $this->_id = rand(1, 10000);
        return $this->_id;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getPassword()
    {
        return $this->_password;
    }

    public function getEmail()
    {
        return $this->_email;
    }
}