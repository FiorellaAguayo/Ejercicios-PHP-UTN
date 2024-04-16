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
            <h1>Aplicación nº5 (números en letras)</h1>
            <p>Realizar un programa que en base al valor numérico de una variable num, pueda mostrarse
            por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
            entre el 20 y el 60.<br>
            Por ejemplo, si num = 43 debe mostrarse por pantalla “cuarenta y tres”.</p>
        </header>

        <main>
            <div class="result">
                <h2>Resultado:</h2>
                <?php
                    include '../backend/main.php';
                ?>
            </div>
        </main>

        <footer>
            <p class="signature">Fiorella Aguayo | PROG III | Excercise 5</p>
        </footer>
    </div>
</body>
</html>