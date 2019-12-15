<?php

class orders{
    public $quantity;
    public $unit_price;
    public $amount;


    public function __construct(int $quantity, float $unit_price){
        $this->quantity = $quantity;

        $this->unit_price = $unit_price;

        $this->amount = $quantity * $unit_price;

    }


    public function process(PaymentGateWays $gateway){
        $gateway->charge($this->amount);
    }
}