<?php
Route::get('/payment', function (\Devmauro\Payment\PaymentProcessorInterface $paymentProcessor) {
    return $paymentProcessor->pay();
})->name('payment');

