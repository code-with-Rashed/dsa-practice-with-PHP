<?php

/**
 * MergeSort (Class-Based)
 * 
 * A simple class that sorts an array using the Merge Sort algorithm.
 * - Call `start()` with Ascending or Descending order.
 * - Internally splits the array into halves and merges them back sorted.
 * - Use `result()` to get the final sorted array.
 */

// Enum to define sorting order
enum Order
{
    case Ascending;
    case Descending;
}

class MergeSort
{
    private array $array;          // Original input array
    private array $sortedArray = []; // Holds the final sorted array
    private Order $sorting_order;  // Sorting order (Ascending/Descending)

    // Constructor initializes the array
    public function __construct(array $array)
    {
        $this->array = $array;
    }

    // Recursively divide the array into halves
    private function divide(array $array): array
    {
        // Base case: if array has 1 or fewer elements, it's already sorted
        if (count($array) <= 1) {
            return $array;
        }

        // Find the middle index
        $mid = intdiv(count($array), 2);

        // Recursively divide left and right halves
        $left_part = $this->divide(array_slice($array, 0, $mid));
        $right_part = $this->divide(array_slice($array, $mid));

        // Merge the sorted halves
        return $this->merge($left_part, $right_part);
    }

    // Merge two sorted arrays into one
    private function merge(array $left_part, array $right_part): array
    {
        $merge = [];

        // Compare elements from both halves until one is empty
        while (!empty($left_part) && !empty($right_part)) {
            if ($this->sorting_order->name === Order::Ascending->name) {
                // Ascending order: take smaller element first
                $merge[] = ($left_part[0] <= $right_part[0]) ? array_shift($left_part) : array_shift($right_part);
            } else if ($this->sorting_order->name === Order::Descending->name) {
                // Descending order: take larger element first
                $merge[] = ($left_part[0] >= $right_part[0]) ? array_shift($left_part) : array_shift($right_part);
            }
        }

        // Append remaining elements (if any)
        $this->sortedArray = array_merge($merge, $left_part, $right_part);
        return $this->sortedArray;
    }

    // Start the sorting process with chosen order
    public function start(Order $order): void
    {
        $this->sorting_order = $order;
        $this->divide($this->array);
    }

    // Return the sorted array
    public function result(): array
    {
        return $this->sortedArray;
    }
}

// Example usage
$merge_sort = new MergeSort(array: [9, 10, 2, 3, 1]);

// Sort in ascending order
$merge_sort->start(order: Order::Ascending);
$result1 = $merge_sort->result();

// Sort in descending order
$merge_sort->start(order: Order::Descending);
$result2 = $merge_sort->result();

// Print results
print_r($result1);
print_r($result2);
