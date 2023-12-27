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


if (500 > $contasCorrentes['11111111111']['saldo']) {
    echo "Você não pode sacar esse valor.";
    echo "<br/>";
} else {
    $contasCorrentes['11111111111']['saldo'] -= 500;
};

if (2000 > $contasCorrentes['33333333333']['saldo']) {
    echo "Você não pode sacar esse valor.";
    echo "<br/>";
} else {
    $contasCorrentes['33333333333']['saldo'] -= 500;
};

$contasCorrentes['22222222222']['saldo'] -= 12000;

//$contasCorrentes['33333333333']['saldo'] -= 25000;

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['Titular'] . ' ' . $conta['saldo'] . "<br />";
};

?>