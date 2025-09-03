<?php
for ($i = 0; $i < 10; $i++) {
    $arr[$i] = $i + 1;
}
foreach ($arr as $index => $value) {
    echo "Index $index = $value <br>";
}
?>