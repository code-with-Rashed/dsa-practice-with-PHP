<?php
/*
* GIVEN AN ARRAY & ROTATION STEPS NUMBER
* THEN PRINT LEFT RORATED ARRAY
*/

function left_rotation(array $arr, int $steps): void
{
    (int) $length = count($arr);
    (int) $slice_at = $steps % $length;
    (array) $first_items = array_slice($arr, 0, $slice_at);
    (array) $last_items = array_slice($arr, $slice_at, $length);
    (array) $result = array_merge($last_items, $first_items);
    print_r($result);
}
left_rotation(arr: [1, 2, 3, 4, 5], steps: 4);
left_rotation(arr: [1, 2, 3, 4, 5], steps: 12);
