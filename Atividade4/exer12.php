<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Pares (Intervalo)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Sequência de Pares (Intervalo)</h1>
    <form method="post">
        <label for="start">Início do Intervalo:</label>
        <input type="number" id="start" name="start" required>
        <br><br>
        <label for="end">Fim do Intervalo:</label>
        <input type="number" id="end" name="end" required>
        <br><br>
        <input type="submit" value="Gerar Pares">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $start = intval($_POST["start"]);
        $end = intval($_POST["end"]);

        echo "<h2>Sequência de Pares entre $start e $end:</h2>";
        echo "<ul>";
        for ($i = $start; $i <= $end; $i++) {
            if ($i % 2 == 0) {
                echo "<li>$i</li>";
            }
        }
        echo "</ul>";
    }
?>
<br><br>
<button onclick="window.location.href='index.php'">Voltar</button>
</head>
</body>
</html>