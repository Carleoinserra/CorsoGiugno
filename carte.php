<?php 
session_start();

if (isset($_SESSION["credito"], $_SESSION["nome"])) {
    $credito = $_SESSION["credito"];
    $nome = $_SESSION["nome"];
} else {
    echo "Variabili di sessione non impostate!";
    exit;
}

echo("<h3>Benvenuto ".$nome . "</h3>" );
echo("<h5>Il tuo credito ora è ".$credito . "</h5>" );
?>
 <form action="carta.php" method = "post">

Inserisci la tua giocata <select name = "giocata">
<option value = "1">Cuori</option>
<option value = "2">Fiori</option>
<option value = "3">Picche</option>
<option value = "4">Quadri</option>
</select> <br><br>
<input type = "submit" value = "Gioca">

 </form> 
 <style> 
 body {
    background-color: yellow;
 }  
