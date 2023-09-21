
<?php
function tritableau($tab, $placementPivot)
{
$rangement = 0;
$compteur = $placementPivot; 

while ($compteur != 0 ) 
{
    for ($i=0; $i <$placementPivot ; $i++) 
    {  
        if ($tab[$i] > $tab[$placementPivot] ) 
        {
            for ($j=$i + 1; $j < $placementPivot ; $j++) 
            {  
                if ($tab[$i] > $tab[$j] && $tab[$j] <= $tab[$placementPivot]) 
                {
                    echo (" <br> Pivot : -----" . $tab[$placementPivot] . " -------");
                    $rangement = $tab[$j];
			        $tab[$j] = $tab[$i];
			        $tab[$i] = $rangement;
                    for ($k = 0; $k < count($tab) ; $k++) { 
                          echo (" " . $tab[$k] . " ");
                    }
                }
            }
        }
    }
    $compteur--;
}
return $tab;
}

function DeplacementPivot( $tab,  $placementPivot)
{
    $check = 0;
	$compteurdeux = $placementPivot;
	while ($compteurdeux != -1) {
        $compteur = $placementPivot - 1;
        while ($compteur != -1 || $check == 1) {
            if ($tab[$compteur] <= $tab[$placementPivot] && ($compteur + 1) != $placementPivot) {
                $changement = $tab[$compteur + 1];
				$tab[$compteur +1 ] = $tab[$placementPivot];
				$tab[$placementPivot] = $changement;
				$placementPivot = $compteur + 1		;		//déplacement de mon pivot si besoin
				$check = 1;
                return $placementPivot;
            }
            $compteur--;
        }
        $compteurdeux--; 
    }
    return $placementPivot;                                  //Sinon, on revoit le pivot
}

function changement($tab,$placementPivot,$nvPivot)
{
     $changement = $tab[$placementPivot];
$tab[$placementPivot] = $tab[$nvPivot];
$tab[$nvPivot] = $changement;
echo ("<br>");

return $tab;
}

//définition variable
$tab=[0,999,9999,12,75,48,9666,112,75,48,9666,1,45,0];            
$tab2 = array();
$rand;                                             //position "arbitraire de mon pivot
$ancienPivot;
$check;
$placementPivot;
$nvPivot = 0;
$compteur;

$compteur= count($tab) - 1;
$rand = 2;
$placementPivot = count($tab) - 1;
for ($i = 0; $i < count($tab) ; $i++) { 
    echo (" " . $tab[$i] . " ");
}
echo "<br>";
$tab = Changement($tab,$placementPivot,$rand );				//Placement d'un pivot random a l'extrémité droite
$tab = Tritableau($tab,$placementPivot);				//Tri par rapport a mon pivot(2 groupes(<= et >))

        $nvPivot = DeplacementPivot($tab, $placementPivot);	//Calcul du nouveau pivot
        $tab = Changement($tab,$placementPivot,$nvPivot); //déplacement effectif du pivot ancien avec le nouveau
        $ancienPivot= $nvPivot; 
        echo $tab[$ancienPivot];                           //On stock la position de mon nouveau pivot
while ($nvPivot != count($tab)) {                              // on balaye tout le tableau de mon nouveau pivot vers la fin du tableau
    for ($i = 0; $i < $nvPivot ; $i++)                          // on balaye tout le tableau de la gauche à mon pivot
       { 
        if($nvPivot != 0){
            $nvPivot--;
        } 
        $tab = tritableau($tab,$nvPivot);                                           
        if($tab[$nvPivot] > $tab[$nvPivot + 1])
        {
          $tab = Changement($tab,$nvPivot + 1,$nvPivot );	
        }
        echo " <br>Pivot ------" . $tab[$nvPivot] . "  ------ ";
        for ($j = 0; $j < count($tab) ; $j++) 
         { 
            echo (" " . $tab[$j] . " ");
         }
       }
       $ancienPivot++;                                                 //On remonte dans le pivot dans mon tableau pour refaire l'opération a chaque indice du tableau
       $nvPivot = $ancienPivot;
}
echo ("<br> Fin : ");
for ($j = 0; $j < count($tab) ; $j++) 
        { 
            echo (" " . $tab[$j] . " ");
       }
?>