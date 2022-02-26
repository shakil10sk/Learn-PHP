<?php

// $string = "PHP is the web scripting php language of + 522 825 choice";
// $string = "<h1>PHP is the web scripting php language of + 522 825 choice</h1>";
// $modifires = "i";
// $pattern =  "/php/{$modifires}";
// $pattern =  "/php|web|the/{$modifires}"; //we can serche multiple terms by using |(pi)
// $pattern =  "/w|o|t/{$modifires}"; //we can serche multiple carecter in a astring
// $pattern =  "/[wot]/{$modifires}"; //we can serche multiple carecter in a squeare breacs.it serch sepearetly carecter
// $pattern =  "/[^wot]/{$modifires}"; //if we use ^(caret operator) এর পর এর বর্ণ বাদ দিয়ে সবাইকে খুজবে
// $pattern =  "/[a-d]/{$modifires}"; //here it serch between a to d
// $pattern =  "/[A-J]/"; //here it serch between A to J
// $pattern =  "/[a-jA-J]/"; //here it serch between a to j and  A to J
// $pattern =  "/[0-9]/"; //here it serch between 0 to 9
// $pattern =  "/[^0-9]/"; //here it serch without between 0 to 9
// $pattern =  "/[^a-d0-9]/i"; //here it serch without between a to d and 0 to 9
// $pattern =  "/\w/i"; //here it serch all carecter with out - .
// $pattern =  "/\W/i"; //here it serch all carecter only " "(space) - .
// $pattern =  "/\d/i"; //here it serch all digits without carecter
// $pattern =  "/\D/i"; //here it serch all carecter with out digits
// $pattern =  "/\s/i"; //here it serch only all space
// $pattern =  "/\S/i"; //here it serch without  all space
// $pattern =  "/\bweb\b/i"; //here it serch only the given word in the \b \b tag
// $pattern =  "/./i"; //here it serch all the single carecter
// $pattern =  "/ph./i"; //here it serch all the carecter after one ph one carcter
// $pattern =  "/w../i"; //here it serch all the carecter after one w two carecter (..) wizw carcter
// $pattern =  "/\+/i"; //here can fine any expression like +-*/ // it define like this
// $pattern =  "/s[a-z]*i/i"; //এটি s দিয়ে শুরু এবং i পুরজন্তু এবং মাঝখানে a to z অক্ষর থকবে এমন শব্দ খুজবে
// $pattern =  "/s[a-z]*?i/i"; //এটি s দিয়ে শুরু এবং i পুরজন্তু এবং মাঝখানে a to z অক্ষর থকবে এমন শব্দ খুজবে তবে প্রথমে যে i পাবে সেই পরজুন্তু
// $pattern =  "/<.*>/i"; // h1 tag or jakuno tag er moddhe fetch korar jonno
// $string = '<h1>PHP is the web "scripting php" language of + "522 825 choice"</h1>';
// $pattern =  '/".+"/i'; // grady match er madhoma first inverted thaka last inverted projuntu sobay ka select kroebe
// $pattern =  '/".+?"/i'; // lazy match er madhoma first inverted and last inverted er moddher sobay ka select kroebe

// $string = "PHP is the web scripting php language of + 522 825 choice\n possible\nimpossible \n play\n player \n played \n playon \play123";

// $pattern =  '/^\w+/i'; // frist word match by w+ pattern
// $pattern =  '/\w+$/im'; // last word to select
// $pattern =  '/(im)?possible/im'; // group () serch field ka t select korebei and optional kao use korebe
// $pattern =  '/play([a-z]+)?/im'; // group () serch field ka t select korebei and optional kao use korebe
// $pattern =  '/bill(?=\spaid)/im'; // lookahed
// $pattern =  '/bill+(?!\spaid)/im'; // lookahad negetive

// $string = "bill paid\n bill not paid\n bill paid 120";


// $exp = preg_match($pattern,$string); //only one things in first match
// $exp = preg_match_all($pattern,$string,$arr); //it serch all the things



// reguler expression replce functon starts with

// $pattern = "/PHP/i"; //replace php by javascript

/* $pattern = "/<.+?>/i";*/

// $string = "April 15, 2022";
// $pattern = "/(\w+) (\d+), (\d+)/i"; 
// $replacement = "$1 25, $3"; //we can call group by using $ sign

// $string = "{startDate} = 1999-5-10";
// $pattern = array("/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/","/^\s*{(\w+)}\s*=/");
// $replacement = array("$4/$3/$1$2","$1 = ");
// $exp = preg_replace($pattern,$replacement,$string); //it serch all the things

$string = "PHP is the web scripting language of choice.";
// $arr = preg_split("/[\s]+/",$string,3);
$arr = preg_split("/(web|of)/",$string);
// if($exp) {
    // echo "{$exp}";
// }else{
//     echo "{$exp} is not avilable";
// }

echo "<pre>";
print_r($arr);
echo "</pre>";
//we can see one of the array
// echo $arr[0][1];



?>