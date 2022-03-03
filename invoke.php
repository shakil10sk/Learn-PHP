<?php
class student{
    public $num1;
    public $num2;

    public function __construct($a,$b)
    {
        $this->num1 = $a;
        $this->num2 = $b;	
    }

    public function sum(){
        return $this->num1 + $this->num2;
    }
    public function mult(){
        echo $this->num1 * $this->num2;
    }
    public function __invoke() {
        echo $this->num1 + $this->num2;
    }
}

$st = new student(10,50);
echo $st->sum();
echo "<br>";
$st->mult();
echo "<br>";
$st();

?>