<?php

// input
fscanf(STDIN, "%d", $n);

// solution
for($i = 0; $i < $n; $i++) {
    fscanf(STDIN, "%s %s", $firstName, $emailID);
    if (preg_match('/[a-z]+@gmail\.com *$/', $emailID)) {
        $filteredMails[] = $firstName;
    }
}
sort($filteredMails, SORT_STRING);

// output
echo implode("\n", $filteredMails);
