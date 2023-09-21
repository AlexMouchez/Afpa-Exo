<?php


$apayer;
$monnaie;
$valeur = array(12);
 $tri = [50.0,20.0,10.0,5.0,2.0,1.0,0.5,0.2,0.1,0.05,0.02,0.01];
$caisse = [2,7,100,50,20,10,5,2,1,5,2,1];
$valeur = [0.0,0.0,0.0,0.0,0.0,0.0,0.0,0.0,0.0,0.0,0.0,0.0];
$a;
$apayer = 370.5;

echo ("Il faut payer : " . $apayer);
echo("<br>");
$monnaie = 1400.01;
echo ("Vous nous donnez : " . $monnaie);
echo("<br>");
foreach ($caisse as $value) {
    echo(" " . $value);
}
echo("<br>");
foreach ($tri as $value) {
    echo(" " . $value);
}
echo("<br>");
$monnaie = $monnaie - $apayer;

for ($i = 0; $i < count($tri) ; $i++) 
{
    if ( ($monnaie / $tri[$i]) >= 1 && $caisse[$i] >= 1) 
      $retVal = ($caisse[$i] <= $monnaie/$tri[$i]) ? $valeur[$i] = $caisse[$i] : $valeur[$i] = intval($monnaie / $tri[$i]) ;
    $monnaie = round($monnaie - ($tri[$i] * $valeur[$i]), 2);
	$caisse[$i] = $caisse[$i] - $valeur[$i];
    if ($i <= 3) 
    {
       echo ("Il faudra rentre " . $valeur[$i] ." billets de ". $tri[$i]);
       echo("<br>");
    }else
    {
        echo ("Il faudra rentre " . $valeur[$i] ." pieces de ". $tri[$i]);
        echo("<br>");
    }
   
}
if ($monnaie != 0) 
    echo ("Ah mais y'a pas assez dans la caisse la, je ne pourrai vous rendre " . $monnaie);

?>