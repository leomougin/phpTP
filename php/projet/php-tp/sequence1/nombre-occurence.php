<?php
$phrase=readline("Ecrivez une phrase : ");
$mot=readline("Choissez un mot dans cette phrase: ' $phrase ' !! ");
$taillePhrase=strlen($phrase);

echo "Il y a eu ".substr_count($phrase,$mot,0,$taillePhrase)." fois le mot $mot dans cette phrase.";
