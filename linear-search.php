<?php 
  //linear_search
  function linear_search($array = [] , int $find_value){
      $array_length = count($array);
      for( $i = 0 ; $i < $array_length ; $i++ ){
         if( $array[$i] === $find_value ){
             printf("[%s]=>%s",$i,$array[$i]);
             return true;
         }
      }
    printf("This value (%s) not found!!" , $find_value);
    return false;
  }

  $array = [1,2,3,4,5,6,7,8];
  $find_value = 4;
  linear_search($array , $find_value);
?>