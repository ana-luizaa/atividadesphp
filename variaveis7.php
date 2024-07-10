<?php

// Questão 7 (O programa lê o peso do prato montado pelo cliente (em quilos) e imprime o valor a pagar.)

echo "Digite o peso do prato em quilos: ";
$pesoPrato = (float) trim(fgets(STDIN));

$precoPorQuilo = 45.00;
$valorAPagar = $pesoPrato * $precoPorQuilo;

echo "O valor a pagar é: R$ $valorAPagar\n";
?>
