<?php

include "./config.php";


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

// echo $first_name,$last_name;
$sql = "INSERT INTO student (first_name,last_name) VALUES ('$first_name','$last_name')";
$query = mysqli_query($conn,$sql) or die("Query faild to load");

if($query){
    echo 1;
}else{
    echo 0;
}



?>