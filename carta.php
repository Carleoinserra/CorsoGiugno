<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  
    body {
            background-color: aquamarine;
        }
  
        </style>
</head>

    


<body>
<?php  
$nome = $_POST["nome"];
$giocata = $_POST["giocata"];
$randomNum = (rand(1, 4));

echo("Benvenuto " . $nome . "<br>");
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
}
else echo ("Ritenta!!!!");


?>
</body>
</html>
