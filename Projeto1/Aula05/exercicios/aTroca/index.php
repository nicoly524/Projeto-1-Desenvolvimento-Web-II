<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troca Váriaveis</title>
</head>

<body>

    <h1>Troca de váriaveis</h1>

    <form id="nome" method="post">
        <div class="mb-3">
            <label for="nd">Digite um valor para A: </label>
            <input type="text" name="valora" />
        </div>
        <div class="mb-3">
            <label for="nd">Digite um valor para B: </label>
            <input type="text" name="valorb" />
        </div>
        <input type="submit" value="Trocar valores" />
    </form>


    <?php

    if (isset($_POST['valora']) && ($_POST['valorb'])) {
        $a = $_POST['valora'];
        $b = $_POST['valorb'];

        echo "<p>Valores normais:  A =  $a |B =  $b</p>";

        $trocada = $a;
        $a = $b;
        $b = $trocada;


        echo "<p>Valores trocados:  A =  $a |B =  $b</p>";
    }

    ?>



</body>

</html>