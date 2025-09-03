<?php
    $arr=[11,22,33,44,55,66];
    for($i=5; $i>=0; $i--){
        echo "$arr[$i]"; 
        echo "<br>";
    }
    echo " using reverse function";
    echo "<br>";
  $array= array_reverse($arr);
   for($i=0; $i<=5; $i++){
    echo "$array[$i]";
     echo "<br>";
   }

?>