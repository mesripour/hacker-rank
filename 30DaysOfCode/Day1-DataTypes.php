<?php
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";

// Read and save an integer, double, and String to your variables.
$int = (int)trim(fgets($handle));
$double = (float)trim(fgets($handle));
$string = trim(fgets($handle));

// Print the sum of both integer variables on a new line.
$int = $i + $int;
fwrite(STDOUT, $int . PHP_EOL);

// Print the sum of the double variables on a new line.
$double = number_format($d + $double, 1, '.', '');
fwrite(STDOUT, $double . PHP_EOL);

// Concatenate and print the String variables on a new line
$string = $s . $string;
fwrite(STDOUT, $string . PHP_EOL);