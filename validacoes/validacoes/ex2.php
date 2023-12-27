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

//Verificar se há o nome na lista
var_dump(array_key_exists('Pedro', $notas));

pulalinha();

//Verificar se há nota do aluno

var_dump(isset($notas['Joao']));