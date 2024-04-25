<?php

require 'Car.php';

// Misma marca y distinto color
$car1 = new Car("Volkswagen", "Blue");
$car2 = new Car("Volkswagen", "Red");

// Misma marca, mismo color, distinto precio
$car3 = new Car("Toyota", "Black", 20000000);
$car4 = new Car("Honda", "Black", 25000000);

// Todos los atributos
$car5 = new Car("Fiat", "White", 30000000, "2023-05-10");

echo "------ Cars to test (tax and prices added) ------";
echo "<br><br>1)";
Car::ShowCar($car3);
echo "<br><br>2)";
Car::ShowCar($car4);
echo "<br><br>3)";
Car::ShowCar($car5);

$tax = 5000;
echo "<br>------ If I add a $$tax the cars look like this ------ <br>";

$car3->AddTax($tax);
$car4->AddTax($tax);
$car5->AddTax($tax);

echo "<br>1)";
Car::ShowCar($car3);
echo "<br>2)";
Car::ShowCar($car4);
echo "<br>3)";
Car::ShowCar($car5);

echo "<br>------ Now the cars to be tested are the following (only the brand and color are known) ------<br>";
echo "<br>1)";
Car::ShowCar($car1);
echo "<br>2)";
Car::ShowCar($car2);

echo "<br>The result of the sum of prices between both cars is:<br>";
$total = Car::Add($car1, $car2);
echo "<br>Added price: $" . $total . "<br><br>";

echo "------ Car comparison ------";
if ($car1->Equals($car2))
{
    echo "<br>- Both cars are the same in brand.<br>";
} 
else 
{
    echo "<br>- Both cars do not match in brand.<br>";
}

echo "<br>------ I show a car with all its attributes ------ <br>";
Car::ShowCar($car5);