<?php

/*
 * Add the implementation of the invertCase() function,
 * which inverts the case of each character in the past string.
 */

function invertCase(string $text): string
{
    $result = '';
    for ($i = 0; $i <= mb_strlen($text); $i++) {
        $currentChar = mb_substr($text, $i, 1);
        $upperVersion = mb_convert_case($currentChar, MB_CASE_UPPER, "UTF-8");

        if ($currentChar === $upperVersion) {
            $currentChar = mb_convert_case($currentChar, MB_CASE_LOWER, "UTF-8");
        } else {
            $currentChar = $upperVersion;
        }
        $result .= $currentChar;
    }
    return $result;
}

$res = invertCase('Привет, как дела?');
print_r($res);