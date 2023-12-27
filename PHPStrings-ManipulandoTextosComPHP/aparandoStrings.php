<?php 




$email = ' .vini_ide@yahoo.com.br, ';

echo trim($email, ' .,'); //as duas pontas
echo rtrim($email, ' .,'); //lado direito
echo ltrim($email, ' .,'); //lado esquerdo
//Remover espaços, pontos e vírgulas do ínicio e fim da string