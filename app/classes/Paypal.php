<?php

namespace app\classes;

use app\interfaces\CheckoutInterface;

class Paypal implements CheckoutInterface
{
    public function frete()
    {
    }
    public function pay()
    {
        return 'pay with Paypal';
    }
}
