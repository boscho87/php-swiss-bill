<?php

namespace Boscho87\PhpSwissBillTest\src\DataObjects;

use Boscho87\PhpSwissBill\DataObjects\AbstractPaymentRef;
use Boscho87\PhpSwissBill\DataObjects\SOCRPaymentRef;
use Boscho87\PhpSwissBillTest\BaseTestCase;

class SOCRPaymentRefTest extends BaseTestCase
{
    /**
     * @group unit
     */
    public function testIfSocrPaymentRefCanBeCreated(): void
    {
        $socrPaymentRef = SOCRPaymentRef::create('ref');
        $this->assertInstanceOf(AbstractPaymentRef::class, $socrPaymentRef);
        $this->assertInstanceOf(SOCRPaymentRef::class, $socrPaymentRef);
    }
}
