<?php 

$notas = [

  
   'Pedro' => 6,
   'Ana' => 5,
   'Maria' => 9,
   'Carlos' => 7,


];



echo 'Notas Crescentes : ';
echo '</br>';
asort($notas);
var_dump($notas);
echo '</br>';


echo '</br>';
echo 'Notas Decrescentes : ';
echo '</br>';
arsort($notas);
var_dump($notas);
echo '</br>';

echo '</br>';
echo 'Notas Desordenadas: ';
echo '</br>';
var_dump($notas);
echo '</br>';

//Ordenar pelas chaves em ordem alfabética crescente


echo '</br>';
echo 'Ordem Alfabética: ';
echo '</br>';
ksort($notas);
var_dump($notas);
echo '</br>';


//Ordenar pelas chaves em ordem alfabética decrescente


echo '</br>';
echo 'Ordem Alfabética Decrescente: ';
echo '</br>';
krsort($notas);
var_dump($notas);
echo '</br>';


