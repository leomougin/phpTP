<?php
$email=readline("Saisir un e-mail :");
if (filter_var($email,  FILTER_VALIDATE_EMAIL)) {
    echo " L'email saisie est valide ";
}else{
    echo" L'email saisie est invalide";
}