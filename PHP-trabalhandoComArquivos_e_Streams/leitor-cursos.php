<?php 

// 'r' => ready
$arquivo = fopen('lista-cursos.txt', 'r');


// // enquanto n estiver no final do arquivo fazer o loop
// while ( !feof($arquivo)) {
//     $curso = fgets($arquivo);

//     echo $curso;
// }

//sem precisar fazer o loop

$tamanhoDoArquivo = filesize('lista-cursos.txt');

$cursos = fread($arquivo, $tamanhoDoArquivo);

echo $cursos;

fclose($arquivo);