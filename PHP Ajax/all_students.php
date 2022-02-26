<?php

include "./config.php";

$sql = "SELECT * 
           FROM student";

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
                </tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $r =  $count++;
        $output .= "<tr>
            <td style='background-color:red;'>{$r}</td>
            <td style='background-color:green;'>{$row["first_name"]}</td>
            <td style='background-color:blue;'>{$row["last_name"]}</td>
            <td style='background-color:orange;'>{$row["mobile"]}</td>
        </tr>";
    }
    $output .= "</table>";
    mysqli_close($conn);
    echo $output;
}
