<?php 

$alunosDe2021 = [
    'teste1' => 'Vinicius',
    'Joao' ,
    'Maria' ,
    'Roberto' ,
    'Ana' ,
]; 

$novosAlunos = [

    'teste' =>    'Cleber' ,
    'Heitor',
    'Rayane',
]; 

$alunos2022 = array_merge($alunosDe2021, $novosAlunos);
echo var_dump($alunos2022);