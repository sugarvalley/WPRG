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
$table = array($n);
$counter = 1;
echo "<pre>";
echo "&nbsp&nbsp&nbsp | ";
for ($i = 1; $i <= $n; $i++) {
    echo $i . " | ";
}
echo "</pre>";
?>