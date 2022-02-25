<?php

    // echo "<pre>"; 
    // print_r(glob("*"));
    // echo "</pre>"; 

    // echo "<pre>"; 
    // print_r(glob("docs/*"));// return all file in docs folder
    // echo "</pre>"; 

//     echo "<pre>"; 
//     print_r(glob("docs/*.txt"));// return all file with this extension
//     echo "</pre>"; 

    // echo "<pre>"; 
    // print_r(glob("docs/r*.txt"));// return all file whice name strt with r
    // echo "</pre>"; 

    // echo "<pre>"; 
    // print_r(glob("docs/*ead*.txt"));// return all file whice name have "ead" in middle
    // echo "</pre>"; 

    // echo "<pre>"; 
    // print_r(glob("docs/[nr]*.txt"));// return all file which start with n/r
    // echo "</pre>"; 

    // echo "<pre>"; 
    // print_r(glob("*[if]*"));// return all file which name in with n/r
    // echo "</pre>"; 


    // $ary = glob("*");

    // foreach($ary as $filename){
    //     echo "{$filename} size : " . filesize($filename) . "<br>";
    // }

    // foreach($ary as $filename){
    //     echo "{$filename} RealPath  : " . realpath($filename) . "<br>";
    // }

    // echo "<pre>"; 
    // print_r(glob("*",GLOB_MARK));// return all file which name in with n/r
    // echo "</pre>"; 

    // echo "<pre>"; 
    // print_r(glob("K*",GLOB_NOCHECK));// return all file which STRT WITH K BUT NOT EXISTS THERE only return the string
    // echo "</pre>";

    // echo "<pre>"; 
    // print_r(glob("*",GLOB_ONLYDIR));// return all file which STRT WITH K BUT NOT EXISTS THERE only return the string
    // echo "</pre>"; 

    // echo "<pre>"; 
    // print_r(glob("{*.txt,*.php}",GLOB_BRACE));// return all file which extension is .txt or .php
    // echo "</pre>"; 

    // echo getcwd();
    // echo "<br>";
    // chdir("docs");
    // echo getcwd();

    $dir = ".";

    // echo "<pre>";
    // print_r(scandir($dir));
    // echo "<pre>";

        if(is_dir($dir)){
            if($d = opendir($dir)){
                while($file = readdir($d)){
                    echo "file name : " . $file . "<br>";
                }
            }
        }


?>