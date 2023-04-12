<?php

// Implement the swap() function, which swaps the arguments passed by reference.

function swap(int &$a, int &$b) : void
{
    $c = $a;
    $a = $b;
    $b = $c;
};
$a = 5;
$b = 8;
$res = swap($a, $b);
print_r($a);
print_r($b);