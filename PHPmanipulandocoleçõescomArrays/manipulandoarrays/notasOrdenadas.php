<?php

echo "Notas Ordenadas <br> <br>";

$notas = [
    1,
    7,
    8,
    3
];

$notasOrdenadas = $notas;

sort($notasOrdenadas); // sort coloca o array em ordem
foreach ($notasOrdenadas as $value) {
    echo $value . "<br/>";
}

echo "<br>";

echo "Notas Desordenadas <br> <br>";

echo "<br>";

foreach ($notas as $notas) {
    echo $notas . "<br/>";
}