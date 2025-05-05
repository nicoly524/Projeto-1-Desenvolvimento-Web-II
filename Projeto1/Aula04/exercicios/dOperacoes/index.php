<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero digitado</title>
</head>

<body>

    <h1>Operações</h1>
    <form id="numero" action="" method="post">
        <label for="nd">Digite o primeiro número:</label>
        <input type="text" name="numum"/>
        <br><br>
        <label for="nd">Digite o segundo número:</label>
        <input type="text" name="numdois"/>
        <br><br>
        <input type="submit" value="Ver operações" />
    </form>

    <?php
    if (isset($_POST['numum']) && isset($_POST['numdois'])) {
        $numum = floatval($_POST['numum']);
        $numdois = floatval($_POST['numdois']);

        $soma = $numum + $numdois;
        $sub = $numum - $numdois;
        $div = $numum / $numdois;
        $mult = $numum * $numdois;

        echo "<p>$numum + $numdois = $soma</p>";
        echo "<p>$numum - $numdois = $sub</p>";
        echo "<p>$numum ÷ $numdois = $div</p>";
        echo "<p>$numum × $numdois = $mult</p>";
    }
    ?>




</body>

</html>