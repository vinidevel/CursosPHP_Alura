<?php 

$email = 'vinícius@gmail.com.br';
$senha = "123";


for ($i=0; $i < 3; $i++) { 
    echo $senha[$i] . "<br/>";
}

echo "Tamanho da string" . "<br/>";

//exibir tamanho da string em bytes. OB: Se tiver acento em alguma letra pode ser que conte mais de 1 byte

echo strlen($senha) . "<br/>";

//exibir tamanho real

echo mb_strlen($senha) . "<br/>";

//condicional

if (strlen($senha) < 8) {
   echo "Senha Insegura !" . "<br/>"; 
}


//buscar a posicao do @
$posicaoDoArroba = strpos($email,'@');

$usuario = substr($email, 0, $posicaoDoArroba);

//letra maiúscula -> strtoupper. OBS: ele não reconhece os acentos
echo var_dump(strtoupper($usuario));

echo "<br/>";

//letra maiúscula -> mb_strtoupper. OBS: com oo mb_strtoupper é possível reconhecer os acentos
echo var_dump(mb_strtoupper($usuario));

echo "<br/>";




echo var_dump(substr($email, $posicaoDoArroba + 1));

echo "<br/>";

echo var_dump(strtolower($usuario));

