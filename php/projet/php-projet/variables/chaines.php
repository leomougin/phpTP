<?php

$prenom = "jean";
//Afficher $prenom en majuscules
echo strtoupper ( $prenom );
echo PHP_EOL;
echo $prenom;
echo PHP_EOL;
$prenomMaj= strtoupper($prenom); // strtoupper => Fonction
//Afficher la taille de la chaine prenom
echo strlen($prenom);
echo PHP_EOL;
echo "Le prénom de ".strtoupper ( $prenom )." fait ". strlen($prenom). " caractères de long.";
// Afficher la première lettre du prenom
echo PHP_EOL;
echo strtoupper(substr ($prenom, 0,1));
echo PHP_EOL;

