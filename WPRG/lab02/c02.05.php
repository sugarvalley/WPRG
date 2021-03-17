<!-- PESEL decoder.

> Variable $pesel = "PESEL_number";

> Check if PESEL is correct (length and "check number") and show relevant information

> If PESEL is correct:

> Show sex and date of birth (dd-mm-yyyy) of the holder of the PESEL number -->

<?php
$pesel = "6701091688";
$length = strlen($pesel);
if ($length != 11) {
    echo "PESEL " . $pesel . " jest niepoprawny!";
} else {
}
