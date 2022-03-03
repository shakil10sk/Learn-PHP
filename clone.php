<?php
class student{
    public $name;
    public $course;

    public function __construct($n){
        $this->name = $n;
    }
    public function setCourse(course $c){
        $this->course = $c;
    }

    public function __clone(){
        $this->course = clone $this->course;
    }
    
}

class course{
    public $cname;
    public function __construct($cn){
        $this->cname  = $cn;
    }
}

$student1 = new Student("shakil Hossain");
$course1 = new course('PHP');

$student1->setCourse($course1);
// print_r($student1);
// echo "<br>";
$student2 = clone $student1;
// print_r($student2);
// echo "<br>";

$student2->name = "King Khan";
// print_r($student2);
// echo "<br>";

$student2->course->cname = "Python"; 

print_r($student1);
print_r($student2);
