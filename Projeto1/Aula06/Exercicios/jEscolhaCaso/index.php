<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha uma Opção</title>
</head>

<body>

<h2>Menu</h2>

<form method="post">
    <label>Escolha uma opção:</label><br>
    <select name="opcao">
        <option value="1">1) Elogio</option>
        <option value="2">2) Ofensa</option>
        <option value="3">3) Sair</option>
    </select><br><br>
    <input type="submit" value="Confirmar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opcao = $_POST["opcao"];

    switch ($opcao) {
        case 1:
            echo "<p>Você é lindo(a)!</p>";
            break;
        case 2:
            echo "<p>Você é um monstro!</p>";
            break;
        case 3:
            echo "<p>Tchau!</p>";
            break;
        default:
            echo "<p>Opção inválida!</p>";
    }
}
?>

</body>

</html>