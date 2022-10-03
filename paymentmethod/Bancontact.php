<?php

namespace Plugin\emspay_jtl5\paymentmethod;

use Plugin\emspay_jtl5\redefiners\PaymentRedefiner;

class Bancontact extends PaymentRedefiner
{
    public string $paymentName = 'bancontact';
}