<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de Triângulo</title>
</head>

<body>

<h2>Verificar Tipo de Triângulo</h2>

<form method="post">
    Lado A: <input type="number" name="ladoA"><br><br>
    Lado B: <input type="number" name="ladoB"><br><br>
    Lado C: <input type="number" name="ladoC"><br><br>
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["ladoA"];
    $b = $_POST["ladoB"];
    $c = $_POST["ladoC"];

    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        if ($a == $b && $b == $c) {
            echo "<p>Esse triângulo é Equilátero.</p>";
        } elseif ($a == $b || $b == $c || $a == $c) {
            echo "<p>Esse triângulo é Isósceles.</p>";
        } else {
            echo "<p>Esse triângulo é Escaleno.</p>";
        }
    } else {
        echo "<p>Os lados informados não formam um triângulo.</p>";
    }
}
?>

</body>

</html>