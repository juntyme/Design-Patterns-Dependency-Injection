<?php

namespace app\classes;

use app\interfaces\CheckoutInterface;

class Checkout
{
    private $payment;

    public function __construct(CheckoutInterface $payment)
    {
        $this->payment = $payment;
    }

    public function payment()
    {
        $this->payment->frete();
        return $this->payment->pay();
    }
}
