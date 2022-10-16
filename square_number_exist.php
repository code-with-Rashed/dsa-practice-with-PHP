<?php

function square_number_exist(array $arr_one, array $arr_two): bool
{
    for ($i = 0; $i < count($arr_one); $i++) {

        $flag = false;

        for ($j = 0; $j < count($arr_two); $j++) {

            if (($arr_one[$i] * $arr_one[$i]) === $arr_two[$j]) {
                $flag = true;
            }
        }

        if (!$flag) {
            return false;
        }
    }
    return true;
}

square_number_exist([1, 2, 3, 4], [1, 4, 9, 16]);

square_number_exist([5, 6, 7, 8], [25, 36, 49, 64]);
