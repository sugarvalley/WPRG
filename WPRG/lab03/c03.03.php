<?php
function throws($k, $n, $threshold, $debug = false)
{
    $counter = 0;
    $t = array();
    for ($i = 0; $i < $k; $i++) {
        $throwing = rand(1, $n);
        if ($debug) {
            array_push($t, $throwing);
        }
        if ($throwing >= $threshold) {
            $counter += 1;
        }
    }
    if ($debug) {
        echo "You threw: ";
        arsort($t);
        foreach ($t as $key => $value) {
            echo $value . ", ";
        }
    }
    echo "</br>Throws >= " . $threshold . "&nbsp&nbsp&nbsp&nbsp-->&nbsp&nbsp&nbsp&nbsp";
    return $counter;
}

echo throws(5, 6, 4, true);