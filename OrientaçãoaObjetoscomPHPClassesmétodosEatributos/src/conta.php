<?php 

class Conta
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo = 0;



    public function criarConta( string $cpf, string $nomeTitular,float $saldo): array
    {
        
       return [$cpf =[
        'titular' =>$nomeTitular,
        'saldo' =>$saldo
       ]];

    }

    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function defineCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }

    public function recuperaCpfTitular()
    {
        return $this->cpfTitular;
    }

    public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }
    public function recuperarNomeTitular()
    {
        return $this->nomeTitular;
    }
}

function pulalinha(){
  echo "</br>";
  echo "</br>";
}