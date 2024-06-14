<?php
session_start(); // Avvia la sessione

if (isset($_SESSION["nome"], $_SESSION["credito"])) {
    $nome = $_SESSION["nome"];
    $credito = $_SESSION["credito"];
   
} else {
    echo "Variabili di sessione non trovate.";
    exit(); // Interrompe l'esecuzione se le variabili di sessione non sono impostate
}

if (isset($_POST["scelta"])) {
    $sceltaNum = (int)$_POST["scelta"];
} else {
    echo "Scelta non trovata.";
    exit(); // Interrompe l'esecuzione se la scelta non è stata inviata
}

$min = 0;
$max = 1;
$randomNumber = random_int($min, $max);

if ($randomNumber == 1) {
    echo "è uscito croce<br>";
} else {
    echo "è uscito testa<br>";
}

if ($randomNumber != $sceltaNum) {
    echo "$nome, hai perso<br>";
    $credito -= 2;
    echo "Il tuo credito ora è: $credito euro<br>";
} else {
    echo "$nome, hai vinto<br>";
    $credito += 2;
    echo "Il tuo credito ora è: $credito euro<br>";
}

// Aggiorna il credito nella sessione
$_SESSION["credito"] = $credito;
?>
