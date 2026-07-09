<?php

$sentence = "Oh The Cats sleep peacefully under bright stars.";

// approach 1
function countVowels(string $str): void
{
    $totalVowels = 0;
    $vowelCounts = ["a" => 0, "e" => 0, "i" => 0, "o" => 0, "u" => 0];
    $normalized_str = strtolower($str);
    for ($c = 0; $c < strlen($normalized_str); $c++) {
        if (array_key_exists($normalized_str[$c], $vowelCounts)) {
            $vowelCounts[$normalized_str[$c]] += 1;
            $totalVowels++;
        }
    }
    echo "Breakdown of each vowel found : \n";
    print_r($vowelCounts);
    echo "Total vowels found : $totalVowels \n";
}
countVowels($sentence);

// approach 2
function vowelsCount(string $str)
{
    preg_match_all('/[aeiou]/i', $str, $matches);
    $vowelsFound = $matches[0];
    $totalVowels = count($vowelsFound);

    $initialCounts = ["a" => 0, "e" => 0, "i" => 0, "o" => 0, "u" => 0];
    $count = array_count_values(array_map('strtolower', $vowelsFound));
    $countVowels = array_merge($initialCounts, $count);

    echo "Total vowels found : $totalVowels \n";
    echo "Breakdown of each vowel found : \n";
    print_r($countVowels);
}
vowelsCount($sentence);
