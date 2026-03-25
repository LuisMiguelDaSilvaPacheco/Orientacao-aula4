<?php

$numeros = array();
$numeroMenor = 9999999999999;
$numeroMaior = 0;

for ($i=0; $i < 10; $i++) { 
    array_push($numeros, (readline('Diga um número: ')));
}

foreach ($numeros as $numero) {
    if ($numero < $numeroMenor) {
        $numeroMenor = $numero;
    }
}

foreach ($numeros as $numero) {
    if ($numero > $numeroMaior) {
        $numeroMaior = $numero;
    }
}

print "O maior número foi: $numeroMaior, já o menor número foi: $numeroMenor\n";