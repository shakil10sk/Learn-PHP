<?php include "./include/header.php";

$id = $_GET['id'];

$conn = mysqli_connect("localhost", "root", "", "phpcrud") or die("Database not Connected");

$sql = "SELECT * FROM student where sid = {$id}";

$result = mysqli_query($conn, $sql) or die("Something is Wrong in your Sql Query ");


if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
?>



        <div class="row">
            <div class="col-md-5 mx-auto">
                <form action="update.php" method="post">
                    <div class="form-group">
                        <label for="sname">Student Name</label>
                        <input type="text" class="form-control" name="sname" id="sname" value="<?php echo $row['sname'] ?>" aria-describedby="helpId" placeholder="your Name">
                        <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
                    </div>
                    <div class="form-group">
                        <label for="saddress">Student Address</label>
                        <textarea name="saddress" id="saddress" class="form-control" cols="30" rows="5">
                        <?php echo $row['saddress'] ?>
                        </textarea>
                        <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
                    </div>

                    <div class="form-group">
                        <label for="sclass_id"></label>
                        <select class="form-control" name="sclass_id" id="sclass_id">
                            <?php

                            $sql1 = "SELECT * FROM studentclass";

                            $query1 = mysqli_query($conn, $sql1) or die("sql Error!!!");

                            while ($result1 = mysqli_fetch_assoc($query1)) {

                                if ($row['sclass'] == $result1['cid']) {
                                    $select = "selected";
                                } else {
                                    $select = "";
                                }
                            ?>


                                <option <?php echo $select ?> value="<?php echo $result1['cid'] ?>"><?php echo $result1['cname'] ?></option>

                            <?php }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sphone">Student Phone</label>
                        <input type="text" class="form-control" name="sphone" id="sphone" aria-describedby="helpId" placeholder="your Phone" value="<?php echo $row['sphone'] ?>">
                        <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
                    </div>
                    <input type="hidden" name="sid" value="<?php echo $row['sid']  ?>">
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>







<?php

    }
}
mysqli_close($conn);

include "./include/footer.php";
?>