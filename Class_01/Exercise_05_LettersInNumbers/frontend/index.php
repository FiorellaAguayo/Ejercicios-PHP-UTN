<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application nº5 (numbers in letters)</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Application nº5 (numbers in letters)</h1>
            <p>Create a program that, based on the numerical value of a variable num, can be displayed
            on the screen, the name of the number inside written in words, for numbers
            between 20 and 60.<br>
            For example, if num = 43, “forty-three” should be displayed on the screen.</p>
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
            <p class="signature">Fiorella Aguayo | PROG III | Exercise 5</p>
        </footer>
    </div>
</body>
</html>