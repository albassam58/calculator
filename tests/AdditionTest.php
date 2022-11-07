<?php
define('__ROOT__', dirname(dirname(__FILE__)));

require_once __ROOT__.'/Calculator/Calculator.php';
require_once __ROOT__.'/Calculator/Interfaces/OperatorInterface.php';
require_once __ROOT__.'/Calculator/Addition.php';

use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    public function test_calculate()
    {
      $inputArray = ["5", "+", "2"];
      $calculator = new Calculator();
      $calculator->setOperator(new Addition);
      $calculator->calculate($inputArray);

      $this->assertEquals(7, $calculator->getTotal());
    }
}