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
echo var_dump($alunos2022);