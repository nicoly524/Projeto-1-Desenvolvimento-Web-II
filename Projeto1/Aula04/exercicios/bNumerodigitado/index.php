<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero digitado</title>
</head>

<body>

    <h1>Número Digitado</h1>
    <form id="numero" action="" method="post">
        <label for="nd">Digite um número:</label>
        <input type="text" id="nd" name="nd" />
        <br>
        <input type="submit" value="Enviar" />
        <input type="reset" value="Limpar" />
    </form>

    <?php
    if (
        isset($_POST['nd']) &&
        $_SERVER["REQUEST_METHOD"] == "POST"
    ) {
        if (is_numeric($_POST['nd'])) {
            $numero = $_POST['nd'];
            echo "<p id='resultado'>Você digitou o número: <strong>$numero</strong></p>";
        } else {
            echo "<p id='resultado'>Por favor, digite um número válido.</p>";
        }
    }
    ?>

</body>

</html>