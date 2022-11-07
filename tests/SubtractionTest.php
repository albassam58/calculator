<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once __ROOT__.'/Calculator/Calculator.php';
require_once __ROOT__.'/Calculator/Interfaces/OperatorInterface.php';
require_once __ROOT__.'/Calculator/Subtraction.php';

use PHPUnit\Framework\TestCase;

class SubtractionTest extends TestCase
{
    public function test_calculate()
    {
      $inputArray = ["5", "-", "2"];
      $calculator = new Calculator();
      $calculator->setOperator(new Subtraction);
      $calculator->calculate($inputArray);

      $this->assertEquals(3, $calculator->getTotal());
    }
}