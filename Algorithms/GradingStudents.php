<?php

// input
fscanf(STDIN, "%d\n", $n);
for ($grades_itr = 0; $grades_itr < $n; $grades_itr++) {
    fscanf(STDIN, "%d\n", $grades_item);
    $grades[] = $grades_item;
}

// solution
function gradingStudents(array $grades): array
{
    foreach ($grades as $grade) {
        if ($grade >= 38) {
            $roundUp = ceil($grade/5) * 5;
            if ( ($roundUp - $grade > 0) && ($roundUp - $grade < 3) ) {
                $grade = $roundUp;
            }
        }
        $result[] = $grade;
    }

    return $result;
}

// output
$result = gradingStudents($grades);
fwrite(STDOUT, implode(PHP_EOL, $result) . PHP_EOL);
