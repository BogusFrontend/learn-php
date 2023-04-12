<?php


/*
 *
 * Implement the sum Of Series() function, which counts the sum of a series of integers.
 * A row is defined by two numbers — the initial and the final.
 *
 * The function takes two arguments-numbers and returns the sum of the series.
 * For example, for arguments 4 and 7, the sum will be 4 + 5 + 6 + 7 = 22.
 * If the start and end numbers are equal, then the result will be the same number.:
 */

function sumOfSeries(int $start, int $end): int
{
    $result = 0;
    if ($start === $end) {
        return $start;
    }

    for (; $start <= $end; $start++) {
        $result += $start;
    }
    return $result;
}

$res = sumOfSeries(1, 3);
print_r($res);