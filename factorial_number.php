<?php

//Print Factorial Number

//approch one
function factorial($n): int
{
    if ($n === 0) {
        return 1;
    } else {
        return ($n * factorial($n - 1));
    }
}
echo factorial(5);

echo '<br><br>';

//approch two
function factorial_number($n):void{
 $a = $n ;
 $b = 0 ;
 for ($i=$n - 1 ; $i > 0 ; $i--) { 
   $b = $a * $i ;
   $a = $b;
 }
 echo $a;
}
factorial_number(10);