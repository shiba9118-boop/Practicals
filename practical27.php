<?php

$num = array(91, 52, 73, 14, 5);

echo "Original Array";
print_r($num);
echo "<br>";

sort($num); 
echo " Ascending (Values)";
print_r($num);
echo "<br>"; 

rsort($num);
echo " Descending (Values)";
print_r($num);
?>