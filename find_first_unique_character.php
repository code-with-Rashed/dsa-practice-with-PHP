<?php
// find first unique character
// Time Complexity O(n2)

function find_first_unique_character(string $str)
{
    for ($i = 0; $i < strlen($str); $i++) {
        $isUnique = true;
        for ($j = 0; $j < strlen($str); $j++) {
            if ($j !== $i && $str[$i] === $str[$j]) {
                $isUnique = false;
                break;
            }
        }
        if ($isUnique) {
            return $str[$i];
        }
    }
    return null;
}
$characters = "aabbcdcdEfgf";
$output = find_first_unique_character($characters);
echo $output; // Output : E

// Time Complexity O(n)
function find_first_unique_char(string $str)
{
    $char_count = [];
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        $char_count[$char] = ($char_count[$char] ?? 0) + 1;
    }
    for ($j = 0; $j < strlen($str); $j++) {
        if ($char_count[$str[$j]] === 1) {
            return $str[$j];
        }
    }
    return null;
}
$character = "aabbecdcdeGffz";
$result = find_first_unique_char($character);
echo $result; // Output : G
