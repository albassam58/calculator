<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once __ROOT__.'/Calculator/Validator.php';

use PHPUnit\Framework\TestCase;

class ValidationTest extends TestCase
{

  public function test_valid_addition_input()
  {
    $input = "5 + 2";
    $validator = new Validator($input);
    $operator = $validator->getOperator();
    $this->assertEquals("Addition", $operator);
  }

  public function test_valid_subtraction_input()
  {
    $input = "5 - 2";
    $validator = new Validator($input);
    $operator = $validator->getOperator();
    $this->assertEquals("Subtraction", $operator);
  }

  public function test_valid_multiplication_input()
  {
    $input = "5 * 2";
    $validator = new Validator($input);
    $operator = $validator->getOperator();
    $this->assertEquals("Multiplication", $operator);
  }

  public function test_valid_division_input()
  {
    $input = "6 / 2";
    $validator = new Validator($input);
    $operator = $validator->getOperator();
    $this->assertEquals("Division", $operator);
  }

  public function test_valid_square_root_input()
  {
    $input = "9 sqrt";
    $validator = new Validator($input);
    $operator = $validator->getOperator();
    $this->assertEquals("SquareRoot", $operator);
  }

  public function test_invalid_input()
  {
    $input = "5  + 2";
    $validator = new Validator($input);

    $this->expectException(Exception::class);
    
    $validator->getOperator();
  }
}