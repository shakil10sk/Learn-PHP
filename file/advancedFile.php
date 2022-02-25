<?php

    $file_name = "./docs/readme.txt";
    // $xl_file = "./docs/asb.xlsx";
    // $file = fopen($file_name,"r");
    // $file_xl = fopen($xl_file,"r");

    // echo fread($file,100);  
    // echo "</br>";
    // echo "</br>";
    // echo "</br>";
    // echo "</br>";
    // // echo fread($file,filesize("./docs/readme.txt"));  
    // echo fgets($file)."</br>";
    // echo ftell($file)."</br>"; // change line by curcor
    // echo fgets($file)."</br>";
    // echo ftell($file)."</br>";
    // echo fgets($file)."</br>";
    // echo ftell($file)."</br>";

    // fseek($file,12);
    // echo "</br>" . fgets($file)."</br>"; // it takes the curcor to the given index in file sentence
    // echo fpassthru($file); //last text show
    // echo "<br>";
    // rewind($file); // go to first sentence of text;
    // echo fgets($file);
    // echo fpassthru($file); //last text show

    // while(! feof($file)){
    //     echo "<br>" . fgets($file) . "<br>";
    // }
    // echo fgetc($file); // get one carecter then go to next
    // echo fgetc($file); // get one carecter then go to next

    $new_file= "./docs/new.txt";
    $file = fopen($new_file,"a+");
    fwrite($file,"i am shakil");
    ftruncate($file,5); //remove after given length

    echo "<pre>";
    print_r(file($new_file)); // read file as a array of ech line
    echo "</pre>";


fclose($file);

?>