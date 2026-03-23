<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontrar o Maior Valor:</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Encontrar o Maior Valor</h1>

    <form method="post">
        <label for="numeros">Digite 5 números:</label><br>
        <input type="number" name="numeros" required><br>
        <input type="number" name="numeros" required><br>
        <input type="number" name="numeros" required><br>
        <input type="number" name="numeros" required><br>
        <input type="number" name="numeros" required><br><br>
        <input type="submit" value="Encontrar Maior">
    </form> 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeros = $_POST["numeros"];
        $maior = $numeros[0];

        foreach ($numeros as $numero) {
            if (intval($numero) > intval($maior)) {
                $maior = $numero;
            }
        }

        echo "<h2>O maior número digitado foi: " . htmlspecialchars($maior) . "</h2>";
    }
    ?>
<button onclick="window.location.href='index.php'">Voltar</button>

</body>
</html>