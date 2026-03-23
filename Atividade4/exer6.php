<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Par ou Ímpar:</h1>
    <form method="post" action="">
        <label for="numero">Digite um número inteiro:</label>
        <input type="number" name="numero" id="numero" required><br><br>
        <input type="submit" value="Verificar">
        </form>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);
    if ($numero % 2 == 0) {
        echo "<p>O número $numero é par.</p>";
    } else {
        echo "<p>O número $numero é ímpar.</p>";
    }
}
?>
    
    <br><br>
<button onclick="window.location.href='index.php'">Voltar</button>
</body>
</html>