<?php
$sexe=readline(" De quelle sexe êtes-vous ( M ou F ) :");
$age=readline("Quelle âge avez-vous ? ");
if(($sexe='M') &&( $age>22 )) {
    echo " Vous allez payer la surprime ! ";
}elseif(($sexe='F') && ($age>22 && $age<30)){
    echo " Vous allez payer la surprime !";
}else{
    echo " Vous n'avez pas besoin de payer la surprime !";
}