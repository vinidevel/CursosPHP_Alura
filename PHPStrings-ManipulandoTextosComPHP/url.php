<?php 

$url = 'http://alura.com.br';


$testeURLSegura = str_starts_with($url, 'https');

if ($testeURLSegura) {
    echo "$url É uma url segura";
    } else {
        echo "$url Não  É uma url segura";
    }

    echo "<br><br>";


$testeURLNacional = str_ends_with($url, '.br');

    if ($testeURLNacional) {
        echo "$url É um domínio do Brasil";
        } else {
            echo "$url Não É um domínio do Brasil";
        }

// var_dump($teste);

