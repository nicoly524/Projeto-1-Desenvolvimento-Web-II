<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencia e Raiz</title>
</head>

<body>

    <h1>Potencia e Raiz</h1>

    <form id="nome" method="post">
        <div class="mb-3">
            <label for="nd">Digite um número: </label>
            <input type="text" name="valor" />
        </div>
        <input type="submit" value="Calcular" />
    </form>


    <?php

    if (isset($_POST['valor'])) {
        $valor = $_POST['valor'];

        $potencia = pow($valor, 3);
        $raiz = sqrt($valor);

        echo "<p>O número $valor ao cubo é igual a $potencia e a raiz quadrada do número $valor é $raiz.</p>";
        
    }

    ?>



</body>

</html>