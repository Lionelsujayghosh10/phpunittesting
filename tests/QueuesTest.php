<?php

use \PHPUnit\Framework\TestCase;
//fixture and setup
class QueuesTest extends TestCase {

    protected static  $queue;
    /*
    protected $queue;
    //call before every test method
    protected function setUp(): void {
        $this->queue = new Queue();
    }

    //call after every test method
    protected function tearDown(): void{
        unset($this->queue);
    }
    */

    //call before every test method
    protected function setUp(): void {
        static::$queue->clear();
    }



    // call before first test method
    public static function setUpBeforeClass(): void{
        static::$queue = new Queue();
    }

    // call after last test method
    public static function tearDownAfterClass(): void{
        static::$queue = null;
    }

    public function testNewQueueIsEmpty() {
        $this->assertEquals(0, static::$queue->getCount());
    }



    public function testAnItemIsAddedToTheQueue(){
        static::$queue->push('green');
        $this->assertEquals(1, static::$queue->getCount());
    }


    public function testAnItemIsRemoveFromTheQueue(){
        static::$queue->push('green');
        $item = static::$queue->pop();
        $this->assertEquals(0, static::$queue->getCount());
        $this->assertEquals('green', $item);
    }


    public function testAnItemIsRemoveFromTheFromTheFrontOfTheQueue(){
        static::$queue->push('first');
        static::$queue->push('second');

        $this->assertEquals('first', static::$queue->pop());
    }


    public function testMaxNumberOfItemCanBeAdded() {
        for ($i = 0; $i < Queue::MAX_ITEMS; $i++){
            static::$queue->push($i);
        }
        $this->assertEquals(Queue::MAX_ITEMS, static::$queue->getCount());

    }

    public function testExceptionThrownWhenAddingAnItemToAFullQueue(){
        for ($i = 0; $i < Queue::MAX_ITEMS; $i++){
            static::$queue->push($i);
        }
        $this->expectException(QueueException::class);
        $this->expectExceptionMessage("Queue is full");
        static::$queue->push('SUJAY GHOSH');
    }
}