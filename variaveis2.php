<?php

// Questão 2 ( Calcula a média das quatro notas do aluno)

echo "Digite a nota 1: ";
$nota1 = (float) trim(fgets(STDIN));

echo "Digite a nota 2: ";
$nota2 = (float) trim(fgets(STDIN));

echo "Digite a nota 3: ";
$nota3 = (float) trim(fgets(STDIN));

echo "Digite a nota 4: ";
$nota4 = (float) trim(fgets(STDIN));

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

echo "A média das quatro notas é: $media\n";
?>
