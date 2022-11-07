<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once __ROOT__.'/Calculator/Calculator.php';
require_once __ROOT__.'/Calculator/Interfaces/OperatorInterface.php';
require_once __ROOT__.'/Calculator/Multiplication.php';

use PHPUnit\Framework\TestCase;

class MultiplicationTest extends TestCase
{
    public function test_calculate()
    {
      $inputArray = ["5", "*", "2"];
      $calculator = new Calculator();
      $calculator->setOperator(new Multiplication);
      $calculator->calculate($inputArray);

      $this->assertEquals(10, $calculator->getTotal());
    }
}