<?php

$notas = [

  
   'Pedro' => 6,
   'Ana' => 5,
   'Maria' => 9,
   'Carlos' => 7,


];

krsort($notas);
var_dump($notas);

function pulalinha(){
    echo "</br>";
    echo "</br>";
};

pulalinha();



if (gettype($notas) === 'array') {
 echo "Sim, é um array";
} else {
    echo "Não é um array.";
}