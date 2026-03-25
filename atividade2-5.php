<?php

$pessoas = array();
$pessoaVelha;

for ($i=1; $i <= 4; $i++) { 

    print "Usuário $i\n";
    
    $pessoa["nome"] = readline("Informe o nome: ");
    $pessoa["idade"] = readline("Informe a idade: ");
    $pessoa["cidadeNatal"] = readline("Informe a cidade natal: ");
    $pessoa["profissao"] = readline("Informe a profissão: ");

    print "\n\n";

    array_push($pessoas, $pessoa);
}

$pessoaVelha = $pessoas[0];
foreach($pessoas as $p) {
    if($p["idade"] > $pessoaVelha["idade"])
        $pessoaVelha = $p;
}

print "Dados da pessoa mais velha: \n";
print "Nome: $pessoaVelha[nome] \n";
print "Idade: $pessoaVelha[idade] \n";
print "Cidade natal: $pessoaVelha[cidadeNatal] \n";
print "Profissão: $pessoaVelha[profissao] \n";