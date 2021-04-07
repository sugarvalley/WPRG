<?php
$reader = file_get_contents('hello');
$reader = explode("\n", $reader);
echo "<br />BEFORE: <br />";
foreach ($reader as $row) {
    echo $row."<br />";
}
echo "<br />AFTER: <br />";
$reader = array_reverse($reader);
foreach ($reader as $row) {
    echo $row."<br />";
}
file_put_contents('hello', implode("\n",$reader));
