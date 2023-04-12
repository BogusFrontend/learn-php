<?php

/*
 * In this task, you will have to implement a simple calculator.
 * The calculate() function takes the following arguments:
 * operation in the form of a string (4 operations are supported +, -, /, *)
 * two numbers (the first and second operand)
 *
 * The result of the function is the application of the operation to these numbers.
 * If an operation is passed that is not supported, then the function should return null.
 */

function calculate ($symbol, $num1, $num2): float|int|null
{
    return match ($symbol) {
        '+' => $num1 + $num2,
        '-' => $num1 - $num2,
        '/' => $num1 / $num2,
        '*' => $num1 * $num2,
        default => null,
    };
}

$res = calculate('+', 2, 3);
print_r($res);