<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação do Aluno (Média):</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Média do aluno</h1>
    <form  method="post" action="">
        <label for="nota1"> Nota do priemiro bimestre:</label>
        <input type="number" step="0.01" name="nota1" id="nota1" required><br><br>

        <label for="nota2"> Nota do segundo bimestre:</label>
        <input type="number" step="0.01" name="nota2" id="nota2" required><br><br>

        <input type="submit" value="Calcular">

    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nota1 = floatval($_POST["nota1"]);
    $nota2 = floatval($_POST["nota2"]);

    $media = ($nota1 + $nota2) / 2;
    $media_formatada = number_format($media, 2, ",", ".");

    if ($media >= 7) {
        echo "<p>Aluno aprovado com média: $media_formatada</p>";
    } elseif ($media >= 5) {
        echo "<p>Aluno em recuperação com média: $media_formatada</p>";
    } elseif ($media < 5) {
        echo "<p>Aluno reprovado com média: $media_formatada</p>";
    }
}
?>

<br><br>
<button onclick="window.location.href='index.php'">Voltar</button>

</body>
</html>