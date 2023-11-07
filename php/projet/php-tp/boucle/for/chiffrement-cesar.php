<?php
$phr=readline("Donner une chaine de caractère : ");
$dec=readline("Donner un décalage : ");
$newPhrase="";

for($nb=0;$nb<=strlen($phr);$nb++){
    $ascii="";
    $lettre=substr($phr,$nb,1);
    if(ctype_alpha($lettre)){
        $dec=intval($dec);
        $ascii=ord($lettre)+$dec;
        if($ascii!=ctype_alpha(chr($ascii))){
            $ascii-=26;
        }
        $lettre=chr($ascii);
        $newPhrase.= $lettre;
    }elseif($lettre!=(ctype_alpha($lettre))){
        $newPhrase.=$lettre;
    }
}
echo $newPhrase;