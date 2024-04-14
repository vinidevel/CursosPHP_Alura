<?php

require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/CPF.php';
require_once 'src/funcoes/funcoes.php';

// spl_autoload_register(function (string $nomeCompletoDaClasse){
//     $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
//     $caminhoArquivo .= '.php';

//     if(file_exists($caminhoArquivo)) {
//         require $caminhoArquivo;
//     }
// });



use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Pessoa;

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaSaldo();
pulalinha();
echo $primeiraConta->recuperaCpfTitular();
pulalinha();
echo $primeiraConta->recuperaNomeTitular();
pulalinha();
// echo $primeiraConta->recuperaEnderecoTitular();
// pulalinha();

