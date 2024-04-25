<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application nº14 (Car)</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Application nº14 (Car)</h1>
            <p>Create a class called "Car" with that has the following private atributtes.
                <br>_color (Double)
                <br>_price (String)
                <br>_brand (DateTime)
                <br>_date (DateTime)
                <br><br>Create a constructor capable of instantiating objects by passing as parameters: 
                <br>i. The brand and the color
                <br>ii. The brand, color and price
                <br>iii. The brand, color, price and date
                <br><br>- Make an instance method called "AddTax", which will receive a double by parameter and that will be added to the price of the object.
                <br>- Make a class method called "ShowCar", which will receive an object of type "Car" by parameter and will show all the atributtes of said object.
                <br>- Create the instance method called "Equals" that allows comparing two objects of type "Car". Only will return TRUE if both "Cars" are the same brand.
                <br>- Create a class method, called "Add" that allows adding two objects "Car" (only if they of the same brand, and the same color, otherwise, report it) and returns a Double with the sum of the prices or zero if operation could not be permormed.
                <br><br>In testCar.php:
                <br>- Create two "Car" objects of the same brand and different color.
                <br>- Create two "Car" objects of the same brand, same color and different price.
                <br>- Create an "Car" object using the remaining overhead.
                <br>- Use the "AddTax" method on the last three objects, adding $1500 to the attribute price.
                <br>- Obtain the amount of the first "Car" object plus the second and show the obtained result.
                <br>- Compare the first "Car" with the second and fifth object and report if they are the same or not.
                <br>- Use the "ShowCar" class method to show the odd objects (1, 3, 5)</p>
        </header>

        <main>
            <div class="result">
                <h2>Result:</h2>
                <?php
                    include '../backend/testCar.php';
                ?>
            </div>
        </main>

        <footer>
            <p class="signature">Fiorella Aguayo | PROG III | Exercise 10</p>
        </footer>
    </div>
</body>
</html>