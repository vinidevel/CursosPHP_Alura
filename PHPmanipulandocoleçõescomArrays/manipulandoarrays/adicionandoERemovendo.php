<?php 

$alunosDe2021 = [
    'Vinicius',
    'Joao' ,
    'Maria' ,
    'Roberto' ,
    'Ana' ,
]; 

$novosAlunos = [

    'Cleber' ,
    'Heitor',
    'Rayane',
]; 

$alunos2022 = [...$alunosDe2021, 'Teste Vinicius', ...$novosAlunos];

//Adicionar elementos novos ao array
array_push($alunos2022,  'Alice', 'Bob', 'Charlie');

//Adicionar elemento no final do array

$alunos2022[] = 'Luiz';

//Adicionar elemento no início do array

array_unshift($alunos2022, 'Stefany');

//Remover o primeiro elemento do array

array_shift($alunos2022);

//Remover o último elemento do array

array_pop($alunos2022);

echo var_dump($alunos2022);