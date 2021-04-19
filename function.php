<?php
function howOld ($date) {
    $dateParts = explode('-', $date);
    $fullYears = date('Y') - $dateParts[0];
    if (mktime(0,0,0,$dateParts[1],$dateParts[2]) >= time()) {
        $fullYears--;
    }
    return $fullYears;
}

function readHobbies () {
    $hobbies = file(__DIR__ . 'WPRG/lab06/resources/hobbies');
    return $hobbies;
}