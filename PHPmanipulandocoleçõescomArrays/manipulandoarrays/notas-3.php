<?php

function pulalinha(){
    echo "</br>";
    echo "</br>";
};


$notasBimestre1 = [
    'Joaquim' => 5,
    'Carlos' => 5,
   'Pedro' => 6,
   'Ana' => 8,
   'Maria' => 9,
   'Joao' => 10,

];


$notasBimestre2 = [


    'Carlos' => 5,
    'Pedro' => 6,
    'Ana' => 6,
    'Maria' => 9,
    'Joao' => 10,
 
 ];

 // retornar um array contendo todos os elementos desse primeiro parâmetro que não estejam nos próximos arrays. obs: só leva em consideração o valor

var_dump( array_diff($notasBimestre1, $notasBimestre2));

pulalinha();


 // retornar um array contendo todos os elementos desse primeiro parâmetro que não estejam nos próximos arrays. obs: só leva em consideração as chaves

 var_dump( array_diff_key($notasBimestre1, $notasBimestre2));

 pulalinha();

 // comparar chave e valor

 var_dump( array_diff_assoc($notasBimestre1, $notasBimestre2));
