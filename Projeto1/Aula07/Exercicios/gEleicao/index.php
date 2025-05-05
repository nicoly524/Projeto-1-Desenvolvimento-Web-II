<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Votação Simples</title>
</head>

<body>
  <h2>Vote em um candidato</h2>
  <form method="post">
    <label>Digite seu voto (1=A, 2=B, 3=Branco, outro=Nulo): </label>
    <input type="number" name="voto" required>
    <input type="submit" value="Votar">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $voto = intval($_POST["voto"]);

    switch ($voto) {
      case 1:
        echo "<p>Você votou no Candidato A</p>";
        break;
      case 2:
        echo "<p>Você votou no Candidato B</p>";
        break;
      case 3:
        echo "<p>Você votou em Branco</p>";
        break;
      default:
        echo "<p>Voto Nulo</p>";
        break;
    }
  }
  ?>
</body>

</html>