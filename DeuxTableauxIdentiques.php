<?php


$tab = "hello";
$tableau = "hello";
$check = 0;




if(strlen($tab) != strlen($tableau))
{
    echo "Les tableaux sont différents";
}
else{
for ($i=0; $i < strlen($tab) - 1 ; $i++) { 
    if ($tab[$i] != $tableau[$i]) {
        $check = 1;
    }
}
}

if ($check == 1) {
    echo "Les tableaux sont différents";
}
else {
    echo "Les tableaux sont identiques";
}


?>