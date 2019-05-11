<?php

// input
fscanf(STDIN, "%d\n", $N);

// solution
if ($N % 2 == 0) {
    if ($N >= 2 && $N <= 5) {
        $result = 'Not Weird';
    }else if ($N >= 6 && $N <= 20) {
        $result = 'Weird';
    }else if ($N > 20) {
        $result = 'Not Weird';
    }
} else {
    $result = 'Weird';
}

// output
fwrite(STDOUT, $result . PHP_EOL);