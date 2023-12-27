<?php 

$nome = 'Vinicius Dias';


//str_contains serve para verificar se determinar valor está contido no array

 $ehDaminhaFamilia = str_contains($nome, 'Cavalcanti'); 

if ($ehDaminhaFamilia) {
echo "$nome É da minha Família";
} else {
    echo "$nome Não é da minha Família";
}


//  var_dump(str_contains($nome, 'Cavalcanti')); 
