<?php 
 //bubble_sort
 function bubble_sort( $array = [] ){
   $array_length = count($array);
   for( $i = 0 ; $i < $array_length ; $i++ ){
      $is_swapp = false;
     for( $j = 0 ; $j < $array_length - $i - 1 ; $j++ ){
         if( $array[$j] > $array[ $j + 1 ] ){
             [ $array[$j] , $array[ $j + 1 ] ] = [ $array[ $j + 1 ] , $array[$j] ];
             $is_swapp = true;
         }
     }
     if(!$is_swapp){
         break;
     }
   }
   return $array;
 }
 
 $array = [2,5,3,8,9];

 echo "<pre>";
 print_r(
     bubble_sort($array)
 );
?>