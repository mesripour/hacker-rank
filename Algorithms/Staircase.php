<?php

// input
fscanf(STDIN, "%d\n", $n);

// solution
function staircase($n)
{
    for ($row = 1; $row <= $n; $row++) {
        for ($space = $n; $space > $row; $space--) {
            echo ' ';
        }
        for ($pound = 1; $pound <= $row; $pound++) {
            echo '#';
        }
        echo PHP_EOL;
    }
}

// output
staircase($n);

