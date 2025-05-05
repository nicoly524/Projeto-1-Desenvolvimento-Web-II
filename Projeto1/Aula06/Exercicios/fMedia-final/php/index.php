<?php
$saida = "";
$saidanotas = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['entradaDados'] ?? '';
    $notas = [
        floatval($_POST['entradaDados2'] ?? 0),
        floatval($_POST['entradaDados3'] ?? 0),
        floatval($_POST['entradaDados4'] ?? 0)
    ];

    $sum = 0;
    for ($i = 0; $i < 3; $i++) {
        $saidanotas .= "<p>nota" . ($i + 1) . " = " . number_format($notas[$i], 1, ',', '.') . "</p><br>";
        $sum += $notas[$i];
    }

    $media = $sum / 3;

    if ($media >= 6) {
        $saida .= "<br><p>Parabéns, $nome passou!</p><br>";
    } else {
        $saida .= "<br><p>Infelizmente, $nome não passou.</p><br>";
    }

    $saida .= $saidanotas;
    $saida .= "<p>Média = " . number_format($media, 2, ',', '.') . "</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medias</title>
</head>
<body>
    <h1>Media master</h1>
    <p><i>É assim que se gasta uma nota</i></p>

    <form method="post">
        <input name="entradaDados" type="text" placeholder="Nome">
        <br><br>
        <input name="entradaDados2" type="number" step="any" placeholder="nota 1">
        <br><br>
        <input name="entradaDados3" type="number" step="any" placeholder="nota 2">
        <br><br>
        <input name="entradaDados4" type="number" step="any" placeholder="nota 3">
        <br><br>
        <button type="submit">Calcular Média</button>
    </form>

    <p><?= $saida ?></p>
</body>
</html>
