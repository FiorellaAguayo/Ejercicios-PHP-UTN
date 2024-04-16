<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application nº3 (get the middle value)</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Application nº3 (get the middle value)</h1>
            <p>Given three numerical variables of integer type a, b and c; make an application that shows the content of that variable that contains the value that is in the middle of the three variables. If this value doesn't exist, display a message indicating what happened.
            <br><br>Example 1: a= 6; b = 9; c = 8; => 8 is displayed.
            <br><br>Example 2: a = 5; b = 1; c = 5; => a messagge “There is no medium value” is displayed.</p>
        </header>

        <main>
            <div class="result">
                <h2>Result:</h2>
                <?php
                    include '../backend/main.php';
                ?>
            </div>
        </main>

        <footer>
            <p class="signature">Fiorella Aguayo | PROG III | Excercise 3 </p>
        </footer>
    </div>
</body>
</html>