<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maioridade penal</title>
</head>

<body>

    <h1>Maioridade</h1>

    <form id="nome" method="post">
        <div class="mb-3">
            <label for="nd">Digite sua idade: </label>
            <input type="text" name="idd"/>
        </div>
        <input type="submit" value="Consultar maioridade"/>
    </form>


    <?php

if (isset($_POST['idd'])) {
    $maioridade = 18;
    $idade = intval($_POST['idd']);
    $anos = $maioridade - $idade;

     if ($anos > 0) {
        echo "<p>Falta(m) $anos ano(s) para você se tornar um adulto</p>";
    } else {
        echo "<p>Você já é um adulto.</p>";
    }
}
?>



</body>

</html>