<?php

// Questão 10 (O programa inverte os valores das variáveis e exibe o valor antigo e o novo valor de cada uma das variáveis.)



$a = 10;
$b = 20;

echo "Valores originais:\n";
echo "a = $a\n";
echo "b = $b\n\n";

$temp = $a;
$a = $b;
$b = $temp;

echo "Valores após a troca:\n";
echo "a = $a\n";
echo "b = $b\n";
?>
