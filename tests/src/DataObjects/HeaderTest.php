<?php

namespace Boscho87\PhpSwissBillTest\src\DataObjects;

use Boscho87\PhpSwissBill\DataObjects\Header;
use Boscho87\PhpSwissBillTest\BaseTestCase;

class HeaderTest extends BaseTestCase
{
    /**
     * @group unit
     */
    public function testIfHeaderCanBeCreated(): void
    {
        $header = Header::createDefault();
        $this->assertInstanceOf(Header::class, $header);
    }

    /**
     * @group unit
     */
    public function testIfDefaultHeaderHasExpectedQrData(): void
    {
        $header = Header::createDefault();
        $this->assertEquals([
            Header::QR_TYPE,
            Header::VERSION,
            Header::CODING,
        ], $header->getQrData());
    }
}
