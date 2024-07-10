<?php

// Questão 6 (O programa recebe o peso de uma pessoa em quilos, calcula e mostra esse peso em gramas.)

echo "Digite o peso em quilos: ";
$pesoKg = (float) trim(fgets(STDIN));

$pesoGramas = $pesoKg * 1000;

echo "O peso em gramas é: $pesoGramas\n";
?>
