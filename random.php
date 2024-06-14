$cont4 = 0;
for ($i = 0; $i < 100; $i++) {
$var = (rand(1, 4));
if ($var == 1){
    
    $cont1++;
}
else if ($var == 2){
    
    $cont2++;
}
else if ($var == 3){
    
    $cont3++;
}
else if ($var == 4){
    
    $cont4++;
}}

echo("E' uscito cuori " . $cont1 . " volte");
echo("E' uscito picche " . $cont2 . " volte");
echo("E' uscito quadri " . $cont3 . " volte");
echo("E' uscito fiori " . $cont4 . " volte");
