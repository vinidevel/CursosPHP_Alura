<?php 


$texto = 'Texto com poxa e caramba';

// para realizar a substituição da palavra poxa fazemos o seguinte:

echo str_replace('poxa', '***' , $texto) . "<br>"; 

// para substituir mais de uma palavra 

echo str_replace(['poxa', 'caramba'], ['***', '...'] , $texto) . "<br>"; 

// se eu quiser remover alguma palavra basta deixar nulo 

echo str_replace(['poxa', 'caramba'], ['***'] , $texto) . "<br>"; 

// se eu quiseer substituir por caracter

echo strtr($texto, 'poxa', '***@') . "<br>"; 

echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']) . "<br>"; 


