<?php
$numbers = array(10, 20, 30, 40, 50);

$sum = 0;

foreach ($numbers as $num) {
    $sum = $sum + $num; 
}

echo "Numbers in array: ";
echo "<br>";                                                                            
foreach ($numbers as $num) {
    echo $num . "<br> ";
}

echo "\n Sum of all numbers: " . $sum;
?>