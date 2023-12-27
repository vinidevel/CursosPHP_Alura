<?php 

$anoNascimento = '1991';

$idade = 2023 - $anoNascimento;

echo $idade;

echo "<br>";

//Esse operador de === verifica se os valores e o tipo são iguais. Se os dois não forem de tipos iguais, ele nem o valor vai comparar. Agora esse operador, ==, somente com dois iguais, ele vai tentar fazer conversões. 

if ($anoNascimento == 1991) {
    echo "SIM";
} else {
    echo "NÃO";
}

