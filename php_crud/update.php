<?php

$name = $_POST['sname'];
$address = $_POST['saddress'];
$class_id = $_POST['sclass_id'];
$mobile = $_POST['sphone'];
$sid = $_POST['sid'];


echo $name, $address, $class_id, $mobile;

$conn = mysqli_connect("localhost", "root", "", "phpcrud") or die("ERROR CONNECTION");

$sql = "UPDATE student SET sname ='{$name}', saddress = '{$address}',sclass ='{$class_id}', sphone = '{$mobile}' where sid = '{$sid}' ";

$query = mysqli_query($conn, $sql) or die("Sql error");

header("Location: http://localhost/php_crud/home.php");

mysqli_close($conn);
