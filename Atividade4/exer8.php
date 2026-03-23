<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Matemáticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Operações Matemáticas</h1>

    <?php
    $resultado = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $n1 = $_POST['n1'] ?? '';
        $n2 = $_POST['n2'] ?? '';
        $op = $_POST['op'] ?? '';

        if (is_numeric($n1) && is_numeric($n2)) {
            switch ($op) {
                case 'somar':
                    $res = $n1 + $n2;
                    $simbolo = '+';
                    break;
                case 'subtrair':
                    $res = $n1 - $n2;
                    $simbolo = '-';
                    break;
                case 'multiplicar':
                    $res = $n1 * $n2;
                    $simbolo = '*';
                    break;
                case 'dividir':
                    if ((float)$n2 === 0.0) {
                        $resultado = 'Erro: divisão por zero não é permitida.';
                    } else {
                        $res = $n1 / $n2;
                        $simbolo = '/';
                    }
                    break;
                default:
                    $resultado = 'Operação inválida.';
            }

            if ($resultado === '' && isset($res)) {
                $resultado = "{$n1} {$simbolo} {$n2} = {$res}";
            }
        } else {
            $resultado = 'Por favor insira dois números válidos.';
        }
    }
    ?>

    <form method="post">
        <label>Número 1: <input type="text" name="n1" value="<?= htmlspecialchars($_POST['n1'] ?? '') ?>"></label><br><br>
        <label>Número 2: <input type="text" name="n2" value="<?= htmlspecialchars($_POST['n2'] ?? '') ?>"></label><br><br>
        <label>Operação:
            <select name="op">
                <option value="somar"<?= (isset($_POST['op']) && $_POST['op'] === 'somar') ? ' selected' : '' ?>>Somar</option>
                <option value="subtrair"<?= (isset($_POST['op']) && $_POST['op'] === 'subtrair') ? ' selected' : '' ?>>Subtrair</option>
                <option value="multiplicar"<?= (isset($_POST['op']) && $_POST['op'] === 'multiplicar') ? ' selected' : '' ?>>Multiplicar</option>
                <option value="dividir"<?= (isset($_POST['op']) && $_POST['op'] === 'dividir') ? ' selected' : '' ?>>Dividir</option>
            </select>
        </label><br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php if ($resultado !== ''): ?>
        <h2>Resultado:</h2>
        <p><?= htmlspecialchars($resultado) ?></p>
    <?php endif; ?>

    <br><br>
<button onclick="window.location.href='index.php'">Voltar</button>
</body>
</html>