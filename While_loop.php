<?php

/*
 * Modify the print Numbers() function so that it outputs the numbers in reverse order.
 * To do this, you need to go from the upper border to the lower one.
 * That is, the counter must be initialized to the maximum value,
 * and in the body of the loop it must be reduced to the lower limit.
 */

function printNumbers($firstNumber): void
{
    $i = $firstNumber;
    while ($i >= 1) {
        print_r("{$i}\n");
        $i = $i - 1;
    }
    print_r('finished!');
}

$res = printNumbers(5);
print_r($res);
