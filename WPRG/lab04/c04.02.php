<?php
$now = time();
$year = date("Y");
$timestamp = mktime(0, 0, 0, 1, 1, $year + 1);
$diff = $timestamp - $now;
echo "There are " . floor($diff/60/60/24) . " days till the end of the year";