<?php

// is palindrome string ? 

// approach one
function palindrome_string(string $string): bool
{
    (string) $string = strtolower($string);
    (int) $start = 0;
    (int) $end   = strlen($string) - 1;
    while ($start <= $end) {
        if ($string[$start] != $string[$end]) {
            return false;
        }
        $start++;
        $end--;
    }
    return true;
}
palindrome_string("dad"); //return boolean
palindrome_string("mom"); //return boolean
palindrome_string("level"); //return boolean
palindrome_string("noon"); //return boolean

// approach two
function string_palindrome(string $string): bool
{
    if($string != strrev($string)){
        return false;
    }
    return true;
}
string_palindrome("dad"); //return boolean
string_palindrome("mom"); //return boolean
string_palindrome("level"); //return boolean
string_palindrome("noon"); //return boolean
