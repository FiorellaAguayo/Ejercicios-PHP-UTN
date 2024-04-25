<?php

class Car
{
    private $_color;
    private $_price;
    private $_brand;
    private $_date;

    public function __construct($brand, $color, $price = "", $date = "")
    {
        $this->_brand = $brand;
        $this->_color = $color;
        $this->_price = $price;
        $this->_date = $date;
    }

    public function AddTax($tax)
    {
        $this->_price+=$tax;
    }

    public static function ShowCar($car)
    {
        echo "<br>Color: " . $car->_color . "<br>";
        echo "Price: $" . $car->_price . "<br>";
        echo "Brand: " . $car->_brand . "<br>";
        echo "Date: " . $car->_date . "<br>";
    }

    public function Equals($otherCar)
    {
        return $this->_brand == $otherCar->_brand;
    }

    public static function Add($car1, $car2)
    {
        if($car1->_brand === $car2->_brand && $car1->_color === $car2->_color)
        {
            return $suma = $car1->_price + $car2->_price;
        }
        else
        {
            echo "- The prices cannot be added, since they have different brand and color.";
            return 0;
        }
    }
}