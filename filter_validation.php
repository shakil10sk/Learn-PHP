<?php

// $value = 26; //int
// $value = "25.120"; //flaot 25.120/ 25

// var_dump(filter_var($value,FILTER_VALIDATE_INT,array("options" => array("min_range" => 20, "max_range" => 30))));

$options = array(
    "options" => 
        array(
            "min_range" => 20,
            "max_range" => 30
        )
    );

// var_dump(filter_var($value,FILTER_VALIDATE_FLOAT,$options));
// $value = "shakil@gmail.com";
// var_dump(filter_var($value,FILTER_VALIDATE_EMAIL));
// $value = "http://localhost/php_prectice/filter_validation.php";
// var_dump(filter_var($value,FILTER_VALIDATE_URL));
// $value = "http://localhost";
// var_dump(filter_var($value,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED)); //false because there is no path
// $value = "http://localhost/php_prectice/filter_validation.php?id=10";
// var_dump(filter_var($value,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)); //for show the query or id in url
// $value = "192.108.0.255";
// var_dump(filter_var($value,FILTER_VALIDATE_IP)); //for show the query or id in url
// $value = "FA-F9-DD-B2-5E-1D";
// var_dump(filter_var($value,FILTER_VALIDATE_MAC)); //for show the query or id in url

?>