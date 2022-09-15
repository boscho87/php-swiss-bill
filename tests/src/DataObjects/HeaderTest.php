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
        $this->assertEquals(['todo'], $header->getQrData());
    }
}
