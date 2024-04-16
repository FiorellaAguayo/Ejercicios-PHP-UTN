<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application nº1 (adding numbers)</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Application nº1 (adding numbers)</h1>
            <p>Make a program that adds all integers starting from 1 while the sum doesn't exceed 1000. Show the sum of numbers and at the end, indicate how many numbers were added</p>
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
            <p class="signature">Fiorella Aguayo | PROG III | Excercise 1</p>
        </footer>
    </div>
</body>
</html>