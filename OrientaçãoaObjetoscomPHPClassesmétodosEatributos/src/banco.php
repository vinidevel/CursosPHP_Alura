<?php  

require 'conta.php';

$terceiraConta = new Conta();


$terceiraConta->defineCpfTitular('123.456.789-10');
$terceiraConta->defineNomeTitular('Vincius C. de Amorim');
$terceiraConta->deposita(600);
$terceiraConta->deposita(500);

echo $terceiraConta->recuperaSaldo();
pulalinha();
echo $terceiraConta->recuperaCpfTitular();
pulalinha();
echo $terceiraConta->recuperarNomeTitular();



