<?php

echo "miamlemiel";


 $mot="espace ";
 $nouveau;
 $compteur = 0;
 $compteurDeux;

do {
    if ($mot[strlen($mot)-1] = ' ') {
        while($compteur <> strlen($mot)-1-$compteurDeux){
            $nouveau[$compteur] = $mot[$compteur];
            $compteur++;
        }
        $compteurDeux++;
    }
} while ($nouveau[count($nouveau)-1] = ''); 
?>