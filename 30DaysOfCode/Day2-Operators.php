<?php

# input
fscanf(STDIN, "%lf\n", $meal_cost);
fscanf(STDIN, "%d\n", $tip_percent);
fscanf(STDIN, "%d\n", $tax_percent);

# solution
function totalCost($meal_cost, $tip_percent, $tax_percent)
{
    $tip = $meal_cost * ($tip_percent / 100);
    $tax = $meal_cost * ($tax_percent / 100);
    $totalCost = $meal_cost + $tip + $tax;
    $totalCost = round($totalCost);

    return $totalCost;
}

# output
$result = totalCost($meal_cost, $tip_percent, $tax_percent);
fwrite(STDOUT, $result);