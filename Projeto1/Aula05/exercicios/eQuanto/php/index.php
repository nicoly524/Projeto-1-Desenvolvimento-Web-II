<?php
$saida = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $anoAtual = (int)($_POST['ano'] ?? 0);

    if ($anoAtual > 0) {
        $qtdBi = floor($anoAtual / 4);
        $diasDesde01 = ($anoAtual - 1) * 365 + $qtdBi;

        $saida = "Já se passaram {$diasDesde01} dias desde 01/01/0001";
    } else {
        $saida = "Digite um ano válido.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantos dias?</title>
</head>
<body>
    <h1>Obrigado</h1>
    <p><i>O.o? praq</i></p>
    <br>
    <form method="post">
        <p>Digite o ano atual</p>
        <input name="ano" type="text" placeholder="Ano atual">
        <br><br>
        <button type="submit">Enviar</button>
    </form>

    <br><br>
    <p><?= $saida ?></p>
</body>
</html>
