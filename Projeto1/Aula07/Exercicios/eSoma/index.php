<!DOCTYPE html>
<html lang="pt-br">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soma até N</title>
</head>

<body>
  <h2>Somar de 1 até um número</h2>
  <form method="post">
    <label>Digite um número inteiro:
      <input type="number" name="numero" required>
    </label>
    <br><br>
    <input type="submit" value="Calcular Soma">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $numero = intval($_POST["numero"]);
      $soma = 0;

      for ($contador = 1; $contador <= $numero; $contador++) {
          $soma += $contador;
      }

      echo "<p>A soma de 1 até $numero é: $soma</p>";
  }
  ?>
</body>

</html>