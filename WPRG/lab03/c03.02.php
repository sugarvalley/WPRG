<?php
function arePrimes($x, $y)
{
    while ($y != 0) {
        $z = $x % $y;
        $x = $y;
        $y = $z;
    }
    return $x;
}

$flag = arePrimes(17, 3);
if ($flag == 1) {
    echo "Numbers are relatively prime";
} else {
    echo "Numbers are NOT relatively prime";
}
