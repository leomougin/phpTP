<?php
$i=readline(" Donner un nombre : ");
for($nb=0;$nb<=$i;$nb++){
    if($nb%2==0){
        echo $nb." PAIR | ";
    }
}