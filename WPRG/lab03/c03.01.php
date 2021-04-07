<?php
function circle($r)
{
    return pi() * ($r * $r);
}

function square($n)
{
    return $n * $n;
}

function rectangle($a, $b)
{
    return $a * $b;
}

function equilateralTriangle($n)
{
    return (($n * $n) * sqrt(3)) / 4;
}

function trapeze($a, $b, $h)
{
    return (($a + $b) * $h) / 2;
}

echo circle(3) . "</br>";
echo square(3) . "</br>";
echo rectangle(3, 4) . "</br>";
echo equilateralTriangle(3) . "</br>";
echo trapeze(3, 4, 2) . "</br>";
