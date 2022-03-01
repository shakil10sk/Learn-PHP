<?php

$A = [10,12,13,14,15,16,17,18,19,20,23,25,26,27,28,29,30,32,35,39,40,41,45,46,47,49,50];
$n = count($A);
$x = 13;
echo bineary_search($A,$n,$x);

function bineary_search($A,$n,$x){
    $left = 0;
    $right = $n - 1;
    $mid = 0;

    while ($left <= $right) {
        
        $mid = ($left + $right) / 2;
        
        if($A[$mid] == $x){
            return (int)$mid;
        }

        if($A[$mid] < $x){
            $left = $mid + 1;
        }else{
            $right = $mid - 1;
        }

    }
    return -1;
}
?>