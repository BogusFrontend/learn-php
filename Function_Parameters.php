<?php

/*
 * Implement the truncate() function, which truncates the transmitted text and adds an ellipsis at the end.
 * Similar logic is often used on websites to display long text in an abbreviated form.
 * The function takes two parameters:
 * 1. The line to be trimmed
 * 2. The number of characters to leave
 */

function truncate($str, $length) : string
{
    $substr = substr($str, 0, $length);
    return $substr . '...';
}

$res = truncate('Hello!', 4);
print_r($res);