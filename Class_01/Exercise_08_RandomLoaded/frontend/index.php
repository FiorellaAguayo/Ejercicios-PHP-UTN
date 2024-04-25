<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application nº8 (random loaded)</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Application nº8 (random loaded)</h1>
            <p>Print the values ​​of the following associative vector using the foreach control structure:
            v[1]=90; v[30]=7; v['e']=99; v['hello']= 'world';</p>
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
            <p class="signature">Fiorella Aguayo | PROG III | Excercise 8</p>
        </footer>
    </div>
</body>
</html>