<?php 
  // selection_sort
  function selection_sort( $array = [] ){

      $array_length = count( $array );

      for( $i = 0 ; $i < $array_length - 1 ; $i++ ){ 

          $min_index = $i ;

          for( $j = $i + 1 ; $j < $array_length ; $j++ ){

            if( $array[$j] < $array[$min_index] ){
                $min_index = $j ;
            }

          }

          if( $min_index !== $i ){
              [ $array[$i] , $array[$min_index] ] = [ $array[$min_index] , $array[$i] ];
          }

      }

      return $array ;
  }

  $array = [7,9,1,0,2,4] ;
  
  echo "<pre>" ;

  print_r(
    selection_sort( $array )
  );
?>