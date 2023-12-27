<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;

    public function sacar(float $valorSacar)
    {
      if ($valorSacar > $this -> saldo) {
       echo "Valor não disponível !";
       return;
      } 
        $this -> saldo -= $valorSacar;

      

}

public function depositar(float $valorDepositar)
{
  if ($valorDepositar < $this -> saldo) {
    echo "Valor precisa ser positivo";
    return;

  } 
    $this -> saldo += $valorDepositar;
  
  

}

public function transferir(float $valorATransferir, Conta $contaDestino): void
{
    if ($valorATransferir > $this->saldo) {
        echo "Saldo indisponível";

        return;

    } 
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    
}

}

function pulalinha(){
    echo "</br>";
    echo "</br>";
}

$primeiraConta = new Conta();

$primeiraConta->saldo = 500;
$primeiraConta->cpfTitular = "135.057.581-85";
$primeiraConta->nomeTitular = "Vinicius C amorim";





var_dump($primeiraConta);

pulalinha();

$segundaConta = new Conta();

$segundaConta ->saldo = 500;
$segundaConta ->cpfTitular = "248.481.222-08";
$segundaConta ->nomeTitular = "Maria C Amorim";




var_dump($segundaConta);



pulalinha();



$primeiraConta->transferir(500, $segundaConta);


var_dump($primeiraConta);

pulalinha();

var_dump($segundaConta);


pulalinha();

$primeiraConta->depositar(500);

$segundaConta->depositar(2000);

pulalinha();

var_dump($primeiraConta);

pulalinha();


var_dump($segundaConta);






?>