<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média altura</title>
</head>

<body>

    <h1>Média de alturas</h1>

    <form id="nome" method="post">
        <div class="mb-3">
            <label for="nd">Digite a altura da primeira pessoa</label>
            <input type="text" name="altum" />
        </div>

        <div class="mb-3">
            <label for="nd">Digite a altura da segunda pessoa</label>
            <input type="text" name="altdois" />
        </div>

        <div class="mb-3">
            <label for="nd">Digite a altura da terceira pessoa</label>
            <input type="text" name="alttres" />
        </div>
        <input type="submit" value="Calcular média" />
    </form>


    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $altum = floatval($_POST['altum']);
        $altdois = floatval($_POST['altdois']);
        $alttres = floatval($_POST['alttres']);

        $media = ($altum + $altdois + $alttres) / 3;

        echo "<p>A média das alturas é: " . number_format($media, 2, ",", ".") . " metros.</p>";
    }

    ?>


</body>

</html>