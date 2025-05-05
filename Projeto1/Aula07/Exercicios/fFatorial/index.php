<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fatorial com While</title>
</head>

<body>
  <h2>Calcular Fatorial</h2>
  <form method="post">
    <label>Digite um número:
      <input type="number" name="numero" min="0" required>
    </label>
    <br><br>
    <input type="submit" value="Calcular">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $numero = intval($_POST["numero"]);
      $atual = 1;
      $fatorial = 1;

      while ($atual <= $numero) {
          $fatorial *= $atual;
          $atual++;
      }

      echo "<p>O fatorial de $numero é: $fatorial</p>";
  }
  ?>
</body>

</html>