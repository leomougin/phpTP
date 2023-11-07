<?php

echo "Aujourd'hui nous somme le  " . date("d/m/Y"). ".";
echo PHP_EOL;

if (date( "D")== "Sat" ){
    echo" Je vous souhaites un bon week-end .";
}elseif(date( "D")== "Sun"){
    echo"Je vous souhaites un bon Dimanche .";
} else {
    echo"Je vous souhaites une bonne Semaine .";
}