<?php 



use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, SaldoInsuficienteException, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('135.681.487-57'), 
    'Vinicius Cavalcanti', 
    new Endereco('cidade', 'bairro', 'rua', 'numero'))
);

try {
    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $exception) {
   echo "Valor a depositar precisa ser positivo, seu hacker perigoso";
}
