<?php
echo "Write a PHP script to demonstrate inheritance and method overriding in PHP.<br>";
echo "Name : Dhrumil Patel <br>";
echo "Enrollment Number : 24082291088 <br>";
echo "------------------------------------------<br><br>";

class Guardian {
    public function message() {
        echo "This is Parent Class<br>";
    }
}

class Child extends Guardian {
    public function message() {
        echo "This is Child Class (Overridden Method)<br>";
    }
}

$obj = new Guardian();
$obj->message();
$obj = new Child();
$obj->message();
?>