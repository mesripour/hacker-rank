<?php

// input
fscanf(STDIN, "%d\n", $n);
for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, "%[^\n]", $arr_temp);
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}


// solution
function diagonalDifference($arr)
{
    $n = count($arr) - 1;
    $primaryDiagonal = $secondaryDiagonal = 0;
    for ($i = 0; $i <= $n; $i++) {
        $primaryDiagonal += $arr[$i][$i];
        $secondaryDiagonal += $arr[$i][$n-$i];
    }
    $result = abs($primaryDiagonal - $secondaryDiagonal);

    return $result;
}

// output
$result = diagonalDifference($arr);
fwrite(STDOUT, $result . PHP_EOL);

