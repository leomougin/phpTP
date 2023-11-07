<?php
echo "Aujourd'hui nous somme le  " . date("d/m/Y"). ".";
echo PHP_EOL;
echo "Il est " . date("H\hi");
echo PHP_EOL;
if ( date("H.i")>="13.00") {
    echo " Je vous souhaites une bonne après-midi ! ";
} else {
    echo " Je vous souhaites une bonne matinée !  ";
}


