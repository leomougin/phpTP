<?php

$nbr1=readline("Saisir un nombre entier : ");
$nbr2=readline ( "Saisir un nombre entier : ");
if ( $nbr2 ==0){
    echo" Le nombre que vous avez saisie est invalible, veuillez choisir un nombre suppérieur à 0 !";
    $nbr2=readline ( "Saisir un nombre entier : ");
}
$resultat=round($nbr1/$nbr2,2);
echo" Le résultat de la division de $nbr1 par $nbr2 est $resultat ";