<?php

$A = array(1, 2, 3, 4, 5);
$B = array(1, 3, 5, 7, 9);
$C = array();
$D = array();

for ($i=0; $i < 5; $i++) { 
    foreach ($A as $numero) {
        if ($numero == $B[$i]) {
            array_push($C, $numero);
        }
    }
}

foreach ($A as $numero) {

         array_push($D, $numero);

    }

for ($i=0; $i < 5; $i++) { 
    foreach ($A as $numero) {
        if ($numero == $B[$i]) {
            array_push($D, $numero);
        }
    }
}



foreach ($C as $numero) {
    print "$numero, ";
}
print "\n";
foreach ($D as $numero) {
    print "$numero, ";
}
print "\n";