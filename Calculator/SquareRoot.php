<?php

class SquareRoot implements OperatorInterface
{
  public function compute($inputArray)
  {
    $number = (int) $inputArray[0];

    return sqrt($number);
  }
}