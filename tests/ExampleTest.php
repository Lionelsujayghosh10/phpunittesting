<?php
/*run this files using cli write phpunit tests/ExampleTest.php
inside class every function is different test class 
every function name should start test followed by testcase name*/

use PHPUnit\Framework\TestCase;
//use Mockery\Adapter\Phpunit\MockeryTestCase;
class ExampleTest extends  TestCase {

    // public function tearDown(): void{
    //     Mockery::close();
    // }

    public function testAddingTwoPlusTwoResultsInFour(){
        $this->assertEquals(4, 2 + 2);
    }




    
}