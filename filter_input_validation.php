<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter_input_valiation</title>
</head>
<body>
    <div style="margin:0px 100px 0px 100px; text-align: center;">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            E-mail: <input type="text" name="email" autocomplete="off">
            marks: <input type="text" name="marks" autocomplete="off">

            <input type="submit" value="submit" name="submit">

        </form>
    </div>

    <?php
        if(isset($_REQUEST['submit'])){

            // echo filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL);
            echo filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
            $options = array(
               "options" => array(
                "min_range" => 1,
                "max_range" => 100,
               )
            );
            echo filter_input(INPUT_POST,"marks",FILTER_VALIDATE_INT,$options);
        }
    
    
    ?>
    
    
</body>
</html>