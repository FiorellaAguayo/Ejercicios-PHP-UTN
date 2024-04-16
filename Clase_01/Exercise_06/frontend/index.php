<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application nº6 (random loading)</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Application nº6 (random loading)</h1>
            <p>Define an array of 5 integer elements and assign each of them a number (use the rand function). Using a conditional structure, determinate if the average numbers are
            greater, less than or equal to 6. Display on screen informing the result</p>
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
            <p class="signature">Fiorella Aguayo | PROG III | Excercise 6</p>
        </footer>
    </div>
</body>
</html>