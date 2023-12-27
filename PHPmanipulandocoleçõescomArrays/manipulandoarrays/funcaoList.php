<?php 

$dados = ['Vinicius', 10, 32];

list($nome, $nota, $idade) = $dados;

var_dump($nome, $nota, $idade);

//ou podemos usar a função list assim:

echo '<br>';

$dados = ['Vinicius', 10, 32];

[$nome, $nota, $idade] = $dados;

var_dump($nome, $nota, $idade);

//usando array associativo a função list ficaria assim:

echo '<br>';

$dados = [
    'nome' => 'Vinicius', 
    'nota' => 10, 
    'idade' => 32];

['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

var_dump($nome, $nota, $idade);


echo '<br>';

$dados = [ [
    'nome' => 'Vinicius', 
    'nota' => 10, 
    'idade' => 32],

    [
        'nome' => 'Maria', 
        'nota' => 8, 
        'idade' => 20],

        [
            'nome' => 'Joao', 
            'nota' => 5, 
            'idade' => 14],
];

foreach ($dados as ['nome' => $nome, 'nota' => $nota, 'idade' => $idade]) {
    echo "$nome, de $idade anos tirou $nota em Matemática" . '<br>';
}