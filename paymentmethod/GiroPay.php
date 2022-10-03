<?php

namespace Plugin\emspay_jtl5\paymentmethod;

use Plugin\emspay_jtl5\redefiners\PaymentRedefiner;

class GiroPay extends PaymentRedefiner
{
    public string $paymentName = 'giropay';
}