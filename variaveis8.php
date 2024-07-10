<?php

// Questão 8 (O programa converte Fahrenheit em Celsius.)

echo "Digite a temperatura em Fahrenheit: ";
$temperaturaF = (float) trim(fgets(STDIN));

$temperaturaC = ($temperaturaF - 32) / 1.8;

echo "Temperatura em Fahrenheit: $temperaturaF °F\n";
echo "Temperatura em Celsius: $temperaturaC °C\n";
?>
