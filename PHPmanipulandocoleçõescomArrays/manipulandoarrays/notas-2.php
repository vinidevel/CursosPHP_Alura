<?php

$notasEscola = [
    'João' => [
        'aluno' => 'João',
        'notas' => 8.00,

    ],

    'Marcelo' => [
        'aluno' => 'Marcelo',
        'notas' => 6.00,

    ],

    'Maria' => [
        'aluno' => 'Maria',
        'notas' => 8.00,

    ],



];

foreach ($notasEscola as $alunos => $nota) {
    list('aluno'=> $aluno, 'notas' => $notas) = $nota;
    echo "O aluno $aluno teve a nota $notas" . "</br>";
}
