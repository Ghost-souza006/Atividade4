<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Conversor de Reais para Dólares</h1>
    <form method="post" action="">
        <label for="valor_real">Valor em Reais (R$):</label>
        <input type="number" step="0.01" name="valor_real" id="valor_real" required><br><br>
        
        <input type="submit" value="Converter">
    </form>
    
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor_real = floatval($_POST["valor_real"]);
        $cotacao_usd = 5.21; // Cotação fixa
        
        $valor_usd = $valor_real / $cotacao_usd;
        
        // Formatar os valores
        $valor_real_formatado = number_format($valor_real, 2, ",", ".");
        $valor_usd_formatado = number_format($valor_usd, 2, ",", ".");
        
        echo "<p>R$ $valor_real_formatado equivalem a US$ $valor_usd_formatado</p>";
    }
    ?>

    <br><br>
<button onclick="window.location.href='index.php'">Voltar</button>
</body>
</html>