<?php 

  //circuler_queue class
  class Queue{
      private $queue = [] ; //queue array
      private $queue_size = 5 ; //maximum queue size
      private $head = 0 ; //queue head pointer
      private $tail = 0 ; //queue tail pointer

     //This function is enqueue new data in ($queue) array
      function enqueue( int $data ){
          if( ( ( $this->tail + 1 ) % ( $this->queue_size + 1 ) ) === $this->head ){
             print("<br> Queue is full. <br>");
             return ;
          }
          $this->queue[ $this->tail ] = $data ;
          $this->tail = ( $this->tail + 1 ) % ( $this->queue_size + 1 ) ;
      }

      //This function is dequeue from ($queue) array
      function dequeue(){
          if( $this->head === $this->tail ){
            print("<br> Queue is empty. <br>");
            return ;
          }
          $item = $this->queue[ $this->head ];
          $this->head = ( $this->head + 1 ) % ( $this->queue_size + 1 ) ;
          return $item ;
      }

      //This function is returned by current ($queue) array 
      function get_current_queue(){
          return $this->queue ;
      }

  }

 //queue object
  $queue = new Queue();


  $queue->enqueue(1);
  $queue->enqueue(2);
  $queue->enqueue(3);
  $queue->enqueue(4);
  $queue->enqueue(5);

  $queue->dequeue();

  $queue->enqueue(6);

  $queue->dequeue();

  $queue->enqueue(7);

  echo "<pre>";

  print_r(
      $queue->get_current_queue()
   );
?>