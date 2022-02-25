<?php

    $file_name   = "./docs/readme.txt";

    // if(is_file($file_name)){
    // if(is_dir("docs")){
    // if(is_writable($file_name)){
    if(is_executable($file_name)){
        echo "this is a executable";
    }else{
        echo "this is not a executable";

    }

echo "<br>";
    // echo fileperms($file_name);
    // echo decoct(fileperms($file_name)); //convert to octal
    echo substr(decoct(fileperms($file_name)),2); //remove first 2 digits
?>