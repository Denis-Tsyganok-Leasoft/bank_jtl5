<?php

namespace Plugin\emspay_jtl5\paymentmethod;

use Plugin\emspay_jtl5\redefiners\PaymentRedefiner;

class TikkiePaymentRequest extends PaymentRedefiner
{
    public string $paymentName = 'tikkie-payment-request';
}