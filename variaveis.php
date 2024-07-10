<?php

// Questão 1 (Calcula as quatro notas de um aluno)

echo "Digite a nota 1: ";
$nota1 = (float) trim(fgets(STDIN));

echo "Digite a nota 2: ";
$nota2 = (float) trim(fgets(STDIN));

echo "Digite a nota 3: ";
$nota3 = (float) trim(fgets(STDIN));

echo "Digite a nota 4: ";
$nota4 = (float) trim(fgets(STDIN));

$total = $nota1 + $nota2 + $nota3 + $nota4;

echo "A pontuação total das quatro notas é: $total\n";
?>
