<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application nº4 (calculator)</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Application nº4 (calculator)</h1>
            <p>Write a program that uses the operator variable that can store the mathematical symbols: ‘+’, ‘-’, ‘/’ y ‘*’; and define two integer variables op1 and op2.
            According to symbol that has the operator operator, the indicated operation must be carried out and result displayed on screen.
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
            <p class="signature">Fiorella Aguayo | PROG III | Exercise 4 </p>
        </footer>
    </div>
</body>
</html>