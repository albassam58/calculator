<?php

class Multiplication implements OperatorInterface
{
  public function compute($inputArray)
  {
    $multiplicand = (int) $inputArray[0];
    $multiplier = (int) $inputArray[2];
    return $multiplicand * $multiplier;
  }
}