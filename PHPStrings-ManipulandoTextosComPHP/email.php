<?php 
//usamos o void para não retornar nada  

//<<< é o equivalente a aspas duplas



function geraEmail(string $nome): void{

    $conteudoEmail = <<<FINAL
    
    Olá, $nome ! 
    Estamos entrando em contato para {motivo do contato} 

    {assinatura}

FINAL;

echo $conteudoEmail;

}

geraEmail('Vinicius Cavalcanti');



