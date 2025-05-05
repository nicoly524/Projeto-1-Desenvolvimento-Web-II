<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Identificador de Vogais</title>
</head>
<body>
    <h1>Identificador de Vogais</h1>
    <p><i>limite de uma letra</i></p>

    <form method="POST">
        <input name="entradaDados" type="text" placeholder="' A ', ' B ', ' C ' ..." maxlength="1">
        <button type="submit">Verificar</button>
    </form>

    <?php
        $isVogal = "Sua letra é uma vogal";
        $isConsoante = "Sua letra não é uma vogal";
        $condicao = ["A", "E", "I", "O", "U"];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $entrada = $_POST['entradaDados'] ?? '';
            $entrada = strtoupper(trim($entrada)); // Limpeza e padronização

            if ($entrada === '') {
                echo "<p></p>";
            } else {
                $ehVogal = false;

                foreach ($condicao as $vogal) {
                    if ($entrada === $vogal) {
                        $ehVogal = true;
                        break;
                    }
                }

                if ($ehVogal) {
                    echo "<p>$isVogal</p>";
                } else {
                    echo "<p>$isConsoante</p>";
                }
            }
        }
    ?>
</body>
</html>
