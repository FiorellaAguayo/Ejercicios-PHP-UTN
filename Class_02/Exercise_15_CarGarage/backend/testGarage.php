<?php

require_once "Garage.php";
require_once "Car.php";

$car1 = new Car('Toyota', 'Negro', 36000000);
$car2 = new Car('Fiat', 'Azul', 40000000);
$car3 = new Car('Nissan', 'Rojo', 20000000);
$car4 = new Car('Chevrolet', 'Blanco', 20000000);
$car5 = new Car('Ford', 'Blanco', 20000000);
$cars = array($car1, $car2, $car3);
$garage = new Garage('FiorellaCompany', 10000, $cars);

echo "<br>Garage: ";
$garage->ShowGarage();
$result = $garage->Equals($car1);

if($result)
{
    echo "<br><br>The car is in the Garage.<br>";
}
else
{
    echo "<br><br>The car is NOT in the Garage.<br>";
}

if(!$garage->Add($car4))
{
    echo "<br>This car already exists in the garage.";
}
else
{
    echo "<br>The car was successfully added to the garage.";
}

echo "<br><br>Garage: ";
$garage->ShowGarage();

