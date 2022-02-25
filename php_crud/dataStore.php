<?php

$name = $_POST['sname'];
$address = $_POST['saddress'];
$class_id = $_POST['sclass_id'];
$mobile = $_POST['sphone'];


echo $name, $address, $class_id, $mobile;

$conn = mysqli_connect("localhost", "root", "", "phpcrud") or die("ERROR CONNECTION");

$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES('{$name}','{$address}','{$class_id}','{$mobile}')";

$query = mysqli_query($conn, $sql) or die("Sql error");

header("Location: http://localhost/php_crud/home.php");

mysqli_close($conn);
