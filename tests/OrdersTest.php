<?php

use PHPUnit\Framework\TestCase;


class OrdersTest extends TestCase{
    public function tearDown(): void{
        Mockery::close();
    }


    public function testOrderIsProcessedUsingMock(){
        $order = new Orders(3, 1.99);


        $this->assertEquals(5.97, $order->amount);


        $gateway_mock = Mockery::mock('PaymentGateWays');

        $gateway_mock->shouldReceive('charge')->once()->with(5.97);

        $order->process($gateway_mock);

    }



    public function testOrderIsProcessedUsingASPY(){
        $order = new Orders(3, 1.99);


        $this->assertEquals(5.97, $order->amount);


        $gateway_spy = Mockery::spy('PaymentGateWays');

        

        $order->process($gateway_spy);


        $gateway_spy->shouldHaveReceived('charge')->once()->with(5.97);

    }
}