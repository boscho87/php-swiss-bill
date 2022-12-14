<?php

namespace Boscho87\PhpSwissBillTest\src\DataObjects;

use Boscho87\PhpSwissBill\DataObjects\AbstractPaymentRef;
use Boscho87\PhpSwissBill\DataObjects\QQRPaymentRef;
use Boscho87\PhpSwissBillTest\BaseTestCase;

class QQRPaymentRefTest extends BaseTestCase
{
    /**
     * @group unit
     */
    public function testIfQqrPaymentRefCanBeCreated(): void
    {
        $qqrPaymentInfo = QQRPaymentRef::create('ref');
        $this->assertInstanceOf(AbstractPaymentRef::class, $qqrPaymentInfo);
        $this->assertInstanceOf(QQRPaymentRef::class, $qqrPaymentInfo);
    }
}
