<?php
$prenom=readline("Donnez votre prenom : ");
$nom=readline("Donnez votre nom : ");
$initialPrenom=strtoupper(substr($prenom, 0,1));
$initialNom=strtoupper(substr($nom, 0,1));
echo $initialPrenom,$initialNom;





