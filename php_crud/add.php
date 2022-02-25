<?php include "./include/header.php";



?>



<div class="row">
    <div class="col-md-5 mx-auto">
        <form action="dataStore.php" method="post">
            <div class="form-group">
                <label for="sname">Student Name</label>
                <input type="text" class="form-control" name="sname" id="sname" aria-describedby="helpId" placeholder="your Name">
                <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
            </div>
            <div class="form-group">
                <label for="saddress">Student Address</label>
                <textarea name="saddress" id="saddress" class="form-control" cols="30" rows="5"></textarea>
                <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
            </div>

            <div class="form-group">
                <label for="sclass_id"></label>
                <select class="form-control" name="sclass_id" id="sclass_id">
                    <option>Select Class</option>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "phpcrud") or die("Connection Failed!!!");

                    $sql = "SELECT * FROM studentclass";

                    $query = mysqli_query($conn, $sql) or die("sql Error!!!");

                    while ($result = mysqli_fetch_assoc($query)) { ?>

                        <option value="<?php echo $result['cid'] ?>"><?php echo $result['cname'] ?></option>

                    <?php }
                    mysqli_close($conn);
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="sphone">Student Phone</label>
                <input type="text" class="form-control" name="sphone" id="sphone" aria-describedby="helpId" placeholder="your Phone">
                <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</div>







<?php include "./include/footer.php"; ?>