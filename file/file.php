<?php
$file = "./docs/readme.txt";
$br = "<br>";
// echo readfile($file);
// echo $br;
// echo filesize($file);
// echo $br;
$path =  realpath($file);
echo $path;
echo $br;
echo dirname($path,8)
// echo "</pre>";
// print_r(pathinfo($file));
// print_r(pathinfo($path));
// print_r(pathinfo($path,PATHINFO_DIRNAME));
// print_r(pathinfo($path,PATHINFO_BASENAME));
// print_r(pathinfo($path,PATHINFO_FILENAME));
// print_r(pathinfo($path,PATHINFO_EXTENSION));
// echo "</pre>";
// echo basename($path);
// echo $br;
// echo basename($path,".txt"); //remove extension
// if(file_exists($file)){
    // echo readfile($file); //read file
    // echo $br;
    // echo $br . filetype($file);
    // copy($file,"newfile.txt"); //copy file
    // rename("newfile.txt","oldfile.txt"); //rename file
    // unlink("oldfile.txt"); //delete file
// }else{
//     echo "file not found";
// }


//crate directory and remove directory
// $newfolder = "newtext";
// if(file_exists($newfolder)){
//     echo "file is existes";
//     rmdir($newfolder);
// }else{
//     echo "file not Exists";
//     mkdir($newfolder);
//     echo $br . filetype($newfolder);
// }

?>