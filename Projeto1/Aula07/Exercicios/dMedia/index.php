<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Média de 10 Números</title>
</head>
<body>
  <h2>Digite 10 números</h2>
  <form method="post">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "Número $i: <input type='number' name='numero$i' step='any' required><br>";
    }
    ?>
    <br>
    <input type="submit" value="Calcular Média">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $soma = 0;

      for ($i = 1; $i <= 10; $i++) {
          $numero = $_POST["numero$i"];
          $soma += floatval($numero);
      }

      $media = $soma / 10;
      echo "<p>A média dos números é: $media</p>";
  }
  ?>
</body>
</html>