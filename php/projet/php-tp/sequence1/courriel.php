<?php
$prenom=readline("Donnez un prénom : ");
$nom=readline("Donnez un nom : ");
$adresse="$prenom.$nom".strlen($nom)."@societe.com";
echo $adresse;

