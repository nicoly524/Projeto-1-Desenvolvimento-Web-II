<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Calculadora</title>
</head>

<body>

<h2>Calculadora Simples</h2>

<form method="post">
    Primeiro número: <input type="number" name="num1" step="any"><br><br>
    Segundo número: <input type="number" name="num2" step="any"><br><br>
    Operação (+ - * /): <input type="text" name="operacao" maxlength="1"><br><br>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["operacao"];
    $resultado = "";

    if ($op == "+") {
        $resultado = $num1 + $num2;
    } elseif ($op == "-") {
        $resultado = $num1 - $num2;
    } elseif ($op == "*") {
        $resultado = $num1 * $num2;
    } elseif ($op == "/") {
        if ($num2 == 0) {
            $resultado = "Erro: divisão por zero";
        } else {
            $resultado = $num1 / $num2;
        }
    } else {
        $resultado = "Operação inválida!";
    }

    echo "<p>Resultado: $num1 $op $num2 = $resultado</p>";
}
?>

</body>

</html>
