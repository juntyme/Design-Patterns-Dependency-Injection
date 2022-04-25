<?php

namespace app\classes;

use app\interfaces\CheckoutInterface;

class Pagseguro implements CheckoutInterface
{
    public function frete()
    {
    }

    public function pay()
    {
        return 'pay with pagseguro';
    }
}
