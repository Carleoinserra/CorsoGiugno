<?php

// dichiaro un array con le temperature della settimana
$listaTemp = [23, 30, 32, 31, 29, 37, 36];

$lung =  count($listaTemp);

$somma = 0;

foreach ($listaTemp as $temp){
    $somma += $temp;
}

echo("La media delle temperature è: " . round($somma/$lung));





?>
