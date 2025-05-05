<?php
$saida = '';
$numero1 = '';
$numero2 = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero1 = isset($_POST['entradaDados']) ? (int) $_POST['entradaDados'] : null;
    $numero2 = isset($_POST['entradaDados2']) ? (int) $_POST['entradaDados2'] : null;

    if ($numero2 === 0) {
        $saida = "<p>Não se divide por zero</p>";
    } elseif ($numero1 % $numero2 === 0) {
        $saida = "<p>É múltiplo</p>";
    } else {
        $resto = $numero1 % $numero2;
        $saida = "<p>Não é múltiplo</p><p>Sobra de $resto</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>É múltiplo?</title>
</head>
<body>
    <h1>É múltiplo?</h1>
    <p><i>com certeza uma pergunta frequente minha</i></p>

    <form method="POST">
        <input type="number" name="entradaDados" placeholder="Número em questão" value="<?= htmlspecialchars($numero1) ?>">
        <input type="number" name="entradaDados2" placeholder="É múltiplo de...?" value="<?= htmlspecialchars($numero2) ?>">
        <button type="submit">Gerar resposta</button>
    </form>

    <p><?php echo $saida ?></p>
</body>
</html>
