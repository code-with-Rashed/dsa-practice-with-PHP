<?php
// Find the longest word from a string.

function findLongestWord(string $str)
{
    $words = explode(" ", $str);
    $longestWord = "";
    for ($i = 0; $i < count($words); $i++) {
        if (strlen($words[$i]) > strlen($longestWord)) {
            $longestWord = $words[$i];
        }
    }
    return $longestWord;
}
$str = "This is Bangladesh not India";
$output = findLongestWord($str);
echo $output; // Bangladesh

function find_longest_word(string $str)
{
    $word = "";
    $longest_word = "";

    for ($i = 0; $i < strlen($str); $i++) {

        $word = $word . $str[$i];

        if ($str[$i] === " " || $i === strlen($str) - 1) {
            if (strlen($word) > strlen($longest_word)) {
                $longest_word = $word;
            }
            $word = "";
        }
    }

    return $longest_word;
}
$string = "I Love Pakistan not India";
$result = find_longest_word($string);
echo $result; // Pakistan