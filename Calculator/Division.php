<?php

class Division implements OperatorInterface
{
  public function compute($inputArray)
  {
    $dividend = (int) $inputArray[0];
    $divisor = (int) $inputArray[2];

    if ($divisor === 0) {
      throw new Exception('Cannot divide to zero.');
    }

    return $dividend / $divisor;
  }
}