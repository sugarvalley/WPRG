<?php
$reader = file('hello');
$count = count($reader);
echo "BEFORE: </br></br>";
foreach ($reader as $key => $value) {
    echo $value;
    echo "</br>";
}
for ($i = 0; $i < ($count/2); $i++) {
    $temp = $reader[$i];
    $reader[$i] = $reader[$count-$i];
    $reader[$count-$i] = $temp;
}
echo "</br>AFTER</br>";
foreach ($reader as $key => $value) {
    echo $value;
    echo "</br>";
}