<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once __ROOT__.'/Calculator/Calculator.php';
require_once __ROOT__.'/Calculator/Interfaces/OperatorInterface.php';
require_once __ROOT__.'/Calculator/SquareRoot.php';

use PHPUnit\Framework\TestCase;

class SquareRootTest extends TestCase
{
    public function test_calculate()
    {
      $inputArray = ["9", "sqrt"];
      $calculator = new Calculator();
      $calculator->setOperator(new SquareRoot);
      $calculator->calculate($inputArray);

      $this->assertEquals(3, $calculator->getTotal());
    }
}