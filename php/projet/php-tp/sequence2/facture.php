<?php

$fondRouge = "\033[41m";
$normal = "\033[0m";

$SMS=readline("Saisir un nombre de SMS envoyé : ");
$APPEL=readline(" Saisir un durée d'appel en minute : ");
$GIGA=readline("Saisir une quantité de Go utilisé : ");


if ($SMS<0 || $APPEL<0 || $GIGA<0 || !is_numeric($SMS)|| !is_numeric($APPEL) || !is_numeric($GIGA)){
    echo "$fondRouge ERREUR Une des valeur saisie est incompatible avec le programme !! $normal";
}else {
    $prixSMS=$SMS*0.08;
    $prixAPPEL=$APPEL*0.11;
    $prixGIGA=$GIGA*0.09;
    $total=$prixGIGA+$prixSMS+$prixAPPEL;
    echo "Le total de votre facture est de $total €";
}