<?php

// Questão 5 (O programa lê dois valores, calcula e exibe a divisão do primeiro valor pelo segundo.)

echo "Digite o primeiro valor: ";
$valor1 = (float) trim(fgets(STDIN));

echo "Digite o segundo valor: ";
$valor2 = (float) trim(fgets(STDIN));

if ($valor2 != 0) {
    $divisao = $valor1 / $valor2;
    echo "A divisão do primeiro valor pelo segundo é: $divisao\n";
} else {
    echo "Erro: Divisão por zero não é permitida.\n";
}
?>
