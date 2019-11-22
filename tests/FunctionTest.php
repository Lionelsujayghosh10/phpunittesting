<?php


use \PHPUnit\Framework\TestCase;

class FunctionTest extends  TestCase {


    public function testAddReturnsTheCorrectSum(){
        require 'functions.php';
        $this->assertEquals(4, add(2, 2));
        $this->assertEquals(5, add(3, 2));
    }


    public function testAddDoesNotReturnTheIncorrectSum(){
        $this->assertNotEquals(5, add(2, 2));
    }

}


