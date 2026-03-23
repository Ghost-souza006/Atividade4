<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somatório de 1 a N</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Somatório de 1 a N</h1>

    <?php
    $resultado = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $n = $_POST['n'] ?? '';

        if (is_numeric($n) && intval($n) == $n && $n > 0) {
            $n = intval($n);
            $soma = 0;
            for ($i = 1; $i <= $n; $i++) {
                $soma += $i;
            }
            $resultado = "A soma dos números de 1 a {$n} é {$soma}";
        } else {
            $resultado = 'Por favor, insira um número inteiro positivo.';
        }
    }
    ?>

    <form method="post">
        <label>Número: <input type="text" name="n" value="<?= htmlspecialchars($_POST['n'] ?? '') ?>"></label><br><br>
        <button type="submit">Calcular Soma</button>
    </form>

    <?php if ($resultado !== ''): ?>
        <h2>Resultado:</h2>
        <p><?= htmlspecialchars($resultado) ?></p>
    <?php endif; ?>

    <br><br>
<button onclick="window.location.href='index.php'">Voltar</button>

</body>
</html>