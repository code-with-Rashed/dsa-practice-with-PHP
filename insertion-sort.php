<?php 
 //insertion_sort
 function insertion_sort( $array = [] ){

     $array_length = count( $array ) ;

     for( $i = 1 ; $i < $array_length ; $i++ ){

        $item = $array[$i] ;

        $j = $i - 1 ;

        while( $j >= 0 && $array[$j] > $item ){
          
            $array[ $j + 1 ] = $array[$j] ;

            $j = $j - 1 ;

        }

        $array[ $j + 1 ] = $item ;

     }
     
     return $array ;
 }

 $array = [2,3,5,7,0] ;

 echo "<pre>" ;

 print_r(
    insertion_sort( $array )
 );

?>