<?php

$somaHabitantes = 0;
$paises = array();

for ($i=0; $i < 5; $i++) { 
    $pais['nome'] = readline('Diga o nome do País : ');
    $pais['continente'] = readline('Diga o continente do País : ');
    $pais['habitantes'] = readline('Diga a quantidade de habitantes do País : ');

    array_push($paises, $pais);
}

foreach ($paises as $p) {
    print "Nome: $p[nome] \nContinente: $p[continente] \nHabitantes: $p[habitantes] \n\n";
}

foreach ($paises as $p) {
    $somaHabitantes += $p['habitantes'];
}

print "A soma de todos os habitantes é: $somaHabitantes \n";