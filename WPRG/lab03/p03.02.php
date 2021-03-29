<?php

function add1($n)
{
    return ($n + 1);
}

function ticTacToe($moves)
{
    // check if array is > 9
    if (count($moves) > 9) {
        return -1;
    }
    $temp = array_flip($moves);
    $n = array_map('add1', $temp);
    $maping = array_count_values($moves);

    // check if values are unique
    foreach ($maping as $map => $one) {
        if ($one != 1) {
            return -1;
        }
    }

    // make array of OX
    foreach ($n as $place => $move) {
        if ($move % 2 == 0) {
            $n[$place] = "X";
        } else {
            $n[$place] = "O";
        }
    }
    echo "<table>
              <tr>
                <td style='width: 30px; height: 30px ; text-align: center; border: 1px solid black'>$n[1]</td>
                <td style='width: 30px; height: 30px ; text-align: center; border: 1px solid black'>$n[2]</td>
                <td style='width: 30px; height: 30px ; text-align: center; border: 1px solid black'>$n[3]</td>
              </tr>
              <tr>
                <td style='width: 30px; height: 30px ; text-align: center; border: 1px solid black'>$n[4]</td>
                <td style='width: 30px; height: 30px ; text-align: center; border: 1px solid black'>$n[5]</td>
                <td style='width: 30px; height: 30px ; text-align: center; border: 1px solid black'>$n[6]</td>
              </tr>
              <tr>
                <td style='width: 30px; height: 30px ; text-align: center; border: 1px solid black'>$n[7]</td>
                <td style='width: 30px; height: 30px ; text-align: center; border: 1px solid black'>$n[8]</td>
                <td style='width: 30px; height: 30px ; text-align: center; border: 1px solid black'>$n[9]</td>
              </tr>
           </table>";

    $x = array();
    $o = array();

    foreach ($n as $place => $xo) {
        if ($xo == "X") {
            array_push($x, $place);
        } else {
            array_push($o, $place);
        }
        // array_intersect
        }
    }
    return 0;
}

$moves = array(5, 2, 4, 6, 8, 1, 7, 3);

switch (ticTacToe($moves)) {
    case 0:
        echo "Draw";
        break;
    case 1:
        echo "O won!";
        break;
    case 2:
        echo "X won!";
        break;
    case -1:
        echo "ERROR, bad moves!";
        break;
}