<?php

namespace Boscho87\PhpSwissBillTest\src\DataObjects;

use Boscho87\PhpSwissBill\DataObjects\QQRPaymentRef;
use Boscho87\PhpSwissBillTest\BaseTestCase;

class QQRPaymentRefTest extends BaseTestCase
{
    /**
     * @group unit
     */
    public function testIfQQRPaymentRefCanBeCreated(): void
    {
        $qqrPaymentInfo = QQRPaymentRef::create('ref');
        $this->assertEquals(['todo'], $qqrPaymentInfo);
    }
}
