<?php

use \PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase{
    public function testAddingTwoPlusTwoResultsInFour() {
        $this->assertEquals(4, 2+2);
    }

    public function testAddTwoNumbers() {
        require 'functions.php';
        $this->assertEquals(4, add(2, 2));
    }

    public function testAddReturnsIncorrectSum() {
        $this->assertNotEquals(5, add(2, 2));
    }

    public function testTrueIsTrue() {
        $assertvalue = true;
        // Assert function to test whether assert
        // value is true or not
        $this->assertTrue(
            $assertvalue,
            "assert value is true or not"
        );
    }
}
