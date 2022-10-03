<?php

namespace Plugin\emspay_jtl5\paymentmethod;

use Plugin\emspay_jtl5\redefiners\PaymentRedefiner;

class WeChat extends PaymentRedefiner
{
    public string $paymentName = 'wechat';
}