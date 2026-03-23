<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial de um Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Fatorial de um Número</h1>

    <?php
    $resultado = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $n = $_POST['n'] ?? '';

        if (is_numeric($n) && intval($n) == $n && $n >= 0) {
            $n = intval($n);
            $fatorial = 1;
            for ($i = 1; $i <= $n; $i++) {
                $fatorial *= $i;
            }
            $resultado = "O fatorial de {$n} é {$fatorial}";
        } else {
            $resultado = 'Por favor, insira um número inteiro não negativo.';
        }
    }
    ?>

    <form method="post">
        <label>Número: <input type="text" name="n" value="<?= htmlspecialchars($_POST['n'] ?? '') ?>"></label><br><br>
        <button type="submit">Calcular Fatorial</button>
    </form>

    <?php if ($resultado !== ''): ?>
        <h2>Resultado:</h2>
        <p><?= htmlspecialchars($resultado) ?></p>
    <?php endif; ?>
    <br><br>
<button onclick="window.location.href='index.php'">Voltar</button>
</body>
</html>