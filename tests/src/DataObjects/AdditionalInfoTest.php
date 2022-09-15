<?php

namespace Boscho87\PhpSwissBillTest\src\DataObjects;

use Boscho87\PhpSwissBill\DataObjects\AdditionalInfo;
use Boscho87\PhpSwissBillTest\BaseTestCase;

class AdditionalInfoTest extends BaseTestCase
{
    /**
     * @group unit
     */
    public function testIfAdditionalInfoCanBeCreated(): void
    {
        $info = AdditionalInfo::create('Message in a Bottle');
        $this->assertInstanceOf(AdditionalInfo::class, $info);
    }
}
