<?php
session_start();

if (!isset($_SESSION["medias"])) {
    $_SESSION["medias"] = [];
}

if (isset($_POST["media"])) {
    $nova_media = floatval(str_replace(",", ".", $_POST["media"]));
    $_SESSION["medias"][] = $nova_media;
}

$saida = "<p></p>";
$mediazinhas = $_SESSION["medias"];
if (count($mediazinhas) > 0) {
    $domeio = array_sum($mediazinhas);
    $mediazona = $domeio / count($mediazinhas);

    $isGT = [];
    foreach ($mediazinhas as $i => $m) {
        if ($m < $mediazona) {
            $isGT[$i] = "Média parcial " . ($i + 1) . " é menor que a média geral";
        } else {
            $isGT[$i] = "Média parcial " . ($i + 1) . " é maior que a média geral";
        }
    }

    $saida = "<p>Sua média foi " . number_format($mediazona, 2, ",", ".") . "</p><br>";
    foreach ($mediazinhas as $i => $mediamin) {
        $saida .= "<p>" . $isGT[$i] . "</p>";
        $saida .= "<p>" . number_format($mediamin, 2, ",", ".") . "</p><br>";
    }
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
    <h1>Mediazinhas Mediazonas</h1>
    <p>chiquinha é uma chorona</p>
    <p><i>eu fazendo isso também</i></p>

<form method="post">
    <input name="media" type="number" step="any" placeholder="'1', '1,5', '2' ...">
    <button type="submit">Adicionar Média</button>
</form>

<?= $saida; ?>
</body>
</html>