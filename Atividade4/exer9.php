<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mês por Extenso:</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>MEses</h1>
    <form method="post" action="">
        <label for="numero">Digite um número de 1 a 12:</label>
        <input type="number" name="numero" id="numero" min="1" max="12" required><br><br>
        <input type="submit" value="Ver Mês">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);

    switch ($numero) {
        case 1:
            echo "<p>1 - Janeiro</p>";
            break;
        case 2:
            echo "<p>2 - Fevereiro</p>";
            break;
        case 3:
            echo "<p>3 - Março</p>";
            break;
        case 4:
            echo "<p>4 - Abril</p>";
            break;
        case 5:
            echo "<p>5 - Maio</p>";
            break;
        case 6:
            echo "<p>6 - Junho</p>";
            break;
        case 7:
            echo "<p>7 - Julho</p>";
            break;
        case 8:
            echo "<p>8 - Agosto</p>";
            break;
        case 9:
            echo "<p>9 - Setembro</p>";
            break;
        case 10:
            echo "<p>10 - Outubro</p>";
            break;
        case 11:
            echo "<p>11 - Novembro</p>";
            break;
        case 12:
            echo "<p>12 - Dezembro</p>";
            break;
        default:
            echo "<p>Número inválido. Digite um número de 1 a 12.</p>";
            break;
    }
}
?>

<br><br>
<button onclick="window.location.href='index.php'">Voltar</button>

</body>
</html>