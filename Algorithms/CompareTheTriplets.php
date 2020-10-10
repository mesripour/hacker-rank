<?php

// input
fscanf(STDIN, "%d\n", $ar_count);
fscanf(STDIN, "%[^\n]", $ar_temp);
$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

// solution
function compareTriplets($a, $b)
{
    $scores = [0, 0]; // [0] => Alice, [1] => Bob
    $count  = count($a);

    for ($i = 0; $i < $count; $i++) {
        if ($a[$i] > $b[$i]) {
            $scores[0]++;
        } elseif ($a[$i] < $b[$i]) {
            $scores[1]++;
        }
    }

    return $scores;
}

// output
$result = simpleArraySum($ar);
fwrite(STDOUT, $result . PHP_EOL);
