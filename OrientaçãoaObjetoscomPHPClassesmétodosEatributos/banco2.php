<?php  

require_once 'src/conta.php';
require_once 'src/titular.php';
require_once 'src/cpf.php';
require_once 'src/endereco.php';
require_once 'src/pessoa.php';
require_once 'src/funcionario.php';


// $terceiraConta = new Conta(new Titular('123.456.789-10', 'Vincius C. de Amorim'));

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new Cpf('123.456.789-10'), 'Vinicius Dias', $endereco);
$terceiraConta = new Conta($vinicius);

// $terceiraConta = new Conta(new Cpf('123.456.789-10', 'Vincius C. de Amorim'));

// echo $terceiraConta->validaNomeTitular();

pulalinha();


// parâmetros passados pelo construtor e não mais pelos métodos
// $terceiraConta->defineCpfTitular('123.456.789-10');
// $terceiraConta->defineNomeTitular('Vincius C. de Amorim');
$terceiraConta->deposita(600);
$terceiraConta->deposita(500);


echo $terceiraConta->recuperaSaldo();
pulalinha();
echo $terceiraConta->recuperaCpfTitular();
pulalinha();
echo $terceiraConta->recuperarNomeTitular();
pulalinha();

// $quartaConta = new Conta(new Titular('111.555.789-10', 'Joao C. de Amorim'));
$joao = new Titular(new Cpf('111.555.789-10'), 'Joao C. de Amorim', $endereco);
$quartaConta = new Conta($joao);



// parâmetros passados pelo construtor e não mais pelos métodos
// $quartaConta->defineCpfTitular('111.555.789-10');
// $quartaConta->defineNomeTitular('Joao C. de Amorim');
$quartaConta->deposita(1000);


echo $quartaConta->recuperaSaldo();
pulalinha();
echo $quartaConta->recuperaCpfTitular();
pulalinha();
echo $quartaConta->recuperarNomeTitular();

pulalinha();

$quartaConta->transfere(500, $terceiraConta);

echo $quartaConta->recuperaSaldo();
pulalinha();

echo $terceiraConta->recuperaSaldo();
pulalinha();

// var_dump($terceiraConta);

// var_dump($quartaConta);

pulalinha();

// echo' O número de contas é: ' . Conta::recuperarNumerodeContas();

echo "O número de contas é:" . Conta::recuperaNumeroDeContas();