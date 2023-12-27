<?php 

$notasBimestre1 = [
    'Vinicius' => 8,
    'Joao' => 6,
    'Maria' => 5,
    'Roberto' => 4,
    'Ana' => 10,
]; 

$notasBimestre2 = [

    'Joao' => 6,
    'Roberto' => 8,
    'Ana' => 7,
]; 

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
echo 'Alunos Faltantes:';
echo '<br>';
echo var_dump($alunosFaltantes);
echo '<br>';
$nomesAlunos = array_keys($alunosFaltantes);
echo 'Nomes dos Alunos Faltantes:';
echo '<br>';
echo var_dump($nomesAlunos);
echo '<br>';
$notasAlunos = array_values($alunosFaltantes);
echo 'Nomes dos Alunos Faltantes:';
echo '<br>';
echo var_dump($notasAlunos);
echo '<br>';
