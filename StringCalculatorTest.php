<?php

include('vendor/autoload.php');
include('StringCalculator.php');

class StringCalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function test_StringCalculator_AcceptsOneNumber_AndReturnsIt()
    {
        $this->assertEquals(1, (new StringCalculator())->add(1));
    }
}