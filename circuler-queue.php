<?php

class CirqulerQueue
{
    private array $queue = [];
    private int $limit = 5;
    private int $size = 0;
    private int $head = 0;
    private int $tail = 0;

    public function __construct(int $limit)
    {
        $this->limit = $limit;
    }

    public function is_queue_full(): bool
    {
        if ($this->size === $this->limit) {
            return true; // Queue is full
        }
        return false;
    }

    public function is_queue_empty(): bool
    {
        if ($this->size === 0) {
            return true; // Queue is empty
        }
        return false;
    }

    public function en_queue(int $data)
    {
        if (!$this->is_queue_full()) {
            $this->queue[$this->tail] = $data;
            $this->tail = ($this->tail + 1) % $this->limit;
            $this->size = $this->size + 1;
            return true; // Add new item in the queue
        }
        return false; // Queue is full;
    }

    public function peek()
    {
        return $this->queue[$this->head];
    }

    public function de_queue()
    {
        if (!$this->is_queue_empty()) {
            $this->queue[$this->head] = null;
            $this->head = ($this->head + 1) % $this->limit;
            $this->size = $this->size - 1;
            return true; // Queue item is remove
        }
        return false; // Queue is empty
    }
    public function print_queue()
    {
        print_r($this->queue);
    }
}

$queue = new CirqulerQueue(limit: 5);

$queue->en_queue(1);
$queue->en_queue(2);
$queue->en_queue(3);
$queue->en_queue(4);
$queue->en_queue(5);

$queue->peek(); // 1
$queue->de_queue();

$queue->peek(); // 2
$queue->de_queue();

$queue->en_queue(6);
$queue->en_queue(7);

$queue->en_queue(8); // false - Queue is full

$queue->print_queue();
