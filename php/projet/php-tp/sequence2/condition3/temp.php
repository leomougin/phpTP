<?php

$texteRouge = "\033[31m";
$fondRouge = "\033[41m";
$normal = "\033[0m";

$echelle=readline("Donner une échelle de température ( C ou F) : ");
$tempC=readline("Donner une température en degrée celcius : ");
$tempF=readline("Donner une température en degrée Fahrenheit : ");



if( !is_numeric($tempC) || !is_numeric($tempF) || ( $echelle!='C' && $echelle!='F')) {
    echo "$texteRouge ERREUR ERREUR ERREUR ERREUR ERREUR $normal";
    echo PHP_EOL;
    echo "$fondRouge Veuillez saisir une valeur numérique comme valeur pour la température !! $normal";
    exit();
}elseif ($echelle=="C") {
    $tempF=$tempC*1.8+32;
    echo "$tempC °C est égale à $tempF en degrée Fahrenheit ";
} elseif($echelle=="F") {
    $tempC=($tempF-32)*(5/9);
    echo "$tempF °C est égale à $tempC en degrée Celcius ";
}