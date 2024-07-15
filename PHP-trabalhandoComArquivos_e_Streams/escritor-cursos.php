<?php 

//usando o ('cursos-php.txt','w'); ele cria o arquivo. 
$arquivo = fopen('cursos-php.txt','a');

//usando o ('cursos-php.txt','a'); ele adiciona texto ao arquivo 

$curso = "\nDesgin Patterns PHP 2";

fwrite($arquivo, $curso);

fclose($arquivo);