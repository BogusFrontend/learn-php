<?php

/*
 * Display the first and last letters of the sentence written in the $text variable in the following format:
 * 1. First: N
 * 2. Last: t
 */


$text = 'Never forget what you are, for surely the world will not';

print_r("First: {$text[0]}\nLast: {$text[-1]}");