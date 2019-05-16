<?php

// input
$n = trim(fgets(STDIN));
for ($i = 1; $i <= $n; $i++) {
    $input = explode(' ', trim(fgets(STDIN)));
    $dic[$input[0]] = $input[1];
}
for ($i = 1; $i <= $n; $i++) {
    $names[] = trim(fgets(STDIN));
}

// solution
$result = null;
foreach ($names as $name) {
    if (isset($dic[$name])) {
        $result .= "$name=$dic[$name]" . PHP_EOL;
    } else {
        $result .= 'Not found' . PHP_EOL;
    }
}

// output
fwrite(STDOUT, $result);