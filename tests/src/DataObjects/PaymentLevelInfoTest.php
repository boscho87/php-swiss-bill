<?php

namespace Boscho87\PhpSwissBillTest\src\DataObjects;

use Boscho87\PhpSwissBill\DataObjects\PaymentLevelInfo;
use Boscho87\PhpSwissBillTest\BaseTestCase;

class PaymentLevelInfoTest extends BaseTestCase
{
    public function testIfPaymentLevelInfoCanBeCreated(): void
    {
        $paymentLevelInfo = PaymentLevelInfo::create('CHF', 10);
        $this->assertEquals(['todo'], $paymentLevelInfo);
    }
}
