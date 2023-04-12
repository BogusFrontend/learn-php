<?php

/*
 * Implement the get Custom Date() function, which accepts a date in timestamp format and returns it in 15/03/1985 format.
 */

function getCustomDate(int $timestamp): string
{
    return date('d/m/Y', $timestamp);
}

$res = getCustomDate(1532435204);
print_r($res);
