<?php

//Check Parentheses Valid or not

class valid_parentheses
{
  private array $stack = [];
  private int $top = 0;

  //Check opening parentheses
  private function opening_parentheses(string $parentheses): bool
  {
    return match ($parentheses) {
      '(', '{', '[' => true,
      default => false
    };
  }

  //Check closing parentheses
  private function closing_parentheses(string $parentheses): bool
  {
    return match ($parentheses) {
      ')', '}', ']' => true,
      default => false
    };
  }

  //Checking valid parentheses
  private function valid_parentheses(string $parentheses): bool
  {
    for ($i = 0; $i < strlen($parentheses); $i++) {
      if ($this->opening_parentheses($parentheses[$i])) {
        array_push($this->stack, $parentheses[$i]);
        $this->top++;
      } else if ($this->closing_parentheses($parentheses[$i])) {
        $this->top--;

        if ($this->top < 0) {
          return false;
        }

        if ($this->stack[$this->top] === '(') {
          array_pop($this->stack);
        } else if ($this->stack[$this->top] === '{') {
          array_pop($this->stack);
        } else if ($this->stack[$this->top] === '[') {
          array_pop($this->stack);
        }
      } else {
        return false;
      }
    }

    if (empty($this->stack)) {
      return true;
    } else {
      return false;
    }
  }

  //Get parentheses then checking valid parentheses.
  public function parentheses(string $parentheses): bool
  {
    if ($this->valid_parentheses($parentheses)) {
      return true;
    } else {
      return false;
    }
  }
}

$parentheses_object = new valid_parentheses();

$input_parentheses_one = "({[]})";
$status = $parentheses_object->parentheses($input_parentheses_one);
var_dump($status);

echo '<br>';

$input_parentheses_two = "({[]}";
$status = $parentheses_object->parentheses($input_parentheses_two);
var_dump($status);