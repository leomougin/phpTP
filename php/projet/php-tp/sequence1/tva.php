<?php
$prixHT=readline("Donner un prix pour un objet HT : ");
$tauxTVA=readline("Donner un taux de TVA en pourcentage : ");
$prixTTC=$prixHT*(($tauxTVA/100)+1);

echo "Le prix TTC d'un achat de $prixHT euros avec un taux de TVA à $tauxTVA % est égal à $prixTTC";
