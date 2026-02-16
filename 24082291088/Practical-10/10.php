<?php
echo "Write a PHP script to create associative arrays and apply sorting functions such as asort()and ksort().<br>";
echo "Name : Dhrumil Patel <br>";
echo "Enrollment Number : 24082291088 <br>";
echo "------------------------------------------<br><br>";

$students = array(
    "Dev" => 85,
    "Dhamo" => 90,
    "Viko" => 75
);

asort($students);
echo "Sorted by Value:<br>";
foreach($students as $name => $marks) {
    echo "$name => $marks <br>";
}

ksort($students);
echo "<br>Sorted by Key:<br>";
foreach($students as $name => $marks) {
    echo "$name => $marks <br>";
}
?>