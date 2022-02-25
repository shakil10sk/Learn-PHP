<?php

    // echo file_put_contents("./docs/new.txt","my first word.");
    // echo file_put_contents("./docs/new.txt","my secound word.",FILE_APPEND);
    // echo file_put_contents("./docs/new.txt","\nmy third word.",FILE_APPEND | LOCK_EX);
    echo file_get_contents("./docs/new.txt",FALSE,null,0,50);

?>