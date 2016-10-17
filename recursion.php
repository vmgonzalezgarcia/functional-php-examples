<?php

/*
 * Recursion
 *
 * It is possible to eliminate flow control statements by using recursion: repeatedly calling the same function from
 * within itself until a predetermined condition is met
 *
 */
$chars = ['m', 'i', 'r', 'u', 'v', 'o', 'r'];

function concat(array $chars, $index = 0, $result = '')
{
    return array_key_exists($index, $chars)
        ? concat($chars, $index + 1, $result . $chars[$index])
        : $result;
}

var_dump(
  concat($chars)
);
