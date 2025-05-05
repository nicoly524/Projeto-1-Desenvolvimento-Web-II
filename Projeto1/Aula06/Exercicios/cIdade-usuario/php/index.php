<?php
$saida = '';
$idade = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $idade = isset($_POST['entradaDados']) ? (int) $_POST['entradaDados'] : null;

    if ($idade !== null && $idade !== 0) {
        if ($idade < 18) {
            $saida = '<p>Você é menor de idade</p>';
        } else {
            $saida = '<p>Você é maior de idade</p>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
</head>
<body>
    <h1>Identidade, por favor</h1>
    <p><i>alta cybersegurança</i></p>

    <form method="POST">
        <input type="number" name="entradaDados" placeholder="Digite sua idade" value="<?= htmlspecialchars($idade) ?>">
        <button type="submit">Verificar</button>
    </form>

    <p><?php echo $saida; ?></p>
</body>
</html>
