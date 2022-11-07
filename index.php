<?php

require_once 'Calculator/Calculator.php';
require_once 'Calculator/Validator.php';
require_once 'Calculator/Interfaces/OperatorInterface.php';
require_once 'Calculator/Addition.php';
require_once 'Calculator/Subtraction.php';
require_once 'Calculator/Multiplication.php';
require_once 'Calculator/Division.php';
require_once 'Calculator/SquareRoot.php';

echo "Input: ";
$input = trim(fgets(STDIN));

try {
  $validator = new Validator($input);
  $inputArray = $validator->explodeInput();
  $operator = $validator->getOperator();

  $calculator = new Calculator();
  $calculator->setOperator(new $operator);
  $calculator->calculate($inputArray);

  echo "Output: " . $calculator->getTotal(), "\n";
} catch (Exception $e) {
  echo $e->getMessage();
}
?>