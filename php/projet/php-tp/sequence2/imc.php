<?php
$poid=readline("Saisir votre poid (kg)");
$taille=readline("Saisir votre taille (m)");
$imc=$poid/($taille**2);
if($poid<=0 && $taille<=0 ){
    echo"ERREUR ERREUR ERREUR ERREUR ERREUR";
    exit();
}elseif( $imc<16 ){
    echo" Votre IMC indique que vous êtes en MAIGREUR EXTREME !!";

}elseif($imc<=19){
    echo" Votre IMC indique que vous êtes en MAIGREUR !!";

}elseif( $imc<=25){
    echo" Votre IMC indique que vous êtes en CORPULANCE NORMAL !!";
}elseif( $imc<=30){
    echo" Votre IMC indique que vous êtes ENBONPOINT !!";

}elseif( $imc<=35){
    echo" Votre IMC indique que vous êtes en OBESITE DE CLASSE 1 !!";

}elseif( $imc<=40 ){
    echo" Votre IMC indique que vous êtes en OBESITE DE CLASSE 2 !!";

}elseif( $imc<16 ){
    echo" Votre IMC indique que vous êtes en OBESITE DE CLASSE 3 !!";
}
