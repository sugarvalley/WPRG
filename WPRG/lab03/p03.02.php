<?php

$moves = array(5, 4, 1, 3, 9);

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

function add1($n)
{
    return ($n + 1);
}

function draw($n)
{
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
}

function isWinner($n, $symbol)
{
    // horizontal
    for ($i = 1; $i <= 9; $i = $i + 3) {
        if ($n[$i] == $symbol && $n[$i + 1] == $symbol && $n[$i + 2] == $symbol) {
            return true;
        }
    }
    // vetical
    for ($i = 1; $i <= 3; $i++) {
        if ($n[$i] == $symbol && $n[$i + 3] == $symbol && $n[$i + 6] == $symbol) {
            return true;
        }
    }
    // \ and /
    if ($n[1] == $symbol && $n[5] == $symbol && $n[9] == $symbol) {
        return true;
    }
    if ($n[3] == $symbol && $n[5] == $symbol && $n[7] == $symbol) {
        return true;
    }
    // none
    return false;
}

function ticTacToe($moves)
{
    // check if number of moves <= 9
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

    draw($n);

    //check the winner
    foreach ($n as $place => $move) {
        if (isWinner($n, "O")) {
            return 1;
        }
        if (isWinner($n, "X")) {
            return 2;
        }
    }
    return 0;
}
