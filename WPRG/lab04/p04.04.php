<?php
$shopping = file_get_contents('ToBuy');
$prices = file_get_contents('Prices');
$shopping = explode("\n", $shopping);
$prices = explode("\n", $prices);
$keys = array();
$many = array();
$products = array();
$price = array();
$s = array();
$p = array();
foreach ($shopping as $list) {
    $list = explode(" ", $list);
    $first = true;
    foreach ($list as $value) {
        if ($first) {
            array_push($keys, $value);
            $first = false;
        } else {
            array_push($many, $value);
        }
    }
}
$s = array_combine($keys, $many);
foreach ($prices as $key) {
    $key = explode(" ", $key);
    $first = true;
    foreach ($key as $product) {
        if ($first) {
            array_push($products, $product);
            $first = false;
        } else {
            array_push($price, $product);
        }
    }
}
$p = array_combine($products, $price);
$counter = count($p);
$sum = 0;
foreach ($s as $product => $value) {
    $flag = 0;
    foreach ($p as $name => $price) {
        if ($product === $name) {
            $temp = $value * $price;
            echo $product . " " . $value . " x " . $price . " = " . $temp;
            echo '</br>';
            $sum += $temp;
        } else {
            $flag++;
        }
        if ($flag == $counter) {
            echo $product . " - </br>";
        }
    }
}
echo '------------------------';
echo '</br>';
echo "&nbsp&nbspSUM &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $sum;