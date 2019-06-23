<?php

// input
$date_returned = datify(fgets(STDIN));
$date_expire   = datify(fgets(STDIN));

// solution
function datify($date)
{
    return str_replace(' ', '-', trim(($date)));
}

function price($date1, $date2)
{
    $days = 15;
    $months = 500;
    $fallback = 10000;
    $arr_date1 = explode('-', $date1);
    $arr_date2 = explode('-', $date2);
    
    if((strtotime($date2) - strtotime($date1)) <= 0) {
        $result = 0;
    } elseif($arr_date1[2] !== $arr_date2[2]) {
        #diff Year
        $result = $fallback;
    } else {
       if(intval($arr_date1[1]) !== intval($arr_date2[1])) {
           $result = (intval($arr_date2[1]) - intval($arr_date1[1])) * $months; 
       } else {
           $result = (intval($arr_date2[0]) - intval($arr_date1[0])) * $days; 
       }
    }

    return $result;
}

// output
$result = price($date_expire,$date_returned);
echo $result;
