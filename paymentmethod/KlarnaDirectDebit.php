<?php

namespace Plugin\emspay_jtl5\paymentmethod;

use Plugin\emspay_jtl5\redefiners\PaymentRedefiner;

class KlarnaDirectDebit extends PaymentRedefiner
{
    public string $paymentName = 'klarna-direct-debit';
}