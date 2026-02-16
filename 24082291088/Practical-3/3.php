<?php
echo "Write a PHP script to demonstrate decision making in PHP using if–else and switch–case statements.<br>";
echo "Name : Dhrumil Patel <br>";
echo "Enrollment Number : 24082291088 <br>";
echo "------------------------------------------<br><br>";

$marks = 65;

if ($marks >= 75) {
    echo "Grade: Distinction";
} elseif ($marks >= 60) {
    echo "Grade: First Class";
} elseif ($marks >= 50) {
    echo "Grade: Second Class";
} else {
    echo "Grade: Fail";
}

echo "<br><br>";

$day = 3;

switch ($day) {
    case 1:
        echo "Day is Monday";
        break;

    case 2:
        echo "Day is Tuesday";
        break;

    case 3:
        echo "Day is Wednesday";
        break;

    default:
        echo "Invalid Day Number";
}
?>
