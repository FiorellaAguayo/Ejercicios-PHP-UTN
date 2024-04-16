<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application nº2 (show date and season)</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Application nº2 (show date and season)</h1>
            <p>Get the current date from server (date function) and then print it inside the page in different formats (select the formats you like more). Also, indicate what season of year it is. Use a multiple selective structure</p>
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
            <p class="signature">Fiorella Aguayo | PROG III | Excercise 2</p>
        </footer>
    </div>
</body>
</html>