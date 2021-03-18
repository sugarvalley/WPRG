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
        "Poland" => "white", "red",
        "Germany" => "black", "red", "yellow",
        "Belgium" => "black", "red", "yellow",
        "France" => "blue", "white", "red",
        "Greece" => "blue", "white",
        "Spain" => "red", "yellow",
        "Croatia" => "red", "white", "blue",
        "Ireland" => "green", "white", "orange",
        "Holland" => "red", "white", "blue",
        "Lithuania" => "yellow", "green", "red");
$colors = array_count_values($flags);
arsort($colors);
var_dump($colors);
