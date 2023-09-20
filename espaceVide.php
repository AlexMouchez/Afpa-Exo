<?php
 $mot=" ";
 $nouveau;
 $compteur = 0;
 $compteurDeux =0;
$check = 0;

if ( $mot[strlen($mot)-1 ]== " ")    
    for ($i=strlen($mot)-1; $i >0 ; $i--) 
    $question = $mot[$i] == " " && $check == 0 ?$compteur++ : $check = 1;
if(strlen($mot)-$compteur== 1 && $mot[strlen($mot)-$compteur-1 ]== " ")
echo "La chaine n'est composé que d'un espace";
for ($i=0; $i < strlen($mot)-$compteur; $i++)
echo  $nouveau[$i] = $mot[$i];
?>