<?php
echo "Write a PHP script to demonstrate the use of constructor and destructor in PHP.<br>";
echo "Name : Dhrumil Patel <br>";
echo "Enrollment Number : 24082291088 <br>";
echo "------------------------------------------<br><br>";

class Demo {
    public function __construct() {
        echo "Constructor Called<br>";
    }

    public function __destruct() {
        echo "Destructor Called<br>";
    }
}

$obj = new Demo();
?>