<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>

    <h1>Gerador de Tabuada</h1>

    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero">
        <input type="submit" value="Gerar Tabuada">
    </form>

    <?php
    if (isset($_POST['numero'])) {
        $numero = intval($_POST['numero']);

        echo "<h2>Tabuada do " . $numero . "</h2>";
        for ($contador = 1; $contador <= 10; $contador++) {
            $resultado = $numero * $contador;
            echo $numero . " X " . $contador . " = " . $resultado . "<br>";
        }
    }
    ?>

</body>
</html>