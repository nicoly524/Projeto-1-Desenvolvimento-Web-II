<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu nome</title>
</head>

<body>

    <h1>Nome completo</h1>

    <form id="nome" method="post">
        <label for="nd">Digite seu nome completo: </label>
        <input type="text" name="nd" />
        <br>
        <input type="submit" value="Ver nome" />
    </form>


    <?php

    if (isset($_POST['nd'])) {
        $nome = $_POST['nd'];
        echo "<p id='resposta'>O seu nome é: <strong>$nome</strong></p>";
    }

    ?>




</body>

</html>