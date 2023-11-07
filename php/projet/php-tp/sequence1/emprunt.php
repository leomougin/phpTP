<?php

$emprunt=readline("Donnez une somme d'argent : ");
$interet=readline("Donnez un taux d'interet ( en % ) : ");
$annee=readline("donnez un nombre d'année: ");
$mois=$annee * 12 ;
$mensualite=(($emprunt*($interet/100))/12)/(1-(1+(($interet/100)/12))**-$mois);
echo ("La mensualité à rembourser est de " .round($mensualite,2) ." euros");
echo PHP_EOL;
$coutEmprunt= round((($mensualite*$mois)-$emprunt),2);
echo ("Le coût totale de l'emprunt est de $coutEmprunt euros");
