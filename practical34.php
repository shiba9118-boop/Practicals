<?php
$fruits=array("Mango"=>50,"Apple"=>100,"Banana"=>20);

asort($fruits); 
print_r($fruits);

ksort($fruits);
print_r($fruits);
?>