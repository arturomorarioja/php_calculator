<?php

function sum(float $num1, float $num2): float
{
    return $num1 + $num2;
}

function subtract(float $num1, float $num2): float
{
    return $num1 - $num2;
}

function multiply(float $num1, float $num2): float
{
    return $num1 * $num2;
}

function divide(float $num1, float $num2): float
{
    if ($num2 === 0) {
        throw new DivisionByZeroError('Division by zero');
    }
    return $num1 / $num2;
}