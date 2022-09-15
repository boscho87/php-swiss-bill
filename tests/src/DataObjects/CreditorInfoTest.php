<?php

namespace Boscho87\PhpSwissBillTest\src\DataObjects;

use Boscho87\PhpSwissBill\DataObjects\CreditorInfo;
use Boscho87\PhpSwissBillTest\BaseTestCase;

class CreditorInfoTest extends BaseTestCase
{
    /**
     * @group unit
     */
    public function testIfCreditorInfoCanBeCreated(): void
    {
        $creditorInfo = CreditorInfo::create('iban');
        $this->assertInstanceOf(CreditorInfo::class, $creditorInfo);
    }
}
