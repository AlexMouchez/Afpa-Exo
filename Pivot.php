
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
            for ($j=$i+1; $j < $placementPivot ; $j++) 
            { 
                
                if ($tab[$i] > $tab[$j] && $tab[$j] <= $tab[$placementPivot]   ) 
                {
                    echo (" <br> Pivot : -----" . $tab[$placementPivot] . " -------");
                    $rangement = $tab[$j];
			        $tab[$j] = $tab[$i];
			        $tab[$i] = $rangement;
			        
                    
            
                    for ($k=0; $k < count($tab) ; $k++) { 
                          echo (" " . $tab[$k] ." ");
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
      
        $compteur = $placementPivot-1;
        while ($compteur != -1 || $check == 1) {
            if ($tab[$compteur] <= $tab[$placementPivot] && $compteur+1 != $placementPivot) {
                $changement = $tab[$compteur+1];
				$tab[$compteur+1] = $tab[$placementPivot];
				$tab[$placementPivot] = $changement;
				$placementPivot = $compteur+1		;		//déplacement de mon pivot
				$check = 1;
				
                return $placementPivot;
            }
            $compteur--;
        }
        $compteurdeux--;
        
    }
    return $placementPivot;

}

function changement($tab,$placementPivot,$nvPivot)
{
     $changement = $tab[$placementPivot];
$tab[$placementPivot] = $tab[$nvPivot];
$tab[$nvPivot] = $changement;
echo ("<br>");
for ($i=0; $i < count($tab) ; $i++) { 
    echo (" " . $tab[$i] ." ");
    	
}
$tab = Tritableau($tab,$placementPivot);
return $tab;
}


$tab=[9999,12,75,48,9666,112,75,48,9666,1,45,78,63,12,75,48,9666,1,45,78,63,12,75,48,12,75,48,9666,1,45,78,63,12,75,48,9666,1,45,78,63,9666,1,45,78,63,12,75,48,9666,1,45,78,63,7,45,78,63,1,24,55,3,4,1,74,95,0];
$tab2 = array();
$rand;
$ancienPivot;
$check;
$placementPivot;
$nvPivot = 0;
$compteur;

$compteur= count($tab)-1;
$rand = 2;
$placementPivot = count($tab)-1;
for ($i=0; $i < count($tab) ; $i++) { 
    echo (" " . $tab[$i] ." ");
}
echo "<br>";
$tab = Changement($tab,$placementPivot,$rand );				//Placement d'un pivot random a l'extrémité droite
$tab = Tritableau($tab,$placementPivot);				//Tri par rapport a mon pivot(2 groupes(<= et >))
/////////////////////////////////////////////////////////////////
        $nvPivot = DeplacementPivot($tab, $placementPivot);	//Calcul du nouveau pivot
        echo $tab[$nvPivot];
        $tab = Changement($tab,$placementPivot,$nvPivot); //déplacement effectif du pivot ancien avec le nouveau
      
        $ancienPivot= $nvPivot;
while ($nvPivot != count($tab)) {
    for ($i=0; $i <count($tab) ; $i++) 
       { 
        if($nvPivot!=0){
            $nvPivot--;
        }
        
        $tab=tritableau($tab,$nvPivot);
        if($tab[$nvPivot]> $tab[$nvPivot+1])
        {
          $tab=Changement($tab,$nvPivot+1,$nvPivot );	
        }
        echo " ". $tab[$nvPivot]. "  ";
        for ($j=0; $j < count($tab) ; $j++) 
        { 
            echo (" " . $tab[$j] ." ");
       }
       }
       $ancienPivot++;
       $nvPivot=$ancienPivot;
}
echo ("<br>a<br>");
for ($j=0; $j < count($tab) ; $j++) 
        { 
            echo (" " . $tab[$j] ." ");
       }
?>