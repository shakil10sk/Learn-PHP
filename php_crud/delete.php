<?php

$sid = $_GET['id'];



$conn = mysqli_connect("localhost", "root", "", "phpcrud") or die("ERROR CONNECTION");

$sql = "DELETE FROM student where sid = '{$sid}' ";

$query = mysqli_query($conn, $sql) or die("Sql error");

header("Location: http://localhost/php_crud/home.php");

mysqli_close($conn);