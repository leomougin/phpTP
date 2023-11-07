<?php

$fondRouge = "\033[41m";
$normal = "\033[0m";

$prix=readline("Saisir le prix d'un article : ");
$remise5=" La remise de 5% soit";
$euros="€";
$remise10=" La remise de 10% soit ";
$remise20=" La remise de 20% soit ";
$apresremise="Le montant de l'article après la remise est de";

if ($prix<1000){
  $prix1=  round(($prix*0.05),2);
    echo $remise5.$fondRouge.number_format($prix1, 2, ',', ' ').$normal.$euros;
}elseif($prix>1000&&$prix<5000){
    $prix1=round(($prix*0.10),2);
    echo $remise10.$fondRouge.number_format($prix1, 2, ',', ' ').$normal.$euros;
}else{
   $prix1=round(($prix*0.20),2);
    echo $remise20.$fondRouge.number_format($prix1, 2, ',', ' ').$normal.$euros;
}
echo PHP_EOL;
echo $apresremise.$fondRouge.number_format($prix1, 2, ',', ' ').$normal.$euros;