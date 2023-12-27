<?php
/*$conta1 = [
    'Titular' => ' Vinicius',
    'CPF'   => '000.000.000-10',
    'saldo' => 'R$ ' . number_format( 20000, 2)

];

$conta2 = [
    'Titular' => ' Maria',
    'CPF'   => '000.000.000-10',
    'saldo' => 'R$ ' . number_format( 10000, 2)
];

$conta3 = [
    'Titular' => ' Pedro',
    'CPF'   => '000.000.000-10',
    'saldo' => 'R$ ' . number_format( 20000, 2)
];*/

//require 'funcoes.php'; 
include 'funcoes.php'; //Utilizando o require_once para trazer o arquivos funcoes, não corremos o risco de ele ser chamado duas vezes. 


$contasCorrentes = [ 

   '11111111111' => [
    'Titular' => 'Vinicius',
    'CPF'   => '000.000.000-10',
    'saldo' => 10000

], 
    
   '22222222222' => [
    'Titular' => 'Maria',
    'CPF'   => '000.000.000-10',
    'saldo' => 10000
   ], 
    
   '33333333333' => [
    'Titular' => 'Pedro',
    'CPF'   => '000.000.000-10',
    'saldo' =>  20000
]
];

 
/*foreach ($contasCorrentes as $conta ) {
    echo $conta['Titular'];
    echo "<br/>";
}*/


$contasCorrentes['11111111111'] = sacar($contasCorrentes['11111111111'], 500);
$contasCorrentes['22222222222'] = sacar($contasCorrentes['22222222222'], 500);
$contasCorrentes['33333333333'] = depositar($contasCorrentes['33333333333'], 10000);
$contasCorrentes['33333333333'] = depositar($contasCorrentes['33333333333'], 1000);
titularComLetrasMaiusculas($contasCorrentes['33333333333']);
unset($contasCorrentes['11111111111']); // remove variáveis

//podemos fazer assim:

/*
foreach ($contasCorrentes as $cpf => $conta) {
    //echo $cpf . " " . $conta['Titular'] . ' ' . $conta['saldo'] . "<br />";
    exibeMensagem("$cpf {$conta["Titular"]} {$conta["saldo"]}");  // modelo de strings complexas
};*/

//ou assim:

// foreach ($contasCorrentes as $cpf => $conta) {
//     list('Titular' => $titular, 'CPF' => $documento, 'saldo' => $saldo) = $conta;
//     exibeMensagem("O cliente número $cpf cadastrado com o nome $titular, cpf $documento, está com o saldo R$ $saldo");  
// };

//ou assim:

// foreach ($contasCorrentes as $cpf => $conta) {

//     exibeMensagem("$cpf {$conta['Titular']} {$conta['CPF']} {$conta['saldo']}");  
// };

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aulas - PHP</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['Titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>


</html>

