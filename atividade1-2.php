<?php

$pessoa1 = array('Nome' => 'Manoel de Medeiro', 'Endereço' => 'Rua das Acácias   ', 'Cidade' => 'Foz do Iguaçu', 'UF' => 'PR');
$pessoa2 = array('Nome' => 'Juliana de Amaral', 'Endereço' => 'Rua dos Pinheiros ', 'Cidade' => 'Florianópolis', 'UF' => 'SC');
$pessoa3 = array('Nome' => 'Rodrigo Baidek   ', 'Endereço' => 'Rua Don Pedro I   ', 'Cidade' => 'Petrópolis   ', 'UF' => 'RJ');
$pessoa4 = array('Nome' => 'Fabíola da Silva ', 'Endereço' => 'Rua Chile         ', 'Cidade' => 'Guarulhos    ', 'UF' => 'SP');

$pessoas = array($pessoa1, $pessoa2, $pessoa3, $pessoa4);

print "Nome              | Endereço           | Cidade        | UF | \n";

for ($i=0; $i < 4; $i++) { 
    foreach ($pessoas[$i] as $dado) {
        print "$dado | ";
    }
    print "\n";
}
