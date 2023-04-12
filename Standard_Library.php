<?php

/*
 * The gettype() function allows you to determine the type of the argument being passed.
 * The type name is returned as a string.
 * For example, calling gettype(10) will return the string "integer" (integer is an integer).
 * Display the value type of the $motto variable.
 */

$motto = 'Family, Duty, Honor';
print_r(gettype($motto));

