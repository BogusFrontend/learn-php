<?php

/*
 * Implement the convert text() function, which takes a string as input and, if the first letter is not uppercase,
 * returns an inverted version of the original string. If the first letter is uppercase,
 * the string is returned unchanged.
 * convert text('hello'); // 'hello'
 * convert text('hello'); // 'olleh'
 */

function convertText($str) : string
{
    return $str[0] === strtoupper($str[0]) ? $str :  strrev($str);
}

$res = convertText('programming');
print_r($res);
