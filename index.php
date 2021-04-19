<?php
include_once "function.php";

$myDateOfBirth = '1999-12-11';
$age = howOld($myDateOfBirth);
$hobbies = readHobbies();
$currentYear = date('Y');

include_once "WPRG/lab06/view/mainpage.html.php";

