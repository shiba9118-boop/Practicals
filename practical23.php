<?php

$num = array(15,26,37,48,59,70);

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