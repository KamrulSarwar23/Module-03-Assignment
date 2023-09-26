<?php

// Task 2: Array Manipulation

function removeEven($numbers)
{
    return array_filter($numbers, function ($number) {
        return $number % 2 != 0;
    });
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$filtered = removeEven($numbers);


print_r($filtered);