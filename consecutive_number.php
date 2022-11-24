<?php

/*
GIVEN BINARY ARRAY LIKE [1,0,1,1]
THEN
RETURN THE MAXIMUM NUMBER OF CONSECUTIVE 1'S IN ARRAY
*/

function find_maximum_number(array $number_array): int
{
    (int) $max = 0;
    (int) $count = 0;

    foreach ($number_array as $number) {
        if ($number === 1) {
            $count++;
            if ($max < $count) {
                $max = $count;
            }
        } else {
            $count = 0;
        }
    }

    return $max;
}

echo find_maximum_number(number_array:[1,1,0,0,1,1,1]); // 3