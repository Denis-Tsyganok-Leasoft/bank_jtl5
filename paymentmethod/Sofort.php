<?php

namespace Plugin\emspay_jtl5\paymentmethod;

use Plugin\emspay_jtl5\redefiners\PaymentRedefiner;

class Sofort extends PaymentRedefiner
{
    public string $paymentName = 'sofort';
}