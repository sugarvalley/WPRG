<?php
setlocale(LC_ALL, "pl_PL.UTF8");
$now = time();
echo strftime("Dziś jest %A, %e %B %Y, %H:%M:%S", $now);