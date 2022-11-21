<?php

//approach one
function arr_reverse(array $arr): array
{
    (array) $temp_array = [];
    $length = count($arr);
    for ($i = $length - 1; $i >= 0; $i--) {
        $temp_array[] = $arr[$i];
    }
    return $temp_array;
}
$result_one = arr_reverse([1, 2, 3, 4, 5, 6, 7, 80, 90, 100]);
print_r($result_one);

//approach two
function reverse_arr(array $arr): array
{
    (int) $length = count($arr);
    (int) $last_index = $length - 1;
    for ($i = 0; $i < $length / 2; $i++, $last_index--) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$last_index];
        $arr[$last_index] = $temp;
    }
    return $arr;
}
$result_two = reverse_arr([1, 2, 3, 4, 5, 6, 7, 80, 90, 100]);
print_r($result_two);