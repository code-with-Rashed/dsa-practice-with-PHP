<?php 
  //binary_search
  function binary_search( $array = [] , int $find_value ){

    $left = 0 ;
    $right = count($array) - 1 ;

    while( $left <= $right){
       
        $mid = floor( ( $left + $right ) / 2 ) ;

        if( $array[$mid] === $find_value ){

            printf("[%s]=>%s" , $mid , $array[$mid] );

            return ;
        }

        if( $array[$mid] < $find_value ){

            $left = $mid + 1 ;

        }else{
            
            $right = $mid - 1 ;

        }
    }

    printf( "Value (%s) Not Found !!!" , $find_value );

    return ;

  }

  $array = [1,2,3,4,5,10,20,30,40,50];
  $find_value = 50 ;

  binary_search( $array , $find_value ) ;

?>