<?php

$L=readline(" Donner la largeur du rectangle : ");
$H=readline(" Donner la hauteur du rectangle : ");

for($i=0;$i<=$H;$i++){
    for($y=0;$y<=$L;$y++){
        echo "*"." ";
    }
    echo PHP_EOL;
}