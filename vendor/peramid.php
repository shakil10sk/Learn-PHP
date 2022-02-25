<?php


$num = 10;
for ($q = 1; $q <= $num; $q++) {
    // document.write($q);
    for ($s = 0; $s <= ($num - $q); $s++) {
        echo "*";
    }
    for ($k = 1; $k <= ((2 * $q) - 1); $k++) {
        echo ($k);
    }
    // for ($s = 1; $s <= (num - q); $s++) {
    //    echo("*");
    // }
    echo ("<br>");
}
