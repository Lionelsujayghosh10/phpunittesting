<?php

use PHPUnit\Framework\TestCase;


class OrderTest extends TestCase{
    public function testOrderIsProcessed(){
        $gateway = $this->createMock('PaymentGateway');
        $order = new Order($gateway);
        $order->amount = 200;
        $this->assertTrue($order->process());

    }
}