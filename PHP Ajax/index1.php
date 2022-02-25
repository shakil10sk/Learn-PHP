<?php


$conn = mysqli_connect("localhost", "root", "", "hisab365") or die("Connection Failed");

$sql = "SELECT DBL.id, DBL.bn_name AS division_name, DIBL.bn_name AS ditrict_name, UBL.bn_name AS upazila_name,
UNBL.bn_name AS union_name 
           FROM (((bd_locations AS DBL                
           INNER JOIN bd_locations AS DIBL on DIBL.parent_id = DBL.id)
           INNER JOIN bd_locations AS UBL on UBL.parent_id = DIBL.id)
           INNER JOIN bd_locations AS UNBL on UNBL.parent_id = UBL.id)
           where DBL.type = 1 and DIBL.type = 2 and UBL.type = 3 and UNBL.type = 4";

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
                    <th>division_name</th>
                    <th>ditrict_name</th>
                    <th>upazila_name</th>
                    <th>union_name</th>
                </tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $r =  $count++;
        $output .= "<tr>
            <td style='background-color:red;'>{$r}</td>
            <td style='background-color:green;'>{$row["division_name"]}</td>
            <td style='background-color:blue;'>{$row["ditrict_name"]}</td>
            <td style='background-color:orange;'>{$row["upazila_name"]}</td>
            <td style='background-color:lime;'>{$row["union_name"]}</td>
        </tr>";
    }
    $output .= "</table>";
    mysqli_close($conn);
    echo $output;
}
