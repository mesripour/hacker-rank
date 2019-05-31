<?php

// input
$handle = fopen ("php://stdin", "r");
fscanf($handle, "%d",$n);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
$a = array_map('intval', $a);

// solution
function countSwaps($a)
{
    $swaps = 0;
    $n = count($a);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - 1; $j++) {
            if ($a[$j] > $a[$j + 1]) {
                $temp = $a[$j];
                $a[$j] = $a[$j + 1];
                $a[$j + 1] = $temp;
                $swaps++;
            }
        }

    }

    $result = "Array is sorted in $swaps swaps." . PHP_EOL .
        "First Element: $a[0]" . PHP_EOL .
        "Last Element: {$a[$n-1]}" . PHP_EOL;

    return $result;
}

// output
$result = countSwaps($a);
fwrite(STDOUT, $result);


