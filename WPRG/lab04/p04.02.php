<?php
$reader = file_get_contents('licznik');
$new = $reader + 1;
file_put_contents('licznik', $new);
$reader = file_get_contents('licznik');
echo $reader;