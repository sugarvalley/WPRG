<!-- PESEL decoder.

> Variable $pesel = "PESEL_number";

> Check if PESEL is correct (length and "check number") and show relevant information

> If PESEL is correct:

> Show sex and date of birth (dd-mm-yyyy) of the holder of the PESEL number -->

<?php
$pesel = "02070803628";
$length = strlen($pesel);
if ($length != 11) {
    echo "PESEL " . $pesel . " jest niepoprawny! {wrong length}\n";
} else {
    $sum = 0;
    $j = 1;
    for ($i = 0; $i < $length-1; $i++) {
        $number = (substr($pesel, $i, 1))*$j;
        if ($number>=10) {
            $sum+=substr($number, -1);
        } else {
            $sum+=$number;
        }
        $j+=2;
        if ($j == 5) {
            $j += 2;
        } elseif ($j == 11) {
            $j = 1;
        }
    }
    $num = 10 - (substr($sum, -1));
    $check = substr($pesel, -1);
    if ($num != $check) {
        echo "PESEL " . $pesel . " jest niepoprawny! {wrong number}";
    } else {
        echo "PESEL IS GOOD :)";
    }
}
