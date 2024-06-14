<?php  
$nome = $_POST["nome"];
$giocata = $_POST["giocata"];
$randomNum = (rand(1, 4));

echo("Benvenuto " . $nome . "<br>");
if ($randomNum == 1){
    echo ("E' uscito Cuori");
}
else if ($randomNum == 2){
    echo ("E' uscito Fiori");
}
else if ($randomNum == 3){
    echo ("E' uscito Picche");
}
else if ($randomNum == 4){
    echo ("E' uscito Quadri");
}

echo("<hr>");

if ($randomNum == $giocata){
    echo("Hai vinto");
}
else echo ("Ritenta!!!!");


?>