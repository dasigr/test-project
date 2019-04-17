<?php

use TestProject\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase {
  
  public function testAdd() {
    $calculator = new Calculator();
    $result = $calculator->add(2, 3);
    $this->assertEquals(6, $result);
  }
}
