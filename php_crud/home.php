<?php

include "include/header.php";

$conn = mysqli_connect("localhost", "root", "", "phpcrud") or die("Database not Connected");

$sql = "SELECT * FROM student JOIN studentclass ON student.sclass = studentclass.cid";

$result = mysqli_query($conn, $sql) or die("Something is Wrong in your Sql Query ");


if (mysqli_num_rows($result) > 0) {
?>

    <div class="row p-5">
        <div class="col-md-10 mx-auto">
            <h3 class="text-center bg-secondary">Data List</h3>
            <div class="p-3">
                <table class="table table-striped table-bordered table-hover table-secondary table-response">
                    <thead class="thead">
                        <tr>
                            <th scope="col">SI</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Class Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td scope="col"> <?php echo $row['sid'] ?> </td>
                                <td scope="col"> <?php echo $row['sname'] ?> </td>
                                <td scope="col"> <?php echo $row['saddress'] ?> </td>
                                <td scope="col"> <?php echo $row['sphone'] ?> </td>
                                <td scope="col"> <?php echo $row['cname'] ?> </td>
                                <td scope="col"><a href="edit.php?id=<?php echo $row['sid'] ?>">Edit</a> |
                                    <a href="delete.php?id=<?php echo $row['sid'] ?>">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>


            </div>
        </div>
    </div>

<?php
} else {
    echo "Something is Wrong";
}
mysqli_close($conn);

include "./include/footer.php";
?>