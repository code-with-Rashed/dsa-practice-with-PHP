<?php 
  //How do I check if a given string (word) is a palindrome

  function this_str_is_palindrome( string $string ){

      $string = strtolower($string) ; //string (word) value convert to lowercase
      $left = 0 ; 
      $right = strlen( $string ) - 1  ; //total string (word) length count and - 1

      while( $left < $right ){

          if( $string[$left] !== $string[$right] ){
             printf( "<br> This word (%s) is not palindrome . <br>" , $string );
             return false; 
          }

          $left++ ;
          $right-- ;
      }

      printf( "<br> This word (%s) is palindrome . <br>" , $string );
      return true;

  }

  this_str_is_palindrome( "noon" ); 
  this_str_is_palindrome( "dad" );  
  this_str_is_palindrome( "level" );
  this_str_is_palindrome( "jhon" ); 



  //easy approach

  function is_palindrome( string $string ){
      $string_reverse = strrev($string);
      echo "<br>";
      echo ( strtolower($string) === strtolower($string_reverse ) ) ? "is_palindrome" : "is_not_palindrome" ;
      echo "<br>";
      return ;
  }

  is_palindrome( "dad" );
  is_palindrome( "mom" );
  is_palindrome( "noon" );
  is_palindrome( "hello" );
?>