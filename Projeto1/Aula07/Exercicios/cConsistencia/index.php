<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade em PHP</title>
</head>
<body>

    <h1>Informe sua Idade</h1>

    <?php
    $mensagem = "";
    $idade = "";

    if (isset($_POST['enviar'])) {
        $idade = isset($_POST['idade']) ? intval($_POST['idade']) : null;

        if ($idade === null || $idade < 5 || $idade > 150) {
            $mensagem = "<p style='color:red;'>Idade inválida. Digite um valor entre 5 e 150.</p>";
        } else {
            $mensagem = "<p style='color:green;'>Correto!</p>";
        }
    }
    ?>

    <form method="post">
        <label for="idade">Sua idade (5 a 150):</label>
        <input type="number" id="idade" name="idade" value="<?php echo htmlspecialchars($idade); ?>">
        <input type="submit" name="enviar" value="Verificar">
        <?php echo $mensagem; ?>
    </form>

</body>
</html>