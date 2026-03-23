<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo de Combustível</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculadora de Consumo de Combustível</h1>
    <form method="post" action="">
        <label for="distancia">Distância total percorrida (km):</label>
        <input type="number" step="0.01" name="distancia" id="distancia" required><br><br>

        <label for="combustivel">Quantidade de combustível gasto (L):</label>
        <input type="number" step="0.01" name="combustivel" id="combustivel" required><br><br>

        <input type="submit" value="Calcular">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $distancia = floatval($_POST["distancia"]);
    $combustivel = floatval($_POST["combustivel"]);

    if ($combustivel > 0) {
        $consumo_medio = $distancia / $combustivel;
        $consumo_formatado = number_format($consumo_medio, 2, ",", ".");
        echo "<p>Consumo médio: $consumo_formatado km/L</p>";
    } else {
        echo "<p>Informe um valor de combustível maior que zero.</p>";
    }
}
?>

<br><br>
<button onclick="window.location.href='index.php'">Voltar</button>

</body>
</html>