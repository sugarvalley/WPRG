<?php
setlocale(LC_ALL, "pl_PL.UTF8");
$day = 20;
$month = 12;
$year = 2008;
$date = mktime(0,0,0, $month, $day, $year);
echo strftime("%e %B %Y to %A", $date);
