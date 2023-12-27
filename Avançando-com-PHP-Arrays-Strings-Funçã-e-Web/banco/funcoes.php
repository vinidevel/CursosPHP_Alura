
<?php

function sacar(array $conta, float $valoraSacar): array
{    //O float serve para que o $valoraSacar apenas aceite números e não strings.
    if ($valoraSacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar esse valor.");
    } else {
        $conta['saldo'] -= $valoraSacar;
    };

    return $conta;
};

function depositar(array $conta, float $valorAdepositar): array
{
    if ($valorAdepositar > 0) {

        $conta['saldo'] += $valorAdepositar;
        return $conta;
        echo "<br>";
    } else {
        exibeMensagem("O valor precisa ser maior do que zero ");
    };

    return $conta;
}

function exibeMensagem($mensagem)
{
    echo $mensagem . "<br>";
}

function titularComLetrasMaiusculas(array &$conta) // utilizamos o & para informar que queremos o endereço da conta, ou seja, a conta em si, e não a cópia dela.
{

    $conta['Titular'] = mb_strtoupper($conta['Titular']);
}
