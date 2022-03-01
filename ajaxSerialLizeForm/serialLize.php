<?php
include "../config.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$country = $_POST['country'];

$sql = "INSERT INTO student(first_name,last_name,age,gender,country) VALUES ('{$first_name}','{$last_name}',$age,'{$gender}','{$country}')";
// echo $sql;
if(mysqli_query($conn,$sql)){
    
    echo "$first_name $last_name Your data inserted Successfully";

}else{
    echo "faild to save data";
}
?>