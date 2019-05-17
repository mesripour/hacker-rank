<?php

// input
fscanf(STDIN, "%d\n", $n);
$s = '';
fscanf(STDIN, "%[^\n]", $s);

// solution
function countingValleys($n, $s)
{
    $state = $valleys = 0;
    for ($step = 0; $step < $n; $step++) {
        if ($s[$step] == 'U') {
            $state++;
        } else {
            $state--;
        }
        if ( ($state == 0) && ($s[$step] == 'U') ) {
            $valleys++;
        }
    }

    return $valleys;
}

// output
$result = countingValleys($n, $s);
fwrite(STDOUT, $result . PHP_EOL);
