<?php

// Questão 4 (O programa lê dois valores diferentes e informa a diferença entre eles.)

echo "Digite o primeiro valor: ";
$valor1 = (float) trim(fgets(STDIN));

echo "Digite o segundo valor: ";
$valor2 = (float) trim(fgets(STDIN));

$diferenca = abs($valor1 - $valor2);

echo "A diferença entre os valores é: $diferenca\n";
?>
