<!-- Generate an array of 100 natural numbers from 0 to 100,

> Show array separated by commas,

> Show highest number and how many times it has appeared,

> Show median of the drawn numbers   -->

<?php
$numbers = array();
$highest = 0;
$counter = 1;
$median = 0;

for ($i = 0; $i < 100; $i++) {
    $numbers[$i] = rand(0, 100);
    if ($numbers[$i] > $highest) {
        $highest = $numbers[$i];
        $counter = 1;
    } elseif ($numbers[$i] == $highest) {
        $counter += 1;
    }
    if ($i != 99) {
        echo $numbers[$i] . ", ";
    } else {
        echo $numbers[$i];
    }
}

sort($numbers);
$median = ($numbers[49] + $numbers[50]) / 2;

echo "</br>The highest number is: " . $highest;
echo "</br>Counter: " . $counter;
echo "</br>Median: " . $median;