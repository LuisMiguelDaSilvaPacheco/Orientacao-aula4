<?php

function Fahreinheit($numero){
    $F = $numero * 1.8 + 32;

    return $F;
}

function Fatorial($numero){
    if ($numero >= 1) {
        $Fa = 1;

        for ($i = $numero; $i > 0; $i--) {
            $Fa = $Fa * $i;
        }
    } else {
        $Fa = 0;
    }

    return $Fa;
}

function Funcao($numero){
    $Fx = ($numero * $numero) + (2 * $numero) + 4;
    
    return $Fx;
}

function ArrayPrint($vetor){
    foreach ($vetor as $numero) {
        print "$numero, ";
    }
    print "\n\n";
}

$vetor0 = array();
$vetor1 = array();
$vetor2 = array();
$vetor3 = array();

for ($i = 0; $i < 5; $i++) {
    array_push($vetor0, (readline('Diga um número: ')));
}

#vetor1
foreach ($vetor0 as $numero) {
    array_push($vetor1, Fahreinheit($numero));
}

#vetor2
foreach ($vetor0 as $numero) {
    array_push($vetor2, Fatorial($numero));
}

#vetor3
foreach ($vetor0 as $numero) {
    array_push($vetor3, Funcao($numero));
}

print "\nFahreinheit: ";
ArrayPrint($vetor1);
print "Fatorial: ";
ArrayPrint($vetor2);
print "Função: ";
ArrayPrint($vetor3);