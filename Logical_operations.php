<?php

/*
 * implement the isLeapYear() function, which checks the year for a leap year.
 * The year will be a leap year if it is a multiple of 400, or it is both a multiple of 4 and not a multiple of 100.
 * As you can see, the definition already contains all the necessary logic.
 */


function isLeapYear(int $year): int
{
    return $year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0);
}
$res = isLeapYear(2020);
print_r($res);