<?php

//SPARSE ARRAYS

//approach one
function match_array_strings(array $strings, array $querys): array
{
    (array) $result = [];
    foreach ($strings as $string) {
        $count = 0;
        foreach ($querys as $query) {
            if ($string === $query) {
                $count++;
            }
        }
        $result[$string] = $count;
    }
    return $result;
}
$result_one = match_array_strings(strings: ['as', 'df', 'gh'], querys: ['as', 'df', 'gh', 'as']);
print_r($result_one);

//approach two
function array_strings_match(array $strings, array $querys): array
{
    (array) $strings_result = [];
    foreach ($strings as $string) {
        if (array_key_exists($string, $strings_result)) {
            $strings_result[$string]++;
        } else {
            $strings_result[$string] = 1;
        }
    }
    (array) $matching_result = [];
    foreach ($querys as $query) {
        $matching_result[] = $strings_result[$query] ?? 0;
    }
    return $matching_result;
}
$result_two = array_strings_match(strings: ['as', 'df', 'gh', 'jk', 'as'], querys: ['as', 'df', 'xy', 'as']);
print_r($result_two);