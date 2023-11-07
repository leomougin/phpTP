<?php
// Demander la saisie d'un nombre
// afficher si le nombre est pair ou impair

$nbr=readline(" Saisir un nombre :");
if ( $nbr%2==0 ) {
    echo " Le nombre choisie est pair ! ";
}else{
    echo "Le nombre choisie est impair !";
}