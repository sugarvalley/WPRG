<!-- Multiplication table

> Show inside <pre></pre> multiplication table like below

Example for $n=3:

   | 1 | 2 | 3 |

---+---+---+---+

 1 | 1 | 2 | 3 |

---+---+---+---+

 2 | 2 | 4 | 6 |

---+---+---+---+

 3 | 3 | 6 | 9 |

---+---+---+---+  -->

<?php

$n = 3;
$counter = 1;
echo "<pre>";
echo "   |";
for ($i = 1; $i <= $n; $i++) {
    echo " " . $i . " |";
}
echo "\n";
for ($i = 1; $i <= $n + 1; $i++) {
    echo "---+";
}
echo "\n";
for ($i = 1; $i <= $n; $i++) {
    echo " " . $i . " |";
    for ($j = 1; $j <= $n; $j++) {
        echo " " . $j * $i . " |";
    }
    echo "\n";
    for ($k = 1; $k <= $n + 1; $k++) {
        echo "---+";
    }
    echo "\n";
}
echo "</pre>";
?>