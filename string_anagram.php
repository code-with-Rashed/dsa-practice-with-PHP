<?php
//STRING IS ANAGRAM ?

function string_anagram(string $str_one, string $str_two): bool
{
    if (strlen($str_one) !== strlen($str_two)) {
        return false;
    }
    (array) $string_one = [];
    for ($i = 0; $i < strlen($str_one); $i++) {
        if (array_key_exists($str_one[$i], $string_one)) {
            $string_one[$str_one[$i]]++;
        } else {
            $string_one[$str_one[$i]] = 1;
        }
    }
    for ($i = 0; $i < strlen($str_two); $i++) {
        if ($string_one[$str_two[$i]]) {
            $string_one[$str_two[$i]]--;
        } else {
            return false;
        }
    }
    return true;
}
$check_one = string_anagram(str_one: 'hello', str_two: 'olleh');
var_dump($check_one);

$check_two = string_anagram(str_one: 'hello', str_two: 'ollel');
var_dump($check_two);