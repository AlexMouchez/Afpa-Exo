<?php

//echo "miamlemiel <br>";


 $mot="espac e                     ";
 $nouveau;
 $compteur = 0;
 $compteurDeux =0;

do {
    if ($mot[strlen($mot)-1] = ' ') {
        while($compteur != strlen($mot)-1-$compteurDeux && $mot[$compteur] != " " ){
            $nouveau[$compteur] = $mot[$compteur];
            $compteur++;
        }
        
    }
    $compteurDeux++;
} while ($nouveau[count($nouveau)-1] = ' '); 



for ($i=0; $i < count($nouveau); $i++) { 
    

    echo ($nouveau[$i]);
}
echo "a";

?>