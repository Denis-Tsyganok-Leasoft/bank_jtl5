<?php

namespace Plugin\emspay_jtl5\paymentmethod;

use Plugin\emspay_jtl5\redefiners\PaymentRedefiner;

class KlarnaPayLater extends PaymentRedefiner
{
    public string $paymentName = 'klarna-pay-later';
}