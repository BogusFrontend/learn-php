<?php

/*
 * Implement the getFormattedBirthday() function,
 * which takes three parameters as input: day, month and year of birth,
 * and returns them as a formatted string, for example: 20-02-1953.
 */

function getFormattedBirthday(int $day, int $month, int $year): string
{
    return sprintf('%02d-%02d-%d', $day, $month, $year);
};

$res = getFormattedBirthday(15, 01, 2002);
print_r($res);