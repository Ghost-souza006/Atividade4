<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de Vários Valores:</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <h1>Média de Vários Valores</h1>
    <form method="post">
        <label for="notas">Digite as 5 notas:</label><br>
        <input type="number" name="notas[]" required><br>
        <input type="number" name="notas[]" required><br>
        <input type="number" name="notas[]" required><br>
        <input type="number" name="notas[]" required><br>
        <input type="number" name="notas[]" required><br><br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $notas = $_POST["notas"];
        $soma = 0;

        foreach ($notas as $nota) {
            $soma += intval($nota);
        }

        $media = $soma / count($notas);
        echo "<h2>A média das notas é: " . number_format($media, 2) . "</h2>";
    }
    ?>
    <br><br>
<button onclick="window.location.href='index.php'">Voltar</button>
</body>
</html>