<?php

// Implement the join Numbers From Range() function, which combines all the numbers from the range into a string.

function joinNumbersFromRange(int $a, int $b): string
{
    $i = $a;
    $result = '';
    while($i <= $b){
        $result = "{$result}{$i}";
        $i = $i + 1;
    }

    return $result;
}

$res = joinNumbersFromRange(1, 10);
print_r($res);
