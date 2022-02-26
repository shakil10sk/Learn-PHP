<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$stuId = $_POST["stuId"];

// echo $fname,$lname,$stuId;


include "./config.php";


// echo $first_name,$last_name;
$sql = "UPDATE student SET first_name  = '{$fname}',last_name = '{$lname}' where id = {$stuId}";
// echo $sql;
$query = mysqli_query($conn,$sql) or die("Query faild to load");

if($query){
    echo 1;
}else{
    echo 0;
}



?>