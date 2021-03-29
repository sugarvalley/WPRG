<?php
$now = time();
$next = intval(date("Y", $now));
$timestamp = mktime(0, 0, 0, 12, 31, $next);

$diff = $timestamp - $now;
echo "There are " . floor($diff/60/60/24) . " days till the end of the year";