<?php
$name=array("Kapil Dev","Rahul Dravid","Sachin
Tendulkar","Sunil Gavaskar","MS Dhoni","Dilip
Vengasarkar","Shikhar Dhawan"," BS Chandrashekhar");
echo ("Array is:<br>");
print_r($name);
echo "<table border=1>";
echo "<tr>";
echo "<th> NAME OF PLAYERS</th>";
echo "</tr>";
for($i=0; $i<count($name);$i++){
echo "<tr>";
echo "<td>$name[$i] </td>";
echo "</tr>";
}
?>