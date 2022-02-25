<?php
class solution{
    function callPoints($ops){
        return "done";
    }
}

$ops = explode(' ',readline());

$solution = new solution();
$output = $solution->callPoints($ops);

echo $output;