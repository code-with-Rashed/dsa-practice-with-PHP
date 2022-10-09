<?php
//Fibonacci Number Print
function fibonacci(int $limit): void
{
    $a = 0;
    $b = 1;
    $c = 0;

    echo "<br><div>Fibonacci Number Range 0 to $limit</div><br>";

    for ($i = 0; $i < $limit; $i++) {
        echo $a;

        $a = $a + $b;
        $b = $c;
        $c = $a;

        echo '<br>';
    }
}
fibonacci(10);
fibonacci(20);
