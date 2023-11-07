<?php
//demander la saisie d'un mot
//afficher si le mot commence par la lettre p

$mot=readline(" Saisir un mot : ");

if (str_starts_with(strtolower($mot),"p")) {
    echo " Le mot que vous avez saisie commence bien par la lettre P ! ";
}else{
    echo " Le mot ne commence pas par la lettre P ! ";
}

echo PHP_EOL;

if (strlen($mot)>=5){
    echo " Le mot à une longueur suppérieur ou égal à 5, il a une longueur égal à ".strlen($mot)." !";
}else{
    echo " Le mot à une longueur inférieur à 5 , il a une longueur égal à ".strlen($mot)." !";
}
// Afficher si le mot contient plus de 5 lettres