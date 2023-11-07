<?php

$fondRouge = "\033[41m";
$texteRouge = "\033[31m";
$fondVert = "\033[42m";
$texteVert = "\033[32m";
$normal = "\033[0m";

$km=readline("Saisir un nombre de kilomèttre : ");
$duree=readline(" Saisir un durée ( dans ce format, h:mm) ");
$heure=substr($duree,0,1);
$minute=substr($duree,2,2);
if (substr($duree, 1, 1)!= ":" OR $minute>59) {
    echo $texteRouge."Votre saisie pour la durée est invalide, veuillez saisir une valeur correct".$normal;
} else {
    $duree = intval($heure) + (intval($minute) / 60);
    $kmh = intval($km) / $duree;
    echo " La vitesse moyenne du trajet est de " . round($kmh, 0, PHP_ROUND_HALF_UP) . " km/h ! ";
    echo PHP_EOL;
    if ($kmh > 90) {
        echo $fondRouge."Vous êtes au dessus des 90 km/h !".$normal;

    } else {
        echo $fondVert."Vous êtes en dessous des 90 km/h !".$normal;
    }
}