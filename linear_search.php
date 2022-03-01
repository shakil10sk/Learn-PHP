<?php

function linear_search($arr,$search){
    $n = count($arr);
    for($i = 0; $i < $n; $i++){
        if($arr[$i] == $search){
            return $i;
        }
    }
    $i = -1;
    return $i;
}

$array = [10,20,50,60,40,80,90,70,50,630,850,15];
$search = 90;
echo linear_search($array,$search);

?>