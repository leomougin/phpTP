<?php
$heure=readline("Saisir une heure (h:mm) :");
if (($heure>=9 && $heure < 12)||($heure>=14 && $heure<19)) {
    echo " Le magasin est ouvert !";
}else{
    echo" Le magasin est fermé !";

}