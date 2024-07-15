<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, SaldoInsuficienteException, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
$conta->deposita(600);

try {
    $conta->saca(700);
} catch (\Alura\Banco\Modelo\Conta\SaldoInsuficienteException $exception) {
    echo "Você não tem saldo para realizar este saque" . "<br>";
    echo $exception->getMessage();
}


echo $conta->recuperaSaldo();
