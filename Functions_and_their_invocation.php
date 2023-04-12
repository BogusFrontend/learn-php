<?php
/*
 You are given three variables with the surnames of different people.
 Compose and display a word from the characters in this order:
 1. the third character from the first line
 2. the second character from the second line
 3. the fourth character from the third line
 4. the second and third character from the second line

 Result: hodor
 */

$one = "Naharis";
$two = "Mormont";
$three = "Sand";

print_r($one[2] . $two[1] . $three[3] . $two[1] . $two[2]);
