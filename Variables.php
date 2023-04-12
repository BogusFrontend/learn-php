<?php
/*
 *
 * The code defines a variable with the value Brianna.
 * Redefine the value of this variable and assign it the same string, but in an inverted form,
 * i.e. arrange the characters of the original string in reverse order.
 *
 */

$name = 'Alexandra';
$reverseName = strrev($name);
$name = $reverseName;
print_r($name);