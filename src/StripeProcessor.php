<?php
namespace Devmauro\Payment;

class StripeProcessor implements PaymentProcessorInterface
{
    public function pay()
    {
        return 'pay with stripe';
    }
}