<?php

namespace Boscho87\PhpSwissBillTest\src\DataObjects;

use Boscho87\PhpSwissBill\DataObjects\AbstractPaymentRef;
use Boscho87\PhpSwissBill\DataObjects\NONPaymentRef;
use Boscho87\PhpSwissBillTest\BaseTestCase;

class NONPaymentRefTest extends BaseTestCase
{
    /**
     * @group unit
     */
    public function testIfNONPaymentRefCanBeCreated(): void
    {
        $nonRef = NONPaymentRef::create('my reference');
        $this->assertInstanceOf(AbstractPaymentRef::class, $nonRef);
        $this->assertInstanceOf(NONPaymentRef::class, $nonRef);
    }
}
