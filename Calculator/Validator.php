<?php

class Validator
{
  protected $input;

  public function __construct($input)
  {
    $this->input = $input;
  }

  public function explodeInput()
  {
    $inputArray = explode(' ', $this->input);
    return $inputArray;
  }

  public function getOperator()
  {
    $inputArray = $this->explodeInput();
    if (count($inputArray) === 3 && $inputArray[1] === '+') {
      $operator = 'Addition';
    } else if (count($inputArray) === 3 && $inputArray[1] === '-') {
      $operator = 'Subtraction';
    } else if (count($inputArray) === 3 && $inputArray[1] === '*') {
      $operator = 'Multiplication';
    } else if (count($inputArray) === 3 && $inputArray[1] === '/') {
      $operator = 'Division';
    } else if (count($inputArray) === 2 && $inputArray[1] === 'sqrt') {
      $operator = 'SquareRoot';
    } else {
      throw new Exception('Invalid input.');
    }

    return $operator;
  }
}