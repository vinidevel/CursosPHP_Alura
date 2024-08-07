<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

       //Podemos fazer assim
    // try {
    //     funcao2();
    // } catch (RuntimeException $problema) {
    //     echo "Na função 1, eu resolvi o problema da função 2" . PHP_EOL;
    // } catch (DivisionByZeroError $erro) {
    //     echo "Erro ao dividir um número por 0" . PHP_EOL;
    // }

    //Ou podemos pegar vários problemas de uma vez
    //ex:
    try {
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $problema) {
        // echo "Na função 1, eu resolvi o problema da função 2" . PHP_EOL;
        echo $problema->getMessage() . PHP_EOL;
        echo $problema->getLine() . PHP_EOL;
        echo $problema->getTraceAsString() . PHP_EOL;

    }

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    $arrayFixo = new SplFixedArray(2);
    $arrayFixo[3] = 'Valor';
 
    $divisao = intdiv(5, 0);
    
    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;