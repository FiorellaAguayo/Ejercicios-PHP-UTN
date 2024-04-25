<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application nº13 (Validate word)</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Application nº13 (Validate word)</h1>
            <p>
            <br>Create a function that receives as a parameter a string ($word) and an integer ($max). The
            function will validate that the number of characters in $word does not exceed $max and also
            <br>You must determine if that value is within the following list of valid words:
            “Recovery”, “Partial” and “Programming”.
            <br><br>The return values ​​will be: 1 if the word belongs to any element in the list. 0 otherwise.</p>
        </header>

        <main>
            <div class="result">
                <h2>Result:</h2>
                <?php
                    include '../backend/test.php';
                ?>
            </div>
        </main>

        <footer>
            <p class="signature">Fiorella Aguayo | PROG III | Exercise 10</p>
        </footer>
    </div>
</body>
</html>