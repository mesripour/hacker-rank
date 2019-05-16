<?php

// input
$stdin = fopen("php://stdin", "r");
fscanf($stdin, "%[^\n]", $st_temp);
$st = explode(' ', $st_temp);
$s = intval($st[0]);
$t = intval($st[1]);
fscanf($stdin, "%[^\n]", $ab_temp);
$ab = explode(' ', $ab_temp);
$a = intval($ab[0]);
$b = intval($ab[1]);
fscanf($stdin, "%[^\n]", $mn_temp);
$mn = explode(' ', $mn_temp);
$m = intval($mn[0]);
$n = intval($mn[1]);
fscanf($stdin, "%[^\n]", $apples_temp);
$apples = array_map('intval', preg_split('/ /', $apples_temp, -1, PREG_SPLIT_NO_EMPTY));
fscanf($stdin, "%[^\n]", $oranges_temp);
$oranges = array_map('intval', preg_split('/ /', $oranges_temp, -1, PREG_SPLIT_NO_EMPTY));

// solution
function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges)
{
    $appleCount = $orangeCount = 0;

    foreach ($apples as $apple) {
        $place = $apple + $a;
        if ($place >= $s && $place <= $t) {
            $appleCount++;
        }
    }

    foreach ($oranges as $orange) {
        $place = $orange + $b;
        if ($place >= $s && $place <= $t) {
            $orangeCount++;
        }
    }

    return [$appleCount, $orangeCount];
}

// output
$result = countApplesAndOranges($s, $t, $a, $b, $apples, $oranges);
fwrite(STDOUT, implode(PHP_EOL, $result) . PHP_EOL);
