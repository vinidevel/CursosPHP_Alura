<?php

$notas = [
    'João' => [
        'aluno' => 'João',
        'notas' => 9.00,

    ],

    'Marcelo' => [
        'aluno' => 'Marcelo',
        'notas' => 4.00,

    ],

    'Maria' => [
        'aluno' => 'Maria',
        'notas' => 7.00,

    ],

    'Carlos' => [
        'aluno' => 'Carlos',
        'notas' => 5.00,

    ],



];

function notasOrdenadas(array $nota1, array $nota2): int
{
    if($nota1['notas'] > $nota2['notas']){
        return -1;
    }

    if ($nota1['notas'] < $nota2['notas']) {
        return 1;
    }

    return 0;

}

usort($notas, 'notasOrdenadas');
var_dump($notas);

//Ou poderíamos fazer dessa forma:

    //Desordenadas
echo '</br>';
echo '</br>';

echo 'Notas desordenadas';
echo '</br>';
    
function Desordenadas(array $nota1, array $nota2): int
{
    return $nota2['notas'] <=>  $nota1['notas'];

}

usort($notas, 'Desordenadas');
var_dump($notas);


    //Ordenadas
    echo '</br>';
    echo '</br>';
    
    echo 'Notas ordenadas';
    echo '</br>';
        
    function ordenadas(array $nota1, array $nota2): int
    {
        return $nota1['notas'] <=>  $nota2['notas'];
    
    }
    
    usort($notas, 'ordenadas');
    var_dump($notas);