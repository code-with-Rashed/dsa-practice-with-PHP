<?php

//Recursivly Sorting Araay

class Sort
{
    private array $sorted_array = [];
    private int $a = 0;
    private int $b = 1;

    private function is_sorted(array $array): bool
    {
        for ($i = 0; $i < count($array) - 1; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                return false;
            }
        }
        return true;
    }

    public function sorting_now(array $array): void
    {
        if ($this->is_sorted($array)) {
            $this->sorted_array = $array;
        } else if ($array[$this->a] < $array[$this->b]) {
            $this->a++;
            $this->b++;
            $this->sorting_now($array);
        } else if ($array[$this->a] > $array[$this->b]) {
            [$array[$this->a], $array[$this->b]] = [$array[$this->b], $array[$this->a]];
            $this->a = 0;
            $this->b = 1;
            $this->sorting_now($array);
        }
    }

    public function get_sorted_array(): array
    {
        return $this->sorted_array;
    }
}

$sort = new Sort();
$sort->sorting_now([0, 2, 3, 1, 6, 7, 5, 4]);

echo '<pre>';
print_r(
    $sort->get_sorted_array()
);
