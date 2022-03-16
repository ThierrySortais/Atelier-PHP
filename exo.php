<?php

$base = [1,2,3];
function carre(&$t){
    for($i = 0;$i<count($t);$i++){
        $t[$i]=$t[$i]*$t[$i];
    }
    return($t);
}

print_r(carre($base));