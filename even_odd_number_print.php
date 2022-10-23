<?php

//Even & Odd Number Print

class Odd_Even_Number
{
    private array $even = [];
    private array $odd = [];

    private function odd_even_number(array $array): void
    {
        for ($i = 0; $i < sizeof($array) ; $i++) {
            if (($array[$i] % 2) === 0) {
                array_push($this->even, $array[$i]);
            } else {
                array_push($this->odd, $array[$i]);
            }
        }
    }

    public function inp_arr(array $array): void
    {
        $this->odd_even_number($array);

        echo '<br><b>Even Number</b><pre>';
        print_r(
            $this->even
        );

        echo '<br><b>Odd Number</b><pre>';
        print_r(
            $this->odd
        );
    }
}

$obj = new Odd_Even_Number();
$obj->inp_arr([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
