<?php

namespace Plugin\emspay_jtl5\paymentmethod;

use Plugin\emspay_jtl5\redefiners\PaymentRedefiner;

class ApplePay extends PaymentRedefiner
{
    public string $paymentName = 'apple-pay';
}