<?php

/*
 * Mutual Recursion
 *
 * A form of recursion where two functions are called recursively between them
 *
 */

function isEven($number)
{
    if ($number == 0) {
        return true;
    } else {
        return isOdd($number - 1);
    }
}

function  isOdd($number)
{
    if ($number == 0) {
        return false;
    } else {
        return isEven($number - 1);
    }
}

var_dump(isEven(5));
var_dump(isEven(8));
var_dump(isOdd(5));
var_dump(isOdd(8));
