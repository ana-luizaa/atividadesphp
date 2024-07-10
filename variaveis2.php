<?php
function lerNotas() {
    $notas = [];
    $handle = fopen("php://stdin", "r");
    for ($i = 1; $i <= 4; $i++) {
        echo "Digite a nota $i: ";
        $nota = trim(fgets($handle));
        $notas[] = (float) $nota;
    }
    fclose($handle);
    return $notas;
}

function calcularMedia($notas) {
    return array_sum($notas) / count($notas);
}

function main() {
   
    $notas = lerNotas();
   
    $media = calcularMedia($notas);
   
    echo "A média das quatro notas é: $media\n";
}


main();
?>