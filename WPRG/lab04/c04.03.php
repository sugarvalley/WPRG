<?php
setlocale(LC_ALL, "pl_PL.UTF8");
$day = 29;
$month = 03;
$year = 2021;
$date = mktime(0,0,0, $month, $day, $year);
echo strftime("%e %B %Y to %A", $date);
