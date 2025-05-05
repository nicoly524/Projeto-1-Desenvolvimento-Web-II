<?php
ob_implicit_flush(true);
ob_end_flush();

$contador = 10;

echo "<!DOCTYPE html><html lang='pt-br'><head><meta charset='UTF-8'><title>Contagem Regressiva</title></head><body>";
echo "<h1>Contagem Regressiva</h1>";

while ($contador > 0) {
    echo "Detonação em: $contador<br>";
    flush(); 
    sleep(1); // aqui ele atrasa a execução em 1 segundo
    $contador--;
}

echo "<strong>Booom!</strong>";
echo "</body></html>";
?>
