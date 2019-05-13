<?php

// input
fscanf(STDIN, "%d\n", $n);

// solution
for ($i = 1; $i <= 10; $i++) {
    echo "$n x $i = " . $n * $i . PHP_EOL;
}