<?php

class Calculator
{

  protected $total;
  protected $operator;

  public function getTotal()
  {
    return $this->total;
  }

  public function setOperator(OperatorInterface $operator)
  {
    $this->operator = $operator;
  }

  public function calculate($inputArray)
  {
    $this->total = $this->operator->compute($inputArray);
  }
}