<?php
// Déclarer et initialiser une variable contenant le prénom d'une personne

$prenom = "Louis";
echo $prenom;
$prenomPersonne = "Louis"; // Notation camelCase
echo PHP_EOL;
// Modification de la variable prenom
$prenom="Pierre";
echo $prenom;
echo PHP_EOL;
// Déclarer et initialiser une variables contenant le resultat de 5 + 8
$resultat= 5 + 8;
echo $resultat;
echo PHP_EOL;
// Concaténation de chaine : utilisation de l'opérateur .
echo "Mon prénom est ".$prenom;
$prenom="Jean";
echo PHP_EOL;
//Concaténation de chaine : utilisation de l'interpolation
echo "Mon prénom est $prenom";
echo PHP_EOL;
echo 'Mon prénom est $prenom'; // L'interpolation n'est pas possible quand l'on veut afficher une phrase entre simple cote
echo PHP_EOL;
$presentation= "Je m'appelle". $prenom; // ou $presentation= "Je m'appelle $prenom";
echo $presentation;
echo PHP_EOL;
echo " Bonjour je m'appelle Léo";
echo PHP_EOL;
// Ctrl + D pour multiplier une ligne de code