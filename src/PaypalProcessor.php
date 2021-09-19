<?php
namespace Devmauro\Payment;

class PaypalProcessor implements PaymentProcessorInterface
{
    public function pay()
    {
        return 'pay with paypal';
    }
}