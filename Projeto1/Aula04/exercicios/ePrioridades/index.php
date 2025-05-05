<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prioridades</title>
</head>

<body>

    <h1>Prioridades</h1>

    <?php

    $resum = 5.0 + 4.0 * 2.0;
    $resdois = (5.0 + 4.0) * 2.0;
    $restres = 1.0 + 2.0 / 3.0 * 4.0;
    $resquatro = (1.0 + 2.0) / (3.0 * 4.0);


    $resultado = "";
    $resultado .= "Operação: 5 + 4 * 2 = $resum<br>";
    $resultado .= "Operação: (5 + 4) * 2 = $resdois<br>";
    $resultado .= "Operação: 1 + 2 / 3 * 4 = $restres<br>";
    $resultado .= "Operação: (1 + 2) / (3 * 4) = $resquatro<br>";

    echo $resultado;
    ?>
</body>

</html>