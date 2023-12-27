<?php 

$dados = [
    'nome' => 'Vinicius', 
    'nota' => 10, 
    'idade' => 32];
//Nunca usar esta função recebendo valores da url
extract($dados);

var_dump($nome, $nota, $idade);