<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once __ROOT__.'/Calculator/Calculator.php';
require_once __ROOT__.'/Calculator/Interfaces/OperatorInterface.php';
require_once __ROOT__.'/Calculator/Division.php';

use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    public function test_calculate()
    {
      $inputArray = ["6", "/", "2"];
      $calculator = new Calculator();
      $calculator->setOperator(new Division);
      $calculator->calculate($inputArray);

      $this->assertEquals(3, $calculator->getTotal());
    }

    public function test_cannot_divide_by_zero()
    {
      $inputArray = ["5", "/", "0"];
      $calculator = new Calculator();
      $calculator->setOperator(new Division);

      $this->expectException(Exception::class);
      
      $calculator->calculate($inputArray);
    }
}