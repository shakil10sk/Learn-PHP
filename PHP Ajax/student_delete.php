<?php

$id =  $_POST['id'];

include "./config.php";

$sql = "DELETE FROM student where id = {$id}";

if(mysqli_query($conn,$sql)){
    echo 1;
}else{
    echo 0;
}



?>