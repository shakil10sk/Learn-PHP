<?php
namespace magicConstrains;
echo "the line: ". __LINE__;
echo "<br>";
echo "the File Path: ". __FILE__;
echo "<br>";
echo "the DIR: ". __DIR__;
echo "<br>";
function func(){

    echo "the FUNCTION: ". __FUNCTION__;
}
func();
echo "<br>";

class student{
    use mytrait;
    function st(){

        echo "the Class Name: ". __CLASS__;
    }
    function method1(){

        echo "the Methode Name: ". __METHOD__;
    }
    function namespaceName(){

        echo "the namespace Name Name: ". __NAMESPACE__;
    }
}
$stu = new student();
$stu->st();
echo "<br>";
$stu->method1();
echo "<br>";
$stu->namespaceName();
echo "<br>";

trait mytrait{
    public function gettrateName(){
        echo "TRAIT name ; " . __TRAIT__;
    }
}

$stu->gettrateName();
echo "<br>";
?>