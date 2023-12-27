<?php 

$notas = [
    'Vinicius' => 8,
    'Joao' => 6,
    'Maria' => 5,
    'Ana' => null,
]; 
// verifica se há uma chave chamada Vinicius no array
var_dump (array_key_exists('Vinicius', $notas));

echo '<br> <br>';

// verifica se há valor na chave chamada Ana no array
var_dump (isset($notas['Ana']));

echo '<br> <br>';

krsort($notas);

var_dump($notas);


echo '<br> <br>';

echo 'Alguém tirou 8 ?';

echo '<br> <br>';

var_dump (in_array(8, $notas));

echo '<br> <br>';

echo 'Quanto Joao tirou ?';

var_dump($notas['Joao']);

echo '<br> <br>';

echo 'Alguém tirou 8 ?';

echo '<br> <br>';

echo array_search(8, $notas);