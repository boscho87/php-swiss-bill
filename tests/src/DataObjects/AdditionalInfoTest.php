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

    /**
     * @group unit
     * @dataProvider qrData
     */
    public function testGetQrData(
        string $messageIn,
        ?string $billInformation,
        array $expected
    ): void {
        $info = AdditionalInfo::create(
            $messageIn,
            $billInformation
        );

        $this->assertSame($info->getQrData(), $expected);
    }

    public function qrData(): array
    {
        return [
            [
                'message',
                'billinfo',
                [
                    'message',
                    'EPD',
                    'billinfo',
                ],
            ],
        ];
    }
}
