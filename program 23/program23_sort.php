<?php
$student=["Alice","Charlie","Diana","Eve","Bob"];

echo"Orginal array ";
print_r($student);
echo"<br><br>";

asort($student);
echo"Array Sorted in Ascending Order:<br><br>";
print_r($student);
echo"<br><br>";
arsort($student);
echo"Array sorted in descending order:<br><br>";
print_r($student);
?>