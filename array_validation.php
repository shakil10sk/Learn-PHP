<?php

    $arr = array(
        "stname" => "<h1>I ÿÿÿÿþþþ am shakil ÿ þ</h1>",
        "stmarks" => "90",
        "stemail" => "shakilkhan @ gmail.com",
    );

    $filters = array(
        // "stname" => FILTER_SANITIZE_STRING,
        "stname" =>array(
            "filter" => FILTER_SANITIZE_STRING,
            // "flags" => FILTER_FLAG_STRIP_HIGH, //ascii table value up to 127
            // "flags" => FILTER_FLAG_STRIP_LOW, 
        ),
        "stmarks" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 100,
            )
            ),
        "stemail" => FILTER_SANITIZE_EMAIL,
        );

        echo "<pre>";
        print_r(filter_var_array($arr,$filters));
        echo "</pre>";


?>