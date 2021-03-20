<!-- Flag colors.

> Variable $flags required (array)

    keys: country names in English,

    values: colors

> Show 5 the most common flag colors with country names sorted alphabetically

Hints:

    > Order of the countries can be any

    > Order of colors can be any

    > Choose 10 EU countries as keys -->

<?php
$flags = array(
    "Poland" => array("white", "red"),
    "Germany" => array("black", "red", "yellow"),
    "Belgium" => array("black", "red", "yellow"),
    "France" => array("blue", "white", "red"),
    "Greece" => array("blue", "white"),
    "Spain" => array("red", "yellow"),
    "Croatia" => array("red", "white", "blue"),
    "Ireland" => array("green", "white", "orange"),
    "Holland" => array("red", "white", "blue"),
    "Lithuania" => array("yellow", "green", "red"));
$c = array();
foreach ($flags as $flag => $colors) {
    foreach ($colors as $color) {
        array_push($c, $color);
    }
}
ksort($flags);
$color_count = array_count_values($c);
arsort($color_count);
$common_colors = array_slice($color_count, 0, 5, true);
$key_color = array_keys($common_colors);
foreach ($key_color as $color) {
    echo $color . ": ";
    foreach ($flags as $flag => $colors) {
        if (in_array($color, $colors)) {
            echo $flag . " ";
        }
    }
    echo "</br>";
}
