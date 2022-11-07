<?php

class Addition implements OperatorInterface
{
  public function compute($inputArray)
  {
    $addend1 = (int) $inputArray[0];
    $addend2 = (int) $inputArray[2];
    return $addend1 + $addend2;
  }
}