<?php

// Questão 8 (O Programa recebe o valor do raio de uma circunferência, e em seguida mostra o diâmetro, comprimento e área da circunferência.)

echo "Digite o valor do raio da circunferência: ";
$raio = (float) trim(fgets(STDIN));

$diamentro = 2 * $raio;

$comprimento = 2 * M_PI * $raio;

$area = M_PI * pow($raio, 2);

echo "Diâmetro da circunferência: $diamentro\n";
echo "Comprimento da circunferência: $comprimento\n";
echo "Área da circunferência: $area\n";
?>
