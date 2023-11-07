<?php
$n=readline("Donner n :");
for ($i=0;$i<20;$i++){
    echo $n." ";
    if($n%2==0){
        $n/=2;
    }else{
        $n=($n*3)+1;
    }
}