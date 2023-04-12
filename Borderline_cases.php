<?php

/*
 *
 * Implement the predicate function isArgumentsForSubstrCorrect(), which takes three arguments:
 * the string
 * index from which to start extracting
 * the length of the extracted substring
 * The values that are passed to the function are not always correct.
 * Therefore, the function returns false if at least one of the conditions is true:
 * Negative length of the extracted substring
 * Negative specified index
 * The specified index goes beyond the boundary of the entire row
 * The length of the substring in the sum with the specified index goes beyond the boundary of the entire string
 * Otherwise, the function returns true.
 * Don't forget that indexes start at 0, so the index of the last element is "string length minus 1".
 */

function isArgumentsForSubstrCorrect($str, $index, $length) : bool
{
    $stringLength = strlen($str);
    if ($index < 0){
        return false;
    } elseif ($length < 0) {
        return false;
    } elseif ($index >= $stringLength){
        return false;
    } elseif ($index + $length > $stringLength){
        return false;
    }

    return true;
}

$res = isArgumentsForSubstrCorrect('Hello', 1, 2);
print_r($res);