<?php

$numeros = array();

for ($i=0; $i < 10; $i++) { 
    array_push($numeros, (readline('Diga um número, eu farei a soma de todos: ')));
}

$soma = 0;

foreach ($numeros as $numero) {
    $soma += $numero;
}

print "A soma de todos esses números é: $soma \n";