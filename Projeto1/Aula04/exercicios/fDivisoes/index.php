<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisões Inteiras</title>
</head>

<body>

    <h1>Divisões Inteiras</h1>

    <form id="nome" method="post">
        <div class="mb-3">
            <label for="nd">Digite um número inteiro: </label>
            <input type="text" name="valor" />
        </div>
        <input type="submit" value="Calcular divisão" />
    </form>


    <?php

    if (isset($_POST['valor'])) {
        $valor = $_POST['valor'];

        $metade = intdiv($valor, 2);
        $resto = $valor % 3;

        echo "<p>A metade inteira do número $valor é $metade e o resto da divisão por 3 é $resto.</p>";
        
    }

    ?>



</body>

</html>