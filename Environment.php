<?php

/*
 * Write the get Age Difference() function, which takes two years of birth
 * and returns a string with an age difference in the form The age difference is 11.
 */

function getAgeDifference(int $a, int $b): string
{
    $result = abs($a - $b);
    return "The age difference is {$result}";
};

$res = getAgeDifference(2002, 2004);
print_r($res);