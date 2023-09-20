<?php
$tri=["a","foo", "bar","foo", "bar", "hello","aun","achien","pipo","foo", "bar", "hello","aun","achien","pipo","w","p","carnaval", "world","carnaval", "world", "hello","aun","achien","pipo","carnaval", "world","foo", "bar", "hello","aun","achien","pipo","carnaval", "world","a"];
$mot;
$longeurMot = 0 ;
$longeurdeux = 0  ;
 $check = 0;
 $longueur = count($tri);
 $compteur = 0;
 $pluspetit = 0;

do {
    $check = 0;
    $pluspetit = 0;
    for ($i=0; $i < $longueur; $i++) { 
        $check = 0;
        $pluspetit = 0;
        if ($i< $longueur-1) {
            if (strlen($tri[$i]) < strlen($tri[ $i +  1]) ){
                $longeurMot = strlen($tri[$i]);
            } else {
                $longeurMot = strlen($tri[$i+1]);
            }
        }
        for ($j=0; $j < $longeurMot; $j++) 
        {
            if ($i< $longueur-1) {
                if ($tri[$i][$j] > $tri[$i+1][$j]   && $pluspetit != 1 && $check != 1 )
          {                     
                        $mot = $tri[$i];
                        $tri[$i] = $tri[$i+1];
                        $tri[$i+1] = $mot;
                        $check = 1;       
           }
          else if ($tri[$i][$j] < $tri[$i+1][$j] && $check != 1) {
            $pluspetit = 1;
           }
           elseif ($tri[$i][$j] == $tri[$i+1][$j] && $j == strlen($tri[$i+1])-1){
            $mot = $tri[$i];
                        $tri[$i] = $tri[$i+1];
                        $tri[$i+1] = $mot;
                        $check = 1;
           }
            }
        }
    } 
    $compteur++;  
} while ($check != 0 || $compteur != count($tri) );
echo "<br>";
for ($i=0; $i < count($tri) ; $i++) { 
    echo " ". $tri[$i]. " ";
}
?>