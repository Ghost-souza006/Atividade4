<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Área e Perímetro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculadora de Área e Perímetro</h1>
    <form method="post" action="">
        <label for="base">Base (m):</label>
        <input type="number" step="0.01" name="base" id="base" required><br><br>
        
        <label for="altura">Altura (m):</label>
        <input type="number" step="0.01" name="altura" id="altura" required><br><br>
        
        <input type="submit" value="Calcular">

    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = floatval($_POST["base"]);
        $altura = floatval($_POST["altura"]);
        
        $area = $base * $altura;
        $perimetro = 2 * ($base + $altura);
        
        // Formatar os valores
        $area_formatada = number_format($area, 2, ",", ".");
        $perimetro_formatado = number_format($perimetro, 2, ",", ".");
        
        echo "<p>Área: $area_formatada M²</p>";
        echo "<p>Perímetro: $perimetro_formatado M</p>";
    }
    ?>

    <br><br>
<button onclick="window.location.href='index.php'">Voltar</button>
</body>
</html>