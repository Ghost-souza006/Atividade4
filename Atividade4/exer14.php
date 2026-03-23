<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras (Checkboxes)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lista de Compras</h1>
    <form method="post">
        <label>
            <input type="checkbox" name="itens[]" value="Maçã"> Maçã
        </label><br>
        <label>
            <input type="checkbox" name="itens[]" value="Banana"> Banana
        </label><br>
        <label>
            <input type="checkbox" name="itens[]" value="Laranja"> Laranja
        </label><br>
        <label>
            <input type="checkbox" name="itens[]" value="Pera"> Pera
        </label><br>
        <label>
            <input type="checkbox" name="itens[]" value="Uva"> Uva
        </label><br>
        <input type="submit" value="Adicionar à Lista">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $itens = $_POST["itens"];
        echo "<h2>Itens adicionados à lista:</h2>";
        echo "<ul>";
        foreach ($itens as $item) {
            echo "<li>$item</li>";
        }
        echo "</ul>";
    }
    ?>
    <br><br>
    <button onclick="window.location.href='index.php'">Voltar</button>
</body>
</html>