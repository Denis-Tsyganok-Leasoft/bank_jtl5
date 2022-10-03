<?php

namespace Plugin\emspay_jtl5\paymentmethod;

use Plugin\emspay_jtl5\redefiners\PaymentRedefiner;

class BankTransfer extends PaymentRedefiner
{
    public string $paymentName = 'bank-transfer';
}