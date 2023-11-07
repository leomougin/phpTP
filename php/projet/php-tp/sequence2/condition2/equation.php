<?php

$a=readline("Saisir une valeur de a :");
$b=readline("Saisir une valeur de b :");
$c=readline("Saisir une valeur de c :");

$delta=( $b ** 2 )-( 4 * $a * $c );
if ($delta>0) {
    echo " L'équation admet deux possibilités car le delta $delta est positif .";
    $x1 = ((-$b) + sqrt($delta)) / (2 * $a);
    $x2 = ((-$b) - sqrt($delta)) / (2 * $a);
    echo PHP_EOL;
    echo " Les solutions de l'équation sont x1=$x1 et x2=$x2 )";
}elseif($delta==0) {
    echo " L'équation admet une possibilité car le delta $delta est nul .";
    $x = (-($b) / (2 * $a));
    echo PHP_EOL;
        echo " La solution de l'équation est x=$x  )";
}else{
    echo"L'équation n'admet pas de solution car le $delta est négatif $delta";

}
