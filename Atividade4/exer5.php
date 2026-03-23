<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Idade (Votação)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Verificador de Idade</h1>
    <form method="post" action="">
       <label for="Ano">Digite seu ano de nascimento:</label>
       <input type="number" name="Ano" id="Ano" required><br><br>
       <input type="submit" value="Verificar">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ano_nascimento = intval($_POST["Ano"]);
    $ano_atual = date("2026");
    $idade = $ano_atual - $ano_nascimento;

    if ($idade >= 18) {
        echo "<p>Você tem $idade anos. Seu voto é obrigatório.</p>";
    } elseif ($idade >= 16) {
        echo "<p>Você tem $idade anos. Seu voto é facultativo.</p>";
    } elseif ($idade < 16) {
        echo "<p>Você tem $idade anos. Você não pode votar.</p>";
    }
}
?>
<br><br>
<button onclick="window.location.href='index.php'">Voltar</button>
</body>
</html>