<?php

/*
 * Implement the getCurrentYear() function, which returns the current year to the outside:

getCurrentYear() # 2022
Algorithm:

1. Get the current date using the date('Y-m-d') function.
In reality, you can immediately return the year by passing this function to the output format 'Y',
2. which performs our task. But here we want to practice.
3. Extract the year from the received date
4. Convert code from string to number
5. Return the year to the outside


To complete the task, you may need a method that allows you to cut a piece of a given length from the line,
starting from its beginning. It is easy to do this using the substr() function:

substr($str, $offset, $length)

1. $str - string
2. $offset — the ordinal number (index) of the symbol from which the "cropping" begins
3. $length — length of the segment
print_r(substr('Bogus', 0, 3)) // => 'Bog'

// we take a segment starting from a character with index 2
// and length 2
print_r(substr('python', 2, 2)) // => ' th'
You don't need to call your function, just define it.
 */

function getCurrentYear(): int
{
    $currentDate = date('Y-m-d');
    $currentYear = substr($currentDate, 0, 4);
    return (integer) $currentYear;
}
$res = getCurrentYear();
print_r($res);