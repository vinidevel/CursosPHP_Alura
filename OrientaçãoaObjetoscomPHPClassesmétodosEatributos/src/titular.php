<?php

class Titular {

    private $cpf;
    private $nome;
    private $endereco;

public function __construct(Cpf $cpf,string $nome, Endereco $endereco){

    $this->cpf = $cpf;
    $this->nome = $nome;
    $this->endereco = $endereco;
    $this->validaNomeTitular($nome);


}


public function recuperaNome(): string {
    return $this->nome;
}

public function recuperaCpf(): string {
    return $this->cpf->recuperaCpf();
}

public function defineCpfTitular(string $cpf): void
{
    $this->cpf = $cpf;
}


public function defineNomeTitular(string $nome): void
{
    $this->nome = $nome;
}


private function validaNomeTitular(string $nome)
{
    if (strlen($nome) < 5) {
        echo "Nome precisa ter pelo menos 5 caracteres";
        exit();
    }
}

private function recuperaEndereco(): Endereco {
    return $this->endereco;
}





}