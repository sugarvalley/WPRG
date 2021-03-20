<!-- PESEL decoder.

> Variable $pesel = "PESEL_number";

> Check if PESEL is correct (length and "check number") and show relevant information

> If PESEL is correct:

> Show sex and date of birth (dd-mm-yyyy) of the holder of the PESEL number -->

<?php
$pesel = "72082567362";
$length = strlen($pesel);
if ($length != 11) {
    echo "PESEL " . $pesel . " is incorrect! {wrong length}\n";
} else {
    $sum = 0;
    $j = 1;
    for ($i = 0; $i < $length - 1; $i++) {
        $number = (substr($pesel, $i, 1)) * $j;
        if ($number >= 10) {
            $sum += substr($number, -1);
        } else {
            $sum += $number;
        }
        $j += 2;
        if ($j == 5) {
            $j += 2;
        } elseif ($j == 11) {
            $j = 1;
        }
    }
    $num = 10 - (substr($sum, -1));
    $check = substr($pesel, -1);
    if ($num != $check) {
        echo "PESEL " . $pesel . " is incorrect! {wrong number}\n";
    } else {
        $sex = substr($pesel, -2, 1);
        if ($sex % 2 == 0) {
            $sex = "Woman";
        } else {
            $sex = "Man";
        }
        $month_last = substr($pesel, 3, 1);
        $month_first = substr($pesel, 2, 1);
        $year_last = substr($pesel, 0, 2);
        $day = substr($pesel, 4, 2);
        switch ($month_last) {
            case "9":
                $month = "September";
                break;
            case "8":
                $month = "August";
                break;
            case "7":
                $month = "July";
                break;
            case "6":
                $month = "June";
                break;
            case "5":
                $month = "May";
                break;
            case "4":
                $month = "April";
                break;
            case "3":
                $month = "March";
                break;
            case "2":
                if ($month_first % 2 == 0) {
                    $month = "February";
                } else {
                    $month = "December";
                }
                break;
            case "1":
                if ($month_first % 2 == 0) {
                    $month = "January";
                } else {
                    $month = "November";
                }
                break;
            case "0":
                $month = "October";
                break;
        }
        switch ($month_first) {
            case "9":
            case "8":
                $year_first = "18";
                break;
            case "7":
            case "6":
                $year_first = "22";
                break;
            case "5":
            case "4":
                $year_first = "21";
                break;
            case "3":
            case "2":
                $year_first = "20";
                break;
            case "1":
            case "0":
                $year_first = "19";
                break;
        }
        echo "The holder of the PESEL: " . $pesel . " is a " . $sex . " born on " . $month . " " . $day . ", " . $year_first . $year_last . ".";
    }
}
