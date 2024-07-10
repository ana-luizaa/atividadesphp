<?php
function lerNotas() {
    $notas = [];
    $handle = fopen ("php://stdin","r");
    for ($i = 1; $i <= 4; $i++) {
        echo "Digite a nota $i: ";
        $nota = trim(fgets($handle));
       
        $notas[] = (float) $nota;
    }
    fclose($handle);
    return $notas;
}
function calcularPontuacaoTotal($notas) {
    return array_sum($notas);
}
function main() {
    
    $notas = lerNotas();
   
    $pontuacaoTotal = calcularPontuacaoTotal($notas);

    echo "A pontuação total das quatro notas é: $pontuacaoTotal\n";
}

main();
?>