<?php

function calcularArea($r){
    $area = $r['altura'] * $r['largura'];
    return $area;
}

$retangulos = array();

for ($i = 1; $i <= 5; $i++){
    print "Retângulo $i \n";
    $retangulo['altura'] = readline('Diga a altura de um retângulo (cm): ');
    $retangulo['largura'] = readline('Diga a largura do mesmo retângulo (cm): ');
    print "\n\n";
    array_push($retangulos, $retangulo);
}

print "As áreas dos retângulos são respectivamente:\n";

foreach ($retangulos as $retan) {
    print calcularArea($retan). "cm \n";
}