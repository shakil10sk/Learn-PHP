<?php

include "./config.php";

    $id = $_POST['id'];

    $sql = "SELECT * FROM student where id = {$id}";

    $query = mysqli_query($conn,$sql) or die("faild to fetch the data");

    $output = "";
    if(mysqli_num_rows($query) > 0){
       while($row = mysqli_fetch_assoc($query)){           
        $output = 
                    "
                        <tr>
                            <td>First Name</td>
                            <td>
                                <input type='text' id='edit_fname' value='{$row["first_name"]}'>
                                <input type='hidden' id='edit_id' value='{$row["id"]}'>
                            </td>
                        </tr>
                        <tr>
                            <td>last Name</td>
                            <td><input type='text' id='edit_lname' value='{$row["last_name"]}'></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type='submit' id='edit-submit' value='save'></td>
                        </tr>
                    ";
       }
       echo $output;
       mysqli_close($conn);
    }else{
        echo "No record Found";
    }
?>
