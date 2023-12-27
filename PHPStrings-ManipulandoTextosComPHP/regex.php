<?php 

$telefones = ['(21) 97142 - 6168', '(21) 97142 - 6168', '(21) 97142-6168'];

foreach ($telefones as $telefone) {
 $telefoneValido = preg_match('/(\([0-9]{2}\)) 9?[0-9]{4} - [0-9]{4}/', $telefone, $corresnpondencia);
var_dump($corresnpondencia);
 if ($telefoneValido) {
echo "Telefone Válido" . "<br/>";
 } else {
    echo "Telefone Inválido" . "<br/>";
 }
 
}