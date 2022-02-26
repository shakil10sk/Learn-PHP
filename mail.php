<?php

    $to = "shakil550sh@gmail.com,demo@gmail.com";
    $subject = "Test mail";
    $message = "Asslamuyalikum . . . this is a testing mail from php.";
    // $from = "shakilh039@gmail.com";
    // $headers = "From : $from";
    $head = [
        "MIME-Version: 1.0",
        "Content-type: text/plain; charset=utf-8",
        "From: shakilh039@gmail.com",
        "Cc: shakil10sk10@gmail.com"
    ];
$headers = implode("\r\n", $head); // convert a arry to string

// echo $headers;
    mail($to, $subject, $message,$headers);
    if(mail($to, $subject, $message,$headers)){
        echo "Mail Send Successfullt";
    }else{
        echo "Mail Faild To send";
    }
?>