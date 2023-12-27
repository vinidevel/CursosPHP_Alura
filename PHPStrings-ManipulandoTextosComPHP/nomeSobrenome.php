<?php 

$nome = 'Vinicius Cavalcanti';
$email = 'vinícius@gmail.com.br';
$senha = "123";

//explode serve para separar informações dentro de uma string

var_dump(explode(' ', $nome));

echo "<br>";

list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome: ' . $nome . '<br>' . 'Sobrenome: ' . $sobrenome;

echo "<br>";

$csv = 'Vinicius Cavalcanti, 24 anos, vini_ide@yahoo.com, solteiro';

var_dump(explode(',', $csv));

echo "<br>";

//colocar limite de separação 

$num = '1 2 3 4 5 6';

var_dump(explode(' ', $num, 3));