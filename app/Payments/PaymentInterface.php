<?php

namespace App\Payments;

interface PaymentInterface
{
    public function createPayment();
    public function pay();
}
