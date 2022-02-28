<?php
include "../config.php";

$limit = 5;
if(isset($_POST['page_no'])){
    $page = $_POST['page_no'];
}else{
    $page = 0; 

}

$sql = "SELECT * FROM student LIMIT {$page},{$limit}";

$query = mysqli_query($conn,$sql) or die("query Unseccssfull");

if(mysqli_num_rows($query) > 0){
    $output = "";
    $output = " <tbody>";

    while($row = mysqli_fetch_assoc($query)){
        $output .= 
                "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row["first_name"]}</td>
                        <td>{$row["last_name"]}</td>
                    </tr>
                ";
    }
    
    $last_id =  $page + 5;

    $output .= "</tbody>
            <tbody id='pagination'>
                <tr>
                    <td colspan='3'>
                        <button id='ajaxbtn' class='btn btn-md btn-info' data-id='{$last_id}'>Load More</button>
                    </td>
                </tr>
                </tbody>";
    echo $output;

}else{
    echo "";
}
mysqli_close($conn);


?>