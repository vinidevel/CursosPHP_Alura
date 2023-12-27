<?php

$notasEscola = [
[
        'aluno' => 'João',
        'notas' => 8.00,

    ],

   [
        'aluno' => 'Marcelo',
        'notas' => 6.00,

    ],

  [
        'aluno' => 'Maria',
        'notas' => 8.00,

    ],



];

// var_dump(sort($notasEscola));

foreach ($notasEscola as $alunos => $nota) {
    list('aluno'=> $aluno, 'notas' => $notas) = $nota;
    echo "O aluno $aluno teve a nota $notas" . "</br>";
}
