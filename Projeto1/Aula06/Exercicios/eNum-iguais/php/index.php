<?php
$saida = '';
$compara = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $compara = isset($_POST['entradaDados']) ? (int) $_POST['entradaDados'] : null;

    if ($compara >= 0 && $compara <= 10) {
        $sorteio = rand(0, 10);

        if ($compara === $sorteio) {
            $saida = '<p>Parabéns você foi sorteado e ganhou um grande nada, PARABENIS</p>';
        } else {
            $saida = '<p>Perdeste, que pena, pra você.</p>';
        }
    } else {
        $saida = '<p>Tadinho, não sabe ler.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Iguais</title>
</head>
<body>
    <h1>Maus Costumes</h1>
    <p><i>"Eu quero jogar um Jogo"</i></p>

    <form method="POST">
        <input type="number" name="entradaDados" min="0" max="10" placeholder="número de 1 a 10" value="<?= htmlspecialchars($compara) ?>">
        <button type="submit">Lets Gamble!</button>
    </form>

    <p><?= $saida ?></p>
</body>
</html>
