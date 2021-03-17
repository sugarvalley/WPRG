<?php
$badWords = array("kurwa", "jebać", "suka", "chuj", "jebana");
$sentence = "Ania to kurwa jebana suka i chuj";
$words = explode(" ", $sentence);
$counter = count($words);
for ($x = 0; $x < $counter; $x++) {
    if (in_array($words[$x], $badWords)) {
        $words[$x] = "***";
    }
}
for ($z = 0; $z < $counter; $z++) {
    echo $words[$z] . " ";
}