<?php
    $search =  $_POST['search'];


include "./config.php";

$sql = "SELECT * 
           FROM student 
           where first_name like '%{$search}%' or last_name like '%{$search}%'";
           
$result = mysqli_query($conn, $sql) or die("sql wrong");

// echo "<pre>";
// print_r($result);
// echo "</pre>";

$output = "";
$count = 1;
if (mysqli_num_rows($result) > 0) {

    $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
                <tr>
                    <th>SI</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Mobile</th>
                    <th>Action</th>
                </tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $r =  $count++;
        $output .= "<tr>
            <td style='background-color:red;'>{$r}</td>
            <td style='background-color:green;'>{$row["first_name"]}</td>
            <td style='background-color:blue;'>{$row["last_name"]}</td>
            <td style='background-color:orange;'>{$row["mobile"]}</td>
            <td style='background-color:yeallow;'>
                <button id='edit_student' data-id='{$row["id"]}' class='btn btn-warning btn-md'>Edit</button>
                |
                <button id='delete_student' data-id='{$row["id"]}' class='btn btn-danger btn-md'>Delete</button>
            </td>
                </tr>";
                // <a href='delete.php?id={$row["id"]}'>Delete</a>
    }
    $output .= "</table>";
    mysqli_close($conn);
    echo $output;
}

?>