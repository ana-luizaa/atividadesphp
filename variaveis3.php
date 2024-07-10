<?php

// Questão 3 (Calcula e exibe a área do retângulo em metros quadrados)

echo "Digite a largura do retângulo em metros: ";
$largura = (float) trim(fgets(STDIN));

echo "Digite o comprimento do retângulo em metros: ";
$comprimento = (float) trim(fgets(STDIN));

$area = $largura * $comprimento;

echo "A área do retângulo é: $area metros quadrados\n";
?>
