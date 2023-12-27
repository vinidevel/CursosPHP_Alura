<?php

function pulalinha(){
    echo "</br>";
    echo "</br>";
};


$notas = [

  
   'Pedro' => 6,
   'Ana' => 5,
   'Maria' => 9,
   'Joao' => null,

];


//Ordenar pelas chaves em ordem alfabética decrescente
krsort($notas);
var_dump($notas);

pulalinha();

//Verificar se a chave existe
var_dump(array_key_exists('Pedro', $notas));

pulalinha();

//Verificar se a chave existe e é diferente de nulo

var_dump(isset($notas['Joao']));

pulalinha();

//Verificar se o valor existe

echo "Alguém tirou 9 ?";
pulalinha();

var_dump(in_array(9, $notas, true));

pulalinha();

echo "Quem tirou tirou 9 ?";

pulalinha();


var_dump(array_search(9, $notas, true));

