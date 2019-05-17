<?php

// input
fscanf(STDIN, "%d\n", $n);

// solution
function factorial($n)
{
    if ($n <= 1) { # base case
        return 1;
    } else { # recursive case
        return $n * factorial($n - 1 );
    }
}

// output
$result = factorial($n);
fwrite(STDOUT, $result . PHP_EOL);