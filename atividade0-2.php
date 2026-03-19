<?php

$pessoa = array('Nome' => 'Daniel',
                'Profisssao' => 'professor',
                'Idade' => 28,);

print "O professor tem $pessoa[Idade] anos\n";

foreach ($pessoa as $chave => $dado) {
    print "$chave = $dado \n";
}