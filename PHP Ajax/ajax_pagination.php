<?php

include "./config.php";

$limit_per_page = 5;

$page = "";
if(isset($_POST['page_no'])){
    $page = $_POST['page_no'];
}else{
    $page = 1;
}

$offset = ($page - 1) * $limit_per_page;    

$sql = "SELECT * FROM student LIMIT {$offset},{$limit_per_page}";

$query = mysqli_query($conn,$sql) or die("Query Unseccssfull");
$output = "";
$output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
                <tr>
                    <th align="center" width="100px">ID</th>
                    <th style="text-align:center">Name</th>
                </tr>
               ';
if(mysqli_num_rows($query)){

    while($row = mysqli_fetch_assoc($query)){
        $output .= " <tr>
            <td align='center'>{$row["id"]}</td>
            <td align='center'>{$row["first_name"]} {$row["last_name"]}</td>
            </tr>";
    }
        $output .= "</table>";

        $sql_total = "SELECT * FROM student";
        $records = mysqli_query($conn,$sql_total) or die("Total Records Query failed");
        $total_records = mysqli_num_rows($records);
        $total_pages = ceil($total_records/$limit_per_page);
        
        $output .= '<div id="pagination" style="margin: 5px 300px">';

        for ($i=1; $i <= $total_pages; $i++) { 
            $output .= "<a  id='{$i}' class='btn btn-info active' href=''>{$i}</a>";
        }
        $output .= "</div>";
    echo $output;
}else{
     echo "No records Found";
}
    


?>