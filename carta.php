<?php 
session_start();


$credito = $_SESSION["credito"];
$nome = $_SESSION["nome"];

$giocata = (int)$_POST["giocata"];
$randomNum = (rand(1, 4));

echo("Benvenuto " . $nome . "<br>");
if ($credito > 0) {
if ($randomNum == 1){
    echo ("E' uscito Cuori");
    echo ("<img src = 'cuori.jpeg'>");
}
else if ($randomNum == 2){
    echo ("E' uscito Fiori");
    echo ("<img src = 'fiori.jpeg'>");
}
else if ($randomNum == 3){
    echo ("E' uscito Picche");
    echo ("<img src = 'picche.jpeg'>");
}
else if ($randomNum == 4){
    echo ("E' uscito Quadri");
    echo ("<img src = 'quadri.jpeg'>");
}

echo("<hr>");

if ($randomNum == $giocata){
    echo("Hai vinto");
    $credito += 2;
}
else {echo ("Ritenta!!!!");
$credito -= 2;}}
else {echo("Il tuo credito è terminato torna alla pagina iniziale per ricaricare");

    echo("<form action = 'login.html' method = 'get'>");
    echo("<input type = 'submit' value = 'ricarica'>");
    echo("</form>");

}


echo("<hr>");
echo("Il tuo credito al momento è " . $credito . "<br>");
$_SESSION["credito"] = $credito;

?>

    <style>
  
    body {
            background-color: aquamarine;
        }
  
        </style>
