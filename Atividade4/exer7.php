<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia da Semana:</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Dia da Semana</h1>
    <form method="post" action="">
        <label for="numero">Digite um número de 1 a 7:</label>
        <input type="number" name="numero" id="numero" min="1" max="7" required><br><br>
        <input type="submit" value="Ver Dia">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);

    switch ($numero) {
        case 1:
            echo "<p>1 - Domingo</p>";
            break;
        case 2:
            echo "<p>2 - Segunda-feira</p>";
            break;
        case 3:
            echo "<p>3 - Terça-feira</p>";
            break;
        case 4:
            echo "<p>4 - Quarta-feira</p>";
            break;
        case 5:
            echo "<p>5 - Quinta-feira</p>";
            break;
        case 6:
            echo "<p>6 - Sexta-feira</p>";
            break;
        case 7:
            echo "<p>7 - Sábado</p>";
            break;
        default:
            echo "<p>Número inválido. Digite um número de 1 a 7.</p>";
            break;
    }
}
?>
<br><br>
<button onclick="window.location.href='index.php'">Voltar</button>

</body>
</html>