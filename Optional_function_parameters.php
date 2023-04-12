<?php

/*
 * Implement the get Hidden Card() function,
 * which accepts the credit card number (consisting of 16 digits) as a string and returns its hidden version,
 * which can be used on the site for display. If the original card had the number 2034399002125581,
 * then the hidden version looks like this ****5581 .
 * In other words, the function replace the first 12 characters with asterisks.
 * The number of stars is regulated by the second optional parameter. The default value is 4.
 */

function getHiddenCard(string $str, int $length = 4): string
{
    $symbols = str_repeat('*', $length);
    $str = substr($str, 12, 16);
    return $symbols . $str;
}

$res = getHiddenCard('1234431112334436');
print_r($res);