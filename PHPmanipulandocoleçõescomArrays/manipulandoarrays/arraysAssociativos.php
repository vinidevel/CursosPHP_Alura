<?php


$array = [

    1 => 'um',
    2 => 'dois',
    3 => 'três',
];


foreach ($array as $numero => $nomeDoNumero) {
    echo "O número $numero em português é $nomeDoNumero " . "</br>";
}

echo "Total " . count($array) . "</br>"
?>