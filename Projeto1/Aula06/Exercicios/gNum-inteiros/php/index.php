<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Inteiros</title>
</head>
<body>
    <h1>Você sabia?</h1>
    <p><i>Conhecimento além do infinito</i></p>
    <br>

    <form method="post">
    <p>Digite um número inteiro</p>
        <input name="numero" type="number" placeholder="">
        <button type="submit">Verificar</button>
    </form>

    <?php
    if (isset($_POST["numero"]) && $_POST["numero"] !== "") {
        $numero = intval($_POST["numero"]);

        if ($numero > 0) {
            echo "<p>O número é positivo</p>";
        } elseif ($numero < 0) {
            echo "<p>O número é negativo</p>";
        } else {
            echo "<p>O número é igual a zero</p>";
        }
    }
    ?>
</body>
</html>
