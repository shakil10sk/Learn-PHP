<?php

if(isset($_FILES['image'])){
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";

    $file_name = $_FILES['image']['name'];
    // echo $_FILES['image']['type']."<br>";
    // echo $_FILES['image']['tmp_name']."<br>";

    if(move_uploaded_file($_FILES['image']['tmp_name'],"../img/".$file_name)){
        echo "<br> success <br>";

    }else{
        echo "error";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">

        <input type="file" name="image"> 
        <button type="submit">submit</button>

    </form>
    
</body>
</html>