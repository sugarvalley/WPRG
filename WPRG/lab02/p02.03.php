<!-- Is Prime?

Check if variable $x is prime.

Add variable that counts loop and show its value

Optimize your program (the least loop iterations possible) -->

<?php

function isPrime($x) {
    $counter = 0;
    if ($x == 1) {
        $counter += 1;
        echo "Counter: " . $counter;
        return 0;
    }
    for ($i = 2; $i <= sqrt($x); $i++) {
        $counter += 1;
        if ($x % $i == 0) {
            $counter += 1;
            echo "Counter: " . $counter;
            return 0;
        }
    }
    echo "Counter: " . $counter;
    return 1;
}

$x = 13;
$flag = isPrime($x);

if ($flag == 1) {
    echo "</br>Prime";
} else {
    echo "</br>Not Prime";
}
