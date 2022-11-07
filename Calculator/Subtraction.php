<?php

class Subtraction implements OperatorInterface
{
  public function compute($inputArray)
  {
    $minuend = (int) $inputArray[0];
    $subtrahend = (int) $inputArray[2];
    return $minuend - $subtrahend;
  }
}