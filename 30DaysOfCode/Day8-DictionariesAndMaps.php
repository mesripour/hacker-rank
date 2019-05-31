<?php

// input
$n = fgets(STDIN);
for ($i = 1; $i <= $n; $i++) {
    $input = explode(' ', trim(fgets(STDIN)));
    $dic[$input[0]] = $input[1];
}

// solution
while (!feof(STDIN)) {
    $name = trim(fgets(STDIN));
    if (isset($dic[$name])) {
        echo "$name=$dic[$name]" . PHP_EOL;
    } else {
        echo 'Not found' . PHP_EOL;
    }
}
