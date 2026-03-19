<?php

$array1 = array();
$array2 = array();

for ($i=0; $i < 5; $i++) { 
    array_push($array1, (readline('Diga uma palavra: ')));
}
foreach ($array1 as $palavra) {
     array_push($array2, $palavra);
}
foreach ($array2 as $palavras) {
    print "$palavras, ";
}
print "\n";