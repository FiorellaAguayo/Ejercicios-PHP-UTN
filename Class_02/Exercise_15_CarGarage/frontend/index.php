<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application nº15 (Car-Garage)</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Application nº15 (Car-Garage)</h1>
            <p>Create the Garage class that has private attributes:
            <br><br>_businessName (String)
            <br>_pricePerHour (Double)
            <br>_cars (Car[], reuse the Car class from the previous exercise)
            <br><br>Create a constructor capable of instantiating objects by passing them as parameters:
            <br>i. The business name.
            <br>ii. The business name, and the price per hour.
            <br><br>Make an instance method called “ShowGarage”, which will not receive parameters and will show all the attributes of the object.
            <br><br>Create the “Equals” instance method that allows comparing the Garage type object with a Car type object. It will only return TRUE if the car is in the garage.
            <br><br>Create the “Add” instance method to allow adding a “Car” object to the “Garage” (only if the car is not in the garage, otherwise report it).
            <br><br>Example: $myGarage->Add($autoOne);
            <br>Create the “Remove” instance method to allow removing a “Car” object from the “Garage” (only if the car is in the garage, otherwise report it).
            <br><br>Example: $myGarage >Remove($autoUn);
            <br>In testGarage.php, create cars and a garage. Test the proper functioning of all methods.</p>
        </header>

        <main>
            <div class="result">
                <h2>Result:</h2>
                <?php
                    include '../backend/testGarage.php';
                ?>
            </div>
        </main>

        <footer>
            <p class="signature">Fiorella Aguayo | PROG III | Exercise 10</p>
        </footer>
    </div>
</body>
</html>