<?php
/*run this files using cli write phpunit tests/ExampleTest.php
inside class every function is different test class 
every function name should start test followed by testcase name*/

use \PHPUnit\Framework\TestCase;

class ExampleTest extends  TestCase {



    public function testAddingTwoPlusTwoResultsInFour(){
        $this->assertEquals(4, 2 + 2);
    }


    
}