<?php

namespace Boscho87\PhpSwissBillTest\src\DataObjects;

use Boscho87\PhpSwissBill\DataObjects\SOCRPaymentRef;
use Boscho87\PhpSwissBillTest\BaseTestCase;

class SOCRPaymentRefTest extends BaseTestCase
{
    /**
     * @group unit
     */
    public function testIfSOCRPaymentRefCanBeCreated(): void
    {
        $socrPaymentRef = SOCRPaymentRef::create('ref');
        $this->assertEquals(['todo'], $socrPaymentRef->getQrData());
    }
}
