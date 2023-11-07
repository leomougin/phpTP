<?php
// Demander la saisie d'un nombre à l'utilisateur
// Afficher si le nombre saisie est positif ou négatif

$nbr=readline( "Entrez la valeur d'un nombre : ");
echo PHP_EOL;
if ($nbr>= 0) {
    echo "Le nombre que vous avez saisie est positif ! ";
}else{
    echo"Le nombre que vous avez saisoe est négatif ! ";
}