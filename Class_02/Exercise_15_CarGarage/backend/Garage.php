<?php

class Garage
{
    private $_businessName;
    private $_pricePerHour;
    public $_cars;

    public function __construct($businessName, $pricePerHour = "", $car = array())
    {
        $this->_businessName = $businessName;
        $this->_pricePerHour = $pricePerHour;
        $this->_cars = $car;
    }

    public function ShowGarage()
    {
        echo "<br>Business name: $this->_businessName";
        echo "<br>Price per hour: $this->_pricePerHour";
        echo "<br>Cars: "; 
        var_export($this->_cars);
    }

    public function Equals($car)
    {
        foreach($this->_cars as $value)
        {
            return $car == $value;
        }
        return false;
    }

    public function Add($car)
    {
        if($this->Equals($car))
        {
            return false;
        }
        else
        {
            $this->_cars[] = $car;
            return true;
        }
    }

    public function Remove($car)
    {
        if($this->Equals($car))
        {
            return false;
        }
        else
        {
            unset($this->cars[$car]);
            return true;
        }
    }
}