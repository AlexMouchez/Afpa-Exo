<?php
$tri = [12,75,12,95,14,32];
$check;
$nbr;
do {
    $check = 0;
    for ($i = 0; $i < count($tri)-1 ; $i++) { 
        if ($tri[$i]< $tri[$i + 1]) {
            $nbr =$tri[$i];
            $tri[$i] = $tri[$i + 1];
            $tri[$i + 1] = $nbr;
            $check = 1;
        }
    }
    for ($i=0; $i < count($tri)-1 ; $i++) { 
        echo $tri[$i] . " ";
    }
} while ($check == 1);
?>