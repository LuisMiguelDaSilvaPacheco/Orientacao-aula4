<?php


function soma($array){
    $soma = 0;
    foreach ($array as $num) {
        $soma += $num;
    }
    return $soma;
}
function pares($array){
    $pares = 0;
    foreach ($array as $num) {
        if ($num % 2) {
            $pares++;
        }
    }
    return $pares;
}
function impares($array){
    $impares = 0;
    foreach ($array as $num) {
        if (!($num % 2)) {
            $impares++;
        }
    }
    return $impares;
}
function divisivel($array){
    $divisivel = 0;
    foreach ($array as $num) {
        if ($num % 5) {
            $divisivel++;
        }
    }
    return $divisivel;
}
function diferença($array){
    $maior = 0;
    $menor = 99999999999;
    $diferença = 0;

    foreach ($array as $num) {
        if ($num < $menor) {
            $menor = $num;
        }
    }
    foreach ($array as $num) {
        if ($num > $maior) {
            $maior = $num;
        }
    }

    $diferença = $maior - $menor;

    return $diferença;
}
function quantidade($array){
    $quantidade = 0;

    foreach ($array as $num) {
        if ($num == 3 or $num == 6 or $num == 9) {
            $quantidade++;
        }
    }
    return $quantidade;
}

$vetor = array();

do {
    $n = readline('Diga um número: ');

    if ($n < 0) {
        array_push($vetor, $n);
    }
} while ($n < 0);

//soma
print 'A soma dos números deu: '. soma($vetor);

//pares
print 'A quantidade de números pares é: '. pares($vetor);

//impares
print 'A quantidade de números impares é: '. impares($vetor);

//divisivel
print 'A quantidade de números divisíveis por 5 é: '. divisivel($vetor);

//diferença
print 'A diferença do maior para o menor número é: '. diferença($vetor);

//quantidade
print 'A quantidade de números 3, 6 e 9 é: '. quantidade($vetor);