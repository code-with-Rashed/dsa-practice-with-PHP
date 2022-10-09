<?php
//This Script Printed Prime & Not Prime Number

//Check Prime & Not Prime Number
function check_prime_number(int $number): string
{
  $flag = 0;
  for ($i = 2; $i < $number; $i++) {
    if (($number % $i) == 0) {
      $flag = 1;
      break;
    }
  }
  if ($flag == 1) {
    return 'not_prime';
  } else {
    return 'prime';
  }
}


//Print Prime & Not Prime Numbers
function print_prime_number(int $number): void
{
  $prime = '';
  $not_prime = '';
  for ($i = 1; $i < $number; $i++) {
    $number_status = check_prime_number($i);
    if ($number_status === 'prime') {
      $prime .= $i . ' , ';
    } else if ($number_status === 'not_prime') {
      $not_prime .= $i . ' , ';
    }
  }
  echo "
  <div>
  <p>
  Number Range
  <strong>
   1 to $number
  </strong>
  </p>
  <div>
  <b>Prime Numbers = </b>
  <span>$prime</span>
  </div>
  <br>
  <div>
  <b>Not Prime Numbers = </b>
  <span>$not_prime</span>
  </div> 
  </div>
  <br>
  <br> 
  ";
}

print_prime_number(10);
print_prime_number(31);
print_prime_number(100);
