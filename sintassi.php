echo ($parola . " ". $numD . "\n");


echo ($num * $numD . "\n");
echo ($num / $numD . "\n");

if ($num > $numD) {
    echo("maggiore") . "\n";}
    
// array in php

$listaNumeri = [1, 2, 3, 4, 5, 6,7];
// usiamo il foreach per accedere ai singoli elementi dell'array


    
$listaAssoc = ["nome" => "Rossi", "mansione" => "impiegato",
"stipendio" => 1500];

//echo($listaAssoc["stipendio"]);

foreach ($listaAssoc as $key => $value) {
    echo ($key . " ," . $value . "\n");
}
// aggiunta di un elemento
array_push($listaNumeri, 10, 12, 14);

    
// rimozione di un elemento
unset($listaNumeri[1]);
foreach ($listaNumeri as $numr){
    echo($numr . "\n");}
    
//Output the array:
var_dump($listaNumeri);






?>
