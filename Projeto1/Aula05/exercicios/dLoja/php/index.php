<?php
$parafuso = 1.50;
$arruela = 2.00;
$porca = 2.50;

$saida = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $compparaf = (int)($_POST['parafusos'] ?? 0);
    $comparru  = (int)($_POST['arruelas'] ?? 0);
    $compporc  = (int)($_POST['porcas'] ?? 0);

    $notapa = $compparaf * $parafuso;
    $notaar = $comparru  * $arruela;
    $notapo = $compporc  * $porca;

    $saida = "<hr>
        <p>Itens Comprados:</p><br>
        <p>Parafuso: R$ " . $notapa . "</p><br>
        <p>Arruela: R$ ". $notaar ."</p><br>
        <p>Porca: R$ ". $notapo ."</p><hr>
        <p>Vendedor: Loja de Ferramentas</p>
        <p>Comprador: " . htmlspecialchars($nome) . "</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Ferramentas</title>
</head>
<body>
    <h1>Loja de Ferramentas</h1>
    <p><i>O que as mentas te fizeram?</i></p>

    <form method="post">
        <input name="nome" type="text" placeholder="Digite o seu nome"><br><br>
        <input name="parafusos" type="number" placeholder="Digite quantos parafusos deseja"><br><br>
        <input name="arruelas" type="number" placeholder="Digite quantas arruelas deseja"><br><br>
        <input name="porcas" type="number" placeholder="Digite quantas porcas deseja"><br><br>
        <button type="submit">Fazer Nota</button>
    </form>

    <hr>
    <?= $saida ?>
</body>
</html>
