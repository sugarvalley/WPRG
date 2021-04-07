<?php
$content = file_get_contents('adresy');
$content = explode("\n", $content);
echo '<ul>';
foreach($content as $href){
    $href = explode("  ", $href);
    $first = true;
    echo '<li>';
    echo '<a href="'.$href[0].'">';
    foreach($href as $word){
        if($first) {
            $first = false;
        } else {
            echo $word." ";
        }
    }
    echo '</a><br />';
    echo '</li>';
}
echo '</ul>';