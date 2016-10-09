<?php

include('vendor/autoload.php');
include('StringCalculator.php');

class StringCalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function test_StringCalculator_AcceptsNull_AndReturnsZero()
    {
        $this->assertEquals(0, (new StringCalculator())->add());
    }
}
