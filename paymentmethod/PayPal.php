<?php

namespace Plugin\emspay_jtl5\paymentmethod;

use Plugin\emspay_jtl5\redefiners\PaymentRedefiner;

class PayPal extends PaymentRedefiner
{
    public string $paymentName = 'paypal';
}