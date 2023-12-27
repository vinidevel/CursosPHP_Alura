<?php 


$idadeLista = [19, 21, 25, 30, 32, 33, 34];



for ($i=0; $i < 7; $i++) { 
    # code...
    if ($idadeLista[$i] >= 0) {
        echo $idadeLista[$i] . "<br>";
    }

  

}

echo "<br>";

echo  " Essa lista tem "  . count($idadeLista) . " números.";