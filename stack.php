<?php 
   class Stack{

      private $stack = [] ; //stack array
      private $stack_top = 0 ; //stack top pointer
      private $stack_max = 5 ; //assign maximum stack size

      //This function is added new data in ($stack) array
      public function push( int $data ){

          if( $this->stack_top < $this->stack_max ){
             
            $this->stack[ $this->stack_top ] = $data ;
            $this->stack_top = $this->stack_top + 1 ;

          }else{

             print("<br> Stack is full <br>");

          }

      }

      //This function is removed last index from ($stack) array
      public function pop(){

        if( $this->stack_top === 0 ){

            print("<br> Stack is empty . <br>");
            return ;

        }else{

            $this->stack_top = $this->stack_top - 1 ;
            return $this->stack[ $this->stack_top ] ;

        }

      }

      //This function is returned by current ($stack) array
      public function getStack(){
        return $this->stack ;
      }

   }

 $stack = new Stack();

 $stack->push(1);
 $stack->push(2);
 $stack->push(3);
 $stack->push(4);
 $stack->push(5);

 echo "<pre>";

 print_r(

     $stack->getStack()

 );

 $stack->pop();
 $stack->pop();
 $stack->pop();
 $stack->pop();
 $stack->pop();

 $stack->push(6);
 $stack->push(7);
 $stack->push(8);
 $stack->push(9);
 $stack->push(10);

 echo "<pre>";
 
 print_r(

     $stack->getStack()

  );
?>