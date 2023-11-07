<?php


$papier=readline("Saisir une quantité de photocipie : ");
    if (!is_numeric($papier)) {
        echo " ERREUR ERREUR ERREUR ERREUR";
        echo PHP_EOL;
        echo " La valeur saisie n'est pas un entier !! ";
    }elseif($papier<11) {
        $prix = 0.3 * $papier;
    }elseif($papier<31) {
        $prix = (0.3 * 10) + (0.25 * ($papier - 10));
    }else{
        $prix=(0.3 * 10) + (0.25 * 20) + ( 0.2 * ($papier-30));
        if($prix>50){
          $prix*=1.1;
        }
    }
echo " Le prix pour ces $papier photocopies est de $prix € !";