<?php
$students = array("Athira", "Jessy", "Sneha", "Naveen", "Amjith",
"Abhilash", "Raju");
echo "Normal Array : <br>";
print_r($students);
echo "<br><br> Ascending Sort : <br>";
asort($students);
print_r($students);
echo "<br><br> Descending Sort : <br>";
arsort($students);
print_r($students);
?>